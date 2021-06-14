<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connection.php';
//include 'header.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $company = $_POST['companyname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $fax = $_POST['fax'];
        $vat = $_POST['vat'];
        $email = $_POST['email'];
        $br = $_POST['br'];
        $salutation = $_POST['salutation'];
        $name = $_POST['cname'];
        $cmobile = $_POST['cmobile'];
        $country = $_POST['country'];
        $id = $_POST['id'];
       echo $salutation.''.$name.''.$country;
        echo $company.' '.$id.''.$country.''.$salutation.''.$email.''.$fax.''.$name.''.$email.''.$cmobile.''.$fax.''.$br.''.$vat.''.$phone;
        $sql = "UPDATE supplier SET company_name='$company',br_no='$br',vat_no='$vat',company_phone='$phone',company_fax='$fax',company_address='$address',person_name='$name',person_mobile='$cmobile',salutation='$salutation',company_email='$email',country='$country' WHERE id='$id'";
      
       if(mysqli_query($con, $sql))  {

//                            $sql1 ="INSERT INTO user_activity (user,activity) VALUES ('$user','SUPPLIER DETAILS UPDATED ID :$id ')";
        mysqli_query($con, $sql1);
        echo "<script>window.location = 'supplier_register.php?msg=SUPPLIER DETAILS UPDATED ! ';</script>";
    } else {
        echo "<script>window.location = 'edit_supplier.php?msge=UPDATING SUPPLIER DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
    }


}
    ?>     