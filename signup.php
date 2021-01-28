<?php 

$title="Форма регистрации";
require ('modules/db.php');
require ('components/header.php'); 

$data = $_POST;

if(isset($data['do_signup'])) {
	$errors = array();

	if(trim($data['email']) == '') {
		$errors[] = "Введите Email";
	}

	if(trim($data['name']) == '') {
		$errors[] = "Введите Имя";
	}

	if(trim($data['surname']) == '') {
		$errors[] = "Введите фамилию";
	}

	if($data['password'] == '') {
		$errors[] = "Введите пароль";
	}

	if($data['password_2'] != $data['password']) {
		$errors[] = "Повторный пароль введен не верно!";
	}

    if (mb_strlen($data['name']) < 3 || mb_strlen($data['name']) > 50){
	    $errors[] = "Недопустимая длина имени";
    }

    if (mb_strlen($data['surname']) < 5 || mb_strlen($data['surname']) > 50){
	    $errors[] = "Недопустимая длина фамилии";
    }

    if (mb_strlen($data['password']) < 4 || mb_strlen($data['password']) > 12){
	    $errors[] = "Недопустимая длина пароля (от 2 до 8 символов)";
    }

    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email'])) {
	    $errors[] = 'Неверно введен е-mail';
    }

	if(R::count('users', "email = ?", array($data['email'])) > 0) {
		$errors[] = "Пользователь с таким Email существует!";
	}

	if(empty($errors)) {
		$user = R::dispense('users');
		$user->login = $data['email'];
		$user->email = $data['email'];
		$user->name = $data['name'];
		$user->surname = $data['surname'];

		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);

		R::store($user);
        echo '<div style="color: green; ">Вы успешно зарегистрированы! Можно <a href="signin.php">авторизоваться</a>.</div><hr>';
	} else {
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}

?>

	<section id="two" class="wrapper style2 bg_waves signup_section">
		<div class="inner">
			<div class="box signup_content">
				<div class="content">
					<div class="align-center">
						<h2>Sign up</h2>
					</div>
					<form method="post" action="#">
						<div class="row uniform" style="text-align: center;">
							<div class="12u">
								<label class="label_input_sigin">Email</label>
								<input class="input_sigin" type="email" name="email">
							</div>
							<div class="12u">
								<label class="label_input_sigin">Name</label>
								<input class="input_sigin" type="text" name="name">
							</div>
							<div class="12u">
								<label class="label_input_sigin">Surname</label>
								<input class="input_sigin" type="text" name="surname">
							</div>
							<div class="12u">
								<label class="label_input_sigin">Password</label>
								<input class="input_sigin" type="password" name="password">
							</div>
							<div class="12u">
								<label class="label_input_sigin">Password</label>
								<input class="input_sigin" type="password" name="password_2">
							</div>
							<div class="12u$">
								<input class="input_sigin" name="do_signup" type="submit" value="Sign up">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php require('components/footer.php'); ?>