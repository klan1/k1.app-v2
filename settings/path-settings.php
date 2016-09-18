<?php

namespace k1app;

// MAIN PATH
define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']);

$server_name = $_SERVER['SERVER_NAME'];

// AUTO CONFIGURATED PATHS
define("APP_ROOT", str_replace("\\", '/', dirname(dirname(__FILE__))));
define("APP_DIR", basename(APP_ROOT) . '/');
define("APP_DOMAIN", $server_name . (( $_SERVER['SERVER_PORT'] != '80') ? ":{$_SERVER['SERVER_PORT']}" : ''));


define("APP_CONTROLLERS_PATH", APP_ROOT . '/controllers/');

const APP_CONTROLLERS_PATH = \APP_CONTROLLERS_PATH;

define("APP_VIEWS_PATH", APP_ROOT . '/views/');

const APP_VIEWS_PATH = \APP_VIEWS_PATH;

define("APP_VIEWS_CRUD_PATH", APP_VIEWS_PATH . '/k1lib.crud/');
define("APP_RESOURCES_PATH", APP_ROOT . "/resources/");
define("APP_UPLOADS_PATH", APP_RESOURCES_PATH . "uploads/");
define("APP_SHELL_SCRIPTS_PATH", APP_RESOURCES_PATH . "/shell-scripts/");
define("APP_TEMPLATE_PATH", APP_RESOURCES_PATH . '/template/default/');

// INCLUDES PATH ADDITION
set_include_path(APP_RESOURCES_PATH . "/includes" . PATH_SEPARATOR . get_include_path());

// AUTO CONFIGURATED URLS 
if (\k1app\APP_MODE != 'shell') {

    /**
     * If this error is trigger you should set by hand the CONST: APP_BASE_URL
     * with your personal configuration.
     */
    if (isset($_SERVER["CONTEXT_PREFIX"])) {
        define("APP_BASE_URL", $_SERVER["CONTEXT_PREFIX"] . '/');
    } else {
        define("APP_BASE_URL", dirname(substr($_SERVER['SCRIPT_FILENAME'], strlen(DOCUMENT_ROOT))) . '/');
    }

    define("APP_DOMAIN_URL", "http://" . \APP_DOMAIN);
    define("APP_URL", APP_DOMAIN_URL . APP_BASE_URL);
    define("APP_LOGIN_URL", APP_URL . "log/form/");
    define("APP_HOME_URL", APP_URL);
    define("APP_CONTROLLERS_URL", APP_URL . "controllers/");
    define("APP_VIEWS_URL", APP_URL . "views/");
    define("APP_RESOURCES_URL", APP_URL . "resources/");
    define("APP_UPLOADS_URL", APP_RESOURCES_URL . "uploads/");
    define("APP_TEMPLATE_URL", APP_RESOURCES_URL . "template/default/");
    define("APP_TEMPLATE_IMAGES_URL", APP_RESOURCES_URL . "images/");
}