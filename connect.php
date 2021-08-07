<?php
$x=1;
if(isset($_POST['htno'])){
    $x=$_POST['htno'];
}
 //$hallTic=$_POST['htno'];
//echo $x."<br>";

$con = new mysqli("localhost", "root", "","scits");

if ($con) 
echo '<b>';
else
echo '<b>NOT Connected Successfully' . mysqli_error();
$ver="SELECT *  FROM `students`";
if($verresult= mysqli_query($con, $ver)){
        while($row = mysqli_fetch_array($verresult)){
                if($x==$row['s.no'])
                {
                   $m=1;
                }
    

               // echo "<td>" . $row['name'] . "</td>";
               // echo "<td>" . $row['phno'] . "</td>";
                //echo "<td>" . $row['marks'] . "</td>";
        }
mysqli_free_result($verresult);
    } 
if($m!=1)
    {
         echo'<script>
                    alert("invalid hallticket no");
                    window.location="index.html";
                    </script>';
    }

$sql="SELECT *  FROM `students` WHERE `s.no` = $x ";

if($result= mysqli_query($con, $sql)){
 if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>s.no</th>";
                echo "<th>name</th>";
                echo "<th>phno</th>";
                echo "<th>marks</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['s.no'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['phno'] . "</td>";
                echo "<td>" . $row['marks'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>


