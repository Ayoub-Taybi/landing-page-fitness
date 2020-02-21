<?php

session_start();

    if(isset($_POST["add_GoogleAnalytics"])){

        if(empty($_POST["Scriptgoogle"])){

            $_SESSION['error_msg']="<center>Field is empty !!!</center>";
            header("Location:../Google_Analytics.php");
            exit();
        
        }
        else{


           $myfile=fopen("../../js/Script_GoogleAnalytics.js","w+") or die("Unable to open file!");
           fwrite($myfile,$_POST["Scriptgoogle"]);
           fclose($myfile);
           $_SESSION['success_msg']="<center>Your script Google Analytics was added successfully</center>";
           header("Location:../Google_Analytics.php?added");
           exit();
        }

       
       


    }


?>