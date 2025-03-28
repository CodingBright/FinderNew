
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{{ asset('css/util.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg.jpg');">
				<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
					<div>
						<span class="login100-form-title p-b-3">
							Login With phone number
						</span>
					</div>
					<form class="login100-form validate-form flex-sb flex-w">

						<div class="p-t-31 p-b-9">
							<span class="txt1">
							Enter the registered phone number
							</span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate = "Phone Number is required">
							<input class="input100" type="number" name="phone" >
							<span class="focus-input100"></span>
						</div>

						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn">
								Get OTP
							</button>
						</div>

						<div class="w-full text-center p-t-55">
							<span class="txt2">
								Not a member?
							</span>

							<a href="{{ asset('/register') }}" class="txt2 bo1">
								Sign up now
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<div id="dropDownSelect1"></div>

	</body>
</html>