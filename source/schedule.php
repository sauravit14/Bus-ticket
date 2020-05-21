<html>
<head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/schedule.css" rel="stylesheet">
    </head>
    <body>
    <div class="div_header">
        <a href="home.php" class="link">Home</a>
        <a href="contactus.php" class="link">Contact Us</a>
        <a href="reprint&cancel.php" class="link">Reprint</a> 
        <a href="schedule.php" class="link">Schedule</a>
        <a href="login.php" class="link">Login</a>
        <a href="aboutus.php" class="link">About Us</a>
     </div>
    <div class="div_head_c"></div>
     <div>
        <img src="../image/img.jpg" class="image"></div>
        
        <div class="con_div1">
                
                    <form name="myform3" action="#" method="post">

                    <input type="submit" name="log" class="but3" value="CLICK HERE TO KNOW ABOUT SCHEDULE">
                             </form>
                </div>
<div class="container">                        
<?php
if(isset($_POST['log']))
{
	$conn=mysqli_connect("localhost","root","","ticket");
	$sql="select * from addbus";
	$result=mysqli_query($conn,$sql);
	echo'<table cellspacing="2" cellpadding="2" class="display" border="1" >
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
}
echo '</table>';	
?>
</div>    
               
        <div class="div_footer">
		</div>
    </body>
</html>