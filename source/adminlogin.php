<?php
session_start();
if(isset($_SESSION['admin_uname']))
{
	header('location:adminhome.php');
}
?>
<?php
if(isset($_POST['sublog']))
{
    $v1=$_POST['txtuser'];
    $v2=$_POST['txtpass'];
    $conn=mysqli_connect("localhost","root","","ticket");
    $sql="select * from adminreg where admin_uname='".$v1."' and pass='".$v2."'";
    $run=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($run);
    if($row==1)
	{
		echo "<script> window.location.assign('adminhome.php');</script>";
        $data=mysqli_fetch_array($run);
        $adminname=$data['admin_uname'];
        $_SESSION['admin_uname']=$adminname;
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
        <a href="aboutus.php" class="link">About Us</a>
      
    </div>
        <div class="div_head_c">   
        </div>
        <div>
            <img src="../image/loginbg1.jpg" class="main">
            <div class="submain"><br><br><br><br><br><br><br><br>
            <form name="myform" action="#" method="post" onsubmit="return checkvalid()">  
            <center>
                <h2> Admin Login</h2>
                USERNAME&emsp;<br><input type="text" name="txtuser" id="txtuser"><br><br>
				PASSWORD&emsp;<br><input type="password" name="txtpass" id="txtpass"><br><br>
				<input type="submit" value="Login" name="sublog">
				<input type="button" value="cancel" onclick="go1()"><br><br>
                <a href="login.php"  style="color:rgb(30,144,255);">Login as user</a><br><br>
                <a href="forgetpassword_admin.php"  style="color:rgb(30,144,255);font-size:16px;">Forget Password</a>
                <br>
            </center>
            </form>
            </div>
        </div>
        
        <div class="div_footer">
    </div>    
    </body>
</html>