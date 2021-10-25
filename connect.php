<?php
$servername="localhost";
$username="root";
$password="";
$db_name="gymkhana";

$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    die("Connection Failed:" .mysqli_connect_error());
}
if(isset($_POST['save'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gemder'];
    $sql_query = "INSERT INTO freetrail(firstName, lastName, email, number, gender) VALUES ('$firstName','$lastName','$email','$number','$gender')";
    if(mysqli_query($conn, $sql_query)){
        echo "Registration Successful...";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}