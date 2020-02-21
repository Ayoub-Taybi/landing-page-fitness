<?php

 session_start();

include "connect.php" ;


try{

    global $con;
    
    if(isset($_POST["edit_numberWhatsapp"])){

        if(empty($_POST["number_whatsapp"])|| empty($_POST["visibility"]) ){

            $_SESSION['Error-msg']="<center>Field is empty !!!</center>";
            header("location:../whatsapp.php"); 
            exit();
        
        }
        else{

                     $phone=filter_var($_POST["number_whatsapp"],FILTER_SANITIZE_NUMBER_INT);

                     $sql = "UPDATE whatsapp SET Number=? , Visibility=?";
                     $stmt= $con->prepare($sql);
                     $stmt->execute(array($phone,strip_tags($_POST["visibility"])));

                     if($stmt->rowCount()>0){
                        $_SESSION['Success-msg']="<center>whatssap was updated successfully</center>";
                        header("location:../whatsapp.php?updated"); 
                        exit();
                    }

                     header("location:../whatsapp.php"); 
                     exit();

        }

       
       


    }

}
catch(Exception $e){

    echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
          ."</div>";        
}




?>