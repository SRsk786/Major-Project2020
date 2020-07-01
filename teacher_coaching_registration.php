<?php
	$con = mysqli_connect('localhost','pooja','12345','coaching_db');
/*	if ($con == TRUE)
		echo "Connected";
	else
		echo "Error";
*/

		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$specilization = $_POST['specilization'];
		$experience = $_POST['experience'];

		$sql = "INSERT INTO tbl_student(s_name,s_subject, s_specilization, s_experience, ) VALUES ('$name', '$subject', '$specilization', '$experience')";
		$execute = mysqli_query($con, $sql);

		if ($execute == TRUE)
		{
?>
			<script type="text/javascript">
				alert("Data Inserted Successfully");
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
?>