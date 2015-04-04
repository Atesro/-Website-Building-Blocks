<?php
$mail_to = "misterplayerlp@gmail.com";
$mail_subject = "This is an example!";
$mail_from = "From: Test <test@domain.de>";
$mail_message = "This is a test! We test our mail function";

mail($mail_to, $mail_subject, $mail_message, $mail_from);


echo "We have send a mail to <strong>$mail_to</strong>!";
?>
