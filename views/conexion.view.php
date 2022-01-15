<?php $title="Conexion";?>
<?php include('Partial/_header.php');?>
<?php include('Partial/_logherder.php');?>
<?php include('include/constant.php');?>

<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
                    <?=  WEBSITE_NAME;?>
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Entrez votre mail">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Entrez votre mot de passe">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						Connexion
					</button>
				</div>
				
			</form>
		</div>
	</div>
</body>
<?php include('Partial/_footerlog.php');?>
<?php include('Partial/_footer.php');?>