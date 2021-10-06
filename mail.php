<?php

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
