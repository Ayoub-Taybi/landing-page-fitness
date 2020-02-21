<?php

 session_start();

include "connect.php" ;



try{

    global $con;
    

    if(isset($_POST["add_notification"])){

        if(empty($_POST["title"])|| empty($_POST["paragraph"])|| empty($_POST["delay_start"]) || empty($_POST["delay_rest"]) || empty($_POST["visibility"]) || empty($_FILES['image_noti']['name'])){

            $_SESSION['Error-msg']="<center>Field is empty !!!</center>";
            header("location:../notification.php"); 
            exit();
        
        }
        else{

                $arrayImage = explode('.',basename($_FILES['image_noti']['name']));
                $extension = strtolower(end($arrayImage));
                $name_Image =$arrayImage[0];
                
                $traget_file="../img/".uniqid($name_Image."_").".".$extension;

              
                $title=filter_var($_POST["title"],FILTER_SANITIZE_STRING);
                $paragraph=filter_var($_POST["paragraph"],FILTER_SANITIZE_STRING);
                $delay_start=filter_var($_POST["delay_start"],FILTER_SANITIZE_NUMBER_INT);
                $delay_rest=filter_var($_POST["delay_rest"],FILTER_SANITIZE_NUMBER_INT);
                $visibility=filter_var($_POST["visibility"],FILTER_SANITIZE_STRING);

                     $sql = "INSERT INTO notification (Title,paragraph,date,delay_start,delay_rest,image,visibility) VALUES (?,?,?,?,?,?,?)";
                     $stmt= $con->prepare($sql);
                     $stmt->execute([$title,$paragraph,date('Y-m-d H:i:s'),$delay_start,$delay_rest,$traget_file,$visibility]);

                     if($stmt){

                        move_uploaded_file($_FILES['image_noti']['tmp_name'],$traget_file);
                        $_SESSION['Success-msg']="<center>Your notification was added successfully</center>";
                        header("location:../notification.php?added"); 
                        exit();

                    }else{

                        $_SESSION['Error-msg']="<center>Something is wrong try again</center>";

                     }

                    
            $_SESSION['Error-msg']="<center>Something is wrong try again</center>";
            header("location:../notification.php"); 
            exit();

        }

    }

}
catch(Exception $e){

    echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
          ."</div>";        
}




?>