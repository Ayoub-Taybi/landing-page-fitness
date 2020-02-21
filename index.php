<?php session_start(); 

include "Admin/includes/connect.php" ;


?>
<html>
    <head>
        
         <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

             <?php 
     
               if(file_exists ("js/script_facebookPixel.js")){

                file_get_contents("js/script_facebookPixel.js");
               } 
               
               if(file_exists ("js/Script_GoogleAnalytics.js")){

                file_get_contents("js/Script_GoogleAnalytics.js");
             } 

             ?>

    </head>
      

    <body>
       <!-- navbar -->
       <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand" href="#">
            <svg height="50" viewBox="0 0 192 192" max-width="300" xmlns="http://www.w3.org/2000/svg">
            <path d="m155.109 74.028a4 4 0 0 0 -3.48-2.028h-52.4l8.785-67.123a4.023 4.023 0 0 0 -7.373-2.614l-63.724 111.642a4 4 0 0 0 3.407 6.095h51.617l-6.962 67.224a4.024 4.024 0 0 0 7.411 2.461l62.671-111.63a4 4 0 0 0 .048-4.027z" /></svg>
            Xpower
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-toggler"></span>
            <span class="icon-toggler"></span>
            <span class="icon-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#form-contact" id="buy-now">Buy Now</a>
            </li>
          </ul>
        </div>
      </nav>
       <!-- end navbar -->
       <!-- header -->
       <div class="header">
           <div class="container">
               <div class="header-content">
                   <h1 id="demo"></h1>
                   <h2>Mi reality is now
                    <span style="color:#00bfe5;"> going virtual </span></h2>
                    <p>Best in class virtual reality gear to make your everyday experience great. Go check it.</p>
                    <a href="#form-contact" class="btn btn-primary">buy now</a>
               </div>
           </div>
       </div>
       <!-- end header-->



      <!-- feature boxed -->
      <div class="feature-boxed">
          <div class="container">
              <div class="feature-content text-center">
                <h5 >Features</h5 >
                <h3>Exellent Features we deliver</h3>
                <p>From development to the delivery of performance we don't compromise
                  at any level to make your products the best</p>
                  <i class="fa fa-long-arrow-right" aria-hidden="true" id="arrow"></i>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item"> 
                         <svg id="Glyph" class="mb-3" height="40" viewBox="0 0 512 512" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m120 112a16.019 16.019 0 0 0 -16 16v256a16 16 0 0 0 32 0v-256a16.019 16.019 0 0 0 -16-16z"/><path d="m152 240h208v32h-208z"/><path d="m40 240a16 16 0 0 0 0 32z"/><path d="m472 240v32a16 16 0 0 0 0-32z"/><path d="m456 360v-208a16 16 0 0 0 -32 0v208a16 16 0 0 0 32 0z"/><path d="m392 112a16.019 16.019 0 0 0 -16 16v256a16 16 0 0 0 32 0v-256a16.019 16.019 0 0 0 -16-16z"/><path d="m88 360v-208a16 16 0 0 0 -32 0v208a16 16 0 0 0 32 0z"/></svg>
                          <h4>Some heading here</h4>
                          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                          <i class="fa fa-long-arrow-right" aria-hidden="true" id="arrow"></i>
                        </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item">
                        <svg id="Layer_3" class="mb-3" enable-background="new 0 0 64 64" height="40" viewBox="0 0 64 64" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m30.841 32.459c.184.285.21.646.069.955l-2.718 5.979 9.394-9.393h-5.586c-.369 0-.708-.203-.882-.528s-.154-.72.05-1.026l4.964-7.446h-7.394l-3.385 11h4.647c.34 0 .656.173.841.459z"/><path d="m18 59c-.342 0-.677-.035-1-.101v2.101h30v-2.101c-.323.066-.658.101-1 .101z"/><path d="m19 3h26v2h-26z"/><path d="m15 54c0 1.654 1.346 3 3 3h28c1.654 0 3-1.346 3-3v-1h-34z"/><path d="m46 7h-28c-1.654 0-3 1.346-3 3v1h34v-1c0-1.654-1.346-3-3-3z"/><path d="m15 51h34v-38h-34zm8.044-18.294 4-13c.129-.42.517-.706.956-.706h10c.369 0 .708.203.882.528s.154.72-.05 1.026l-4.964 7.446h6.132c.404 0 .77.243.924.617.155.374.069.804-.217 1.09l-15 15c-.193.193-.449.293-.707.293-.198 0-.397-.059-.569-.178-.397-.275-.541-.796-.341-1.236l4.357-9.586h-4.447c-.317 0-.616-.15-.805-.406-.188-.255-.244-.585-.151-.888z"/></svg>
                        <h4>Some heading here</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <i class="fa fa-long-arrow-right" aria-hidden="true" id="arrow"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item">
                       <svg height="40px" class="mb-3" viewBox="0 0 460.86563 460" width="40px" xmlns="http://www.w3.org/2000/svg"><path d="m460.867188 56.433594c0 30.925781-25.074219 56-56 56-30.929688 0-56-25.074219-56-56 0-30.929688 25.070312-56 56-56 30.925781 0 56 25.070312 56 56zm0 0"/><path d="m321.289062 139.769531.046876-.046875c10.65625-10.652344 10.65625-27.925781 0-38.578125l-69.847657-69.847656c-12.496093-12.492187-32.75-12.492187-45.246093 0l-93.847657 93.847656c-10.65625 10.652344-10.65625 27.925781 0 38.578125l.046875.046875c10.652344 10.65625 27.925782 10.65625 38.578125 0l77.847657-77.847656 53.847656 53.847656c10.648437 10.65625 27.921875 10.65625 38.574218 0zm0 0"/><path d="m436.867188 208.433594h-88v-48l-48 48v32c0 8.835937 7.160156 16 16 16h120c13.253906 0 24-10.746094 24-24s-10.746094-24-24-24zm0 0"/><path d="m7.984375 453.234375.050781.046875c10.65625 10.648438 27.925782 10.648438 38.582032 0l142.402343-142.402344-38.632812-38.628906-142.402344 142.398438c-10.644531 10.65625-10.644531 27.925781 0 38.585937zm0 0"/><path d="m230.664062 227.632812c-10.667968-10.671874-27.96875-10.671874-38.636718 0-10.671875 10.671876-10.671875 27.96875 0 38.640626l70.117187 70.078124-85.117187 45.359376c-6.28125 3.589843-10.875 9.527343-12.765625 16.507812-1.894531 6.980469-.925781 14.425781 2.683593 20.695312l1.039063 1.917969c7.519531 13.070313 24.203125 17.578125 37.28125 10.082031l98.480469-52.960937 12.800781-7.351563c8.648437-4.957031 14.496094-13.660156 15.808594-23.542968 1.316406-9.878906-2.046875-19.8125-9.097657-26.859375zm0 0"/></g></svg>
                        <h4>Some heading here</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <i class="fa fa-long-arrow-right" aria-hidden="true" id="arrow"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-item">
                        <svg  width="40px" height="40px" class="mb-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 61.858 61.858" style="enable-background:new 0 0 61.858 61.858;" xml:space="preserve">
<g>
	<g>
		<path style="fill:#00c2e8;" d="M50.097,0.014c-9.917,0.874-17.235,5.824-21.501,12.98c-2.859,3.584-8.57,14.526-10.647,20.254
			c-3.766,7.123-7.05,15.598-9.62,23.238c-1.571,4.672,5.483,7.72,7.063,3.027c1.922-5.716,4.244-11.896,6.868-17.631
			c2.604,5.828,5.25,11.637,8.091,17.354c2.202,4.438,8.828,0.546,6.634-3.877c-2.925-5.885-5.642-11.864-8.319-17.863
			c0.034-0.116,0.077-0.229,0.113-0.344c0.446,0.127,0.938,0.166,1.48,0.063c4.096-0.769,8.192-1.536,12.291-2.305
			c1.751-0.329,2.422-2.245,2.146-3.779c-0.828-4.597-3.447-7.795-6.707-10.821c-0.484-1.646-2.098-3.102-3.889-4.549
			c3.631-5.87,9.559-9.056,17.275-9.736C55.313,5.68,54.001-0.329,50.097,0.014z M35.173,26.143
			c1.013,1.054,1.875,2.163,2.526,3.447c-1.982,0.372-3.965,0.743-5.947,1.115C32.752,29.095,33.903,27.575,35.173,26.143z"/>
		<circle style="fill:#00c2e8;" cx="43.653" cy="15.635" r="5.275"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                        <h4>Some heading here</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <i class="fa fa-long-arrow-right" aria-hidden="true" id="arrow"></i>
                    </div>
                </div>
              </div>
          </div>
      </div>
       <!-- end feature boxed -->

       <!-- feature-->
       <div class="feature">
           <div class="container">
               <div class="row">
                   <div class="col-lg-6 col-md-7">
                     <div class="feature-content">
                        <h3>Real time traffic and activity <span style="color:#00bfe5;">demographics</span></h3>
                        <p>I don't know what to type here so let me fill some random text. Lorem ipsum is hard to consume and I use it as a last resort. So, I'll fill random text please and you don't even have to read it.</p>
                        <a href="#form-contact" class="btn btn-primary">buy now</a>
                     </div>
                   </div>
                   <div class="col-lg-6 col-md-5 feature-img">
                       <img src="img/protein.png"/>
                   </div>
               </div>
           </div>
       </div>
       <!-- end feature -->

        <!-- video -->
        <div class="video d-flex">
            <div class="video-content">
                <div class="container video-header">
                    <h3>Real time traffic and activity demographics</h3>
                    <p>Just get the code and sit tight, you'll witness its power and performance in lead conversion. Powerful and productive technology. Experience, then believe.</p>
                    <a href="#form-contact" class="btn btn-primary">buy now</a>
                </div>
            </div>
            <div class="bg-video">
               <i class="fa fa-play"></i>
                <img src="img/half_bg.png" width="100%" height="100%"/>
            </div>
        </div>
       <!-- end video -->


       <!-- about -->
       <div class="about">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                   </div>
                   <div class="col-md-6 about-content">
                    <h5 style="color:#00bfe5;">Unmatched performance </h5 s>
                    <h3>Unmatched performance in the high-end Android range.</h3>
                    <p>Just kidding you have to pay every month or every year to get all the benefits we mentioned everywhere. Everything comes at a cost the benefits we mentioned everywhere. Everything comes at a cost.</p>
                    <a href="#form-contact" class="btn btn-primary">buy now</a>
               </div>
               </div>
           </div>
       </div>
       <!-- end about -->

       
       <!-- price -->
       <div class="price">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 price-img">
                       <img src="img/protein.png"/>
                   </div>
                   <div class="col-md-6">
                      <div class="price-content">
                          <h3>Mi Virtual</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          <h3>299$</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                          <a href="#form-contact" class="btn btn-primary">buy now</a>
                      </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- end price -->


   
       

       <!--  send form -->
       <div class="send-form">
        <div class="container">
          <div class="send-inner text-center">
 
            <h2>Unmatched performance in <br/> <span style="color:#00bfe5;">high-end Android range.</span> </h2>
            <p>Just kidding you have to pay every month or every year to get all the benefits
              we mentioned everywhere. Everything comes at a cost.</p>
            </div>

              <form class="text-center" action="Functions/add_commande.php" method="POST" id="form-contact">
                <h2>Unmatched performance in <br/> <span style="color:#00bfe5;"> lorem the Android range.</span></h2>       
                <div class="form-group">
                  <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control"  placeholder="Enter your email" required>
                </div>  
                <div class="form-group">
                  <input type="tel" name="phone" class="form-control" placeholder="Enter your phone Example : +(212)x xx xx xx xx" required>
                </div>
                <div class="form-group">
                  <textarea  name="subject" style="resize: none;" class="form-control" rows="10" placeholder="Subject" required></textarea>
                </div>
                <?php
                if(isset($_SESSION['Error'])){
                echo "<div class='form-group'>
                        <div class='alert alert-danger'>".$_SESSION['Error']."</div>
                     </div>";
                     unset($_SESSION['Error']);
                }
                ?>
                <button type="submit" name="add_commande" class="btn-primary form-control">Send order</button>
              </form>
        </div>
      </div>
    <!-- end send form -->


                   
                     <?php 

                        //php code Show whatssap if enabled and get number
        
                         global $con;

                     $sql = "SELECT * from whatsapp limit 1";
                     $stmt= $con->prepare($sql);
                     $stmt->execute();
                     $resultat=$stmt->fetch();

                     if($resultat['Visibility']=="enabled"){?>

                         <div class="whatsapp-button">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $resultat['Number']?>&text=&source=&data=" target='_blank'><i class="fa fa-whatsapp"></i></a>
                         </div>

                     <?php   /* php code Show whatssap if enabled and get number */   }?>

                   


        
                     <?php 
        
                       //php code Show notifiction if enabled and get its data
                         global $con;

                     $sql = "SELECT * from notification limit 1";
                     $stmt= $con->prepare($sql);
                     $stmt->execute();
                     $resultat=$stmt->fetch();

                     if($stmt->rowCount()!=0){

                     if($resultat['visibility']=="enabled"){?>
                         
                         <div class="notification-item" data-delay="<?php echo $resultat['delay_start'] ?>" data-rest="<?php echo $resultat['delay_rest'] ?>" data-show="true">
                             <img src="Admin/img/<?php echo $resultat['image'] ?>" width="80px" height="80px">
                              <div class="notification-content">
                                <h6 class="title-notification"><?php echo $resultat['Title'] ?></h6>
                                 <p class="paragraph-notification"><?php echo $resultat['paragraph'] ?> </p>
                                <h6 class="time-notification">
                                       <?php 

                         // code for test How much time has passed about notification

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

               //End code for test How much time has passed about notification
              
            ?>
                                </h6>
                              </div>
                         </div>

              <?php /*End php code Show notifiction if enabled and get its data*/ }}?>

        

        
       <!-- script  -->

       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       <script>
        var notif=document.getElementsByClassName("notification-item")[0];
        if(notif.dataset.show=="true"){
            setTimeout(function(){
            notif.style.visibility="visible";
            deletenotif();
         },notif.dataset.delay);
        }
         function deletenotif(){
            setTimeout(() => {
              notif.style.visibility="hidden";
         }, notif.dataset.rest);
         }        
        
       </script>


    </body>
</html>