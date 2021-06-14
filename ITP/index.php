<?php
      include 'header.php';
    include 'connection.php';
    
    if ($pwreset== 'F') {
    header("location: change_password.php");
    exit();
    }
    else{
      
    include 'sidebar.php';


    $today = date('Y-m-d');
    $lastdate = "";
    ?><html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shanaz</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

        <!-- Select2 -->
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <script>



        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
                    h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }
            ;  // add zero in front of numbers < 10
            return i;
        }
    </script>

    
    
<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    


$position =  $_SESSION['sess_position'];
if($position == 1 || $position == 2 || $position == 3 )
{

?>
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <?php
        $month = date('m');
                                $sql = "SELECT sum(invoice_amount) AS amount FROM invoice WHERE MONTH(date)='$month'";
                               
                                 $result = mysqli_query($con, $sql);
                        while ($arraySomething1 = mysqli_fetch_array($result)) {
                            $amount = $arraySomething1['amount'];
                        }
                                ?>
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?php echo number_format($amount,2)?></h3>

                                <p>This Month Income</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                       <div class="small-box bg-warning">
                            <div class="inner">
                                  <?php
                                $sql = "SELECT id FROM company_customer WHERE status='1'";
                                $result = mysqli_query($con, $sql);
                                $cus_count = mysqli_num_rows($result);
                                ?>
                                <h3><?php echo $cus_count; ?><sup style="font-size: 20px"></sup></h3>

                                <p>Total Customers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                           <a href="customer_register.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <?php
                                $sql = "SELECT id FROM supplier WHERE status='1'";
                                $result = mysqli_query($con, $sql);
                                $sup_count = mysqli_num_rows($result);
                                ?>

                                <h3><?php echo $sup_count; ?></h3>

                                <p>Total Suppliers</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="supplier_register.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    
                    <?php
                     $month = date('m');
                                $sql = "SELECT sum(amount) AS amount FROM expenses_proc WHERE MONTH(date)='$month'";
                               
                                 $result = mysqli_query($con, $sql);
                        while ($arraySomething1 = mysqli_fetch_array($result)) {
                            $amount = $arraySomething1['amount'];
                        }
                                ?>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?php  echo number_format($amount,2); ?></h3>

                                <p>This Month Expenses</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                
                    <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Customer Feedbacks</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


                <table id="example2" class="table table-bordered table-striped">
                    <thead>


                        <?php
                        echo "<tr><th><center>Invoice Number</center></th><th><center>Payment Done</center></th><th><center>Payment Method </center></th><th><center> Damage Description</center></th>
					<th width='1%'><center> Actions</center></th>
					</tr></tfoot>
                                        </thead>
                                        
                                        <tbody>";


                        $credit_limit1 = 0;

                        $sql = "SELECT id,invoice_id,pay_done,pay_type,description FROM feedback WHERE  status = '1' ";
                        $result = mysqli_query($con, $sql);
                        while ($arraySomething1 = mysqli_fetch_array($result)) {
                            $id = $arraySomething1['id'];
                            $invoice_id = $arraySomething1['invoice_id'];
                            $pay_done = $arraySomething1['pay_done'];
                            $pay_type = $arraySomething1['pay_type'];
                            $description = $arraySomething1['description'];



                                       $id1 = $id + 10000;
                            echo "<tr><td> <center>$id1</center></td><td> &nbsp" . $pay_done . " </td><td> &nbsp" . $pay_type . " </td><td>$description</td>";



                            echo "<td> <div class='btn-group'>
                              <a href='edit_feedback.php?r=$id'><button type='button' class='btn btn-info'>Edit</button></a>
                        <a href='delete_feedback.php?r=$id' button type='button' class='btn btn-warning'>Delete</button>
                       
                     
                      </div></td>";
                        }




                        echo "</tbody>
                                                                                 ";
                        ?>                   


                        </tbody>

                </table>

            </div>  </div>  
<?php
}



else if($position == 4)
{
?>


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        
        
        
</div>
            </div>
        </section>
    </div>
    


                
<?php }

    }?>
