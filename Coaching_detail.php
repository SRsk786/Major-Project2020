<?php  include('index_header.php');
include('conn.php');

$regid =$_POST['regid'];
$sql="SELECT * FROM `tbl_coaching` Where `c_mobile` = '$regid' ";
// echo $sql;
$sql1 = mysqli_query($conn ,$sql);
$count1 = mysqli_num_rows($sql1);
if ($count1 = 1) {
	$row = mysqli_fetch_assoc($sql1);
}

//(`registration_id`, `c_name`, `c_address`, `c_contact_no`, `c_mobile`, `url`, `c_email`, `est_year`, `c_password`, `role`, `Date_time`

 ?>

	<h1 style= "color: aliceblue;text-align: center;background-color: #5c5c83;border-color: darkslateblue;
     border-style: solid;"><b>Coaching Detail</b></h1>

	<div style= "background-color: #7575a3;border-color: slateblue;
    border-style: groove;">


	<div style="background-color:#5c5c83;border-color: slateblue;;border-color:indigo;border-style:ridge;
    MARGIN-LEFT: 10%;
    MARGIN-RIGHT: 10%;">

		<form action="" method="POST"style="margin-left: 20%;margin-right: 20%;padding-bottom: 25px;background-color: azure;border-color:burlywood;border-style: ridge;border-style: ridge;">
			<table align="center">

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Coaching RegistrationID</b></p></td>
			<td><p><?php echo $row['registration_id'];  ?></p></td></tr>


			<tr><td>
            <p style="font-size:20px; color:#008080;"><b>Coaching Institute Name</b></p></td>
            <td><p><?php echo $row['c_name'];  ?></p></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Address</b></p>
			<td><p><?php echo $row['c_address'];  ?></p></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Contact no</b></p></td>
			<td><p><?php echo $row['c_contact_no'];  ?></p></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Mobile no</b></p></td>
			<td><p><?php echo $row['c_mobile'];  ?></p></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>URL</b></p></td>
			<td><p><?php echo $row['url'];  ?></p></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>EmilID</b></p></td>
			<td><p><?php echo $row['c_email'];  ?></p></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>EST Year</b></p></td>
			<td><p><?php echo $row['est_year'];  ?></p></td></tr>

		</table>
		</form>
	</div>
	</div>
<?php include('index_footer.php'); ?>