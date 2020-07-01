<?php  
if (isset($_POST['Coaching_submit'])) 
{
		$registrationid = $_POST['RegistrationID'];
		$cname = $_POST['cname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$pass = $_POST['password'];
		$repass = $_POST['rpassword'];
		$mobile = $_POST['mobile'];
		$url = $_POST['url'];
		$est = $_POST['est'];
		$role = "Coaching";
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
				window.location.href = 'frm_coaching_registration.php';
			</script>
<?php	}elseif($count1 > 0){   ?>
			<script type="text/javascript">
				alert("You are Already Registered");
				window.location.href = 'frm_coaching_registration.php';
			</script>

<?php		}elseif ($count2 > 0) {   ?>
 			<script type="text/javascript">
				alert("You are Already Registered as Student");
				window.location.href = 'frm_coaching_registration.php';
			</script>
<?php		}elseif ($count3 > 0) {    ?>
			<script type="text/javascript">
				alert("You are Already Registered as Teacher");
				window.location.href = 'frm_coaching_registration.php';
			</script>
<?php		}else{
		
				$password = MD5(mysqli_real_escape_string(stripslashes($pass)));
				$sql = "INSERT INTO `coaching_db`.`tbl_coaching` (`registration_id`, `c_name`, `c_address`, `c_contact_no`, `c_mobile`, `url`, `c_email`, `est_year`, `c_password`, `role`, `Date_time`) VALUES ('$registrationid', '$cname', '$address', '$contact', '$mobile', '$url', '$email', '$est', '$password', '$role', '');";
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


	<h1 style= "color: aliceblue;text-align: center;background-color: #5c5c83;border-color: darkslateblue;
     border-style: solid;"><b>COACHING INSTITUTE REGISTRATION FORM</b></h1>

	<div style= "background-color: #7575a3;border-color: slateblue;
    border-style: groove;">


	<div style="background-color:#5c5c83;border-color: slateblue;;border-color:indigo;border-style:ridge;
    MARGIN-LEFT: 10%;
    MARGIN-RIGHT: 10%;">

		<form action="" method="POST"style="margin-left: 20%;margin-right: 20%;padding-bottom: 25px;background-color: azure;border-color:burlywood;border-style: ridge;border-style: ridge;">
			<table align="center">

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Coaching RegistrationID</b></p></td>
			<td><input type="text" name="RegistrationID" required style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>


			<tr><td>
            <p style="font-size:20px; color:#008080;"><b>Coaching Institute Name</b></p></td>
            <td><input type="text" name="cname" required style="background-color:#FAFAD2; color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Address</b></p>
			<td><textarea name="address" cols="20" rows="5" style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></textarea></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Contact no</b></p></td>
			<td><input type="contact" name="contact"style="background-color: #FAFAD2; color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" ></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Mobile no</b></p></td>
			<td><input type="text" name="mobile"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>URL</b></p></td>
			<td><input type="text" name="url"style="background-color:#FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>EmilID</b></p></td>
			<td><input type="email" name="email"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>EST Year</b></p></td>
			<td><input type="text" name="est"style="background-color:#FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Password</b></p></td>
			<td><input type="Password" name="password"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>Confirm Password</b></p></td>
			<td><input type="Password" name="rpassword"style="background-color:#FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;" required></td></tr>


			<tr><td>
			<input type="submit" name="Coaching_submit" value="Register" style="margin-left:20px;background-color:#FAFAD2;color: 008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; font-style: 20px; color:#8B008B;"></td></tr>
			<tr>
				<td><a href="frm_login.php">Go to login page</a></td>
			</tr>
		</table>
		</form>
	</div>
	</div>
</body>
</html>


<?php 
//include('conn.php');

 ?>