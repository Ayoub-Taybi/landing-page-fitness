<?php 

ob_start(); 

session_start();

$title_page="Whatssap";

if(!isset($_SESSION['email'])){

    header("Location:login.php");
    exit();

}

include "includes/connect.php" ;



?>



<html>
   
   <?php include "includes/header.php" ?>

    <body class="admin">
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
     <?php include "includes/sidebar.php" ;?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-dark" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

      <div class="container-fluid">
       
        <div class="container">
        <div class="form-whatsapp text-right">
            <div class="form-content text-center">
                <i class="fa fa-whatsapp"></i>
                <h4>add whatsapp number</h4>
                <p>Lorem ipsum, dolor sit amet consectetur.</p>
            </div>

           
            <?php 





                global $con;

                     $sql = "SELECT * from whatsapp limit 1";
                     $stmt= $con->prepare($sql);
                     $stmt->execute();
                     $resultat=$stmt->fetch();

                     if($stmt->rowCount()==0){

                         echo " <form action='includes/add_whatsapp.php' method='POST'>

                         <div class='form-check form-check-inline'>
             
                         <input class='form-check-input' name='visibility' value='enabled' type='radio'/><label class='form-check-label'>enabled</label>
             
                         </div>
             
                         <div class='form-check form-check-inline'>
             
                         <input class='form-check-input' name='visibility' value='disabled' type='radio' checked/><label class='form-check-label'>disabled</label>
                         </div>
                         <textarea  style='resize:none;' placeholder='enter whatsapp number' name='number_whatsapp' required></textarea>
                     
                          <button type='submit' name='add_numberWhatsapp'><i class='fa fa-plus'></i> Add whatsapp number</button>";          
                     
                        }else{
                        
                       echo " <form action='includes/edite_whatsapp.php' method='POST'>";

                         // test if visibility is disabled for checked radio button disabled
                         if($resultat['Visibility']=="disabled"){

                         echo "<div class='form-check form-check-inline'>
                                <input class='form-check-input' name='visibility' value='enabled' type='radio'/><label class='form-check-label'>enabled</label>
                               </div>
           
                              <div class='form-check form-check-inline'>
                                 <input class='form-check-input' name='visibility' value='disabled' type='radio' checked/><label class='form-check-label'>disabled</label>
                               </div>";

                         }
                         
                         // test if visibility is enabled for checked radio button enabled
                         if($resultat['Visibility']=="enabled"){

                          echo "<div class='form-check form-check-inline'>
                                 <input class='form-check-input' name='visibility' value='enabled' type='radio' checked/><label class='form-check-label'>enabled</label>
                                </div>
            
                               <div class='form-check form-check-inline'>
                                  <input class='form-check-input' name='visibility' value='disabled' type='radio' /><label class='form-check-label'>disabled</label>
                                </div>";
 
                          }  

                           echo   "<textarea  style='resize:none;' placeholder='enter whatsapp number' name='number_whatsapp' required>".$resultat['Number']."</textarea>
                       
                          <button type='submit' name='edit_numberWhatsapp'><i class='fa fa-save'></i> save</button>";
                  
                      }
             

                      if(isset($_SESSION['Success-msg'])){
                
                        echo"<div class='alert alert-success mt-3'>".$_SESSION['Success-msg']."</div>"; 
                       
                       unset($_SESSION['Success-msg']);
                   
                     }
       
                     if(isset($_SESSION['Error-msg'])){
                       
                       echo"<div class='alert alert-danger'>".$_SESSION['Error-msg']."</div>"; 
                      
                      unset($_SESSION['Error-msg']);
                  
                    }

              ?>
            </form>
            
        </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

       <!-- script  -->

       <?php include "includes/footer_script.php" ?>

       <!--End script  -->

    </body>
</html>

<?php ob_end_flush(); ?>