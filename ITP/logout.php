<?php
 include 'header.php';
 include 'connection.php';


$ip = $_SERVER['REMOTE_ADDR'];

//    $sql = "INSERT INTO login_history (user,activity) VALUES 
//    ('$user','SYSTEM LOGOUT')";
//    
//     mysqli_query($con, $sql);

        // If the user is logged in, delete the session variables to log them out
      //  session_start();
        if (isset($user)) {
            $_SESSION = array();

            //If cookie available set time parameters
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-3600);
        }

            session_destroy(); //destroy session
        }

 
     ?><script>
       window.location.href = "/my_project/login.php";
		</script>
        <?php
