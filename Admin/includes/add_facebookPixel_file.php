<?php

session_start();

    if(isset($_POST["add_facebookPixel"])){

       


           $myfile=fopen("../../js/script_facebookPixel.js","w+") or die("Unable to open file!");
           fwrite($myfile,$_POST["Scriptpixel"]);
           fclose($myfile);
           $_SESSION['success_msg']="<center>Your script facebook pixel was added successfully</center>";
           header("Location:../facebook_pixel.php");
           exit();
     

    }






?>