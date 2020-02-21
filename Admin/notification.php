<?php 

ob_start(); 

session_start();

$title_page="Notification";



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
      <div class="form-notification text-right">
      <div class="icon-notification text-center">
                <i class="fa fa-bell"></i>
                <h4>customize notification</h4>
                <p>Lorem ipsum, dolor sit amet consectetur.</p>
       </div>

            
        <?php 




                global $con;

                     $sql = "SELECT * from notification limit 1";
                     $stmt= $con->prepare($sql);
                     $stmt->execute();
                     $resultat=$stmt->fetch();

                     if($stmt->rowCount()==0){

                      echo "<form action='includes/add_notification.php' method='POST' enctype='multipart/form-data'>
                     
                      <div class='form-check form-check-inline'>  
                          <input class='form-check-input' name='visibility' value='enabled' type='radio'/><label class='form-check-label'>enabled</label>
                      </div>
        
                    <div class='form-check form-check-inline'>
                      <input class='form-check-input' name='visibility' value='disabled' type='radio' checked/><label class='form-check-label'>disabled</label>
                   </div>
                      
                      <div class='form-group'>
                         <input type='text' class='form-control' name='title'  placeholder='Enter title' id='title-notification' required>
                      </div>
                      <div class='form-group'>
                          <input type='text' class='form-control' name='paragraph'  placeholder='Enter paragraph'  id='paragraph-notification' required>
                      </div>
                      <div class='row'>
                          <div class='col-md-6'>
                            <input type='number' name='delay_start' class='form-control' placeholder='delay start' required>
                          </div>
                          <div class='col-md-6'>
                            <input type='number' name='delay_rest' class='form-control' placeholder='delay of time' required>
                          </div>
             
                      </div>
                      <div class='upload-image'>
                          <input type='file' name='image_noti' accept='image/*'/>
                          <div class='upload-content text-center'>
                              <i class='fa fa-image mb-2'></i>
                             <h4>upload image</h4>
                          </div>
                      </div>

                      <button type='submit' name='add_notification'><i class='fa fa-plus'></i> add notification </button>
                    </form>";


                    echo "<div class='notification-item'>
                    <img src='img/protein.png' width='100px' height='100px' class='img-notification'>
                   <div class='notification-content'>
                     <h6 class='title-notification'>Lorem, ipsum dolor sit amet </h6>
                     <p class='paragraph-notification'>Lorem, ipsum dolor sit amet </p>
                      <h6 class='time-notification'>About 1 Hour</h6>
                   </div>
                   
                  </div>";


                     }else{

                        $title=$resultat['Title'];
                        $paragraph=$resultat['Title'];
                        $paragraph=$resultat['paragraph'];
                        $delay_start=$resultat['delay_start'];
                        $delay_rest=$resultat['delay_rest'];
                        $image=$resultat['image'];
                        $_SESSION['image_notification']=$image;

                      echo "<form action='includes/edit_notification.php' method='POST' enctype='multipart/form-data'>";
                     
                      // test if visibility is disabled for checked radio button disabled
                      if($resultat['visibility']=="disabled"){

                        echo "<div class='form-check form-check-inline'>
                               <input class='form-check-input' name='visibility' value='enabled' type='radio'/><label class='form-check-label'>enabled</label>
                              </div>
          
                             <div class='form-check form-check-inline'>
                                <input class='form-check-input' name='visibility' value='disabled' type='radio' checked/><label class='form-check-label'>disabled</label>
                              </div>";

                        }
                        
                        // test if visibility is enabled for checked radio button enabled
                        if($resultat['visibility']=="enabled"){

                         echo "<div class='form-check form-check-inline'>
                                <input class='form-check-input' name='visibility' value='enabled' type='radio' checked/><label class='form-check-label'>enabled</label>
                               </div>
           
                              <div class='form-check form-check-inline'>
                                 <input class='form-check-input' name='visibility' value='disabled' type='radio' /><label class='form-check-label'>disabled</label>
                               </div>";

                         }  
                      
                     echo "<div class='form-group'>
                         <input type='text' class='form-control' name='title' value='{$title}'  placeholder='Enter title' id='title-notification' required>
                      </div>
                      <div class='form-group'>
                          <input type='text' class='form-control' name='paragraph' value='{$paragraph}'  placeholder='Enter paragraph'  id='paragraph-notification' required>
                      </div>
                      <div class='row'>
                          <div class='col-md-6'>
                            <input type='number' name='delay_start' value='{$delay_start}' class='form-control' placeholder='delay start' required>
                          </div>
                          <div class='col-md-6'>
                            <input type='number' name='delay_rest' value='{$delay_rest}' class='form-control' placeholder='delay of time' required>
                          </div>
             
                      </div>     
                      
                      <div class='upload-image'>
                          <input type='file' name='image_noti' accept='image/*'/>
                          <div class='upload-content text-center'>
                              <i class='fa fa-image mb-2'></i>
                             <h4>upload new image</h4>
                          </div>
                      </div>

                      <button type='submit' name='edit_notification'><i class='fa fa-save'></i> save </button>
                    </form>";



                    echo "<div class='notification-item'>
                            <img src='img/{$image}' width='100px' height='100px' class='img-notification'>
                               <div class='notification-content'>
                                   <h6 class='title-notification'>{$title}</h6>
                                       <p class='paragraph-notification'>{$paragraph}</p>
                                        <h6 class='time-notification'>";
          
                          $seconds = strtotime(date('Y-m-d H:i:s')) - strtotime($resultat['date']);
                          $minutes = floor($seconds /60);
                          $hours   = floor($seconds / 3600);
                          $days    = floor($seconds / 86400);
                          $months  = floor($seconds / 2678400);
                          $years   = floor($seconds / 31536000);
                     
                          
                         if($seconds<60){
          
                              echo " About ".$seconds." seconds";
          
                         }elseif($minutes<60){
          
                              echo " About ".$minutes." minutes";
          
                         }elseif($hours<24){
          
                              echo " About ".$hours." hours";
          
                         }elseif($days<=31){
          
                              echo " About ".$days." days";
          
                         }
                         elseif($months<12){
          
                          echo " About ".$months." months";
          
                         }
                         elseif($years>=365){
          
                          echo " About ".$years." years";
          
                         }
                        
                    
            
                            echo       "</h6>
                                     </div>
                                   </div>";


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