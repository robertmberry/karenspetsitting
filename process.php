<?php

// print_r( $_POST );
// echo '<br><br>';
// echo $_POST['name'];
// echo '<br><br>';
// echo $_POST['email'];
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

// $to = 'karenberrypetsitting@gmail.com';
// $subject = 'Pet Sitting Inquiry';
// $message = 'Someone is interested in your pet sitting service.';
// $headers = 'From: karenberrypetsitting@gmail.com' . "\r\n" .
//     'Reply-To: karenberrypetsitting@gmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// mail ($to, $subject, $message, $headers);

//redirect to index.php
//go to a thank you page, then have a 10 second wait, then javascript back to main site
//add google analytics to the "Thank You" page


header('location:thankyou.php');


?>