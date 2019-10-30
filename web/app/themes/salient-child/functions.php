<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles() {

   $nectar_theme_version = nectar_get_theme_version();

   // Include everything in the css folder.
   $cssFolderPath = get_stylesheet_directory().'/css/';
   $fileNames = array();
   foreach (new DirectoryIterator($cssFolderPath) as $file) {
      $filetype = pathinfo($file, PATHINFO_EXTENSION);

      if ($file->isFile() && $filetype == 'css') {
         array_push($fileNames, $file->getFilename());
      }
   }

   foreach ($fileNames as $name){
      wp_register_style($name, get_stylesheet_directory_uri() . '/css/' . $name, $nectar_theme_version);
      wp_enqueue_style($name);
   }

   // Base style.css
   wp_register_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version);
   wp_enqueue_style( 'salient-child-style');

   // Academicons 
   wp_register_style( 'academicons', get_stylesheet_directory_uri() . '/fonts/Academicons/css/academicons.min.css', '', '1.8.6');
   wp_enqueue_style( 'academicons');

   if ( is_rtl() ) {
      wp_register_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen');
      wp_enqueue_style('salient-rtl');
   }
}

function salient_redux_custom_fonts( $custom_fonts ) {
   return array(
      'Custom Fonts' => array(
         'CooperHewitt' => "CooperHewitt",
         'Academicons' => "Academicons"
      )
   );
}

add_filter( "redux/salient_redux/field/typography/custom_fonts", "salient_redux_custom_fonts" );

// Include everything in the child theme's templates folder.
// This doesn't seem to be the WordPress standard method of adding content to a partent theme.
// But, I have places where I need to edit peices of the parent theme without replacing entire files.
// TODO actaully I don't seem to ever need to do this. I should delete this code.
/*
$phpFolderPath = get_stylesheet_directory().'/templates/';
$fileNames = array();
foreach (new DirectoryIterator($phpFolderPath) as $file) {
   $filetype = pathinfo($file, PATHINFO_EXTENSION);

   if ($file->isFile() && $filetype == 'php') {
      array_push($fileNames, $phpFolderPath . $file->getFilename());
   }
}

foreach ($fileNames as $name){
   require_once($name);
}

 */
?>

