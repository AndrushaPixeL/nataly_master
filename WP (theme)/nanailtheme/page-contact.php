<?php
/**
 * Template Name: Контакты
 */
?>

<?php get_header(); ?>
<section class="main" id='main'>
<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	
</div>
</section>
	

<?php get_footer(); ?>