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
                    url: "add_user_proc.php",
                    type: "POST",
                    data: form_data,
                    processData: false, // tell jQuery not to process the data
                    contentType: false   // tell jQuery not to set contentType
                }).done(function (data) {
                    console.log(data);
                    $("#example2").load(window.location + " #example2");

                    $('#name').val("");
                    $('#email').val("");
                    $('#mobile').val("");

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
                                                <!-- select -->

                                                <div class="form-group">
                                                    <label for="examplesemai1">User's Full Name</label>
                                                    <input type="text" class="form-control" id="ename" name="ename"  placeholder="Enter Employee  Name" autocomplete="off">
                                                </div>



                                            </div>


                                      
                                            <div class="col-md-3">
                                                <!-- select -->

                                                <div class="form-group">
                                                    <label for="examplesemai1"> UserName</label>
                                                    <?php
                                                     $sql18 = "SELECT name FROM users ORDER BY id DESC LIMIT 1; ";
                                                        $result18 = mysqli_query($con,$sql18);
                                                        while ($arraySomething18 = mysqli_fetch_array($result18)) {
                                                        $last_user_name = $arraySomething18['name'];
                                                        }
                                                        $show_user_name = $last_user_name + 1;
                                                    ?>
                                                    
                                                    
                                                    
                                                    <input type="text" value='<?php echo $show_user_name?>'class="form-control" id="name" name="name"  placeholder="Enter Name" readonly="">
                                                </div>



                                            </div>
                                     <div class="col-md-3">
                                                <!-- select -->

                                                <div class="form-group">
                                                    <label for="examplesemai1"> Password</label>
                                                    
                                                    
                                                    
                                                    
                                                    <input type="text" value='abc123'class="form-control" id="pw" name="pw"  placeholder="Enter Name" readonly="">
                                                </div>



                                            </div>
                                            <div class="col-md-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label for="examplesemai1"> Email<font color='red'> *</font></label>
                                                    <input type="email" class="form-control" id="email" name="email"  placeholder="Enter Customer's Email" autocomplete="off">
                                                </div>
                                            </div>
                                      

                                
                                    <div class="col-md-6">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- select -->


                                                <div class="form-group">
                                                    <label>Position<font color='red'> *</font></label>
                                                    <select class="form-control select2" style="width: 100%;" name="position" id="position" >
                                                        <option selected="position" >Select Position</option>
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
                                                    <input type="text" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" title="Invalid Format.Contact No consists of 10 Dpattern=igits" placeholder="Enter Phone number" autocomplete="off">
                                                </div>
                                            </div>
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
                            <h3 class="card-title">Registered Users Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">
                                <thead>


                                    <?php
                                    echo "<tr><th><center> Employee Name </center></th><th><center> Username </center></th><th><center> Password </center></th><th><center> Phone </center></th><th><center> Email</center></th> <th><center> Position</center></th> <th><center>Status</center></th><th><center> Action</center></th><th><center> Action </center></th>
					
					</tr></tfoot>
                                        </thead>
                                        
                                        <tbody>";




                                    $sql = "SELECT id,name,employee_name,password,phone,email,position,status FROM users ORDER BY id ASC";
                                    $result = mysqli_query($con, $sql);
                                    while ($arraySomething1 = mysqli_fetch_array($result)) {
                                        $id = $arraySomething1['id'];

                                        $name = $arraySomething1['name'];
                                        $phone = $arraySomething1['phone'];
                                        $email = $arraySomething1['email'];
                                        $stat = $arraySomething1['status'];
                                        $password = $arraySomething1['password'];
                                        $position = $arraySomething1['position'];
                                        $ename = $arraySomething1['employee_name'];
                                        
                                        if($position==1)
                                            $position = "SUPER-ADMIN";
                                        else if($position==2)
                                            $position = "ADMIN";
                                        else if($position==3)
                                            $position = "USER";
                                        else {
                                            $position = "CUSTOMER";
                                        }

                                        if ($stat == 1) {
                                            $stat1 = "<font color ='green'><b>ACTIVE</b></font>";
                                        } else {
                                            $stat1 = "<font color='red'><b>DEACTIVE</b></font>";
                                        }
                                        $pass = 'abc123';
                                        $pass_default = sha1($pass);
                                        if($pass_default == $password) {
                                            
                                            $pass_default1 = "<font color ='red'>DEFAULT</font>";
                                            
                                        } else {
                                            $pass_default1 = "<font color ='green'>CHANGED</font>";
                                        }
                                        



                                        echo "<tr><td>" . $ename . " </td> <td> <center>" . $name . " </center></td><td> &nbsp" . $pass_default1 . " </td><td> &nbsp" . $phone . " </td><td>" . $email . "</td><td>" . $position . "</td><td>" . $stat1 . "</td>";
                                                               
if($stat ==1)
{
    echo '<td align= "center"><button type="button" class="btn btn-block btn-warning">CHANGE</button></td>';
}
else{
   echo '<td align= "center">  <button type="button" class="btn btn-block btn-warning">CHANGE</button></td>'; 
}
     echo "<td> <div class='btn-group'>
                              <a href='edit_adduser.php?r=$id'><button type='button' class='btn btn-info'>Edit</button></a>
                        <a href='delete_adduser.php?r=$id' button type='button' class='btn btn-warning'>Delete</button>
                       
                     
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

