	<?php
if($_POST["submit"]) {
    $recipient="mpluney@gmail.com"; //Enter your mail address
    $subject="Contact from Website"; //Subject 
    $sender=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail Address: $email\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("Location:https://michaelluney.com"); // Set here redirect page or destination page
}
?>
