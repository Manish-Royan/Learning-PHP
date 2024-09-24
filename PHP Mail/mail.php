<?php

$to = 'mesumalla@gmail.com';
$subject = 'Paranam Gurudev';
$message = 'Sir, Big Fan';
$headers = 'From: manishroyanofficial@gmail.com' . "\r\n". 
            'MIME-Version: 1.0' . "\r\n". 'Content-type/html; charset-utf-8';

if(mail($to, $subject, $message, $headers))
{
    echo "email sent"; 
}
else {
    echo "email failed!!";
}
?>