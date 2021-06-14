<?php
include 'header.php';
include 'connection.php';
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | General Form Elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">


        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">




        <!-- daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<script>
    window.onload = function() { window.print(); }
    </script>
            <?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
 if(isset($_POST["item_name"][0])){
     $customer = $_POST['customer'];
     $driver = $_POST['driver'];
     $company = 1;
     $vat = $_POST['invoice_type'];
     if(!$driver){
         $driver = 0;
     }
     $porter = $_POST['porter'];
     if(!$porter){
         $porter = 0;
     }
     $vehicle = $_POST['vehicle'];
     if(!$vehicle){
         $vehicle = 0;
     }
     $avaiability = "YES";
     $not_available_item = "";
     $price_low = "NO";
     $price_low_item =  "";
     
     $sql = "SELECT min_sale_price FROM company_customer WHERE id='$customer'";
                            $result = mysqli_query($con, $sql);
                                while ($arraySomething1 = mysqli_fetch_array($result)) {
                                    $low_min_sale_price = $arraySomething1['min_sale_price'];
                                }
                                
     
     
     for($count = 0; $count < count($_POST["item_name"]); $count++)
       {  
                            $item = $_POST["item_name"][$count];
                            $item_charge = $_POST["unit_price"][$count];
                            $quantity = $_POST["quantity"][$count];
                           
                            //take aitem name 
                            
                               $cat4 = $cat4_name="";
                                   $cat3 = $cat3_name="";
                                   $cat2 = $cat2_name="";
                                   $cat1 = $cat1_name="";
                       $sql356 = "SELECT id,cat1,cat2,cat3,cat4 FROM product_item WHERE id='$item'";
        $result356 = mysqli_query($con, $sql356);
        while ($arraySomething78 = mysqli_fetch_array($result356)) {
    $cat1 = $arraySomething78['cat1'];
    $cat2 = $arraySomething78['cat2'];
    $cat3 = $arraySomething78['cat3'];
    $cat4 = $arraySomething78['cat4'];
   



        $sql18 = "SELECT type FROM category_one WHERE id='$cat1' ";
        $result18 = mysqli_query($con,$sql18);
        while ($arraySomething18 = mysqli_fetch_array($result18)) {
        $cat1_name = $arraySomething18['type'];
        }

        $sql2 = "SELECT brand FROM category_two WHERE id='$cat2' ";
        $result2 = mysqli_query($con, $sql2);
        while ($arraySomething2 = mysqli_fetch_array($result2)) {
        $cat2_name = $arraySomething2['brand'];
        }

        $sql3 = "SELECT model FROM category_three WHERE id='$cat3' ";
        $result3 = mysqli_query($con, $sql3);
        while ($arraySomething3 = mysqli_fetch_array($result3)) {
        $cat3_name = $arraySomething3['model'];
        }


        $sql4 = "SELECT extra FROM category_four WHERE id='$cat4' ";
        $result4 = mysqli_query($con, $sql4);
        while ($arraySomething4 = mysqli_fetch_array($result4)) {
        $cat4_name = $arraySomething4['extra'];
        }
    
    
    $item_name = $cat1_name." ".$cat2_name." ".$cat3_name." ".$cat4_name;
                           
                        //ITEM COUNT DEDUCTION FROM STOCK TABLE - START
                            $sql25 = "SELECT stock,min_sale_price FROM product_item WHERE id = '$item'";
                               $result25 = mysqli_query($con, $sql25);
                                   while ($arraySomething25 = mysqli_fetch_array($result25)) {
                                       $stock_shop = $arraySomething25['stock']; 
                                       $min_sale_price = $arraySomething25['min_sale_price']; 
                                   }
                           if($stock_shop<$quantity){
                               $avaiability = "NO";
                               $not_available_item =  " [ ".$item_name. " || Available Quantity : ".$stock_shop." ] ";
                           }
                           if($item_charge<$min_sale_price){
                               $price_low = "YES";
                               $price_low_item = "UNIT PRICE IS BELOW THE MINIMUM SELLING PRICE : ".$item_name."[ MSP : ". number_format($min_sale_price,2)." ] ";
                               if($low_min_sale_price==1){
                                   $price_low = "NO";
                                   $price_low_item = "";
                               }
                               
                           }
                           
                                       
        }                    
     
        if($avaiability=="YES"){
             
            
     
            if($price_low=="NO"){
     
          $net_amount = $item_total = 0;  
          

                        
    
        
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
        
        tr td{
  padding: 2px !important;
  margin: 2px !important;
}
        
        
    </style>
</head>
<body>
    
<?php

$today = date('Y-m-d'); 
$todaynow = date("Y-m-d h:i:sA");

 $sql1 = "SELECT name,phone,address,email,description,br_no,cheques_payable FROM company WHERE id='$company'";
    $result1 = mysqli_query($con, $sql1);
        while ($arraySomething1 = mysqli_fetch_array($result1)) {
        $companyname = $arraySomething1['name'];
        $companyaddress = $arraySomething1['address'];
        $companyemail = $arraySomething1['email'];
        $companyphone = $arraySomething1['phone'];
        $companydescription = $arraySomething1['description'];
        $companybrno = $arraySomething1['br_no'];
        $cheques_payable = $arraySomething1['cheques_payable'];
        }

                        
                       
                        $invoicedate = $_POST['date'];
                   
                        
                        
                        $sql = "SELECT id,type_customer,company_name,company_phone,salutation,person_name,person_mobile,vat_no,company_address FROM company_customer WHERE id='$customer'";
                            $result = mysqli_query($con, $sql);
                                while ($arraySomething1 = mysqli_fetch_array($result)) {
                                    $id = $arraySomething1['id'];
                                    $salutation = $arraySomething1['salutation'];
                                    $type = $arraySomething1['type_customer'];
                                    $company_name = $arraySomething1['company_name'];
                                    $company_phone = $arraySomething1['company_phone'];
                                    $name = $arraySomething1['person_name'];
                                    $mobile = $arraySomething1['person_mobile'];
                                    $vat_no = $arraySomething1['vat_no'];
                                    $customer_address = $arraySomething1['company_address'];

                                    if($type==2){
                                            $customer_name = $company_name;
                                            $customer_phone = $company_phone;
                                            $salutation = "";
                                    }else{
                                            $customer_name = $name;
                                            $customer_phone = $mobile;
                                    } 
                               
                                  
                                //   echo $customer_name;
                                }
                        
                        
           
                        $net_amount = $item_total = 0;    
                        for($counter = 0; $counter < count($_POST["item_name"]); $counter++)
                        {  
                            $item_charge = $_POST["unit_price"][$counter];
                            $quantity = $_POST["quantity"][$counter];
                            $item_total = $item_charge * $quantity;
                            $net_amount = $net_amount + $item_total;
                          
                        }
                    
                         // RETRIEVE VAT PERCENTAGES - START
                            $sql741 = "SELECT id,nbt,vat,user FROM tax_percentages WHERE stat = '1'";
                              $result741 = mysqli_query($con, $sql741);
                               while ($arraySomething741 = mysqli_fetch_array($result741)) {
                               $tax_percentage_id = $arraySomething741['id'];
                               $nbt_percentage = $arraySomething741['nbt'];
                               $vat_percentage = $arraySomething741['vat'];
                               }
              
                     $type_s = $_POST['sale_type'];
                     
                     if($type_s=="CREDIT-SALE")
                     $invoice_name = "INVOICE - CREDIT";
                     if($type_s=="CASH-SALE")
                     $invoice_name = "INVOICE - CASH";
                     
//                    echo $net_amount ."<br>";
//                     echo $type_s ."<br>";
//                      echo $customer ."<br>";
//                       echo $tax_percentage_id ."<br>";
//                        echo $driver ."<br>";
//                       echo $user ."<br>";
//          
//                          echo $porter ."<br>";
//                           echo $invoicedate ."<br>";
                           
                         
                      
                  
                     
                     $sql7895 = "INSERT INTO invoice (invoice_amount,net_amount,type,customer_id,invoice_type,tax_percentage_id,driver_id,vehicle_id,date,user,porter_id) VALUES"
                            . " ('$net_amount','$net_amount','$type_s','$customer','$vat','$tax_percentage_id','$driver','$vehicle','$invoicedate','$user','$porter')";
                     mysqli_query($con, $sql7895);
                     echo mysqli_error($con);
                     
                     $delivery_last_id = mysqli_insert_id($con);
                     $delivery_last_no = 10000 + $delivery_last_id;

                         
                         if($vat=="VAT"){
                             $invoice_name=$invoice_name." (TAX)";
                         }
                         
            
       
 ?>                      
  <div class="row">    
 <div class="col-md-12">
                   <center>             
                           <table id="example3" class="table-condensed">
                                     <?php
                                      echo "<tr><th><center>".$companyname."</center></th></tr>";
                                      echo "<tr><td><center>".$companydescription."</center></td></tr>";
                                      echo "<tr><td><center>Address : ".$companyaddress." | Email : ".$companyemail."</center></td></tr>";
                                      echo "<tr><td><center>Contact : ".$companyphone." | Reg : ".$companybrno."1</center></td></tr>";
                                    ?>
         </center>         </table></div>
<u>
</div>                   
   </div>
<br><br>
<h4 class="box-title"><center><?php echo $invoice_name; ?></center></h4></u>    
<br>
<div class="row">
            <div class="col-md-6">
                                
                                    <table id="example3" class="table table-bordered ">
                                    <?php
                                    echo "<tr><td width='150px'>Customer</td><td align='right'>".$salutation." ".$customer_name."</td></tr>";
                                    echo "<tr><td>Contact</td><td align='right'>".$customer_phone."</td></tr>";
                                    echo "<tr><td>Address</td><td align='right'>".$customer_address."</td></tr>";
                                    ?>
                                    </table></div>
    
            <div class="col-md-6">                                 
                                 
                                     <table class="table table-bordered">
                                     <?php
                                     if($vat_no==0)
                                         $vat_no1 ="";
                                     echo "<tr><td width='150px'>Invoice No</td><td align='right'>".$delivery_last_no."</td></tr>";
                                     echo "<tr><td>Date </td><td align='right'>".$invoicedate."</td></tr>";
                                     if($vat=="NON-VAT")
                                     echo "<tr><td>Sales Type </td><td align='right'>".$type_s."</td></tr>";
                                     if($vat=="VAT")
                                     echo "<tr><td>Customer VAT # </td><td align='right'>".$vat_no1."</td></tr>";
                                     ?>
                                     </table></div>
</div>
<?php     
            
                
         
            echo '  <div class="col-md-12"><table id="example1" class="table table-bordered">';

                   $net_total = 0; $total_discount = 0; $vat_amount_total = $nbt_amount_total = 0;
                       echo "<tr><th><center> * </center></th><th><center> Item </center></th><th><center> Qty </center></th><th><center> Unit Price</center></th><th><center> Sub Total</center></th>
                                                   </tr></tfoot></thead><tbody>";
                       
                       $i = 0;
                       
                        for($count = 0; $count < count($_POST["item_name"]); $count++)
                        {  
                            $item = $_POST["item_name"][$count];
                            $item_charge = $_POST["unit_price"][$count];
                            $quantity = $_POST["quantity"][$count];
                            $i++;
                           
                          
                                 
                          $sql74 = "SELECT stock,min_sale_price,cash_price,credit_price FROM product_item WHERE id = '$item'";
                               $result74 = mysqli_query($con, $sql74);
                                   while ($arraySomething74 = mysqli_fetch_array($result74)) {
                                       $min_sale_price = $arraySomething74['min_sale_price'];
                                       $cash_price = $arraySomething74['cash_price'];  
                                       $credit_price = $arraySomething74['credit_price'];  
                                       $stock_shop =  $arraySomething74['stock'];  
                                   }         
                        
                            // DISCOUNT CAL - START
                            if($type_s=="CASH-SALE"){
                            $discount_per_item = $cash_price - $item_charge;
                            $price_to_show = $cash_price;
                            }
                            if($type_s=="CREDIT-SALE"){
                            $discount_per_item = $credit_price - $item_charge;
                            $price_to_show = $credit_price;
                            }
                            
                            $item_discount = $discount_per_item * $quantity;
                            $total_discount = $total_discount + $item_discount;
                            // DISCOUNT CAL - END
                          
                            //RETRIEVE ITEM DATA - START
                                   $cat4 = $cat4_name="";
                                   $cat3 = $cat3_name="";
                                    $cat2 = $cat2_name="";
                                   $cat1 = $cat1_name="";
                             $sql78 = "SELECT id,cat1,cat2,cat3,cat4 FROM product_item WHERE id = '$item'";
                               $result78 = mysqli_query($con, $sql78);
                                   while ($arraySomething78 = mysqli_fetch_array($result78)) {
                                        
    
    $cat1 = $arraySomething78['cat1'];
    $cat2 = $arraySomething78['cat2'];
    $cat3 = $arraySomething78['cat3'];
    $cat4 = $arraySomething78['cat4'];
   



        $sql18 = "SELECT type FROM category_one WHERE id='$cat1' ";
        $result18 = mysqli_query($con,$sql18);
        while ($arraySomething18 = mysqli_fetch_array($result18)) {
        $cat1_name = $arraySomething18['type'];
        }

        $sql2 = "SELECT brand FROM category_two WHERE id='$cat2' ";
        $result2 = mysqli_query($con, $sql2);
        while ($arraySomething2 = mysqli_fetch_array($result2)) {
        $cat2_name = $arraySomething2['brand'];
        }

        $sql3 = "SELECT model FROM category_three WHERE id='$cat3' ";
        $result3 = mysqli_query($con, $sql3);
        while ($arraySomething3 = mysqli_fetch_array($result3)) {
        $cat3_name = $arraySomething3['model'];
        }


        $sql4 = "SELECT extra FROM category_four WHERE id='$cat4' ";
        $result4 = mysqli_query($con, $sql4);
        while ($arraySomething4 = mysqli_fetch_array($result4)) {
        $cat4_name = $arraySomething4['extra'];
        }
    
    
    $item_name = $cat1_name." ".$cat2_name." ".$cat3_name." ".$cat4_name;
                           $serial = "";
                            // DATA INSERTIION TO INVOICE_ITEMS TABLE - START
                            $query = "INSERT INTO invoice_items (item_id,customer_id,item_name,invoice_id,unit_price,discount_per_item,min_sale_price,cash_price,credit_price,quantity,user) VALUES "
                                    . "('$item','$customer','$item_name',' $delivery_last_id','$item_charge','$discount_per_item','$min_sale_price','$cash_price','$credit_price','$quantity','$user')";
                            if(mysqli_query($con, $query)){
                                
                              
                           $new_stock_shop = $stock_shop - $quantity;
            
                           $sql18 = "UPDATE product_item SET stock = '$new_stock_shop' WHERE id='$item'";
                            mysqli_query($con, $sql18); 
                         
                            }
                         // DATA INSERTIION TO INVOICE_ITEMS TABLE - END
                           
                            //RETRIEVE RENT CHARGE DATA - END
                         $sub_total = $item_charge*$quantity;  
                         $net_total = $net_total + $sub_total;
                         
                         //IF DISCOUNTED PRICE > UNIT PRICE
//                         if($price_to_show<=$item_charge){
//                           $price_to_show = $item_charge;
//                         }
                         
                         
                         echo "<tr><td width='1%' align='center'>".$i." </td><td>".strtoupper($item_name)." </td><td align='right'>".$quantity."</td><td align='right'>".number_format($item_charge,2)."</td><td align='right'>".number_format($sub_total,2)."</td>";

                        }
                        
                        }           
                            
                          $net_total_final = $net_total;
                          
                          
                        //VAT NBT CALCULATE - START
                            if($vat=="VAT"){
                                
                                $amount_with_nbt = (100 / (100+$vat_percentage)) * $net_total_final;
                                $net = ($amount_with_nbt / (100+$nbt_percentage)) * 100;
                                $nbt_per_item = ($net / 100) * $nbt_percentage;
                                $vat_per_item = ($amount_with_nbt / 100) * $vat_percentage;
                                
                       
                                $final_total = $net_total_final - ($nbt_per_item+$vat_per_item);
                                
                            }
                            
                           //VAT NBT CALCULATE - END 
                            
                            if($vat=="NON-VAT"){
                            echo "<tr><td colspan='4' align='right'><b>Gross Total</b></td><td align='right'><b>".number_format($net_total,2)."</b></td>";
                            echo "<tr><td colspan='4' align='right'><b>Net Total</b></td><td align='right'><b>".number_format($net_total_final,2)."</b></td>";
                            }
                            if($vat=="VAT"){
                            echo "<tr><td colspan='4' align='right'><b>Total</b></td><td align='right'><b>".number_format($net_total,2)."</b></td>";
                            echo "<tr><td colspan='4' align='right'><b>Net Total</b></td><td align='right'><b>".number_format($final_total,2)."</b></td>";  
                            echo "<tr><td colspan='4' align='right'> </td><td align='right'><b> </b></td>";   
                            echo "<tr><td colspan='4' align='right'><b>NBT ".$nbt_percentage."%</b></td><td align='right'><b>".number_format($nbt_per_item,2)."</b></td>";
                            echo "<tr><td colspan='4' align='right'><b>VAT ".$vat_percentage."%</b></td><td align='right'><b>".number_format($vat_per_item,2)."</b></td>";
                             echo "<tr><td colspan='4' align='right'><b>Grand Total</b></td><td align='right'><b>".number_format($net_total_final,2)."</b></td>";
                                
                                
                                
                            }
                           
                    echo "</table>"   ;
                    

         
                                  
  
$sql4 = "SELECT cheques_payable FROM company WHERE id='$company' ";
$result4 = mysqli_query($con, $sql4);
while ($arraySomething4 = mysqli_fetch_array($result4)) {
$cheques_payable = $arraySomething4['cheques_payable'];
}

            ?>
      <?php
      ?>
      <div class="row">
         <div class="col-md-10">  
           <div class='col-md-5'>
                            
                            <table id="example3" class="table-condensed">
                                      
                                                <?php
                                                
                                                
                                                echo "<tr><td align='left' colspan='4'>Note : All Cheques are subjects to Realisation. </td></tr>";
                                                
                                                echo "<tr><td colspan='4'></td></tr>";
                                                 echo "<tr><td colspan='4'></td></tr>";
                                                 echo "<tr><td colspan='4'></td></tr>";
                                                 echo "<tr><td colspan='4'></td></tr>";
                                                 echo "<tr><td colspan='4'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                 echo "<tr><td colspan='2' align='center'>................................&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td colspan='2' align='center'>................................</td></tr>";
                                                 echo "<tr><td colspan='2' align='center'></td><td colspan='2' align='center'></td></tr>";
                                                echo "<tr><td colspan='2' align='center'>CASHIER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td colspan='2' align='center'>CUSTOMER</td></tr>";

                                               ?>
                                           </table>     
                            
                            
                            
                        </div><br>
  
     </div>
      
      
      </div><br>
  <center>THANK YOU FOR YOUR BUSINESS !</center><br>
  
                        

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>    
<?php 
                        
    }
        else{
            echo $price_low_item;  
        }


        }
        else{
            echo $not_available_item;  
        }

     }
    
     
     
     
     }
}


?>
    