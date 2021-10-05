<?php
// get data from form  

// $name = $_POST['name'];
// $email= $_POST['email'];
// $message= $_POST['description'];
// $to = "sumant.dusane1966@gmail.com";
// $subject = $_POST['subject'];
// $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
// $headers = "From: noreply@yoursite.com" . "\r\n" .
// "CC: somebodyelse@example.com";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
// redirect
// header("Location:thankyou.html");


if (isset($_POST['submit'])){
    $mailto = "sumant.dusane1966@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Website" . $_POST['subject'];
    $message = "Mail received from website" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $result = mail($mailto, $subject, $message, $headers);

    if($result){
        echo '<script type = "text/javascript">alert("Email Sent Sucessfully")</script>';
    }else{
        echo '<script type = "text/javascript">alert("Ty Again Later")</script>';
    }
}
?>