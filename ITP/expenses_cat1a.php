<?php
include 'header.php';
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $type = strtoupper($_POST['type']);
   
   
   $sql = "insert into expenses_category(type,user) values ('$type','$user')";
   
   if(mysqli_query($con, $sql))
   {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Expenses Category has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                   Expenses Category Registration has been Failed !
                </div>';
                            
                        }
                    }
     
?>
     






