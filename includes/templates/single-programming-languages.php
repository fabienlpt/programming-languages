<?php
/*Template Name: Single Programming Languages*/

$id = get_the_ID();
$title = get_the_title($id);
$description = get_the_excerpt($id);
?>

<!doctype html>
<html <?php language_attributes(); ?>>


<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $block_content = do_blocks(
        '
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
        <!-- wp:post-content /-->
        </div>
        <!-- /wp:group -->'
    ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wp-site-blocks">
        <header class="wp-block-template-part site-header">
            <?php block_header_area(); ?>
        </header>
        <?= $block_content; ?>
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <!-- Container composant -->
        <div class="single-programming_language-container">
            <!-- Composant -->
            <div class="single-programming_language">
                <p class="single-programming_language-title">
                    <?= $title ?>
                </p>
                <img class="programming_language-image" src="<?= get_the_post_thumbnail_url($id) ?>" alt="Image <?= $title ?>" />

                <p class="single-programming_language-description">
                    <?= $description ?>
                </p>
                <a class="single-programming_language-link" href="<?= get_field('link', $id) ?>">
                    See more
                </a>
            </div>
            <!-- End composant -->
        </div>
        <!-- /wp:group -->
        <footer class="wp-block-template-part site-footer">
            <?php block_footer_area(); ?>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>