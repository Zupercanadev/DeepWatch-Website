<?php

try {
    require './phpmailer/PHPMailerAutoload.php';

    $recipients = $_POST['recipients'];

    unset($_POST['recipients']);

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }

    function getRemoteIPAddress() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];

        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $_SERVER['REMOTE_ADDR'];
    }

    if (preg_match('/^(127\.|192\.168\.)/', getRemoteIPAddress())) {
        die('MF002');
    }

    $template = file_get_contents('rd-mailform.tpl');
	$autoResponse = file_get_contents('rd-autoResponse.tpl');

    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']){
            case 'contact':
                $subject = 'A message from your site visitor';
                break;
            case 'subscribe':
                $subject = 'Subscribe request';
                break;
            case 'order':
                $subject = 'Order request';
                break;
			case 'request-help':
				$subject = 'DeepWatch_Support:Help Request';
				break;
            default:
                $subject = 'A message from your site visitor';
                break;
        }
    }else{
        die('MF004');
    }

    if (isset($_POST['contact-email'])) {
        $template = str_replace(
            array("<!-- #{FromState} -->", "<!-- #{FromEmail} -->"),
            array("Email:", $_POST['contact-email']),
            $template);
    }

    if (isset($_POST['contact-message'])) {
        $template = str_replace(
            array("<!-- #{MessageState} -->", "<!-- #{MessageDescription} -->"),
            array("Message:", $_POST['contact-message']),
            $template);
    }

    preg_match("/(<!-- #{BeginInfo} -->)(.|\n)+(<!-- #{EndInfo} -->)/", $template, $tmp, PREG_OFFSET_CAPTURE);
    foreach ($_POST as $key => $value) {
        if ($key != "contact-email" && $key != "contact-message" && $key != "form-type" && $key != "g-recaptcha-response" && !empty($value)){
            $info = str_replace(
                array("<!-- #{BeginInfo} -->", "<!-- #{InfoState} -->", "<!-- #{InfoDescription} -->"),
                array("", ucfirst($key) . ':', $value),
                $tmp[0][0]);

            $template = str_replace("<!-- #{EndInfo} -->", $info, $template);
        }
    }

    $template = str_replace(
        array("<!-- #{Subject} -->", "<!-- #{SiteName} -->"),
        array($subject, $_SERVER['SERVER_NAME']),
        $template);

    $mail = new PHPMailer();
	$mail2 = new PHPMailer();
    $mail->From = $_POST['contact-email'];

    # Attach file
    if (isset($_FILES['file']) &&
        $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $mail->AddAttachment($_FILES['file']['tmp_name'],
            $_FILES['file']['name']);
    }

    if (isset($_POST['contact-name'])){
        $mail->FromName = $_POST['contact-name'];
    }else{
        $mail->FromName = "Site Visitor";
    }

    //foreach ($addresses[0] as $key => $value) {
        //$mail->addAddress($value[0]);
    //}

    //$mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
	$mail->setFrom('no-reply@ssai.tech', 'Help Request Handler');
	$mail->AddReplyTo($_POST['contact-email'], $_POST['contact-name']);
    $mail->Username = 'bwoods@ssai.tech';  
    $mail->Password = 'No1w!llguess';           
    $mail->AddAddress('bwoods@ssai.tech');
	
    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);
    $mail->send();
		
	// Auto Reply
	$mail2->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
    $mail2->SMTPAuth = true;  // authentication enabled
    $mail2->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
    $mail2->Host = 'smtp.gmail.com';
    $mail2->Port = 465;
	$mail2->setFrom('no-reply@ssai.tech', 'Support Request Received');
    $mail2->Username = 'bwoods@ssai.tech';  
    $mail2->Password = 'No1w!llguess';           
    $mail2->addAddress($_POST['email']);
	
    $mail2->CharSet = 'utf-8';
    $mail2->Subject = $subject;
    $mail2->MsgHTML($autoResponse);
    $mail2->send();

    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}