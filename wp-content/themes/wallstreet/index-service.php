<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options ); 
	  if($current_options['service_section_enabled'] == true) { ?>
<!-- wallstreet Service Section ---->
<div class="service-section">
<div class="container">
	<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['service_title']) { ?>
			<h1><?php echo esc_html($current_options['service_title']); ?></h1>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
		<?php } ?>
		<?php if($current_options['service_description']) { ?>
			<p><?php echo esc_html($current_options['service_description']); ?></p>
		<?php } ?>
		</div>
	</div>	
	<div class="row">
        <?php
        $posts = get_posts(['category' => 20]);

        $count = 0;
        foreach ($posts as $post) {
            if ($count > 3) {
                break;
            }
            ?>

            <div class="col-md-4 col-sm-6 service-effect">
			<div class="service-box">
                <?php $image = wp_get_attachment_image_src(
                    get_post_thumbnail_id($post->ID),
                    'single-post-thumbnail'
                ); ?>
                <img class="img-responsive service-box-image" src="<?php echo $image[0]; ?>">
			</div>
			<div class="service-area">
                <h2><a href="#"><?php echo esc_html($post->post_title); ?></a></h2>
                <p><?php echo esc_html($post->post_excerpt); ?></p>
			</div><!-- / service-area -->
		</div> <!-- / service-effect column -->

            <?php
            $count++;
        }
        ?>
	</div>	
</div>
</div>
<?php } ?>
<!-- /wallstreet Service Section ---->