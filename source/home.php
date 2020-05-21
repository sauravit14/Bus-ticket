<?php
if(isset($_POST['sublog']))
{
    session_start();
    if(isset($_SESSION['uname']))
    {
	header('location:userhome.php');
    }
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
        <img src="../image/img.jpg" class="image">
        </div>
            <div class="log_div">
                 <center>
                    <form name="myform2" action="#" method="post" onsubmit="return checkvalid()">
                    <h4>User Login <br></h4>
                    <hr><br>
                    Username:<input type="text" name="txtuser" id="txtuser"><br><br>
                    Password:<input type="password" name="txtpass" id="txtpass"><br><br>
                    <input type="submit" value="Login" class="but" name="sublog"><br><br><br><br>
                    <a href="registration.php" style="color:blue;">Sign Up</a><br><br>
                    <a href="forgetpassword.php" style="color:blue;">Forgat Password</a>
                    </form>
                </center>    
           </div>
        <div>
           <img src="../image/homebg.jpg" class="bg">
        </div>
        <div class="div_footer">
    </div>    
    </body>
</html>