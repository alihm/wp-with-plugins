<?php 

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*-----------------------------------------------------------------------------------*/
/*	One Click Demo Import
/*-----------------------------------------------------------------------------------*/

function borderless_library_templates( $default_settings ) {
  $default_settings['parent_slug'] = 'borderless.php';
  $default_settings['page_title']  = esc_html__( 'Templates Library' , 'borderless' );
  $default_settings['menu_title']  = esc_html__( 'Templates Library' , 'borderless' );
  $default_settings['capability']  = 'import';
  $default_settings['menu_slug']   = 'borderless-templates-library';
  
  return $default_settings;
}
add_filter( 'ocdi/plugin_page_setup', 'borderless_library_templates' );

//Disable the ProteusThemes branding notice with a WP filter
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

$theme = wp_get_theme()->get( 'Name' );


/*-----------------------------------------------------------------------------------*/
/*	One Click Demo Import - Import Files
/*-----------------------------------------------------------------------------------*/

if ( is_object( $borderless_license ) && $borderless_license->get_api_key_status() ) {
  
  function ocdi_import_files() {
    return [
      
      [
        'import_file_name'           => 'Plant Shop',
        'categories'                 => [ 'Arts & Crafts', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/plant-shop/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/plant-shop/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/plant-shop/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/plant-shop-cover-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/plant-shop/',
      ],
      
      [
        'import_file_name'           => 'Yoga',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/yoga/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/yoga/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/yoga/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/yoga-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/yoga/',
      ],
      
      [
        'import_file_name'           => 'Business',
        'categories'                 => [ 'Business', 'Finance & Law' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/business/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/business/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/business/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/business-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/business/',
      ],
      
      [
        'import_file_name'           => 'Winery',
        'categories'                 => [ 'Food & Drinks', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/winery/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/winery/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/winery/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/winery-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/winery/',
      ],
      
      [
        'import_file_name'           => 'Nutritionist',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/nutritionist/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/nutritionist/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/nutritionist/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/nutritionist-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/nutritionist/',
      ],
      
      [
        'import_file_name'           => 'Dentist',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/dentist/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/dentist/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/dentist/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/dentist-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/dentist/',
      ],
      
      [
        'import_file_name'           => 'Salon',
        'categories'                 => [ 'Beauty & Hair', 'Hair' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/salon/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/salon/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/salon/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/salon-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/salon/',
      ],
      
      [
        'import_file_name'           => 'Electrician',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/electrician/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/electrician/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/electrician/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/electrician-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/electrician/',
      ],
      
      [
        'import_file_name'           => 'Mechanic',
        'categories'                 => [ 'Automotive & Cars', 'Business' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/mechanic/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/mechanic/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/mechanic/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/mechanic-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/mechanic/',
      ],
      
      [
        'import_file_name'           => 'Nursing Home',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/nursing-home/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/nursing-home/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/nursing-home/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/nursing-home-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/nursinghome/',
      ],
      
      [
        'import_file_name'           => 'Tea',
        'categories'                 => [ 'Food & Drinks', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/tea/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/tea/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/tea/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/tea-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/tea/',
      ],
      
      [
        'import_file_name'           => 'Flower',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/flower/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/flower/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/flower/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/flower-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/flower/',
      ],
      
      [
        'import_file_name'           => 'Pizza',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/pizza/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/pizza/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/pizza/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/pizza-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/pizza/',
      ],
      
      [
        'import_file_name'           => 'Pest Control',
        'categories'                 => [ 'Business', 'Farming & Gardening' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/pest-control/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/pest-control/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/pest-control/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/pest-control-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/pestcontrol/',
      ],
      
      [
        'import_file_name'           => 'Wedding',
        'categories'                 => [ 'Events', 'Weddings' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/wedding/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/wedding/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/wedding/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/wedding-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/wedding/',
      ],
      
      [
        'import_file_name'           => 'Lingerie',
        'categories'                 => [ 'Accessories', 'Fashion & Style' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/lingerie/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/lingerie/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/lingerie/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/lingerie-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/lingerie/',
      ],
      
      [
        'import_file_name'           => 'Music School',
        'categories'                 => [ 'Accessories', 'Fashion & Style' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/music-school/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/music-school/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/music-school/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/music-school-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/music-school/',
      ],
      
      [
        'import_file_name'           => 'Pianist',
        'categories'                 => [ 'Event Production', 'Events' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/pianist/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/pianist/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/pianist/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/pianist-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/pianist/',
      ],
      
      [
        'import_file_name'           => 'Manicure',
        'categories'                 => [ 'Beauty & Hair', 'Makeup & Cosmetics' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/manicure/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/manicure/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/manicure/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/manicure-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/manicure/',
      ],
      
      [
        'import_file_name'           => 'Ice Cream',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/ice-cream/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/ice-cream/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/ice-cream/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/ice-cream-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/ice-cream/',
      ],
      
      [
        'import_file_name'           => 'Home',
        'categories'                 => [ 'Home & Decor', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/home/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/home/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/home/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/home-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/home/',
      ],
      
      [
        'import_file_name'           => 'Aromatherapy',
        'categories'                 => [ 'Beauty & Hair', 'Makeup & Cosmetics' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/aromatherapy/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/aromatherapy/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/aromatherapy/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/aromatherapy-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/aromatherapy/',
      ],
      
      [
        'import_file_name'           => 'Firebrigade',
        'categories'                 => [ 'Community', 'Non-Profit' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/firebrigade/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/firebrigade/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/firebrigade/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/firebrigade-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/firebrigade/',
      ],
      
      [
        'import_file_name'           => 'Makeup',
        'categories'                 => [ 'Beauty & Hair', 'Makeup & Cosmetics' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/makeup/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/makeup/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/makeup/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/makeup-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/makeup/',
      ],
      
      [
        'import_file_name'           => 'Barber',
        'categories'                 => [ 'Beauty & Hair', 'Hair' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/barber/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/barber/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/barber/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/barber-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/barber/',
      ],
      
      [
        'import_file_name'           => 'Eco Food',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/eco-food/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/eco-food/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/eco-food/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/eco-food-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/eco-food/',
      ],
      
      [
        'import_file_name'           => 'Massage',
        'categories'                 => [ 'Health & Wellness', 'Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/massage/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/massage/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/massage/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/massage-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/massage/',
      ],
      
      [
        'import_file_name'           => 'Shoes',
        'categories'                 => [ 'Accessories', 'Fashion & Style' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/shoes/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/shoes/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/shoes/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/shoes-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/shoes/',
      ],
      
      [
        'import_file_name'           => 'Oculist',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/oculist/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/oculist/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/oculist/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/oculist-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/oculist/',
      ],
      
      [
        'import_file_name'           => 'Carpenter',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/carpenter/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/carpenter/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/carpenter/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/carpenter-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/carpenter/',
      ],
      
      [
        'import_file_name'           => 'Honey',
        'categories'                 => [ 'Food & Drinks', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/honey/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/honey/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/honey/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/honey-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/honey/',
      ],
      
      [
        'import_file_name'           => 'Cleaner',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/cleaner/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/cleaner/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/cleaner/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/cleaner-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/cleaner/',
      ],
      
      [
        'import_file_name'           => 'Scooter Rental',
        'categories'                 => [ 'Automotive & Cars', 'Business' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/scooter-rental/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/scooter-rental/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/scooter-rental/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/scooter-rental-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/scooter-rental/',
      ],
      
      [
        'import_file_name'           => 'Barman',
        'categories'                 => [ 'Bar & Club', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/barman/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/barman/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/barman/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/barman-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/barman/',
      ],
      
      [
        'import_file_name'           => 'Model',
        'categories'                 => [ 'Fashion', 'Fashion & Style' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/model/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/model/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/model/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/model-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/model/',
      ],
      
      [
        'import_file_name'           => 'Charity',
        'categories'                 => [ 'Community', 'Non-Profit' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/charity/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/charity/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/charity/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/charity-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/charity/',
      ],
      
      [
        'import_file_name'           => 'Church',
        'categories'                 => [ 'Community', 'Religion' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/church/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/church/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/church/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/church-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/church/',
      ],
      
      [
        'import_file_name'           => 'Horse',
        'categories'                 => [ 'Health & Wellness', 'Sports & Fitness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/horse/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/horse/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/horse/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/horse-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/horse/',
      ],
      
      [
        'import_file_name'           => 'Paintball',
        'categories'                 => [ 'Business', 'Entertainment' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/paintball/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/paintball/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/paintball/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/paintball-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/paintball/',
      ],
      
      [
        'import_file_name'           => 'Organic',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/organic/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/organic/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/organic/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/organic-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/organic/',
      ],
      
      [
        'import_file_name'           => 'Renovate',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/renovate/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/renovate/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/renovate/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/renovate-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/renovate/',
      ],
      
      [
        'import_file_name'           => 'Rally Driver',
        'categories'                 => [ 'Health & Wellness', 'Sports & Fitness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/rally-driver/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/rally-driver/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/rally-driver/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/rally-driver-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/rallydriver/',
      ],
      
      [
        'import_file_name'           => 'Artist Minimal',
        'categories'                 => [ 'Creative Arts', 'Visual Arts' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/artist-minimal/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/artist-minimal/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/artist-minimal/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/artist-minimal-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/artist-minimal/',
      ],
      
      [
        'import_file_name'           => 'Jewelry Showcase',
        'categories'                 => [ 'Jewelry & Accessories', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/jewelry-showcase/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/jewelry-showcase/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/jewelry-showcase/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/jewelry-showcase-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/jewelry-showcase/',
      ],
      
      [
        'import_file_name'           => 'Yoga Studio',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/yoga-studio/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/yoga-studio/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/yoga-studio/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/yoga-studio-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/yoga-studio/',
      ],
      
      [
        'import_file_name'           => 'Rattan Furniture',
        'categories'                 => [ 'Architecture', 'Design' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/rattan-furniture/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/rattan-furniture/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/rattan-furniture/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/rattan-furniture-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/rattan-furniture/',
      ],
      
      [
        'import_file_name'           => 'Perfum Store',
        'categories'                 => [ 'Fashion & Clothing', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/perfum-store/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/perfum-store/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/perfum-store/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/perfume-store-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/perfum-store/',
      ],
      
      [
        'import_file_name'           => 'Hairdresser',
        'categories'                 => [ 'Beauty & Hair', 'Hair' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/hairdresser/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/hairdresser/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/hairdresser/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/hairdresser-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/hairdresser/',
      ],
      
      [
        'import_file_name'           => 'Shoe Shop',
        'categories'                 => [ 'Fashion & Clothing', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/shoe-shop/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/shoe-shop/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/shoe-shop/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/shoe-shop-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/shoe-shop/',
      ],
      
      [
        'import_file_name'           => 'Pharmacy',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/pharmacy/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/pharmacy/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/pharmacy/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/pharmacy-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/pharmacy/',
      ],
      
      [
        'import_file_name'           => 'Tea House',
        'categories'                 => [ 'Beauty & Wellness', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/tea-house/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/tea-house/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/tea-house/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/tea-house-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/tea-house/',
      ],
      
      [
        'import_file_name'           => 'Pasta',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/pasta/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/pasta/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/pasta/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/pasta-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/pasta/',
      ],
      
      [
        'import_file_name'           => 'Chocolate',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/chocolate/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/chocolate/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/chocolate/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/chocolate-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/chocolate/',
      ],
      
      [
        'import_file_name'           => 'Floristry',
        'categories'                 => [ 'Business', 'Farming & Gardening' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/floristry/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/floristry/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/floristry/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/floristry-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/floristry/',
      ],
      
      [
        'import_file_name'           => 'Crossfit',
        'categories'                 => [ 'Health & Wellness', 'Sports & Fitness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/crossfit/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/crossfit/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/crossfit/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/crossfit-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/crossfit/',
      ],
      
      [
        'import_file_name'           => 'Ballet',
        'categories'                 => [ 'Health & Wellness', 'Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/ballet/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/ballet/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/ballet/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/ballet-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/ballet/',
      ],
      
      [
        'import_file_name'           => 'Architect',
        'categories'                 => [ 'Architecture', 'Design' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/architect/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/architect/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/architect/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/architect-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/architect/',
      ],
      
      [
        'import_file_name'           => 'Antique Shop',
        'categories'                 => [ 'Business', 'Home & Decor', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/antique-shop/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/antique-shop/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/antique-shop/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/antique-store-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/antique-shop/',
      ],
      
      [
        'import_file_name'           => 'Biker Club',
        'categories'                 => [ 'Health & Wellness', 'Sports & Fitness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/biker-club/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/biker-club/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/biker-club/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/biker-club-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/biker-club/',
      ],
      
      [
        'import_file_name'           => 'Security',
        'categories'                 => [ 'Home & Decor', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/security/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/security/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/security/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/security-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/security/',
      ],
      
      [
        'import_file_name'           => 'Resort',
        'categories'                 => [ 'Business', 'Entertainment' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/resort/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/resort/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/resort/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/resort-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/resort/',
      ],
      
      [
        'import_file_name'           => 'Modeling Agency',
        'categories'                 => [ 'Fashion', 'Fashion & Style' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/modeling-agency/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/modeling-agency/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/modeling-agency/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/modeling-agency-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/modeling-agency/',
      ],
      
      [
        'import_file_name'           => 'Influencer',
        'categories'                 => [ 'Video', 'Vlog' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/influencer/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/influencer/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/influencer/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/influencer-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/influencer/',
      ],
      
      [
        'import_file_name'           => 'Mining',
        'categories'                 => [ 'Business', 'Services & Maintenance' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/mining/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/mining/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/mining/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/mining-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/mining/',
      ],
      
      [
        'import_file_name'           => 'Manicure 2',
        'categories'                 => [ 'Beauty & Hair', 'Makeup & Cosmetics' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/manicure-2/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/manicure-2/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/manicure-2/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/manicure-2-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/manicure-2/',
      ],
      
      [
        'import_file_name'           => 'Cakes',
        'categories'                 => [ 'Cafe & Bakery', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/cakes/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/cakes/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/cakes/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/cakes-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/cakes/',
      ],
      
      [
        'import_file_name'           => 'Fresh Vegetables',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/fresh-vegetables/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/fresh-vegetables/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/fresh-vegetables/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/fresh-vegetables-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/fresh-vegetables/',
      ],
      
      [
        'import_file_name'           => 'Car',
        'categories'                 => [ 'Automotive & Cars', 'Business' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/car/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/car/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/car/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/car-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/car/',
      ],
      
      [
        'import_file_name'           => 'Psychologist',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/psychologist/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/psychologist/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/psychologist/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/psychologist-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/psychologist/',
      ],
      
      [
        'import_file_name'           => 'Lawyer',
        'categories'                 => [ 'Business', 'Finance & Law' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/lawyer/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/lawyer/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/lawyer/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/lawyer-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/lawyer/',
      ],
      
      [
        'import_file_name'           => 'Photo',
        'categories'                 => [ 'Commercial & Editorial', 'Photography' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/photo/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/photo/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/photo/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/photos-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/photo/',
      ],
      
      [
        'import_file_name'           => 'Herbal',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/herbal/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/herbal/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/herbal/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/herbal-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/herbal/',
      ],
      
      [
        'import_file_name'           => 'Newborn Photo Shoot',
        'categories'                 => [ 'Events & Portraits', 'Photography' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/newborn-photo-shoot/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/newborn-photo-shoot/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/newborn-photo-shoot/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/newborn-photo-shoot-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/newborn-photo-shoot/',
      ],
      
      [
        'import_file_name'           => 'Bakery',
        'categories'                 => [ 'Cafe & Bakery', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/bakery/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/bakery/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/bakery/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/bakery-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/bakery/',
      ],
      
      [
        'import_file_name'           => 'Fashion Agency',
        'categories'                 => [ 'Fashion', 'Fashion & Style' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/fashion-agency/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/fashion-agency/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/fashion-agency/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/fashion-agency-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/fashion-agency/',
      ],
      
      [
        'import_file_name'           => 'Winery 2',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/winery-2/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/winery-2/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/winery-2/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/winery-2-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/winery-2/',
      ],
      
      [
        'import_file_name'           => 'Food Truck',
        'categories'                 => [ 'Catering & Chef', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/food-truck/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/food-truck/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/food-truck/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/food-truck-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/food-truck/',
      ],
      
      [
        'import_file_name'           => 'Eco Food 2',
        'categories'                 => [ 'Food & Drinks', 'Restaurants & Food' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/eco-food-2/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/eco-food-2/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/eco-food-2/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/eco-food-2-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/eco-food-2/',
      ],
      
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );
  
  
  /*-----------------------------------------------------------------------------------*/
  /*	One Click Demo Import - After Setup
  /*-----------------------------------------------------------------------------------*/
  
  function ocdi_after_import( $demos ) {
    
    if ( 'Plant Shop' === $demos['import_file_name'] ) {
      
      // Assign menus to their locations.
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Yoga' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      $blog_page_id  = get_page_by_title( 'BLOG' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Business' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Winery' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Blog' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    }
    
    elseif ( 'Nutritionist' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Journal' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Dentist' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Latest News' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Salon' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Electrician' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Blog' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Mechanic' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Mechanic' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Fashion' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Nursing Home' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Tea' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Tea Shop' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Flower' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Pizza' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Pest Control' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Wedding' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Lingerie' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Music School' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Pianist' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Manicure' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Ice Cream' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Home' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Aromatherapy' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Fire Brigade' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Makeup' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Barber' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Eco Food' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Massage' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Shoes' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Oculist' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Carpenter' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Honey' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Cleaner' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Scooter Rental' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Barman' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Model' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Charity' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Church' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'About' );
      $blog_page_id  = get_page_by_title( 'News' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Horse' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Paintball' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Organic' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Renovate' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Rally Driver' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Artist Minimal' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Jewelry Showcase' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Yoga Studio' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Rattan Furniture' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Perfume Store' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Hairdresser' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Shoe Shop' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Pharmacy' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Pasta' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Chocolate' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Floristry' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Crossfit' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Ballet' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Architect' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Antique Shop' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Biker Club' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Security' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Resort' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Modeling Agency' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Influencer' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Blog' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Mining' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Manicure 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Cakes' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Fresh Vegetables' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Car' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Psychologist' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Lawyer' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Photo' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Herbal' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Newborn Photo Shoot' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Bakery' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Fashion Agency' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Winery 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Food Truck' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Eco Food 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Extreme Sports' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Latest News' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Landscaping' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Animal Shelter' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Massage 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Cottage' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Cleaner 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Stylist' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Vet' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Biker' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Wedding Dresses' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Hairdresser 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Upholsterer' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Start' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Construction' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      $blog_page_id  = get_page_by_title( 'ARTICLES' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Landscaper' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      $blog_page_id  = get_page_by_title( 'NEWS' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Interior Design' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Blog' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Billiard' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Model 2' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Optics' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Internet' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Start' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Taxi' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      $blog_page_id  = get_page_by_title( 'NEWS' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    } elseif ( 'Pregnancy' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      $blog_page_id  = get_page_by_title( 'Blog' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    }
    
  }
  add_action( 'ocdi/after_import', 'ocdi_after_import' );
  
} elseif ( $theme == "Anzu" ) {
  
  function ocdi_import_files() {
    return [
      
      [
        'import_file_name'           => 'Plant Shop',
        'categories'                 => [ 'Arts & Crafts', 'Store' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/plant-shop/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/plant-shop/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/plant-shop/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/plant-shop-cover-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/plant-shop/',
      ],
      
      [
        'import_file_name'           => 'Yoga',
        'categories'                 => [ 'Health', 'Health & Wellness' ],
        'import_file_url'            => 'https://cdn.visualmodo.com/library/templates/yoga/content.xml',
        'import_widget_file_url'     => 'https://cdn.visualmodo.com/library/templates/yoga/widgets.wie',
        'import_customizer_file_url' => 'https://cdn.visualmodo.com/library/templates/yoga/customize.dat',
        'import_preview_image_url'   => 'https://visualmodo.com/wp-content/uploads/2022/03/yoga-750x563.png',
        'preview_url'                => 'https://library.visualmodo.com/yoga/',
      ],
      
    ];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );
  
  
  /*-----------------------------------------------------------------------------------*/
  /*	One Click Demo Import - After Setup
  /*-----------------------------------------------------------------------------------*/
  
  function ocdi_after_import( $demos ) {
    
    if ( 'Plant Shop' === $demos['import_file_name'] ) {
      
      // Assign menus to their locations.
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'Home' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      
    } elseif ( 'Yoga' === $demos['import_file_name'] ) {
      
      $primary = get_term_by( 'name', 'Main', 'nav_menu' );
      
      set_theme_mod( 'nav_menu_locations', [
        'primary' => $primary->term_id,
        ]
      );
      
      // Assign front page and posts page (blog page).
      $front_page_id = get_page_by_title( 'HOME' );
      $blog_page_id  = get_page_by_title( 'BLOG' );
      
      update_option( 'show_on_front', 'page' );
      update_option( 'page_on_front', $front_page_id->ID );
      update_option( 'page_for_posts', $blog_page_id->ID );
      
    }
    
  }
  add_action( 'ocdi/after_import', 'ocdi_after_import' );
  
}