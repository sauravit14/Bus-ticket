<?php
    if(isset($_POST['sub']))
    {
        $flg=0;
        $v1=$_POST['txtuser'];
        $v2=$_POST['squel'];
        $v3=$_POST['new_pass'];
        $v4=$_POST['new_pass2'];
        $conn=mysqli_connect("localhost","root","","ticket");
        $sql="select * from adminreg where admin_uname='".$v1."'";
        $res=mysqli_query($conn,$sql);
        $val;
		while($row=mysqli_fetch_array($res))
		{
			$flg=1;
			$val=$row['sque1'];
        }           
        if($flg==1)
        {
			if(strcasecmp($val,$v2)==0)
			{
				if(strcasecmp($v3,$v4)==0)
				{
					$sql="update adminreg set pass='".$v3."' where admin_uname='".$v1."'";
					mysqli_query($conn,$sql);
					echo '<script>alert("Record Updated!!");</script>';								
				}
				else
				{
					echo '<script>alert("Password did not match!!");</script>';				
				}
			}
			else
			{
				echo '<script>alert("Incorrect Security Answer!!");</script>';				
			}
        }
        else
        {
            echo '<script>alert("Incorrect Userame]!!");</script>';
        }
    }
?>
<html> 
<head>
<link href="../design/home_css.css" rel="stylesheet">
<link href="../design/reprint&cancel.css" rel="stylesheet">
<script>
    function go1()
            {
                window.location.assign('home.php');
            }
    </script>    
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
        <div class="div_head_c">   
        </div>
        <div>
        <img src="../image/img.jpg" class="image"></div>
         <div class="detaildiv2">
         <form name="myform" action="#" method="POST" onsubmit="return checkvalid()">		 
         <center>
             <h3><i>Forget &nbsp;Password</i></h3> <hr>
             	<table cellspacing="8" cellpadding="10" class="tbl">
                 <tr>
					<th>Userame(Email) :</th>
					<td><input type="text" name="txtuser" style="width:100%;"></td>
				</tr>
				<tr>
				<th>Your Favorite Game</th>
                <td><input type="text" name="squel" id="sque1"></td>
                </tr>
				 <tr>
					<th>Enter New Password :</th>
					<td><input type="password" name="new_pass" style="width:100%;"></td>
				</tr>
				<tr>
					<th>Confirm New Password :</th>
					<td><input type="password" name="new_pass2" style="width:100%;"></td>
				</tr>
                      
				<tr>
				<th><input type="submit" Value="Submit" class="but" name="sub"></th>
                <th><input type="button" Value="Cancel" class="but" onclick="go1()"></th>
				</tr>
           </table>
             </center>
			</form>
         </div>  
        <div class="div_footer">
    </div>    
    </body>
</html>