<!-- Created by Rakesh Balan Lingakumar -->
<?php


if (isset($_POST['formData'])) {
    $formData = $_POST['formData'];

    $resultCode = "failure";

    $name = $formData['name'];
    $email_address = $formData['email'];
    $phone = $formData['phone'];
    $message = $formData['message'];


   
    $to = "rakesh.balan.career@gmail.com";
	$email_subject = "Rescue Mission Game - Contact Form:  $name";
    $email_body = "You have received a new message from the Rescue Mission website.\n"."Here are the details:\n\nName: $name\nEmail: $email_address\nPhone: $phone\nMessage:\n$message\n\n\n***This is an automated response. Please do not reply.***";

    $email_body = wordwrap($email_body, 70, "\r\n");

	$headers = 'From: no-reply@rescuemissiongame.com' . "\r\n";
	$headers .= 'Cc: rakeshbalan07181991@gmail.com' . "\r\n";


	if(mail($to,$email_subject,$email_body,$headers))
    {
        $resultCode = "success";
    }


    $result = array("result" => $resultCode);
    $json = json_encode($result);
    header('Content-Type: application/json');
    echo $json;
}


?>