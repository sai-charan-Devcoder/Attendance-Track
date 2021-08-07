

<?php
session_start();
echo $_SESSION['logged_in'];
$conn=new mysqli("localhost","root","","scits");
//$conn=new mysqli("sql313.epizy.com","epiz_25527895","M1doTbERuM","epiz_25527895_scits");
if($conn)
{
	//echo 'db connected';
}




$x='';
if(isset($_POST['submit'])){
	if(!empty($_POST['username'])){
	$x=$_POST['username'];
	//echo $x."<br>";
}
}
$y='';
if(isset($_POST['submit'])){
	if(!empty($_POST['password'])){
	$y=$_POST['password'];
	//echo $y."<br>";
}
}
if($x==""||$y=="")
{
  echo'<script>
alert("you have not enterd the values");
  window.location="loginform.php";
  </script>';

}

//$x=$_POST['username'];
//$y=$_POST['password'];
if(!is_numeric($x)){
$sql="SELECT `username`,`password` FROM `facultylogin` WHERE `username`='$x'";
if($result=mysqli_query($conn,$sql)){
if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
               $username=$row['username'];
               $password=$row['password'];
               //$password=$row['password'];
        }
        mysqli_free_result($result);
 } else{
        echo "Invalid username or password";
    }
} else{
    //echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}    
        //else
        //{
        //	echo'entered username or password is Invalid';
        //}
        if($username==$x&&$password==$y){
          $_SESSION['logged_in']='1';
        	echo'<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="refresh" content="5; url=newfile.php">
 
  

</head>	
 <body>
<h2 align="center"> validating Login Details</h2>
<h1 style="text-align:center">Counter</h1>
        
</body>
</html>';
        echo'<p style="font-size:60px" align="center">login successfully</p>';
    echo "<script language='javascript'>
    let counter = document.querySelector('h1');
let count =1;
setInterval(()=>{
	counter.innerText=count;
	count++
	},500)
   </script>";
}
else{
echo'<script>
alert("invalid useername or password");
window.location="loginform.php";
</script>';
	
}
}
else{
	echo' invalid Username';
}
 ?>
 