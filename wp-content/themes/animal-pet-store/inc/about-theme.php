<?php
/**
 * Automobile Hub Theme Page
 *
 * @package Automobile Hub
 */

function animal_pet_store_admin_scripts() {
	wp_dequeue_script('animal-pet-store-custom-scripts');
}
add_action( 'admin_enqueue_scripts', 'animal_pet_store_admin_scripts' );

if ( ! defined( 'ANIMAL_PET_STORE_FREE_THEME_URL' ) ) {
	define( 'ANIMAL_PET_STORE_FREE_THEME_URL', 'https://www.themespride.com/products/free-pet-store-wordpress-theme' );
}
if ( ! defined( 'ANIMAL_PET_STORE_PRO_THEME_URL' ) ) {
	define( 'ANIMAL_PET_STORE_PRO_THEME_URL', 'https://www.themespride.com/products/pet-care-wordpress-theme' );
}
if ( ! defined( 'ANIMAL_PET_STORE_DEMO_THEME_URL' ) ) {
	define( 'ANIMAL_PET_STORE_DEMO_THEME_URL', 'https://page.themespride.com/animal-pet-store/' );
}
if ( ! defined( 'ANIMAL_PET_STORE_DOCS_THEME_URL' ) ) {
    define( 'ANIMAL_PET_STORE_DOCS_THEME_URL', 'https://page.themespride.com/demo/docs/animal-pet-store/' );
}
if ( ! defined( 'ANIMAL_PET_STORE_RATE_THEME_URL' ) ) {
    define( 'ANIMAL_PET_STORE_RATE_THEME_URL', 'https://wordpress.org/support/theme/animal-pet-store/reviews/#new-post' );
}
if ( ! defined( 'ANIMAL_PET_STORE_SUPPORT_THEME_URL' ) ) {
    define( 'ANIMAL_PET_STORE_SUPPORT_THEME_URL', 'https://wordpress.org/support/theme/animal-pet-store/' );
}
if ( ! defined( 'ANIMAL_PET_STORE_CHANGELOG_THEME_URL' ) ) {
    define( 'ANIMAL_PET_STORE_CHANGELOG_THEME_URL', get_template_directory() . '/readme.txt' );
}
if ( ! defined( 'ANIMAL_PET_STORE_THEME_BUNDLE' ) ) {
    define( 'ANIMAL_PET_STORE_THEME_BUNDLE', 'https://www.themespride.com/products/wordpress-theme-bundle' );
}
/**
 * Add theme page
 */
function animal_pet_store_menu() {
	add_theme_page( esc_html__( 'About Theme', 'animal-pet-store' ), esc_html__( 'Begin Installation - Import Demo', 'animal-pet-store' ), 'edit_theme_options', 'animal-pet-store-about', 'animal_pet_store_about_display' );
}
add_action( 'admin_menu', 'animal_pet_store_menu' );


/**
 * Display About page
 */
function animal_pet_store_about_display() {
	$animal_pet_store_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $animal_pet_store_theme ); ?></h1>
		<div class="about-theme">
			<div class="theme-description">
				<p class="about-text">
					<?php
					// Remove last sentence of description.
					$animal_pet_store_description = explode( '. ', $animal_pet_store_theme->get( 'Description' ) );

					array_pop( $animal_pet_store_description );

					$animal_pet_store_description = implode( '. ', $animal_pet_store_description );

					echo esc_html( $animal_pet_store_description . '.' );
				?></p>
				<p class="actions">
					<a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_FREE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'animal-pet-store' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_DEMO_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'View Demo', 'animal-pet-store' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_DOCS_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Instructions', 'animal-pet-store' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_RATE_THEME_URL ); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Rate this theme', 'animal-pet-store' ); ?></a>

					<a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_PRO_THEME_URL ); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to pro', 'animal-pet-store' ); ?></a>
				</p>
			</div>

			<div class="theme-screenshot">
				<img src="<?php echo esc_url( $animal_pet_store_theme->get_screenshot() ); ?>" />
			</div>

		</div>

		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'animal-pet-store' ); ?>">

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'animal-pet-store-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'animal-pet-store-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'One Click Demo Import', 'animal-pet-store' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'animal-pet-store-about', 'tab' => 'about_theme' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'about_theme' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'animal-pet-store' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'animal-pet-store-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Compare free Vs Pro', 'animal-pet-store' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'animal-pet-store-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Changelog', 'animal-pet-store' ); ?></a>

			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'animal-pet-store-about', 'tab' => 'get_bundle' ), 'themes.php' ) ) ); ?>" class="blink wp-bundle nav-tab<?php echo ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Get WordPress Theme Bundle', 'animal-pet-store' ); ?></a>

		</nav>

		<?php
			animal_pet_store_demo_import();

			animal_pet_store_main_screen();

			animal_pet_store_changelog_screen();

			animal_pet_store_free_vs_pro();

			animal_pet_store_get_bundle();

		?>

		<div class="return-to-dashboard">
			<?php if ( current_user_can( 'update_core' ) && isset( $_GET['updated'] ) ) : ?>
				<a href="<?php echo esc_url( self_admin_url( 'update-core.php' ) ); ?>">
					<?php is_multisite() ? esc_html_e( 'Return to Updates', 'animal-pet-store' ) : esc_html_e( 'Return to Dashboard &rarr; Updates', 'animal-pet-store' ); ?>
				</a> |
			<?php endif; ?>
			<a href="<?php echo esc_url( self_admin_url() ); ?>"><?php is_blog_admin() ? esc_html_e( 'Go to Dashboard &rarr; Home', 'animal-pet-store' ) : esc_html_e( 'Go to Dashboard', 'animal-pet-store' ); ?></a>
		</div>
	</div>
	<?php
}


/**
 * Output the Demo Import screen.
 */

function animal_pet_store_demo_import() {
    if ( isset( $_GET['page'] ) && 'animal-pet-store-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {

         // Path to whizzie.php in child theme
	    $child_whizzie_path = get_stylesheet_directory() . '/inc/whizzie.php';
	    
	    // Path to whizzie.php in parent theme
	    $parent_whizzie_path = get_template_directory() . '/inc/whizzie.php';

	    // Check if the child theme is active and if whizzie.php exists in the child theme
	    if ( file_exists( $child_whizzie_path ) ) {
	        require_once $child_whizzie_path;
	    } else {
	        // Fallback to parent theme if child theme does not have whizzie.php
	        require_once $parent_whizzie_path;
	    }

        if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) { ?>
            <div class="col card success-demo">
                <p class="imp-success"><?php echo esc_html__('Imported Successfully', 'animal-pet-store'); ?></p><br>
                <a class="button button-primary" href="<?php echo esc_url(admin_url('customize.php')); ?>" target="_blank">
                    <?php echo esc_html__('Go to Customizer', 'animal-pet-store'); ?>
                </a>
            </div>
            <script type="text/javascript">
                // Immediately redirect to Customizer
                window.location.href = "<?php echo esc_url(admin_url('customize.php')); ?>";
            </script>
        <?php } else { ?>
            <div class="col card demo-btn text-center">
                <form id="demo-importer-form" action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php" method="POST">
                    <p class="demo-title"><?php echo esc_html__('Demo Importer', 'animal-pet-store'); ?></p>
                    <p class="demo-des"><?php echo esc_html__('This theme supports importing demo content with a single click. Use the button below to quickly set up your site. You can easily customize or deactivate the imported content later through the Customizer.', 'animal-pet-store'); ?></p>
                    <i class="fas fa-long-arrow-alt-down"></i>
                    <input type="submit" name="submit" class="button button-primary with-icon" value="<?php echo esc_attr__('Begin Installation - Import Demo', 'animal-pet-store'); ?>">
                </form>
            </div>
            <script type="text/javascript">
                jQuery('#demo-importer-form').on('submit', function (e) {
                    e.preventDefault();
                    if(confirm("Are you sure you want to proceed with the demo import?")){
                        var url = new URL(location.href);
                        url.searchParams.append('import-demo', true);
                        location.href = url;
                    } else {
                        return false;
                    }
                });
            </script>
        <?php }
    }
}

/**
 * Output the main about screen.
 */
function animal_pet_store_main_screen() {
	if ( isset( $_GET['tab'] ) && 'about_theme' === $_GET['tab'] ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'animal-pet-store' ); ?></h2>
				<p><?php esc_html_e( 'All Theme Options are available via Customize screen.', 'animal-pet-store' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'animal-pet-store' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'animal-pet-store' ); ?></h2>
				<p><?php esc_html_e( 'Get genuine support from genuine people. Whether it\'s customization or compatibility, our seasoned developers deliver tailored solutions to your queries.', 'animal-pet-store' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_SUPPORT_THEME_URL ); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'animal-pet-store' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Upgrade To Premium With Straight 20% OFF.', 'animal-pet-store' ); ?></h2>
				<p><?php esc_html_e( 'Get our amazing WordPress theme with exclusive 20% off use the coupon', 'animal-pet-store' ) ?>"<input type="text" value="GETPro20" id="myInput">".</p>
				<button class="button button-primary"><?php esc_html_e( 'GETPro20', 'animal-pet-store' ); ?></button>
			</div>
		</div>
	<?php
	}
}

/**
 * Output the changelog screen.
 */
function animal_pet_store_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View changelog below:', 'animal-pet-store' ); ?></p>

			<?php
				$changelog_file = apply_filters( 'animal_pet_store_changelog_file', ANIMAL_PET_STORE_CHANGELOG_THEME_URL );
				// Check if the changelog file exists and is readable.
				if ( $changelog_file && is_readable( $changelog_file ) ) {
					WP_Filesystem();
					$changelog = $wp_filesystem->get_contents( $changelog_file );
					$changelog_list = animal_pet_store_parse_changelog( $changelog );

					echo wp_kses_post( $changelog_list );
				}
			?>
		</div>
	<?php
	}
}

/**
 * Parse changelog from readme file.
 * @param  string $content
 * @return string
 */
function animal_pet_store_parse_changelog( $content ) {
	// Explode content with ==  to juse separate main content to array of headings.
	$content = explode ( '== ', $content );

	$changelog_isolated = '';

	// Get element with 'Changelog ==' as starting string, i.e isolate changelog.
	foreach ( $content as $key => $value ) {
		if (strpos( $value, 'Changelog ==') === 0) {
	    	$changelog_isolated = str_replace( 'Changelog ==', '', $value );
	    }
	}

	// Now Explode $changelog_isolated to manupulate it to add html elements.
	$changelog_array = explode( '= ', $changelog_isolated );

	// Unset first element as it is empty.
	unset( $changelog_array[0] );

	$changelog = '<pre class="changelog">';

	foreach ( $changelog_array as $value) {
		// Replace all enter (\n) elements with </span><span> , opening and closing span will be added in next process.
		$value = preg_replace( '/\n+/', '</span><span>', $value );

		// Add openinf and closing div and span, only first span element will have heading class.
		$value = '<div class="block"><span class="heading">= ' . $value . '</span></div>';

		// Remove empty <span></span> element which newr formed at the end.
		$changelog .= str_replace( '<span></span>', '', $value );
	}

	$changelog .= '</pre>';

	return wp_kses_post( $changelog );
}

/**
 * Import Demo data for theme using catch themes demo import plugin
 */
function animal_pet_store_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'View Free vs Pro Table below:', 'animal-pet-store' ); ?></p>
			<div class="vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Theme', 'animal-pet-store' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Theme', 'animal-pet-store' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Theme Demo Set Up', 'animal-pet-store' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Templates, Color options and Fonts', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Included Demo Content', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Section Ordering', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Multiple Sections', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Additional Plugins', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Premium Technical Support', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Access to Support Forums', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Free updates', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Unlimited Domains', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Responsive Design', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Live Customizer', 'animal-pet-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn" href="<?php echo esc_url(ANIMAL_PET_STORE_PRO_THEME_URL);?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'animal-pet-store' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function animal_pet_store_get_bundle() {
	if ( isset( $_GET['tab'] ) && 'get_bundle' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">

			<p class="about-description"><?php esc_html_e( 'Get WordPress Theme Bundle', 'animal-pet-store' ); ?></p>
			<div class="col card">
				<h2 class="title"><?php esc_html_e( ' WordPress Theme Bundle of 90+ Themes At 15% Discount. ', 'animal-pet-store' ); ?></h2>
				<p><?php esc_html_e( 'Spring Offer Is To Get WP Bundle of 90+ Themes At 15% Discount use the coupon', 'animal-pet-store' ) ?>"<input type="text" value=" TPRIDE15 "  id="myInput">".</p>
				<p><a target="_blank" href="<?php echo esc_url( ANIMAL_PET_STORE_THEME_BUNDLE ); ?>" class="button button-primary"><?php esc_html_e( 'Theme Bundle', 'animal-pet-store' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}