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

   

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['current_password'])){

        if($_POST['username']!=null && $_POST['email']!=null && $_POST['current_password']!=null){


            if($_POST['username']!=$_SESSION['Username'] || $_POST['email']!=$_SESSION['email']){


                if($_POST['email']==$_SESSION['email']){


                    $stmt=$con->prepare("update users set Username=? where UserID=? and password=?");
                    $stmt->execute([$_POST['username'],$_SESSION['UserID'],sha1($_POST['current_password'])]);
        
                    
                if($stmt->rowCount()>0){
        
                    $_SESSION['Username']=$_POST['username'];
                    $_SESSION['success_msg']="Your information profile was updated succssefully ";

                    header("Location:../profile.php?updated");
                    exit();
        
                }
                else{
        
                         $_SESSION['Error_msg']="Password is not correct1";
                         header("Location:../profile.php");
                         exit();
                }
    
    
                }
                else{
    
    
                    $stmt=$con->prepare("select count(*) from users where email=?");
                    $stmt->execute([$_POST['email']]);
                 
                    $resultat=$stmt->fetchColumn();
                       
                    
        
                if($resultat == 0){
        
                    $stmt=$con->prepare("update users set Username=?,email=? where UserID=? and password=?");
                    $stmt->execute([$_POST['username'],$_POST['email'],$_SESSION['UserID'],sha1($_POST['current_password'])]);
    
                    
    
                    if($stmt->rowCount() <= 0){
    
                        $_SESSION['Error_msg']="Password incorret";
                        header("Location:../profile.php");
                        exit();
    
                    }else{

                        $_SESSION['Username']=$_POST['username'];
                        $_SESSION['email']=$_POST['email'];
                        $_SESSION['success_msg']="Your information profile was updated succssefully ";

                        header("Location:../profile.php?updated");
                        exit();

                    }
        
                }
                else{
            
                     $_SESSION['Error_msg']="Email is already used";
                     header("Location:../profile.php");
                     exit();
    
                }
    
    
    
                }

                
            }
           
        }   
        else{
    
            $_SESSION['Error_msg']="Champe is emtpy !!!";
            header("Location:../profile.php");
                    exit();

            }

    }
   
     


}


ob_end_flush();




?>