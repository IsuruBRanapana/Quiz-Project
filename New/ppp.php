<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once('inc/connection.php');
// Attempt select query execution
$sql = "SELECT * FROM questions";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>answer1</th>";
                echo "<th>answer2</th>";
                echo "<th>answer3</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            print_r($row);
            $answers=array();
            $answers[0]=$row['ans1'];
            $answers[1]=$row['ans2'];
            $answers[2]=$row['ans3'];
            $answers[3]=$row['correct_ans'];



            for ($i=0; $i < 4; $i++) { 
                echo $answers[$i]."<br>";
            }

            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ans1'] . "</td>";
                echo "<td>" . $row['ans2'] . "</td>";
                echo "<td>" . $row['ans3'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);
?>