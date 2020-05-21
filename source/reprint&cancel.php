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
<html>
    <head>
    <link href="../design/home_css.css" rel="stylesheet">
    <link href="../design/reprint&cancel.css" rel="stylesheet">
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
         <div class="detaildiv1">
         <h2><i><center>Reprint Ticket</center></i></h2> <hr>
		  <form name="myform1" action="reprint_print.php" method="post">
             <br>
               <center>
                Enter Ticket Number: <input type="text" name="t1" value="<?php echo isSet($_POST['t1']) ? $_POST['t1'] : '' ?>" style="width:15%" maxlength="12" required><br><br>
                 <input type="submit" value="search" name="bsearch" class="but"></center>
           </form>
        </div>  
        <div class="div_footer">
    </div>    
    </body>
</html>