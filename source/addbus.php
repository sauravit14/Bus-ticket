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
    if(isset($_POST['sublog']))
    {
		$flag=0;
        $v1=$_POST['bcode'];
        $v2=$_POST['bbno'];
        $v3=$_POST['bbc'];
        $v4=$_POST['btype'];
        $v5=$_POST['bseat'];
        $v6=$_POST['brow'];
       	$v7=$_POST['bdate'];
		$v8=$_POST['vname'];
        $v9=$_POST['vfare'];
        $v10=$_POST['vetime'];
        $v11=$_POST['vatime'];
        $v12=$_POST['vdtime'];
        $v13=$_POST['vfrom'];
        $v14=$_POST['vto'];
        $conn=mysqli_connect("localhost","root","","ticket");
        $sql="select * from addbus";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res))
		{
            if($v2==$row["bno"])
            {
                $flag=1;
            }
             if($v3==$row["bname"])
            {
                $flag=2;
            }
        }   
		if($flag==1)
        {
            echo '<script>alert("Bus number already available!!");</script>';
        }
        else if($flag==2)
        {
            echo '<script>alert("Bus name already available!!");</script>';
        }
        else
        {
            $sql="INSERT INTO `addbus`(`code`, `bno`, `bname`, `type`, `seat`, `row`, `date`, `rname`, `fare`, `etime`, `atime`, `dtime`, `from`, `to`) VALUES ('".$v1."','".$v2."','".$v3."','".$v4."','".$v5."','".$v6."','".$v7."','".$v8."','".$v9."','".$v10."','".$v11."','".$v12."','".$v13."','".$v14."')";
            mysqli_query($conn,$sql);
            echo '<script>alert("Bus added Successfully!!");</script>';
        }
    }
    if(isset($_POST['snew']))
    {
        $ctr=0;
		$conn=mysqli_connect("localhost","root","","ticket");
		$sql="SELECT * FROM addbus";
		$res=mysqli_query($conn,$sql);	
			while($row=mysqli_fetch_assoc($res))
			{
				$ctr=$ctr+1;
			}
			if($ctr==0)
			{
				$str=(string)"B000";
			}
			else
			{
				$str="B00".(string)$ctr;
			}
    }
?>
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/admin.css" rel="stylesheet">
    </head>
    <script>
    function go1()
            {
                window.location.assign('addbus.php');
            }
    </script>
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
        <div>
        <img src="../image/img.jpg" class="image"></div>
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
            <form name="myform" method="post" action="#">
            <center>
            <table cellspacing="8" cellpadding="5" class="tbl">
				<tr>
					<th>Bus Code :</th>
					<td><input type="text" name="bcode" id="bcode" readonly="readonly" style="width:180%;"placeholder="press new button" value='<?php if(isSet($_POST["snew"])){echo  $str; }?>'></td>
				</tr>
				<tr>
					<th>Bus No. :</th>
					<td><input type="text" name="bbno" id="bbno" style="width:180%;" required></td>
				</tr>
				<tr>
					<th>Bus Name. :</th>
					<td><input type="text" name="bbc" id="bbc" style="width:180%;" required></td>
					</tr>
				<tr>
					<th>Bus Type :</th>
					<td><select name="btype" style="width:180%;" >
                        <option value="volvo">volvo</option>
                        <option value="mercedes-benz">mercedes-benz</option>
                        <option value="volvo">tata(AC)</option>
                        <option value="volvo">tata(non-AC)</option>
                        
                        </select></td>
				</tr>
				<tr>
					<th>Total Seats :</th>
					<td><input type="text" name="bseat" id="bseat" readonly="readonly" style="width:180%;"  placeholder="48 " required></td>
				</tr>
				<tr>
					<th>Seat Rows :</th>
					<td><input type="text" name="brow" id="brow" readonly="readonly" style="width:180%;" placeholder="12" required></td>
				</tr>
				<tr>
					<th>Adding Date :</th>
					<td><input type="date" name="bdate" id="bdate" style="width:180%;" required></td>
				</tr>
                <tr>
					<th>Route Name :</th>
					<td><select name="vname" style="width:180%;" >
                        <option value="tata-patna">tata-patna</option>
                        <option value="tata-gaya">tata-gaya</option>
                        <option value="tata-ranchi">tata-ranchi</option>
                        <option value="tata-chaibasa">tata-chaibasa</option>
                        </select></td>
				</tr>
                <tr>
					<th>Fare :</th>
					<td><input type="text" name="vfare" style="width:180%;" required></td>
				</tr>
                <tr>
					<th>Estimate Time :</th>
					<td><input type="text" name="vetime" style="width:180%;" required></td>
				</tr>
				<tr>
					<th>Departure Time :</th>
					<td><input type="time" name="vdtime" style="width:180%;" required></td>
                   
				</tr>
				<tr>
					<th>Arrival Time :</th>
					<td><input type="time" name="vatime" style="width:180%;" required></td>
				</tr>
                <tr>
					<th>From :</th>
					<td>
					<select name="vfrom" style="width:180%;">
					<option value="TATA">TATA</option>
					<option value="PATNA">PATNA</option>
					<option value="CHAIBASA">CHAIBASA</option>
                    <option value="Ranchi">RANCHI</option>
                    <option value="Gaya">GAYA</option>
                        
					</select>
					</td>
				</tr>
				<tr>
					<th>To:</th>
					<td>
					<select name="vto" style="width:180%;">
					<option value="TATA">TATA</option>
					<option value="PATNA">PATNA</option>
					<option value="CHAIBASA">CHAIBASA</option>
                    <option value="Ranchi">RANCHI</option>
                    <option value="Gaya">GAYA</option>
                        
					</select>
					</td>
					
				</tr>
                <tr>
                    <th><input type="submit" Value="Set" class="but" name="sublog" ></th>
                <td><input type="button" Value="Reset" class="but" onclick="go1()"></td>
                    </form>
                <form name="myform2" action="#" method="post">
                    <th><input type="submit" value="New" class="but" name="snew"></th></tr>
                </table>
            </center>  
             </form> 
        </div>
           
        <div class="div_footer">
    </div>    
    </body>
</html>