<?php

namespace k1app;

/**
 * TABLE CONFIG DEFAULT
 */
class table_config_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin', 'user'];

    /**
     * URLS
     */
    const ROOT_URL = "app/controlername";
    const BOARD_CREATE_URL = "crear";
    const BOARD_READ_URL = "leer";
    const BOARD_UPDATE_URL = "actualizar";
    const BOARD_DELETE_URL = "borrar";
    const BOARD_EXPORT_URL = "exportar";
    const BOARD_LIST_URL = "listar";

    /**
     * AVAILABILITY
     */
    const BOARD_CREATE_ENABLED = TRUE;
    const BOARD_READ_ENABLED = TRUE;
    const BOARD_UPDATE_ENABLED = TRUE;
    const BOARD_DELETE_ENABLED = TRUE;
    const BOARD_EXPORT_ENABLED = TRUE;
    const BOARD_LIST_ENABLED = TRUE;

    /**
     * NAMES
     */
    const BOARD_CREATE_NAME = "Crear registro";
    const BOARD_READ_NAME = "Leer registro";
    const BOARD_UPDATE_NAME = "Actualizar datos del registro";
    const BOARD_DELETE_NAME = "Borrar registro";
    const BOARD_EXPORT_NAME = "Exportar tabla";
    const BOARD_LIST_NAME = "Listar datos";

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin', 'user'];

}

class table_config_user_read_default_class extends table_config_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin', 'user'];

}

class table_config_user_write_default_class extends table_config_default_class {
    
}

class table_config_guest_read_default_class extends table_config_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];

}

class table_config_guest_write_default_class extends table_config_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin', 'user', 'guest'];

}

class table_config_admin_default_class extends table_config_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin'];

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin'];

}

class table_config_god_default_class extends table_config_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god'];

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god'];
    const BOARD_READ_ALLOWED_LEVELS = ['god'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god'];

}

/**
 * TABLE EXPLORER
 */
class crudlexs_config extends table_config_god_default_class{

    /**
     * URLS
     */
    const ROOT_URL = "table-explorer/crudlexs";
}

/**
 * APP USER CONFIG CLASESS FROM HERE, UPCODE PLEASE LET IT BE.
 */

class listados_config_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin', 'user'];

    /**
     * URLS
     */
    const ROOT_URL = "ch-2019/listados";
    const BOARD_CREATE_URL = "crear";
    const BOARD_READ_URL = "leer";
    const BOARD_UPDATE_URL = "actualizar";
    const BOARD_DELETE_URL = "borrar";
    const BOARD_EXPORT_URL = "export";
    const BOARD_LIST_URL = "listar";

    /**
     * AVAILABILITY
     */
    const BOARD_CREATE_ENABLED = TRUE;
    const BOARD_READ_ENABLED = TRUE;
    const BOARD_UPDATE_ENABLED = TRUE;
    const BOARD_DELETE_ENABLED = TRUE;
    const BOARD_EXPORT_ENABLED = TRUE;
    const BOARD_LIST_ENABLED = TRUE;

    /**
     * NAMES
     */
    const BOARD_CREATE_NAME = "Crear";
    const BOARD_READ_NAME = "Leer registro";
    const BOARD_UPDATE_NAME = "Actualizar regisstro";
    const BOARD_DELETE_NAME = "Borrar regisstro";
    const BOARD_EXPORT_NAME = "Export table";
    const BOARD_LIST_NAME = "Listado de registros";

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin', 'user'];

}

class cedulas_listados_config_class extends listados_config_class {

    const ROOT_URL = "ch-2019/cedulas-listado";

}
class cedulas_listados_config_class_1 extends listados_config_class {

    const ROOT_URL = "ch-2019/cedulas-listado_1";

}

class cedula_nombre_check_config_class extends listados_config_class {

    const ROOT_URL = "ch-2019/cedula-nombre-check";

}

class users_config extends listados_config_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin'];

    /**
     * URLS
     */
    const ROOT_URL = "ch-2019/util-usuarios";

    /**
     * NAMES
     */
    const BOARD_CREATE_NAME = "Crear Usuario";
    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god', 'admin', 'user'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin'];

}

class table_config_reg_candidatos extends table_config_admin_default_class {

    const CONTROLLER_ALLOWED_LEVELS = ['god', 'admin'];

    /**
     * URLS
     */
    const ROOT_URL = "registraduria/candidatos";

    /**
     * AVAILABILITY
     */
    const BOARD_CREATE_ENABLED = FALSE;
    const BOARD_UPDATE_ENABLED = FALSE;
    const BOARD_DELETE_ENABLED = FALSE;

    /**
     * NAMES
     */
    const BOARD_CREATE_NAME = "Crear Candidato";

    /**
     * ALLOWED LEVELS
     */
    const BOARD_CREATE_ALLOWED_LEVELS = ['god'];
    const BOARD_READ_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_UPDATE_ALLOWED_LEVELS = ['god'];
    const BOARD_DELETE_ALLOWED_LEVELS = ['god'];
    const BOARD_EXPORT_ALLOWED_LEVELS = ['god', 'admin'];
    const BOARD_LIST_ALLOWED_LEVELS = ['god', 'admin'];

}

