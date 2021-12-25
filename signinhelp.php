<?php
$connection = mysqli_connect('localhost','root');

if ($connection){
    echo "Connection is Establish!";
}
else{
    echo"Error connection failed!";
}
mysqli_select_db($connection,'website_data');

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = $_POST['Email'];
$data1 = $_POST['Password'];

if($email == $data && $pass == $data1){
header('location:signinsuccessful.php');
}
else{
echo"Error while logging in!";
}


?>