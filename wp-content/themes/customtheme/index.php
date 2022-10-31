<?php get_header(); ?>
<?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', get_post_format()); ?>
    <?php endwhile; ?>
<?php else : ?>
<p><?php __('No Posts Found'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>