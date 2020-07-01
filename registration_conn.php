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

		$sql = "INSERT INTO tbl_student(s_name, s_mobile, s_email, s_address, password, DOB, s_aadhar) VALUES ('$name', '$mobile', '$email', '$address', '$pass', '$dob', '$aadhar')";
		include('conn.php');
		$execute = mysqli_query($conn, $sql);

		if ($execute == TRUE)
		{
?>
			<script type="text/javascript">
				alert("You Successfully Registered Click ok to login");
			</script>
<?php   }
		else
		{
?>
			<script type="text/javascript">
				alert("Data Inserted Successfully");
			</script>
<?php
		}

}
?>