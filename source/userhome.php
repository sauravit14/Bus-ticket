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
<?php
if(isSet($_POST['next']))
{
    echo "<script> window.location.assign('bookticket1.php');</script>";
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
        <a href="reprint&cancel.php" class="link">Reprint</a> 
        <a href="schedule.php" class="link">Schedule</a>
        <a href="aboutus.php" class="link">About Us</a>
        </div>
        <div class="div_head_c">
        </div>
        <div><img src="../image/img.jpg" class="image"></div>
            <div class="divleft3">
                <a href="userhome.php" class="link2">User's Home</a><br><br>
                <a href="chagepassword_user.php" class="link2">Change Password</a><br><br>
                <a href="reprint&cancel.php" class="link2">Reprint</a><br><br>
                <a href="logout.php" class="link2">Log Out</a>
     </div>
        <div class="midu">
        <center>
            <form name="myform" action="#" method="post">    
            <table cellspacing="8" cellpadding="5" class="tbl">
                <h2>Search bus</h2> <hr>
            <tr>
            <th>From:</th>
            <td><input type="text" name="from" value="<?php echo isSet($_POST['from']) ? $_POST['from'] : '' ?>" required/></td>
            </tr>
            <tr>
            <th>To:</th>
            <td><input type="text" name="to" value="<?php echo isSet($_POST['to']) ? $_POST['to'] : '' ?>" required/></td>
            </tr><tr></tr>
            </table> 
            <input type="submit" name="search" value="search" class="but">
            </form>    
            </center> 
<?php
    if(isSet($_POST['search']))
    {
        $v1=$_POST['from'];
        $v2=$_POST['to'];
        $conn=mysqli_connect("localhost","root","","ticket");
        $sql="SELECT * FROM `addbus` WHERE `from`='".$v1."' AND `to`='".$v2."'";
        $result=mysqli_query($conn,$sql);
        echo '<table cellspacing="8" cellpadding="5" class="disp" border=1>
        <tr>
	    <th align="center">
	    From
	    </th>
	    <th align="center">
	    To
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
        <th align="center">
        Bus Name
        </th>
        <th align="center">
        Bus Number
        </th>
        <th align="center">
        Fare RS
        </th>
        </tr>';
        while($row=mysqli_fetch_array($result))
        {
            echo '<tr>';
            echo'<td align="center">';
            echo $row["from"];
            echo'</td>';
            echo'<td align="center">';
            echo $row["to"];
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
            echo'<td align="center">';
            echo $row["bname"];
            echo'</td>';
            echo'<td align="center">';
            echo $row["bno"];
            echo'</td>';
            echo'<td align="center">';
            echo $row["fare"];
            echo'</td>';
            echo'</tr>';
        }
        echo '</table>';
        echo "*Please remember the bus name";
    }    
?> 
            <br><br><center>
            <form name="myform2" method="post" action="#">
                <input type="submit" name="next" value="Click to Book Ticket" class="but">
            </form></center>            
        </div>
        <div class="div_footer">
    </div>    
    </body>
</html>