<?php get_header(); ?>
<section id="portfolio">
	<div class="background">
		<div class="portfolio-container">

			<div class="photo-container">
				<h2>PHOTOGRAPHY</h2>
				<?php echo do_shortcode('[envira-gallery id="45"]') ?>
			</div>

			<div class="video-container">
				<h2>VIDEOGRAPHY</h2>
				<?php echo do_shortcode('[embedyt] https://www.youtube.com/embed?listType=playlist&list=UU5vR-9bNQXbpd4pjtPgewKA&layout=gallery[/embedyt]') ?>
			</div>
			<div class="page-footer">
				<p>Created by <?php Echo "<a href=https://www.blueflowermedia.com/>Blueflower Media</a>" ?> </p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
