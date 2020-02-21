<?php 

ob_start();

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


include "connect.php" ;


// when button Enregistrer 

if(isset($_POST['Enregistrer'])){

   
    global $con;

   

    if(isset($_POST['current_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])){


        if($_POST['current_password']!=null && $_POST['new_password']!=null && $_POST['confirm_password']!=null){
        
        
            if($_POST['new_password']==$_POST['confirm_password']){
            

                $stmt=$con->prepare("select count(*) from users where UserID=? and password=?");
                $stmt->execute([$_SESSION['UserID'],sha1($_POST['current_password'])]);
                $resultat=$stmt->fetchColumn();

                if($resultat>0){

                    $stmt=null;
                    $stmt=$con->prepare("update users set password=? where UserID=? and password=?");
                    $stmt->execute([sha1($_POST['new_password']),$_SESSION['UserID'],sha1($_POST['current_password'])]);

                    if($stmt->rowCount()){
                        $_SESSION['Success_msg']="Password was changed successfully";
                        header("Location:../Change_password.php");
                        exit();
                    }

                        header("Location:../Change_password.php");
                        exit();
                    
                }else{

                    $_SESSION['Error_msg']="Your current password is incorrect !!!";
                    header("Location:../Change_password.php");
                        exit();

                }
                
            }
            else{

                $_SESSION['Error_msg']="Password does not match !!!";
                header("Location:../Change_password.php");
                        exit();
            }
        

        }else{

            $_SESSION['Error_msg']="Field is empty !!!";
            header("Location:../Change_password.php");
                        exit();
        }

    }
   
     


}






?>