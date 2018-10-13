<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

          <h1>Title</h1>
            <?php the_title(); ?>

            <h1>Content</h1>
            <?php the_content(); ?>

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>