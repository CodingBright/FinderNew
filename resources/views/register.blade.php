<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg.jpg');">
				<div class="wrap-login100 p-l-110 p-r-110 p-t-33 p-b-33">
					<div>
						<span class="login100-form-title p-b-3">
							User Registration 
						</span>
					</div>
					<form class="login100-form validate-form flex-sb flex-w">

						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Name
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Username is required">
							<input class="input100 input-reg" type="text" name="username" >
							<span class="focus-input100"></span>
						</div>
                        <div class="p-t-13 p-b-9">
							<span class="txt1">
								Phone Number
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "phone number is required">
							<input class="input100 input-reg" type="number" name="phone" >
							<span class="focus-input100"></span>
						</div>
                        <div class="p-t-13 p-b-9">
							<span class="txt1">
								PIN Code Number
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "PIN code number is required">
							<input class="input100 input-reg" type="number" name="pin" >
							<span class="focus-input100"></span>
						</div>
                        <div class="p-t-13 p-b-9">
							<span class="txt1">
								Email Address
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Email address is required">
							<input class="input100 input-reg" type="email" name="email" >
							<span class="focus-input100"></span>
						</div>
						
						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Password
							</span>
						</div>
						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100 input-reg" type="password" name="pass" >
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn">
								Submit
							</button>
						</div>

						<div class="w-full text-center p-t-5">
							<span class="txt2">
								Already registered ?
							</span>

							<a href="{{ asset('/sign-in') }}" class="txt2 bo1">
								Sign In
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>

	</body>
</html>