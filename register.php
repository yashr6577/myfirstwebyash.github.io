<?php
  include 'config.php';

  if(isset($_POST["btn_submit"]))
  {
	extract($_POST);

	$insert = mysqli_query($connect,"insert into tb_register(firstaname,middlename,lastname,address,city,collage,language,username,password,con_username,con_password) values('$f_name','$m_name','$l_name','$add','$city','$clg','$lang','$ur_name','$cr_name','$pass','$con_pass')")or die(mysqli_error($connect));

	if($insert){
		echo "<script>alert('Data Inserted Successfully..!')</script>";
	}
	else {
    echo "<script>alert('Data Error')</script>";
	}
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTER.HTML</title>
  <script lang="javascript">
		function valid_form(){
			var u = document.forms["reg_form"]["f_name"].value;
			if(x==""){alert("Please Enter name!");}
			var p = document.forms["reg_form"]["m_name"].value;
			if(x==""){alert("Please Enter name!");}
		}
	</script>
</head>
<body style="background-color:rgba(0, 128, 73, 0.087) ;">
  <center><h1>REGISTRATION FORM</h1></center>
  <hr>
  <center>
  
    <table border="2" cellpadding="10" style="background-color:rgba(0,128,94,0.33) ;">
  	   <tr>
  		  <th colspan="6"><a href="register.html"> Register</a></th>
  		  <th colspan="6"><a href="home.html"> Home</a></th>
  	   </tr>
    </table>
    <marquee> Created by Yash Rathod!..</marquee>
    <br>
    <form method="post" onsubmit="return valid_form()" class="reg_form" id="reg_form">
    <table border="2" cellpadding="10">
  	    <tr style="background-color:rgba(0,128,94,0.33) ;">
  		    <th colspan="3" style="background-color:rgba(0,119,255,0.758) ;">Name</th>
  		    <td colspan="3">FirstName&nbsp;&nbsp;<input type="text" name="f_name" placeholder="Please enter Firstname"></td>
          <td colspan="3">MiddleName&nbsp;&nbsp;<input type="text" name="m_name" placeholder="Please enter Middlename"></td>
          <td colspan="3">LastName&nbsp;&nbsp;<input type="text" name="l_name" placeholder="Please enter Lastname"></td>
  	    </tr>
  	    <tr style="background-color:rgba(0,128,94,0.33) ;">
  		    <th colspan="2"style="background-color:rgba(0,119,255,0.758) ;">Address</th>
  		    <td colspan="6"><textarea name="add" rows="4" cols="32" ></textarea></td>
  	    </tr>
  	    <tr style="background-color:rgba(0,128,94,0.33) ;">
  		    <th colspan="2"style="background-color:rgba(0,119,255,0.758) ;">City</th>
          <td colspan="6"><input type="radio" name="city">Nashik&nbsp;<input type="radio" name="city">Jalgaon&nbsp;<input type="radio" name="city">Dhule&nbsp;<input type="radio" name="city">Parola </td>
  	    </tr>
        <tr style="background-color:rgba(0,128,94,0.33) ;">
           <th colspan="2"style="background-color:rgba(0,119,255,0.758) ;">College</th>
           <td colspan="6"><select name="clg" placeholder="--Select College--"><option>Government poly.Jalgaon</option><option>Government poly.Nashik</option><option>Government poly.Mumbai</option></select></td>
        </tr>
        <tr style="background-color:rgba(0,128,94,0.33) ;">
           <th colspan="2"style="background-color:rgba(0,119,255,0.758) ;">Languages Known</th>
           <td colspan="6"><input type="checkbox" name="lang[]">Marathi&nbsp;<input type="checkbox" name="lang[]">Hindi&nbsp;<input type="checkbox" name="lang[]">English&nbsp;</td>
        </tr>
    <hr><br>
    
       <tr style="background-color:rgba(0,128,94,0.33) ;">
         <th colspan="4" rowspan="1"style="background-color:rgba(0,119,255,0.758) ;">Enter Username</th>
         <td colspan="8"><input type="text" name="ur_name" placeholder="Please enter Username"></td>
       </tr>
       <!--  -->
       <tr style="background-color:rgba(0,128,94,0.33) ;">
         <th colspan="4"style="background-color:rgba(0,119,255,0.758) ;">Confirm Username</th>
         <td colspan="8"><input type="text" name="cr_name" placeholder="Please confirm Username"></td>
       </tr>
       <tr style="background-color:rgba(0,128,94,0.33) ;">
         <th colspan="4"style="background-color:rgba(0,119,255,0.758) ;">Enter Password</th>
         <td colspan="8"><input type="password" name="pass" placeholder="Please enter Password"></td>
       </tr>
       <tr style="background-color:rgba(0,128,94,0.33) ;">
         <th colspan="4"style="background-color:rgba(0,119,255,0.758) ;">Confirm Password</th>
         <td colspan="8"><input type="password" name="con_pass" placeholder="Please confirm Password"></td>
       </tr>
       <tr style="background-color:rgba(0,0,0,0.63) ;">
         <th colspan="12"><input type="submit" value="Submit" name="btn_submit"></th>
       </tr>
    </table>
    </form>
  </center>
  <hr>

</body>
</html>