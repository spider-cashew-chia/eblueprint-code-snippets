<?php
/**
 * Dynamic aria-label for portfolio items
 *
 * @package WordPress
 * @subpackage eblueprint-code-snippets
 * @since 1.0.0
 */
?>
<a href="<?php the_permalink() ?>" class="pgi-image-wrap" data-cursor="View Project"
    aria-label="<?php echo esc_attr('View ' . get_the_title() . ' portfolio'); ?>">
</a>