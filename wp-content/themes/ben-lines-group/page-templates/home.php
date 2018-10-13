<?php
/**
 * Template Name: Full Width Homepage
 *
 * @package WordPress
 * @subpackage Ben Lines Group
 **/

?>

<?php get_header(); ?>

    <?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

    <div class="hero-image" style="background: url('<?php echo $hero['0'];?>') center top no-repeat; min-height: 500px; position: relative;">
        <div class="overlay-color"> </div>
        <div class="container">
            <div class="hero-text">
                <h1> The Lines Group <br> Book Store </h1>
            </div>
        </div>
    </div>

	<div class="row">

		<div class="col-sm-12 blog-main">

		</div> <!-- /.blog-main -->

	</div> <!-- /.row -->

<?php get_footer(); ?>

