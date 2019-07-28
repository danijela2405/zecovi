<!-- wallstreet Main Slider --->
<?php
require_once('functions.php');
$wallstreet_pro_options = theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); ?>
<!-- /Slider Section -->
<div id="slider" class="homepage_mycarousel">
        <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 100; // -1 shows all posts
        $args = array(
            'post_type' => 'vijesti',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page,
        );
        $wp_query = new WP_Query($args);

        if (have_posts()):
            while ($wp_query->have_posts()):
                $wp_query->the_post();
                if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <div id="custom-bg" class="mySlides static-banner slider-image-div">
                        <img class="slider-image"  src="<?php echo $image[0]; ?>">
                        <div class="flex-slider-center">
                                <div class="slide-text-bg1"><h2><?php echo esc_html($post->post_title); ?></h2>
                                </div>
                                <div class="slide-text-bg2"><h1><?php echo esc_html($post->post_excerpt); ?></h1>
                                </div>
                                <div class="slide-text-bg3"><p><?php echo esc_html($post->post_excerpt); ?></p>
                                </div>
                        </div>
                    </div>
                <?php else:
                    continue;
                endif;?>
        <?php endwhile; else: ?>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>
</div>
