<?php

/**
 * @Project TMS HOLDINGS
 * @Author HoAnhTuan <anhtuana2k422001@gmail.com>
 * @Copyright (C) 2022 HoAnhTuan. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sun, 20 Nov 2022 20:32:39 GMT
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE') or !defined('NV_IS_MODADMIN'))
    die('Stop!!!');

define('NV_IS_FILE_ADMIN', true);

$allow_func = array('headbook', 'education', 'program', 'week', 'subjects', 'class', 'time', 'teacher', 'config', 'main');
