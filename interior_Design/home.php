<?php
// there are some recomendations - need to save main page Home in home.php file not in index.php
// need to connect Home page from the WP with this file

/*
Template Name: Home
*/
?>

 <!-- other coding from the index.php and there need to leave only header and footer -->

<?php get_header(); ?>

<main class="main">
    <section class="about-agency">
        <div class="container">
            <h2 class="caption">
                <?php the_field('agency_title'); ?>
            </h2>
            <div class="two-columns">
                <div class="left-side">
                    <!-- possibility to change image -->
                    <img src="<?php the_field('agency_image'); ?>" alt="">

                    <!-- to show image (right path) -->
                    <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/img-01.jpg" alt=""> -->
                </div>
                <div class="right-side">
                    <?php the_field('agency_text'); ?>
                    <!-- <p>
                        Donec auctor, arcu
                    </p>
                    <p>
                        Morbi quis sem vel l
                    </p> -->
                    <h3 class="sub-caption">
                        <?php the_field('ul_title'); ?>
                    </h3>

                    <?php the_field('list_ul'); ?>
                    <!-- <ul class="causes-list">
                        <li class="causes-item">
                            Nullam <a href="tel:<?php the_field('number_phone'); ?>"><?php the_field('telephone_text'); ?></a>
                        </li>
                    </ul> -->
                    
                </div>
            </div>
        </div>
    </section>
    <section class="our-work">
        <div class="container">
            <h2 class="caption">
                <?php the_field('doing_title'); ?>
            </h2>
            <div class="three-columns">
                <div class="column">
                    <div class="photo">
                        <img src="<?php the_field('first_column_image'); ?>" alt="">
                    </div>
                    <div class="text-block">
                        <h3 class="sub-caption">
                            <?php the_field('first_column_title'); ?>
                        </h3>
                        <p class="text">
                            <?php the_field('first_column_text'); ?>
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="photo">
                        <img src="<?php the_field('second_column_image'); ?>" alt="">
                    </div>
                    <div class="text-block">
                        <h3 class="sub-caption">
                            <?php the_field('second_column_title'); ?>
                        </h3>
                        <p class="text">
                            <?php the_field('second_column_text'); ?>
                        </p>
                    </div>
                </div>
                <div class="column">
                    <div class="photo">
                        <img src="<?php the_field('third_column_image'); ?>" alt="">
                    </div>
                    <div class="text-block">
                        <h3 class="sub-caption">
                            <?php the_field('third_column_title'); ?>
                        </h3>
                        <p class="text">
                            <?php the_field('third_column_text'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>