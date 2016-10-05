<?php

namespace k1app;

use \k1lib\templates\temply as temply;
use \k1lib\urlrewrite\url as url;
use \k1lib\html\DOM as DOM;

$body = DOM::html()->body();

include temply::load_template("header", APP_TEMPLATE_PATH);
include temply::load_template("app-header", APP_TEMPLATE_PATH);
include temply::load_template("app-footer", APP_TEMPLATE_PATH);

DOM::html()->head()->set_title(APP_TITLE . " | Auto APP");

$span = (new \k1lib\html\span("subheader"))->set_value("Tables of DB ");
$top_bar->set_title(3, $span . \k1lib\sql\get_db_database_name($db));


$db_tables = \k1lib\sql\sql_query($db, "show tables", TRUE);

$ul = new \k1lib\html\ul();

foreach ($db_tables as $row_field => $row_value) {
    $table_to_link = $row_value["Tables_in_" . \k1lib\sql\get_db_database_name($db)];
    $table_alias = \k1lib\db\security\db_table_aliases::encode($table_to_link);

    if (strstr($table_to_link, "view_")) {
        continue;
    }
    $p = new \k1lib\html\p();

    $a_crudlexs = new \k1lib\html\a(url::do_url("../crudlexs/{$table_alias}/", [], FALSE), "with rules");
    $a_crudlexs_no_rules = new \k1lib\html\a(url::do_url("../crudlexs/{$table_alias}/", ['no-rules' => 1]), "raw table");
    $ul->append_li()->set_value($table_to_link . " : " . $a_crudlexs . " - " . $a_crudlexs_no_rules);
}

$body->content()->append_child($ul);
