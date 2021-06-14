<?php
include 'header.php';
include 'connection.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dnic = $_POST['dnic'];
    $dname = strtoupper($_POST['dname']);
    $daddress = $_POST['daddress'];
     $dphone= $_POST['dphone'];
    $dlicence = $_POST['dlicence'];
    $rnic = $_POST['rnic'];
    $rname = strtoupper($_POST['rname']);
    $raddress = $_POST['raddress'];
    $rphone = $_POST['rphone'];
    $rlicence = $_POST['rlicence'];
    
  
    $sql="SELECT dname FROM driver WHERE dnic='$dnic'";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    
    if($rowcount>0){
         echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Customer already Registered !
                </div>';
        
    }
 else {
        
    
    
      $sql = "INSERT INTO driver(dnic,dname,daddress,dphone,dlicense,rnic,rname,raddress,rphone,rlicense,user) VALUES 
			('$dnic','$dname','$daddress','$dphone','$dlicence','$rnic','$rname','$raddress','$rphone','$rlicence','$user')";
                        if(mysqli_query($con, $sql))
   {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Driver/Rep has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                   Driver/Rep  Registration has been Failed !
                </div>';
                            
                        }
}}

?>
