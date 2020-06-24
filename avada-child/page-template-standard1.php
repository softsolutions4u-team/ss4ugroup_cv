<?php
/**
 * Template Name: Standard 1
 * Template Post Type: resume
 */
acf_form_head();
get_header('theme3');
?>

<?php


$image_fields = [
	'profile_image' => get_stylesheet_directory_uri() . '/images/jack/sliderimg.jpg',
	'personal_profile_image'=> get_stylesheet_directory_uri() . '/images/jack/about.jpg',
	'work_experience_image' => get_stylesheet_directory_uri() . '/images/jack/work.jpg',
	'hobbies_image' => get_stylesheet_directory_uri() . '/images/jack/hobbies.jpg',
	'education_image' => get_stylesheet_directory_uri() . '/images/jack/about.jpg',
	'contact_image' => get_stylesheet_directory_uri() . '/images/jack/contactus-img.jpg'
];

foreach ($image_fields as $image_field => $defalutImage ) {
	$field_val = get_field($image_field);
	$$image_field = (!empty($field_val)) ? esc_url($field_val['url']) : $defalutImage;
}
?>
<main id="site-content" class="layout-theme theme3" themeId="theme3" role="main">
    <div id="home" class="banner page-section-1">
        <div class="banner-details" style="background-image: url(<?php echo $profile_image; ?>)">
            <div class="banner-content">
                <h2 class="title heading-left">
                    <?php echo get_field('first_name') ?> <?php echo get_field('last_name') ?>
                </h2>
                <!--				<h3 class="caption heading-left">
                                                        NHS England - Project Manager
                                                </h3>-->
                <a href="#about" class="buttons cv-btn scroll-btn">
                    <i class="fas fa-chevron-down"></i>
                    LEARN MORE
                </a>
            </div>
        </div>
    </div>
    <div class="profile-details">
		<?php if (get_field('personal_profile_show_hide') === false) { ?>
        <div id="about" class="personal-profile page-section-2">
            <div class="width-60">
                <div class="about-content">
                    <h2 class="title">
                        Personal Profile
                    </h2>
                    <div class="about-user text">
                        <p>
                            <?php echo get_field('personal_profile') ?>
                        </p>
                        <h5>
                            Key Skills
                        </h5>
                        <ul class="key-skills">
                            <?php while( the_repeater_field('key_skill') ): ?>
                                    <li>
                                        <span><i class="fas fa-caret-right"></i></span>
										<?php echo ucfirst(get_sub_field('skills')); ?>
                                	</li>
                                <?php endwhile; ?>
                        </ul>
                    </div>
                    <a href="#experience" class="cv-btn scroll-btn scroll-next">
                        <i class="fas fa-chevron-down"></i>
                        WORK SKILLS
                    </a>
                </div>
            </div>
            <div class="width-40">
                <div class="pro-image" style="background-image: url(<?php echo $personal_profile_image; ?>)">
                </div>
            </div>
        </div><!--PERSONAL-DETAILS-->
		<?php } ?>
        <div id="experience" class="work-experience page-section-3">
            <div class="width-60">
                <div class="section bg-grey">
                    <h2 class="title heading">
                        Work Experience
                    </h2>

                    <div class="career-details text">
                        <?php
						$format_in = 'Ymd';
						$format_out = 'd-m-Y';
                        $workExperience = 0;
                        while ($workExperience <= 5) {
                            ?>
                            <div class="content-box">
                                <div class="content-list">
                                        <?php if (get_field('job_title_' . $workExperience) || get_field('employer_' . $workExperience)) { ?>
                                        <h3 class="caption designation">
                                        <?php echo get_field('job_title_' . $workExperience) ?>, <?php echo get_field('employer_' . $workExperience) ?>
                                        </h3>
                                    <?php
                                    }
                                    if (get_field('work_from_' . $workExperience) || get_field('work_to_' . $workExperience)) {
                                        ?>
                                        <div class="content-heading">
                                            <i class="far fa-calendar-check"></i>
                                            <span class="career-year">
                                        <?php echo date("F Y", strtotime(get_field('work_from_' . $workExperience))) ?> - <?php echo date("F Y", strtotime(get_field('work_to_' . $workExperience))) ?> 
                                            </span>
                                        </div>
                                        <?php
                                        }
                                        if (get_field('job_title_' . $workExperience)) {
                                            ?>
                                        <p class="breaking-line"></p>
                                        <ul class="work-details">
                                            <li>
                                                <span><i class="fas fa-caret-right"></i></span>
                                                <?php echo get_field('work_responsibilities_' . $workExperience) ?>Computer literate, competent with Microsoft Office
                                            </li>
                                            <li>
                                                <span><i class="fas fa-caret-right"></i></span>
                                                Waitering and bar-tendering in the restaurant/bar and function rooms
                                            </li>
                                            <li>
                                                <span><i class="fas fa-caret-right"></i></span>
                                                Ensuring high standards of presentation and service
                                            </li>
                                            <li>
                                                <span><i class="fas fa-caret-right"></i></span>
                                                Serving and entertaining customers
                                            </li>
                                            <li>
                                                <span><i class="fas fa-caret-right"></i></span>
                                                Cleaning and maintaining the hotel facilities and equipment
                                            </li>
                                        </ul>
                            <?php } ?>
                                </div>
                            </div>
                            <?php
                            $workExperience++;
                        }
                        ?>
                    </div>
                    <a href="#hobbies" class="cv-btn scroll-btn scroll-next">
                        <i class="fas fa-chevron-down"></i>
                        HOBBIES & EXTRA CURRICULAR
                    </a>
                </div>
            </div>
            <div class="width-40">
                <div class="pro-image" style="background-image: url(<?php echo $work_experience_image; ?>)">
                </div>
            </div>
        </div><!--WORK-EXPERIENCE-END-->
        <div id="hobbies" class="interest page-section-4">
            <div class="width-60">
                <div class="interest-content">
                    <h2 class="title heading">
                        Hobbies & Extra Curricular
                    </h2>
                    <div class="interest-details text">
                        <p>
                            <?php echo get_field('hobbies_details') ?>
                        </p>
 <!--                        <p>
                             I have also recently joined the Territorial Army (210 Air Defence Unit) and am enjoying learning about military discipline & the role
                             volunteers play. The teamwork ethic is second to none.
                         </p>
                         <p>
                             For relaxation, I play the piano & enjoy learning to cook. Although these 2 are completely different activities, both improve my skills
                             & require a different approach to learning. The piano requires focus and persistence whereas the cooking is all about having fun but learning
                             via trial & error.
                         </p>-->
                    </div>
                    <a href="#education" class="cv-btn scroll-btn scroll-next">
                        <i class="fas fa-chevron-down"></i>
                        EDUCATION AND TRAINING
                    </a>
                </div>
            </div>
            <div class="width-40">
                <div class="pro-image" style="background-image: url(<?php echo $hobbies_image; ?>)">
                </div>
            </div>
        </div><!--ACTIVITIES-END-->
        <div id="education" class="education-details page-section-5">
            <div class="width-60">
                <div class="education-content">
                    <h2 class="title heading">
                        Education
                    </h2>
                    <table class="educationtable text" border="0" width="100%">
                        <tbody>
                            <tr>
                                <th>Education and Training</th>
                                <th>Year</th>
                            </tr>
                            <?php
                        $education = 0;
                        while ($education <= 5) {
                            if(get_field('education_from_'.$education) || get_field('education_to_'.$education)) { 
                                ?>
                            <tr>
                                <td>
                                    <?php if (get_field('education_institution_'.$education)) { ?>
                                    <strong><?php echo get_field('education_institution_'.$education) ?></strong>
                                    <br>
                                    <?php } 
                                    if (get_field('education_qualification_'.$education)) { ?>
                                    <p>
                                        <?php echo get_field('education_qualification_'.$education) ?>
                                    </p>
                                    <?php } 
//                                    if (get_field('education_more_details_'.$education)) { ?>
                                    <ul>
                                        <li><?php echo get_field('education_more_details_'.$education) ?>City and Guilds Level 1 in Customer Service and Teamwork</li>
                                    </ul>
                                    <?php // } ?>
                                </td>
                                <td>
                                <?php if (get_field('education_from_'.$education) && get_field('education_to_'.$education)) { ?>
                                <?php echo date("Y", strtotime(get_field('education_from_'.$education))) ?> - <?php echo date("Y", strtotime(get_field('education_to_'.$education))) ?>
                                <?php } else if(get_field('education_from_'.$education) || get_field('education_to_'.$education)) { ?>
                                <?php echo date("Y", strtotime(get_field('education_from_'.$education))) ?> <?php echo date("Y", strtotime(get_field('education_to_'.$education))) ?>
                                <?php } else { ?>
                                <?php echo ''?>
                                <?php } ?>
                                </td>
                            </tr>
                            <?php 
//                                } else if(get_field('education_institution_'.$education)) { ?>
<!--                            <tr>
                                <td>-->
                                    <?php // if (get_field('education_institution_'.$education)) { ?>
                                    <!--<p>-->
                                        <?php // echo get_field('education_qualification_'.$education) ?>
                                    <!--</p>-->
                                    <?php // } ?>
                                    
<!--                                </td>
                            </tr>-->
                            <?php
                                }
                            $education++;
                        }
                        ?>
                        </tbody>
                    </table>
                    <a href="#contact" class="cv-btn scroll-btn scroll-next">
                        <i class="fas fa-chevron-down"></i>
                        CONTACT US
                    </a>
                </div>
            </div>
            <div class="width-40">
                <div class="pro-image" style="background-image: url(<?php echo $education_image; ?>)">
                </div>
            </div>
        </div><!--EDUCATION-END-->
        <a href="#contact" class="cv-btn btn-full-width scroll-btn scroll-next">
            <i class="fas fa-chevron-down"></i>
            GET IN TOUCH
        </a><!--GET-IN-TOUCH-END-->
        <div id="contact" class="page-section-6">
            <div class="width-60">
                <div class="contact-content">
                    <h2 class="title heading">
                        Contact
                    </h2>
                    <div class="contact-details text">
                        <h6>
                            Please either call or use the form below to contact me. I look forward to hearing from you.
                        </h6>
                        <ul class="contact-number">
                                    <?php if (get_field('phone_number')) { ?>
                                <li class="mr-3">
                                    <i class="fas fa-phone-alt contact-circle career-circle"></i>
                                    <a href="tel:<?php echo get_field('phone_number') ?>">
                                    <?php echo get_field('phone_number') ?>
                                    </a>
                                </li>
                                    <?php } if (get_field('mobile_number')) { ?>
                                <li>
                                    <i class="fas fa-phone-alt contact-circle career-circle"></i>
                                    <a href="tel:<?php echo get_field('mobile_number') ?>">
                                    <?php echo get_field('mobile_number') ?>
                                    </a>
                                </li>
                                <?php } ?>
                        </ul>
                        <h5>
                            Arrange a Video Call With Me.
                        </h5>
                        <div class="time-slot">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendly-icon.png" alt="#">
                            <h4>
                                Select Your Desired Timeslot
                            </h4>
                        </div>
                        <ul class="videocallicons">
                            <?php if (get_field('zoom_call')) { ?>
                                <li>
                                    <a href="<?php echo get_field('zoom_call') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/zoom.png"></a>
                                </li>
                            <?php } if (get_field('skype_call')) { ?>
                                <li>
                                    <a href="<?php echo get_field('skype_call') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/skype.png"></a>
                                </li>
                            <?php } if (get_field('messenger_call')) { ?>
                                <li>
                                    <a href="<?php echo get_field('messenger_call') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/fb-messenger.png"></a>
                                </li>
                            <?php } if (get_field('whatsapp_call')) { ?>
                                <li>
                                    <a href="<?php echo get_field('whatsapp_call') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/whatsapp.png"></a>
                                </li>
                            <?php } if (get_field('google_meet_call')) { ?>
                                <li>
                                    <a href="<?php echo get_field('google_meet_call') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-call/googlemeet.png"></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <h4 class="media-presence">
                            Social Media Presence:
                        </h4>
                        <p class="media-presence-details">
                            Feel free to have a look at some of my social media profiles, which feature work samples as well as other projects I've been involved with.
                        </p>
                        <ul class="media-presence-list">
                            <?php if (get_field('twitter_url')) { ?>
                                <li>
                                    <a href="<?php echo get_field('twitter_url') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-presence/img-1.png"></a>
                                </li>
                            <?php } if (get_field('youtube_url')) { ?>
                                <li>
                                    <a href="<?php echo get_field('youtube_url') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-presence/img-2.png"></a>
                                </li>
                            <?php } if (get_field('facebook_url')) { ?>
                                <li>
                                    <a href="<?php echo get_field('facebook_url') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-presence/img-3.png"></a>
                                </li>
                            <?php } if (get_field('linkedin_url')) { ?>
                                <li>
                                    <a href="<?php echo get_field('linkedin_url') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-presence/img-4.png"></a>
                                </li>
                            <?php } if (get_field('pinterest_url')) { ?>
                                <li>
                                    <a href="<?php echo get_field('pinterest_url') ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/media-presence/img-5.png"></a>
                                </li>
<?php } ?>
                        </ul>
                        <!--                        <ul class="media-presence-list">
                                                    <li>
                                                        <a href="<?php // echo get_field('pinterest_url')  ?>"><img src="<?php // echo get_stylesheet_directory_uri();  ?>/images/media-presence/img-5.png"></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php // echo get_field('hobbies_details')  ?>"><img src="<?php // echo get_stylesheet_directory_uri();  ?>/images/media-presence/img-6.png"></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php // echo get_field('hobbies_details')  ?>"><img src="<?php // echo get_stylesheet_directory_uri();  ?>/images/media-presence/img-7.png"></a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php // echo get_field('hobbies_details')  ?>"><img src="<?php // echo get_stylesheet_directory_uri();  ?>/images/media-presence/img-8.png"></a>
                                                    </li>
                                                </ul>-->
                    </div>
                </div>
            </div>
            <div class="width-40">
                <div class="pro-image" style="background-image: url(<?php echo $contact_image; ?>)">
                </div>
            </div>
        </div>
    </div>
</main><!-- #site-content -->

<?php get_footer('cvFooter'); ?>
