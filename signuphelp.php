<?php
$connection = mysqli_connect('localhost','root');

if ($connection){
    echo "Connection is Establish!";
}
else{
    echo"Error connection failed!";
}
mysqli_select_db($connection,'website_data');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = "INSERT INTO person_detail(FNAME,LNAME,EMAIL,PASSWD)VALUES('$firstname','$lastname','$email','$pass')";

mysqli_query($connection, $data);
header('location:signupsuccessful.php');

?>