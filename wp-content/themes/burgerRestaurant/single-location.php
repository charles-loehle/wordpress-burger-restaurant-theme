<?php get_header(); ?>

<?php while (have_posts()) {
  the_post(); ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/chicken-nuggets-banner.jpg') ?>)"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>REPLACE ME LATER.</p>
      </div>
    </div>
  </div>

  <div id="scroll-trigger" class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?= get_post_type_archive_link('location'); ?>">
          <i class="fa fa-home" aria-hidden="true"></i> All Locations
        </a> 
          <span class="metabox__main">
            <?php the_title(); ?>
          </span>
      </p>
    </div>

    <div class="generic-content">
      <?php the_content(); ?>
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
          ),
          array(
            'key' => 'related_locations',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() . '"'
          )
        )
      ));

      if($homepageEvents->have_posts()) {
        echo '<hr class="section-break">';
        echo '<h2 class="mb-2 mt-2">Upcoming ' . get_the_title() . ' Location Events</h2>';
  
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
        <?php }
      }

    ?>

  </div>

<?php }

get_footer(); ?>