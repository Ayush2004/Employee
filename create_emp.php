<?php
$link = mysqli_connect("localhost", "root","","mydata");
 

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql="CREATE TABLE employees (
    fname VARCHAR(100) NOT NULL,
	lname VARCHAR(100) NOT NULL,
	pass VARCHAR(100) NOT NULL,
	cpass VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	phone INT(10) NOT NULL,
    ques VARCHAR(255) NOT NULL,
	ans VARCHAR(255) NOT NULL,
	gen VARCHAR(100) NOT NULL   
)";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
