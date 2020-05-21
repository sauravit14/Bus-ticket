<?php
	session_start();
	if(isset($_SESSION['admin_uname']))
		{
			
		}
	else
		{
			header('location:adminlogin.php');
		}
?>
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/admin.css" rel="stylesheet">
        
    </head>
    <body>
   <div class="div_header">
        <a href="home.php" class="link">Home</a>
        <a href="contactus.php" class="link">Contact Us</a>
        <a href="reprint&cancel.php" class="link">Reprint</a> 
        <a href="schedule.php" class="link">Schedule</a>
        <a href="aboutus.php" class="link">About Us</a>
        </div>
        <div class="div_head_c">
            
        </div>
        <div><img src="../image/img.jpg" class="image"></div>
            <div class="divleft2">
                <a href="adminhome.php" class="link2">Admin's Home</a><br><br>
                <a href="addbus.php" class="link2">Add Bus</a><br><br>
                <a href="delete_bus.php" class="link2">Delete Bus</a><br><br>
                <a href="report.php" class="link2">View Report</a><br><br>
                <a href="logout.php" class="link2">Log Out</a>
            </div>
        <div class="mid">
            <h3> &nbsp;&nbsp;<i> Welcome To Admin's Page</i></h3>
            <hr>
            <h3>&nbsp;&nbsp;Admin : &nbsp;<?php $un=$_SESSION['admin_uname']; echo $un; ?></h3>
            <a href="changepassword.php" class="link3">Change Password  </a>
            <a href="userdetails.php" class="link3">User Details </a>
            <a href="feedback.php" class="link3">View Feedback</a>
            <form action="#" method="post">
                <center>
                <table cellspacing="8" cellpadding="15" class="tbl">
				<tr>
					<td><input type="submit" name="sub" value="Click to know user details" class="but3"></td>
				</tr>
                </table>
                </center>
           </form>
<?php
if(isSet($_POST['sub']))
{
		$conn=mysqli_connect("localhost","root","","ticket");
		$sql="select * from userreg";
		$result=mysqli_query($conn,$sql);
		echo '<table cellspacing="2" cellpadding="2" border="2"  class="disp1">
		<tr>
		<th align="center">
		First name
		</th>
        <th align="center">
		last name
		</th>
        <th align="center">
		username
		</th>
		<th align="center">
		phone number
		</th>
        <th align="center">
		address
		</th><th align="center">
		city
		</th><th align="center">
		pin code
		</th>
		</tr>';
		while($row=mysqli_fetch_array($result))
		{
		echo '<tr>';
		echo'<td align="center">';
		echo $row["fname"];
		echo'</td>';
        echo'<td align="center">';
		echo $row["lname"];
		echo'</td>';
        echo'<td align="center">';
		echo $row["uname"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["pno"];
		echo'</td>';
        echo'<td align="center">';
		echo $row["address"];
		echo'</td>';
        echo'<td align="center">';
		echo $row["city"];
		echo'</td>';
        echo'<td align="center">';
		echo $row["pcode"];
		echo'</td>';    
		echo'</tr>';
		}
		echo '</table>';
}    
?>            
        </div>
        <div class="div_footer"></div>    
    </body>
</html>