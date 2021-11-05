<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/chicken-nuggets-banner.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
    <div class="page-banner__intro">
      <p>Find out about where we got started...</p>
    </div>
  </div>
</div>

<section id="scroll-trigger" class="about-section">
	<div class="container">
		<div class="flex">
			<div class="about-section__image m6 gutters">
				<div class="image-container flex">
					<img src=<?= get_theme_file_uri("./images/hamburger-placeholder.jpg"); ?> alt="html-logo" />
				</div>
			</div>
			<div class="about-section__hello m6 gutters">
				<div class="about-section__header">
					<h2 class="text-dark">About <span>Us</span></h2>
				</div>
				<h4>Welcome to Burger Burger</h4>
				<p>
					Welcome to your local Burger Burger at 3105 Peachtree Parkway in
					Suwanee. With more than 250,000 ways to customize your burger
					and more than 1,000 milkshake combinations, your perfect meal is
					just a click away! We strive to provide the best experience each
					and every time you visit.
				</p>
				<div class="about-section__buttons">
					<a href="<?= site_url('/locations') ?>" class="btn btn-secondary">Locations</a>
					<a href="<?= site_url('/menu') ?>" class="btn btn-secondary">Menu</a>
				</div>
			</div>
		</div>
	</divv>
</section>

<?php get_footer() ?>