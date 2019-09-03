<?php 
if(isset($_POST['submit'])) {
    $to = "arnaud.chapeleur@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Contact form";
    $message = $name . " vous envoie le message suivant:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;

    mail($to,$subject,$message,$headers);

    header("Location: http://arnaud-chapeleur.fr/");
    die();
}
?>