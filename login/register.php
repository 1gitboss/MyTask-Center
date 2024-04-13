<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
    <link rel="icon" type="image/png" href="../assests/logo/logo-png.png"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
	
</head>
<body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic ">
					<img src="../assests/logo/logo-no-background.png" alt="IMG">
				</div>

                <form action="../actions/register_user_action.php" class="login100-form validate-form" method="post" name="register" id="register-form">
					<span class="login100-form-title">
						Sign Up Here!
					</span>

                    <div class="name-input">
                        <div class="wrap-input100 validate-input" id="name-field" data-validate = "Name is required">
                            <input class="input100" type="text" id="fname" name="fname" placeholder="Firstname" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" id="name-field" data-validate = "Name is required">
                            <input class="input100" type="text" id="lname" name="lname" placeholder="Lastname" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Phone number required: +233-XXXX-XXXXX">
						<input class="input100" type="tel" id="tel" name="tel" placeholder="Telephone" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" id="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="cnfPassword" name="cnfpassword" placeholder="Confirm Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>


					<div class="container-login100-form-btn">
						<button name="register" type="submit" class="login100-form-btn">
							Register
						</button>
<!--                        <input type="hidden" name="register" value="true">-->
					</div>


					<div class="text-center p-t-136">
						<a class="txt2" href="../login/login.php">
							Already have an account?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

    <script src="../js/register-script.js"></script>
</body>
</html>