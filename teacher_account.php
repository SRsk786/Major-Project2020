<?php 
 include('frm_teacher_header.php'); 
  ?>

<table>
<tr><td> <p style="background-color: #5c5ca3;color: darksalmon;font-size: 19px;">Welcome:</p></td>
	<td><p style="background-color: #5c5ca3;color: darksalmon;font-size: 19px;"> <?php echo $login_session; ?> </p> </td> </tr>

<tr><td>
<p style="background-color: #5c5ca3;color: darksalmon;font-size: 19px;">Select Coaching Institute:</p></td>
<td><input type="text"name="select_coachig_institute" style="padding-left: 13%;padding-right: 13%;padding-top: 1%;padding-bottom: 1%;background-color: darkgray;color:saddlebrown;font-size: 15px;"></td></tr>
<tr>
	<td> 
		<input type="submit"name="submit"value="search">
	</td>
</tr>
<tr>
	
</table>
<?php
 include('frm_student_footer.php');
 ?>