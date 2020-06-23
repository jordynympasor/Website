<!DOCTYPE html>
<html>  
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link href="Sample.css" rel="stylesheet" type="text/css">
	
</head>
<body background="Logo4.jpg">
<div class="container h-100" >
	<div class="d-flex justify-content-center h-100" style="margin-left: 500px">
		<div class="user_card" align="center">
		<div class="d-flex justify-content-center">
		<div class="brand_logo_container">
		<img src="58779115_829177404107193_6770553374166220800_n.jpg" class="brand_logo" alt="Logo">
		</div>
		</div>
		<div class="d-flex justify-content-center form_container">
		<form  action="trialconnect4.php" method="post">
		<div class="input-group mb-3">
		<div class="input-group-append">
		<span class="input-group-text"><i class="fas fa-user"></i></span>
		</div>
		<input type="text" name="username" id="username" class="form-control input_user" value="" placeholder="username or email">
		</div>
		<div class="input-group mb-2">
		<div class="input-group-append">
		<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
		<input type="password" name="password" id="password" class="form-control input_pass" value="" placeholder="password">
		</div>
		<div class="form-group">
		<div class="custom-control custom-checkbox">
		<input type="checkbox" class="custom-control-input" id="customControlInline">
		<label class="custom-control-label" for="customControlInline">Remember Password</label>
		</div>
		</div>
		
		</div>
		<div class="d-flex justify-content-center mt-3 login_container">
		
			<button type="submit" name="submit" class="btn login_btn" >Login</button>
			</form>
		</div>
		<div class="mt-4">
		<div class="d-flex justify-content-center links">
	
		</div>
		<div class="d-flex justify-content-center links">
		</div>
		</div>
		</div>
		</div>
	</div>
</body>
</html>