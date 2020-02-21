
<?php 


if(isset($_GET['shipped']) && $_GET['shipped']!=null && $_GET['shipped']!="" ){

                    global $con;
                    $ID=$_GET['shipped'];
                     $stmt=$con->prepare("update commande set Shipping='shipped' where ID=$ID");
                     $stmt->execute();
                     header('location:index.php');
                     exit();


}


?>


<?php 



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

<div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-dashboard">
                        <div class="row">
                            <div class="col card-content">
                                <h4>Order</h4>
                                <h5><?php echo $Count_Order; ?></h5>
                            </div>
                            <div class="col text-right icon-card">
                                <i class="fa fa-pie-chart"  id="chart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-dashboard">
                        <div class="row">
                            <div class="col card-content">
                                <h4>livrer</h4>
                                <h5><?php echo $Count_Shipp; ?></h5>
                            </div>
                            <div class="col text-right icon-card">
                                <i class="fa fa-long-arrow-up" id="livrer" ></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card-dashboard">
                        <div class="row">
                            <div class="col card-content">
                                <h4>non livrer</h4>
                                <h5><?php echo $Count_NotShipp; ?></h5>
                            </div>
                            <div class="col text-right icon-card">
                                <i class="fa fa-long-arrow-down" id="non-livrer"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>