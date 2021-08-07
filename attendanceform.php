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
<head><title>submission of attendance</title>
<script type="text/javascript">
	function checkButton(){
		var val=document.getElementById('s.no').value;
		if(val==""){
			alert("please enter the Hallticket Number");
			document.write(redirecting);
			window.location="attendanceform.php";
		}
		else{
		if(document.getElementById('present').checked)
		{   
			
			alert("student is present"); 
		}
		else if(document.getElementById('absent').checked)
		{
		alert("Student is absent");
	     }
	     else if(document.getElementById('present')&&document.getElementById('absent')){
	     	alert("you have not selected any option");
	       
	        	document.write(1+2);
	        
	        window.location="attendanceform.php";
	    
	}
}
	}

</script>
</head>
<body>
<div align="center">
<p><h1>date:
	<script language="javascript">
	var today=new Date();
	var day=today.getDay();
	var weekday=['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];
	//document.getElementById("datetime").innerHTML=dt.toLocaleString();
	document.write(weekday[day]);
</script><span id="datetime"></span></p></h1>
<form name="form1" action="attendance.php" method="POST">
<h1>Enter Hallticket No:<input type="text" name="lang[]" id="s.no"  placeholder=" Enter in capital letters"/></h1><br><br><br>
<h1> roll no :1<input type="checkbox" name="c[]" value='1' id='1'>
	 roll no:2 <input type="checkbox" name="c[]" value='2' id='2'>
	 roll no:3<input type="checkbox" name="c[]" value='3' id='3'>
	 roll no:4<input type="checkbox" name="c[]" value='4' id='4'>
	 roll no:5<input type="checkbox" name="c[]" value='5' id='5'>
	 roll no:6<input type="checkbox" name="c[]" value='6' id='6'>
	 roll no:7<input type="checkbox" name="c[]" value='7' id='7'>
	 roll no:8<input type="checkbox" name="c[]" value='8' id='8'>
<h1><input type="radio" name="attend" value="present" id="present"/>present</h1><br>
<h1><input type="radio" name="attend" value="absent" id="absent" />absent<br></h1>
<input type="submit"  value="submit" name="submit" id="submit" onClick="checkButton();" /></h1><br>


</form>
</div>
</body>
</html>
