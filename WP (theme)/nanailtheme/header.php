<!DOCTYPE html>

<html <?php language_attributes(); ?> >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=0.85, maximum-scale=1, user-scalable=0">
<link rel="icon" href="https://na-nail.ru/favicon/favicon.ico" type="image/x-imageicon">
<link rel="apple-touch-icon" sizes="180x180" href="https://na-nail.ru/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://na-nail.ru/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://na-nail.ru/favicon/favicon-16x16.png">
<link rel="manifest" href="https://na-nail.ru/favicon/site.webmanifest">
<link rel="mask-icon" href="https://na-nail.ru/favicon/safari-pinned-tab.svg" color="#efae9d">
<meta name="apple-mobile-web-app-title" content="Na Nail">
<meta name="application-name" content="Na Nail">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta property="vk:image" content="https://na-nail.ru/wp-content/uploads/2023/03/NA_NAIL_snippet.png" />
<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('NaNail'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class( $class ) ?>>
<div class="wrapper_content">
<header class="header">
    <div class="header_wrap">
		<div class='header_link_wrap'>
		  <?php the_custom_logo();?>
		
		<div class="header_link_menu">
      <?php wp_nav_menu( array(
	'container'       => 'ul',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'header_links',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => "",
) ); ?>
</div>
			</div>
	<div class="header_buttons">
		<div href="#" class="eModal-1 header_sign_btn header_sign_mobile">
<svg viewBox="0 0 512 512" class='sign_svg'><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg> <p class='header_sign_text'>Записаться</p>
		</div>
		
            <button class="menu_button">
        <svg class="menu_button_icon" viewBox="0 -53 384 384">
          <path
            d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
          <path
            d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
          <path
            d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0" />
        </svg>
        <div class="menu_items">
			<?php wp_nav_menu( array(
	'container'       => 'ul',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'header_link_item',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => "",
) ); ?>
		</div>	
        </div>
      </button>

      <div href="#" class="eModal-1 header_sign_btn">
<svg viewBox="0 0 512 512" class='sign_svg'><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg> <p class='header_sign_text'>Записаться</p>
		</div>
		
		
    </div>
    <div class="horizontal_line">
    </div>
  </header>