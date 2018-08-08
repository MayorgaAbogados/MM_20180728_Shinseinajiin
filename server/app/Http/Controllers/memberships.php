<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$servername = "localhost";
$username = "mayorgac_admin";
$password = "suaita.monteria";
$dbname = "mayorgac_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$pCompany = "-";
$pIndustry = "-";
$pNit = "-";
$pCity = "-";
$pName = "-";
$pEmail = "-";
$pCellphone = "-";
$pPhone = "-";
$pTwitter = "-";
$pConsult = "-";

$pCompany = $_POST["company"];
$pIndustry = $_POST["industry"];
$pNit = $_POST["nit"];
$pCity = $_POST["city"];
$pName = $_POST["name"];
$pEmail = $_POST["email"];
$pCellphone = $_POST["cellphone"];
$pPhone = $_POST["phone"];
$pTwitter = $_POST["twitter"];
$pConsult = $_POST["consult"];

$sql = "INSERT INTO form_membresia_jul_2018 (company, nit, industry, city, name, email, cellphone, phone, twitter, consulted)
VALUES ('$pCompany', '$pIndustry', '$pNit', '$pCity', '$pName', '$pEmail' , '$pCellphone', '$pPhone', '$pTwitter', '$pConsult')";

if ($conn->query($sql) === TRUE) {

    $message = str_replace(
    array(
      '{{company}}',
      '{{nit}}',
      '{{industry}}',
      '{{city}}',
      '{{name}}',
      '{{email}}',
      '{{cellphone}}',
      '{{phone}}',
      '{{twitter}}',
      '{{consult}}'
    ),
    array(
       $pCompany,
       $pNit,
       $pIndustry,
       $pCity,
       $pName,
       $pEmail,
       $pCellphone,
       $pPhone,
       $pTwitter,
       $pConsult
    ),
    file_get_contents('resources/email-template.html')
);


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions


    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'perseo.yoursitesecure.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'admin@mayorga.com.co';                 // SMTP username
    $mail->Password = 'suaita.monteria';                           // SMTP password
    $mail->Port = 465;   
    $mail->SMTPSecure = 'ssl';

    //Recipients
    $mail->setFrom('admin@mayorga.com.co');
    $mail->addAddress('wallamejorge@hotmail.com');     // Add a recipient

    //Attachments
   // $mail->addAttachment('./resources/mi.pdf');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mayorga Abogados | Nueva Membresia!';
    $mail->Body    = 'Se ha creado un nuevo Leed de Membresia';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->MsgHTML($message);
    try{
        $mail->send();
        echo "Yeah";
        } catch (Exception $e) { 
 echo 'Mailer Error: ' . $e;
        }
 
echo "db is loaded OK";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();






?>