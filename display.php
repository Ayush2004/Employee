<?php

$link = mysqli_connect("localhost", "root", "", "mydata");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM employees";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
				echo "<th>Password</th>";
				echo "<th>Confirm Password</th>";
                echo "<th>email</th>";
				echo "<th>Phone</th>";
				echo "<th>Question</th>";
				echo "<th>Answer</th>";
				echo "<th>Gender</th>";
            echo "</tr>";
			
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
				echo "<td>" . $row['pass'] . "</td>";
				echo "<td>" . $row['cpass'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['ques'] . "</td>";
				echo "<td>" . $row['ans'] . "</td>";
				echo "<td>" . $row['gen'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>