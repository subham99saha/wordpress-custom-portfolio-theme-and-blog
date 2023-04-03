<?php get_header(); ?>
	
		
			<?php
			$idx = 0;
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				if ( $idx == 0 ) {
					get_template_part( 'banner/banner-1', get_post_format() );
				} else if ( $idx == 1 ) {
					?><div class="row mb-2"><?php
					get_template_part( 'banner/banner-2', get_post_format() );
				} else if ( $idx == 2 ) {
					get_template_part( 'banner/banner-2', get_post_format() );
					?></div><?php
				}
				$idx++;
			endwhile; endif;
			?>
</div>
<main role="main" class="container">
  <div class="row">
	<div class="col-md-8 blog-main">
		<!--<h3 class="pb-3 mb-4 font-italic border-bottom">
			From the Firehose
		</h3>-->
		<?php
			$idx = 0;
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				if ( $idx > 2 ) {
					get_template_part( 'content/content', get_post_format() );
				}
				$idx++;
			endwhile; endif;
		?>
		
		<nav class="blog-pagination mt-5">
			<a class="btn btn-outline-secondary" href="<?php echo previous_posts( false ); ?>">Newer</a>
			<a class="btn btn-outline-primary" href="<?php echo next_posts( $wp_query->max_num_pages, false ); ?>">Older</a>            			
        </nav>
		
		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
</main><!-- /.container -->
<?php get_footer(); ?>
