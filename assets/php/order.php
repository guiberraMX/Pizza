<?php

$path = dirname(__file__);


require $path."/mailer/PHPMailerAutoload.php";




$message = '';

/* Order */

$message .= '<h3>Order</h3>';
$message .= '<table cellpadding="0" cellspacing="0">';
foreach ($_POST['order_items'] as $key => $value) {
  $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($key) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $value . "</td></tr>";
}
$message .= '</table>';

/* Delivery information */

$message .= '<h3>Delivery information</h3>';
$message .= '<table cellpadding="0" cellspacing="0">';
foreach ($_POST['form_data'] as $postname => $post) {
  if ($postname != "recaptcha_challenge_field" && $postname != "recaptcha_response_field" && $postname != 'day' && $postname != 'hour' && $postname != 'minute' && $postname != 'month' && $postname != 'year') {
    $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($postname) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $post . "</td></tr>";
  }
}
$message .= '</table>';

// $headers = 'From: ' . $from . "\r\n" .
// 'Reply-To: ' . $from . "\r\n" .
// 'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
// 'X-Mailer: PHP/' . phpversion();


$subject = 'Pedido a Domicilio';







$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.mympizzas.com.mx';
$mail->SMTPAuth = true;
$mail->Username = 'test@mympizzas.com.mx';
$mail->Password = 'prueba123';
$mail->Port = 25;


$mail->From = 'test@mympizzas.com.mx';
$mail->FromName = 'MyMPizzas';
$mail->addAddress('jjuarez007@gmail.com');
$mail->addAddress('alejandro.guiberra@gmail.com');

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->isHtml(true);



$x = $mail->send();


?>
