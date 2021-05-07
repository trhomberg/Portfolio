<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    include("private.json");

    $mail = new PHPMailer(true);
if(isset($_POST['submit'])){
    try {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host =      "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = getenv("USERNAME");
        $mail->Password = getenv("PASSWORD");
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $name);
        $mail->addAddress('trhomberg3@gmail.com', 'Thomas');

        $mail->wordwrap = 50;
        $mail->isHTML(true);
        $mail->Subject = "Message sent from contact form";
        $mail->Body = $message;
        
        $mail->send();
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "Message has not been sent.";
        echo "Mailer error: " . $mail->ErrorInfo;
    }
}
?>
