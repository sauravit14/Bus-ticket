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
if(isset($_POST['book']))
{
    $avail=0;
    $book=0;
    $ctr=1;
		$conn=mysqli_connect("localhost","root","","ticket");
		$sql="SELECT * FROM booking";
		$res=mysqli_query($conn,$sql);	
			while($row=mysqli_fetch_assoc($res))
			{
				$ctr=$ctr+1;
			}
			if($ctr==1)
			{
				$str=(string)"T001";
			}
			else
			{
				$str="T00".(string)$ctr;
			}
    $un=$_SESSION['uname'];
    $v1=$_POST['name'];
	$s1=$_POST['nos'];
	$v9=$s1*100;
	$con=mysqli_connect("localhost","root","","ticket");
	$query= "SELECT * FROM `addbus` WHERE `bname`='".$v1."'";
	$records=mysqli_query($con,$query);
	$data=mysqli_fetch_array($records);
	$v2=$data['bno'];
	$v3=$data['from'];
	$v4=$data['to'];
	$v5=$data['fare'];
	$v6=$data['dtime'];
	$v7=$data['atime'];
	$v8=$data['etime'];
    $v9=$s1*$v5;
    $v10=$_POST['doj'];
	$query1="SELECT SUM(`no_of_seats`) FROM `booking` WHERE `book_date`='".$v10."' AND `bno`='".$v2."'";
		$records1=mysqli_query($con,$query1);
		$data1=mysqli_fetch_array($records1);
		$reserved=$data1[0];
		$available=48-$reserved;
		if($reserved<48 && $s1<=$available)
		{
			$conn=mysqli_connect("localhost","root","","ticket");
			$query="INSERT INTO `booking`(`tno`,`uname`,`bname`, `bno`, `from`, `to`, `book_date`, `fare`, `dtime`, `atime`, `etime`, `no_of_seats`, `money`) VALUES ('".$str."','".$un."','".$v1."','".$v2."','".$v3."','".$v4."','".$v10."','".$v5."','".$v6."','".$v7."','".$v8."','".$s1."','".$v9."')";
			echo '<script>alert("Thank YOU !!! Your Ticket has been booked.")</script>';
			$query_run= mysqli_query($conn,$query);
            $res=mysqli_query($con,$query_run);
        }
		else
		{
			echo '<script>alert("Seat Full !!! ")</script>';
            echo "<script> window.location.assign('userhome.php');</script>";
		}
}	
?>
<html>
<script>
function go()
	{
	
		window.print("ticketprint.php");
		
	}
function go1()
{
	window.location.assign('userhome.php');
}
 </script>    
<body>
    <div>
    <center>
    <h1>TICKET</h1>    
    <table cellspacing="8" cellpadding="5" class="tbl">
    <tr>
        <th>Ticket NO.  :</th>
        <td><?php echo $str; ?></td>
    </tr>
    <tr>
        <th>Bus Name  :</th>
        <td><?php echo isSet($_POST['name']) ? $_POST['name'] : '' ?></td>
    </tr>
    <tr>
        <th>User Name  :</th>
        <td><?php $un=$_SESSION['uname']; echo $un; ?></td>
    </tr> 
    <tr>
        <th>Date Of Journey  :</th>
        <td><?php echo isSet($_POST['doj']) ? $_POST['doj'] : '' ?></td>
    </tr>
    <tr>
        <th>Number of seats  :</th>
        <td><?php echo isSet($_POST['nos']) ? $_POST['nos'] : '' ?></td>
    </tr>
    <tr>
        <th>Amount  :</th>
        <td><?php echo $v9; ?></td>
    </tr> 
    </table> 
    <h4>--------THANKS FOR COMMING-------</h4>    
    <table cellspacing="8" cellpadding="5" class="tbl">
    <tr>
    <th><input type="button" value="print" onclick="go()"></th>
    <td><input type="button" value="Return" onclick="go1()"></td>
    </tr>    
    </table>
    </center>
    </div>    
</body>
</html>