<?php get_header(); ?>

	<div class="row">
		<div class="">

			<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
	get_template_part( 'content/content-single', get_post_format() );
endwhile; endif;
			?>
			<div class="col-sm-8 px-5 mb-5">
				<a href="javascript:history.go(-1)">Go Back</a> 
			</div>
		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div>

<?php get_footer(); ?>