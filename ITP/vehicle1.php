<?php
include 'header.php';
include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $revenue_date = $_POST['revenue_date'];
    $reg_num = strtoupper($_POST['reg_num']);
     $dname= $_POST['dname'];
    $sname = $_POST['sname'];
    $insu_date = $_POST['insu_date'];
    $insu_company = strtoupper($_POST['insu_company']);
    

  
    
    
      $sql = "INSERT INTO vehicle(type,dname,rname,revenue_license,insurance_company,insurance_date,registration_num,user) VALUES 
			('$type','$dname','$sname','$revenue_date','$insu_company','$insu_date','$reg_num','$user')";
                       if(mysqli_query($con, $sql))
                            {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Vehicle has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                  Vehicle Registration has been Failed !
                </div>';
                            
                        }
                    }
     
?>
     




