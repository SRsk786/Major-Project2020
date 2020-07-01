<?php
session_start();
if (isset($_POST['submit']))
{	include('conn.php');
	if (empty($StudentID = $_POST['StudentID'] || $Password = $_POST['Password'] )) 
	{
		$error = "Invalid or password";
		echo $error;
	}
	else
	{ 	
		//	echo $_POST['select'];
			$select = mysqli_real_escape_string($conn,stripslashes($_POST['select']));	
			$StudentID = mysqli_real_escape_string($conn,stripslashes($_POST['StudentID']));
			$Password = MD5(mysqli_real_escape_string($conn,stripslashes($_POST['Password'])));

		//	echo $select;
		//	echo $StudentID;
		//	echo $Password;
			if( $select == "Student")
			{
				$sql= " SELECT * from tbl_student where s_mobile = '$StudentID' && password = '$Password'" ;
				//echo $sql;
				
				 $result = mysqli_query($conn, $sql);
				$count = mysqli_num_rows($result);
				if($count == 1)
				{  
					$row = mysqli_fetch_assoc($result);

							$_SESSION['mobile'] = $StudentID;
		     				$_SESSION['select'] = $select;
					
			    }
			    else
			    {   
			    	echo "invalid user";
				 	//header("location:frm_login.php");
			    }   mysqli_close($conn);

			}
			elseif($select == "Coaching") 
			{
				$sql= " SELECT * FROM `tbl_coaching` WHERE c_mobile = '$StudentID' && c_password = '$Password'" ;
				//echo $sql;
				include('conn.php');
				 $result = mysqli_query($conn, $sql);
				$count = mysqli_num_rows($result);
				if($count == 1)
				{    
					$row = mysqli_fetch_assoc($result);
					
							$_SESSION['mobile'] = $StudentID;
		     				$_SESSION['select'] = $select;
				}
				else
				{
					echo "invalid user";
					//header("location:frm_login.php");
				}mysqli_close($conn);
			}
			elseif ($select =="Teacher") 
			{
					$sql= " SELECT * FROM `tbl_teacher_register`where t_mobile = '$StudentID' && password = '$Password'" ;
				//echo $sql;
					include('conn.php');
				 	$result = mysqli_query($conn, $sql);
					$count = mysqli_num_rows($result);
					if($count == 1)
					{    
						$row = mysqli_fetch_assoc($result);
						
							$_SESSION['mobile'] = $StudentID;
		     				$_SESSION['select'] = $select;

					}
					else
					{
						echo "invalid user";
					//header("location:frm_login.php");
					}
			}

	}
}	
elseif(isset($_POST['signup'])) 
{
	$select =$_POST['select1'];
	if( $select == "Student")
	{
	  	header("location:frm_student_registration.php");	
		# code...
	}
	elseif ($select == "Teacher") 
	{
	  	header("location:frm_teacher_registration.php");	
		# code...
	}
	elseif ($select == "Coaching") 
	{
		  	header("location:frm_coaching_registration.php");
		
	}
}

?>