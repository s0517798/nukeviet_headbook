<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_MODULES')) {
    exit('Stop!!!');
}

// Dùng để xóa bảng dữ liệu líc xóa module hoặc cài lại
$sql_drop_module = [];

/* 
1. $lang: ký tự khóa ngôn ngữ
2. $module_data: tên module
3. $db_config['prefix'] : đầu tố của csdl website
*/
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_cats;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_singers;';
$sql_drop_module[] = 'DROP TABLE IF EXISTS ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . '_songs;';

// Tao bảng dữ liệu khi cài đặt
$sql_create_module = $sql_drop_module;

$sql_create_module[]  = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_cats (
    id smallint(4) NOT NULL AUTO_INCREMENT,
    cat_name varchar(200) NOT NULL DEFAULT '',
    add_time int(11) NOT NULL DEFAULT 0,
    update_time int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  ";

$sql_create_module[]  = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_singers (
    id int(11) NOT NULL AUTO_INCREMENT,
    singer_name varchar(200) NOT NULL DEFAULT '',
    add_time int(11) NOT NULL DEFAULT 0,
    update_time int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY (id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  ";

$sql_create_module[]  = 'CREATE TABLE ' . $db_config['prefix'] . '_' . $lang . '_' . $module_data . "_songs (
    id int(11) NOT NULL AUTO_INCREMENT,
    song_name varchar(255) NOT NULL DEFAULT '',
    path varchar(255) NOT NULL DEFAULT '',
    singer_id int(11) NOT NULL DEFAULT 0,
    cat_id smallint(4) NOT NULL DEFAULT 0,
    add_time int(11) NOT NULL DEFAULT 0,
    update_time int(11) NOT NULL DEFAULT 0,
    PRIMARY KEY (id),
    KEY cat_id (cat_id)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  ";

