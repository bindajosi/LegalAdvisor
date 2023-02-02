
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
    <title>ONLINE GAS BOOKING</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		
		<style>
		ul li{list-style:none;}
		ul li a {color:black;text-decoration:none; }
		ul li a:hover {color:black; text-decoration:none;}
		</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  
    <a class="navbar-brand" href="home.php"><span style="color:green;font-family: 'Permanent Marker', cursive;">Online Gas</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
	
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home
                
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
		
		
      </ul>
	  
    </div>
	
</nav>
<br><br><br>
<div class="middle" style="margin:0px auto; border:1px solid #F8F9FA;  width:800px;">
       <ul class="nav nav-tabs nabbar_inverse" id="myTab" style="background:#ED2553;border-radius:10px 10px 10px 10px;" role="tablist">
          <li class="nav-item">
             <a class="nav-link active" style="color:#BDDEFD;" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
          </li>
		  <li class="nav-item">
             <a class="nav-link " id="login-tab" style="color:#BDDEFD;" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Log In</a>
          </li>
       </ul>
	   <br><br>
	   <!--tab 1 starsts-->
	   <div class="tab-content" id="myTabContent">
	       <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="home-tab">
			    <div class="footer" style="color:red;"><?php if(isset($loginmsg)){ echo $loginmsg;}?></div>
			    <form action="" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="first"> First Name:</label>
                          <input type="text" class="form-control" id="first" value="<?php if(isset($fname)) { echo $fname;}?>" placeholder="Enter first name" name="first" required/>
                      </div>
					  <div class="form-group">
                          <label for="last"> Last Name:</label>
                          <input type="text" class="form-control" id="last" value="<?php if(isset($lname)) { echo $lname;}?>" placeholder="Enter last name" name="last" required/>
                      </div>
					  <div class="form-group">
                          <label for="address">Address:</label>
                          <input type="text" class="form-control" id="address" value="<?php if(isset($address)) { echo $address;}?>" placeholder="Enter aadress"name="address" required/>
                     </div>
					
					 <div class="form-group">
                          <label for="pin"> PIN code:</label>
                          <input type="number" class="form-control" id="pin" value="<?php if(isset($pincode)) { echo $pincode;}?>" placeholder="Enter first name" name="pin" required/>
                     </div>

					 <div class="form-group">
                          <label for="gender">Gender:</label>
						  <input type="radio" class="form-control" id="gender" value="<?php if(isset($address)) { echo $address;}?>" name="gender" required/>
                          <br><b>
                          <input type="radio" name="gender" value="m">Male
                          <input type="radio" name="gender" value="f">Female
                          </b></br>
                     <div class="form-group">
                          <label for="dob"> Date of Birth:</label>
                          <input type="date" class="form-control" id="dob" value="<?php if(isset($dob)) { echo $dob;}?>" placeholder="Enter dob" name="dob" required/>
                     </div
                     <div class="form-group">
                          <label for="aadhar">Aadhaar Number:</label>
                          <input type="number" class="form-control" id="aadhar" value="<?php if(isset($aadhaarno)) { echo $aadhaarno;}?>" placeholder="Enter aadhaar number"  name="aadhar" required>
                     </div>
					 <div class="form-group">
                          <label for="mobile">Mobile Number:</label>
                          <input type="tel" class="form-control" pattern="[011]{3}[0-7]{7}" id="mobile" value="<?php if(isset($mobileno)) { echo $mobileno;}?>" placeholder="011-1234567" name="mobile" required>
                     </div>
	                 <div class="form-group">
                          <label for="username">User Name:</label>
                          <input type="text" class="form-control" id="username" value="<?php if(isset($user)) { echo $user;}?>" placeholder="Enter user name" name="user" required>
                     </div>		
					 <div class="form-group">
                          <label for="email">Email Id:</label>
                          <input type="email" class="form-control" id="email" value="<?php if(isset($email)) { echo $email;}?>" placeholder="Enter Email" name="email" required/>
                          <span style="color:red;"><?php if(isset($email_error)){ echo $email_error;} ?></span>
	                  </div>
	                 <div class="form-group">
                         <label for="password">Password:</label>
                         <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required/>
                     </div>
            
	                 <div class="form-group">
                          <label for="confirm">Confirm Password:</label>
                          <input type="password" class="form-control" id="phone" placeholder="011-1234567" name="confirm" required>
                     </div>
                     <button type="submit" id="register" name="register" class="btn btn-outline-primary">Register</button>
                     
                </form>
				<br>
			</div>
			<div class="tab-pane fade show" id="login" role="tabpanel" aria-labelledby="home-tab">
			   <a href="vendor_login.php"><button type="button" style="padding:10px;  width:200px; margin-top:30%; margin-left:40%; margin:0px auto;" class="btn btn-outline-primary" name="login" value="Log In">Log In</button></a>
			   <br><br><br> <br><br><br> <br><br><br><br><br><br> <br><br><br> <br><br><br>
			</div>
	   </div>
	</div>
	<br>
	 
	   
</body>
</html>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='project';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error)
{
   die("connection failed:".$conn->connect_error);
}
echo "Connected successfully";
if(isset($_POST["register"]))
{
	 $fname=$_POST['first'];
	 $lname=$_POST['last'];
	 $address=$_POST['address'];
     $pincode=$_POST['pin'];
	 $gender=$_POST['gender'];
	 $dob=$_POST['dob'];
	 $aadhaarno=$_POST['aadhar'];
     $mobileno=$_POST['mobile'];
	 $user=$_POST['username'];
	 $email=$_POST['email'];
	 $pass=$_POST['password'];
	 $confirmpass=$_POST['password'];
	 $sql="Insert into tab1(fname,lname,address,pincode,gender,dob,aadhaarno,mobileno,user,email,pass,confirmpass)values('$fname','$lname','$address','$pincode','$gender','$dob','$aadhaarno','$mobileno','$user','$email','$pass','$confirmpass')";
    if(mysqli_query($conn,$sql))
	{
	   echo "Record Inserted";
	}
	else
	{ 
       echo "error:".$sql."<br>".mysqli_error($conn);
	}
}
?>