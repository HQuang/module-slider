<?php

/**
 * @Project NUKEVIET 4.x
 * @Author H.Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 H.Quang. All rights reserved
 * @Createdate Sat, 29 Dec 2018 15:02:47 GMT
 */
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN')) die('Stop!!!');

define('NV_IS_FILE_ADMIN', true);
require_once NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';

$allow_func = array(
    'main',
    'rows',
    'config',
    'rows-items'
);