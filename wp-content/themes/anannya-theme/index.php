<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Anannya
 */

get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
<!--Slider Starts-->
                <div class="o_featured_slider">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
						<?php
						  $args = array('category_name' => 'ফিচার',
                              'posts_per_page' => 3, 
                              
                          ); //start counter
                            $slider_query=new WP_Query($args); //Need this to make pagination work
                            ?>
                         <div class="carousel-inner">
                             <?php
                                if(have_posts()) :  while($slider_query->have_posts()) : $slider_query->the_post(); 

                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, 'slider-thumbnail', true);
                             ?>
                             <div id="slider_img" class="carousel-item <?php if($slider_query->current_post == 0) : ?>active<?php endif; ?>">
                                <img class="slider_img" src="<?php echo $image_url[0]; ?>">
                                    <div class="o_slider_headline_box">
                                        <h5 class="o_slider_h5"><a class="o_slider_headline"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                              </div>
                                        
                             <?php endwhile;
                               endif;
                                   ?>
                             <?php wp_reset_query(); ?>
                         </div>
                             <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                         </div><!-- /.carousel -->
                    </div>
<!-- Advertisement block-->
        </div>
        <div class="col-lg-3 o_slider_right">
            
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="o_landscape_ad_landscape">
                 ADVERTISEMENT
            </div>
            <div class="row o_below_advertise1">
                <div class="col-lg-4">
                <?php
                    $counter = 1; //start counter
                    $args = array(
                                  'posts_per_page' => 3,
                                   'category_name' => 'ফিচার',
                                ); //start counter
                                $front_query=new WP_Query($args); //Need this to make pagination work
                                if(have_posts()) :	while($front_query->have_posts()) :  $front_query->the_post(); ?>
                                  <?php if($counter == 1) :
                                  $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, '2nd-row-thumbnail', true); ?>
                                    <div class="o_2nd_row_post1">
                                        <img class="o_2nd_row_img" src="<?php echo $image_url[0]; ?>">
                                        <p class="o_2nd_row_cat">রচনা</p>
                                        <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                                  <?php elseif($counter == 2) : ?>
                                    <h5 class="o_2nd_row_2_title_box"><a class="o_2nd_row_2_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    <?php elseif($counter == 3) : ?>
                                    <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                  <?php
                                        $counter = 0;
                                        endif;
                                        ?>
                                        <?php
                                        $counter++;
                                        endwhile; 
                                        //Pagination can go here if you want it.
                                        endif;
                                    ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="col-lg-4">
                <?php
                    $counter = 1; //start counter
                    $args = array(
                                  'posts_per_page' => 3,
                                   'category_name' => 'ফিচার',
                                ); //start counter
                                $front_query=new WP_Query($args); //Need this to make pagination work
                                if(have_posts()) :	while($front_query->have_posts()) :  $front_query->the_post(); ?>
                                  <?php if($counter == 1) :
                                  $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, '2nd-row-thumbnail', true); ?>
                                    <div class="o_2nd_row_post1">
                                        <img class="o_2nd_row_img" src="<?php echo $image_url[0]; ?>">
                                        <p class="o_2nd_row_cat">রচনা</p>
                                        <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                                  <?php elseif($counter == 2) : ?>
                                    <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    <?php elseif($counter == 3) : ?>
                                    <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                  <?php
                                        $counter = 0;
                                        endif;
                                        ?>
                                        <?php
                                        $counter++;
                                        endwhile; 
                                        //Pagination can go here if you want it.
                                        endif;
                                    ?>
                        <?php wp_reset_query(); ?>
                    </div>
                <div class="col-lg-4">
                <?php
                    $counter = 1; //start counter
                    $args = array(
                                  'posts_per_page' => 3,
                                   'category_name' => 'ফিচার',
                                ); //start counter
                                $front_query=new WP_Query($args); //Need this to make pagination work
                                if(have_posts()) :	while($front_query->have_posts()) :  $front_query->the_post(); ?>
                                  <?php if($counter == 1) :
                                  $image_id = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id, '2nd-row-thumbnail', true); ?>
                                    <div class="o_2nd_row_post1">
                                        <img class="o_2nd_row_img" src="<?php echo $image_url[0]; ?>">
                                        <p class="o_2nd_row_cat">রচনা</p>
                                        <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                                  <?php elseif($counter == 2) : ?>
                                    <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    <?php elseif($counter == 3) : ?>
                                    <h5 class="o_2nd_row_1_title"><a class="o_2nd_row_1_title"  href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                  <?php
                                        $counter = 0;
                                        endif;
                                        ?>
                                        <?php
                                        $counter++;
                                        endwhile; 
                                        //Pagination can go here if you want it.
                                        endif;
                                    ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</div>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

