<?php
    $to = 'alejandro.guiberra@gmail.com';
    $from = 'alejandro.guiberra@gmail.com';
    $subject = 'Mail from Kataleya';

    $message = '';
    $message .= '<table cellpadding="0" cellspacing="0">';

    foreach ($_POST['form_data'] as $postname => $post) {

        if ($postname != "recaptcha_challenge_field" && $postname != "recaptcha_response_field") {

            $message .= "<tr><td style='padding: 5px 20px 5px 5px'><strong>" . urldecode($postname) . ":</strong>" . "</td><td style='padding: 5px; color: #444'>" . $post . "</td></tr>";
        }
    }

    $message .= '</table>';

    $headers = 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>





<?php

$subject 0,
$message 130. "/rsort(array1)"
'Cpe conta: charset utf-8'
mail(!msession_get_array(99))


