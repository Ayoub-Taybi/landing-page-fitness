<?php 

ob_start(); 

session_start();

$title_page="Facebook pixel";



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
        <div class="form-facebook text-right">
            <div class="form-content text-center">
                <i class="fa fa-facebook"></i>
                <h3>add facebook pixel</h3>
                <p style="margin-top:15px">Add your script facebook pixel to your website.</p>
            </div>

            
            <form action="includes/add_facebookPixel_file.php" method="POST">
                  <textarea style="resize:none" placeholder="Enter your facebook pixel" name="Scriptpixel"><?php  echo (file_exists ("../js/script_facebookPixel.js"))?file_get_contents("../js/script_facebookPixel.js"):""; ?></textarea>
    
                 <button class="btn btn-lg" name="add_facebookPixel"><i class="fa fa-save"></i> Save</button>
            </form>
            <?php       
                echo (isset($_SESSION['success_msg']))? "<div class='alert alert-success mt-3'>".$_SESSION['success_msg']."</div>":""; unset($_SESSION['success_msg']);
                echo (isset($_SESSION['error_msg']))? "<div class='alert alert-danger'>".$_SESSION['error_msg']."</div>":""; unset($_SESSION['error_msg']);
            
            ?>    
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