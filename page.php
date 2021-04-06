<?php

get_header();
?>
<?php var_dump(the_content() . the_content()); ?>
<main id="primary" class="site-main">

<?php echo "page";
//require get_template_directory() . '/template-parts/test.php' ;


var_dump(get_template_directory());
if ( have_posts() ) :

	if ( is_home() && ! is_front_page() ) :
		?>
		<header>
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		</header>
		<?php
	endif;

	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
		require get_template_directory() . '/template-parts/test.php' ;

	endwhile;

	the_posts_navigation();

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
