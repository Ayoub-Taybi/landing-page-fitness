<?php

// this function for delete order

function deleteOrder(){

try{

    global $con;

    if(isset($_GET['Delete_Order'])){

        $order_id=$_GET['Delete_Order'];

        $stmt=$con->prepare("delete from commande where ID={$order_id}");
        $stmt->execute();

        if($stmt){

          echo "<div class='form-group'>
                        <div class='alert alert-danger'><center>Order deleted successfully<center></div>
                     </div>";

            unset($_GET['Delete_Order']);
            header("location:index.php?order_deleted");
            exit();

        }

        

    }
    

   
   

}
 catch(PDOException $e){

    
    echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
    ."</div>";
}




}

// here we call faunction delete order for execute it

deleteOrder();




?>

<table class="table text-center" id="tablecommand">
                <thead>
                  <tr >
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">subject</th>
                    <th scope="col">Date order</th>
                    <th scope="col">Shipping</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>    
                <tbody>

                <?php 


                  try{


                            global $con;

                        $stmt=$con->prepare("select * FROM commande");
                        $stmt->execute();
                        $orders=$stmt->fetchAll();


                        if(count($orders)>0){
                          
                          foreach($orders as $order){

                            $ID=$order['ID'];
                            $Full_name=$order['Full_name'];
                            $email=$order['Email'];
                            $Tel=$order['Tel'];
                            $Subject=$order['Subject'];
                            $Date_order=$order['Date_order'];
                            $Shipping=$order['Shipping'];


                            echo "<tr>
                                      <td>{$Full_name}</td>
                                      <td>{$email}</td>
                                      <td>{$Tel} <a  href='https://api.whatsapp.com/send?phone={$Tel}&text=&source=&data=' target='_blank'><img src='img/whatsapp-48.png' draggable='false' height='30' width='30' style='margin-bottom:5px;margin-left:5px;'></a></td>
                                      <td>{$Subject}</td>
                                      <td>{$Date_order}</td>";
                            echo ($Shipping=="Not shipped")?"<td><a href='index.php?shipped={$ID}' class='btn btn-danger'>Not shipped</a></td>":"<td><a href='#' class='btn btn-success'>Shipped</a></td>";
                            echo "<td><a  href='index.php?Delete_Order={$ID}' class='btn btn-danger'><i class='fa fa-trash'></i> delete</a></td>";

                            
                            echo"</tr>";

                          }
                        }

     
                       }
                       catch(PDOException $e){

                         echo "<div class='alert alert-danger' role='alert'>".$e->getMessage()
                        ."</div>";

 
                       }

                ?>
                    
                  
                </tbody>
              </table>