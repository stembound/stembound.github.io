<?php

/********** LAKSHMI DEFINITION *************/
if ( ! isset( $content_width ) ) $content_width = 1200;
$lsi_includes_path 		= get_template_directory() . '/includes/';

/********** END LAKSHMI DEFINITION *************/

//Theme init
require_once $lsi_includes_path . 'theme-init.php';

//Sidebar
require_once $lsi_includes_path . 'theme-sidebar.php';

//Additional function
require_once $lsi_includes_path . 'theme-function.php';

//Header function
require_once $lsi_includes_path . 'header-function.php';

//Loading jQuery
require_once $lsi_includes_path . 'theme-scripts.php';

//Loading Style Css
require_once $lsi_includes_path . 'theme-styles.php';

//About Theme
require_once $lsi_includes_path . 'about-theme.php';

// Plugin Activation 
require_once $lsi_includes_path . 'child-plugins.php';


define('LAKSHMI_LITE_WEBZAKT_THEME_URL','http://webzakt.com/themes/lakshmi-multipurpose-wordpress-theme/','lakshmi-lite');
define('LAKSHMI_LITE_WEBZAKT_AUTHOR_URL','http://webzakt.com/','lakshmi-lite');
define('LAKSHMI_LITE_WEBZAKT_THEME_DOC','http://webzakt.com/docs/lakshmi-lite/0-9-0/','lakshmi-lite');