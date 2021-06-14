<?php

include 'connection.php';



    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    



//$code_invoice_real = $_SESSION['code_invoice_real'];
//Check whether the session variable  is present or not
if (!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
    header("location: login.php");
    exit();
}



$user = $_SESSION['sess_user_id'];
$position = $_SESSION['sess_position'];
$pwreset = $_SESSION['sess_pw_reset'] ;

date_default_timezone_set("Asia/Colombo");




?>


