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

            $sql = "select id,type from expenses_category  WHERE id='$id'";
            $result = mysqli_query($con, $sql);

            while ($arraySomething1 = mysqli_fetch_array($result)) {

                $id = $arraySomething1['id'];
                $type1 = $arraySomething1['type'];
            }
            ?>

        <body> 
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div id='ajaxmsg'>
                    </div>
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Add Expenses Main Category</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Expenses_category_01</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                    <div class="container-fluid">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Enter Name for a Main Expense</h3>
                            </div>
                            <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                                <div class="card-body">

                                    <!-- left column -->
                                    <div class="col-md-12">
                                        <!-- general form elements -->

                                        <!-- /.card-header -->
                                        <!-- form start -->


                                        <div class="form-group">
                                            <label for="examplesname">Expenses Main Category</label>
                                            <input type="hidden" class="form-control" name="id"  id="id">
                                            <input type="text" class="form-control" name="type"  id="type" placeholder="Type" value='<?php echo $type1 ?>' autocomplete="off">
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
                </section>
            </div>

            <?php
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $type = strtoupper($_POST['type']);



            $sql = "UPDATE expenses_category SET type='$type' WHERE id='$id'";
            if (mysqli_query($con, $sql)) {
                $message = "EXPENSES DETAILS UPDATED !";
                echo "<script type='text/javascript'>alert('$message');window.location.href='expenses_cat1.php';</script>";
                //echo "<script>window.location = 'expenses_cat1.php?msg=DRIVER DETAILS UPDATED ! ';</script>";
            } else {
                echo "<script>window.location = 'edit_expenses.php?msge=UPDATING EXPENSES DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
            }
        }
        ?>