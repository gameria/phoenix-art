<?php
if(isset($_POST['submit'])){
	echo "Error ! You Need to submit the form again";
}
$sender_name	=	$_POST['Name'];
$sender_email	=	$_POST['Email'];
$sender_phone	=	$_POST['Phone'];
$sender_message	=	$_POST['Message'];

if (!preg_match(
	"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
	$sender_email))
	{
			$errors .= "\n Error: Invalid email address";
	}

if(empty($sender_email) || empty($sender_phone) || empty($sender_phone)){
	echo "Please ensure Email, Phone & Name are not empty";
	exit;
}

$email_from='phoenixarts20@gmail.com';
$email_subject='New Email Recieved for Art Competition';
$email_body="You Have Recieved a new Email from :\n
Name : $sender_name\n
Phone : $sender_phone\n
Email : $sender_email\n
Message : $sender_message\n
";
$to='phoenixarts20@gmail.com';
$headers="From : $email_from	\r\n";
mail($to,$email_subject,$email_body,$headers);
?>