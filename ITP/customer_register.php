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
        //ONLY NUMBERS - START
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if  (charCode > 32 && (charCode < 65 || charCode > 90) &&
          (charCode < 97 || charCode > 122)) {
                return false;
            }
            return true;
        }
        //ONLY NUMBERS - END
        </script>

        <script>

            function submitForm() {

                var form_data = new FormData(document.getElementById("myForm"));
                form_data.append("label", "WEBUPLOAD");
                $.ajax({
                    url: "customer_register1.php",
                    type: "POST",
                    data: form_data,
                    processData: false, // tell jQuery not to process the data
                    contentType: false   // tell jQuery not to set contentType
                }).done(function (data) {
                    console.log(data);
                    $("#example2").load(window.location + " #example2");
                    $('#nic').val("");
                    $('#name').val("");
                    $('#email').val("");
                    $('#mobile').val("");
                    $('#recidence').val("");
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
        <script type="text/javascript">
            function phonenumber(inputtxt)
            {
                var phoneno = /^\d{10}$/;
                if (inputtxt.value.match(phoneno))
                {
                    return true;
                } else
                {
                    alert("Not a valid Phone Number");
                    return false;
                }
            }

        </script>

    </head>
     <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

 <?php
  
   include 'sidebar.php';
  
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
                                            <label for="examplesname">NIC/PASSPORT<font color='red'> *</font></label></label>
                                            <input type="text" class="form-control" name="nic"  id="nic" placeholder="Enter Customer's NIC" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Customer Type<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="type" id="type" >
                                                <option value=''>CUSTOMER TYPE</option>
                                                <option value="CASH/CREDIT CUSTOMER"> CASH/CREDIT CUSTOMER </OPTION>
                                                <option value="CASH CUSTOMER"> CASH CUSTOMER</OPTION>  
                                                <option value="CREDIT CUSTOMER"> CREDIT CUSTOMER </OPTION> 


                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Person Salutation<font color='red'> *</font></label></label>
                                            <select class="form-control select2" style="width: 100%;" name="salutation" id="salutation" required="">
                                                <option value=''>SALUTATION</option>
                                                <option value="MR"> Mr</OPTION>  
                                                <option value="MRS"> Mrs </OPTION>
                                                <option value="MISS"> Miss </OPTION>
                                                <option value="MS"> Ms </OPTION>
                                                <option value="DR"> Dr </OPTION>
                                                <option value="VEN"> Ven </OPTION>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="examplesfax">Name<font color='red'> *</font></label>
                                            <input type="text" onkeydown="return isNumber(event)"  class="form-control" id="name" name="name" placeholder="Enter Customer's Name" autocomplete="off" required="">
                                        </div>


                                    </div>
                                    <!-- /.card-body -->






                                    <div class="col-md-6">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- select -->


                                                <div class="form-group">
                                                    <label>Price below MSP<font color='red'> *</font></label>
                                                    <select class="form-control select2" style="width: 100%;" name="msp" id="msp" required="">
                                                        <option selected="salutation" >Price below MSP</option>
                                                        <option value='YES'>YES</option>
                                                        <option value='NO'>NO</option>

                                                    </select>
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label for="examplesemai1"> Email</label>
                                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Customer's Email" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="examplecname">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Customer Address" autocomplete="off">
                                        </div>



                                        <div class="form-group">
                                            <label for="examplecphone">Mobile<font color='red'> *</font></label></label>
                                        <input type="text" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Dpattern=igits" placeholder="Enter Contact Person Mobile" autocomplete="off" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="examplecphone">Home Contact</label>
                                            <input type="text" class="form-control" id="recidence" name="recidence"  pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Dpattern=igits" placeholder="Enter Contact Person Mobile" autocomplete="off">
                                        </div>


                                    </div>
                                </div>



                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id ="submit">Submit </button>
                              

                            </div>
                        </form>
                    </div>






                    <br>
                    <br>



                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registered Customer Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">
                                <thead>


                                    <?php
                                    echo "<tr><th><center> NIC </center></th><th><center> Name </center></th><th><center> Type </center></th><th><center> Address </center></th><th><center>Mobile</center></th><th><center> Email </center></th>
					<th width='1%'><center> Actions</center></th>
					</tr></tfoot>
                                        </thead>
                                        
                                        <tbody>";



                                    $sql = "SELECT id,nic,person_name,company_name,company_email,type_customer,company_address,company_phone,salutation,person_mobile FROM company_customer WHERE  status = '1' ORDER BY company_name ASC";
                                    $result = mysqli_query($con, $sql);
                                    while ($arraySomething1 = mysqli_fetch_array($result)) {
                                        $id = $arraySomething1['id'];
                                        $nic1 = $arraySomething1['nic'];
                                        $email1 = $arraySomething1['company_email'];
                                        $address1 = $arraySomething1['company_address'];
                                        $salutation1 = $arraySomething1['salutation'];
                                        $name1 = $arraySomething1['person_name'];
                                        $mobile1 = $arraySomething1['person_mobile'];
                                        $type = $arraySomething1['type_customer'];

                                        if ($type == 0) {
                                            $type_customer1 = "CREDIT";
                                            $color = '#99ddff';
                                        } else if ($type == 1) {
                                            $type_customer1 = "CASH";
                                            $color = "#aaff80";
                                        } else {
                                            $type_customer1 = "CASH/CREDIT";
                                            $color = "#FFFFFF";
                                        }



                                        $id1 = $id + 1000;
                                        echo "<tr><td> &nbsp" . $nic1 . " </td><td> &nbsp" . $salutation1 . " " . $name1 . " </td><td> &nbsp" . $type_customer1 . " </td><td>" . $address1 . "</td><td> <center>" . $mobile1 . "</center> </td>
                                                                <td> &nbsp" . $email1 . " </td>";

                                        echo "<td> <div class='btn-group'>
                              <a href='edit_customer.php?r=$id'><button type='button' class='btn btn-info'>Edit</button></a>
                        <a href='delete_customer.php?r=$id' button type='button' class='btn btn-warning'>Delete</button>
                       
                     
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


