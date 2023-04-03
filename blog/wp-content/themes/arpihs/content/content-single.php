<div class="blog-post">
	<div class="col-sm-8 px-5 my-3">
		<h2 class="blog-post-title"><?php the_title(); ?></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	</div>
	<?php if ( has_post_thumbnail() ) {
		$url = '';
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
		?>
		<div class="w-100"
			style="
				height: 400px;
				background-size: cover;
				background-position: center;
				background-image: url(<?php echo $url; ?>);
			"
		></div>
		<?php
	} ?>
	<div class="col-sm-10 p-5">
	<?php the_content(); ?>
	</div>
</div><!-- /.blog-post -->
