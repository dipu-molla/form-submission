<?php
$fname="";
$err_fname="";
$lname="";
$err_lname="";
$gender="";
$err_gender="";
$dob="";
$err_dob="";
$religion="";
$err_religion="";
$presentadd="";
$err_presentadd=""; 
$parmanentadd="";
$err_parmanentadd="";
$number="";
$err_number="";
$email="";
$err_email="";
$err_username="";
$password="";
$err_password="";
$hasError=false;


if($_SERVER["REQUEST_METHOD"]=="POST")
{
 if(empty($_POST["fname"]))
   {
	  $hasError=true; 
	  $err_fname="*First name required";
   }
  
   else
   {
	 $fname=$_POST["fname"];  
	 
   }	

 if(empty($_POST["lname"]))
   {
	  $hasError=true; 
	  $err_lname="*Last name required";
   }
  
   else
   {
	 $lname=$_POST["fname"];  
	 
   }

 
   if(!isset($_POST["gender"]))
   {
	 $hasError=true;   
	$err_gender="*gender name required"; 
   }
   else
   {
	 $gender=$_POST["gender"];   
   }
   
    if(empty($_POST["dob"]))
   {
	  $hasError=true; 
	  $err_dob="*Birthday required";
   }
  
   else
   {
	 $dob=$_POST["dob"];  
	 
   }
   
   if(empty($_POST["religion"]))
   {
	  $hasError=true; 
	  $err_religion="*religion required";
   }
  
   else
   {
	 $religion=$_POST["religion"];  
	 
   }
   
     if(empty($_POST["presentadd"]))
   {
	  $hasError=true; 
	  $err_presentadd="*Present Address required";
   }
  
   else
   {
	 $presentadd=$_POST["presentadd"];  
	 
   }
   
    if(empty($_POST["parmanentadd"]))
   {
	  $hasError=true; 
	  $err_parmanentadd="*Parmanent Address required";
   }
  
   else
   {
	 $parmanentadd=$_POST["parmanentadd"];  
	 
   }
   
    if(empty($_POST["number"]))
   {
	  $hasError=true; 
	  $err_number="*Please Enter your Mobile number";
   }
   elseif(is_numeric($_POST["number"])==false){
                $err_number="*Please enter digit";
            }
  
   else
   {
	 $number=$_POST["number"];  
	 
   }
   
    if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }
    
   
    if(empty($_POST["username"]))
   {
	  $hasError=true; 
	  $err_username="*Username required";
   }
  
   else
   {
	 $username=$_POST["username"];  
	 
   }
   
    if(empty($_POST["password"]))
   {
	  $hasError=true; 
	  $err_password="*Password required";
   }
  
   else
   {
	 $password=$_POST["password"];  
	 
   }
     
   
  
if(!$hasError)
{
echo $_POST["fname"]."<br>";	
echo $_POST["lname"]."<br>";
echo $_POST["gender"]."<br>";
echo $_POST["dob"]."<br>";
echo $_POST["religion"]."<br>"; 
echo $_POST["presentadd"]."<br>"; 
echo $_POST["parmanentadd"]."<br>"; 
echo $_POST["number"]."<br>"; 
echo $_POST["email"]."<br>"; 
echo $_POST["username"]."<br>"; 
echo $_POST["password"]."<br>"; 
}

}
?>

<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<h1>Registration Form</h1>
	<hr>
	<br>

	<form action="" method="post">
		
		<h3>Basic Information :</h3>
		
		<label for="fname">1. First Name : </label>
		<input type="text" name="fname"  >	<span style="color:red"><?php echo $err_fname; ?></span>

		<br>
		
		<label for="lname">2. last Name : </label>
		<input type="text" name="lname"  >	<span style="color:red"><?php echo $err_lname; ?></span>

		<br>
		
		<label for="name">2. Gender : </label>
		
		<br>
		
		<input type="radio" name="gender" id="male" value="male">
		<label for="male">Male</label>

		<input type="radio" name="gender" id="female" value="female"> 
		<label for="female">Female</label><span style="color:red"><?php echo $err_gender; ?></span>
    
		<br>
		
		 <label for="dob">3. DoB :</label>
		 <input type="date" id="dob" name="dob"> <span style="color:red"><?php echo $err_dob; ?></span>
		
		<br>
		
		<!-- Dropdown/Select -->
		<label for="religion">4. Religion : </label>
		<select id="religion" name="religion"><span style="color:red"><?php echo $err_religion; ?></span>
			<option value="Islam">Islam</option>
			<option value="Chirstianity">Chirstianity</option>
			<option value="Hinduism">Hinduism</option>
			<option value="Buddhism">Buddhism</option>
		</select>
			 

		<br>
		
		
		
		<h3>Contact Information :</h3>
		
		<label for="PresentAddress">1. Present Address : </label>
		<input type="text" name="presentadd"> <span style="color:red"><?php echo $err_presentadd; ?></span>
 
		<br>
		
		<label for="PermanentAddress">2. Permanent Address : </label>
		<input type="text" name="parmanentadd" >  <span style="color:red"><?php echo $err_parmanentadd; ?></span>
		<br> 
		
		 <label for="phone">3. Phone number:</label>
		 <input type="text"   name="number" >  <span style="color:red"><?php echo $err_number; ?></span> 
		<br>
		
		 <label for="email">4. Email:</label>
		 <input type="text"   name="email">  <span style="color:red"><?php echo $err_email; ?></span>

		<br>
		
		<a href="https://www.w3schools.com/html/html_form_input_types.asp" target="_blank">5. Personal Website Link</a>
		<br>
		
		<h3> Account Information :</h3>
		
		<label for="userid">1. Username : </label>
		<input type="text" name="username"> <span style="color:red"><?php echo $err_username; ?></span>
		<br>
		
		 <label for="pwd">2. Password:</label>
		 <input type="password"   name="password"> <span style="color:red"><?php echo $err_password; ?></span> 
		<br>
		<br>
		<br>
		<input type="submit" value="Submit">

	</form>

</body>
</html>