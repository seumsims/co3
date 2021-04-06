<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CO_1
 */

get_header(); 
?>
<?php get_template_part('post'); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	<!-- do stuff ... --> <?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php
//get_sidebar();
get_footer();
