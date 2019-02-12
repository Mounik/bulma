<?php
    if($_POST){
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

        $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";
        $subject="$objet";

        $destinataire="mounicou@gmail.com";

        $body="$message";

        if(mail($destinataire,$subject,$body,$headers)) {
            $response['status'] = 'success';
            $response['msg'] = 'votre mail à bien été envoyé !';
        } else {
            $response['status'] = 'error';
            $response['msg'] = 'Une erreur est survenue';
        }
        echo json_encode($response);
    }
?>