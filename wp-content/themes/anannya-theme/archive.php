<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anannya
 */

get_header();
?>

<div class="container">
   <!-- <div class="d_override_container">-->
    <div class="row">
        <div class="col-lg-12">
         <img class="d_home_image" src="http://localhost/anannya/wp-content/uploads/2018/07/home.png">
            <img class="d_home_image" src="http://localhost/anannya/wp-content/uploads/2018/07/arrow.png">
            <?php single_cat_title(); ?>
            
<hr class="style1">
        </div>
    </div>
</div>
<!--</div>-->

	<div class="container">
    <div class="row">
        <div class="col-lg-8">
 <?php
        if ( have_posts() ) : ?>
            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'blog' );
            endwhile; ?>
            <div class="clearfix"></div>
<?php
        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>
        </div>
        </div><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
