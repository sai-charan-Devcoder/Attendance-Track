
<html>
<head>
	<title>Login form </title>
	<script>
		function checkBox(){
			document.write(2+3);
		var val=document.form.getElementById('username').value;
		if(val==""){
			alert("please enter the username");
			document.write(redirecting);
			window.location="index.php";
		}
	</script>
	<link rel="stylesheet" href="style.css">

</head>
<body style="background-color:#7f8c8d">
	<div id="main-wrapper">
		<center>
		<h2 align="center"><b>Login Form</b></h2>
		<img src="login.jpg" class="avatar"/>
		
   
		</center>
	 <form name="form" align="center" action="homepage.php" method="POST">
		   <label><b>Username:</b><br></label>
		   <input type="text" align="center" name="username" id="username" class="inputvalue" placeholder="enter the username" /><br>
		   <label><b>Password:</b><br></label>

		   <input type="text" class="inputvalue"  name="password" placeholder="enter the password"/>
		   <input type="submit"  name="submit" class="login" id="login" value="submit" onClick="checkBox();"/>

	</form>
	</div> 
	</body>
	</html>
