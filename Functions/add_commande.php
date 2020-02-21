<?php

 session_start();

include "../Admin/includes/connect.php" ;


function add_Commande(){

try{

    global $con;
    

    if(isset($_POST["add_commande"])){

        if(empty($_POST["full_name"]) || empty($_POST["email"]) || empty($_POST["phone"]) || empty($_POST["subject"])){

            $_SESSION['Error']="Field is empty !!!";
            header("location:../index.php"); 
            exit();
        
        }
        else{


                     $full_name=filter_var($_POST["full_name"],FILTER_SANITIZE_STRING);
                     $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
                     $phone=filter_var($_POST["phone"],FILTER_SANITIZE_NUMBER_INT);
                     $subject=filter_var($_POST["subject"],FILTER_SANITIZE_STRING);

                     $sql = "INSERT INTO commande (Full_name,Email,Tel,Subject) VALUES (?,?,?,?)";
                     $stmt= $con->prepare($sql);
                     $stmt->execute(array($full_name,$email,$phone,$subject));

                     header("location:../thank_you.php?Commande_added");
                     exit();

                     

        }

       
       


    }

}
catch(Exception $e){

    echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
          ."</div>";        
}


}


add_Commande();

?>