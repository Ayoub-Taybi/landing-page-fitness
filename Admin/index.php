<?php 

ob_start(); 

session_start();

$title_page="Dashbord";

if(isset($_GET['logout'])){

  session_destroy();
  header("Location:login.php");
  exit();

}

if(!isset($_SESSION['email'])){

    header("Location:login.php");
    exit();

}

include "includes/connect.php" ;


    try{


    global $con;

    $stmt=$con->prepare("SELECT COUNT(*) FROM commande");
    $stmt->execute();
    $Count_Order=$stmt->fetchColumn();

    $stmt=$con->prepare("SELECT COUNT(*) FROM commande WHERE Shipping='Not shipped'");
    $stmt->execute();
    $Count_NotShipp=$stmt->fetchColumn();

    $stmt=$con->prepare("SELECT COUNT(*) FROM commande WHERE Shipping='shipped'");
    $stmt->execute();
    $Count_Shipp=$stmt->fetchColumn();

    
     
    }
    catch(PDOException $e){

    echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
    ."</div>";

 
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
            <!-- card dashboard -->

            <?php include "includes/card_dashboard.php" ;?>

            <!-- end card dashboard -->

            <!-- button exel -->
            <div class="btn-exel text-right">
                <button class="btn btn-default" onclick="tableToExcel('tablecommand', 'W3C Example Table')"><i class="fa fa-file-excel-o"></i> export excel</button>
            </div>
            <!-- end button exel -->

            <!-- begin table dashboard -->
            <?php include "includes/Table_dashboard.php" ;?>
            <!-- end table dashboard -->
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