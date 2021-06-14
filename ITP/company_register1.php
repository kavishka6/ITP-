
<?php

include 'header.php';
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $companyname = strtoupper($_POST['companyname']);
    $br = $_POST['br'];
    $vat = $_POST['vat'];
    $com_phone = $_POST['phone'];
    $fax = $_POST['fax'];
    $com_address = strtoupper($_POST['address']);

    $com_email = $_POST['email'];

    $salutation = strtoupper($_POST['salutation']);
    $pname = strtoupper($_POST['cname']);
    $pmobile = $_POST['cmobile'];
    
    $msp = 0; //HARD CODED COZ MINIMUM SELLING PRICE NOT RELEVANT TO COMPANY CUSTOMERS
    $customer_type = 2; // HARD CODED COZ THIS IS COMPANY CUSTOMER


    $company_name1 = str_replace(' ', '', $companyname);
    $sql="SELECT company_name FROM company_customer WHERE REPLACE(company_name, ' ', '')='$company_name1'";
    $result=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($result);
    
   if($rowcount>0){
         echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed!</h5>
                  Company-Customer already Registered !
                </div>';
        
    }
    else{
    
    
    
    $sql = "INSERT INTO company_customer(type_customer,company_name,br_no,vat_no,company_phone,company_fax,company_address,person_name,person_mobile,salutation,company_email,min_sale_price,user) VALUES 
			('$customer_type','$companyname','$br','$vat','$com_phone','$fax','$com_address','$pname','$pmobile','$salutation','$com_email','$msp','$user')";
    if (mysqli_query($con, $sql)) {
        echo ' <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Success !</h5>
                  Company Customer has been Registered Successfully !
                </div>';
    } else {
        echo ' <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Failed !</h5>
                  Company Customer Registration has been Failed !
                </div>';
    }
}
}
?>
     




