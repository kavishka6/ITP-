<?php
include 'header.php';
include 'connection.php';




 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        
                    
                        $companyname =strtoupper($_POST['companyname']);
                        $br = $_POST['br'];
                        $vat = $_POST['vat'];
                        $com_phone = $_POST['phone'];
                         $fax = $_POST['fax'];
                        $com_address = strtoupper($_POST['address']);
                       
                        $com_email = $_POST['email'];
                        
                        $salutation = $_POST['salutation'];
                        $pname = strtoupper($_POST['cname']);
                        $pmobile = $_POST['cmobile'];
                        $country =$_POST['country'];
                       
                        
                        
                        $sql = "INSERT INTO supplier(company_name,br_no,vat_no,company_phone,company_fax,company_address,person_name,person_mobile,salutation,company_email,country,user) VALUES 
			('$companyname','$br','$vat','$com_phone','$fax','$com_address','$pname','$pmobile','$salutation','$com_email','$country','$user')";
                       if(mysqli_query($con, $sql))
                       {
                           echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success!</h5>
                  Supplier has been Registered Successfully !
                </div>';
                           
                       }
                        else 
                        {
                            echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Supplier Registration has been  Failed !
                </div>';
                            
                        }
                    }
     

?>

