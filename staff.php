<?php
  include 'config.php';

  if(isset($_POST["btn_submit"]))
  {
	extract($_POST);

	$insert = mysqli_query($connect,"insert into tb_staff(FirstName,MiddleName,LastName,CurrentAddress,PermanentAddress,State,District,City,Gender,Nationality,Photo,MobileNo,Cast,Subcast,Religion,Hobbies,JoiningDate,DateofBirth,Qualification,Salary,LastCollageInformation) values('$fname','$mname','$lname','$addre','$paddre','$state','$dist','$city','$gen','$nationality','$photo','$no','$cast','$sbcast','$reli','$hobies','$jd','$dob','$qua','$sal','$lclg')")or die(mysqli_error($connect));

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
	  <title>Staff.html</title>
	  <style type="text/css">
			body
			{
			   background-color: azure;
			}
			table
			{
			 background-color: aquamarine;
			}
			th
			{
			   background-color: dodgerblue;
			}
			.btn
			{
			   background-color:dimgray;
			} 
		</style>
   </head>
   <body>
	<center><h1>Staff Registration</h1></center><hr>
	<center>
	
		<table border="2" cellpadding="10" id="t1">
			<tr>
			 <td colspan="10" ><a href="student.html"> Student</a></td>
			 <td colspan="10" ><a href="staff.html"> Staff</a></td>
			 <td colspan="10"><a href="sal.html"> Salary</a></td>
			 <td colspan="10"><a href="lib.html"> Library</a></td>
			 <td colspan="10"><a href="home.html"> Logout</a></td>
			</tr>
		 </table>
    <marquee> Created by Yash Rathod!..</marquee>
	<form method="POST" id="staff" name="staff">
      <table border="2" cellpadding="10">
      	   <tr>
      	 	 <th colspan="2">FirstName</th>
      	 	 <td colspan="2"><input type="text" name="fname" placeholder="Enter FirstName" ></td>
      	 	 <th colspan="4">MiddleName</th>
      	 	 <td colspan="2"><input type="text" name="mname" placeholder="Enter MiddleName" ></td>
      	 	 <th colspan="4">LastName</th>
      	 	 <td colspan="4"><input type="text" name="lname" placeholder="Enter LastName" ></td>
      	   </tr>
      	   <tr>
      	     <th colspan="2" > Current Address</th>
      	   	 <td colspan="6" ><textarea name="addre" rows="3" cols="35" ></textarea></td>
      	   	 <th colspan="2" > Permanent Address</th>
      	   	 <td colspan="6" ><textarea name="paddre" rows="3" cols="40" ></textarea></td>
      	   </tr>
      	   <tr>
      	   	  <th colspan="2">State</th>
              <td colspan="2"><select name="state"><option>Maharashtra</option><option>Goa</option><option>Gujrat</option><option>Madhya Pradesh</option></select></td>
              <th colspan="4">District</th>
              <td colspan="2"><select name="dist"><option>Jalgaon</option><option>Nashik</option><option>Thane</option><option>Pune</option></select></td>
              <th colspan="4">City</th>
              <td colspan="4"><select name="city"><option>Jalgaon</option><option>Chalisgaon</option><option>Nashik</option><option>Thane</option></select></td>
      	   </tr>
      	   <tr>
      	     <th colspan="2" >Gender</th>
             <td colspan="2" ><input type="radio" name="gen">Male&nbsp;&nbsp;<input type="radio" name="gen">Female&nbsp;&nbsp;</td>
             <th colspan="4">Nationality</th>
             <td colspan="2"><input type="text" name="nationality" placeholder="Enter Nationality here" ></td>
             <th colspan="4">Photo</th>
             <td colspan="4"><input type="file" name="photo" placeholder="Choose file"></td>
      	   </tr>
      	   <tr>
      	   	  <th colspan="2">Mobile No.</th>
              <td colspan="2"><input type="number" name="no" placeholder="Please Enter Number" ></td>
              <th colspan="4">Cast</th>
              <td colspan="2"><select name="cast"><option>OPEN</option><option>SC</option><option>ST</option><option>OBC</option><option>VJNT</option><option>NT</option></select></td>
              <th colspan="4">Subcast</th>
              <td colspan="4"><select name="sbcast"><option>Brahmin</option><option>Maratha</option><option>Banjara</option><option>Sonar</option></select></td>
      	   </tr>
      	   <tr>
      	   	  <th colspan="2">Religion</th>
      	   	  <td colspan="6"><select name="reli"><option>Hindu</option><option>Islam</option><option>Buddhism</option><option>Christianity</option></select></td>
      	   	  <th colspan="2">Hobbies</th>
      	   	  <td colspan="8"><input type="text" name="hobies" placeholder="Enter Hobbies"></td>
      	   </tr>
      	   <tr>
      	   	 <th colspan="2">Joining Date</th>
      	   	 <td colspan="6"><input type="date" name="jd"></td>
      	   	 <th colspan="2">Date of Birth</th>
      	   	 <td colspan="8"><input type="date" name="dob"></td>
      	   </tr>
      	   <tr>
      	   	  <th colspan="2" rowspan="5">Qualification</th>
      	   	  <td colspan="2"><input type="checkbox" name="qua[]">10th</td>
      	   	  <th colspan="4" rowspan="5">Salary</th>
      	   	  <td colspan="2" rowspan="5"><input type="number" name="sal" placeholder="Enter salary"></td>
      	   	  <th colspan="4" rowspan="5">Last Collage Information</th>
      	   	  <td colspan="4" rowspan="5"><textarea name="lclg" rows="3" cols="30" pattern="[A-Za-z]"></textarea></td>
      	   </tr>
      	   <tr> <td colspan="2"><input type="checkbox" name="qua[]">12th</td></tr>
      	   <tr> <td colspan="2"><input type="checkbox" name="qua[]">Diploma</td></tr>
      	   <tr> <td colspan="2"><input type="checkbox" name="qua[]">BE</td></tr>
      	   <tr> <td colspan="2"><input type="checkbox" name="qua[]">ME</td></tr>
      	   <tr> <th colspan="18" class="btn"><input type="submit" value="Submit" name="btn_submit"></th></tr>
      </table>
    </form>
	</center>
  </body>
</html>