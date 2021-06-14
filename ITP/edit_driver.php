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


            $sql = "SELECT id,dnic,dname,daddress,dphone,dlicense,rnic,rname,raddress,rphone,rlicense FROM driver WHERE id='$id' ";
            $result = mysqli_query($con, $sql);
            while ($arraySomething1 = mysqli_fetch_array($result)) {

                $id = $arraySomething1['id'];
                $dnic1 = $arraySomething1['dnic'];
                $dname1 = $arraySomething1['dname'];
                $daddress1 = $arraySomething1['daddress'];
                $dphone1 = $arraySomething1['dphone'];
                $dlicense1 = $arraySomething1['dlicense'];
                $rnic1 = $arraySomething1['rnic'];
                $rname1 = $arraySomething1['rname'];
                $raddress1 = $arraySomething1['raddress'];
                $rphone1 = $arraySomething1['rphone'];
                $rlicense1 = $arraySomething1['rlicense'];
            }
            ?>

        <body>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Driver & Rep Information</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Driver details</li>
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
                                <h3 class="card-title">Enter Driver & Rep details</h3>
                            </div>
                            <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- left column -->

                                        <!-- general form elements -->

                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="examplesname">Driver NIC</label>
                                                <input type="text" class="form-control" name="dnic" value='<?php echo $dnic1 ?>' id="dnic" placeholder="Enter Driver NIC" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesphone">Driver Name</label>
                                                <input type="text" class="form-control" id="dname"  value='<?php echo $dname1 ?>' name="dname" placeholder="Enter Driver Name" autocomplete="off" >
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesaddress">Driver Address</label>
                                                <input type="text" class="form-control" id="daddress" value='<?php echo $daddress1 ?>' name="daddress" placeholder="Enter Driver Address" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesfax">Driver Phone</label>
                                                <input type="text" class="form-control" id="dphone" value='<?php echo $dphone1 ?>'  name="dphone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits"  placeholder="Enter Driver Fax" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesemai1">Driving License number</label>
                                                <input type="text" class="form-control" id="dlicence" name="dlicence"   value='<?php echo $dlicense1 ?>' placeholder="Enter Driving License number" autocomplete="off">
                                            </div>

                                        </div>
                                        <!-- /.card-body -->




                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="examplesname">Driver rep NIC</label>
                                                <input type="text" class="form-control" name="rnic" value='<?php echo $rnic1 ?>' id="rnic" placeholder="Enter Driver rep  NIC" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesphone">Driver rep Name</label>
                                                <input type="text" class="form-control" id="rname" name="rname" value='<?php echo $rname1 ?>'   placeholder="Enter Driver rep  Name" autocomplete="off" >
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesaddress">Driver rep Address</label>
                                                <input type="text" class="form-control" id="raddress" name="raddress"  value='<?php echo $raddress1 ?>' placeholder="Enter Driver rep  Address" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesfax">Driver rep Phone</label>
                                                <input type="text" class="form-control" id="rphone" value='<?php echo $rphone1 ?>' name="rphone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits"  placeholder="Enter Driver rep Fax" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplesemai1">Driving License number</label>
                                                <input type="text" class="form-control" id="rlicence" name="rlicence"value='<?php echo $rlicense1 ?>' placeholder="Enter Driving License number" autocomplete="off">
                                            </div>

                                        </div>






                                    </div>



                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id ="submit">Submit </button>
                                    <!--                            <button type="submit" class="btn btn-primary">Update</button>-->

                                </div>
                            </form>
                        </div>



                    </div>
                    <!-- /.card -->




                </section>
            </div>    
            <?php
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dnic = $_POST['dnic'];
            $dname = $_POST['dname'];
            $daddress = $_POST['daddress'];
            $dphone = $_POST['dphone'];
            $dlicence = $_POST['dlicence'];
            $rnic = $_POST['rnic'];
            $rname = $_POST['rname'];
            $raddress = $_POST['raddress'];
            $rphone = $_POST['rphone'];
            $rlicence = $_POST['rlicence'];

            $sql = "UPDATE driver SET dnic='$dnic',dname='$dname', daddress='$daddress',dphone='$dphone',dlicense='$dlicence',rnic='$rnic',rname='$rname',raddress='$raddress',rphone='$rphone',rlicense='$rlicence' WHERE id='$id'";
            if (mysqli_query($con, $sql)) {
                $message = "DRIVER DETAILS UPDATED !";
                echo "<script type='text/javascript'>alert('$message');window.location.href='driver.php';</script>";
                //echo "<script>window.location.href = 'driver.php?msg=DRIVER DETAILS UPDATED ! ';</script>";
            } else {
                echo "<script>window.location = 'edit_driver.php?msge=UPDATING DRIVER DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
            }
        }
        ?>   


