<?php include('frm_login_conn.php');
 if (isset($_SESSION['mobile']))
 {
 	if ($_SESSION['select'] == "Student") 
 	{
 		header("location: frm_student_account.php");
 	} elseif ($_SESSION['select'] == "Coaching") 
 	{
 		header("location: frm_coaching_account.php");
 	}elseif ($_SESSION['select'] == "Teacher") 
 	{
 		header("location: frm_teacher_account.php");
 	}
 	
 }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<body bgcolor="#7575a3">
	<form action="" method="POST"style="background-color:#5c5c8a;background-color: #5c5c8a;
    margin-top: 8%;
    margin-left: 32%;
    margin-right: 34%;">
	<table align="center">
		<tr><td><h1 style="margin-bottom: -69px;"><b><span style="font-family: monospace; color: aliceblue;font-size: 30px;margin-left: 100px;"> Login Form </i><b><h1></td></tr>
		<tr>	
	     <td><select name="select" style="background-color:#eoeoeb;margin:20px;padding-left:70px;padding-right:106px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; color: olive;">
	     	<option  >Select option</option>
	     	<option value="Coaching">Coaching institute</option>
	     	<option value="Teacher">Teacher</option>
	     	<option value="Student">Student</option>
	     </select></td></tr>
	     	
	     <tr>	
	 
	     <td><input type="text" name="StudentID"style="background-color:#eoeoeb;margin:20px;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; color: olive;"placeholder="Mobile " ></td></tr>
	     <tr>
	     <td><input type="password" name="Password"style="background-color:#eoeoeb;margin:20px;padding-left:70px;padding-right:70px; padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; color: olive;"placeholder="Password" ></td></tr>

	     <tr><td>
	     <input type="submit" name="submit"value="Login" style="background-color:#b3b3cc;margin:20px;padding-left:140px;padding-right:140px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; color: olive;"></td></tr>
	     <tr>	
	     <td><select name="select1" style="background-color:#eoeoeb;margin:20px;padding-left:70px;padding-right:106px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; color: olive;">
	     	<option  >Select option</option>
	     	<option value="Coaching">Coaching institute</option>
	     	<option value="Teacher">Teacher</option>
	     	<option value="Student">Student</option>
	     </select></td></tr>

	      <tr><td>
	     <input type="submit" name="signup"value="Signup" style="background-color:#b3b3cc;margin:20px;padding-left:140px;padding-right:140px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; color: olive;"></td></tr>

	     <tr><td>
	     <p style="font-size: 20px;text-align:center; font-family: monospace; color: aliceblue; ">
	     	Lost your password<a href="frm_forget_password.php" style="color: aliceblue;">?</a></p></td></tr>
	     	<tr><td><a href="Index.php">Go to Homepage</a></td></tr>
    </form>
 </table>
</body>
</html>
