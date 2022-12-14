<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GMMB
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <?php //gmmb_post_thumbnail(); ?>
        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
