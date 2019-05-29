<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subj = $_POST['subject'];
    $message = $_POST['message'];


    $mailTo = "naoufal.yassiri@gmail.com";
    $headers = "FROM: ".$mailFrom;

    mail($mailTo, $subj, $message, $headers);
    header("Location: index.php?mailsend");
   
}


?>