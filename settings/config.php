<?php

namespace k1app;

if (!defined("\k1app\IN_K1APP")) {
    die("hacking attemp '^_^ " . __FILE__);
}

date_default_timezone_set("America/Bogota");

/*
 *  NAME AND DESCRIPTION
 */

const APP_TITLE = "EeBunny: The Most Amazing Bunny E-cards";
const APP_DESCRIPTION = "Personalized Bunny E-cards for Every Occasion, Special Moments & Special Events";
const APP_KEYWORKS = "Easter Bunny,Happy Easter,Greeting Ecards,Animal Ecards,Bunny Pets,e cards,happy birthday cards,christmas cards,online greeting cards,funny greeting cards,holiday Ecards,e greetings,Mosaic,Vintage,Watercolor,Eggs,Flower Power,Retro,Flowers,E-cards, Free Ecards";
const APP_VERBOSE = 0;

/**
 * SET a CUSTOM K1MAGIC for K1.lib
 */
// # md5 -s "k1 app demo"
//MD5 ("k1 app demo") = ffb07e0d73382f34ffdd99567c39921c
\k1lib\K1MAGIC::set_value("ffb07e0d73382f34ffdd99567c39921c");

/**
 * URL REWRITE ENABLE
 */
\k1lib\urlrewrite\url::enable();

/**
 * TEMPLATE AND OUTPUT BUFFER SYSTEM ENABLE
 */
\k1lib\templates\temply::enable(\k1app\APP_MODE);

/*
 * SESSION CONFIG
 */
\k1lib\session\session_plain::enable();
\k1lib\session\session_plain::set_session_name("K1APP");
\k1lib\session\session_plain::set_use_ip_in_userhash(FALSE);
\k1lib\session\session_plain::set_app_user_levels([
    'god',
    'admin',
    'user',
    'guest'
]);

/**
 * SQL PROFILER ENABLE
 */
\k1lib\sql\profiler::enable();
/**
 * SQL LOCAL CACHE ENABLE
 */
\k1lib\sql\local_cache::enable();

/**
 * FILE UPLOADS ENABLE
 */
\k1lib\forms\file_uploads::enable(APP_UPLOADS_PATH, APP_UPLOADS_URL);
//\k1lib\forms\file_uploads::set_overwrite_existent(FALSE);
/**
 * TEMPLATE CONFIG
 */
\k1lib\html\template::enable(APP_TEMPLATE_PATH);
/*
 * DB CONFIG
 */
\k1lib\db\handler::enable("eebunny_ecards_production", 'dev-k1.eebunny', 'DB4cc3ss', 'localhost', '3306', "mysql");
/**
 * DB Security
 */
include_once 'db-tables-aliases.php';
/**
 * Controllers Config
 */
include_once 'controllers-config.php';
/*
 * OTHERS
 */
\k1lib\html\html::set_use_log(FALSE);
//ini_set('memory_limit', '100M');
//ROUND numbers on all html foundation tables
\k1lib\html\foundation\table_from_data::$float_round_default = 2;

/**
 * PAYLINE CONFIG
 */
// API Setup parameters
const PAYLINE_GATEWAY = 'https://secure.paylinedatagateway.com/api/v2/three-step';
//const PAYLINE_APIKEY = '7mVh9Ku6x3x9tD485h4XAefEt6s86k7A'; // Production
const PAYLINE_APIKEY = '2F822Rw39fx762MaV7Yy86jXGTC7sCDy'; // Testing
