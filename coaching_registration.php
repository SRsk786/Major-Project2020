<?php
$conn = mysql_connect('localhost','pooja','12345','coaching_db');

/* if ($conn==TRUE)
echo "connected";
   else
echo "error";
*/
$registrationid=$_POST['registrationid'];
$name          =$_POST['name'];
$address       =$_POST['address'];
$contact       =$_POST['contactno'];
$mobile        =$_POST['mobile'];
$url           =$_POST['url'];
$email         =$_POST['emailid'];
$estyear       =$_POST['estyear'];
$pass          =$_POST['password'];
$repass        =$_POST['repassword'];

$sql="INSERT INTO tbl_coaching(s_registrationid,s_name,s_address,s_contactno,s_mobile,s_url,s_emailid,s_estyear,s_password,s_repassword)VALUE ('$registrationid','$name','$address','$contactno','$mobile','$url','$emailid','$estyear','$password','$repassword')";

$execute=mysqli_query($conn,$sql);
 if ($execute ==TRUE)

     {
 ?>
         <script type="text/javascript">
         alert("Data Inserted Successfully");
         </script>

<?php }
 else
 	  {
 ?>	  	
         <script type="text/javascript">
         alert("Data Inserted Successfully");
         </script>
 <?php
     }
 ?>       
