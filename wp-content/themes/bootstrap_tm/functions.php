<?php 

// Set up CSS file-loading
  
  function theme_dir() {
   return get_template_directory_uri();
  }

  function theme_styles() {
    wp_enqueue_style('bootstrap_css', theme_dir() . '/css/bootstrap.min.css');
    wp_enqueue_style('main_css', theme_dir() . '/style.css' );
  }

  add_action('wp_enqueue_scripts', 'theme_styles');


// Set up JS script-loading
  function theme_js(){
    global $wp_scripts;

    wp_register_script(
      'html5_shiv', // handle
      'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', //link-to-file
      '', //dependencies
      '', //version #
      false //load in header(`true` loads in footer) 
    );

    wp_register_script(
      'respond_js', 
      'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', 
      '', 
      '', 
      false  
    );

     wp_register_script(
      'respond_js', 
      'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', 
      '', 
      '', 
      false  
    );

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script('bootstrap_js', theme_dir() . '/js/bootstrap.min.js', array('jquery') , true);
    wp_enqueue_script('app', theme_dir() . '/js/app.js', array('bootstrap_js'), true);
  }

  add_action('wp_enqueue_scripts', 'theme_js');

?>