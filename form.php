<?php require('components/header.php'); ?>


		<!-- Banner -->

		<section id="One" class="wrapper style2 form-one">
			<div class="form-one__section">
				<h2><b>Online </b>Authentication Apply Form</h2>
			</div>
		</section>

		<section id="two" class="wrapper style2 form-two form-container">
			<div class="container">
				<form onsubmit="sendEmail(event)">
					<div class="title">
						<h2>Personal information</h2>
					</div>  

					<div class="personal-fields">
						<div class="personal-fields__wrap">
							<input type="text" class="form-control" id="name-field" name="name-field" placeholder="Name" required>
						</div>

						<div class="personal-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="Surname" required>
						</div>

						<div class="personal-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="Surname" required>
						</div>

						<div class="personal-fields__wrap">
							<select class="form-control" name="subject-field" onchange="changeSubject(event)" required>
								<option>Country</option>
								<option value="Consulting">Kazakhstan</option>
								<option value="Web Development">Russia</option>
								<option value="Google Scripts">China</option>
								<option value="G Suite for Education">Uzbekistan</option>
								<option value="Other">Kyrgyzstan</option>
							</select>
						</div>
					</div>

					<div class="personal-fields mb-0">
						<div class="personal-fields__wrap">
							<input type="text" class="form-control" id="name-field" name="name-field" placeholder="City" required>
						</div>

						<div class="personal-fields__wrap">
							<select class="form-control" name="subject-field" onchange="changeSubject(event)"  required>
								<option>Gender</option>
								<option value="Consulting">Male</option>
								<option value="Web Development">Female</option>
							</select>
						</div>

						<div class="personal-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="Phone number" required>
						</div>
					</div>
				</form>
			</div>
		</section>

		<section id="three" class="wrapper style2 form-container">
			<div class="container">
				<form onsubmit="sendEmail(event)">
					<div class="title">
						<h2>Education</h2>
					</div>  

					<div class="edu-fields">
						<div class="edu-fields__wrap">
							<input type="text" class="form-control" id="name-field" name="name-field" value="China" readonly="true">
						</div>

						<div class="edu-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="City" required>
						</div>

						<div class="edu-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="University" required>
						</div>

						<div class="edu-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="Profession school" required>
						</div>
					</div>

					<div class="edu-fields mb-0">
						<div class="edu-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="Profession" required>
						</div>

						<div class="edu-fields__wrap">
							<input type="email" class="form-control" id="email-field" name="email-field" placeholder="Diploma number" required>
						</div>

						<div class="edu-fields__wrap">

							<select class="form-control" name="subject-field" onchange="changeSubject(event)"  required>
								<option>Degree</option>
								<option value="Consulting">Bachelor</option>
								<option value="Web Development">Master</option>
							</select>
						</div>

						<div class="edu-fields__wrap">
							<select class="form-control" name="subject-field" onchange="changeSubject(event)"  required>
								<option>Date</option>
								<option value="Consulting">Kazakhstan</option>
								<option value="Web Development">Russia</option>
								<option value="Google Scripts">China</option>
								<option value="G Suite for Education">Uzbekistan</option>
								<option value="Other">Kyrgyzstan</option>
							</select>
						</div>
					</div>

				</form>
			</div>
		</section>



		<section id="two" class="wrapper style2 form-container form-container">
			<div class="container">
				<form onsubmit="sendEmail(event)">
					<div class="title">
						<h2>Documents</h2>
					</div>  

					<div class="documents-fields">
						<div class="documents__wrap">
							<div class="documents__wrap__inner">
								<label class="documents__wrap__inner__label">Diploma (eng)</label>
								<input class="documents__wrap__inner__upload custom-file-input form-control" type="file" id="name-field" name="name-field">
							</div>
							<label class="documents__wrap__right__label">File size under 700 KB (only jpg)</label>
						</div>

						<div class="documents__wrap">
							<div class="documents__wrap__inner">
								<label class="documents__wrap__inner__label">Diploma (cn)</label>
								<input class="documents__wrap__inner__upload custom-file-input form-control" type="file" id="name-field" name="name-field">
							</div>
							<label class="documents__wrap__right__label">File size under 700 KB (only jpg)</label>
						</div>

						<div class="documents__wrap">
							<div class="documents__wrap__inner">
								<label class="documents__wrap__inner__label">Transcript (eng)</label>
								<input class="documents__wrap__inner__upload custom-file-input form-control" type="file" id="name-field" name="name-field">
							</div>
							<label class="documents__wrap__right__label">File size under 700 KB (only jpg)</label>
						</div>

						<div class="documents__wrap">
							<div class="documents__wrap__inner">
								<label class="documents__wrap__inner__label">Transcript (cn)</label>
								<input class="documents__wrap__inner__upload custom-file-input form-control" type="file" id="name-field" name="name-field">
							</div>
							<label class="documents__wrap__right__label">File size under 700 KB (only jpg)</label>
						</div>

						<div class="documents__wrap">
							<div class="documents__wrap__inner">
								<label class="documents__wrap__inner__label">Passport photo</label>
								<input class="documents__wrap__inner__upload custom-file-input form-control" type="file" id="name-field" name="name-field">
							</div>
							<label class="documents__wrap__right__label">File size under 700 KB (only jpg)</label>
						</div>
					</div>

					<div class="documents-avatar">
						<div class="documents-avatar__wrap">
							<div class="documents-avatar__area"></div>
							<div>
								<div class="documents-avatar__area__mini"></div>
								<p class="documents-avatar__info">example<br>Background color must be like in example<br>Background color: #26A9ED</p>
								<button class="documents-avatar__btn" type="button">Upload</button>
							</div>
						</div>
					</div>

					<div class="form-group col-xs-12 finish-button-wrap">
						<button type="submit" class="btn btn-primary btn-lg btn-block">Save and Finish</button>  
					</div>

				</form>
			</div>
		</section>

<?php require('components/footer.php'); ?>