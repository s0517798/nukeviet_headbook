<?php

/**
 * @Project TMS HOLDINGS
 * @Author Ho Anh Tuan <anhtuana2k422001@gmail.com>
 * @Copyright (C) 2022 Ho Anh Tuan. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sun, 27 Nov 2022 09:22:25 GMT
 */

if (!defined('NV_IS_MOD_HEADBOOK'))
    die('Stop!!!');

$page_title = $module_info['site_title'];
$key_words = $module_info['keywords'];

$array_data = array();

//------------------
// Viết code vào đây
//------------------

$contents = nv_theme_headbook_main($array_data);

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
