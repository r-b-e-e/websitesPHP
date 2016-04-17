<!-- Created by Rakesh Balan Lingakumar -->
<?php

require_once "Mail.php";

if (isset($_POST['formData'])) {
    $formData = $_POST['formData'];

    $resultCode = "success";

    $name = $formData['name'];
    $email_address = $formData['email'];
    $phone = $formData['phone'];
    $message = $formData['message'];


    $from = 'no.reply.rescue.mission@gmail.com';
//    $to = array('rakesh.balan.career@gmail.com', 's.bhargavram@gmail.com');
    $to = array('rakesh.balan.career@gmail.com');

    $email_subject = "Rescue Mission Game - Contact Form:  $name";
    $email_body = "You have received a new message from the Rescue Mission website.\n"."Here are the details:\n\nName: $name\nEmail: $email_address\nPhone: $phone\nMessage:\n$message\n\n\n***This is an automated response. Please do not reply.***";

    $headers = array(
        'From' => $from,
        'To' => $to,
        'Subject' => $email_subject
    );

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '25',
        'auth' => true,
        'username' => 'no.reply.rescue.mission@gmail.com',
        'password' => 'rescue.mission'
    ));

    $smtp->send($to, $headers, $email_body);


    $result = array("result" => $resultCode);
    $json = json_encode($result);
    header('Content-Type: application/json');
    echo $json;
}


?>