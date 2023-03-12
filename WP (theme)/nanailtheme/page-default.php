<?php
/**
 * Template Name: По умолчанию
 */
?>

<?php get_header(); ?>
<section class="content_wrap">
<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	
</div></section>
	

<?php get_footer(); ?>