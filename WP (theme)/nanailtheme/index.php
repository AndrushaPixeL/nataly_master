
<?php get_header(); ?>



<div class="main" id='main'>
<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
</div>
	


<?php get_footer(); ?>