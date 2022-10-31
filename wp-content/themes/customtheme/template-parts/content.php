<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class='post'>
    <?php if(is_single()) : ?>
        <h2 class='post-title'><?php the_title() ;?></h2>
    <?php else : ?>
        <h2 class='post-title'><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a></h2>
    <?php endif; ?>
    <p class='post-meta'>
        <?php the_time('F j, Y g:i a'); ?>
        by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
    </p>
    <?php if(has_post_thumbnail()) : ?>
        <div class='post-thumb'><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <?php if(is_single()) : ?>
        <p><?php the_content(); ?></p>
        <hr />
        <?php comments_template(); ?>
    <?php else : ?>
        <p><?php the_excerpt(); ?></p>
    <?php endif; ?>
</div>