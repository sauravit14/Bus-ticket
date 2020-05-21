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
	if(isset($_POST['bsearch']))
	{
	$v1=$_POST['t1'];
	$con=mysqli_connect("localhost","root","","ticket");
	$query= "SELECT * FROM `booking` WHERE `tno`='".$v1."'";
	$records=mysqli_query($con,$query);
	$data=mysqli_fetch_array($records);
	$v2=$data['uname'];
	$v3=$data['bname'];
	$v4=$data['bno'];
	$v5=$data['from'];
	$v6=$data['to'];
	$v7=$data['book_date'];
	$v8=$data['fare'];
	$v9=$data['dtime'];
	$v10=$data['atime'];
	$v11=$data['etime'];
	$v12=$data['no_of_seats'];
	$v13=$data['money'];
	}
?>
<html>
<script>
function go()
	{
	
		window.print("payment.php");
		
	}
function back()
{
	window.location.assign('reprint&cancel.php');
}
</script>    
<body>
    <center>
    <div>
    <h1>TICKET</h1>    
    <table cellspacing="8" cellpadding="5" class="tbl">
    <tr>
        <th>Ticket NO.  :</th>
        <td><?php echo $v1; ?></td>
    </tr>
    <tr>
        <th>User Name  :</th>
        <td><?php echo $v2; ?></td>
    </tr>
    <tr>
        <th>Bus Name  :</th>
        <td><?php echo $v3; ?></td>
    </tr> 
    <tr>
        <th>Bus No.  :</th>
        <td><?php echo $v4; ?></td>
    </tr>
    <tr>
        <th>From  :</th>
        <td><?php echo $v5; ?></td>
    </tr>
    <tr>
        <th>To  :</th>
        <td><?php echo $v6; ?></td>
    </tr> 
	<tr>
        <th>Date Of Journey  :</th>
        <td><?php echo $v7; ?></td>
    </tr> 
	<tr>
        <th>Fare Per Person  :</th>
        <td><?php echo $v8; ?></td>
    </tr> 
	<tr>
        <th>Departure Time :</th>
        <td><?php echo $v9; ?></td>
    </tr> 
	<tr>
        <th>Arrival Time :</th>
        <td><?php echo $v10; ?></td>
    </tr> 
	<tr>
        <th>Travel Time :</th>
        <td><?php echo $v11; ?></td>
    </tr> 
	<tr>
        <th>Total No. Of Seats  :</th>
        <td><?php echo $v12; ?></td>
    </tr> 
	<tr>
        <th>Total Amount :</th>
        <td><?php echo $v13; ?></td>
    </tr> 
	<tr>
		<th><input type="button" value="print" onclick="go()" ></th>
		<td><input type="button" value="back" onclick="back()">
	</tr>
    </table>
	</div>
	</center>
	</body>
	</html>