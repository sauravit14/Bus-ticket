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
<?php
if(isset($_POST['delete']))
{
	$v1=$_POST['name'];
	$con=mysqli_connect("localhost","root","","ticket");
	$query = "DELETE FROM `addbus` WHERE `bname`='".$v1."'" ;
	$records=mysqli_query($con,$query);
		echo '<script>alert("Bus Deleted Successfully");</script>';	
		echo "<script> window.location.assign('adminhome.php');</script>";
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
        <a href="reprint&cancel.php" class="link">Reprint & Cancel</a> 
        <a href="schedule.php" class="link">Schedule</a>
        <a href="aboutus.php" class="link">About Us</a>
        </div>
        <div class="div_head_c"></div>
        <div><img src="../image/img.jpg" class="image"></div>
            <div class="divleft2">
                <a href="adminhome.php" class="link2">Admin's Home</a><br><br>
                <a href="addbus.php" class="link2">Add Bus</a><br><br>
                <a href="delete_bus.php" class="link2">Delete Bus</a><br><br>
                <a href="report.php" class="link2">View Report</a><br><br>
                <a href="logout.php" class="link2">Log Out</a>
            </div>
        <div class="mid">
            <h3> &nbsp;&nbsp;<i> Welcome To Admin Page</i></h3><hr>
            <h3>&nbsp;&nbsp;Admin : &nbsp;<?php $un=$_SESSION['admin_uname']; echo $un; ?></h3>
            <form name="myform" method="post" action="#">
            <center>
                <table cellspacing="8" cellpadding="15" class="tbl">
                <tr>
                    <th>Enter Bus Name:</th>
                    <td><input type="text" name="name" value="<?php echo isSet($_POST['name']) ? $_POST['name'] : '' ?>"  required><br><br></td>
                </tr>
                    <tr>
                    <td><input type="submit" name="check" value="Check Names" class="but"></td>
                    <td><input type="submit" value="Delete Bus" name="delete" class="but"></td></tr>
                </table><br><br>    
            </center>
			</form>
<?php if(isset($_POST['check']))
{
	$v1=$_POST['name'];
	$conn=mysqli_connect("localhost","root","","ticket");
    if($v1!=NULL)
	{
	$sql="select * from addbus where bname='".$v1."'";
	$result=mysqli_query($conn,$sql);
	echo'<table cellpadding="10" border="1" class="disp">
	<tr>
	<th align="center">
	Bus Name
	</th>
	<th align="center">
	Bus No.
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
	echo '</table><br><br>';
	}
}	
?>
          
		 </div>
        <div class="div_footer"></div>    
    </body>
</html>
