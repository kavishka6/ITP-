<?php
include 'header.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html>
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
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

        <?php
        include 'sidebar.php';
        ?>
        <?php
        if (isset($_GET['r'])) {
            $id = $_GET['r'];


            $sql = "SELECT id,nic,person_name,company_name,company_email,type_customer,company_address,company_phone,salutation,person_mobile,recidence,min_sale_price FROM company_customer WHERE id='$id' ";
            $result = mysqli_query($con, $sql);
            while ($arraySomething1 = mysqli_fetch_array($result)) {

                $id = $arraySomething1['id'];
                $nic1 = $arraySomething1['nic'];
                $email1 = $arraySomething1['company_email'];
                $address1 = $arraySomething1['company_address'];
                $salutation1 = $arraySomething1['salutation'];
                $name1 = $arraySomething1['person_name'];
                $mobile1 = $arraySomething1['person_mobile'];
                $type1 = $arraySomething1['type_customer'];
                $recidence1 = $arraySomething1['recidence'];
                $msp1 = $arraySomething1['min_sale_price'];
            }
            ?>
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div id='ajaxmsg'>
                    </div>
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Register Individual Customer</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Company  details</li>
                                </ol>
                            </div>
                        </div>
                        <!--                </div> /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Enter the Customer details</h3>
                            </div>
                            <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- left column -->
                                        <div class="col-md-6">
                                            <!-- general form elements -->

                                            <!-- /.card-header -->
                                            <!-- form start -->


                                            <div class="form-group">
                                                <label for="examplesname">NIC/PASSPORT</label>
                                                <input type="text" class="form-control" name="nic"  id="nic" placeholder="Enter Customer's NIC" autocomplete="off"value='<?php echo $nic1 ?>'>
                                            </div>
                                            <div class="form-group">
                                                <label>Customer Type<font color='red'> *</font></label>
                                                <select class="form-control select2" style="width: 100%;" name="type" id="type" value='<?php echo $type1 ?>' >
                                                    <option value=''>CUSTOMER TYPE</option>
                                                    <option value="CASH/CREDIT CUSTOMER" value='<?php echo $type1 ?>'> CASH/CREDIT CUSTOMER </OPTION>
                                                    <option value="CASH CUSTOMER" value='<?php echo $type1 ?>'> CASH CUSTOMER</OPTION>  
                                                    <option value="CREDIT CUSTOMER" value='<?php echo $type1 ?>'> CREDIT CUSTOMER </OPTION> 


                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Contact Person Salutation</label>
                                                <select class="form-control select2" style="width: 100%;" name="salutation" id="salutation" >
                                                    <?php ECHO '<option value="' . $salutation . '"> ' . $salutation . '</OPTION>'; ?>

                                                    <option value='Mr'>Mr</option>
                                                    <option value='Mrs'>Mrs</option>
                                                    <option value='Miss'>Miss</option>
                                                    <option value='Dr'>Dr</option>
                                                    <option value='Ms'>Ms</option>
                                                    <option value='Rev'>Rev</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesfax">Name<font color='red'> *</font></label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Customer's Name" value='<?php echo $name1 ?>' autocomplete="off">
                                            </div>


                                        </div>
                                        <!-- /.card-body -->






                                        <div class="col-md-6">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- select -->


                                                    <div class="form-group">
                                                        <label>Price below MSP<font color='red'> *</font></label>
                                                        <select class="form-control select2" style="width: 100%;" name="msp" id="msp">
                                                            <?php ECHO '<option value="' . $msp1 . '"> ' . $msp1 . '</OPTION>'; ?>

                                                            <option value='YES'>YES</option>
                                                            <option value='NO'>NO</option>

                                                        </select>
                                                    </div>



                                                </div>
                                                <div class="col-md-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="examplesemai1"> Email</label>
                                                        <input type="email" class="form-control" id="email"  value='<?php echo $email1 ?>' name="email"  placeholder="Enter Customer's Email" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="examplecname">Address</label>
                                                <input type="text" class="form-control" id="address" value='<?php echo $address1 ?>'  name="address" placeholder="Enter Customer Address" autocomplete="off">
                                            </div>



                                            <div class="form-group">
                                                <label for="examplecphone">Mobile</label>
                                                <input type="text" class="form-control" id="mobile" value='<?php echo $mobile1 ?>' name="mobile" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Dpattern=igits" placeholder="Enter Contact Person Mobile" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplecphone">Home Contact</label>
                                                <input type="text" class="form-control" id="recidence" name="recidence" value='<?php echo $recidence1 ?>' pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Dpattern=igits" placeholder="Enter Contact Person Mobile" autocomplete="off">
                                            </div>


                                        </div>
                                    </div>



                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id ="submit">Submit </button>


                                </div>
                            </form>
                        </div>

                    </div>
                </section>
            </div>

            <?php
        }
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nic = $_POST['nic'];
            $type = $_POST['type'];
            $salutation = strtoupper($_POST['salutation']);
            $name = strtoupper($_POST['name']);
            $address = strtoupper($_POST['address']);
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $recidence = $_POST['recidence'];
            $msp = $_POST['msp'];
            //echo $vat;
            $sql = "UPDATE company_customer SET nic='$nic',type_customer='$type', salutation='$salutation',person_name='$name',company_address='$address',person_mobile='$mobile',company_email='$email' ,min_sale_price='$msp',recidence='$recidence'  WHERE id='$id'";
            if (mysqli_query($con, $sql)) {

//                            $sql1 ="INSERT INTO user_activity (user,activity) VALUES ('$user','SUPPLIER DETAILS UPDATED ID :$id ')";
                //mysqli_query($con, $sql1);

                $message = "CUSTOMER DETAILS UPDATED !";
                echo "<script type='text/javascript'>alert('$message');window.location.href='customer_register.php';</script>";
                //echo "<script>window.location = 'customer_register.php?msg=CUSTOMER DETAILS UPDATED ! ';</script>";
            } else {
                echo "<script>window.location = 'edit_customer.php?msge=UPDATING CUSTOMER DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
            }
        }
        ?>