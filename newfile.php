  <?php
  session_start();
  if(isset($_SESSION['logged_in'])||!empty($_SESSION['logged_in']))
{
echo $_SESSION['logged_in'];
session_destroy();
}
else
{
	echo'<script>
	 alert("direct access is not possible");
	 document.location="loginform.php";
	 </script>';
}
?>
 
<html>
<head>
	</head>
<body align="center">
	<p><h1>date:
	<script language="javascript">
	var today=new Date();
	var day=today.getDay();
	var weekday=['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];
	//document.getElementById("datetime").innerHTML=dt.toLocaleString();
	document.write(weekday[day]);
</script><span id="datetime"></span></p></h1>
	<form action="validate.php" method="POST">
	roll no:1<input type="checkbox" name="c[]" value='1' id='1'></br>
	 roll no:2 <input type="checkbox" name="c[]" value='2' id='2'></br>
	 roll no:3<input type="checkbox" name="c[]" value='3' id='3'></br>
	 roll no:4<input type="checkbox" name="c[]" value='4' id='4'></br>
	 roll no:5<input type="checkbox" name="c[]" value='5' id='5'></br>
	 roll no:6<input type="checkbox" name="c[]" value='6' id='6'></br>
	 roll no:7<input type="checkbox" name="c[]" value='7' id='7'></br>
	 roll no:8<input type="checkbox" name="c[]" value='8' id='8'></br>
	 <input type="submit" value="submit" id="submit" name="submit">
	 </form>
	</body>
	</html>