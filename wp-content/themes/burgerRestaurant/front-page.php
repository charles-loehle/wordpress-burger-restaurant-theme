<?php get_header(); ?>

<section id="welcome-section" class="hero">
	<div class="hero__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/burger-and-beer-hero.jpg'); ?>)"></div>
	<!-- <div class="hero-cta flex flex-jcc flex-aic flex-dir-col">
		<div class="hero-cta__headline">
			<h1>Burger Burger</h1>
			<h3>Best burgers in town</h3>
		</div>
		<div class="hero-cta__buttons">
			<a href="#" class="btn btn-secondary">Locations</a>
		</div>
	</div> -->
	<div class="hero__content text-white text-center mb-2">
		<h1 class="font-xxl">Burger Burger</h1>
		<h3 class="font-lg mb-2">The best burgers in town</h3>
		<a href="<?= get_post_type_archive_link('location');  ?>" class="btn btn-secondary">Locations</a>
	</div>
</section>

<section id="locations" class="locations-section">
	<div id="scroll-trigger" class="">
		<div class="split-grid">
			<div class="grid-column-1">
				<div class="text-center">
					<h2 class="text-dark font-xl"><span>Upcoming</span> Events</h2>
				</div>

				<?php 
					$today = date('Ymd');
					$homepageEvents = new WP_Query(array(
						'posts_per_page' => 2,
						'post_type' => 'event',
						'meta_key' => 'event_date',
						'orderby' => 'meta_value_num',
						'order' => 'ASC',
						'meta_query' => array(
							array(
								'key' => 'event_date',
								'compare' => '>=',
								'value' => $today,
								'type' => 'numeric'
							)
						)
					));

					while($homepageEvents->have_posts()){
						$homepageEvents->the_post(); ?>
						<div class="event-summary">
							<a href="#" class="event-summary__date text-center">
								<span class="event-summary__month">
									<?php 
										$eventDate = new DateTime(get_field('event_date'));
										echo $eventDate->format('M');
									?>
								</span>
								<span class="event-summary__day">
									<?php 
										$eventDate = new DateTime(get_field('event_date'));
										echo $eventDate->format('d');
									?>
								</span>
							</a>
							<div class="event-summary__content">
								<h5 class="title font-lg">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h5>
								<p>
								<?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(),18) ?>
								<a class="text-gray" href="<?php the_permalink(); ?>">Read more</a>
							<p>
							</div>
						</div>
					<?php } ?>											

				<div class="locations-section__buttons text-center">
					<a href="<?= get_post_type_archive_link('event') ?>" class="btn btn-secondary">View All Events</a>
				</div>
			</div>

			<div class="grid-column-2">
				<div class="text-center">
					<h2 class="text-dark font-xl"><span>Our</span> Locations</h2>
				</div>
				<div class="event-summary">
					<a href="#" class="event-summary__date text-center">
						<span class="event-summary__month">Location</span>
						<span class="event-summary__day">Info</span>
					</a>

					<div class="event-summary__content">
						<h5 class="title font-lg">
							<a href="#">Dunwoody</a>
						</h5>
						<p>1426 Dunwoody Village Parkway Dunwoody, GA 3033</p>
					</div>
				</div>

				<div class="event-summary">
					<a href="#" class="event-summary__date text-center">
						<span class="event-summary__month">Location</span>
						<span class="event-summary__day">Info</span>
					</a>
					<!-- <a href="#">
							<div class="event-summary__date text-center">
								<span>NOV</span>
								<span>12</span>
							</div>
						</a> -->
					<div class="event-summary__content">
						<h5 class="title font-lg">
							<a href="#">Cumming</a>
						</h5>
						<p>101 W Courthouse Square Cumming, GA 30040</p>
					</div>
				</div>

				<div class="locations-section__buttons text-center">
					<a href="<?= site_url('/locations') ?>" class="btn btn-tertiary">View Our Locations</a>
				</div>
			</div>
		</div>

		<div class="blog container mt-3 mb-3">
				<div class="text-center">
					<h2 class="text-dark font-xl"><span>From Our</span> Blog</h2>
				</div>

				<?php 
					$homepagePosts = new WP_Query(array(
						'posts_per_page' => 2
					));

					while($homepagePosts->have_posts()){
						$homepagePosts->the_post(); ?>
						<div class="event-summary">
							<a href="#" class="event-summary__date text-center">
								<span class="event-summary__month"><?php the_time('M'); ?></span>
								<span class="event-summary__day"><?php the_time('d') ?></span>
							</a>
							<div class="event-summary__content">
								<h5 class="title font-lg">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h5>
								<p>
									<?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(),18) ?>
									<a class="text-gray" href="<?php the_permalink(); ?>">Read more</a>
								<p>
							</div>
						</div>
					<?php } wp_reset_postdata();
				?>

				<div class="locations-section__buttons text-center">
					<a href="<?= site_url('/blog'); ?>" class="btn btn-secondary">All Blog Posts</a>
				</div>
			</div>
	</div>
</section>

<!-- <section id="contact" class="contact-section">
	<div class="dark-overlay">
		<div class="container">
			<div class="contact-section__header">
				<h2>CONTACT</h2>
				<h3>Let's work together...</h3>
			</div>
			<div class="contact-section__links">
				<a
					id="profile-link"
					href="https://github.com/charles-loehle"
					class="contact-details"
					><i class="fab fa-github"></i> GitHub</a
				>
				<a
					href="https://github.com/charles-loehle"
					class="contact-details"
					><i class="fab fa-linkedin-in"></i> LinkedIn</a
				>
				<a href="mailto:charlesloehle@gmail.com" class="contact-details"
					><i class="fa fa-at"></i> Send an email</a
				>
				<a href="tel:770-380-0752" class="contact-details"
					><i class="fas fa-mobile-alt"></i> Call me</a
				>
			</div>
		</div>
	</div>
</section> -->

<?php get_footer(); ?>