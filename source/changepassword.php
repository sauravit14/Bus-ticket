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
if(isset($_POST['re_password']))
{
    $old_pass=$_POST['old_pass'];
    $new_pass=$_POST['new_pass'];
    $re_pass=$_POST['re_pass'];
	$id=$_POST['id'];
	$conn=mysqli_connect("localhost","root","","ticket");
	$sql="select * from adminreg where uname='".$id."'";
	$chg_pwd=mysqli_query($conn,$sql);
	$chg_pwd1=mysqli_fetch_array($chg_pwd);
	$data_pwd=$chg_pwd1["pass"];
	if($data_pwd==$old_pass)
    {
        if($new_pass==$re_pass)
        {
            $update_pwd="update adminreg set pass='".$new_pass."' where uname='".$id."'";
            mysqli_query($conn,$update_pwd);
            echo "<script>alert('Update Sucessfully'); window.location='adminhome.php'</script>";
        }
        else
        {
            echo "<script>alert('Your new and Retype Password is not match'); window.location='adminhome.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Your old password is wrong'); window.location='adminhome.php'</script>";
    }
}
?>
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/admin.css" rel="stylesheet">
    <script>
    function checkvalid()
        {
            var a=document.getElementById("id1").value;
            var b=document.getElementById("old_pass").value;
            var c=document.getElementById("new_pass").value;
            var d=document.getElementById("re_pass").value; 
            if(a==""||b==""||c==""||d=="")
                {
                   
                    alert("Must be filed");
                    return false;
                }
        }
        function go1()
            {
                window.location.assign('adminhome.php');
            }
    </script>       
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
            <center>
			<form name="myform" action="#" method="post" onsubmit="return checkvalid()">
            <table cellspacing="8" cellpadding="15" class="tbl">
				<tr>
					<th>Enter Usrename :</th>
					<td><input type="text" name="id" id="id1"></td>
				</tr>
				<tr>
					<th>Enter Old Password :</th>
					<td><input type="password" name="old_pass" id="old_pass"></td>
				</tr>
				
				<tr>
					<th>Enter New Password :</th>
					<td><input type="password" name="new_pass" id="new_pass"></td>
				</tr>
				<tr>
					<th>Confirm New Password :</th>
					<td><input type="password" name="re_pass" id="re_pass"></td>
				</tr>
				<tr>
				<th><input type="submit" Value="Set" class="but" name="re_password"></th>
				<td><input type="button" Value="Reset" class="but" onclick="go1()"></td>
				</tr>
			</table>
			</form>
             </center> 
        </div>
       <div class="div_footer">
    </div>    
    </body>
</html>