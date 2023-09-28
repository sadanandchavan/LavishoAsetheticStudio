<?php

if(isset($_POST)){
	$formok = true;

	//form data
    $result =false;
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	//validation
	if(empty($name) || empty($email) || empty($message)){
		$formok = false;
	}

	if($formok){
		$headers = "From: info@upsada.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p>
                  <p><strong>Name: </strong> {$name} </p>
                  <p><strong>Email Address: </strong> {$email} </p>
                  <p><strong>Message: </strong> {$message} </p> ";

        mail("sadi.chavan@gmail.com","New Enquiry",$emailbody,$headers);

	}
	//header('Location: https://www.upsada.com/');
/*
	if( $result == true ) {
      echo json_encode(array(
         'success'=> true,
         'message' => 'Message sent successfully'
        
      ));
   }else {
      echo json_encode(array(
         'error'=> true,
         'message' => 'Error sending message'
      ));
   }
   */
    
    //echo $result;
        //redirect back to form
         //header('location: ' . $_SERVER['HTTP_REFERER']);
        //echo 'Message has been sent';
        //header('Content-type: application/json; charset=utf-8');
        //echo json_encode('Message has been sent');
        //header('Status: 200');
        //header('HTTP/1.1 200 OK');
//echo 'SUCCESS';
//return;
//$this->response->statusCode(200);
//header('HTTP/1.1 200 OK');
//header('Location: https://www.upsada.com/');

}

 ?>