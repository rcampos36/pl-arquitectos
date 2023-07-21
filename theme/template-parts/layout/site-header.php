<?php
/**
 * Displays the site header.
 */
?>

<header id="masthead" class="site-header h-20 mx-auto flex items-center justify-between px-10 fixed bg-white z-10">
	<a href="/" class="brand text-center text-xl">
		<h3 class="text-xl leading-4 drop-shadow-md">PL</h3>
		<h4 class="text-base text-orange-500">Arquitectos</h4>
	</a>
	<nav id="site-navigation" aria-label="<?php esc_attr_e( 'Main Navigation', 'media703-2023' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
			)
		);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
