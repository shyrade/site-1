<?php

      $name = $_POST['name'];
      $email = $_POST['email'];
      $body = $_POST['body'];
      $to = 'asd'

      require 'phpmailer/PHPMailerAutoload.php';

      $mail = new PHPMailer();
      $mail->IsSmtp();
      $mail->SMTPDebug = 1;
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'ssl';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 465;
      $mail->isHTML(false);
      $mail->Username = "asd";
      $mail->Password = "asd";
      $mail->setFrom("asd");
      $mail->Subject = 'Formularz kontaktowy - ogrodyaurora.pl'
      $mail->Body = $body;
      $mail->AddAddress($to);

      if (!$mail->Send()) {
        echo "Błąd przy wysyłaniu";
      }else{
        echo "Wysłano";
      }

?>
