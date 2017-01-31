<?php

namespace k1app;

// This might be different on your proyect

use k1lib\html\template as template;
use \k1lib\urlrewrite\url as url;
use k1app\k1app_template as DOM;
use k1lib\session\session_db as session_db;
use k1lib\notifications\on_DOM as DOM_notifications;

\k1lib\session\session_db::is_logged(TRUE, APP_URL . 'log/form/');
$body = DOM::html()->body();

template::load_template('header');
template::load_template('app-header');
template::load_template('app-footer');

DOM::menu_left()->set_active('nav-ecards-our');

$db_table_to_use = "ecards";
$controller_name = "eCards";

/**
 * ONE LINE config: less codign, more party time!
 */
$controller_object = new \k1lib\crudlexs\controller_base(APP_BASE_URL, $db, $db_table_to_use, $controller_name, 'k1lib-title-3');
$controller_object->set_config_from_class('\k1app\ecards_config');

$controller_object->db_table->set_field_constants(['user_login' => session_db::get_user_login()]);

/**
 * ALL READY, let's do it :)
 */
$div = $controller_object->init_board();

$controller_object->read_url_keys_text_for_create('ecard_categories');

if ($controller_object->on_board_list()) {
    $controller_object->board_list_object->set_create_enable(FALSE);
}

$controller_object->start_board();

// LIST
if ($controller_object->on_object_list()) {
    $read_url = url::do_url($controller_object->get_controller_root_dir() . "{$controller_object->get_board_read_url_name()}/--rowkeys--/", ["auth-code" => "--authcode--"]);
    $controller_object->board_list_object->list_object->apply_link_on_field_filter($read_url, \k1lib\crudlexs\crudlexs_base::USE_LABEL_FIELDS);
}

$controller_object->exec_board();

$controller_object->finish_board();

if ($controller_object->on_board_read()) {
    include 'ecard-generation.php';

    $ecard_data = $controller_object->db_table->get_data(FALSE)[1];

    $ecard_h = new ecard_generator($ecard_data['ecard_id'], ECARD_HORIZONTAL);
    $ecard_h_src = $ecard_h->get_ecard_src_base64();

    $ecard_v = new ecard_generator($ecard_data['ecard_id'], ECARD_VERTICAL);
    $ecard_v_src = $ecard_v->get_ecard_src_base64();


    if (empty($ecard_h_src)) {
        $ecard_h_src = APP_RESOURCES_URL . 'images/no-image-available.jpg';
    }
    if (empty($ecard_v_src)) {
        $ecard_v_src = APP_RESOURCES_URL . 'images/no-image-available.jpg';
    }


    /**
     * VERTICAL IMAGE
     */
//    $ecard_v_file_name = $ecard_data['ecards_image_v'];
//    if (!empty($ecard_v_file_name)) {
//        $ecard_v_file = \k1lib\forms\file_uploads::get_uploaded_file_path($ecard_v_file_name);
//        if (file_exists($ecard_v_file)) {
//            $ecard_v_url = \k1lib\forms\file_uploads::get_uploaded_file_url($ecard_v_file_name);
//
//            try {
//                $imagick_v = new \Imagick();
//                $imagick_v->readImage($ecard_v_file);
//                $imagick_v->setimageformat('jpg');
//                $imagick_v->thumbnailImage($imagick_v->getimagewidth() * $image_proportion, $imagick_v->getimageheight() * $image_proportion);
//            } catch (Exception $e) {
//                DOM_notifications::queue_mesasage('Error when creating a thumbnail: ' . $e->getMessage(), "alert");
//            }
//
//            $ecard_v_data = base64_encode($imagick_v);
//            $ecard_v_src = 'data: image/jpg ;base64,' . $ecard_v_data;
//        }
//    }
    if (!isset($ecard_v_src)) {
        $ecard_v_src = APP_RESOURCES_URL . 'images/no-image-available.jpg';
    }
    /**
     * HTML OUTPUT
     */
    $grid = new \k1lib\html\foundation\grid(1, 2, $div);

    $grid->row(1)->col(1)->small(12)->medium(12)->large(6)->append_child(new \k1lib\html\h3('Horizontal'));
    $grid->row(1)->col(1)->small(12)->medium(12)->large(6)->append_child(new \k1lib\html\img($ecard_h_src));

    $grid->row(1)->col(2)->small(12)->medium(12)->large(6)->append_child(new \k1lib\html\h3('Vertical'));
    $grid->row(1)->col(2)->small(12)->medium(12)->large(6)->append_child(new \k1lib\html\img($ecard_v_src));
}


if ($controller_object->on_board_read()) {
    $related_div = $div->append_div("row k1lib-crudlexs-related-data");
    /**
     * Related list
     */
    $related_db_table = new \k1lib\crudlexs\class_db_table($db, "ecard_sends");
    $controller_object->board_read_object->set_related_show_all_data(FALSE);
    $controller_object->board_read_object->set_related_show_new(FALSE);
    $related_list = $controller_object->board_read_object->create_related_list($related_db_table, NULL, "User Sends", ecards_sends_config::ROOT_URL, ecards_sends_config::BOARD_CREATE_URL, ecards_sends_config::BOARD_READ_URL, ecards_sends_config::BOARD_LIST_URL, TRUE);
    $related_list->append_to($related_div);
}

$body->content()->append_child($div);
