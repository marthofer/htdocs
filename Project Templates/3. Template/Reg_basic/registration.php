<?php
include_once 'include/class.user.php'; $user = new User(); //checkin g for user logged in or not

if (isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$register = $user->reg_user($fullname, $uname,$upass, $uemail);
	if($register){
	//registration succes
	echo 'Registration succesfull <a href="login.php">Click here</a> to login';
	} else {
		//registration failed
		echo 'Registration failed. Email or username already exists please try again';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<title>Register</title>

</head>
<body>
<div style="width:400px; margin: 0 auto;">
<h1> Registrate Here</h1>
<form action="" method="post" name="reg">
<table>
<tbody>
<tr>
<th>Full Name:</th>
<td><input type="text" name="fullname" required="" /></td>
</tr>
<tr>
<th>User Name:</th>
<td><input type="text" name="uname" required="" /></td>
</tr>
<tr>
<th>Email:</th>
<td><input type="text" name="uemail" required="" /></td>
</tr>
<tr>
<th>Password:</th>
<td><input type="password" name="upass" required="" /></td>
</tr>
<tr>
<td></td>
<td><input onclick="return(submitreg());" type="submit" name="submit" value="Register" /> </td>
</tr>
<tr>
<td></td>
<td><a href="login.php"> Already registered! Click here</a></td>
</tr>
</tbody>
</table>
</form></div>

<script type="text/javascript" language="javascript">
function submitreg(){
var form = document.reg;
if(form.name.value == ""){
alert("Enter name.");
return false;
}
else if(form.uname.value == ""){
alert("Enter username.");
return false;
}
else if(form.upass.value == ""){
alert("Enter password.");
return false;
}
else if(form.uemail.value == ""){
alert("Enter email.");
return false;
}
}
</script>
</body>
</html>
