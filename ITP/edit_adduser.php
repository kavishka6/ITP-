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


            $sql = "SELECT id,name,employee_name,password,phone,email,position FROM users WHERE id='$id' ";
            $result = mysqli_query($con, $sql);
            while ($arraySomething1 = mysqli_fetch_array($result)) {

                $name = $arraySomething1['name'];
                $phone = $arraySomething1['phone'];
                $email = $arraySomething1['email'];
                
                $password = $arraySomething1['password'];
                $position = $arraySomething1['position'];
                 $ename = $arraySomething1['employee_name'];
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
                                <h1>User Register </h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Users details</li>
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
                                <h3 class="card-title">Enter the User details</h3>
                            </div>
                            <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                                <div class="card-body">
                                    <div class="row">


                                        <div class="col-md-6">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- select -->

                                                    <div class="form-group">
                                                        <label for="examplesemai1"> UserName</label>
                                                        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name" value='<?php echo $name ?>' autocomplete="off">
                                                    </div>



                                                </div>
                                                <div class="col-md-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="examplesemai1"> Email<font color='red'> *</font></label>
                                                        <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Customer's Email" value='<?php echo $email ?>' autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- select -->


                                                    <div class="form-group">
                                                        <label>Position<font color='red'> *</font></label>
                                                        <select class="form-control select2" style="width: 100%;" name="position" id="position" >
                                                           <?php ECHO '<option value="' . $position . '"> ' . $position . '</OPTION>'; ?>
                                                            <option value='1'>Super Admin</option>
                                                            <option value='2'>Admin</option>
                                                            <option value='3'>User</option>
                                                            <option value='4'>Customer</option>

                                                        </select>
                                                    </div>



                                                </div>
                                                <div class="col-md-6">
                                                    <!-- select -->
                                                    <div class="form-group">
                                                        <label for="examplesemai1"> Phone</label>
                                                        <input type="text" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" value='<?php echo $phone ?>' title="Invalid Format.Contact No consists of 10 Dpattern=igits" placeholder="Enter Phone number" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                                <!-- select -->

                                                <div class="form-group">
                                                    <label for="examplesemai1">Employee Name</label>
                                                    <input type="text" class="form-control" id="ename" name="ename" value='<?php echo $ename ?>' placeholder="Enter Employee  Name" autocomplete="off">
                                                </div>



                                            </div>



                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id ="submit">Submit </button>


                                </div>
                            </form>
                        </div>

                        <?php
                    }




                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $name = $_POST['name'];
                        $pw = 'abc123';
                        $pw1 = sha1($pw);
                        $email = $_POST['email'];
                        $phone = $_POST['mobile'];
                        $position = $_POST['position'];
                        $ename = $_POST['ename'];
                        


                        $sql = "UPDATE users SET name='$name',employee_name='$ename',password='$pw1', phone='$phone',email='$email',position='$position' WHERE id='$id'";
                        if (mysqli_query($con, $sql)) {
                            $message = "USER DETAILS UPDATED !";
                            echo "<script type='text/javascript'>alert('$message');window.location.href='add_user.php';</script>";
                            //echo "<script>window.location.href = 'driver.php?msg=DRIVER DETAILS UPDATED ! ';</script>";
                        } else {
                            echo "<script>window.location = 'edit_adduser.php?msge=UPDATING USER DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
                        }
                    }
                    ?>   

