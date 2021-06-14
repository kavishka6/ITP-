<?php
include 'header.php';
include 'connection.php';

?>

<meta charset="UTF-8"> <!-- THIS NEED. COZ I USED EMOJIS -->


<head>
    <script>
        
        function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('new');
    var pass2 = document.getElementById('confirm');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#9BFFA3";
    var badColor = "#FFAD9B";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
        
        </script>
           <style>
/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}

/* Style the container for inputs */
.container {
    background-color: #ffffff;
    padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #ffffff;
    color: #000;
    position: relative;
    padding: 00px;
    margin-top: 00px;
}

#message p {
    padding: 16px 14px;
    font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -15px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -15px;
    content: "✖";
}
</style> 

       <script>
        //ONLY NUMBERS - START
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 46 || charCode > 57) || charCode == 47 ) {
                return false;
            }
            return true;
        }
        //ONLY NUMBERS - END
        </script>
        
      <script>
       //FORM SUBMISSION - START----------------------------------
        function submitForm() {

          var form_data = new FormData(document.getElementById("myform"));
          form_data.append("label", "WEBUPLOAD");
          $.ajax({
              url: "new_item_proc.php",
              type: "POST",
              data: form_data,
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
          }).done(function( data ) {
            console.log(data);
            $('#name').val("");
            $('#price').val("");
            $("#example1").load(window.location + " #example1");
            
         MessageManager.show(data);
        

         });
          return false;     
        }
        //FORM SUBMISSION - END-------------------------------------
            
        //FORM SUBMISSION RESPONSE DISPLAY - START------------------
        var MessageManager = {
        show: function(content) {
        $('#ajaxmsg').html(content);
        setTimeout(function(){
            $('#ajaxmsg').html('');
        }, 6000);
            }
        }; 
        //FORM SUBMISSION RESPONSE DISPLAY - START------------------
        
        //FORM SUBMISSION RESPONSE FADING EFFECT - START------------
        window.setTimeout(function() {
           $(".alert1").fadeTo(900, 0).slideUp(900, function(){
               $(this).remove(); 
           });
       }, 6000);
       //FORM SUBMISSION RESPONSE FADING EFFECT - END---------------
        </script>
        
        
 <?PHP
        
       if (isset($_SESSION['data_deleted_photo'])){
                if($_SESSION['data_deleted_photo']=='DONE'){ 
                   
                    ?>
        
                <script>
                window.onload = function() {   
                toastr.success("ITEM REMOVED SUCCESSFULLY !");
                }   
                </script>
 <?PHP

                }
                if($_SESSION['data_deleted_photo']=='FAIL'){
                    ?>
                <script>
                window.onload = function() {   
                toastr.error("REMOVING ITEM HAS BEEN FAILED !");
                }   
                </script>                <?PHP

                }
                
                 unset($_SESSION['data_deleted_photo']);
        }
        
        ?>
 

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
    <body>

      
       
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div id='ajaxmsg'>
                </div>
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Change Password </h1>
                        </div>
                      
                    </div>
                    <!--                </div> /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
       
             
 <div class="row">
        <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
             <div class="card-body">
                   <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><b><font color='red'>You have accessed by using default password, change your password to continue.</font></b></p>

      <form role="form" action="change_password.php" method="POST">
          <div class="input-group mb-3">
          <input type="password" name='current' id='current' class="form-control" placeholder="Current Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='new' id='new' class="form-control" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name='confirm' id='confirm' class="form-control" placeholder="Enter Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" onkeyup="checkPass(); return false;" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Change password</button> 
          </div>
        <div class="col-4">
           <a href='logout.php'> <button type="button" class="btn btn-info btn-block">Logout</button> </a>
          </div></div></form> </div>
          <!-- /.col -->
     </div>  </div>  </div>  </div>
      </form>
        
  
       <div class="col-md-6">
      <div id="message">
                        
                         <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Password Must Contain the Following</h3>
              </div>
             <div class="card-body">
                   <div class="card">
    <div class="card-body login-card-body">
                       
                  

	<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
	<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
	<p id="number" class="invalid">A <b>number</b></p>
	<p id="length" class="invalid">Minimum <b>8 characters</b></p>
     </div>  
                       
                       
                       
                       
                       
                       
                       
                       
        </div>
         </div>  
             </div>   </div></div>
         </section>        
                 
               
        </div>
       
   
  
  </div>
  <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$current = $_POST['current'];
$new = $_POST['new'];
$confirm = $_POST['confirm'];


$current = sha1($current);
$new = sha1($new);


$sql = "SELECT id FROM users WHERE password='$current' AND id='$user' ";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);



if($rowcount>0){

$sql = "UPDATE users SET password='$new' WHERE id='$user'";
			if(mysqli_query($con, $sql)){
                            
                            
                            
                            if (isset($user)) {
                                $_SESSION = array();

                                //If cookie available set time parameters
                            if (isset($_COOKIE[session_name()])) {
                                setcookie(session_name(), '', time()-3600);
                            }

                                session_destroy(); //destroy session
                            }
                            
                            
                            ?>
	 		<script language="javascript">
                          location.replace("login.php?msg='Password Changed. Login again with new password'");
                        </script>
                        
			<?php	
				
			} else{
			echo '<script language="javascript">';
                        echo 'alert("CHANGING PASSWORD FAILED ! ")';
                        echo '</script>';
                      
			}
                       
}
else{
    
                        echo '<script language="javascript">';
                        echo 'alert("CURRENT PASSWORD WRONG.CHANGING PASSWORD FAILED ! ")';
                        echo '</script>';
                         
    
}
?>

<?php
}
?>
<script>
var myInput = document.getElementById("new");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
<script>
     $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    //toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
          });
    
  $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

