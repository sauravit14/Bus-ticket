<?php
    if(isset($_POST['sub']))
    {
        $flag=0;
        $v1=$_POST['fname'];
        $v2=$_POST['lname'];
        $v3=$_POST['uname'];
        $v4=$_POST['pno'];
        $v5=$_POST['pass'];
        $v6=$_POST['add'];
        $v7=$_POST['city'];
        $v8=$_POST['pcode'];
        $v9=$_POST['sque1'];
        $conn=mysqli_connect("localhost","root","","ticket");
        $sql="select * from userreg";
        $res=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($res))
		{
            if($v3==$row['uname'] || $v4==$row['pno'])
            {
                $flag=1;
            }
        }           
        if($flag==1)
        {
            echo '<script>alert("Username or Phone number already available!!");</script>';
        }
        else
        {
            $sql="insert into userreg(fname,lname,uname,pno,pass,address,city,pcode,sque1) values ('".$v1."','".$v2."','".$v3."','".$v4."','".$v5."','".$v6."','".$v7."','".$v8."','".$v9."')";
            mysqli_query($conn,$sql);
            echo '<script>alert("Stored Successfully!!");</script>';
        }
    }
?>
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/reprint&cancel.css" rel="stylesheet">
        <script>
            function checkvalid()
            {
                var a=document.getElementById("fname").value;
                var b=document.getElementById("lname").value;
                var c=document.getElementById("uname").value;
                var d=document.getElementById("pno").value;
                var e=document.getElementById("pass").value;
                var f=document.getElementById("cpass").value;
                var g=document.getElementById("add").value;
                var h=document.getElementById("city").value;
                var i=document.getElementById("pcode").value;
                var j=document.getElementById("sque1").value;
                var flg=e.localeCompare(f);
                if(a==""||b==""||c==""||d==""||e==""||f==""||g==""||h==""||i==""||j=="")
                    {
                        
                        alert("Must be Filled");
                        return false;
                    }
                else
                    {
                        if(flg==0)
                            {
                                 return true;
                            }
                        else
                            {
                                 alert("Password not match");
                                 return false;
                            }
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
        <div><img src="../image/img.jpg" class="image"></div>
         <div class="detaildiv2">
             <form name="myform" action="#" method="POST" onsubmit="return checkvalid()">
             <center>
                 <h3>Sign Up</h3><hr>
                 <table cellspacing="8" cellpadding="10" class="tbl">
               <tr>
					<th>First Name :</th>
					<td><input type="text" name="fname" id="fname"></td>
                   <th>Last Name :</th>
					<td><input type="text" name="lname" id="lname"></td>
                    </tr>
                     <tr>
					<th>Userame(Email) :</th>
					<td><input type="text" name="uname" id="uname"></td>
                         <th>Phone No. :</th>
					<td><input type="text" name="pno" id="pno" maxlength="10"></td>
				</tr>
				<tr>
					<th>Password :</th>
					<td><input type="password" name="pass" id="pass"></td><th>Confirm Password :</th>
					<td><input type="password" name="cpass" id="cpass"></td>
				</tr>
                     <tr>
					
                     <th>Address</th>
                         <td><input type="text" name="add" id="add" style="width:325%;height:35px;" maxlength="100"></td>
                     </tr>
               <tr> <th>City :</th>
					<td><input type="text" name="city" id="city"></td>
                    <th>Pin code :</th>
					<td><input type="text" name="pcode" id="pcode" maxlength="6"></td>
					  </tr>
                    <tr>
                      <th>Your Favorite Game :</th><td>   <input type="text" name="sque1" id="sque1" ></td>
                    </tr>
              	<tr>
				<th></th><td><input type="submit" Value="Submit"  class="but" name="sub"></td>
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