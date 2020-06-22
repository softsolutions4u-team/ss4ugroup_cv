<main class="main theme-dashboard" themeId="dashboards" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/dashboard-background.png)">
	<form class="section">
		<div class="title-content text">
			<h2>
				Lorem Ipsum
			</h2>
			<p class="content">
				Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.
				The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of
				Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
			</p>
		</div>
		<div class="cv-list">
			<ul class="choose-cv p-0 m-0">
				<li class="active">
					<p class="cv-title mb-0">
						<input type="radio" id="video-1" name="video-cv-1" value="cv-1" checked="checked">
						<label for="cv-1">Video CV</label>					
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jackson-clarence.jpg" class="cv-image" alt="cv">
					<a href="<?php echo get_home_url().'/jackson-clarence' ?>" class="cursor" target="_blank">Preview this CV >></a>
				</li>
				<li>
					<p class="cv-title mb-0">
						<input type="radio" id="video-1" name="video-cv-1" value="cv-1" disabled>
						<label for="cv-1">Video CV</label>					
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rebecca-gordon.jpg" class="cv-image" alt="cv">
					<a href="#" class="cursor">Preview this CV >></a>
				</li>
				<li>
					<p class="cv-title mb-0">
						<input type="radio" id="video-1" name="video-cv-1" value="cv-1" disabled>
						<label for="cv-1">Video CV</label>					
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stephanie-russell.jpg" class="cv-image" alt="cv">
					<a href="#" class="cursor">Preview this CV >></a>
				</li>
				
				<li>
					<p class="cv-title mb-0">
						<input type="radio" id="video-1" name="video-cv-1" value="cv-1" disabled>
						<label for="cv-1">Video CV</label>					
					</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shay-gibson.jpg" class="cv-image" alt="cv">
					<a href="#" class="cursor">Preview this CV >></a>
				</li>
			</ul>
		</div>
		<a href="<?php echo get_permalink().'standard' ?>" class="cursor form-create-cv">
		<button class="form-btn" type="button">Create Your CV</button></a>
	</form>
</main><!-- #site-content -->

<?php // get_footer(); ?>
