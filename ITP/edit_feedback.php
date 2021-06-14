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


            $sql = "SELECT id,invoice_id,pay_done,pay_type,description,recieved_date FROM feedback  WHERE id='$id' ";
            $result = mysqli_query($con, $sql);
            while ($arraySomething1 = mysqli_fetch_array($result)) {
                $id = $arraySomething1['id'];
                $invoice_id1 = $arraySomething1['invoice_id'];
                $pay_done1 = $arraySomething1['pay_done'];
                $pay_type1 = $arraySomething1['pay_type'];
                $description1 = $arraySomething1['description'];
                $res_date1 = $arraySomething1['recieved_date'];
            }
            ?>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div id='ajaxmsg'>
                    </div>
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Invoice Feedback</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Feedback</li>
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
                                <h3 class="card-title">Enter Feedback Details</h3>
                            </div>
                            <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- left column -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Delivery Note Number <font color='red'> *</font></label>

                                                <select class="form-control select2" style="width: 100%;" name="innum" id ="cat1" required >
                                                    <?php echo' <option value="" value=' . $invoice_id1 . ' > ' . $invoice_id1 . ' </OPTION>' ?>
                                                    <?php
                                                    $sql = "select id FROM invoice where stat = '1' AND feedback='0'";
                                                    $result = mysqli_query($con, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                        ?>

                                                        <option value = " <?php echo $row['id'] ?> "> <?php echo "D" . ($row['id'] + 10000); ?> </option>;


                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Received Date<font color='red'> *</font></label>
                                                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                    <input autocomplete="off" type="text" id="re_date" value='<?php echo $res_date1 ?>' name="re_date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                                    <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- select -->

                                            <div class="form-group">
                                                <label>Payment Done <font color='red'> *</font></label>

                                                <select class="form-control select2" style="width: 100%;"   name="pay_done" id="type" >

                                                    <?php ECHO '<option value="' . $pay_done1 . '" > ' . $pay_done1 . '</OPTION>'; ?>
                                                    <option value="YES" value='<?php echo $pay_done1 ?>'>YES</option>
                                                    <option value="NO" value='<?php echo $pay_done1 ?>'>NO</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Payment TYPE<font color='red'> *</font></label>

                                                <select class="form-control select2" style="width: 100%;" name="pay_type"  id="type" value='<?php echo $pay_type1 ?>'>
                                                    <?php echo '<option selected="selected"  name="pay_type" id="type" value=' . $pay_type1 . '> ' . $pay_type1 . '</option>' ?>
                                                    <option value="CASH" >CASH</option>
                                                    <option value="CHEQUE">CHEQUE</option>

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Damage Item Description</label>
                                        <textarea class="form-control" name="description" rows="3"  placeholder="Enter ..."><?php echo $description1 ?></textarea>
                                    </div>



                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary" id ="submit">Submit </button>


                                </div>



                            </form>   
                        </div>

                        <?php
                    }

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $invoice_num = $_POST['innum'];
                        $recieved_date = $_POST['re_date'];
                        $pay_done = $_POST['pay_done'];
                        $pay_type = $_POST['pay_type'];

                        $description = strtoupper($_POST['description']);
                        //echo $vat;
                        $sql = "UPDATE feedback SET invoice_id='$invoice_num',recieved_date='$recieved_date', pay_done='$pay_done',pay_type='$pay_type',description='$description' WHERE id='$id'";
                        if (mysqli_query($con, $sql)) {

//                            $sql1 ="INSERT INTO user_activity (user,activity) VALUES ('$user','SUPPLIER DETAILS UPDATED ID :$id ')";
                            //mysqli_query($con, $sql1);

                            $message = "FEEDBACK DETAILS UPDATED !";
                            echo "<script type='text/javascript'>alert('$message');window.location.href='feedback_customer.php';</script>";
                            //echo "<script>window.location = 'feedback_customer.php?msg=FEEDBACK DETAILS UPDATED ! ';</script>";
                        } else {
                            echo "<script>window.location = 'edit_feedback.php?msge=UPDATING FEEDBACK DETAILS FAILED ! CONTACT ADMINISTRATOR ';</script>";
                        }
                    }
                    ?>   

                    <!-- bs-custom-file-input -->
                    <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="dist/js/adminlte.min.js"></script>
                    <!-- AdminLTEfor demo purposes -->
                    <script src="dist/js/demo.js"></script>





                    <!-- jQuery -->

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





                    <script>
                            $(function () {
                                //Initialize Select2 Elements
                                $('.select2').select2()

                                //Initialize Select2 Elements
                                $('.select2bs4').select2({
                                    theme: 'bootstrap4'
                                })

                                //Datemask dd/mm/yyyy
                                $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
                                //Datemask2 mm/dd/yyyy
                                $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
                                //Money Euro
                                $('[data-mask]').inputmask()

                                //Date range picker
                                $('#reservationdate').datetimepicker({
                                    format: 'YYYY-MM-DD'
                                });
                                $('#reservationdate1').datetimepicker({
                                    format: 'YYYY-MM-DD'
                                });
                                //Date range picker
                                $('#reservation').daterangepicker();
                                //Date range picker with time picker

                                $('#reservationtime').daterangepicker({
                                    timePicker: true,
                                    timePickerIncrement: 30,
                                    locale: {
                                        format: 'MM/DD/YYYY hh:mm A'
                                    }
                                })
                                //Date range as a button
                                $('#daterange-btn').daterangepicker(
                                        {
                                            ranges: {
                                                'Today': [moment(), moment()],
                                                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                                                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                                            },
                                            startDate: moment().subtract(29, 'days'),
                                            endDate: moment()
                                        },
                                        function (start, end) {
                                            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                                        }
                                )

                                //Timepicker
                                $('#timepicker').datetimepicker({
                                    format: 'LT'
                                })

                                //Bootstrap Duallistbox
                                $('.duallistbox').bootstrapDualListbox()

                                //Colorpicker
                                $('.my-colorpicker1').colorpicker()
                                //color picker with addon
                                $('.my-colorpicker2').colorpicker()

                                $('.my-colorpicker2').on('colorpickerChange', function (event) {
                                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                                });

                                $("input[data-bootstrap-switch]").each(function () {
                                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                                });

                            })
                    </script>



                    <!-- DataTables -->
                    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
                    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->
                    <script src="dist/js/demo.js"></script>