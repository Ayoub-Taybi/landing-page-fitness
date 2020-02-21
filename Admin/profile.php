<?php 
ob_start(); 
session_start();

$title_page="Profile";



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

            <!-- begin setting -->
       
            <div class="container">
                <div class="row">
                <?php  include "includes/Enregistrer_profile.php" ; ?>
                      <div class="card card-change my-5">
                        <div class="card-body text-center">
                        <i class="fa fa-user icon"></i>
                          <h5 class="card-title text-center">change Profile </h5>
                          <form class="form-change" action="includes/Enregistrer_profile.php" method="POST">
                          <div class="form-group">
                              <input type="text" id="inputUsername" name="username" value="<?php echo $_SESSION['Username']; ?>" class="form-control"  required autofocus Disabled>
                            </div>
                            <div class="form-group">
                              <input type="email" id="inputEmail" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control" placeholder="Email address" required autofocus Disabled>
                            </div>
                            <div class="form-group" id="divEdite">
                            <button class="btn btn-lg  btn-block text-uppercase" id="ButtonEdite"  name="Edite">Edite</button>
                            </div>
                            <div id="Divhide" style="display:none;">
                            <div class="form-group">
                              <input type="password" id="inputCurrePassword" name="current_password"  class="form-control" placeholder="**********" required>
                            </div>
                            <div class="form-group">
                            <button class="btn btn-lg  btn-block text-uppercase"   type="submit" name="Enregistrer">Enregistrer</button>
                            </div>
                            <div class="form-group">
                            <button class="btn btn-lg btn-danger  btn-block text-uppercase" id="cancel" type="button" name="Cancel"><i class="fa fa-ban" aria-hidden="true"></i> Cancel</button>
                            <?php

if(isset($_SESSION['Error_msg'])){
  echo "<div class='alert alert-danger' role='alert'>
            ".$_SESSION['Error_msg']."
       </div>";
       unset($_SESSION['Error_msg']);
      
 }

 if(isset($_SESSION['success_msg'])){
  echo "<div class='alert alert-success' role='alert'>
            ".$_SESSION['success_msg']."
       </div>";
       unset($_SESSION['success_msg']);
      
 }
?>  
                          </div>
                            </div>
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
       <script src="js/profile.js" ></script>
       <!--End script  -->

    </body>
</html>

<?php ob_end_flush(); ?>