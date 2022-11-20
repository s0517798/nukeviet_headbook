<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $lang_module['list_song'];

// Khởi tạo templates

/**
 *  $global_config['module_theme'] => biểu thị tên giao diện admin đang dùng
 */
$xtpl = new XTemplate('main.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);

$song_name = "Em của ngày hôm qua - MTP";
$array_song  = [
    1 => [
        'stt' => 1,
        'name' => "Em của ngày hôm qua"
    ],
    2 => [
        'stt' => 2,
        'name' => "Anh yêu em nhất mà"
    ],
    3 => [
        'stt' => 3,
        'name' => "Tôi yêu việt nam"
    ],
    4 => [
        'stt' => 4,
        'name' => "Anh yêu em nhất mà"
    ],
    5 => [
        'stt' => 5,
        'name' => "Tôi yêu việt nam"
    ]
];

// Vòng lặp
foreach ($array_song as $key) {
    $xtpl->assign('SONG',$key );
    $xtpl->parse('main.songs');
}

// $xtpl->assign('SONG_NAME',$song_name );
$xtpl->assign('LIST_SONG',$array_song);
$xtpl->assign('LANG',$lang_module);

$xtpl->parse('main.result');
$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
