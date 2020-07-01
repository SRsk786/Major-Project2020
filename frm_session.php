 <?php  $servername="localhost";
		$username="root";
		$password="";
		$database="coaching_db";
		$conn=mysqli_connect($servername, $username, $password, $database);
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		else
		{
			session_start();
			$user_check = $_SESSION['mobile'];
			$id = $_SESSION['select'];
//echo $user_check;
		//	echo $id;
			if ( $id == "Student") 
			{
					$sql= "SELECT * from `tbl_student` where `s_mobile` = '$user_check' ";
					//echo $sql;
				 	$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($query);
					$login_session = $row['s_name'];
					if (!isset($login_session)) 
					{
						mysqli_close($conn);
						header('Location: frm_login.php');
					}

			} 
			elseif ( $id == "Teacher")
			{ 
					$sql= "SELECT * FROM `tbl_teacher_register`where t_mobile = '$user_check' ";
					//echo $sql;
				 	$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($query);
					$login_session = $row['t_name'];
					if (!isset($login_session)) 
					{
						mysqli_close($conn);
						header('Location: frm_login.php');
					}			
			} 
			elseif ( $id == "Coaching")
			{ 
					$sql= "SELECT * FROM `tbl_coaching` WHERE c_mobile = '$user_check' ";
					//echo $sql;
				 	$query = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($query);
					$login_session = $row['c_name'];
					if (!isset($login_session)) 
					{
						mysqli_close($conn);
						header('Location: frm_login.php');
					}			
			}	
					
		   
		}

?>		