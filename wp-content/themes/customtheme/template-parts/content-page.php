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
<div class="container">
    <div class='post'>
        <h2 class='post-title'><?php the_title() ;?></h2>
        <p><?php the_content(); ?></p>
    </div>
</div>