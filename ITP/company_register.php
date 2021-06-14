
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
                    url: "company_register1.php",
                    type: "POST",
                    data: form_data,
                    processData: false, // tell jQuery not to process the data
                    contentType: false   // tell jQuery not to set contentType
                }).done(function (data) {
                    console.log(data);
                    $("#example2").load(window.location + " #example2");
                    $('#cname').val("");
                    $('#br').val("");
                    $('#address').val("");
                    $('#cmobile').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#fax').val("");
                    $('#vat').val("");
                    $('#companyname').val("");
                    $('#msp').val("");
                    MessageManager.show(data);
                });
                return false;
            }

            var MessageManager = {
                show: function (content) {
                    $('#ajaxmsg').html(content);
                    setTimeout(function () {
                        $('#ajaxmsg').html('');
                    }, 3000);
                }
            };
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 4000);
            
           

        </script>

        <script>
            function myFunction() {
                document.getElementById("myForm").reset();
            }
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
                                            <label for="examplesname">Company Name<font color='red'> *</font></label></label>
                                            <input type="text" class="form-control" name="companyname"  id="companyname" placeholder="Enter Company Name" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesphone">Company Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits" placeholder="Enter Company Phone" autocomplete="off" >
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesaddress">Company Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Company Address" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesfax">Company Fax</label>
                                            <input type="text" class="form-control" id="fax" name="fax" placeholder="Enter Company Fax" autocomplete="off">
                                        </div>
                                     

                                    </div>
                                    <!-- /.card-body -->






                                    <div class="col-md-6">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- select -->

                                                <div class="form-group">
                                                    <label for="examplebr">Business Registration number</label>
                                                    <input type="text" class="form-control" id="br" name="br"  placeholder="Enter BR Number" autocomplete="off">
                                                </div>





                                            </div>
                                            <div class="col-md-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label for="examplevat">VAT No</label>
                                                    <input type="text" class="form-control" id="vat" name ="vat" placeholder="Enter VAT No" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Contact Person Salutation<font color='red'> *</font></label></label>
                                            <select class="form-control select2" style="width: 100%;" name="salutation" id="salutation" required>
                                                <option value=''>Contact Person Salutation</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Ms">Ms</option>

                                            </select>
                                        </div>



                                        <div class="form-group">
                                            <label for="examplecname">Contact Person Name<font color='red'> *</font></label></label>
                                            <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Contact Person Name" autocomplete="off" required>
                                        </div>
                                        
                                         <div class="row">
                                            <div class="col-md-6">
                                                <!-- select -->

                                                <div class="form-group">
                                                    <label for="examplebr">Contact Person mobile<font color='red'> *</font></label></label>
                                                    <input type="text" class="form-control" id="cmobile" name="cmobile" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Digits" placeholder="Enter mobile Number" autocomplete="off" required>
                                                </div>





                                            </div>
                                            <div class="col-md-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label for="examplevat">Company Email</label>
                                                    <input type="email" class="form-control" id="email" name ="email" placeholder="Enter company email " autocomplete="off">
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
                    

                                <br>
                                <br>



                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Registered Company Details</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">


                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>


                                                <?php
                                                echo "<tr><th><center> Company # </center></th><th><center> Company </center></th><th><center> Address </center></th><th><center> Phone </center></th><th><center>Fax</center></th><th><center> Contact Person </center></th><th><center> Mobile </center></th>
					<th><center> Vat</center></th><th width='1%'><center> Actions</center></th>
					</tr></tfoot>
                                        </thead>
                                        
                                        <tbody>";



                                                $sql = "SELECT id,company_name,company_address,company_phone,company_fax,salutation,person_name,person_mobile,vat_no FROM company_customer WHERE  type_customer='2' and status = '1' ORDER BY company_name ASC";
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
                                                    $vat = $arraySomething1['vat_no'];
                                                    
                                                    if($fax1==0)
                                                        $fax1 = "";
                                                    if($vat==0)
                                                        $vat = "";
                                                    if($company_phone1==0)
                                                        $company_phone1 = "";
                                                     if($person_mobile1==0)
                                                        $person_mobile1 = "";

                                                    $id1 = $id + 1000;
                                                    echo "<tr><td> <center>S" . $id1 . " </center></td> <td> &nbsp" . $company_name1 . " </td><td> &nbsp" . $company_address1 . " </td><td>" . $company_phone1 . "</td><td> <center>" . $fax1 . "</center> </td>
                                                                <td> &nbsp" . $salutation1 . " " . $person1 . " </td><td> &nbsp" . $person_mobile1 . " </td><td> &nbsp" . $vat . " </td>";


                                                    echo "<td> <div class='btn-group'>
                              <a href='edit_company.php?r=$id'><button type='button' class='btn btn-info'>Edit</button></a>
                        <a href='delete_company.php?r=$id' button type='button' class='btn btn-warning'>Delete</button>
                       
                     
                      </div></td>";
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

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




//mysqli_fetch_array error ek anne query ek wrdinm  query ek mysql eke run krnn


