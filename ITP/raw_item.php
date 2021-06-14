<?php
include 'connection.php';
//include 'header.php';
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

    <script>

        function submitForm() {
 //alert('hi');
            var form_data = new FormData(document.getElementById("myform"));
            form_data.append("label", "WEBUPLOAD");
            $.ajax({
                url: "raw_item1.php",
                type: "POST",
                data: form_data,
                processData: false, // tell jQuery not to process the data
                contentType: false   // tell jQuery not to set contentType
            }).done(function (data) {
                console.log(data);

                $("#example2").load(window.location + " #example2");
                $('#cat1').val("");
                $('#reorderlevel').val("");
                $('#technicianprice').val("");
                $('#sellingprice').val("");


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
                            <h1>Add New Raw Item</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Raw-Item details</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                
                  <div id='ajaxmsg'>
                    </div>
                
                <div class="container-fluid">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Select the Raw-Item details</h3>
                        </div>
                        <form name="myForm" id="myform" action="" method="POST" enctype="multipart/form-datam" onsubmit="return submitForm();" >
                            <div class="card-body">
                                <div class="row">
                           
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> Category 01 : Type<font color='red'> *</font></label>

                                            <select class="form-control select2" style="width: 100%;" name="cat1" id ="cat1" required>
                                                <option value=""> SELECT CATEGORY 01 </OPTION>
                                                <?php
                                                $sql = "select id,type from row_one where status = '1'";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                    <option value = " <?php echo $row['id'] ?> "> <?php echo $row['type'] ?> </option>;


                                                    <?php
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="examplebr">Reorder LEVEL</label>
                                            <input type="number" class="form-control" id="reorder" name="reorder"  placeholder="reorder level" autocomplete="off">
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>Category 02 : Brand<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="cat2" id ="cat2" required>
                                                <option value=""> SELECT CATEGORY 02 </OPTION> 

                                                <?php
                                                $sql = "select id,brand from row_two where status = '1'";
                                                $result = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                    <option value = " <?php echo $row['id'] ?> "> <?php echo $row['brand'] ?> </option>;


                                                    <?php
                                                }

                                                ?>


                                            </select>
                                        </div>

                                       

                                    </div>
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>Category 03 : Model<font color='red'> *</font></label>
                                            <select class="form-control select2" style="width: 100%;" name="cat3" id ="cat3" required>
                                                <option value=""> SELECT CATEGORY 03 </OPTION>


                                                <?php
                                                $sql = "select id,model from row_three where status = '1'";
                                                $result = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                    <option value = " <?php echo $row['id'] ?> "> <?php echo $row['model'] ?> </option>;


                                                    <?php
                                                }

                                                ?>

                                            </select>
                                        </div>

                                    </div>      





                                    <div class="col-md-3">
                                     

                                        <div class="form-group">
                                            <label>Category 04 : Extra Features</label>
                                            <select class="form-control select2" style="width: 100%;" name="cat4" id ="cat4">
                                                <option value=""> SELECT CATEGORY 04 </OPTION>
                                                <?php
                                                $sql = "select id,extra from row_four where status = '1'";
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




                    <br><br>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">All Raw-Item Details</h3>
                        </div>
                      
                        <div class="card-body">


                            <table id="example2" class="table table-bordered table-striped">
                                <thead>


                                    <?php
                                    echo "<tr><th><center> Item name </center></th><th><center> Reorder Level </center></th><th><center> Stock </center></th>
					<th width='1%'><center> Actions</center></th>
					</tr>
                                      
                                       </thead>
                                 
                                        <tbody>";

                                    $sql = "SELECT id,cat1,cat2,cat3,cat4,reorder,stock_stores FROM row_item WHERE  status = '1'  ";
                                    $result = mysqli_query($con, $sql);
                                    while ($arraySomething1 = mysqli_fetch_array($result)) {
                                        $id = $arraySomething1['id'];
                                        $cat1 = $arraySomething1['cat1'];
                                   
                                        $cat2 = $arraySomething1['cat2'];
                         

                                        $cat3 = $arraySomething1['cat3'];
                             
                                        $cat4 = $arraySomething1['cat4'];
                                        $reorder = $arraySomething1['reorder'];
                                         $stock = $arraySomething1['stock_stores'];

                                        $sql1 = "select type from row_one where id ='$cat1'  ";
                                        $result1 = mysqli_query($con, $sql1);
                                        while ($row1 = mysqli_fetch_array($result1)) {
                                            $cat10 = $row1['type'];
                                        }

                                        $sql22 = "select brand from row_two where id ='$cat2'  ";
                                        $result2 = mysqli_query($con, $sql22);
                                        while ($row2 = mysqli_fetch_array($result2)) {
                                            $cat20 = $row2['brand'];
                                        }

                                        $sql33 = "select model from row_three where id ='$cat3'  ";
                                        $result3 = mysqli_query($con, $sql33);
                                        while ($row3 = mysqli_fetch_array($result3)) {
                                            $cat30 = $row3['model'];
                                        }

                                        $sql44 = "select extra from row_four where id ='$cat4'  ";
                                        $result4 = mysqli_query($con, $sql44);
                                        while ($row4 = mysqli_fetch_array($result4)) {
                                            $cat40 = $row4['extra'];
                                        }


                                        echo "<tr> <td>" . $cat10 . " " . $cat20 . " " . $cat30 . " " . $cat40 . " </td><td> <center>&nbsp" . $reorder . " </center></td><td> <center>&nbsp" . $stock . " </center></td>
                                                                ";


                                        echo "<td> <div class='btn-group'>
                              <a href=''><button type='button' class='btn btn-info'>Edit</button></a>
                        
                       
                     
                      </div></td>";
                                    }



                                    echo "</tbody>
                                                                                 ";
                                    ?>                   


                                    </tbody>

                            </table>

                        </div>  </div>  


                    <!-- final  -->


                </div>
            </section>
        </div>
        
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




        <script>
                                    $(function () {
                                        //Initialize Select2 Elements
                                        $('.select2').select2(),

                                        //Initialize Select2 Elements
                                        $('.select2bs4').select2({
                                            theme: 'bootstrap4'
                                        },





                                    });
        </script>
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
 