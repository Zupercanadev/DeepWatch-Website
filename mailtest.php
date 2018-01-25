<?php

	// Php Script to send an email to all users who want notifications on any new flags found.
	// Need to add swiftmail license. ALso need to document this page properly

	// Connects to database
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	
	include('dbconnect.php'); 
	require_once '/home/ubuntu/Scripts/email/swiftmailer/lib/swift_required.php';
	
	// Get all the users
	$userQ = "SELECT id,userType FROM entUsrs.users WHERE active='YES'";
	
	
	$userQuery = mysqli_query($dbConnect,$userQ);
  	while($userResult = mysqli_fetch_assoc($userQuery))
	{
		$userID = $userResult['id'];
		//echo $userResult['id'];
		//echo $userResult['userType'];
		// Get user details
		if($userResult['userType'] == 'ent')
		{
			
			$userInfoQuery = "SELECT schoolName,email FROM entUsrs.usrEntInfo WHERE id='$userID'";
			
		}
		else
		{
			$userInfoQuery = "SELECT firstName,email FROM entUsrs.usrInfo WHERE id='$userID'";
		}
		
		$userInfoResult = mysqli_fetch_assoc(mysqli_query($dbConnect,$userInfoQuery));
		
		if(isset($userInfoResult))
		{
				
			$userEmail = $userInfoResult['email'];
			
			if($userResult['userType'] == 'ent')
			{
				$usernameInfo = $userInfoResult['schoolName'];
			}
			else
			{
				$usernameInfo = $userInfoResult['firstName'];
			}
			
			
			//echo $usernameInfo;
			//echo $userEmail;
			
			//Check all users's db for flagged images
			if(mysqli_select_db($dbConnect,$userResult['id']))
			{
				$emailNotifyQ = "SELECT value FROM settings WHERE id='s03'";
				$emailNotifyR = mysqli_fetch_array(mysqli_query($dbConnect,$emailNotifyQ));
				
				
				echo $emailNotifyR['value'];
				
				if($emailNotifyR['value'] == 'ON')
				{
					
					$flagQ = "SELECT imgid FROM flagimgs WHERE viewed = '0'";
					$flagQuery = mysqli_query($dbConnect, $flagQ);
					$numFlags = mysqli_num_rows($flagQuery);
					
					
					
					echo $numFlags;
					
					// Construct message and send emails
					if($numFlags != 0)
					{
						
						// Going to convert this to swift mail. Need to have code that tests if the mail was sent. If not send a report to our server.
						// Also need to add email spam protection
						
						//This part create sthe transport function, Will move this one smtp, Currently just using send mail in php
						$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
						//This creates the actual sender
						$mailer = Swift_Mailer::newInstance($transport);
						
						///Message construction
						$swiftMessage = Swift_Message::newInstance();
						$swiftMessage->setSubject('Safe Spot Daily Report');
						$swiftMessage->setFrom(array('noreply@ssai.tech' => 'SSAI Assistant'));
						$swiftMessage->setTo(array($userEmail));
						$swiftMessage->setBody("Hi, " .$usernameInfo."<br/> <br/> You currently have " .$numFlags. " images that have been flagged as suspicious.<br/>
												To review these flags please click <a href='portal.ssai.tech'>here</a>.
												<br/>
												<br/>
												Thankyou for using Safe Spot!
												<br/>
												<br/>
												<br/><b>Please Note: If you wish to opt out of the Safe Spot daily reports, please select 'off' under 'Email Notifications' on the settings page
												on your dashboard.
												<br/> Any flags that have not been actioned within 30 days will be deleted for security purposes.</b>", 'text/html');
						//$message = "Hey, " .$userResult['realName']." You have " .$numFlags. " unviewed flags.";
						//mail($userResult['email'], 'Safe Spot Daily Report', $message, "From: noreply@ssai.tech");
						
						$sendMail = $mailer->send($swiftMessage);
						
					}
				
				}
			}
		}

	}
	
	
	//$message = "Nic loves the dong!";
	
	//mail('nicpenrose@gmail.com', 'testMsg', $message, "From: test@ssai.tech");

	mysqli_close($dbConnect);

?>