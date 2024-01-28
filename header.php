<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karenteb
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="EXC_mQ1MtcGJf2ZZZBhU2asaQWE3FqwbxF4KKG5eY6w" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207650879-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-207650879-1');
	</script>
	<?php wp_head(); ?>
</head>
<div class="mainSiteOverlay"></div>
<div class="mobileMenuParent">
	<div class="moileMenuHeader">
		<div class="mobileMenuClickParent">
			<svg id="openMenuMob" width="25" height="25" stroke="#28416e" stroke-width="2.2" stroke-linecap="round" viewBox="2 10 20 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
			<svg id="closeMenuMob" width="25" height="25" viewBox="0 0 15 15" fill="#28416e" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path d="M2.64 1.27 7.5 6.13l4.84-4.84A.92.92 0 0 1 13 1a1 1 0 0 1 1 1 .9.9 0 0 1-.27.66L8.84 7.5l4.89 4.89A.9.9 0 0 1 14 13a1 1 0 0 1-1 1 .92.92 0 0 1-.69-.27L7.5 8.87l-4.85 4.85A.92.92 0 0 1 2 14a1 1 0 0 1-1-1 .9.9 0 0 1 .27-.66L6.16 7.5 1.27 2.61A.9.9 0 0 1 1 2a1 1 0 0 1 1-1c.24.003.47.1.64.27z"></path></svg>
		</div>
		<a href="https://karenmed.ir/" class="logoSection">
			<img src="<?php echo get_template_directory_uri() ?>/img/Logo Test.png" alt="کارن طب" width="65px">
		</a>
	</div>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'container_class'=>'mainMenu'
			)
		);
	?>
</div>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<a href="https://karenmed.ir/" class="logoSection">
			<img src="<?php echo get_template_directory_uri() ?>/img/Logo Test.png" alt="کارن طب">
			</a>
			<div class="menuSection">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
			</div>
			<!-- <div class="headerIcon">
				<a href="#" class="searchIcon">
					<svg width="20" height="20" viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg>
				</a>
			</div> -->
			<a class="callNumberHeader generalButton noArrowButton bgDarkButton" href="tel://02145302">
				<svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#d4dfeb" d="M12.2 10c-1.1-.1-1.7 1.4-2.5 1.8C8.4 12.5 6 10 6 10S3.5 7.6 4.1 6.3c.5-.8 2-1.4 1.9-2.5-.1-1-2.3-4.6-3.4-3.6C.2 2.4 0 3.3 0 5.1c-.1 3.1 3.9 7 3.9 7 .4.4 3.9 4 7 3.9 1.8 0 2.7-.2 4.9-2.6 1-1.1-2.5-3.3-3.6-3.4z"/></svg>
				<span>021-45302</span>
			</a>
		</div>
	</div>
	<div class="stickyHeaderParent">
		<div class="mainHeaderBack">
			<div class="mainHeader mainView">
				<a href="https://karenmed.ir/" class="logoSection">
					<img src="<?php echo get_template_directory_uri() ?>/img/Logo Test.png" alt="کارن طب">
				</a>
				<div class="menuSection">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container_class'=>'mainMenu'
							)
						);
					?>
				</div>
				<div class="headerIcon">
					<a class="mobileMenuSection" href="">
						<svg width="25" height="25" stroke="#28416e" stroke-width="2.2" stroke-linecap="round" viewBox="2 10 20 3" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
					</a>
					<!-- <a href="#" class="searchIcon">
						<svg width="20" height="20" viewBox="0 0 512 512"><path d="M405.1 80.9c-89.4-89.4-234.8-89.4-324.2 0s-89.4 234.8 0 324.2c82.7 82.7 213.2 88.9 303.1 18.7l66.1 66.1a28.1 28.1 0 0 0 39.8-39.8L423.8 384c70.2-89.9 64-220.4-18.7-303.1Zm-39.8 284.4c-67.4 67.5-177.2 67.5-244.6 0s-67.5-177.2 0-244.6 177.2-67.5 244.6 0 67.5 177.2 0 244.6Z"/></svg>
					</a> -->
				</div>
				<a class="callNumberHeader generalButton noArrowButton bgDarkButton" href="tel://02145302">
					<svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#d4dfeb" d="M12.2 10c-1.1-.1-1.7 1.4-2.5 1.8C8.4 12.5 6 10 6 10S3.5 7.6 4.1 6.3c.5-.8 2-1.4 1.9-2.5-.1-1-2.3-4.6-3.4-3.6C.2 2.4 0 3.3 0 5.1c-.1 3.1 3.9 7 3.9 7 .4.4 3.9 4 7 3.9 1.8 0 2.7-.2 4.9-2.6 1-1.1-2.5-3.3-3.6-3.4z"/></svg>
					<span>021-45302</span>
				</a>
			</div>
		</div>
	</div>

	<div class="stickyPhoneNumParent">
		<a href="tel://09129729702" class="stickyPhoneNumLink">
			<svg class="stickyPhoneNumIcon trin-trin" width="20" height="20" fill="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M13.839 13.84c-2.372 2.378-5.12 4.648-6.209 3.56-1.557-1.56-2.517-2.913-5.951-.155s-.796 4.598.712 6.106c1.74 1.74 8.226.091 14.64-6.32s8.06-12.898 6.32-14.64c-1.512-1.505-3.347-4.139-6.105-.711s-1.403 4.39.153 5.946c1.088 1.094-1.182 3.841-3.56 6.214z"/></svg>
			<span>Urgent call</span>
		</a>
	</div>
</div>
