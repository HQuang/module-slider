<?php

/**
 * @Project NUKEVIET 4.x
 * @Author H.Quang (quanglh268@gmail.com)
 * @Copyright (C) 2018 H.Quang. All rights reserved
 * @Createdate Sat, 29 Dec 2018 15:02:47 GMT
 */

if ( ! defined( 'NV_IS_MOD_MODULE_SLIDER' ) ) die( 'Stop!!!' );

$url = array();

$cacheFile = NV_LANG_DATA . '_Sitemap_' . NV_CACHE_PREFIX . '.cache';
$pa = NV_CURRENTTIME - 7200;

if( ( $cache = $nv_Cache->getItem( $module_name, $cacheFile ) ) != false and filemtime( NV_ROOTDIR . '/' . NV_CACHEDIR . '/' . $module_name . '/' . $cacheFile ) >= $pa )
{
    $url = unserialize( $cache );
}
else
{
    /*$sql = 'SELECT alias, add_time FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE status=1';
    $result = $db->query( $sql );
    while ( list( $alias, $publtime ) = $result->fetch( 3 ) )
    {
        $url[] = array(
            'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $alias,
            'publtime' => $publtime
        );
    }*/

    $cache = serialize($url);
    $nv_Cache->setItem( $module_name, $cacheFile, $cache );
}

nv_xmlSitemap_generate( $url );
die();