<?php
// require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
// require("vendor/phpmailer/phpmailer/src/SMTP.php");

// if (empty($_POST['captcha'])) {
// 	echo 'Please set recaptcha variable';
// }

// // validate recaptcha
// $response = $_POST['captcha'];
// $post = http_build_query(
//  	array (
//  		'response' => $response,
//  		'secret' => 'YOUR_SECRET_KEY', // your secret key goes here
//  		'remoteip' => $_SERVER['REMOTE_ADDR']
//  	)
// );
// $opts = array('http' => 
// 	array (
// 		'method' => 'POST',
// 		'header' => 'application/x-www-form-urlencoded',
// 		'content' => $post
// 	)
// );
// $context = stream_context_create($opts);
// $serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
// if (!$serverResponse) {
// 	echo 'Failed to validate Recaptcha';
// }
// $result = json_decode($serverResponse);

// if($result -> success) {

//     if($_SERVER["REQUEST_METHOD"] == "POST"){

//         $mail = new PHPMailer\PHPMailer\PHPMailer();
        
//         //From email address and name
//         $mail->From = "info@example.com";
//         $mail->FromName = "Enquiry";
		
//         //To address and name
//         $mail->addAddress("example1@gmail.com");
//         $mail->addAddress("example2@gmail.com"); //Recipient name is optional
        
// 	//Address to which recipient will reply
//         $mail->addReplyTo($_POST['email'], "Reply");
        
// 	//Send HTML or Plain Text email
//         $mail->isHTML(true);
//         $mail->Subject = "Enquiry From example.com";
        
// 	$mail->Body = "<html>
//             <head>
//                 <title>HTML email</title>
//             </head>
//             <body>
//                 <table>
//                     <tr>
//                         <td><strong>Full Name</strong></td><td>:</td><td>".$_POST['name']."</td>					
//                     </tr>
//                     <tr>
//                         <td><strong>Email ID</strong></td><td>:</td><td>".$_POST['email']."</td>					
//                     </tr>
//                     <tr>
//                         <td><strong>Mobile</strong></td><td>:</td><td>".$_POST['phone']."</td>					
//                     </tr>
// 					<tr>
//                         <td><strong>Subject</strong></td><td>:</td><td>".$_POST['subject']."</td>			
//                     </tr>
//                     <tr>
//                         <td><strong>Message</strong></td><td>:</td><td>".$_POST['message']."</td>					
//                     </tr>
//                 </table>
//             </body>
//         </html>";
//         $mail->AltBody = "This is the plain text version of the email content for Testing.";
//         if(!$mail->send()) {
//             echo 'Something went wrong, Try again later!';
//                 // echo $mail->ErrorInfo;
//         } else {
//             echo 'success';
//         }
//     }

// } else if(!$result -> success) {
//     echo 'Please Check the recaptcha and Try again';
// }

echo 'success';

?>
