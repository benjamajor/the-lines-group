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

    <div class="container">
        <div class="row">
            <div class="col-sm-12 blog-main text-center">
                <div class="intro-text">
                    <h2> Welcome to the Lines Group Book Store </h2>
                    <p> Please visit out books section to browse our current stock </p>
                </div>    
            </div>
        </div> 
    </div> 
            
    <div class="container">
        <div class="row">
            <div class="col-md-12 book-options text-center">
            <div class="col-md-4 inner-column" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/themes/ben-lines-group/assets/fiction.jpg'); background-size: cover;">
                    <div class="book-overlays">
                        <div class="overlay-color"> </div>
                        <h3> Browse Fiction</h3>
                    </div>    
                </div>


               <div class="col-md-4  inner-column" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/themes/ben-lines-group/assets/non-fiction.jpg'); background-size: cover;">
                    <div class="book-overlays">
                        <div class="overlay-color"> </div>
                        <h3> Browse Fiction</h3>
                    </div>    
                </div>

                <div class="col-md-4  inner-column" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/themes/ben-lines-group/assets/all-books.jpg'); background-size: cover; background-position: bottom;">
                    <div class="book-overlays">
                        <div class="overlay-color"> </div>
                        <h3> Browse Fiction</h3>
                    </div>    
                </div>
           </div>
        </div>
</div>
    </div>
</div> 

    <?php get_footer(); ?>

