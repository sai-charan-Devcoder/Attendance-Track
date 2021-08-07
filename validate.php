<?php
if(isset($_POST['submit'])){
if(!empty($_POST['c'])){
	foreach($_POST['c'] as $language)
	{
		$rollno[]=$language."<br>";
	
	}

}
}
print_r($rollno);
$i=implode($rollno);
//$numb=intval($rollno[0]);
foreach($rollno as $htno ){
	$numb=intval($htno);
 $con=new mysqli("localhost","root","","scits");  


$verify="SELECT `htno`, `name`, `present`, `total` FROM `table 1` WHERE `htno`=$numb"  ;
//$result=mysqli_query($con,$sql);

if($result=mysqli_query($con,$verify)){
 if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>htno</th>";
                echo "<th>name</th>";
                echo "<th>pre</th>";
                echo "<th>total</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['htno'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['present'] . "</td>";
                echo "<td>" . $row['total'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);

 } 

} 
 

$verify="SELECT `htno`, `name`, `present`, `total` FROM `table 1` WHERE `htno`=$numb"  ;
//$result=mysqli_query($con,$sql);

if($result=mysqli_query($con,$verify)){
 if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                // $row['htno'] . "</td>";
                //echo "<td>" . $row['name'] . "</td>";
                $change=$row['present'];
           
           // echo "</tr>";
        }
        mysqli_free_result($result);

 } 
}
$change=$change+1;

 $afterattend="UPDATE `table 1` SET `present`=$change WHERE `htno`=$numb";
 $result_3= mysqli_query($con,$afterattend);
 $attendance="SELECT `htno`, `name`, `present`, `total` FROM `table 1` WHERE `htno`=$numb";
	    if($result_2= mysqli_query($con,$attendance)){
	    	if(mysqli_num_rows($result_2) > 0){
        echo "<table>";
        while($row = mysqli_fetch_array($result_2)){
            echo "<tr>";
                echo "<td>" . $row['htno'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['present'] . "</td>";
                echo "<td>" . $row['total'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result_2);
    } 
  }
}

?>