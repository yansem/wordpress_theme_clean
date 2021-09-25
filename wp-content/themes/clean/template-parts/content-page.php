<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clean
 */

?>
<?php if (has_post_thumbnail()) {
    the_post_thumbnail();
} ?>
<div class="fh5co-portfolio-description">
    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>
</div>
