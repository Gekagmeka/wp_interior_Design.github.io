<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test task</title>

    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/all.min.css"> -->

</head>
<body>
	<div class="wrapper">
		<header class="header">
			<div class="menu">
				<div class="container">
					<div class="info">
						<div class="logo">
            <!-- logo with link -->
						<!-- <?php the_custom_logo(); ?>	 -->
                        
              <a href="#">
                  <!-- logo only img -->
                  <?php $logo_img = '';
                      if( $custom_logo_id = get_theme_mod('custom_logo') ){
                          $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                              'class'    => 'custom-logo',
                              'itemprop' => 'logo',
                              'alt'      => 'logo',
                          ) );
                      }

                      echo $logo_img; ?>

                  <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/logo-01.png" alt="iD | Interior Design"> -->
              </a>
						</div>
            
						<nav class="navigation">

            <?php wp_nav_menu( array(
              // our name of the menu from register_nav_menu()
              'theme_location' => 'top_menu',
              // not need to cover our navigation into container
              'container'      => null,
              // our class on ul
              'menu_class'     => 'list',
              // our id on ul
              // 'menu_id'        => '',
              // 'before' => '<i class="icon"></i>',
              // 'link_after' => '<i class="icon"></i>'
            )); ?>

              <!-- .current-menu-item it's active class for WP onto li -->
							<!-- <ul class="list">
								<li class="item">
									<a href="#" class="link">Home</a>
								</li>
								<li class="item">
									<a href="#" class="link">About us</a>
								</li>
								<li class="item">
									<a href="#" class="link">Projects</a>
								</li>
								<li class="item">
									<a href="#" class="link">Contacts</a>
								</li>
								<li class="item">
									<a href="#" class="link sub-menu-link">Extra <span class="arrow-down"></span></a>
									<ul class="sub-list">
										<li class="sub-item item">
											<a class="sub-link" href="#">404 Error</a>
										</li>
										<li class="sub-item item">
											<a class="sub-link" href="#">Coming Soon</a>
										</li>
										<li class="sub-item item">
											<a class="sub-link" href="#">Thank You</a>
										</li>
									</ul>
								</li>
							</ul> -->
						</nav>
						<div class="burger-button">
							<span class="serif"></span>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="container">
					<section class="welcome">
						<h1 class="title">
                            <?php the_field('title'); ?>
							<!-- About us -->
						</h1>
						<a class="link" href="#">Home</a> <i class="fas fa-angle-double-right"></i> <a class="link" href="#">About us</a>
					</section>
				</div>
			</div>
		</header>