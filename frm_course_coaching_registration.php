<?php include('frm_coaching_header.php'); ?>
    <h1 style="color: aliceblue;font-size:35px;text-align:center;font-size: 35px;
    text-align:center;background-color:#5c5c83;margin-right: 20%;
    margin-left: 20%;border-color: #673AB7;
    border-style: solid;color: aliceblue;"><b style="color: aliceblue;">COURSE DETAILS</b></h1>

    <div style="background-color:#5c5c83;border-color:darkslateblue;
    border-style: solid;
">

    <div style="background-color:#7575a3;
    border-style: ridge;
    border-color: indigo;
    MARGIN-LEFT: 10%;
    MARGIN-RIGHT: 10%;">


	<form style= "text-align:center;padding-bottom: 25px;border-style: solid;border-color: cadetblue;align:center;margin-right: 11%;margin-left: 11%;border-color: navajowhite;background-color: aliceblue;" action="" method="POST">
<table align="center">
    <tr><td>
    <p style="font-size:20px; color:#008080;">Course</p></td>
    <td>
        <select name="Course"  style=" background-color: #FAFAD2;
    color: #008080;
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: center;
    font-size: 14px; width: 100%;">
            <option> Select </option>
            <option value="BANK">BANK</option>
            <option value="SSC" >SSC</option>
            <option value="RAILWAYS" >RAILWAYS</option>
            <option value="UPSC" >UPSC</option>
            <option value="PSC" >PSC</option>
            <option value="LANGUAGES" >LANGUAGES</option>
            <option value="GATE" >GATE</option>
            <option value="PSU" >PSU</option>
            <option value="CLAT" >CLAT</option>
        </select>
    </td></tr>

	<tr><td>
	<p style="font-size:20px; color:#008080;">Subject</p></td>
	<td><input type="text"name="Subject"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

    <tr><td><p style="font-size:20px; color:#008080;">Duration</p></td>
	   <td><input type="text"name="Duration"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center;"><p style="color: darkcyan; font-size: 20px;">Days</td>
    </tr>

    <tr><td>
	<p style="font-size:20px; color:#008080;">Fees</p></td>	
	<td><input type="text"name="Fees"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

    <tr><td>
	<input type="submit"name="Submit"value="ok"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>
    <tr>
        <td><a href="frm_coaching_account.php">Home</a></td>
    </tr>	
</form>
</table>

<?php  include('frm_coaching_footer.php');

if (isset($_POST['Submit'])){
$servername="localhost";
$username="pooja";
$password="12345";
$database="coaching_db";
$conn=mysqli_connect($servername, $username, $password, $database);
if(!$conn)
{
    die("connection failed:".mysqli_connect_error());
}
else
{
        $course = $_POST['Course'];
        $subject = $_POST['Subject'];
        $dura = $_POST['Duration'];
        $fee = $_POST['Fees'];
        $regid = $row['registration_id'];
        $sql= "INSERT INTO `coaching_db`.`tbl_coaching_course` (`registration_id`, `course`, `subject`, `duration`, `fees`) VALUES ('$regid', '$course', '$subject', '$dura', '$fee')";
  //      echo $sql;
        $run = mysqli_query($conn, $sql);
        if ($run == TRUE)
        {
            echo "Course Added";
        }
        else
        {
           echo " Failed";
        }

}mysqli_close($conn);
}
?>