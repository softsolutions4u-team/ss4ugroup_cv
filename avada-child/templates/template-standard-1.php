<?php
/**
 * Template Name: standard-1-demo
 * Template Post Type: post, page
 */
get_header('form3');
?>

<main id="user-form" class="" themeId="user-form" role="main">
	<form method="post" id="input-progress" class="form layout-form" name="front_end" action=" " enctype="multipart/form-data">
		<div class="form-header">
			<a href="#" class="back-arrow pointer">
				<i class="fas fa-long-arrow-alt-left"></i>
				Back
			</a>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="logoHide">
				<label class="custom-control-label" for="logoHide">Hide CV Brandme Logo</label>
			</div>
			<div class="progress-value text-center">
				<p>0% complete</p>
				<div class="progress" style="height: 3px;">
					<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			</div>
		</div>
		<div class="basic-details">
			<div class="img-upload pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/photo-upload.png" />
				<div class="user-note">
					Add profile picture
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Minimum resolution - should be 1700*1100
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Maximum Size - 1.5MB</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Upload only PNG, JPG, JPEG formats
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<h2 class="title">
				Basic Details
			</h2>
			<div class="basic-details-content">
				<div class="name-align first-name">
					<p class="input-name">
						First name
					</p>
					<input class="input-field text-field" type="text" id="first_name" name="first_name">
				</div>
				<div class="name-align last-name">
					<p class="input-name">
						Last name
					</p>
					<input class="input-field text-field" type="text" id="last_name" name="last_name">
				</div>
			</div>
		</div><!--BASICC-DETAIL-END-->
		<div class="personal-profile form-section">
			<h2 class="title">
				Personal Profile
				<!--<span class="edit-icon pointer"></span>-->
			</h2>
			<div class="custom-control custom-switch switch-section">
				<input type="checkbox" class="custom-control-input" id="personalProfile">
				<label class="custom-control-label" for="personalProfile"></label>
			</div>
			<div class="img-upload pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/photo-upload.png" />
				<div class="user-note">
					Upload Image
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Minimum resolution - should be 900*1600
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Maximum Size - 1.5MB</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Upload only PNG, JPG, JPEG formats
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<textarea id="personal-details"></textarea>
			<div class="skills">
				<p class="input-name">
					Enter Skills
				</p>
				<input class="input-field text-field" type="text" id="skills">
				<ul class="skill-list m-0 p-0">
					<li>
						<i class="fas fa-plus-circle pointer m-0"></i>
					</li>
					<li>
						Example Skill
						<i class="fas fa-times pointer"></i>
					</li>
				</ul>
			</div>
		</div><!--PERSONAL-PROFILE-->
		<div class="work-experience form-section">
			<h2 class="title">
				Work Experience
				<span class="edit-icon pointer"></span>
			</h2>
			<div class="custom-control custom-switch switch-section">
				<input type="checkbox" class="custom-control-input" id="workExperience">
				<label class="custom-control-label" for="workExperience"></label>
			</div>
			<div class="img-upload pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/photo-upload.png" />
				<div class="user-note">
					Upload Image
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Minimum resolution - should be 900*1600
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Maximum Size - 1.5MB</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Upload only PNG, JPG, JPEG formats
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="work-experience-content">
				<div class="work-date date-from">
					<p class="input-name">
						From
					</p>
					<input class="input-field text-field date" type="date" id="workFrom" name="workFrom">
				</div>
				<div class="work-date date-to">
					<p class="input-name">
						To
					</p>
					<input class="input-field text-field date tab-left" type="date" id="workTo" name="workTo">
				</div>
				<p class="input-name">
					Job Title
				</p>
				<input class="input-field text-field" type="text" id="jobTitle">
				<p class="input-name">
					Employer
				</p>
				<input class="input-field text-field" type="text" id="employer">
				<p class="input-name">
					Responsibilities
				</p>
				<textarea id="responsibilities"></textarea>
			</div>
			<div class="img-upload add-more pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/add-more.png" />
				<div class="user-note">
					Add Another Employment
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								User Can add 4 work experience
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- WORK-EXPERIENCE -->
		<div class="hobbies form-section">
			<h2 class="title">
				Hobbies & Extra Curricular
				<span class="edit-icon pointer"></span>
			</h2>
			<div class="custom-control custom-switch switch-section">
				<input type="checkbox" class="custom-control-input" id="hobbies">
				<label class="custom-control-label" for="hobbies"></label>
			</div>
			<div class="img-upload pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/photo-upload.png" />
				<div class="user-note">
					Upload Image
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Minimum resolution - should be 900*1600
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Maximum Size - 1.5MB
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Upload only PNG, JPG, JPEG formats
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="hobbies-content">
				<p class="input-name">
					Details
				</p>
				<textarea id="hobbiesDetails"></textarea>
			</div>
		</div><!-- HOBBIES & EXTRA CURRICULAR -->
		<div class="education form-section">
			<h2 class="title">
				Education
				<span class="edit-icon pointer"></span>
			</h2>
			<div class="custom-control custom-switch switch-section">
				<input type="checkbox" class="custom-control-input" id="education">
				<label class="custom-control-label" for="education"></label>
			</div>
			<div class="img-upload pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/photo-upload.png" />
				<div class="user-note">
					Upload Image
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Minimum resolution - should be 900*1300
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Maximum Size - 1.5MB</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Upload only PNG, JPG, JPEG formats
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="education-content">
				<div class="work-date date-from">
					<p class="input-name">
						From
					</p>
					<input class="input-field text-field date" type="date" id="educationFrom" name="educationFrom">
				</div>
				<div class="work-date date-to">
					<p class="input-name">
						To
					</p>
					<input class="input-field text-field date" type="date" id="educationTo" name="educationTo">
				</div>
				<p class="input-name">
					Institution
				</p>
				<input class="input-field text-field" type="text" id="jobTitle">
				<p class="input-name">
					Qualification
				</p>
				<input class="input-field text-field" type="text" id="employer">
				<div class="responsibilities-details">
					<p class="input-name">
						More Details
					</p>
					<input class="input-field text-field" type="text" id="responsibilities">
					<ul class="responsibilities-list m-0 p-0">
						<li>
							<i class="fas fa-plus-circle pointer m-0"></i>
						</li>
						<li>
							Example List
							<i class="fas fa-times pointer"></i>
						</li>
					</ul>
				</div>
			</div>
			<div class="img-upload add-more pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/add-more.png" />
				<div class="user-note">
					Add Another Education
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								User Can add 4 work education
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- EDUCATION -->
		<div class="contact form-section">
			<h2 class="title">
				Contact
				<span class="edit-icon pointer"></span>
			</h2>
			<div class="custom-control custom-switch switch-section">
				<input type="checkbox" class="custom-control-input" id="contact">
				<label class="custom-control-label" for="contact"></label>
			</div>
			<div class="img-upload pointer">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/photo-upload.png" />
				<div class="user-note">
					Upload Image
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Minimum resolution - should be 900*1600
							</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Maximum Size - 1.5MB</li>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								Upload only PNG, JPG, JPEG formats
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="education-content">
				<p class="input-name">
					Phone Number
				</p>
				<input class="input-field text-field" type="text" id="jobTitle">
				<ul class="contact-list m-0 p-0">
					<li>
						<i class="fas fa-plus-circle pointer m-0"></i>
					</li>
					<li>
						Example List
						<i class="fas fa-times pointer"></i>
					</li>
				</ul>
				<p class="input-name">
					Time slot
				</p>
				<div class="calender-time-slot">
					<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/calender-icon.png" />
					<input class="input-field text-field list-view" type="time" id="appt" name="appt">
				</div>
				<p class="input-name mt-3">
					Video Call Details
				</p>
				<ul class="social-call">
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/skype.png" />
						<input class="input-field text-field list-view" type="text" id="skype" name="skype">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/googlemeet.png" />
						<input class="input-field text-field list-view" type="text" id="googleMeet" name="googleMeet">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/whatsapp.png" />
						<input class="input-field text-field list-view" type="text" id="whatsapp" name="whatsapp">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/calendly.png" />
						<input class="input-field text-field list-view" type="text" id="calendly" name="calendly">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/fb-messenger.png" />
						<input class="input-field text-field list-view" type="text" id="fb-messenger" name="fb-messenger">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/zoom.png" />
						<input class="input-field text-field list-view" type="text" id="zoom" name="zoom">
					</li>
				</ul>
				<p class="input-name">
					Social Media Presence
				</p>
				<ul class="social-call">
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/facebook.png" />
						<input class="input-field text-field list-view" type="text" id="facebook" name="facebook">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/linkedin.png" />
						<input class="input-field text-field list-view" type="text" id="linkedin" name="linkedin">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/twitter.png" />
						<input class="input-field text-field list-view" type="text" id="twitter" name="twitter">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/youtube.png" />
						<input class="input-field text-field list-view" type="text" id="youtube" name="youtube">
					</li>
					<li>
						<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/pinintret.png" />
						<input class="input-field text-field list-view" type="text" id="pinintret" name="pinintret">
					</li>
				</ul>
			</div>
		</div><!-- CONTACT-END -->

		<button class="form-btn" type="button">Preview</button>
		<!--<button class="form-btn" type="button">Create CV</button>-->
                <button class="form-btn" type="submit">Create CV</button>
                <input type="hidden" name="action" value="resume" />
	</form>
</main><!-- #site-content -->

<?php // get_footer(); ?>
