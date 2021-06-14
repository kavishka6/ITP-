<?php
include 'header.php';
include 'connection.php';
?>

<script>
    window.onload = function() { window.print(); }
    </script>
<?php
;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  

     
      $date = $_POST["date"];
       $amount = $_POST["amount"];
        $method = $_POST["method"];
         $invoice = $_POST["invoice"];
      
     
    
       $sql = "INSERT INTO payments (invoice_id,amount,pay_type,invoice_date,user) VALUES"
    . " ('$invoice','$amount','$method','$date','$user')";   
    if(mysqli_query($con, $sql)){
        
         $sql25 = "SELECT paid_amount FROM invoice WHERE id = '$invoice'";
                               $result25 = mysqli_query($con, $sql25);
                                   while ($arraySomething25 = mysqli_fetch_array($result25)) {
                                       $paid_amount = $arraySomething25['paid_amount'];  
                                   }
        $new_amount = $paid_amount + $amount;

        $sql18 = "UPDATE invoice SET paid_amount = '$new_amount' WHERE id='$invoice'";
        mysqli_query($con, $sql18); 
        
    $res_last_id = mysqli_insert_id($con);
  
     
                            
                            
     
      
        
        ?>
        

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title></title>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
   <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
   <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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
  padding: 8px !important;
  margin: 8px !important;
}
        
        
    </style>
</head>
<body>
    
<?php

$today = date('Y-m-d'); 
$todaynow = date("Y-m-d h:i:sA");

 $sql1 = "SELECT name,phone,address,email,description,br_no,cheques_payable FROM company WHERE id='1'";
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

  
                     $invoice_name = "Payment Receipt";
                     
                    
           
       
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
<br><br>
<div class="row">
            <div class="col-md-6">
                                <?php   
                                $grn_no = 10000 + $res_last_id;
                                ?>
                                    <table id="example3" class="table table-bordered table-hover">
                                    <?php
                                    echo "<tr><td width='150px'>Receipt No</td><td align='right'>".$grn_no."</td></tr>";
                                   
                                    ?>
                                    </table></div>
    
            <div class="col-md-6">                                 
                                 
                                     <table class="table table-bordered table-hover">
                                     <?php
                                     echo "<tr><td width='150px'>Date</td><td align='right'>".$date."</td></tr>";
                                    
                                     ?>
                                     </table></div>
</div>
<?php     
            
                
         
            echo '<table id="example1" class="table table-bordered table-hover">';

             
                       echo "<tr><th><center> * </center></th><th><center> Amount </center></th><th><center> Pay Type</center></th>
                                                   </tr></tfoot></thead><tbody>";
                       

                         
                         
                         echo "<tr bgcolor='#80D8AD'><td width='1%'> </td><td>".number_format($amount,2)." </td><td align='right'>".$method."</td>";

                   
                           
                    echo "</table>"   ;
                    

         
                                  


            ?>
   
      <div class="row">
         <div class="col-md-10">  
           <div class='col-md-5'>
                            
                            <table id="example3" class="table-condensed">
                                      
                                                <?php
                                                
                                                
                                        
                                                
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
                                                echo "<tr><td colspan='2' align='center'>CUSTOMER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td colspan='2' align='center'>CASHIER</td></tr>";

                                               ?>
                                           </table>     
                            
                            
                            
                        </div><br>
  
     </div>
      
      
      </div><br>

  
                        
                                    
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

    
        
        
      <?PHP  
          

    }
    
    
 }
 
 


    ?>
 