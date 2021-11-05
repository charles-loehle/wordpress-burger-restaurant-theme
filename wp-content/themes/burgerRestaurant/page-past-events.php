<?php 

get_header(); ?>

<div class="page-banner">
	<div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/chicken-nuggets-banner.jpg') ?>)"></div>
	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title">
      Past Events
    </h1>
		<div class="page-banner__intro">
			<p>A recap of our past events.</p>
		</div>
	</div>
</div>

<div id="scroll-trigger" class="container container--narrow page-section mt-3">
  <div class="locations-section">
    <?php 

      $today = date('Ymd');
      $pastEvents = new WP_Query(array(
        'paged' => get_query_var('paged', 1),
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '<',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));

      while($pastEvents->have_posts()){
        $pastEvents->the_post(); ?>
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

    echo paginate_links(array(
      'total' => $pastEvents->max_num_pages
    )); ?>       
  </div>
</div>

<?php get_footer();

?>