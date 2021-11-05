<?php 

get_header(); ?>

<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/chicken-nuggets-banner.jpg') ?>)"></div>
	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title">
      All Events
    </h1>
		<div class="page-banner__intro">
			<p>See what is happening in our world.</p>
		</div>
	</div>
</div>

<div id="scroll-trigger">
  <div class="container mt-3">
    <?php 
      while(have_posts()){
        the_post(); ?>
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
              <?= wp_trim_words(get_the_content(), 18); ?>
              <a href="<?php the_permalink(); ?>">Learn more</a>
            </p>
          </div>
        </div>
    <?php }

      echo paginate_links();
    ?>

    <hr class="mb-2">
    
    <p>
      <a class="link-underline" href="<?= site_url('/past-events') ?>">Recap of past events</a>
    </p>
  </div>
</div>

<?php get_footer();

?>