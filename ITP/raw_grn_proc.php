<?php
include 'header.php';
include 'connection.php';

?>

<script>
    window.onload = function () {
        window.print();
    }
</script>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    if (isset($_POST["item_name"][0])) {

        $date = $_POST["grndate"];
        $description = $_POST["des"];
        $invoice_no = $_POST["supinvoicenum"];
        $supplier = $_POST["sname"];
        
        
        //CALCULATE GRN TOTAL - START
        $sub_total = $_POST["sub_total"];
        
         //CALCULATE GRN TOTAL - END


        $sql = "INSERT INTO row_grn (supplier,grn_date,description,amount,user,supplier_invoice_no) VALUES"
                . " ('$supplier','$date','$description','$sub_total','$user','$invoice_no')";
        if (mysqli_query($con, $sql)) {



            $grn_last_id = mysqli_insert_id($con);



            for ($count = 0; $count < count($_POST["item_name"]); $count++) {
                $item = $_POST["item_name"][$count];
                $qty = $_POST["qty"][$count];
                $price= $_POST["unit_price"][$count];


                $sql25 = "SELECT stock_stores FROM row_item WHERE id = '$item'";
                $result25 = mysqli_query($con, $sql25);
                while ($arraySomething25 = mysqli_fetch_array($result25)) {
                    $stock_shop = $arraySomething25['stock_stores'];
                }
                $new_stock_shop = $stock_shop + $qty;

                $sql18 = "UPDATE row_item SET stock_stores = '$new_stock_shop' WHERE id='$item'";
                mysqli_query($con, $sql18);

                $sql = "INSERT INTO raw_grn_items (raw_item_id,qty,price,row_grn_id,user) VALUES"
                        . " ('$item','$qty','$price','$grn_last_id','$user')";

                mysqli_query($con, $sql);
            }
            
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


            $invoice_name = "GRN (Raw Items to Stores)";
            ?>                      
                <div class="row">    
                    <div class="col-md-12">
                        <center>             
                            <table >
                <?php
                echo "<tr><th><center>" . $companyname . "</center></th></tr>";
                echo "<tr><td><center>" . $companydescription . "</center></td></tr>";
                echo "<tr><td><center>Address : " . $companyaddress . " | Email : " . $companyemail . "</center></td></tr>";
                echo "<tr><td><center>Contact : " . $companyphone . " | Reg : " . $companybrno . "1</center></td></tr>";
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
            $grn_no = 10000 + $grn_last_id;
            
            $sql1 = "SELECT company_name FROM supplier WHERE id='$supplier'";
            $result1 = mysqli_query($con, $sql1);
            while ($arraySomething1 = mysqli_fetch_array($result1)) {
                $supplier_name = $arraySomething1['company_name'];
            }
            
            ?>
                    <table id="example3" class="table table-bordered table-hover">
            <?php
            echo "<tr><td width='150px'>GRN No</td><td align='right'>G" . $grn_no . "</td></tr>"
                    . "<tr><td width='150px'>Supplier Invoice #</td><td align='right'>G" . $invoice_no. "</td></tr>";
            ?>
                    </table></div>

                <div class="col-md-6">                                 

                    <table class="table table-bordered table-hover">
                        <?php
                        echo "<tr><td width='150px'>Date</td><td align='right'>" . $date . "</td></tr>";
                        echo "<tr><td width='150px'>Supplier</td><td align='right'>" . $supplier_name . "</td></tr>";
                        ?>
                    </table></div>
            </div>
            <?php
            echo '<table id="example1" class="table table-bordered table-hover">';


            echo "<tr><th><center> * </center></th><th><center> Item </center></th><th><center> Qty</center></th><th><center> Unit Price</center></th>
                               <th style='width:10px'><center> Total</center></th>                    </tr></tfoot></thead><tbody>";
            $i = 0;
            for ($count = 0; $count < count($_POST["item_name"]); $count++) {
                $i++;
                $item = $_POST["item_name"][$count];
                $qty = $_POST["qty"][$count];
                $price= $_POST["unit_price"][$count];

                $cat4 = $cat4_name = "";
                $cat3 = $cat3_name = "";
                $cat2 = $cat2_name = "";
                $cat1 = $cat1_name = "";
                $sql356 = "SELECT id,cat1,cat2,cat3,cat4 FROM row_item WHERE id='$item'";
                $result356 = mysqli_query($con, $sql356);
                while ($arraySomething78 = mysqli_fetch_array($result356)) {
                    $cat1 = $arraySomething78['cat1'];
                    $cat2 = $arraySomething78['cat2'];
                    $cat3 = $arraySomething78['cat3'];
                    $cat4 = $arraySomething78['cat4'];
                    
                    $sql18 = "SELECT type FROM row_one WHERE id='$cat1' ";
                    $result18 = mysqli_query($con, $sql18);
                    while ($arraySomething18 = mysqli_fetch_array($result18)) {
                        $cat1_name = $arraySomething18['type'];
                    }

                    $sql2 = "SELECT brand FROM row_two WHERE id='$cat2' ";
                    $result2 = mysqli_query($con, $sql2);
                    while ($arraySomething2 = mysqli_fetch_array($result2)) {
                        $cat2_name = $arraySomething2['brand'];
                    }

                    $sql3 = "SELECT model FROM row_three WHERE id='$cat3' ";
                    $result3 = mysqli_query($con, $sql3);
                    while ($arraySomething3 = mysqli_fetch_array($result3)) {
                        $cat3_name = $arraySomething3['model'];
                    }


                    $sql4 = "SELECT extra FROM row_four WHERE id='$cat4' ";
                    $result4 = mysqli_query($con, $sql4);
                    while ($arraySomething4 = mysqli_fetch_array($result4)) {
                        $cat4_name = $arraySomething4['extra'];
                    }


                    $item_name = $cat1_name . " " . $cat2_name . " " . $cat3_name . " " . $cat4_name;



                    echo "<tr bgcolor='#80D8AD'><td width='1%'>".$i." </td><td>" . $cat1_name . " " . $cat2_name . " " . $cat3_name . " " . $cat4_name . " </td><td align='right'>" . $qty . "</td>"
                            . "<td align='right'>" . number_format($price, 2, '.', ',') . "</td><td align='right'>" . number_format($price*$qty, 2, '.', ',') . "</td>";
                }
            }
             echo "<tr><td colspan='4'><b>Net Total</b></td><td align='right'><b>".number_format($sub_total, 2, '.', ',')."</b></td></tr>";




            echo "</table>";
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
            echo "<tr><td colspan='2' align='center'>SUPPLIER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td colspan='2' align='center'>MANAGER-STORES</td></tr>";
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
}
?>
 
