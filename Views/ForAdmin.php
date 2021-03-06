<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="#" alt="IMG">
				</div>

				<form method="POST" action="verif.php" class="login100-form validate-form">
					<span class="login100-form-title">
						Connexion à l'admin
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Un login est requis">
						<input class="input100" type="text" name="username" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Un mot de passe est requis">
						<input class="input100" type="password" name="password" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">	
						<button class="login100-form-btn">
							Connexion
						</button>
					</div>    

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php?uc=bonbons&action=liste">
							Revenir à la boutique
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="Views/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Views/vendor/bootstrap/js/popper.js"></script>
	<script src="Views/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Views/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Views/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>