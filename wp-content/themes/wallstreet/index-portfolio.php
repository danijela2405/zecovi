<!-- AddThis Button END -->
<?php
?>
<div class="portfolio-section">
	<div class="container">

		<div class="row">
			<div class="section_heading_title">
				<h1>Kontaktirajte nas!</h1>
				<div class="pagetitle-separator">
					<div class="pagetitle-separator-border">
						<div class="pagetitle-separator-box"></div>
					</div>
				</div>
				<p>Nudimo razne oblike pomoći u vezi vaših četveronožnih prijatelja</p>
			</div>
		</div>
		<div class="row">
		<?php
        $posts = [49, 47, 42,37];
            foreach ($posts as $postId){
                $post = get_post($postId);
                ?>
                <div class="col-md-3 col-md-6 home-portfolio-area">
                    <div class="home-portfolio-showcase">
                        <div class="home-portfolio-showcase-media">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <img class="img-responsive home-portfolio-img" src="<?php echo $image[0]; ?>">

                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4><?php echo esc_html($post->post_title); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
		</div>
</div>	
</div>
<!-- /wallstreet Portfolio Section ---->