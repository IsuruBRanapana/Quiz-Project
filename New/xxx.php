<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
require_once('inc/connection.php');
// Attempt select query execution
$n=rand(1,5);
$sql = "SELECT * FROM questions WHERE id='$n'";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
           /* echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Question</th>";
                echo "<th>answer1</th>";
                echo "<th>answer2</th>";
                echo "<th>answer3</th>";
            echo "</tr>";*/
        while($row = mysqli_fetch_array($result)){
           // print_r($row);
            
            $answers=array();
            $answers[0]=$row['ans1'];
            $answers[1]=$row['ans2'];
            $answers[2]=$row['ans3'];
            $answers[3]=$row['correct_ans'];
            shuffle($answers);

            echo "<div class='signup'>";
            echo $row['ques'];
            for ($i=0; $i < 4; $i++) { 
                $j=$i+1;
                echo "<br>".$j.").".$answers[$i];

            }
            
            echo "<br><form method='post'><input type='text' name='enter' placeholder='Enter answers'><br>";
            echo "<br><input type='submit' name = 'submit' value='Enter'></form>";
            echo "</div>";
            //validate answer
            if (isset($_POST['submit'])) {
                $entered_answer=$_POST['enter'];
                $check=$answers[$entered_answer-1];
                if($row['correct_ans']==$check){
                    echo "<script>
                                function myFunction() {
                                    var x;
                                    var r = confirm('Press a button!');
                                    if (r == true) {
                                        x = 'You pressed OK!';
                                    }
                                    else {
                                        x = 'You pressed Cancel!';
                                    }
                                    document.getElementById('demo').innerHTML = x;
                                }
                            </script>";
                }else{
                    echo "<script type='text/javascript'> 
                            alert('Answer isn't correct');
                            </script>";
                }
            }
            
            /*echo "<tr>";
                echo "<td>" . $row['ques']. "</td>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ans1'] . "</td>";
                echo "<td>" . $row['ans2'] . "</td>";
                echo "<td>" . $row['ans3'] . "</td>";
            echo "</tr>";*/
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Signup.css">
    <title></title>
</head>
<body>

</body>
</html>