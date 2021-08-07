
<?php
//$attend="<script>document.write(localStorage.getItem('attendance');</script>";

//$x=$_POST['s.no'];	

$x=$_POST['c'];
if(isset( $_POST['submit'])) {
  if(!empty($_POST['c'])){
   	foreach($_POST['c'] as $language)
    {
//$x=$language;
  echo $language;
    }
 //$x=implode(',',$_POST['c[1]']);  } 	 
} 
//$x=$_GET['htno'];
//$con=new mysqli("sql313.epizy.com","epiz_25527895","M1doTbERuM","epiz_25527895_scits");
/*$con=new mysqli("localhost","root","","scits");

if($con){
//echo 'database connected';
} 
else
{
echo'not connected'.mysqli_error();
}

if($x=="")
{
    echo'<script>
    alert("You have not entered hallticket number");
    window.location="attendanceform.php";
   </script>';


}
else if($x!=""){
   echo '<div id="result">
   </div>';


$sql="SELECT `htno`, `name`, `present`, `total` FROM `table 1` WHERE `htno`=$x ";
//$result=mysqli_query($con,$sql);

if($result= mysqli_query($con, $sql)){
 if(mysqli_num_rows($result) > 0){
       /* echo "<table>";
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
        echo "</table>";*/
        mysqli_free_result($result);
 } 
} /*elseif($x=""){
    echo "You have Not Entered the HALLTICKET NUMBER (OR) Invalid Format " ;
echo'<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="refresh" content="5; url=/login for attendance/attendance.html">
 
  </head> 
 <body>
<h2 align="center"> validating Login Details</h2>
<h1 style="text-align:center">Counter</h1>
        
</body>
</html>';
        echo'<p style="font-size:60px" align="center"> submitting successfully</p>';
    echo "<script language='javascript'>
    let counter = document.querySelector('h1');
let count =1;
setInterval(()=>{
    counter.innerText=count;
    count++
    },500)
   </script>";
}*/
if($x!="") 
{  
if(isset($_POST['submit'])){
 $selected_val=$_POST["attend"];
	echo $selected_val;
}

$verify="SELECT * FROM `table 1`";
if($verifyx= mysqli_query($con,$verify))
{
if(mysqli_num_rows($verifyx)>0)
   {
        while($row = mysqli_fetch_array($verifyx)){
          echo "<tr>";
                $m=$row['htno'];
                if($m==$x)
                {
      echo '<input type="radio">';
                  $y="valid htno";
                }
            echo "</tr>";
               
               }
              mysqli_free_result($verifyx);
               
    }
  }
if($y=="valid htno"){

 
$attend="SELECT `present`,`total` FROM `table 1` WHERE `htno`=$x";

if($printresult= mysqli_query($con, $attend))
{
if(mysqli_num_rows($printresult) > 0)
   {
        while($row = mysqli_fetch_array($printresult)){
               $prdays=$row['present'];
               $tdays=$row['total'];
    }
       // echo "<br>".$prdays;
        mysqli_free_result($printresult);
  }
}
       
        if($selected_val=="present")
         {

         echo '<h1 style="font-size:40px">HALLTICKET NUMBER: </h1>'.$x."<br>";

	     $change=$prdays+1;
	   echo "<br>".$change.' days OUT OF '.$tdays.'days';;
	   $afterattend="UPDATE `table 1` SET `present`=$change WHERE `htno`=$x";
	    $result_3= mysqli_query($con,$afterattend);
        echo "<br>".'<p style="font-size:60px">student is present Today</p>';


        }
        else if($selected_val=="absent"){
         echo '<h1 style="font-size:40px">HALLTICKET NUMBER: </h1>'.$x."<br>";

	       echo "<br>".'<p style="font-size:60px">student is Absent Today</p>';
         }

   

/*if($result_3= mysqli_query($con, $afterattend)){
if(mysqli_num_rows($result_3) > 0){
        while($row = mysqli_fetch_array($result_3)){
               $prdays=$row['present'];
        }
        echo "<br>".$prdays;
        mysqli_free_result($printresult);
 }
}*/

//echo $printresult;
//if($selected_val=="present")
//{
//	echopresent
//}


// Close connection
}
else{
echo'<script>
      alert("Invalid hallticket number");
      window.location="attendanceform.php";
      </script>';
}
}
  
mysqli_close($con);
}



?>
