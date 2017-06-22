<?php
require 'phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$body = $_POST['body'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ogrodyaurora@gmail.com';                 // SMTP username
$mail->Password = 'Ogrody123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('ogrodyaurora@gmail.com', 'Konto obslugujace formularz kontaktowy');
$mail->addAddress('tymi223@gmail.com');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Formularz kontaktowy - ogrodyaurora.pl';
$mail->Body    = '<html>
                    <body>
                    <p>Imie i nazwisko : '.$name.'<br></p>
                    <p>Email : '.$email.'<br></p>
                    Napisał : <br><br>'.$body.'<br>
                    </body>
                  </html>';
$mail->AltBody = 'Imie i nazwisko : '.$name.'Email : '.$email.'Napisał : '.$body;

if(!$mail->send()) {
  echo "<script>window.alert('Nie udało wysłać się wiadomości. <br>Prosimy o bezpośredni kontakt mailowy lub telefoniczny.')</script>";
} else {
  echo "<script>window.alert('Wiadomość wysłana pomyślnie!')</script>";
}
?>
