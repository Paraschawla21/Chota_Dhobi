<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'test');

$name_ = $_POST['name'];
$uname_ = $_POST['uname'];
$password_ = $_POST['password'];
$email_ = $_POST['email'];
$mobile_ = $_POST['mobile'];

$sql = "INSERT INTO registration (namee, uname, passwordd, email, mobile) VALUES ('$name_', '$uname_', '$password_', '$email_', '$mobile_')";

mysqli_query($conn, $sql);

$html = "<table><tr><td>Name</td><td>$name_</td></tr><tr><td>Username</td><td>$uname_</td></tr><tr><td>Mobile</td><td>$mobile_</td></tr></table>";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = 'paraschawla1299@gmail.com';
$mail->Password = 'zqroegnarbdytizn';
$mail->SetFrom('paraschawla1299@gmail.com');
$mail->addAddress("$email_");
$mail->IsHTML(true);
$mail->Subject = 'Signed Up To Chota Dhobi';
$mail->Body = $html;

if ($mail->send()) {
    echo "<script>
			alert('Mail Sent Successfully!!');
            </script>";

    die("<script>
                window.location.href = 'signIn.html'
                </script>");
} else {
    echo "<script>
			alert('Unable to send Mail!!');
            </script>";

    die("<script>
                window.location.href = 'signIn.html'
                </script>");
}

mysqli_close($conn);
?>