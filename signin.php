<?php require('components/header.php'); ?>

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
									<input class="input_sigin" type="email" name="email">
								</div>
								<div class="12u">
									<label class="label_input_sigin">Password</label>
									<input class="input_sigin" type="password" name="password">
								</div>

								<div class="12u$">
									<input class="input_sigin" type="submit" value="Sign in">
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