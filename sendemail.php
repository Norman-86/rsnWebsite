<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'info@rsn.co.ke';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <' .$email_from.'>');

    echo json_encode($status);
    die;
	?>


***********************
<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $to= 'info@nkaimurunya.sc.ke'; 
        $subject = @trim(stripslashes($_POST['subject']));
        $message = @trim(stripslashes($_POST['message'])); 
        $body ='Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "Email Sent Successfully!";
        }
        else{
            echo "Something went wrong!Please try again";
        }
    }
?>