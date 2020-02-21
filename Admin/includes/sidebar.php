<div class="border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"></div>
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action <?php echo ($title_page=="Dashbord")? "active": "" ?> "><i class="fa fa-tachometer"></i> Dashboard</a>
        <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="list-group-item list-group-item-action <?php echo ($title_page=="Profile" || $title_page=="Change password")? "active": "" ?>"><i class="fa fa-cog"></i> Setting</a>
        <ul id="demo" class="collapse list-group ">
                            <li class="list-group-item">
                                <a href="profile.php" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> Profile</a>
                            </li>
                            <li class="list-group-item">
                                <a href="Change_password.php" class="list-group-item list-group-item-action"><i class="fa fa-lock"></i> Change password</a>
                            </li>
        </ul>
        <a href="facebook_pixel.php" class="list-group-item list-group-item-action <?php echo ($title_page=="Facebook pixel")? "active": "" ?>"><i class="fa fa-facebook"></i> Facebook pixel</a>
        <a href="Google_Analytics.php" class="list-group-item list-group-item-action <?php echo ($title_page=="Google analytics")? "active": "" ?>"><i class="fa fa-google"></i> Google Analytics</a>
        <a href="whatsapp.php" class="list-group-item list-group-item-action <?php echo ($title_page=="Whatssap")? "active": "" ?>"><i class="fa fa-whatsapp"></i> Whatsapp</a>
        <a href="notification.php" class="list-group-item list-group-item-action <?php echo ($title_page=="Notification")? "active": "" ?>"><i class="fa fa-bell"></i> Notification</a>
        <a href="index.php?logout" class="list-group-item list-group-item-action "><i class="fa fa-sign-out"></i> Logout</a>       
     </div>
    </div>