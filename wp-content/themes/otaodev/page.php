<?php
/**
* Template para exibição de páginas
*
* @package WordPress
*/

// Verificação de segurança
if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<main id="primary" class="site-main">
    <?php
    while (have_posts()) :
        the_post();
        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title title">', '</h1>'); ?>
            </header>

            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large', array('class' => 'aligncenter')); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'your-theme-text-domain'),
                    'after'  => '</div>',
                ));
                ?>
            </div>

            <footer class="entry-footer">
                <?php
                edit_post_link(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post */
                            __('Edit <span class="screen-reader-text">%s</span>', 'your-theme-text-domain'),
                            array('span' => array('class' => array()))
                        ),
                        wp_kses_post(get_the_title())
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
                ?>
            </footer>
        </article>

        <?php
        // Se comentários estiverem habilitados e houver ao menos um comentário, carrega o template de comentários
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile;
    ?>
</main>

<?php
get_footer();