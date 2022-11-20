<?php

/**
 * @Project TMS HOLDINGS
 * @Author HoAnhTuan <anhtuana2k422001@gmail.com>
 * @Copyright (C) 2022 HoAnhTuan. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sun, 20 Nov 2022 20:32:39 GMT
 */

if (!defined('NV_MAINFILE'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_organizations";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_organizations (
  id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'mã sở giáo dục',
  organization_name varchar(200) NOT NULL DEFAULT '' COMMENT 'tên sở giáo dục',
  status tinyint(4) NOT NULL DEFAULT 1 COMMENT 'trạng thái',
  add_time int(11) NOT NULL DEFAULT 0,
  update_time int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=MyISAM;";
