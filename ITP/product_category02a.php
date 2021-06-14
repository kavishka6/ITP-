
<?php
include 'header.php';
include 'connection.php';



if($_SERVER['REQUEST_METHOD']== 'POST')
{
    
    
   $brand =strtoupper($_POST['brand']);
   
   
        $sql="SELECT brand FROM category_two WHERE brand='$brand'";
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
   
   
   
   $sql = "insert into category_two(brand,user) values ('$brand','$user')";
   
   if(mysqli_query($con, $sql))
   {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Category-02 has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                  Category-02 Customer Registration has been Failed !
                </div>';
                            
                        }
                    }


}
?>