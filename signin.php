<?php 

$title="Логин";
require ('modules/db.php');
require ('components/header.php'); 
	
$data = $_POST;

if(isset($data['do_login'])) { 
	$errors = array();
	$user = R::findOne('users', 'login = ?', array($data['login']));

	if($user) {
 		if(password_verify($data['password'], $user->password)) {
	 		$_SESSION['logged_user'] = $user;
	        header('Location: index.php');
	 	} else {
	    	$errors[] = 'Пароль неверно введен!';
	 	}
	} else {
	 	$errors[] = 'Пользователь с таким логином не найден!';
	} if(!empty($errors)) {
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}
?>

	<section id="two" class="wrapper style2 bg_waves signin_section">
		<div class="inner">
			<div class="box signin_content">
				<div class="content">
					<div class="align-center">
						<h2>Sign in</h2>
					</div>
					<form method="post" action="#">
						<div class="row uniform">
							<div class="12u">
								<label class="label_input_sigin">Email</label>
								<input class="input_sigin" type="email" name="login">
							</div>
							<div class="12u">
								<label class="label_input_sigin">Password</label>
								<input class="input_sigin" type="password" name="password">
							</div>

							<div class="12u$">
								<input class="input_sigin" type="submit" name="do_login" value="Sign in">
							</div>

							<div class="12u$ submit-btn">
								<input class="input_sigin" type="submit" value="Password recovery">
							</div>
							<!-- <div class="12u$">
							  	<a class="label_input_sigin">Forgot password?</a>
							 </div> -->
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php require('components/footer.php'); ?>