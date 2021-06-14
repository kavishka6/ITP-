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


            $sql = "SELECT id,company_name,company_address,company_phone,company_fax,salutation,person_name,person_mobile,vat_no,br_no,company_email FROM company_customer WHERE id='$id' ";
            $result = mysqli_query($con, $sql);
            while ($arraySomething1 = mysqli_fetch_array($result)) {

                $id = $arraySomething1['id'];
                $company_name1 = $arraySomething1['company_name'];
                $company_address1 = $arraySomething1['company_address'];
                $company_phone1 = $arraySomething1['company_phone'];
                $fax1 = $arraySomething1['company_fax'];
                $salutation1 = $arraySomething1['salutation'];
                $person1 = $arraySomething1['person_name'];
                $person_mobile1 = $arraySomething1['person_mobile'];
                $vat1 = $arraySomething1['vat_no'];
                $br1 = $arraySomething1['br_no'];
                $cemail1 = $arraySomething1['company_email'];
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
                                <h1>Register Company customer</h1>
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
                                <h3 class="card-title">Enter the company details</h3>
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
                                                <label for="examplesname">Company Name</label>
                                                <input type="text" class="form-control" name="companyname" value='<?php echo $company_name1 ?>' id="companyname" placeholder="Enter Company Name" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesphone">Company Phone</label>
                                                <input type="text" class="form-control" id="phone"  value='<?php echo $company_phone1 ?>' name="phone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits" placeholder="Enter Company Phone" autocomplete="off" >
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesaddress">Company Address</label>
                                                <input type="text" class="form-control" id="address" value='<?php echo $company_address1 ?>' name="address" placeholder="Enter Company Address" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesfax">Company Fax</label>
                                                <input type="text" class="form-control" id="fax" value='<?php echo $fax1 ?>' name="fax" placeholder="Enter Company Fax" autocomplete="off">
                                            </div>


                                        </div>
                                        <!-- /.card-body -->






                                        <div class="col-md-6">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- select -->

                                                    <div class="form-group">
                                                        <label for="examplebr">Business Registration number</label>
                                                        <input type="text" class="form-control" id="br" name="br" value='<?php echo $br1 ?>' placeholder="Enter BR Number" autocomplete="off">
                                                    </div>





                                                </div>
                                                <div class="col-md-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="examplevat">VAT No</label>
                                                        <input type="text" class="form-control" value='<?php echo $vat1 ?>' id="vat" name ="vat" placeholder="Enter VAT No" autocomplete="off">
                                                    </div>
                                                </div>
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
                                                <label for="examplecname">Contact Person Name</label>
                                                <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Contact Person Name" autocomplete="off" value='<?php echo $person1 ?>'>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- select -->

                                                    <div class="form-group">
                                                        <label for="examplebr">Contact Person mobile</label>
                                                        <input type="text" class="form-control" id="cmobile" name="cmobile" value='<?php echo $person_mobile1 ?>' pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits" placeholder="Enter mobile Number" autocomplete="off">
                                                    </div>





                                                </div>
                                                <div class="col-md-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="examplevat">Company Email</label>
                                                        <input type="email" class="form-control" id="email" value='<?php echo $cemail1 ?>' name ="email" placeholder="Enter company email " autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" id ="submit">Submit </button>


                                        </div>
                                    </div> 
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </body>


        <?php
    }
    ?>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        //echo $vat;
        $sql = "UPDATE company_customer SET company_name='$companyname',br_no='$br', vat_no='$vat',company_phone='$com_phone',company_fax='$fax',company_address='$com_address',company_email='$com_email' ,salutation='$salutation',person_name='$pname',person_mobile='$pmobile'  WHERE id='$id'";
        if (mysqli_query($con, $sql)) {

//                            $sql1 ="INSERT INTO user_activity (user,activity) VALUES ('$user','SUPPLIER DETAILS UPDATED ID :$id ')";
            //mysqli_query($con, $sql1);

            $message = "COMPANY DETAILS UPDATED !";
            echo "<script type='text/javascript'>alert('$message');window.location.href='company_register.php';</script>";
            //echo "<script>window.location = 'company_register.php?msg=CUSTOMER DETAILS UPDATED ! ';</script>";
        } else {
            echo "<script>window.location = 'edit_company.php?msge=UPDATING CUSTOMER DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
        }
    }
    ?>