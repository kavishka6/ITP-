
<?php
include 'connection.php';
include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | General Form Elements</title>
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


    </head>

    <script>

        function submitForm() {

        var form_data = new FormData(document.getElementById("myForm"));
        form_data.append("label", "WEBUPLOAD");
        $.ajax({
        url: "company_bank_Account01.php",
                type: "POST",
                data: form_data,
                processData: false, // tell jQuery not to process the data
                contentType: false   // tell jQuery not to set contentType
        }).done(function (data) {
        console.log(data);
        $("#example1").load(window.location + " #example1");
        $("#example2").load(window.location + " #example2");
        $('#extra').val("");
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

    <script>
        function myFunction() {
        document.getElementById("myForm").reset();
        }
    </script>
    
    
    <body>
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Add Company's Bank Account (Own Accounts)</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Product_category_04</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Enter Account Details</h3>
                        </div>
                        <form name="myForm" id="myForm" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();">
                            <div class="card-body">

                                
                                <div class="row">
                                <!-- left column -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="examplesname">Account Name</label>
                                        <input type="hidden" class="form-control" name="id"  id="id">
                                        <input type="text" class="form-control" name="accname"  id="accname" placeholder="Account Name" autocomplete="off">
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                               <div class="form-group">
                                            <label>Bank <font color='red'> *</font></label>

                                            <select class="form-control select2" style="width: 100%;" name="bank" id="bank">
                                                <option selected="selected"  name="bank" id="bank">SELECT BANK </option>
                                                <option>ALLIANCE FINANCE COMPANY PLC</option>
                                                <option>AMANA BANK PLC</option>
                                                <option>BANK OF CEYLON</option>
                                                <option>CITY BANK</option>
                                                <option>COMMERCIAL BANK</option>
                                                <option>DFCC WARDANA BANK</option>
                                                <option>HDFC BANK</option>
                                                <option>LB FINANCE PLC</option>
                                                <option>NATIONS TRUST BANK</option>
                                                <option>SAMPATH BANK</option>
                                                 <option>VALIABLE FINANCE PLC</option>
                                                
                                                

                                            </select>
                                        </div>
                                     </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="examplesname">Account No</label>
                                        <input type="hidden" class="form-control" name="id"  id="id">
                                        <input type="text" class="form-control" name="accno"  id="accno" placeholder="Account No" autocomplete="off">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id ="submit">Submit </button>
                                <!--                            <button type="submit" class="btn btn-primary">Update</button>-->
                                
                            </div>

                       
                    </div>
               </form>

                    </div>
                    <br>
                    
                    



                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">All Bank Account's details(own company)</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">

                                <thead>
                                    <?php
                                    echo '<tr><th><center>Owner</center></th><th><center>Bank</center></th><th><center>Account NO</center></th>
                                    <th width="10%"><center> Action</center></th>
					</tr>
                                    </thead>
                               
                                 <tbody>';
                                    $sql = "select id,accname,bank,accno from bank_accounts where status ='1'";
                                    $result = mysqli_query($con, $sql);

                                    while ($arraySomething1 = mysqli_fetch_array($result)) {

                                        $id = $arraySomething1['id'];
                                        $accname = $arraySomething1['accname'];
                                          $bank = $arraySomething1['bank'];
                                            $accno = $arraySomething1['accno'];




                                        echo "<tr><td> $accname </td><td> $bank </td><td> $accno </td>";

                                        echo"<td> <div class='btn-group'>
                              
                           <center>   <button type='button' class='btn btn-warning'>Delete</button></center></div></td></tr>";
                                    }

                                    echo "</tbody>    ";
                           
                                  ?>                   
                                    </tbody>



                            </table>

                        </div>  

                    </div>
  </div>
                    <!--    final-->
                       </section>
                </div>
       
        <!--echo ek dnnne php athule liyn handa table body ek eliyen close krnnt puluwn awlk na-->
       
    </body>
    <!-- Form Element sizes -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
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











