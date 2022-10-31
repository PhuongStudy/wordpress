<?php get_header(); ?>
<div class="container">
    <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', get_post_format()); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <p><?php __('No Post Found'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>