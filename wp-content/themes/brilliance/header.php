<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- For Google Tag Manager dataLayer functionality -->
    <script>
      dataLayer = [];
    </script>  
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TMV3G6W');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMV3G6W"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
	<div class="outer" id="top">
		<?php do_action('cpotheme_before_wrapper'); ?>
		<div class="wrapper">
			<div id="topbar" class="topbar secondary-color-bg dark">
				<div class="container">
					<?php do_action('cpotheme_top'); ?>
					<div class="clear"></div>
				</div>
			</div>
			<header id="header" class="header <?php if(cpotheme_get_option('header_opaque')) echo ' header-opaque'; ?>">
				<div class="header-wrapper">
					<div class="container">
						<?php do_action('cpotheme_header'); ?>
						<div class='clear'></div>
					</div>
				</div>
			</header>
			
			<?php do_action('cpotheme_before_main'); ?>
			<div class="clear"></div>