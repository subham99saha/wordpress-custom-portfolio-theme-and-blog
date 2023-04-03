<?php 
	// echo the_ID();
	$url = '';
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );	
?>
<style>
.bg-img {
	background-image: url('<?php echo $url ?>');
	background-size: cover;
	background-position: center;
}
</style>
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark bg-img" >
	<div class="col-md-6 px-0">
	  <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
	  <p class="lead my-3 "><?php the_excerpt(); ?></p>
	  <p class="lead mb-0"><a href="<?php the_permalink(); ?>" class="text-white font-weight-bold">Continue reading...</a></p>
	</div>
</div>