
<?php
   $connect = mysqli_connect("localhost","root","","registration") or die("Couldn't Connect");

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$email 			= $_POST['email'];
  $password 		= $_POST['password'];
	$phonenumber	= $_POST['phonenumber'];
  $dob          = $_POST['dob'];
  $address        = $_POST['address'];  
		 if($query = mysqli_query($connect ,"INSERT INTO users VALUES ('$firstname', '$email', '$password','$phonenumber','$dob','$address');"))
    {
		
		echo "<script type='text/javascript'>alert('You have registered successfully...!!');</script>";
		    echo "<meta http-equiv='refresh' content ='0; url=index.php'>";
                       
					   
    }
}else{
		echo "<script type='text/javascript'>alert('Not registered...!!');</script>";
}