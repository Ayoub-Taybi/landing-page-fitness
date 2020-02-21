<?php 

ob_start(); 

session_start();

$title_page="Change password";



if(!isset($_SESSION['email'])){

    header("Location:login.php");
    exit();

}





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

            <!-- begin setting -->
       
            <div class="container">
                <div class="row">
                <?php  include "includes/Enregistere_changePassword.php" ; ?>
                      <div class="card card-change my-5">
                        <div class="card-body text-center">
                          <i class="fa fa-lock icon"></i>
                          <h5 class="card-title text-center">Change password </h5>
                          <form class="form-change" action="includes/Enregistere_changePassword.php" method="POST">
                          
                            <div class="form-group">
                              <input type="password" id="inputCurrePassword" name="current_password"  class="form-control" placeholder="Current password" required>
                            </div>        
                            <div class="form-group">           
                              <input type="password" id="inputNewPassword"  name="new_password" class="form-control" placeholder="New Password" >
                            </div>
                            <div class="form-group">
                              <input type="password" id="inputConfirmPassword"  title="Password must match"  name="confirm_password" class="form-control" placeholder="Confirmation new Password" >
                            </div>

                            <button class="btn btn-lg  btn-block text-uppercase"  type="submit" id="buttonEnregistrer" name="Enregistrer">save </button>                          
                            <?php

if(isset($_SESSION['Error_msg'])){
  echo "<div class='alert alert-danger mt-3' role='alert'>
            ".$_SESSION['Error_msg']."
       </div>";
       unset($_SESSION['Error_msg']);
      
 }

 if(isset($_SESSION['Success_msg'])){
  echo "<div class='alert alert-success mt-3' role='alert'>
            ".$_SESSION['Success_msg']."
       </div>";
       unset($_SESSION['Success_msg']);
      
 }
?>
                          </form>
                      </div>
                    </div>
                  </div>
            </div>

            <!-- end setting -->
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