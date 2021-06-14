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



        <script>

            function submitForm() {

                var form_data = new FormData(document.getElementById("myForm"));
                form_data.append("label", "WEBUPLOAD");
                $.ajax({
                    url: "Driver1.php",
                    type: "POST",
                    data: form_data,
                    processData: false, // tell jQuery not to process the data
                    contentType: false   // tell jQuery not to set contentType
                }).done(function (data) {
                    console.log(data);
                    $("#example1").load(window.location + " #example1");
                    $("#example2").load(window.location + " #example2");
                    $('#type').val("");
                    $("#example2").load(window.location + " #example2");
                    $('#dnic').val("");
                    $('#dname').val("");
                    $('#daddress').val("");
                    $('#dphone').val("");
                    $('#dlicense').val("");
                    $('#rnic').val("");
                    $('#rname').val("");
                    $('#raddress').val("");
                    $('#rphone').val("");
                    $('#rlicense').val("");


                    MessageManager.show(data);
                });
                return false;
            }

            var MessageManager = {
                show: function (content) {
                    $('#ajaxmsg').html(content);
                    setTimeout(function () {
                        $('#ajaxmsg').html('');
                    }, 6000);
                }
            };
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 6000);


        </script> 

      




    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

        <?php
        include 'sidebar.php';
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
                            <h1>Driver & Rep Information</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Driver details</li>
                            </ol>
                        </div>
                    </div>
                </div> <!--                </div> /.container-fluid -->
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
                                            <input type="text" class="form-control" name="dnic"  id="dnic" placeholder="Enter Driver NIC" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesphone">Driver Name</label>
                                            <input type="text" class="form-control" id="dname" name="dname" placeholder="Enter Driver Name" autocomplete="off" >
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesaddress">Driver Address</label>
                                            <input type="text" class="form-control" id="daddress" name="daddress" placeholder="Enter Driver Address" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesfax">Driver Phone</label>
                                            <input type="text" class="form-control" id="dphone" name="dphone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits"  placeholder="Enter Driver Fax" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesemai1">Driver Driving License number</label>
                                            <input type="text" class="form-control" id="dlicence" name="dlicence"  placeholder="Enter Driving License number" autocomplete="off">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->




                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="examplesname">Rep NIC</label>
                                            <input type="text" class="form-control" name="rnic"  id="rnic" placeholder="Enter Driver rep  NIC" autocomplete="off" >
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesphone">Rep Name</label>
                                            <input type="text" class="form-control" id="rname" name="rname"  placeholder="Enter Driver rep  Name" autocomplete="off" >
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesaddress">Rep Address</label>
                                            <input type="text" class="form-control" id="raddress" name="raddress" placeholder="Enter Driver rep  Address" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesfax">Rep Phone</label>
                                            <input type="text" class="form-control" id="rphone" name="rphone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits"  placeholder="Enter Driver rep Fax" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesemai1">Rep Driving License number</label>
                                            <input type="text" class="form-control" id="rlicence" name="rlicence"  placeholder="Enter Driving License number" autocomplete="off">
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






                    <br>
                    <br>



                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registered Driver & Rep Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">
                                <thead>


<?php
echo "<tr><th><center>Driver NIC</center></th><th><center> Driver Name </center></th><th><center> Driver Address </center></th><th><center> Driver Phone </center></th><th><center>Driving license Num</center></th><th><center> Rep NIC </center></th><th><center> Rep Name </center></th>
					<th><center> Rep Address </center></th><th><center> Rep Phone </center></th><th><center> Driving license Num </center></th><th width='1%'><center> Actions</center></th>
					</tr></tfoot>
                                        </thead>
                                        
                                        <tbody>";




$sql = "SELECT id,dnic,dname,daddress,dphone,dlicense,rnic,rname,raddress,rphone,rlicense FROM driver WHERE  status = '1' ORDER BY dname ASC";
$result = mysqli_query($con, $sql);
while ($arraySomething1 = mysqli_fetch_array($result)) {
    $id = $arraySomething1['id'];
    $dnic1 = $arraySomething1['dnic'];
    $dname = $arraySomething1['dname'];
    $daddress = $arraySomething1['daddress'];
    $dphone = $arraySomething1['dphone'];
    $dlicense = $arraySomething1['dlicense'];
    $rnic = $arraySomething1['rnic'];
    $rname = $arraySomething1['rname'];
    $raddress = $arraySomething1['raddress'];
    $rphone = $arraySomething1['rphone'];
    $rlicense = $arraySomething1['rlicense'];

    if ($dphone == 0) {
        $dphone = "";
    }
    if ($rphone == 0) {
        $rphone = "";
    }
    

//                                        $id1 = $id + 1000;
echo "<tr><td> <center> $dnic1</center></td> <td> $dname </td><td>$daddress</td><td> $dphone</td><td> <center>$dlicense</center> </td>
                                                                <td>$rnic </td><td>  $rname </td><td> $raddress </td><td>$rphone</td><td>$rlicense</td>";


echo "<td> <div class='btn-group'>
                              <a href='edit_driver.php?r=$id'><button type='button' class='btn btn-info'>Edit</button></a>
                        <a href='delete_driver.php?r=$id' button type='button' class='btn btn-warning'>Delete</button>
                       
                     
                      </div></td></tr>";
}



echo "</tbody>
                                                                                 ";
?>                   


                                    </tbody>

                            </table>

                        </div>  </div>  
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->




            </section>
        </div>    
        <!-- /wrapper-->


        <!-- Form Element sizes -->
        <!-- jQuery -->

        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTEfor demo purposes -->
        <script src="dist/js/demo.js"></script>

    </body>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="plugins/moment/moment.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script type="text/javascript"></script>

    <script>
                            $(function () {

                                $('#example2').DataTable({
                                    "paging": true,
                                    "lengthChange": true,
                                    "searching": true,
                                    "ordering": true,
                                    "info": true,
                                    "autoWidth": false,
                                    "responsive": true,
                                });
                            });
    </script>

