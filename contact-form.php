<?php

if(isset($_POST['Submit'])){
    $Name = $_POST['Name'];
    $Subject = $_POST['Subject'];
    $mailFrom = $_POST['Email'];
    $Message= $_POST['Message'];


    $mailTo = "jnm128@miami.edu";
    $headers ="From: ".$mailFrom;
    $txt = "you have recieved an email from ".$Name.".\n\n".$Message;

    mail($mailTo,$Subject,$txt,$headers);
    header("Location: index.php?mailsend");



}

?>