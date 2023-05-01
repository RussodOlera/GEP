<?php 
//Elisacarrara0704@gmail.com
    $to = "andrigt03@gmail.com";
    $subject = "che film stai guardando?";
    $message = "Fammi sapere se ti e' arrivata questa mail";
    $mail=mail($to,$subject,$message);
    if($mail)
        echo "<alert> mail inviata</alert> ";
        else
        echo "<alert> mail non inviata</alert> ";
?>