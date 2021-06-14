<?php
include 'header.php';
include 'connection.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$cat1 = $_POST['cat1'];
$msp = $_POST['msp'];
$cat2 = $_POST['cat2'];
$cash = $_POST['cash'];

$cat3 = $_POST['cat3'];
$credit = $_POST['credit'];
$cat4 = $_POST['cat4'];


$sql = "insert into product_item (cat1,cat2,cat3,cat4,min_sale_price,cash_price,credit_price,user) values ('$cat1','$cat2','$cat3','$cat4','$msp','$cash','$credit','$user')";
  if(mysqli_query($con, $sql))
    {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Product Item has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                  Product Item Registration has been Failed !
                </div>';
                            
                        }
                    }
     
?>
     




