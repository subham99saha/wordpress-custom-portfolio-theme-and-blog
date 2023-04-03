<?php 
	// echo the_ID();
	$url = '';
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
	$categories = apply_filters( 'the_category_list', get_the_category( $post->ID ), $post->ID );
	$cat = "";
	foreach ( $categories as $category ) {
		$cat = $category->name;
		break;
	}
?>
<style>
.bg-img-2 {	
	background-size: cover;
	background-position: center;
}
</style>
<div class="col-md-6">
  <div class="card flex-md-row mb-4 box-shadow">
  <div class="row">
	<div class="card-body col-8 px-5">
	  <strong class="d-inline-block mb-2 text-primary"><?php echo $cat; ?></strong>
	  <h3 class="mb-2">
		<span class="text-dark"><?php the_title(); ?></span>
	  </h3>
	  <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
	  <a href="<?php the_permalink(); ?>">Continue reading</a>
	</div>
	<div class="bg-img-2 col-3 bg-dark" style="background-image: url('<?php echo $url ?>');" ></div>
  </div>
  </div>
</div>