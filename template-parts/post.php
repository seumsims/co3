<?php
/*
Template Name: Default Post Page
*/
?>
<?php


get_header(); 
?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	<!-- do stuff ... --> <?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php

get_footer();