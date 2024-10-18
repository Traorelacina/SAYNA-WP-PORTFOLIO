<?php 
if (isset($_GET['import-demo']) && $_GET['import-demo'] == true) {

  // Function to install and activate plugins
function animal_pet_store_import_demo_content() {
    // Define the plugins you want to install and activate
    $plugins = array(
        array(
            'slug' => 'woocommerce',
            'file' => 'woocommerce/woocommerce.php',
            'url'  => 'https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip'
        ),
        array(
            'slug' => 'currency-switcher-woocommerce',
            'file' => 'currency-switcher-woocommerce/currency-switcher-woocommerce.php',
            'url'  => 'https://downloads.wordpress.org/plugin/currency-switcher-woocommerce.latest-stable.zip'
        ),
        array(
            'slug' => 'gtranslate',
            'file' => 'gtranslate/gtranslate.php',
            'url'  => 'https://downloads.wordpress.org/plugin/gtranslate.latest-stable.zip'
        ),
        array(
            'slug' => 'yith-woocommerce-wishlist',
            'file' => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
            'url'  => 'https://downloads.wordpress.org/plugin/yith-woocommerce-wishlist.latest-stable.zip'
        ),
        array(
            'slug' => 'yith-woocommerce-quick-view',
            'file' => 'yith-woocommerce-quick-view/init.php',
            'url'  => 'https://downloads.wordpress.org/plugin/yith-woocommerce-quick-view.latest-stable.zip'
        )
    );

    // Include required files for plugin installation
    if (!function_exists('plugins_api')) {
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
    }
    if (!function_exists('activate_plugin')) {
        include_once(ABSPATH . 'wp-admin/includes/plugin.php');
    }
    include_once(ABSPATH . 'wp-admin/includes/file.php');
    include_once(ABSPATH . 'wp-admin/includes/misc.php');
    include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

    // Loop through each plugin
    foreach ($plugins as $plugin) {
        $plugin_file = WP_PLUGIN_DIR . '/' . $plugin['file'];

        // Check if the plugin is installed
        if (!file_exists($plugin_file)) {
            // If the plugin is not installed, download and install it
            $upgrader = new Plugin_Upgrader();
            $result = $upgrader->install($plugin['url']);

            // Check for installation errors
            if (is_wp_error($result)) {
                error_log('Plugin installation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
                continue;
            }
        }

        // If the plugin folder exists but the plugin is not active, activate it
        if (file_exists($plugin_file) && !is_plugin_active($plugin['file'])) {
            $result = activate_plugin($plugin['file']);

            // Check for activation errors
            if (is_wp_error($result)) {
                error_log('Plugin activation failed: ' . $plugin['slug'] . ' - ' . $result->get_error_message());
            }
        }
    }
}

// Call the import function
animal_pet_store_import_demo_content();




    // ------- Create Nav Menu --------
$animal_pet_store_menuname = 'Main Menus';
$animal_pet_store_bpmenulocation = 'primary-menu';
$animal_pet_store_menu_exists = wp_get_nav_menu_object($animal_pet_store_menuname);

if (!$animal_pet_store_menu_exists) {
    $animal_pet_store_menu_id = wp_create_nav_menu($animal_pet_store_menuname);

    // Create Home Page
    $animal_pet_store_home_title = 'Home';
    $animal_pet_store_home = array(
        'post_type' => 'page',
        'post_title' => $animal_pet_store_home_title,
        'post_content' => '',
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'home'
    );
    $animal_pet_store_home_id = wp_insert_post($animal_pet_store_home);

    // Assign Home Page Template
    add_post_meta($animal_pet_store_home_id, '_wp_page_template', 'page-template/front-page.php');

    // Update options to set Home Page as the front page
    update_option('page_on_front', $animal_pet_store_home_id);
    update_option('show_on_front', 'page');

    // Add Home Page to Menu
    wp_update_nav_menu_item($animal_pet_store_menu_id, 0, array(
        'menu-item-title' => __('Home', 'animal-pet-store'),
        'menu-item-classes' => 'home',
        'menu-item-url' => home_url('/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $animal_pet_store_home_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create About Us Page with Dummy Content
    $animal_pet_store_about_title = 'About Us';
    $animal_pet_store_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $animal_pet_store_about = array(
        'post_type' => 'page',
        'post_title' => $animal_pet_store_about_title,
        'post_content' => $animal_pet_store_about_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'about-us'
    );
    $animal_pet_store_about_id = wp_insert_post($animal_pet_store_about);

    // Add About Us Page to Menu
    wp_update_nav_menu_item($animal_pet_store_menu_id, 0, array(
        'menu-item-title' => __('About Us', 'animal-pet-store'),
        'menu-item-classes' => 'about-us',
        'menu-item-url' => home_url('/about-us/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $animal_pet_store_about_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Services Page with Dummy Content
    $animal_pet_store_services_title = 'Services';
    $animal_pet_store_services_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $animal_pet_store_services = array(
        'post_type' => 'page',
        'post_title' => $animal_pet_store_services_title,
        'post_content' => $animal_pet_store_services_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'services'
    );
    $animal_pet_store_services_id = wp_insert_post($animal_pet_store_services);

    // Add Services Page to Menu
    wp_update_nav_menu_item($animal_pet_store_menu_id, 0, array(
        'menu-item-title' => __('Services', 'animal-pet-store'),
        'menu-item-classes' => 'services',
        'menu-item-url' => home_url('/services/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $animal_pet_store_services_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Pages Page with Dummy Content
    $animal_pet_store_pages_title = 'Pages';
    $animal_pet_store_pages_content = '<h2>Our Pages</h2>
    <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>';
    $animal_pet_store_pages = array(
        'post_type' => 'page',
        'post_title' => $animal_pet_store_pages_title,
        'post_content' => $animal_pet_store_pages_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'pages'
    );
    $animal_pet_store_pages_id = wp_insert_post($animal_pet_store_pages);

    // Add Pages Page to Menu
    wp_update_nav_menu_item($animal_pet_store_menu_id, 0, array(
        'menu-item-title' => __('Pages', 'animal-pet-store'),
        'menu-item-classes' => 'pages',
        'menu-item-url' => home_url('/pages/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $animal_pet_store_pages_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Create Contact Page with Dummy Content
    $animal_pet_store_contact_title = 'Contact';
    $animal_pet_store_contact_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $animal_pet_store_contact = array(
        'post_type' => 'page',
        'post_title' => $animal_pet_store_contact_title,
        'post_content' => $animal_pet_store_contact_content,
        'post_status' => 'publish',
        'post_author' => 1,
        'post_slug' => 'contact'
    );
    $animal_pet_store_contact_id = wp_insert_post($animal_pet_store_contact);

    // Add Contact Page to Menu
    wp_update_nav_menu_item($animal_pet_store_menu_id, 0, array(
        'menu-item-title' => __('Contact', 'animal-pet-store'),
        'menu-item-classes' => 'contact',
        'menu-item-url' => home_url('/contact/'),
        'menu-item-status' => 'publish',
        'menu-item-object-id' => $animal_pet_store_contact_id,
        'menu-item-object' => 'page',
        'menu-item-type' => 'post_type'
    ));

    // Set the menu location if it's not already set
    if (!has_nav_menu($animal_pet_store_bpmenulocation)) {
        $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
        if (empty($locations)) {
            $locations = array();
        }
        $locations[$animal_pet_store_bpmenulocation] = $animal_pet_store_menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

        //---Header--//
        set_theme_mod('animal_pet_store_topbar_text', '100% Secure delivery without contactcting the Courier');
        set_theme_mod('animal_pet_store_search_icon', true);
        set_theme_mod('animal_pet_store_cart_icon',true);
        set_theme_mod('animal_pet_store_currency_switcher', false);
        set_theme_mod('animal_pet_store_cart_language_translator', false);

        set_theme_mod('animal_pet_store_category_text', 'Select Category');
        set_theme_mod('animal_pet_store_product_category_number', '');

        // Slider Section
        set_theme_mod('animal_pet_store_slider_arrows', true);
        set_theme_mod('animal_pet_store_slider_short_heading', 'Get 40% Discount');

        for ($i = 1; $i <= 4; $i++) {
            $animal_pet_store_title = 'Best Food For Your Pets';
            $animal_pet_store_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book';

            // Create post object
            $my_post = array(
                'post_title'    => wp_strip_all_tags($animal_pet_store_title),
                'post_content'  => $animal_pet_store_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the post into the database
            $post_id = wp_insert_post($my_post);

            if ($post_id) {
                // Set the theme mod for the slider page
                set_theme_mod('animal_pet_store_slider_page' . $i, $post_id);

                $image_url = get_template_directory_uri() . '/assets/images/slider-img.png';
                $image_id = media_sideload_image($image_url, $post_id, null, 'id');

                if (!is_wp_error($image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($post_id, $image_id);
                }
            }
        }


        // About Page
        set_theme_mod('animal_pet_store_show_hide_product_section', true);

        $animal_pet_store_abt_title = 'Trusted Food For Your Pets';

        // Create post object
        $my_post = array(
            'post_title'    => wp_strip_all_tags($animal_pet_store_abt_title),
            'post_status'   => 'publish',
            'post_type'     => 'page',
        );

        // Insert the post into the database
        $post_id = wp_insert_post($my_post);

        if ($post_id) {
            // Set the theme mod for the slider page
            set_theme_mod('animal_pet_store_about_page', $post_id);

            $image_url = get_template_directory_uri() . '/assets/images/about-img.png';
            $image_id = media_sideload_image($image_url, $post_id, null, 'id');

            if (!is_wp_error($image_id)) {
                // Set the downloaded image as the post's featured image
                set_post_thumbnail($post_id, $image_id);
            }
        }

        // Product Section //
    set_theme_mod('animal_pet_store_product_short_heading', 'New Arrival Products');
    set_theme_mod('animal_pet_store_product_heading', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry');
    set_theme_mod('animal_pet_store_recent_product_category', 'Brand Name');

    // Define product category names and product titles
    $animal_pet_store_category_names = array('Brand Name');
    $animal_pet_store_title_array = array(
        array("BonaCiba Kitten Pouch", "Moderna Scoop & Sift", "Coco Kat Kitten Milk") // Only 3 products
    );

    foreach ($animal_pet_store_category_names as $animal_pet_store_index => $animal_pet_store_category_name) {
        // Create or retrieve the product category term ID
        $animal_pet_store_term = term_exists($animal_pet_store_category_name, 'product_cat');
        if ($animal_pet_store_term === 0 || $animal_pet_store_term === null) {
            // If the term does not exist, create it
            $animal_pet_store_term = wp_insert_term($animal_pet_store_category_name, 'product_cat');
        }

        if (is_wp_error($animal_pet_store_term)) {
            error_log('Error creating category: ' . $animal_pet_store_term->get_error_message());
            continue; // Skip to the next iteration if category creation fails
        }

        // Get the term ID if it exists
        $term_id = is_array($animal_pet_store_term) ? $animal_pet_store_term['term_id'] : $animal_pet_store_term;

        // Loop to create 3 products for each category
        for ($animal_pet_store_i = 0; $animal_pet_store_i < 3; $animal_pet_store_i++) {
            // Create product content
            $animal_pet_store_title = $animal_pet_store_title_array[$animal_pet_store_index][$animal_pet_store_i];

            // Create product post object
            $animal_pet_store_my_post = array(
                'post_title'    => wp_strip_all_tags($animal_pet_store_title),
                'post_status'   => 'publish',
                'post_type'     => 'product', // Post type set to 'product'
            );

            // Insert the product into the database
            $animal_pet_store_post_id = wp_insert_post($animal_pet_store_my_post);

            if (is_wp_error($animal_pet_store_post_id)) {
                error_log('Error creating product: ' . $animal_pet_store_post_id->get_error_message());
                continue; // Skip to the next product if creation fails
            }

            // Assign the category to the product
            wp_set_object_terms($animal_pet_store_post_id, (int)$term_id, 'product_cat');

            // Add product meta (price, etc.)
            update_post_meta($animal_pet_store_post_id, '_regular_price', 25.90); // Regular price
            update_post_meta($animal_pet_store_post_id, '_sale_price', 19.90); // Sale price
            update_post_meta($animal_pet_store_post_id, '_price', 19.90); // Active price

            // Set the product type as 'simple'
            wp_set_object_terms($animal_pet_store_post_id, 'simple', 'product_type');

            // Handle the featured image using media_sideload_image
            $animal_pet_store_image_url = get_template_directory_uri() . '/assets/images/product.png';

            // Ensure the image URL is valid or use an external URL
            $animal_pet_store_image_id = media_sideload_image($animal_pet_store_image_url, $animal_pet_store_post_id, null, 'id');

            if (is_wp_error($animal_pet_store_image_id)) {
                error_log('Error downloading image: ' . $animal_pet_store_image_id->get_error_message());
                continue; // Skip to the next product if image download fails
            }

            // Assign featured image to product
            set_post_thumbnail($animal_pet_store_post_id, $animal_pet_store_image_id);
        }
    }


    }
?>