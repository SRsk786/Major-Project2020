<?php  
if (isset($_POST['Student_submit'])) 
{
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$pass = $_POST['password'];
		$repass = $_POST['repassword'];
		$dob = $_POST['dob'];
		$aadhar = $_POST['aadhar'];
		$role = "Student";
include('conn.php');
$sql1 = mysqli_query($conn ,"SELECT * FROM `tbl_coaching` Where `c_mobile` = '$mobile' ");
$count1 = mysqli_num_rows($sql1);
//echo $count1;
$sql2 = mysqli_query($conn ,"SELECT * FROM `tbl_student` Where `s_mobile` = '$mobile' ");
$count2 = mysqli_num_rows($sql2);
//echo $count2;
$sql3 = mysqli_query($conn,"SELECT * FROM `tbl_teacher_register` Where `t_mobile` = '$mobile' ");		
$count3 = mysqli_num_rows($sql3);
//echo $count3;

		if ($pass != $repass) 
		{   ?>
			<script type="text/javascript">
				alert("please enter same password");
				window.location.href = 'frm_student_registration.php';
			</script>
<?php	}elseif($count2 > 0){   ?>
			<script type="text/javascript">
				alert("You are Already Registered");
				window.location.href = 'frm_student_registration.php';
			</script>

<?php		}elseif ($count1 > 0) {   ?>
 			<script type="text/javascript">
				alert("You are Already Registered as Coaching");
				window.location.href = 'frm_student_registration.php';
			</script>
<?php		}elseif ($count3 > 0) {    ?>
			<script type="text/javascript">
				alert("You are Already Registered as Teacher");
				window.location.href = 'frm_student_registration.php';
			</script>
<?php		}else{

				$password = MD5(mysqli_real_escape_string(stripslashes($pass)));
				$sql = "INSERT INTO tbl_student(s_name, s_mobile, s_email, s_address, password, DOB, s_aadhar, `role`, `Date_time`) VALUES ('$name', '$mobile', '$email', '$address', '$password', '$dob', '$aadhar', '$role', '')";
				include('conn.php');
				$execute = mysqli_query($conn, $sql);
				if ($execute == TRUE)
				{   ?>
			<script type="text/javascript">
				alert("you registerd successfully please login");
				window.location.href = 'frm_login.php';
			</script>

<?php				}
			}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Student Account</title>
</head>
<body style="background-color:#5c5ca3;">

<div style="background-color: white; width: 100%; border-style: inset; border-color: lightcoral;">
			<img src="final_logo.jpeg" style="height: 112px;">
</div>


	<h1 style= "border-style: solid;color: aliceblue; text-align: center;background-color: #5c5c83;border-color: darkslateblue;border-style: solid;"><b>STUDENT REGISTRATION FORM</b></h1>

	<div style= "background-color: #7575a3;border-color: slateblue;
    border-style: groove;">


	<div style="background-color:#5c5c83;border-color: slateblue;;border-color:indigo;border-style:ridge;
    MARGIN-LEFT: 10%;
    MARGIN-RIGHT: 10%;">

		<form action="" method="POST"style="margin-left: 20%;margin-right: 20%;padding-bottom: 25px;background-color: azure;border-color:burlywood;border-style: ridge;border-style: ridge;">
			<table align="center">

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Student Name:</b></p></td>
			<td><input type="text" name="name" required style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>


			<tr><td>
            <p style="font-size:20px; color:#008080;"><b>DOB</b></p></td>
            <td><input type="date" name="dob" required style="background-color:#FAFAD2; color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Address</b></p>
			<td><textarea name="address" cols="20" rows="5" style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></textarea></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Email</b></p></td>
			<td><input type="email" name="email"style="background-color: #FAFAD2; color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Aadhaar no</b></p></td>
			<td><input type="text" name="aadhar"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>Mobile no</b></p></td>
			<td><input type="text" name="mobile" style="background-color:#FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Password</b></p></td>
			<td><input type="Password" name="password" style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>Confirm Password</b></p></td>
			<td><input type="Password" name="repassword"style="background-color:#FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

            <tr><td>
			<input type="submit" name="Student_submit" value="OK" style="margin-left:20px;background-color:#FAFAD2;color: 008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; font-style: 20px; color:#8B008B;"></td></tr>
			<tr>
				<td><a href="frm_login.php">Go to login page</a></td>
			</tr>
		</table>
		</form>
	</div>
	</div>
	<div>

	</div>
</body>
</html>