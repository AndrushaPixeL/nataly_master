<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header(); ?>



<div class="main" id='main'>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>



 <?php get_footer(); ?>