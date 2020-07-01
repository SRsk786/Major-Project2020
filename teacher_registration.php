<?php
$conn=mysql_connect('localhost','pooja','12345','coaching_db');
/*
   if (scan == TRUE)
   echo "connected";
   else
   echo "error";
 */  
 
  $name        =$_POST['name'];
  $mobile      =$_POST['mobile'];
  $address     =$_POST['address'];
  $email       =$_POST['email'];
  $speciliation=$_POST['speciliation'];
  $experience  =$_POST['experience'];
  $pass        =$_POST['password'];
  $repass      +$_POST['repassword'];

  $sql="INSERT INTO tbl_teacher(s_name,s_mobile,s_address,s_email,s_speciliation,s_experience,s_password,s_repassword) VALUES('$name','$mobile','$address','$email','$_speciliation','experience','password','repassword')";
  $execute= mysql_query($conn,$sql);

      if($execute == TRUE)
       {
 ?>
          <script type="text/javascript">
          alert("Data Inserted successfully");
          </script> 	
 <?php }
 else
?> 	
 	   {
 	   	 <script type="text/javascript">
 	   	 alert("Data Inserted successfully");
 	   	 </script>
<?php  
?>
       }

?>

 	   }

