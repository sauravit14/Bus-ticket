<?php
session_start();
if(isset($_SESSION['uname']))
{
	header('location:userhome.php');
}
?>
<?php
if(isset($_POST['sublog']))
{
    $v1=$_POST['txtuser'];
    $v2=$_POST['txtpass'];
    $conn=mysqli_connect("localhost","root","","ticket");
    $sql="select * from userreg where uname='".$v1."' and pass='".$v2."'";
    $run=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($run);
    if($row==1)
	{
		echo "<script> window.location.assign('userhome.php');</script>";
        $data=mysqli_fetch_array($run);
        $username=$data['uname'];
        $_SESSION['uname']=$username;
   }
	else
		{
			if(!$row)
			{
				echo '<script>alert("Wrong Username or Password!!!Retry");</script>';	
			}
		}
}
?>
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/login.css" rel="stylesheet">
        <script>
        function checkvalid()
            {
                var a=document.getElementById("txtuser").value;
                var b=document.getElementById("txtpass").value;
                if(a==""||b=="")
                    {
                        alert("Must be Filled...!");
                        return false;
                    }
            }
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
        <img src="../image/loginbg1.jpg" class="main" >    
            <div class="submain">
            <form name="myform" action="#" method="post" onsubmit="return checkvalid()">    
            <center><br><br><br><br><br><br><br><br>
                <h2>User Login</h2>
                USERNAME&emsp;<br><input type="text" name="txtuser" id="txtuser"><br><br>
				PASSWORD&emsp;<br><input type="password" name="txtpass" id="txtpass"><br><br>
				<input type="submit" value="Login" name="sublog">
				<input type="button" value="cancel" onclick="go1()"><br><br>
                <a href="adminlogin.php" style="color:rgb(30,144,255);font-size:16x;">Login as admin</a><br><br>
                <a href="forgetpassword.php"  style="color:rgb(30,144,255);font-size:16px;">Forget Password</a><br><br>
                <a href="registration.php"  style="color:rgb(30,144,255);font-size:16px;">New User  ?</a>
                <br>
                
            </center>
            </form>
            </div>
        </div>
        <div class="div_footer">
    </div>    
    </body>
</html>