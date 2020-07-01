<?php include('frm_student_header.php');

 
  ?>
<form action="" method="POST" style="margin-left:45px;margin-left: 45px;padding-left: 15%;padding-right: 15%;padding-bottom: 10%;
      background-color: azure;color: darkcyan;">

<h1 style="font-size:40px;border-style: solid;border-color: darkorchid;font-size: 40px; background-color: #5c5c83;text-align: center;color: azure;" >Course Instructor Feedback</h1>

<p style="font-size:20px;">File out the form with honesty</p>
<table>
<tr>
	<td>
		<span style="font-size:20px;" >
			Your Name :
		</span>
	</td>
	<td style="padding-left:15px;">
           		<span style="font-size:20px;">
					<?php  echo $login_session; ?>
				</span>		
	</td>
</tr>
<tr>
	<td>
		<span style="font-size:20px;">
		Your Coaching Name :
		</span>
	</td>
<?php  
$mobile = $_SESSION['mobile'];
  $sql = "SELECT * FROM `tbl_coaching_student` WHERE `s_mobile` = '$mobile' ";
  //echo $sql;
        include('conn.php');
        $run = mysqli_query($conn, $sql);        
        $count = mysqli_num_rows($run);
        if ($count == 0) 
        { ?>
           	<td style="padding-left:15px;"> 
           		<input type="text"name="name" value=<?php  echo "Registration_id your coaching"; ?> style="margin-left:px;" readonly>
			</td>
<?php   }elseif ($count == 1) 
		{ $row = mysqli_fetch_assoc($run);
		  $regid = $row['registration_id'];
		  //echo $regid;
		  $sql1 = "SELECT * FROM `tbl_coaching` WHERE `registration_id` = '$regid' ";
		  // echo $sql1;
		  $run1 = mysqli_query($conn , $sql1);
		  $countt = mysqli_num_rows($run1);
		 // echo $countt;
		  $roww = mysqli_fetch_assoc($run1);
		  //echo $roww['c_name'];
		 ?>
			<td style="padding-left:15px;"> 
           		<span style="font-size:20px;">
					<?php  echo $roww['c_name']; ?>
				</span>
			</td>
<?php 	}
?>
</tr>

<tr><td>
<span style="font-size:20px;">Rate (Out of 10) :</span>
<td style="padding-left:15px;" ><input type="text"name="rate" placeholder=" eg. 10" required>
</td></tr>

<tr><td>
<span style="font-size:20px;">Feedback (Max. 150 word)</span>
<td style="padding-left:15px;"><input type="text" name="remark" placeholder="(Good coaching , etc.)" required><br></td></tr>
</table>

<table style="" border="1">
<tr><th>&nbsp </th>
<td style="font-size:20px;">Out Standing</td>
<td style="font-size:20px;">Excellent</td>
<td style="font-size:20px;">Very good</td>
<td style="font-size:20px;">Satisfactory</td>
<td style="font-size:20px;">Fail</td></tr>

<tr><th style="font-size:20px; background-color:floralwhite;">What you think about it?</th>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td></tr></th>

<tr><th style="font-size:20px; background-color:floralwhite;">How did it change things for you?</td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td></tr>

<tr><th style="font-size:20px; background-color:floralwhite;">What do you now do differently? </th>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td></tr>


<tr><th style="font-size:20px;background-color:floralwhite;">How you experience?</th>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px;text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px;text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px;text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px;text-align:center;"><input type="radio" name="gender" value="female"></td></tr>

<tr><th style="font-size:20px;background-color:floralwhite;">How could i have been a better coach for you?</th>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td>
<td style="font-size:20px; text-align:center;"><input type="radio" name="gender" value="female"></td></tr>

</table>
<table style="margin-top:15px;">
<tr><td>
<input type="submit" name="Submit" value="submit" class="Submit Button">
</td></tr>
<tr>
    <td>
    	<a href="frm_student_account.php">Home</a>
    </td>
</tr>
</table>
</form>
<?php include('frm_student_footer.php');
 //echo $login_session; 
if (isset($_POST['Submit'])) {
$mobile;
$regid =$roww['registration_id'];
$rate=$_POST['rate'];
$remark=$_POST['remark'];

 $sql = "SELECT * FROM `tbl_rating` WHERE `s_mobile` = '$mobile' ";
     //echo $sql;
        include('conn.php');
        $run = mysqli_query($conn, $sql);        
        $count = mysqli_num_rows($run);
       //echo $count;
        if( $count == 0)
        {
			$query = " INSERT INTO `tbl_rating` (`registration_id`, `s_mobile`, `rate`, `remark`) VALUES ('$regid', '$mobile', '$rate', '$remark')";
			//echo $query;
			$runn = mysqli_query($conn, $query);
            if ($runn == TRUE)
            {
                echo "You successfully Save Your Feedback";
            }
            else
            {
                echo " Failed";
            }                    
        } 
        elseif( $count == 1)
        {   
            echo "you Already Saved Your Feedback";
                 
                        
        } 
}

?>
