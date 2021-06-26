<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
</head>
<style>
</style>
<body>

<div>
	<?php
	
	?>	
</div>
<div>				

	<form action="process.php" method="post">
						<div class="bg" style="background-image: url('BG.png');">

		<div class="container">

			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b>Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

          <label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
          
					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>
          
          <label for="password"><b>DOB</b></label>
					<input class="form-control" id="dob"  type="date" name="dob" required>
          
          <label for="lastname"><b>Address</b></label>
					<input class="form-control" id="address"  type="text" name="address" required>
          
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
				</div>
			</div>
		</div>

	</form>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var email 		= $('#email').val();
			var password 	= $('#password').val();
			var phonenumber = $('#phonenumber').val();
			var dob 	= $('#dob').val();      
			var address 	= $('#address').val();

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,email: email,password: password,phonenumber: phonenumber,dob: dob,address: address},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>