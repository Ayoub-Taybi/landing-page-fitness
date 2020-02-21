<?php 

ob_start(); 

session_start();

$title_page="Google analytics";



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
                <img src="img/google_annalytics.png" width="200px;" draggable="false">
                <p>Add your Script Google analytics to your website.</p>
            </div>

           
            <form action="includes/add_GoogleAnalytics.php" method="POST">
                  <textarea style="resize:none" placeholder="Enter your Google analytics" name="Scriptgoogle"><?php  echo (file_exists ("../js/Script_GoogleAnalytics.js"))?file_get_contents("../js/Script_GoogleAnalytics.js"):""; ?></textarea>
                 <button class="btn btn-lg" name="add_GoogleAnalytics"> <i class="fa fa-save"></i> Save</button>
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