
<?php 
	$url = '';
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
?>
<style>
.bg-img-content {	
	background-size: cover;
	background-position: center;
}
</style>


<div class="card mb-3">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-3 bg-img-content" style="background-image: url('<?php echo $url ?>'); "></div>
		<div class="col-8 p-4">
			<h4 class="card-title content-header text-uppercase"><?php the_title(); ?></h4>
			<p class="card-text"><?php echo get_the_excerpt(); ?></p>			
			<!--<a href="<?php the_permalink(); ?>" class="btn btn-dark">Read more</a>-->
			<p class="mb-0"><a href="<?php the_permalink(); ?>" class="text-dark font-weight-bold">Read more</a></p>
		</div>
	</div>
</div>