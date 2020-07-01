<?php
	$con = mysqli_connect('localhost','pooja','12345','coaching_db');
/*	if ($con == TRUE)
		echo "Connected";
	else
		echo "Error";
*/

		$course = $_POST['course'];
		$duration = $_POST['duration'];
		$fees = $_POST['fees'];

		$sql = "INSERT INTO tbl_student(s_course, s_duration, s_fees) VALUES ('$course', '$duration', '$fees', )";
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