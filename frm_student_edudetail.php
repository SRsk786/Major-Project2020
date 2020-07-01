<?php include('frm_student_header.php'); ?>
    <h1 style="font-size:35px;text-align:center;font-size: 35px;
    text-align:center;background-color:#5c5c83;margin-right: 20%;
    margin-left: 20%;    border-color: #673AB7;
    border-style: solid; color:aliceblue;">
    <b>COURSE DETAILS</b></h1>

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

    <tr>
        <td>
            <p style="font-size:20px; color:#008080;">Coaching name</p>
        </td>
	    <td>
             <select name="regid" style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center;">
                <option selected="TRUE" disabled="TRUE" >Select </option>
<?php  
       include('conn.php');

        $sql= "SELECT * FROM `tbl_coaching`";
                    //echo $sql;
                    $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) 
            {
                    while($row = mysqli_fetch_assoc($query))
                    {   ?>
                        <option value= <?php  echo $row['registration_id']; ?>> <?php echo $row['c_name'];  ?> </option>
<?php               }
            }        
                    //$login_session = $row['s_name'];

         
        
 ?>               

             </select>   
       </td>
    </tr>

    <tr><td>
	<input type="submit"name="Submit"value="ok"style="background-color: #FAFAD2;color:#008080; padding-left:70px;padding-right:70px;padding-top:10px;padding-bottom:10px;text-align:center; font-size: 14px;"></td></tr>
    <tr>
        <td><a href="frm_student_account.php">Home</a></td>
    </tr>	
</form>
</table>

<?php  include('frm_student_footer.php');

if (isset($_POST['Submit']))
    { 

        $regid = $_POST['regid'];
        $mobile = $_SESSION['mobile'];
        $null = "";
        //echo $regid;
        //echo $mobile;
        $sql = "SELECT * FROM `tbl_coaching_student` WHERE `s_mobile` = '$mobile' ";
     //echo $sql;
        include('conn.php');
        $run = mysqli_query($conn, $sql);        
        $count = mysqli_num_rows($run);
       //echo $count;
        if( $count == 0)
        {               
            $sql = "INSERT INTO `coaching_db`.`tbl_coaching_student` (`s_mobile`, `registration_id`) VALUES ('$mobile', '$regid');";
                        // echo $sql;
            $run = mysqli_query($conn, $sql);
            if ($run == TRUE)
            {
                echo "You successfully registered Your Coaching";
            }
            else
            {
                echo " Failed";
            }                    
        } 
        elseif( $count == 1)
        {   
            echo "you Already registered your Coaching";
                 
                        
        } 
                mysqli_close($conn);
    }
?>