<?php
	session_start();
	if(isset($_SESSION['uname']))
		{
			
		}
	else
		{
			header('location:login.php');
		}
?>
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/user.css" rel="stylesheet">
    </head>
    <body>
       <div class="div_header">
       <a href="home.php" class="link">Home</a>
        <a href="contactus.php" class="link">Contact Us</a>
        <a href="reprint&cancel.php" class="link">Reprint & Cancel</a> 
        <a href="schedule.php" class="link">Schedule</a>
        <a href="aboutus.php" class="link">About Us</a>
        </div>
        <div class="div_head_c">
        </div>
        <div><img src="../image/img.jpg" class="image"></div>
            <div class="divleft3">
                <a href="userhome.php" class="link2">User's Home</a><br><br>
                <a href="chagepassword_user.php" class="link2">Change Password</a><br><br>
                <a href="reprint&cancel.php" class="link2">Booking Cancel</a><br><br>
                <a href="logout.php" class="link2">Log Out</a>
     </div>
     <div class="midu">
     <h3> &nbsp;&nbsp;<i> Welcome To User Home Page</i></h3>
     <hr><h3>&nbsp;&nbsp;User : <?php $un=$_SESSION['uname']; echo $un; ?></h3><br>
     <form name="myform1" method="post" action="#">
     <center>
     <table cellspacing="8" cellpadding="5" class="tbl">
     <tr><th>Enter Bus name:</th>
         <td><input type="text" name="name" value="<?php echo isSet($_POST['name']) ? $_POST['name'] : '' ?>" required></td>
         <th></th><td><input type="submit" name="check" value="Check Names" class="but"></td></tr><tr></tr>
         </table>
         </center>
         </form>
<?php
if(isset($_POST['check']))
{
	$v1=$_POST['name'];
	$conn=mysqli_connect("localhost","root","","ticket");
	$sql="select * from addbus where bname='".$v1."'";
	$result=mysqli_query($conn,$sql);
	echo'<table cellspacing="2" cellpadding="2" border="1" class="disp1">
	<tr>
	<th align="center">
	Bus Name
	</th>
	<th align="center">
	Bus No.
	</th>
    <th align="center">
	Bus code
	</th>
	<th align="center">
	From
	</th>
	<th align="center">
	To
	</th>
	<th align="center">
	Fare
	</th>
	<th align="center">
	Departure Time
	</th>
	<th align="center">
	Arrival Time
	</th>
	<th align="center">
	Travel Time
	</th>
	</tr>';
	while($row=mysqli_fetch_array($result))
	{
		echo '<tr>';
		echo'<td align="center">';
		$t=$row["bname"];
        echo $t;
		echo'</td>';
		echo'<td align="center">';
		echo $row["bno"];
		echo'</td>';
        echo'<td align="center">';
		echo $row["code"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["from"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["to"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["fare"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["dtime"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["atime"];
		echo'</td>';
		echo'<td align="center">';
		echo $row["etime"];
		echo'</td>';
		echo'</tr>';
	}
    echo '</table>';
}
?>  <br>
    <form name="myform2" action="ticketprint.php" method="post">
    <center>
    <table  cellspacing="8" cellpadding="5" class="tbl">
    <tr>
    <th>Date Of Journey:</th>
    <td><input type="date"  name="doj" value="<?php echo isSet($_POST['doj']) ? $_POST['doj'] : '' ?>" required></td></tr>
    <tr>
    <th>Enter No. Of Seats:</th> 
    <td><input type="text" name="nos" value="<?php echo isSet($_POST['nos']) ? $_POST['nos'] : '' ?>" required></td>    
    </tr>
    </table>
    <input type="submit" value="Book" name="book" class="but"><br><br>
    <input type="hidden" name="name" value="<?php echo isSet($_POST['name']) ? $_POST['name'] : '' ?>" required>    
    </center>    
    </form>
     </div>
    <div class="div_footer">
    </div>    
    </body>
</html>