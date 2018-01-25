<?php

//HOST, USER, PASS

$dbConnect = mysqli_connect('ssaidb.cvk2thijvncr.ap-southeast-2.rds.amazonaws.com','usCre','bAyuf-Xasw2BA&','entUsrs') or die('oops connection problem ! --> '.mysqli_error());

     

if(!mysqli_select_db($dbConnect, "entUsrs"))
{
     die('oops database selection problem ! --> '.mysqli_error($dbConnect));

	 }
?>