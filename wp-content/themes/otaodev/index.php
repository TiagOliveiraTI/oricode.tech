<?php get_header(); ?>
<div class="site">
<div class="site-content">
    <main id="main" class="site-main">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', get_post_type());
        endwhile;
        the_posts_navigation();
    else :
        get_template_part('template-parts/content', 'none');
    endif;
    ?>
</main>
</div>
</div>
<?php get_footer(); ?>
