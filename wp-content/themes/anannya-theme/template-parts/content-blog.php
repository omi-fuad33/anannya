  <div class="d_news_box">
                <figure class="d_image_box">
                   <img class ="d_post_image" <?php echo the_post_thumbnail(array(384,298)); ?> />
                </figure>
                <div class="d_text_box">
                    <h3 class="d_heading_text"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                 <p><?php echo the_content(); ?></p>
                </div>


            </div>