<?php
/**
 * Template Name: standard1
 * Template Post Type: page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>

<form id="site-content" class="layout-form" themeId="standard1" method="POST" enctype="multipart/form-data">
	<img class="loader-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/loader.gif" />
	<?php
	// if $resume_post_id is exists get details and load the form with update.

	$resume_post_id = $_GET['id'];
	$defaultUploadImage = get_stylesheet_directory_uri() . '/images/form/photo-upload.png';
	$first_name = '';
	$last_name = '';
	$personal_profile = '';
	$job_title = '';
	$hobbies_details = '';
	$skype_call = '';
	$google_meet_call = '';
	$whatsapp_call = '';
	$zoom_call = '';
	$messenger_call = '';
	$facebook_url = '';
	$linkedin_url = '';
	$twitter_url = '';
	$youtube_url = '';
	$pinterest_url = '';
	$call_time = '';
	$mobile_number = '';
	$phone_number = '';
	$profile_image = '';
	$personal_profile_image = '';
	$work_experience_image = '';
	$hobbies_image = '';
	$education_image = '';
	$contact_image = '';
	if ($resume_post_id) {
		$fields = [
			'first_name',
			'last_name',
			'personal_profile',
			'job_title',
			'hobbies_details',
			'skype_call',
			'google_meet_call',
			'whatsapp_call',
			'zoom_call',
			'messenger_call',
			'facebook_url',
			'linkedin_url',
			'twitter_url',
			'youtube_url',
			'pinterest_url',
			'call_time',
			'mobile_number',
			'phone_number',
		];
		foreach ($fields as $field) {
			$$field = get_post_meta($resume_post_id, $field, true);
		}

		$image_fields = [
			'profile_image',
			'personal_profile_image',
			'work_experience_image',
			'hobbies_image',
			'education_image',
			'contact_image'
		];

		$defaultUploadImage = get_stylesheet_directory_uri() . '/images/form/photo-upload.png';
		foreach ($image_fields as $image_field) {
			$field_val = get_field($image_field, $resume_post_id);
			if (!empty($field_val)) {
				$$image_field = $field_val['url'];
			} else {
				$$image_field = '';
			}		
		}
	}
	?>
	<div class="form-header">
		<a href="<?php echo get_permalink().'my-account'?>" class="back-arrow pointer">
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

	<!--BAISC-DETAILS-->
	<div class="basic-details form-section">
		<div class="img-upload pointer">
			<img onclick="document.getElementById('profile-image').click();" src="<?php echo !empty($profile_image) ? $profile_image : $defaultUploadImage; ?>" id="profile-image-view" />
			<input type='file' data-width="1700" data-height="1100" class="form-file-upload" name='profile_image' accept="image/x-png,image/gif,image/jpeg" id="profile-image" style="visibility:hidden;" />
			<div class="user-note">
				<?php if (!empty($profile_image)) { ?>
					Change profile picture
				<?php } else {?>
					Add profile picture
				<?php } ?>
				<div class="user-note-detail position-relative">
					<i class="fas fa-exclamation note-user"></i>
					<ul>
						<li>
							<i class="fas fa-caret-right mr-1"></i>
							Minimum resolution - should be 1700*1100
						</li>
						<li>
							<i class="fas fa-caret-right mr-1"></i>
							Maximum Size - 1MB</li>
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
				<input data-length="50"  onDrag="return false" onDrop="return false" class="input-field text-field" type="text" id="fname" name="first_name" value="<?php echo $first_name ?>">
				<span class="error-display"></span>
			</div>
			<div class="name-align last-name">
				<p class="input-name">
					Last name
				</p>
				<input data-length="50"  onDrag="return false" onDrop="return false" class="input-field text-field" type="text" id="lname" name="last_name" value="<?php echo $last_name ?>">
				<span class="error-display"></span>
			</div>
		</div>
	</div><!--BASIC-DETAIL-END-->

	<!--PERSONAL-PROFILE-->
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
			<img onclick="document.getElementById('personal-profile-image').click();" src="<?php echo !empty($personal_profile_image) ? $personal_profile_image : $defaultUploadImage; ?>" />
			<input type='file' class="form-file-upload" name='personal_profile_image' accept="image/x-png,image/gif,image/jpeg" id="personal-profile-image" style="visibility:hidden;"/>
			<div class="user-note">
				<?php if (!empty($personal_profile_image)) { ?>
					Change personal profile picture
				<?php } else {?>
					Add personal profile picture
				<?php } ?>
				<div class="user-note-detail position-relative">
					<i class="fas fa-exclamation note-user"></i>
					<ul>
						<li>
							<i class="fas fa-caret-right mr-1"></i>
							Minimum resolution - should be 900*1600
						</li>
						<li>
							<i class="fas fa-caret-right mr-1"></i>
							Maximum Size - 1MB</li>
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
		<textarea placeholder="Enter Your Details" data-length="75" id="personal-details" name="personal_profile"><?php echo $personal_profile ?></textarea>
		<div class="d-inline-block w-100">
			<div class="skills field_wrapper">
				<p class="input-name">
					Enter Skills
				</p>
				<div class="clone-div">
					<?php $count = 0; ?>
					<?php if ($resume_post_id): ?>
						
						<?php while( the_repeater_field('key_skill', $resume_post_id) ): ?>
							<div class="cloned-input">
								<input data-length="25" class="input-field text-field" type="text" name="key_skills[]" value="<?php echo get_sub_field('skills', $resume_post_id) ?>">
								<span class="remove_button"><i class="fas fa-times pointer"></i></span>
							</div>
							<?php $count++; ?>
						<?php endwhile; ?>
					
					<?php endif; ?>
				</div>
				<div class="skills-input-section <?php echo $count >= 7 ? 'fadeOut' : '' ?>">
						<input data-length="25" class="input-field text-field" type="text" id="key_skills" name="key_skills[]" value="">
						<span class="add_button" title="Add field"><i class="fas fa-plus-circle pointer m-0"></i></span>
				</div>
				<div class="err-txt" style="display:none">
					Enter Skill
				</div>
			</div>
				
<script>
$(document).ready(function () {
		jQuery('body').on('click', '.skills .add_button', function () {
			var ele    = jQuery(this).parents().find('#key_skills');
			var name   = ele.attr('id');
			var strc   = GetDynamicTextBox(ele.val(), name);
			if ( ele.val() === ""){
				jQuery('.err-txt').show();
				return false;
			} else if ( jQuery('.clone-div input[name="'+ name +'[]"]').length === 6 ) {
				jQuery(".clone-div").append(strc);
				jQuery(this).parent().addClass('fadeOut');
				jQuery(this).prev().val("");
				jQuery('.err-txt').hide();
				return false;
			} else {
				jQuery('.err-txt').hide();
				jQuery(".clone-div").append(strc);
				jQuery(this).prev().val("");
			}	

		});

		jQuery('body').on('click', '.remove_button', function() {
			jQuery(this).parent('div').remove();
			if (jQuery('.clone-div input[name="key_skills[]"]').length === 6) {
				jQuery('#key_skills').parent('div').removeClass('fadeOut');
				jQuery('#key_skills').val("");
				return false;
			}
		});
});
	function GetDynamicTextBox(value, name) {
		return '<div class="cloned-input"><input data-length="25" class="input-field text-field" type="text" name="'+name+'[]" value="'+ value +'"><span class="remove_button"><i class="fas fa-times pointer"></i></span></div>';
	}
				</script>


			</div>
		</div><!--PERSONAL-PROFILE-->

	<!--  Work Experience -->
	<div class="work-experience form-section">
		<h2 class="title">
			Work Experience
			<span class="edit-icon pointer"></span>
		</h2>
		<div class="custom-control custom-switch switch-section">
			<input type="checkbox" class="custom-control-input" id="workExperience" name='work_experience_show_hide'>
			<label class="custom-control-label" for="workExperience"></label>
		</div>
		<div class="img-upload pointer">
			<img onclick="document.getElementById('work-experience-image').click();" src="<?php echo !empty($work_experience_image) ? $work_experience_image : $defaultUploadImage; ?>" />
			<input type='file' class="form-file-upload" name='work_experience_image' accept="image/x-png,image/gif,image/jpeg" id="work-experience-image" style="visibility:hidden;"/>
			<div class="user-note">
				<?php if (!empty($work_experience_image)) { ?>
					Change Work Experience picture
				<?php } else {?>
					Add Work Experience picture
				<?php } ?>
				<div class="user-note-detail position-relative">
					<i class="fas fa-exclamation note-user"></i>
					<ul>
						<li>
							<i class="fas fa-caret-right mr-1"></i>
							Minimum resolution - should be 900*1600
						</li>
						<li>
							<i class="fas fa-caret-right mr-1"></i>
							Maximum Size - 1MB</li>
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
		<div id="work-experience-section" class="work-experience-content field_wrapper_work">
			<?php
			for ($i = 0; $i <= 4; $i++) {
				if ($resume_post_id) {
					$work_from = get_post_meta($resume_post_id, 'work_from_' . $i, true);
					$work_to = get_post_meta($resume_post_id, 'work_to_' . $i, true);
					$job_title = get_post_meta($resume_post_id, 'job_title_' . $i, true);
					$employer = get_post_meta($resume_post_id, 'employer_' . $i, true);
					$responsibilities = get_post_meta($resume_post_id, 'work_responsibilities_' . $i, true);
					if (empty($work_from) && $i > 0) {
						break;
					}
				} else {
					$work_from = '';
					$work_to = '';
					$job_title = '';
					$employer = '';
					$responsibilities = '';
				}
				?>
				<div class="added-more-works">
					<div class="work-date date-from">
						<p class="input-name">
							From
						</p>
                                                <input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateWork" type="date" name="work_exp[work_from][]" value="<?php echo $work_from; ?>">
					</div>
					<div class="work-date date-to">
						<p class="input-name">
							To
						</p>
                                                <input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateWork" type="date" name="work_exp[work_to][]" value="<?php echo $work_to; ?>">
					</div>
					<div class="name-align job-title">
						<p class="input-name">
							Job Title
						</p>
						<input class="input-field text-field" type="text" id="jobTitle" name="work_exp[job_title][]" value="<?php echo $job_title; ?>">
					</div>
					<div class="name-align employer">
						<p class="input-name">
							Employer
						</p>
						<input class="input-field text-field" type="text" id="employer" name="work_exp[employer][]" value="<?php echo $employer; ?>">
					</div>
					<div class="d-inline-block w-100">
						<div class="responsibilities-details">
							<p class="input-name">
								Responsibilities
							</p>
							<input class="input-field text-field" type="text" name="work_exp[work_responsibilities][]">
							<div class="responsibilities-list m-0 p-0">
								<span>
									<a href="javascript:void(0);" class="add_button add-more-block-button" title="Add field">
										<i class="fas fa-plus-circle pointer m-0"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<?php if ($i !== 0) { ?>
						<a href="javascript:void(0);" class="btnRemove"><i class="fas fa-times pointer"></i></a>
					<?php } ?>
					<?php
					// For new form atleast load one time.
					if (!$resume_post_id) {
						echo '</div>';
						break;
					}
					?>
				</div>
			<?php } ?>
			</div>
			<div class="img-upload add-more pointer hide-add-work-experience">
				<a href="javascript:void(0);" class="add_button_work add-work-experience" title="Add field">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/add-more.png" />
				</a>
				<div class="user-note">
					<a href="javascript:void(0);" class="add_button_work add-work-experience" title="Add field">
					Add Another Employment
					</a>
					<div class="user-note-detail position-relative">
						<i class="fas fa-exclamation note-user"></i>
						<ul>
							<li>
								<i class="fas fa-caret-right mr-1"></i>
								User Can add 7 work experience
							</li>
							<li>
								<i class="fas fa-caret-down"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
// 					$(".dateWork").each(function(key,elem){
// 						$(elem).attr('id', 'work_date_picker' + key)
// 					})


//                                         //calender from and to date
//                                         $(function() {
//                                             $("#work_date_picker0").datepicker({
// 												changeMonth: true,
//    												changeYear: true,
//                                                 maxDate: new Date,
//                                                 minDate: new Date(2005, 6, 12),
// 												dateFormat: 'dd/mm/yy'
//                                             });
//                                         });

//                                         $(function() {
//                                             $("#work_date_picker1").datepicker({
// 												changeMonth: true,
//    												changeYear: true,
//                                                 maxDate: new Date,
//                                                 minDate: new Date(2005, 6, 12),
// 												dateFormat: 'dd/mm/yy'
//                                             });
//                                         });

//                                         $('#work_date_picker0').change(function() {
//                                             startDate = $(this).datepicker('getDate');
//                                             $("#work_date_picker1").datepicker("option", "minDate", startDate);
//                                         })

//                                         $('#work_date_picker1').change(function() {
//                                             endDate = $(this).datepicker('getDate');
//                                             $("#work_date_picker0").datepicker("option", "maxDate", endDate);
//                                         })
					//more work skills and remove work skills
					var work_exp_max = 6;
					$('.add-work-experience').click(function () {
						if ($('.added-more-work').length < work_exp_max) {
							$('.added-more-works').append('<div class="added-more-work"><div class="work-date date-from"><p class="input-name">From</p><input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateWork" type="date" name="work_exp[work_from][]"></div><div class="work-date date-to"><p class="input-name">To</p><input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date tab-left dateWork" type="date" name="work_exp[work_to][]"></div><div class="name-align job-title"><p class="input-name">Job Title</p><input class="input-field text-field" type="text" id="jobTitle" name="work_exp[job_title][]" value=""></div><div class="name-align employer"><p class="input-name">Employer</p><input class="input-field text-field" type="text" id="employer" name="work_exp[employer][]" value=""></div><div class="responsibilities-details"><p class="input-name">Responsibilities</p><input class="input-field text-field" type="text" name="work_exp[work_responsibilities][]"><div class="responsibilities-list m-0 p-0"><span><a  href="javascript:void(0);" class="add_button"><i class="fas fa-plus-circle pointer m-0"></i></a></span></div></div><a href="javascript:void(0);" class="btnRemove"><i class="fas fa-times pointer"></i></a></div>');
						}
// 						$(".dateWork").each(function(key,elem){
// 							$(elem).attr('id', 'work_date_picker' + key)
// 						})

//                                                 //calender from and to date
//                                                 $(function() {
//                                                     $("#work_date_picker2, #work_date_picker4, #work_date_picker6, #work_date_picker8, #work_date_picker10, #work_date_picker12").datepicker({
// 														changeMonth: true,
//    														changeYear: true,
//                                                         maxDate: new Date,
//                                                         minDate: new Date(2005, 6, 12),
// 														dateFormat: 'dd/mm/yy'
//                                                     });
//                                                 });

//                                                 $(function() {
//                                                     $("#work_date_picker3, #work_date_picker5, #work_date_picker7, #work_date_picker9, #work_date_picker11, #work_date_picker13").datepicker({
// 														changeMonth: true,
//    														changeYear: true,
//                                                         maxDate: new Date,
//                                                         minDate: new Date(2005, 6, 12),
// 														dateFormat: 'dd/mm/yy'
//                                                     });
//                                                 });

//                                                 $('#work_date_picker2, #work_date_picker4, #work_date_picker6, #work_date_picker8, #work_date_picker10, #work_date_picker12').change(function() {
//                                                     startDate = $(this).datepicker('getDate');
//                                                     $("#work_date_picker3, #work_date_picker5, #work_date_picker7, #work_date_picker9, #work_date_picker11, #work_date_picker13").datepicker("option", "minDate", startDate);
//                                                 })

//                                                 $('#work_date_picker3, #work_date_picker5, #work_date_picker7, #work_date_picker9, #work_date_picker11, #work_date_picker13').change(function() {
//                                                     endDate = $(this).datepicker('getDate');
//                                                     $("#work_date_picker2, #work_date_picker4, #work_date_picker6, #work_date_picker8, #work_date_picker10, #work_date_picker12").datepicker("option", "maxDate", endDate);
//                                                 })
						if ($('.added-more-work').length >= work_exp_max) {
						 	$(".hide-add-work-experience").hide();
							$("#work-experience-section").addClass('limit-exceed');
						}
					});
					$(document).on('click', '.added-more-work .btnRemove', function () {
						$(this).parent('.added-more-work').remove();
						if ($('.added-more-work').length < work_exp_max) {
						 	$(".hide-add-work-experience").show();
							$("#work-experience-section").removeClass('limit-exceed');
						}
					});
				});
			</script>
	</div><!-- WORK-EXPERIENCE-END -->

<!--HOBBIES-->
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
		<img onclick="document.getElementById('hobbies-image').click();" src="<?php echo !empty($hobbies_image) ? $hobbies_image : $defaultUploadImage; ?>" />
		<input type='file' class="form-file-upload" name='hobbies_image' accept="image/x-png,image/gif,image/jpeg" id="hobbies-image" style="visibility:hidden;" />
		<div class="user-note">
			<?php if (!empty($hobbies_image)) { ?>
				Change hobbies image
			<?php } else {?>
				Add hobbies image
			<?php } ?>
			<div class="user-note-detail position-relative">
				<i class="fas fa-exclamation note-user"></i>
				<ul>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						Minimum resolution - should be 900*1600
					</li>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						Maximum Size - 1MB
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
		<textarea placeholder="Enter Your Details" id="hobbiesDetails" name="hobbies_details"><?php echo $hobbies_details; ?></textarea>
	</div>
</div><!-- HOBBIES & EXTRA CURRICULAR -->

<!--EDUCATION-->
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
		<img onclick="document.getElementById('education-image').click();" src="<?php echo !empty($education_image) ? $education_image : $defaultUploadImage; ?>" />
		<input type='file' class="form-file-upload" name='education_image' accept="image/x-png,image/gif,image/jpeg" id="education-image" style="visibility:hidden;"/>
		<div class="user-note">
			<?php if (!empty($education_image)) { ?>
				Change education image
			<?php } else {?>
				Add education image
			<?php } ?>
			<div class="user-note-detail position-relative">
				<i class="fas fa-exclamation note-user"></i>
				<ul>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						Minimum resolution - should be 900*1300
					</li>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						Maximum Size - 1MB</li>
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
	<div id="education-section"  class="education-content  field_wrapper_education">
		<?php
		for ($i = 0; $i <= 4; $i++) {
			if ($resume_post_id) {
				$education_from = get_post_meta($resume_post_id, 'education_from_' . $i, true);
				$education_to = get_post_meta($resume_post_id, 'education_to_' . $i, true);
				$education_institution = get_post_meta($resume_post_id, 'education_institution_' . $i, true);
				$education_qualification = get_post_meta($resume_post_id, 'education_qualification_' . $i, true);
				$education_more_details = get_post_meta($resume_post_id, 'education_more_details_' . $i, true);
				if (empty($education_from) && $i > 0) {
					break;
				}
			} else {
				$education_from = '';
				$education_to = '';
				$education_institution = '';
				$education_qualification = '';
				$education_more_details = '';
			}
			?>
			<div class="added-more-educations">
				<div class="work-date date-from">
					<p class="input-name">
						From
					</p>
					<input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateEducation" type="date" name="education[education_from][]" value="<?php echo $education_from; ?>">
				</div>
				<div class="work-date date-to">
					<p class="input-name">
						To
					</p>
					<input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateEducation" type="date" name="education[education_to][]" value="<?php echo $education_to; ?>">
				</div>
				<div class="name-align institution">
					<p class="input-name">
						Institution
					</p>
					<input class="input-field text-field" type="text" id="jobTitle" name="education[education_institution][]" value="<?php echo $education_institution; ?>">
				</div>
				<div class="name-align qualification">
					<p class="input-name">
						Qualification
					</p>
					<input class="input-field text-field" type="text" id="employer" name="education[education_qualification][]" value="<?php echo $education_qualification; ?>">
				</div>
				<div class="d-inline-block w-100">
					<div class="education-details">
						<p class="input-name">
							More Details
						</p>
						<input class="input-field text-field" type="text" id="responsibilities" name="education[education_more_details][]" value="<?php echo $education_more_details; ?>">
						<div class="responsibilities-list m-0 p-0">
							<span>
								<a  href="javascript:void(0);" class="add_button">
									<i class="fas fa-plus-circle pointer m-0"></i>
								</a>
							</span>
						</div>
					</div>
				</div>

				<?php if ($i !== 0) { ?>
					<a href="javascript:void(0);" class="btnRemove"><i class="fas fa-times pointer"></i></a>
				<?php } ?>
				<?php
				// For new form atleast load one time.
				if (!$resume_post_id) {
					echo '</div>';
					break;
				}
				?>
			</div>
		<?php } ?>
	</div>
	<div class="img-upload add-more pointer hide-add-education">
		<a href="javascript:void(0);" class="add_button_education add-education" title="Add field">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/add-more.png" />
		</a>
		<div class="user-note">
			<a href="javascript:void(0);" class="add_button_education add-education" title="Add field">
			Add Another Education
			</a>
			<div class="user-note-detail position-relative">
				<i class="fas fa-exclamation note-user"></i>
				<ul>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						User Can add 7 work education
					</li>
					<li>
						<i class="fas fa-caret-down"></i>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--</div>-->
	<script type="text/javascript">
		$(document).ready(function () {
//                         $(".dateEducation").each(function(key,elem){
//                             $(elem).attr('id', 'education_date_picker' + key)
//                         })

                        //calender from and to date
//                         $(function() {
//                             $("#education_date_picker0").datepicker({
// 								changeMonth: true,
// 								changeYear: true,
// 								maxDate: new Date,
// 								minDate: new Date(2005, 6, 12),
// 								dateFormat: 'dd/mm/yy'
// 							});
//                         });

//                         $(function() {
//                             $("#education_date_picker1").datepicker({
// 								changeMonth: true,
// 								changeYear: true,
// 								maxDate: new Date,
// 								minDate: new Date(2005, 6, 12),
// 								dateFormat: 'dd/mm/yy'
// 							});
//                         });

//                         $('#education_date_picker0').change(function() {
//                             startDate = $(this).datepicker('getDate');
//                             $("#education_date_picker1").datepicker("option", "minDate", startDate);
//                         })

//                         $('#my_date_picker1').change(function() {
//                             endDate = $(this).datepicker('getDate');
//                             $("#education_date_picker0").datepicker("option", "maxDate", endDate);
                        })
			//more work skills and remove work skills
			var work_exp_max = 6;
			$('.add-education').click(function () {
				if ($('.added-more-education').length < work_exp_max) {
					$('.added-more-educations').append('<div class="added-more-education"><div class="work-date date-from"><p class="input-name">From</p><input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateEducation" type="date" name="education[education_from][]"></div><div class="work-date date-to"><p class="input-name">To</p><input data-length="10" placeholder="DD/MM/YYYY" class="input-field text-field date dateEducation" type="date" name="education[education_to][]"></div><div class="name-align institution"><p class="input-name">Institution</p><input class="input-field text-field" type="text" id="jobTitle" name="education[education_institution][]"></div><div class="name-align qualification"><p class="input-name">Qualification</p><input class="input-field text-field" type="text" id="employer" name="education[education_qualification][]"></div><div class="responsibilities-details"><p class="input-name">More Details</p><input class="input-field text-field" type="text" id="responsibilities" name="education[education_more_details][]"><div class="responsibilities-list m-0 p-0"><span><a  href="javascript:void(0);" class="add_button"><i class="fas fa-plus-circle pointer m-0"></i></a></span></div></div><a href="javascript:void(0);" class="btnRemove"><i class="fas fa-times pointer"></i></a>');
				}
//                                 $(".dateEducation").each(function(key,elem){
//                                     $(elem).attr('id', 'education_date_picker' + key)
//                                 })

//                                 //calender from and to date
//                                 $(function() {
//                                     $("#education_date_picker2, #education_date_picker4, #education_date_picker6, #education_date_picker8, #education_date_picker10, #education_date_picker12").datepicker({
// 										changeMonth: true,
// 										changeYear: true,
// 										maxDate: new Date,
// 										minDate: new Date(2005, 6, 12),
// 										dateFormat: 'dd/mm/yy'
// 									});
//                                 });

//                                 $(function() {
//                                     $("#education_date_picker3, #education_date_picker5, #education_date_picker7, #education_date_picker9, #education_date_picker11, #education_date_picker13").datepicker({
// 										changeMonth: true,
// 										changeYear: true,
// 										maxDate: new Date,
// 										minDate: new Date(2005, 6, 12),
// 										dateFormat: 'dd/mm/yy'
// 									});
//                                 });

//                                 $('#education_date_picker2, #education_date_picker4, #education_date_picker6, #education_date_picker8, #education_date_picker10, #education_date_picker12').change(function() {
//                                     startDate = $(this).datepicker('getDate');
//                                     $("#education_date_picker3, #education_date_picker5, #education_date_picker7, #education_date_picker9, #education_date_picker11, #education_date_picker13").datepicker("option", "minDate", startDate);
//                                 })

//                                 $('#education_date_picker3, #education_date_picker5, #education_date_picker7, #education_date_picker9, #education_date_picker11, #education_date_picker13').change(function() {
//                                     endDate = $(this).datepicker('getDate');
//                                     $("#education_date_picker2, #education_date_picker4, #education_date_picker6, #education_date_picker8, #education_date_picker10, #education_date_picker12").datepicker("option", "maxDate", endDate);
//                                 })
				if ($('.added-more-education').length >= work_exp_max) {
// 					console.log('jh');
					$(".hide-add-education").hide();
					$("#education-section").addClass('limit-exceed');
				}
			});
			$(document).on('click', '.added-more-education .btnRemove', function () {
				$(this).parent('.added-more-education').remove();
				if ($('.added-more-education').length < work_exp_max) {
					$(".hide-add-education").show();
					$("#education-section").removeClass('limit-exceed');
				}
			});
	</script>
</div><!-- EDUCATION END-->

<!--CONTACT-->
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
		<img onclick="document.getElementById('contact-image').click();" src="<?php echo !empty($contact_image) ? $contact_image : $defaultUploadImage; ?>" />
		<input type='file' class="form-file-upload" name='contact_image' accept="image/x-png,image/gif,image/jpeg" id="contact-image" style="visibility:hidden;"/>
		<div class="user-note">
			<?php if (!empty($contact_image)) { ?>
				Change contact image
			<?php } else {?>
				Add contact image
			<?php } ?>
			<div class="user-note-detail position-relative">
				<i class="fas fa-exclamation note-user"></i>
				<ul>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						Minimum resolution - should be 900*1600
					</li>
					<li>
						<i class="fas fa-caret-right mr-1"></i>
						Maximum Size - 1MB</li>
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
	<div class="contact-content">
		<div class="contact-details">
			<div class="name-align phone">
				<p class="input-name">
					Phone Number
				</p>
				<div class="contact-block">
					<input class="input-field text-field" type="text" id="phone-number" name="phone_number" value="<?php echo $phone_number; ?>">
				</div>
			</div>
			<div class="name-align mobile">
				<p class="input-name">
					Mobile Number
				</p>
				<div class="contact-block">
					<input class="input-field text-field" type="text" id="mobile-number" name="mobile_number" value="<?php echo $mobile_number; ?>">
				</div>
			</div>
			<div class="time-slot mt-3">
				<p class="input-name">
					Time slot
				</p>
				<div class="calender-time-slot">
					<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/form/calender-icon.png" />
					<input class="mt-2 input-field text-field list-view" type="time" id="appt" name="call_time" value="<?php echo $call_time; ?>">
				</div>
			</div>
			<p class="input-name mt-3">
				Video Call Details
			</p>
			<ul class="social-call">
				<li>
					<!--<img class="icon-size-50" src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/skype.png" />-->
					<i title="Skype ID" class="fab fa-skype"></i>
					<input class="input-field text-field list-view" type="text" id="skype" name="skype_call" value="<?php echo $skype_call; ?>">
				</li>
				<li>
					<i title="Google Meet" class="fab fa-google"></i>
					<input class="input-field text-field list-view" type="text" id="googleMeet" name="google_meet_call" value="<?php echo $google_meet_call; ?>">
				</li>
				<li>
					<i title="Whatsapp" class="fab fa-whatsapp"></i>
					<input data-length="15" class="input-field text-field list-view mobile-number" type="text" id="whatsapp" name="whatsapp_call" value="<?php echo $whatsapp_call; ?>">
				</li>
				<li>
					<i title="Calendly ID" class="fas fa-calendar-week"></i>
					<input class="input-field text-field list-view" type="text" id="calendly" name="calendly">
				</li>
				<li>
					<i title="FB-Messenger" class="fab fa-facebook-messenger"></i>
					<input class="input-field text-field list-view" type="text" id="fb-messenger" name="messenger_call" value="<?php echo $messenger_call; ?>">
				</li>
				<li>
					<i title="Zoom ID" class="fas fa-video"></i>
					<input class="input-field text-field list-view" type="text" id="zoom" name="zoom_call" value="<?php echo $zoom_call; ?>">
				</li>
			</ul>
			<p class="input-name">
				Social Media Presence
			</p>
			<ul class="social-call">
				<li>
					<i title="Facebook" class="fab fa-facebook-f"></i>
					<input class="input-field text-field list-view" type="text" id="facebook" name="facebook_url" value="<?php echo $facebook_url; ?>">
				</li>
				<li>
					<i Title="LinkedIn" class="fab fa-linkedin-in"></i>
					<input class="input-field text-field list-view" type="text" id="linkedin" name="linkedin_url" value="<?php echo $linkedin_url; ?>">
				</li>
				<li>
					<i title="Twitter" class="fab fa-twitter"></i>
					<input class="input-field text-field list-view" type="text" id="twitter" name="twitter_url" value="<?php echo $twitter_url; ?>">
				</li>
				<li>
					<i title="YouTube" class="fab fa-youtube"></i>
					<input class="input-field text-field list-view" type="text" id="youtube" name="youtube_url" value="<?php echo $youtube_url; ?>">
				</li>
				<li>
					<i title="Pinterest" class="fab fa-pinterest"></i>
					<input class="input-field text-field list-view" type="text" id="pinintret" name="pinterest_url" value="<?php echo $pinterest_url; ?>">
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- CONTACT-END -->

<!--SETTINGS-->
	<div class="settings form-section">
		<h2 class="title">
			Settings
			<span class="edit-icon pointer"></span>
		</h2>
		<p class="input-name">
			Color Selection
		</p>
		<ul class="color-pallet p-0 m-0">
			<li class="color-code black"><span></span></li>
			<li class="color-code eastern-blue"><span></span></li>
			<li class="color-code odrich"><span></span></li>
			<li class="color-code chilean"><span></span></li>
		</ul>
	</div>
	<!--SETTINGS END-->
	<div class="layout-button">
		<input type="hidden" name="post_id" value="<?php echo $resume_post_id; ?>" />
		<input type="hidden" name="page_template" value="standard1" />
		<!--<button class="form-btn" type="button">Create CV</button>-->
		<button class="form-btn sumbit-btn" type="submit"><?php echo $resume_post_id ? 'Submit' : 'Save CV' ?></button>
		<input type="hidden" name="action" value="resume" />
	</div>
</form>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="home" class="banner page-section-1">
        <?php get_template_part( 'templates/template', 'theme-3' ); ?>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var _URL = window.URL || window.webkitURL;
$(".form-file-upload").change(function(e) {
	var file, img;
	var orginalEle = $(this);
// 	var width = orginalEle.data('width');
// 	var height = orginalEle.data('height');
// 	if (width === undefined || height === undefined) {
// 		width = 900;
// 		height = 1600;
// 	}
	if (file = this.files[0]) {
		if ((file.size / 1024) > parseInt(1125)) {
			alert('Maximum file size should be less than 1MB');
		} else {
			img = new Image();
			img.onload = function() {
// 				if (this.width < 1700 || this.height < 1100 ) {
// 					alert('Minimum resolution should be ' + width + " * " + height);
// 				} else {
					var reader = new FileReader();

					reader.onload = function (e) {
						var src = e.target.result;
						orginalEle.prev().attr('src', src).width(150).height(200);
					};
					reader.readAsDataURL(file);
// 				}
			};
			img.onerror = function() {
				alert( "Not a valid file: " + file.type);
			};
			img.src = _URL.createObjectURL(file);
		}
	}
});
</script>