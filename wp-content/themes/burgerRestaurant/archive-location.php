<?php 

get_header(); ?>

<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/chicken-nuggets-banner.jpg') ?>)"></div>
	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title">
      All Locations
    </h1>
		<div class="page-banner__intro">
			<p>Find the location nearest to you.</p>
		</div>
	</div>
</div>

<div id="scroll-trigger" class="container container--narrow page-section mt-3">
  <div class="locations-section">

    <ul>
      <?php 
        while(have_posts()){
          the_post(); ?>
          <li class="link-underline mb-2 font-lg"><a class="text-secondary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php }

        echo paginate_links();
      ?>
    </ul>

  </div>
</div>

<?php get_footer();

?>