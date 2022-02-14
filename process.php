<?php

session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['type'] = $_POST['type'];

// $name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
$message = $_POST['message'];

// print_r( $_POST );
// echo '<br><br>';
// echo $_POST['name'];
// echo '<br><br>';
// echo $_POST['email'];
// echo '<br><br>';
// echo $_POST['phone'];
// echo '<br><br>';
// echo $_POST['subject'];
// echo '<br><br>';
// echo $_POST['startdate'];
// echo '<br><br>';
// echo $_POST['enddate'];
// echo '<br><br>';
// echo $_POST['message'];

//get data from json

$jsondata = file_get_contents('data.json');

echo '<br><br>';
print_r( $jsondata );

//take the json and turn it into php, add to the json file,  turn it back to javascript, and put it back in the json file

$jsondata = json_decode($jsondata, true);

// echo '<br><br>';
// print_r( $jsondata );

array_unshift($jsondata, $_POST);

// echo '<br><br>';
// print_r( $jsondata );

$jsondata = json_encode($jsondata);

file_put_contents('data.json', $jsondata);

//send to email

$to = 'karenberrypetsitting@gmail.com';
$subject = 'Pet Sitting Inquiry';
$headers = 'From: info@karenspetsitting.com' . "\r\n" .
    'Reply-To: karenberrypetsitting@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = 'Name: '.$_POST['name'].'
Type: '.$_POST['type'].'
Email: '.$_POST['email'].'
Phone: '.$_POST['phone'].'
Subject: '.$_POST['subject'].'
Start Date: '.$_POST['startdate'].'
End Date: '.$_POST['enddate'].'
Message: '.$_POST['message'];

mail ($to, $subject, $message, $headers);

//send to user email

$to = $_POST['email'];
$subject = 'Karen\'s Pet Sitting';
$headers = 'From: info@karenspetsitting.com' . "\r\n" .
    'Reply-To: karenberrypetsitting@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$message = 'Thank you for your email; Karen will be in touch soon!';

mail ($to, $subject, $message, $headers);

//redirect to index.php
//go to a thank you page, then have a 10 second wait, then javascript back to main site
//add google analytics to the "Thank You" page

header('location:thankyou.php');

?>