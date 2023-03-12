<?php
/**
 * Template Name: По умолчанию
 */
?>

<?php get_header(); ?>

<section class="main" id='main'>
<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	
</div>
</section>
	

<?php get_footer(); ?>