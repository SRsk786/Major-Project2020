 <?php include('frm_teacher_header.php'); 
     ?>
	<h1 style= "border-style: solid;color:aliceblue; text-align: center;background-color: #5c5c83;border-color: darkslateblue;border-style: solid;"><b>TEACHER PERSENAL DETAILS</b></h1>

	<div style= "background-color: #7575a3;border-color: slateblue;
    border-style: groove;">


	<div style="background-color:#5c5c83;border-color: slateblue;;border-color:indigo;border-style:ridge;
    MARGIN-LEFT: 10%;
    MARGIN-RIGHT: 10%;">

		<form action="registration.php" method="POST"style="margin-left: 20%;margin-right: 20%;padding-bottom: 25px;background-color: azure;border-color:burlywood;border-style: ridge;border-style: ridge;">
			<table align="center">

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Teacher Name:</b></p></td>
			<td><input type="text" name="name" required style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>


			<tr><td>
            <p style="font-size:20px; color:#008080;"><b>Specialization</b></p></td>
			<td><input type="text" name="name" required style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

            
            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Mobile no</b></p>
			<td><input type="text" name="name" required style="background-color:#FAFAD2; color:#008080;padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

            <tr><td>
			<p style="font-size:20px; color:#008080;"><b>Email</b></p></td>
			<td><input type="email" name="email"style="background-color: #FAFAD2; color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

			<tr><td>
			<p style="font-size:20px; color:#008080;"><b>Aadhaar no</b></p></td>
			<td><input type="text" name="aadhar"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

			<tr><td>
			<p style="font-size: 20px; color:#008080;"><b>Address</b></p></td>
			<td><input type="text" name="mobile" style="background-color:#FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>

             <tr><td>
			<input type="submit" name="Student_submit" value="OK" style="margin-left:20px;background-color:#FAFAD2;color: 008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px; font-style: 20px; color:#8B008B;"></td></tr>
		</td>
		<tr><td>
    	<a href="index.php">Home</a>
		</td></tr>
		
    
	</tr>
		</table>
		</form>
	</div>
	</div>

    
	</body>
	</html>