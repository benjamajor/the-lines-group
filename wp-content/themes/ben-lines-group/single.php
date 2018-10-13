<?php get_header(); ?>

    <?php $hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="hero-image" style="background: url('<?php echo $hero['0'];?>') center top no-repeat; min-height: 300px; position: relative;">
    <div class="overlay-color"> </div>
    <div class="container">
        <div class="hero-text">
        <h1>Title</h1>
        </div>
    </div>
</div>

<?php 

$args = array(
	'post_type' => 'book_post',
);  
$your_loop = new WP_Query( $args ); 

if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post(); 
$meta = get_post_meta( $post->ID, 'Books', true ); ?>


<div class="container">
    <div class="row">
        <div class="book-post">
        <div class="col-md-4 image-left">
            <?php $feature = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); ?>
            <img src="<?php echo $feature['0'];?>">
        </div>
        <div class="col-md-8 content-right">
        <h1>Text Input</h1>
            <?php echo $meta['text']; ?>
        </div>
</div>
</div>
<?php ?>
<?php endwhile; endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>