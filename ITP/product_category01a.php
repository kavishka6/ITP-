<?php
include 'header.php';
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $type = strtoupper($_POST['type']);
   
   
       $sql="SELECT type FROM category_one WHERE type='$type'";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    
    
     if($rowcount>0){
         echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Product Item already Registered !
                </div>';
        
    }
    else{
   
   
   $sql = "insert into category_one(type,user) values ('$type','$user')";
   
   if(mysqli_query($con, $sql))
   {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Category-01 has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                   Category-01 Registration has been Failed !
                </div>';
                            
                        }
    }   }