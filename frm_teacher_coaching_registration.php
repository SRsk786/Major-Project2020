<?php include('frm_coaching_header.php');  ?>
    <h1 style="font-size:35px;text-align:center;font-size: 35px;
    text-align:center;background-color:#5c5c83;margin-right: 20%;
    margin-left: 20%;    border-color: #673AB7;
    border-style: solid;"><b>TEACHER DETAILS</b></h1>

    <div style="background-color:#5c5c83;border-color:darkslateblue;
    border-style: solid;">

    <div style="background-color:#7575a3;
    border-style: ridge;
    border-color: indigo;
    MARGIN-LEFT: 10%;
    MARGIN-RIGHT: 10%;">


	<form style= "text-align:center;padding-bottom: 25px;border-style: solid;border-color: cadetblue;align:center;margin-right: 11%;margin-left: 11%;border-color: navajowhite;background-color: aliceblue;" action="#" method="POST">

	<table align="center">
        <tr>
        <td>
           <p style="font-size:20px; color:#008080;">Teacher Mobile no</p>
       </td>
       <td>
            <input type="text"name="Mobile"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;">
        </td>
    </tr>
    <tr>
        <td>
	       <p style="font-size:20px; color:#008080;">Teacher Name</p>
       </td>
	   <td>
            <input type="text"name="Teachername"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;">
        </td>
    </tr>
    <tr>
        <td>
	       <p style="font-size:20px; color:#008080;">Teacher Subject</p>
        </td>
	     <td>
            <input type="text"name="Subject"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center;
                font-size: 14px;">
        </td>
    </tr>

    <tr><td>
	<p style="font-size:20px; color:#008080;">Specilization</p></td>	
	<td><input type="text"name="Specilization"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

    <tr><td>
	<p style="font-size:20px; color:#008080;">Experience</p></td>	
	     <td>
            <input type="text"name="Experience"value=" "style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;">
        </td>
    </tr>

    <tr>
        <td>
	       <input type="submit"name="Submit"value="ok"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;">
       </td>
   </tr>
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
        $mobile = $_POST['Mobile'];
        $name = $_POST['Teachername'];
        $subject = $_POST['Subject'];
        $spe = $_POST['Specilization'];
        $expnc = $_POST['Experience'];
        $regid = $row['registration_id'];

        $sql= "INSERT INTO `coaching_db`.`tbl_teacher_register` (`t_mobile`, `t_name`, `t_address`, `t_email`, `specialization`, `experience`, `password`) VALUES ('$mobile', '$name', '', '', '$spe', '$expnc', '');";
        $execute= mysqli_query($conn,$sql);

      if($execute == TRUE)
       {
            $sql ="INSERT INTO `coaching_db`.`tbl_teacher_coaching` (`t_mobile`, `registration_id`) VALUES ('$mobile', '$regid');";
            $run = mysqli_query($conn, $sql);
            if($run == TRUE)
            {
                    echo "Teacher Added";
            }
            else
            {
                echo "failed";
            }
        }
        else
        {
           echo " Failed 2";
        }

}mysqli_close($conn);
}
?>