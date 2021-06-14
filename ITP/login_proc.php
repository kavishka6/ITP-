
<?php




session_start();
ob_start();

include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    function test_input($data)
{
    $data1 = trim($data);
    $data2 = stripslashes($data1);
    $data3 = htmlspecialchars($data2);
    return $data3;
    
}
    
    $username = test_input($_POST['name']);
    $password = test_input($_POST['pass']);
    $password = sha1($password);
    
}



$query = "SELECT id,name,status,position FROM users WHERE name = '$username' AND password = '$password'";
$result = mysqli_query($con, $query);


// User not found. So, redirect to login_form again.
if (mysqli_num_rows($result) == 0) {
    echo "The login details you entered is incorrect.<br>Please try again (make sure your caps lock is off).";
    die;
    
} 
else {
    
    while ($row = mysqli_fetch_array($result))
    {
    $id = $row['id'];
    $status = $row['status'];
    $name = $row['name'];
    $position = $row['position'];   
    }
    
    $_SESSION['sess_user_id'] = $id; //Initializing login id
    $_SESSION['sess_username'] = $name; //Initializing username
    $_SESSION['sess_position'] = $position; //Initializing user level 
    $_SESSION['sess_name'] = $name;
    
    if($password==sha1('abc123')){
        $_SESSION['sess_pw_reset'] = "F";
    }
    else{
        $_SESSION['sess_pw_reset'] = "T";
        }
    
    echo 'done';
    
    
}
    

