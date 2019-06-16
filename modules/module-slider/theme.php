<?php

/**
 * @Project NUKEVIET 4.x
 * @Author H.Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 H.Quang. All rights reserved
 * @Createdate Sat, 29 Dec 2018 15:02:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_MODULE_SLIDER' ) ) die( 'Stop!!!' );

/**
 * nv_theme_module_slider_main()
 *
 * @param mixed $array_data
 * @return
 */
function nv_theme_module_slider_main ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );
    $xtpl->assign( 'TEMPLATE', $global_config['site_theme'] );


    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}

/**
 * nv_theme_module_slider_detail()
 *
 * @param mixed $array_data
 * @return
 */
function nv_theme_module_slider_detail ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );



    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}

/**
 * nv_theme_module_slider_search()
 *
 * @param mixed $array_data
 * @return
 */
function nv_theme_module_slider_search ( $array_data )
{
    global $global_config, $module_name, $module_file, $lang_module, $module_config, $module_info, $op;

    $xtpl = new XTemplate( $op . '.tpl', NV_ROOTDIR . '/themes/' . $module_info['template'] . '/modules/' . $module_file );
    $xtpl->assign( 'LANG', $lang_module );



    $xtpl->parse( 'main' );
    return $xtpl->text( 'main' );
}