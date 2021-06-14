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


            $sql = "SELECT id,cat1,min_sale_price,cat2,cash_price,cat3,credit_price,cat4,stock FROM product_item WHERE id='$id' ";
            $result = mysqli_query($con, $sql);
            while ($arraySomething1 = mysqli_fetch_array($result)) {
                $id = $arraySomething1['id'];
                $cat1 = $arraySomething1['cat1'];
                $msp = $arraySomething1['min_sale_price'];
                $cat2 = $arraySomething1['cat2'];
                $cash = $arraySomething1['cash_price'];

                $cat3 = $arraySomething1['cat3'];
                $credit = $arraySomething1['credit_price'];
                $cat4 = $arraySomething1['cat4'];
                $stock = $arraySomething1['stock'];


                $sql1 = "select type from category_one where id ='$cat1'  ";
                $result1 = mysqli_query($con, $sql1);
                while ($row1 = mysqli_fetch_array($result1)) {
                    $cat11 = $row1['type'];
                }

                $sql22 = "select brand from category_two where id ='$cat2'  ";
                $result2 = mysqli_query($con, $sql22);
                while ($row2 = mysqli_fetch_array($result2)) {
                    $cat22 = $row2['brand'];
                }

                $sql33 = "select model from category_three where id ='$cat3'  ";
                $result3 = mysqli_query($con, $sql33);
                while ($row3 = mysqli_fetch_array($result3)) {
                    $cat33 = $row3['model'];
                }

                $sql44 = "select extra from category_four where id ='$cat4'  ";
                $result4 = mysqli_query($con, $sql44);
                while ($row4 = mysqli_fetch_array($result4)) {
                    $cat44 = $row4['extra'];
                }
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
                                <h1>Add New Item - Products</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Item details</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">


                    <div class="container-fluid">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Select the Item details</h3>
                            </div>
                            <form name="myForm" id="myform" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();" >
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label> Category 01 : Type<font color='red'> *</font></label>

                                                <select class="form-control select2" style="width: 100%;" name="cat1" id ="cat1">
                                                    <?php echo' <option value="" value=' . $cat11 . ' > ' . $cat11 . ' </OPTION>' ?>
                                                    <?php
                                                    $sql = "select id,type from category_one where status = '1'";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>

                                                        <option value = " <?php echo $row['id'] ?> "> <?php echo $row['type'] ?> </option>;


                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="examplebr">Minimum Selling Price(LKR)<font color='red'> *</font></label>
                                                <input type="number" class="form-control" id="msp" name="msp" value='<?php echo $msp ?>' placeholder="Minimum Selling Price" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label>Category 02 : Brand<font color='red'> *</font></label>
                                                <select class="form-control select2" style="width: 100%;" name="cat2" id ="cat2" >
                                                    <?php echo' <option value="" value=' . $cat22 . ' > ' . $cat22 . ' </OPTION>' ?>

                                                    <?php
                                                    $sql = "select id,brand from category_two where status = '1'";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>

                                                        <option value = " <?php echo $row['id'] ?> "> <?php echo $row['brand'] ?> </option>;


                                                        <?php
                                                    }
                                                    ?>


                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="examplebr">Cash Price(LKR)<font color='red'> *</font></label>
                                                <input type="number" class="form-control" id="cash" value='<?php echo $cash ?>' name="cash"  placeholder="Cash Price" autocomplete="off">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label>Category 03 : Model<font color='red'> *</font></label>
                                                <select class="form-control select2" style="width: 100%;" name="cat3" id ="cat3">
                                                    <?php echo' <option value="" value=' . $cat33 . ' > ' . $cat33 . ' </OPTION>' ?>


                                                    <?php
                                                    $sql = "select id,model from category_three where status = '1'";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>

                                                        <option value = " <?php echo $row['id'] ?> "> <?php echo $row['model'] ?> </option>;


                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="examplebr">Credit Price(LKR)<font color='red'> *</font></label>
                                                <input type="number" class="form-control" id="credit" name="credit" value='<?php echo $credit ?>' placeholder="Credit Price" autocomplete="off">
                                            </div>
                                        </div>      





                                        <div class="col-md-3">


                                            <div class="form-group">
                                                <label>Category 04 : Extra Features</label>
                                                <select class="form-control select2" style="width: 100%;" name="cat4" id ="cat4">
                                                    <?php echo' <option value="" value=' . $cat44 . ' > ' . $cat44 . ' </OPTION>' ?>
                                                    <?php
                                                    $sql = "select id,extra from category_four where status = '1'";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>

                                                        <option value = " <?php echo $row['id'] ?> "> <?php echo $row['extra'] ?> </option>;


                                                        <?php
                                                    }
                                                    ?>


                                                </select>
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

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cat1 = $_POST['cat1'];
            $msp = $_POST['msp'];
            $cat2 = $_POST['cat2'];
            $cash = $_POST['cash'];

            $cat3 = $_POST['cat3'];
            $credit = $_POST['credit'];
            $cat4 = $_POST['cat4'];


            //echo $vat;
            $sql = "UPDATE product_item SET cat1='$cat1',cat2='$cat2', cat3='$cat3',cat4='$cat4',min_sale_price='$msp',cash_price='$cash',credit_price='$credit' WHERE id='$id'";
            if (mysqli_query($con, $sql)) {

//                            $sql1 ="INSERT INTO user_activity (user,activity) VALUES ('$user','SUPPLIER DETAILS UPDATED ID :$id ')";
                //mysqli_query($con, $sql1);
                
                $message = "PRODUCT ITEM DETAILS UPDATED !";
                echo "<script type='text/javascript'>alert('$message');window.location.href='product_item.php';</script>";
                //echo "<script>window.location = 'product_item.php?msg=FEEDBACK DETAILS UPDATED ! ';</script>";
            } else {
                echo "<script>window.location = 'edit_productitem.php?msge=UPDATING FEEDBACK DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
            }
        }
        ?>  

