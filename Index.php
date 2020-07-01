<?php include('index_header.php');   ?>
<!-- FOR main table     -->
    <div style="border-color: darkblue;
    border-radius: 17px;
    border-style: outset;
    margin-left: 4%;
    margin-right: 10%;
    margin-top: 2%;
    float: left;
    width: 57%;
    background-color: azure;">
        <div style="width: 100%;margin: 15px;">
            <table style="margin-right: 29px;">
                <tr >
                <th style="margin: 0px;width: auto;padding: 0px;padding-left: 45px;
                 padding-right: 45px;margin: 0px;">
                    <p>Coaching Name</p></th>
                <th><p>location</p></th>
                <th style="margin: 0px;width: auto;padding: 0px;padding-left: 45px;padding-right: 45px;">
                    <p>Rating</p></th>
                <th style="
    padding-left: 25px;
    padding-right: 25px;"><p>Contact</p></th>   
               </tr>
<?php

$sql = "select c_name, c_address,c_mobile, round(avg(rate),2) crate from tbl_coaching tc,tbl_rating tr where tc.registration_id = tr.registration_id and c_address like '%Saket nagar%' group by tr.registration_id order by crate desc";
include('conn.php');
$run = mysqli_query($conn,$sql);

$count = mysqli_num_rows($run);
//echo $count;
if($count > 0)
{
    while($row=mysqli_fetch_assoc($run))
    { ?>
        <tr style="text-align: center;">
                    <td style=""> <p style="color: darkgreen;font-size: 25px;"> <?php echo $row['c_name'];?></p>
                         </td>
                    <td style=""><p><?php echo $row['c_address'];?> </p></td>
                    <td style=""><p style="color: magenta;"><span>Rating <?php echo $row['crate'];?>
                        <progress value=<?php echo $row['crate'];?> max="10"></progress>

                    </span></p></span>
                    <?php  ?> </td>
                    <td style=""><p><?php echo $row['c_mobile']; ?></p>
                        <form action="Coaching_detail.php" method="POST">
                        <input type="hidden" name="regid" value= <?php echo $row['c_mobile']; ?> />
                    <input type="submit" name="Visite" value="Visite" />
                    </form></td>
                </tr>
<?php
    }
}

?>
                
            </table>
        </div>
    </div>
<div style="float: left;
    width: 24%;
    border-style: outset;
    border-color: darkblue;
    border-radius: 17px;
    margin-top: 2%;
    background-color: aliceblue;
    color: forestgreen;">
    <div style="    text-align: center;
    margin-bottom: 3%;
    padding-left: 8%;
    padding-right: 8%;
    padding-bottom: 4%;
    background-color: aliceblue;
    color: olive;
    ">
    <h3>Improve Your Searching</h3>
    <form action="#" method="POST">
    	
    <select name="Subject" style="margin-bottom: 5%;
    padding-left: 8%;
    padding-right: 8%;
    padding-bottom: 6%;
    background-color: aliceblue;
    color: olive;
    border-style: outset;
    border-color: olive;
    font-size: initial;text-align: center;
    width: 100%;">
        <option>Select Course</option>
    
<?php
    include('conn.php');

        $sql= "SELECT * FROM `tbl_coaching_course`";
                    //echo $sql;
             $query = mysqli_query($conn, $sql);
            if (mysqli_num_rows($query) > 0) 
            {
                while($row = mysqli_fetch_assoc($query))
                {   ?>
                    <option value= <?php  echo $row['registration_id']; ?>> <?php echo $row['course']; ?> </option>


<?php			}
			 }
?>
    </select><br>

    <select name="Subject"style="margin-bottom: 5%;
    padding-left: 8%;
    padding-right: 8%;
    padding-bottom: 6%;
    background-color: aliceblue;
    color: olive;
    border-style: outset;
    border-color: olive;
    font-size: initial;
    width:100%;"> 
   
        <option>Select Subject</option>
<?php
 include('conn.php');

        $sql= "SELECT * FROM `tbl_coaching_course`";
                    //echo $sql;
             $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) 
            {
                while($row = mysqli_fetch_assoc($query))
                {   ?>
                    <option value= <?php  echo $row['registration_id']; ?>> <?php echo $row['subject']; ?> </option>


<?php			}
			 }
?>
    </select><br>
        <select name="location" style="margin-bottom: 5%;
    padding-left: 8%;
    padding-right: 8%;
    padding-bottom: 6%;
    background-color: aliceblue;
    color: olive;
    border-style: outset;
    border-color: olive;
    font-size: initial;
    width: 100%;"> 
        <option>Select Location</option>
        <option>Saket Nagar</option>
        <option>Shakti nagar</option>
        <option>Bagsevania</option>
        <option>Bagmugalia</option>
        <option>M P nagar</option>
        <option>Narayan nagar</option>
        <option>Danish nagar</option>
        <option>Rajharsh colony</option>
        <option>Pragti prishar</option>
        <option>ISBT</option>
    </select>
<input type="Submit"  style="width: 100%;
    height: 37px;
    border-style: outset;
    border-color: olive;
    font-size: initial;text-align: center;     background-color: darkseagreen;
    color: blanchedalmond;" name="Submit"value="Find">
</form>
</div>
</div>


</div>	
<?php include('index_footer.php'); ?>