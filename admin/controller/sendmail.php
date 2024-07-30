c<?php
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
    $nama       = $_POST['nama'];
    $tanggal    = $_POST['tanggal'];
    $antrian    = $_POST['no_antrian'];
    $jenis      = $_POST['jenis_cucian'];
    $total      = $_POST['total'];
    $bayar      = $_POST['bayar'];
    $kembali    = $_POST['kembali'];
    
    // $email      = 'degijustin4@gmail.com';
    // $nama       = 'dd';
    // $tanggal    = 'dd';
    // $antrian    = 'dd';
    // $jenis      = 'dd';
    // $total      = 70000;
    // $bayar      = 100000;
    // $kembali    = $total-$bayar;
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
    $mail->Body     = '<div style="font-family: cursive;">';
    $mail->Body     .= '<center><h2 ><b>GNW AUTO WASH</h2><br>';
    $mail->Body     .= 'Jl. Nanjung No.72, Nanjung, <br>
                        Kec. Margaasih, Kabupaten Bandung <br>
                        Jawa Barat 40217';
    $mail->Body    .= '
                        <hr style="width:50%;">
                            <table style="width:50%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align:start;">'.$tanggal.'</td>
                                        <td style=""></td>
                                        <td style="text-align:end;">'.$antrian.'</td>
                                    </tr>
                                </tbody>
                            </table>
                        <hr style="width:50%;">
                            BUKTI PEMBAYARAN JASA CUCI<br><br>
                            <table style="width:50%;">
                                <tbody>
                                    <tr>
                                        <td style="text-align:start;">'.$jenis.'</td>
                                        <td style=""></td>
                                        <td style="text-align:end;">Rp.'.$total.'</td>
                                    </tr>
                                </tbody>
                            </table>
                        <hr style="width:50%;">
                            <table style="width:50%;">
                                <tbody>
                                    <tr>
                                        <td style=""></td>
                                        <td style="text-align:end;">Total Pembayaran</td>
                                        <td style="text-align:start;">=</td>
                                        <td style="text-align:end;">Rp.'.$total.'</td>
                                    </tr>
                                    <tr>
                                        <td style=""></td>
                                        <td style="text-align:end;">Bayar</td>
                                        <td style="text-align:start;">=</td>
                                        <td style="text-align:end;">Rp.'.$bayar.'</td>
                                    </tr>
                                    <tr>
                                        <td style=""></td>
                                        <td style="text-align:end;">Kembali</td>
                                        <td style="text-align:start;">=</td>
                                        <td style="text-align:end;">Rp.'.$kembali.'</td>
                                    </tr>
                                </tbody>
                            </table>
    ';
    $mail->Body    .= '<br>
                            "TERIMAKASIH TELAH MENGGUNAKAN JASA KAMI, KAMI TUNGGU KEMBALI KEDATANGANNYA
                                <br>INFORMASI GNW AUTOWASH : <b>0822-2888-4990</b>
                                <h3 style="margin-left: 22%;">@gnw_autowash</center>
    </div>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}