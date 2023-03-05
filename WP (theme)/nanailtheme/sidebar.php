<?php wp_nav_menu(‘menu=left_menu’); ?>
<!— Левая панель —>
<div id=»left»>
<?php if ( !function_exists(‘dynamic_sidebar’) || !dynamic_sidebar() ) : ?>
<?php endif; ?>
<h3>Меню</h3>
<?php wp_nav_menu(‘menu=left_menu’); ?>
</div>
<!— Конец левой панели —>