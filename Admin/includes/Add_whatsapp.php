<?php

 session_start();

include "connect.php" ;



try{

    global $con;
    

    if(isset($_POST["add_numberWhatsapp"])){

        if(empty($_POST["number_whatsapp"])|| empty($_POST["visibility"]) ){

            $_SESSION['Error-msg']="<center>Field is empty !!!</center>";
            header("location:../whatsapp.php"); 
            exit();
        
        }
        else{

                     $phone=filter_var($_POST["number_whatsapp"],FILTER_SANITIZE_NUMBER_INT);

                     $sql = "INSERT INTO whatsapp(Number,Visibility) VALUES (?,?)";
                     $stmt= $con->prepare($sql);
                     $stmt->execute(array($phone,strip_tags($_POST["visibility"])));

                     if($stmt){
                        $_SESSION['Success-msg']="<center>Number whatssap was added successfully</center>";
                        header("location:../whatsapp.php?added_whatssap"); 
                        exit();
                    }else{
                        $_SESSION['Error-msg']="<center>Something is wrong try again</center>";
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