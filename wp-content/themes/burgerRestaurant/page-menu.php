<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?= get_theme_file_uri('/images/chicken-nuggets-banner.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title(); ?></h1>
  </div>
</div>

<section id="scroll-trigger" class="menu-section">

	<div class="container">
		<?php 
			if(have_rows('menu_sections')):
				while (have_rows('menu_sections')): the_row(); ?>

				<div class="column">
					<h2 class="title font-lg text-dark">
						<?php the_sub_field('section_title'); ?>
					</h2>
					<?php if(have_rows('section_items')):
						while(have_rows('section_items')): the_row(); ?>
							<div class="item-summary">
								<div class="item-summary__image">
									<img src="<?php echo get_sub_field('dish_image') ?>" alt="">
								</div>
								<div class="item-summary__content">
									<div class="item-summary__headings flex flex-jcsb">
										<h5 class="title text-dark font-mdlg"><?php the_sub_field('dish_name'); ?></h5>
										<div class="dots"></div>
										<h5 class="title text-dark font-mdlg">$<?php the_sub_field('dish_price') ?></h5>
									</div>
									<p><?php the_sub_field('dish_description'); ?></p>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>	
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

</section>

<?php get_footer() ?>