<?php

include 'header.php';
include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $invoice_num = $_POST['innum'];
    $recieved_date = $_POST['re_date'];
    $pay_done = $_POST['pay_done'];
     $pay_type = $_POST['pay_type'];

    $description = strtoupper($_POST['description']);
   
    

  
    
    
      $sql = "INSERT INTO feedback(invoice_id,recieved_date,pay_done,pay_type,description,user) VALUES 
			('$invoice_num','$recieved_date','$pay_done','$pay_type','$description',$user)";
      
      $sql1 = "UPDATE invoice SET feedback='1' where id='$invoice_num'";
      
                       if(mysqli_query($con, $sql)){
                           mysqli_query($con, $sql1);
                            
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Feedback has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                  Feedback Registration has been Failed !
                </div>';
                            
                        }
                    }
     
?>
     






?>
