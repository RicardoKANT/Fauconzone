<?php $title="Inscription";?>
<?php include('Partial/_header.php');?>
<?php include('include/constant.php');?>
<?php include('Partial/_special.php');?>

<body >
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more"  style="background-image: url('login/inscription/images/Snapchat-538411978.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-59">
						Inscription
					</span>

					<div class="wrap-input100 validate-input" data-validate="Entrez votre nom">
						<span class="label-input100">Nom et prénoms</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Entrez un mail valide: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Nom d'utilisateur">
						<span class="label-input100">Nom d'utilisateur</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Entrez un mot de passe">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Confirmer le mot de passe">
						<span class="label-input100">confirmer mot de passe</span>
						<input class="input100" type="text" name="repeat-pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								S'inscrire
							</button>
						</div>

						<a href="connexion2.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							  Se connecter
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	


</body>
<?php include('Partial/_footspecial.php');?>

<?php include('Partial/_footer.php');?>