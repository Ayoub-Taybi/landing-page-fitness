<?php 

    session_start();
    if(isset($_SESSION['email'])){
      header("Location:index.php");
      exit();

  }

  $title_page="Login";


    include "includes/connect.php" ;
    function checkUser($email,$password,$con){
      if(empty($email) || empty($password)){
        $_SESSION['Error_login']="Field is empty !!!";
        $_SESSION['old_value_email']=$email;
        header("location:".$_SERVER['PHP_SELF']); 
        exit();
    
    }

      $stmt=$con->prepare("select * from users where email= ?");
      $stmt->execute([$email]);
      $resultat=$stmt->fetchAll();
  
      if(count($resultat)>=1){
          $stmt=$con->prepare("select * from users where email= ? and password = ?");
          $stmt->execute([$email,sha1($password)]);
          $resultat=$stmt->fetchAll();
          
          if(count($resultat)>=1){
              foreach($resultat as $user){
                  $_SESSION['email']=$user['email'];
                  $_SESSION['Username']=$user['UserName'];
                  $_SESSION['UserID']=$user['UserID'];

                  header("Location:index.php");
                  exit();
              }
          }else{
              $_SESSION['old_value_email']=$email;
              $_SESSION['Error_login']="Password is incorrect";
          }
      }else{
         $_SESSION['old_value_email']=$email;
         $_SESSION['Error_login']="Doesn't exist this user";
      }
  }
  try{
  
      if(isset($_POST['Login'])){
          global $con;
          $email=$_POST['email'];
          $password=$_POST['password'];
          checkUser($email,$password,$con);
       }
  }
  catch(PDOException $e){
      echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
      ."</div>"; 
  }

  ?>


<html>
<?php include "includes/header.php" ?>

    <body>

        <!-- login -->
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                      <div class="card card-signin my-5">
                        <div class="card-body text-center">
                           <a class="navbar-brand mb-4 href="#">
                               <svg height="50" viewBox="0 0 192 192" max-width="300" xmlns="http://www.w3.org/2000/svg">
                              <path d="m155.109 74.028a4 4 0 0 0 -3.48-2.028h-52.4l8.785-67.123a4.023 4.023 0 0 0 -7.373-2.614l-63.724 111.642a4 4 0 0 0 3.407 6.095h51.617l-6.962 67.224a4.024 4.024 0 0 0 7.411 2.461l62.671-111.63a4 4 0 0 0 .048-4.027z" /></svg>
                              Xpower
                           </a>
                          <h5 class="card-title text-center">sign in with credentials </h5>
                          <form class="form-signin" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                            <div class="form-group">
                              <input type="email" id="inputEmail" value="<?php echo isset($_SESSION['old_value_email'])?$_SESSION['old_value_email']:null;unset($_SESSION['old_value_email']); ?>"  name="email" class="form-control" placeholder="Email address" required autofocus>
                            </div>
                            <div class="form-group">
                              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button class="btn btn-lg  btn-block text-uppercase" type="submit" name="Login">Sign in</button>
                            <?php 
                                if(isset($_SESSION['Error_login'])){
                                   echo "
                                    <div class='alert alert-danger mt-4'>".$_SESSION['Error_login']."</div>
                                   ";
                                     unset($_SESSION['Error_login']);
                                  }
                             ?>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        <!-- end login -->

       <!-- script  -->
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>