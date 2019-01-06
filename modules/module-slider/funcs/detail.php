<?php

/**
 * @Project NUKEVIET 4.x
 * @Author H.Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 H.Quang. All rights reserved
 * @Createdate Sat, 29 Dec 2018 15:02:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_MODULE_SLIDER' ) ) die( 'Stop!!!' );

$page_title = $module_info['custom_title'];
$key_words = $module_info['keywords'];

$array_data = array();



$contents = nv_theme_module_slider_detail( $array_data );

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme( $contents );
include NV_ROOTDIR . '/includes/footer.php';
