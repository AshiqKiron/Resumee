<?php

/**
 * Redirect to Getting Started page on theme activation
 */
function resumee_redirect_on_activation() {
	global $pagenow;

	if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

		wp_redirect( admin_url( "themes.php?page=resumee-getting-started" ) );

	}
}
add_action( 'admin_init', 'resumee_redirect_on_activation' );

function resumee_start_load_admin_scripts() {

	// Load styles only on our page
	global $pagenow;
	if( 'themes.php' != $pagenow )
		return;

	wp_register_style( 'resumee-getting-started', get_template_directory_uri() . '/inc/dashboard/resumee-info-dashboard.css', false, '1.0.0' );
	wp_enqueue_style( 'resumee-getting-started' );
}

add_action( 'admin_enqueue_scripts', 'resumee_start_load_admin_scripts' );


/* Hook a menu under Appearance */
function resumee_getting_started_menu() {
	add_theme_page(
		esc_attr__( 'Resumee: Get Started', 'resumee' ),
		esc_attr__( 'Resumee: Get Started', 'resumee' ),
		'manage_options',
		'resumee-getting-started',
		'resumee_getting_started'
	);
}

add_action( 'admin_menu', 'resumee_getting_started_menu' );



/**
 * Theme Info Page
 */
function resumee_getting_started() {

	// Theme info
	$theme = wp_get_theme( 'resumee' );
?>

		<div class="wrap getting-started">
		<div class="getting-started__header">
		<div class="row">
			<div class="col-md-5 intro">
				<h2><?php esc_html_e( 'Welcome to Resumee', 'resumee' ); ?></h2>
				<p>Version: <?php echo $theme['Version'];?></p>
				<span class="intro__version">
				<?php esc_html_e( 'Thank you for installing Resumee! You Can Now Build Your Own Online Professional Resume', 'resumee' ); ?> 
				</span>

		<!-- 	<div class="club-discount"> -->
				<!-- <p><strong> --><?php //esc_html_e( 'Exclusive 15% Discount!', 'resumee' ); ?><!-- </strong></p> -->
				<!-- <p> --><?php
						//$themes_link = '<code><strong>15PERCENT</strong></code>';
						//printf( __( 'Use the code %s to get 15&#37; off when you purchase Resumee Pro! For <strong>this month only</strong>', 'resumee' ), $themes_link );
					?>
				<!-- </p>
			</div> 
			</div> -->

		<!-- 	<div class="col-md-7">
			<div class="dashboard__block block--pro">
				<h3>Why buy Tar pro</h3>
				<img src="<?php //echo get_template_directory_uri() . '/assets/images/front-page-layouts.jpg'; ?>" alt="<?php //esc_html_e( 'Why Upgrade To Resumee Pro', 'resumee' ); ?>" />
			</div>
			</div> -->
			<h3 class="dashboard__why_buy">Why Upgrade To Resumee Pro</h3>
			<div class="col-md-12 text-block" style="padding-top: 2%;">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/image/trumbowyg.jpg'; ?>" alt="<?php esc_html_e( 'Why Upgrade To resumee Pro', 'resumee' ); ?>" />
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Trumbowyg Widget Editor</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link" target="_blank">Upgrade</a></span>
					<p>Lightweight Trumbowyg editor in widgets</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Format texts easily</li>
						<li>Organize texts just the way you want</li>
						<li>Check out the <a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/resumee#demos&utm_source=org&utm_medium=theme&utm_campaign=upsell_link'); ?>">Resumee Demo Templates</a></li>
					</ul>

					</div>
					</div>
			</div>
			</div>


			<div class="clearfix"></div>
			<div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/image/template.png'; ?>" alt="<?php esc_html_e( 'Lots of Templates', 'resumee' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title"><?php esc_attr_e('Lots of Templates', 'resumee'); ?></h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link" target="_blank">Upgrade</a></span>
					<p>One click demo import</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Say goodbye to complicated site setup</li>
						<li>Lots of Resumee templates at your fingertip</li>
					</ul>

					</div>
					</div>
			</div>
			</div>


			<div class="clearfix"></div>
			<div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/image/svg.jpg'; ?>" alt="<?php esc_html_e( 'SVG Generator', 'resumee' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">SVG Generator</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link" target="_blank">Upgrade</a></span>
					<p>Generate & use your own unique background SVG</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Unique background flavor in your resume</li>
						<li>SVG Foreground Color Option</li>
						<li>SVG Background Color Option</li>
						<li>SVG Opacity Option</li>
					</ul>

					</div>
					</div>
			</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
				<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/image/adv.jpg'; ?>" alt="<?php esc_html_e( 'Advance Widget Options', 'resumee' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Advance Widget Options</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link" target="_blank">Upgrade</a></span>
					<p>With Resumee Pro you get</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>22 Frontpage Widgets</li>
						<li>Trumbowyg Widget Editor</li>
						<li>600+ Font Awesome Icons</li>
						<li>Google Fonts</li>
						<li>Integrated SEO Schema Markup</li>
						<li>10 Widget Area</li>
						<li>9 Page Template</li>
						<li>Plugin Compatibility</li>
						<li>Social Share On Posts</li>
						<li>Dedicate Support Forum</li>
						<li>Extra Widget Options</li>
					</ul>

					</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>

			<div class="col-md-12 text-block no-bottom-margin">
				<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/image/editor.png'; ?>" alt="<?php esc_html_e( 'Trumbowyg Editor Options', 'resumee' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Trumbowyg Editor Options</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link" target="_blank">Upgrade</a></span>
					<p>With Trumbowyg Editor You Get</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Text Bold Option</li>
						<li>Text Italic Option</li>
						<li>Text Hyperlink Option</li>
						<li>Text Alignment Options</li>
						<li>Left, Right, Center & Justified Options</li>
						<li>Text Unordered List Options</li>
						<li>Text Ordered List Options</li>
						<li>HTML Text Mode</li>
						<li>Fullscreen Editor Mode</li>
					</ul>

					</div>
					</div>
				</div>
			</div><div class="clearfix"></div>
			<div class="col-md-12 text-block no-bottom-margin">
				<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
						<h3 style="padding: 10% 5% 2%;text-align: center;font-size: 30px;">What Customers' Saying About Resumee Pro</h3>
					<img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/assets/image/resumee-theme-reviews.jpg'; ?>" alt="<?php esc_html_e( 'Trumbowyg Editor Options', 'resumee' ); ?>">
					</div>
					<div style="text-align: center;float: none;" class="col-md-5 dashboard-upgrade-right">
					<h4 style="font-size: 20px;" class="dashboard-upgrade-title">*7 day Money back guarantee.</h4>
					<span  class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link" target="_blank">Upgrade</a></span>
					
					</div>
				</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
		</div>
		</div>

			<div class="col-md-12 resumee__upgrade-info-box no-top-margin">
			<div class="row flexify--center">
				<div class="col-md-7">
					<h2>Upgrade To Get The Most Out Of Resumee Pro</h2>
					<p>Build your own clean & professional online resume with Resumee Pro. Upgrade now, comes with 7 refund policy.</p>
				</div>

				<div class="col-md-5 dashboard-cta-right">
					<a class="theme__cta--download--pro" href="<?php echo esc_url('https://asphaltthemes.com/resumee#buy_pro&utm_source=org&utm_medium=resumetheme&utm_campaign=upsell_link'); ?>">Upgrade Now</a>
					
				</div>
			</div>
			</div>



		<div class="dashboard__blocks">
			<div class="col-md-4">
				<h3>Get Support</h3>
				<ol>
					<li>Resumee <a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-resumee-pro/upgrading-to-resumee-pro/#utm_source=org&utm_medium=resumeetheme&utm_campaign=upsell_link'); ?>">Documentation</a></li>
					<li>WordPress.org <a target="_blank" href="<?php echo esc_url('https://wordpress.org/support/theme/resumee'); ?>">Support Forum</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/contact/#utm_source=org&utm_medium=resumeetheme&utm_campaign=upsell_link'); ?>">Email Support</a> (Pro Users)</li>
				</ol>
			</div>

			<div class="col-md-4">
				<h3>Getting Started</h3>
				<ol>
					<li>Start <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>">Customizing</a> your website</li>
					<li>Upgrade to Pro to unlock all features</li>
				</ol>
			</div>

			<div class="col-md-4">
				<h3>Theme Documentation</h3>
				<ol>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-resumee-pro/how-to-setup-front-page/#utm_source=org&utm_medium=resumeetheme&utm_campaign=upsell_link'); ?>">How To Set up the Front Page</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-resumee-pro/upgrading-to-resumee-pro/#utm_source=org&utm_medium=resumeetheme&utm_campaign=upsell_link'); ?>">Upgrading To Resumee Pro</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/resumee/upgrading-to-resumee-pro/basic-site-settings/#utm_source=org&utm_medium=resumeetheme&utm_campaign=upsell_link'); ?>">Basic Site Settings</a></li>
				</ol>
			</div>
		</div>

		</div><!-- .getting-started -->

	<?php
}