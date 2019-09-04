<?php

$link = mysqli_connect("localhost", "root", "", "mydata");
 

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 
 $fn =$_POST['first_name'];
 $ln=$_POST['last_name'];
 $pw=$_POST['password'];
 $cp=$_POST['cpassword'];
  $eml=$_POST['email'];
  $ph=$_POST['phn'];
  $qs=$_POST['ques'];
  $as=$_POST['ans'];
  $gn=$_POST['gender'];
 
// Attempt insert query execution
$sql = "INSERT INTO employees (fname, lname, pass, cpass,email, phone, ques, ans, gen) VALUES ('$fn', '$ln','$pw','$cp','$eml','$ph','$qs','$as','$gn')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>




