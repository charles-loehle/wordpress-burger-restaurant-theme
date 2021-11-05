<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <header id="header" class="header sticky fade-transition">
			<div class="container">
				<div class="header__inner">
					<a href="<?= site_url(); ?>" class="logo">
						<h1>BURGER BURGER</h1>
					</a>
					<a id="menu" class="header__menu">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>

				<nav id="drawer" class="nav">
					<ul>
						<li <?php if(is_page('home')) echo 'class="current-menu-item"'; ?>>
							<a href="<?= site_url('/') ?>">Home</a>
						</li>
						<li <?php if(is_page('menu')) echo 'class="current-menu-item"'; ?>>
							<a href="<?= site_url('/menu') ?>">Menu</a>
						</li>
						<li <?php if(get_post_type() == 'location') echo 'class="current-menu-item"'; ?>>
							<a href="<?= site_url('/locations') ?>">Locations</a>
						</li>
						<!-- <li </?php if(get_post_type() == 'post') echo 'class="current-menu-item"'; ?>>
							<a href="</?= site_url('/blog') ?>">Blog</a>
						</li> -->
						<li <?php if(is_page('about-us') or wp_get_post_parent_id(get_the_ID()) == 11) echo 'class="current-menu-item"' ?>>
							<a href="<?= site_url('/about-us') ?>">
								About
							</a>
						</li>
						<li <?php if(get_post_type() == 'event' OR is_page('past-events')) echo 'class="current-menu-item"' ?> >
							<a href="<?= get_post_type_archive_link('event') ?>">
								Events
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>

		<main>