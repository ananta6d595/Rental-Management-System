
<!DOCTYPE htlm>
<html>
<head>
		<title> Sign up </title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
		<div class ="container">
				<div class="row">
						<div style="background-color:lightblue" class="col-lg-4">
								<h2> Login Form</h2>
			
			<form action="validation.php" method ="post" > 
					
				
							<lable> username </lable>
							<input type="text" name="user" class="form-control">
							<br>
							<lable> Password </lable>
							<input type="password" name="password" class="form-control">
							<br>
							<button type= "submit" class = "btn btn-primary"> Login</button>
			</form>
						</div>
					
					
						<div class="col-lg-4">
								<h2>Singup Form</h2>
			
			<form action="registration.php" method ="post" > 
					
				
							<lable> username </lable>
							<input type="text" name="user" class="form-control">
							<br>
							<lable> Password </lable>
							<input type="password" name="password" class="form-control">
							<br>
							<button type= "submit" class = "btn btn-primary"> signup</button>
			</form>
						</div>
				</div>
				
				
				<div class="col-lg-8">
				<h3> Admin login </h3>
				
			<form action="admin_validation.php" method ="post" > 
				
							<lable> username </lable>
							<input type="text" name="user" class="form-control">
							<br>
							<lable> Password </lable>
							<input type="password" name="password" class="form-control">
							<br>
							<button type= "submit" class = "btn btn-primary"> admit </button>
			</form>
				</div> 
		</div>
			
			
</body>
</html>
