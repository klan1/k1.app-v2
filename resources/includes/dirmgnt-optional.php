<?php

namespace k1app;

use k1lib\urlrewrite\url as url;
use \k1lib\html\DOM as DOM;

// This will work because the URL internal index is from 0
$next_url_level = url::get_url_level_count();
// get the base URL to load the next one
$actual_url = url::get_this_url();
// get from the URL the next level value :   /$actual_url/next_level_value
$next_directory_name = url::set_url_rewrite_var($next_url_level, "next_directory_name", FALSE);

if ($next_directory_name !== FALSE) {
    $file_to_include = \k1lib\controllers\load_controller($next_directory_name, \k1app\APP_CONTROLLERS_PATH . $actual_url);
    include $file_to_include;
    $dirmgnt_include_sucess = true;

    $php_viewer = DOM::html()->get_element_by_id('php-viewer-button');
    if ($php_viewer) {
        $php_viewer->set_attrib('href', APP_URL . "php-file-viewer/?file=" . str_replace(APP_CONTROLLERS_PATH, "", $file_to_include) . "&auth=" . md5($file_to_include . \k1lib\K1MAGIC::get_value()));
    }
} else {
    $dirmgnt_include_sucess = false;
}
unset($next_url_level);
unset($actual_url);
unset($next_directory_name);
//unset($file_to_include);
