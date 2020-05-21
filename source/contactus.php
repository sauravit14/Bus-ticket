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
if(isset($_POST['consub']))
{
    $v1=$_POST['nt'];
    $v2=$_POST['mt'];
	$v3=$_POST['et'];
	$v4=$_POST['rt'];
    $conn=mysqli_connect("localhost","root","","ticket");
    $sql="insert into feedbacktbl(name,mobile_no,email,remarks) values ('".$v1."','".$v2."','".$v3."','".$v4."')";
    mysqli_query($conn,$sql);
    echo '<script>alert("Stored Successfully!!");</script>';
}
?> 
<head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/contactus.css" rel="stylesheet">
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
        <div class="div_head_c"></div>
        <div>
        <img src="../image/img.jpg" class="image"></div>
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
                <div class="con_div">
                <form name="myform3" action="#" method="post">    
                <h4>&nbsp;&nbsp;Contact Us</h4> <hr>
                <center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <input type="text" name="nt" required><br><Br>
                        Mobile No:   <input type="tel" name="mt" maxlength="10" required><br><Br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:   <input type="email" name="et" required><br><br>
                      &nbsp;&nbsp;
                    Remarks:  <textarea name="rt" style="width:16%; height: 70px;" maxlength="200" required></textarea><br><br>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <input type="submit" value="submit" name="consub" class="but"><br><br>
                    </form>
                    <u style="color:blue;">Email:saurav.bear@gmail.com</u>
                    <h4>For Enquiry : +918789587857</h4>
                     </center>  
                    <h3>Bookoin Officer/Boarding Place Details</h3><hr>
                   &nbsp; 1) <u style="font-size: 20">Jamshedpur:</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 2) <u style="font-size: 20">Jamshedpur:</u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 3) <u style="font-size: 20">Chaibasa:</u> <br>
                     &nbsp; &nbsp;&nbsp;&nbsp;Saurav Kumar Mishra&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suraj Kumar
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; 
                    Sourav saw
                    <br>
                     &nbsp; &nbsp;&nbsp;&nbsp;Sonari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Aditypur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
                     &nbsp; &nbsp;&nbsp;&nbsp;+91-8789587857 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; +91-8789589235&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; +91-7903387495<br>
                </div>
       <div class="div_footer">
    </div>    
    </body>
</html>