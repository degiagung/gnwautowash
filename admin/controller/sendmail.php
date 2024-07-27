<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $email      = $_POST['email'];
    // $email      = 'degijustin4@gmail.com';
    $nama       = $_POST['nama'];
    $tanggal    = $_POST['tanggal'];
    $jenis      = $_POST['jenis_cucian'];
    $total      = $_POST['total'];
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'myaplication881@gmail.com';                     //SMTP username
    $mail->Password   = 'sqjn wzkj vqod ngth';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('myaplication881@gmail.com', 'GNW AUTOWASH');
    $mail->addAddress($email, $nama);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'BUKTI PEMBAYARAN GNW AUTO WASH';
    $mail->Body     = '<center>GNW AUTO WASH<br><br>';
    $mail->Body    .= '
                        <table>
                            <thead>
                                <tr>
                                    <th>Tanggal Pencucian</th>
                                    <th>:</th>
                                    <th>'.$tanggal.'</th>
                                </tr>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>:</th>
                                    <th>'.$nama.'</th>
                                </tr>
                                <tr>
                                    <th>Jenis Cucian</th>
                                    <th>:</th>
                                    <th>'.$jenis.'</th>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <th>:</th>
                                    <th>'.$total.'</th>
                                </tr>
                            </thead>
                            
                        </table>

    ';
    $mail->Body    .= '<br><br>
                            KAMI TUNGGU KEMBALI KEDATANGANNYA
                                <br>KAMI UCAPKAN TERIMAKASIH
                                    <br><br><br>ALAMAT :
    <br>Jl. Nanjung No.72, Nanjung, Kec. Margaasih, Kabupaten Bandung, Jawa Barat 40217
    </center>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}