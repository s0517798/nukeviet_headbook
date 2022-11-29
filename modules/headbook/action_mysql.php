<?php

/**
 * @Project TMS HOLDINGS
 * @Author Ho Anh Tuan <anhtuana2k422001@gmail.com>
 * @Copyright (C) 2022 Ho Anh Tuan. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Sun, 27 Nov 2022 09:22:25 GMT
 */

if (!defined('NV_MAINFILE'))
    die('Stop!!!');

$sql_drop_module = array();
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_organizations";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_department";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_schools";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_grade";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_teacher";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_times";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_class";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_subjects";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_lessons";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_distribution";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_year";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_week";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_headbook";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_contents";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_summary";
$sql_drop_module[] = "DROP TABLE IF EXISTS " . $db_config['prefix'] . "_" . $module_data . "_setting";

$sql_create_module = $sql_drop_module;
$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_organizations (
  organizations_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã sở giáo dục',
  organization_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên sở giáo dục',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (organizations_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_department (
  department_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã phòng đào tạo',
  department_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên phòng đào tạo',
  organizations_id smallint(4) NOT NULL COMMENT 'Mã sở giáo dục',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (department_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_schools (
  school_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã trường',
  school_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên trường',
  department_id smallint(4) NOT NULL COMMENT 'Mã phòng đào tạo',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (school_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_grade (
  grade_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã khối',
  grade_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên khối',
  school_id smallint(4) NOT NULL COMMENT 'Mã trường',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (grade_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_teacher (
  teacher_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã giáo viên',
  userid mediumint(8) NOT NULL COMMENT 'Mã tài khoản',
  teacher_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên giáo viên',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (teacher_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_times (
  times_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã môn học',
  times_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Số thứ tự tiết',
  minutes smallint(4) NOT NULL DEFAULT 45 COMMENT 'Số phút',
  PRIMARY KEY (times_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_class (
  class_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã lớp',
  class_name varchar(4) NOT NULL DEFAULT '' COMMENT 'Tên lớp',
  grade_id smallint(4) NOT NULL COMMENT 'Mã khối',
  amount smallint(4) NOT NULL DEFAULT 0 COMMENT 'Sĩ số',
  teacher_id smallint(4) NOT NULL COMMENT 'Mã giáo viên',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (class_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_subjects (
  subject_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã môn học',
  subject_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên môn học',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (subject_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_lessons (
  lesson_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã bài học',
  lesson_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên bài học',
  lesson_order smallint(4) NOT NULL COMMENT 'Tiết',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (lesson_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_distribution (
  distribution_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã phân PPCT',
  times_id tinyint(4) NOT NULL COMMENT 'Mã tiết',
  lesson_id smallint(4) NOT NULL COMMENT 'Mã bài học',
  subject_id smallint(4) NOT NULL COMMENT 'Mã môn học',
  grade_id smallint(4) NOT NULL COMMENT 'Mã khối',
  year_id smallint(4) NOT NULL COMMENT 'Mã năm',
  PRIMARY KEY (distribution_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_year (
  year_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã năm',
  year_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên năm học',
  description varchar(200) NOT NULL DEFAULT '' COMMENT 'Mô tả',
  PRIMARY KEY (year_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_week (
  week_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã tuần ',
  week_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tuần',
  start_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian bắt đầu',
  end_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian kết thúc',
  description varchar(200) NOT NULL DEFAULT '' COMMENT 'Mô tả',
  year_id smallint(4) NOT NULL DEFAULT 0 COMMENT 'Mã năm',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  PRIMARY KEY (week_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_headbook (
  headbook_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã sổ đầu bài',
  headbook_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên sổ đầu bài ',
  class_id smallint(4) NOT NULL COMMENT 'Mã lớp',
  year_id int(4) NOT NULL COMMENT 'Mã năm',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (headbook_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_contents (
  content_id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã nội dung',
  session tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Buổi',
  times smallint(4) NOT NULL COMMENT 'STT Tiết',
  lesson_id smallint(4) NOT NULL COMMENT 'Mã bài',
  week_id smallint(4) NOT NULL COMMENT 'Mã tuần',
  headbook_id smallint(4) NOT NULL COMMENT 'Mã sổ đầu bài',
  note varchar(200) NOT NULL DEFAULT '' COMMENT 'Ghi chú',
  comment varchar(200) NOT NULL DEFAULT '' COMMENT 'Nhận xét',
  point smallint(4) NOT NULL COMMENT 'Điểm',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (content_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_summary (
  summary_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã tổng kết tuần',
  week_id smallint(4) NOT NULL COMMENT 'Mã tuần',
  headmaster_id smallint(4) NOT NULL COMMENT 'Mã gv chủ nhiệm',
  comment varchar(200) NOT NULL DEFAULT '' COMMENT 'Nhận xét',
  add_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian thêm',
  update_time int(11) NOT NULL DEFAULT 0 COMMENT 'Thời gian cập nhật',
  PRIMARY KEY (summary_id)
) ENGINE=MyISAM;";

$sql_create_module[] = "CREATE TABLE " . $db_config['prefix'] . "_" . $module_data . "_setting (
  setting_id smallint(4) NOT NULL AUTO_INCREMENT COMMENT 'Mã cấu hình ',
  setting_name varchar(200) NOT NULL DEFAULT '' COMMENT 'Tên cấu hình',
  status tinyint(1) NOT NULL DEFAULT 1 COMMENT 'Trạng thái',
  PRIMARY KEY (setting_id)
) ENGINE=MyISAM;";


// +++++++++++++++++++++++++++ Thêm dữ liệu mẫu +++++++++++++++++++++++++++

/* Sở GD&ĐT  */
$sql_create_module[] = "INSERT INTO `nv4_headbook_organizations` (`organizations_id`, `organization_name`, `add_time`, `update_time`) VALUES
(1, 'Sở GD&ĐT TP.HCM', 1669482000, 1669482000),
(2, 'Sở GD&ĐT Hà Nội', 1669482000, 1668963600),
(3, 'Sở GD&ĐT Nghệ An', 1669482000, 1668963600)";

/* Phòng GD&ĐT  */
$sql_create_module[] = "INSERT INTO `nv4_headbook_department` (`department_id`, `department_name`, `organizations_id`, `add_time`, `update_time`) VALUES
(1, 'Phòng GD&ĐT Thành phố Vinh', 3, 1669568400, 1669568400),
(2, 'Phòng GD&ĐT Huyện Quỳnh Lưu', 3, 1669568400, 1669568400),
(3, 'Phòng GD&ĐT Thị xã Cửa Lò', 3, 1669568400, 1669568400)";


/* Trường  */
$sql_create_module[] = "INSERT INTO `nv4_headbook_schools` (`school_id`, `school_name`, `department_id`, `add_time`, `update_time`) VALUES
(1, 'Trường THPT Quỳnh Lưu 1', 2, 1669568400, 1669568400),
(2, 'Trường THPT Quỳnh Lưu 2', 2, 1669568400, 1669568400),
(3, 'Trường THPT Quỳnh Lưu 3', 2, 1669568400, 1669568400),
(4, 'Trường THPT Quỳnh Lưu 4', 2, 1669568400, 1669568400)";

/* khối  */
$sql_create_module[] = "INSERT INTO `nv4_headbook_grade` (`grade_id`, `grade_name`, `school_id`, `add_time`, `update_time`) VALUES
(1, 'Khối 10', 4, 1669568400, 1669568400),
(2, 'Khối 11', 4, 1669568400, 1669568400),
(3, 'Khối 12', 4, 1669568400, 1669568400)";

/* Tài khoản  */
// $sql_create_module[] = "INSERT INTO `nv4_users` (`userid`, `group_id`, `username`, `md5username`, `password`, `email`, `first_name`, `last_name`, `gender`, `photo`, `birthday`, `sig`, `regdate`, `question`, `answer`, `passlostkey`, `view_mail`, `remember`, `in_groups`, `active`, `active2step`, `secretkey`, `checknum`, `last_login`, `last_ip`, `last_agent`, `last_openid`, `last_update`, `idsite`, `safemode`, `safekey`, `email_verification_time`, `active_obj`) VALUES
// (2, 3, 'hoanhtuan', '7b2cc47330e28464b7d1b80da9a8f1e1', '{SSHA512}CbR4Zsii4HdOpLJBZLtP1J2VLxdVc2VOmgi5GQlZAQ8xMVW5eYNg+EPE2bMyO9Zy2N73Bid+ERhAwy7j2YbYFzI1YjI=', 'anhtuana2k422001@gmail.com', 'Tuấn', 'Hồ Anh', 'M', 'uploads/users/avata_hoanhtuan_s2bqgoch_1.jpg', 978886800, 'tuấn', 1669650066, 'Cầu thủ yếu thích nhất', 'ronaldo', '', 0, 1, '3,4', 1, 0, '', '4dadbb8a8efa83df4d36b2c13694c883', 1669650319, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', '', 1669655077, 0, 0, '', 0, 'SYSTEM'),
// (3, 3, 'nguyenhaiduong', 'b34ebdf72d9213357c061064b61d6fb3', '{SSHA512}AHgMUprZA+z1Rad4Ke/+rQgXTA7GC+A1vGNGlsK1M6Q8aaCdMuiL/afCYrKk0SHaw4DQyaOuCkzLGCp8RkAjh2NiYWM=', 'nguyenhaiduong190801@gmail.com', 'Dương', 'Nguyễn Hải', 'M', 'uploads/users/pngtree-cartoon-flat-math-teacher-avatar-design-png-image_4429178_s1ulda35_1.jpg', 998154000, 'dương', 1669654982, 'Cầu thủ yếu thích nhất', 'ronaldo', '', 0, 1, '3,4', 1, 0, '', '', 0, '', '', '', 1669655139, 0, 0, '', -1, 'SYSTEM'),
// (4, 3, 'voanhquan', '16c2c1c20d2c61d8f1a37a2eb2792b87', '{SSHA512}bBER00/is5ee8cK3rWBfsFC1KdTCMjqkKnkNXRPn9rPGJeItPp6Q7HAGGkwPVar1lfJcxY70SP3+s8I7rI2YjDU5NTM=', '01642027120q@gmail.com', 'Quân', 'Võ Anh', 'M', 'uploads/users/pngtree-cartoon-flat-math-teacher-avatar-design-png-image_4429178_z181rzaw_1.jpg', 1003770000, 'quân', 1669659205, 'Cầu thủ yếu thích nhất', 'ronaldo', '', 0, 1, '4,3', 1, 0, '', '', 0, '', '', '', 0, 0, 0, '', -1, 'SYSTEM')";

/* Giáo viên  */
$sql_create_module[] = "INSERT INTO `nv4_headbook_teacher` (`teacher_id`, `userid`, `teacher_name`, `status`, `add_time`, `update_time`) VALUES
(2, 3, 'Nguyễn Hải Dương', 1, 1669568400, 1669568400),
(3, 4, 'Võ Anh Quân', 1, 1669568400, 1669568400),
(4, 2, 'Hồ Anh tuấn', 1, 1669568400, 1669568400)";

/* Tiết dạy  */
$sql_create_module[] = "INSERT INTO `nv4_headbook_times` (`times_id`, `times_name`, `minutes`) VALUES
(1, 'Tiết 1', 45),
(2, 'Tiết 2', 45),
(3, 'Tiết 3', 45),
(4, 'Tiết 4', 45),
(5, 'Tiết 5', 45),
(6, 'Tiết 6', 45),
(7, 'Tiết 7', 45),
(8, 'Tiết 8', 45),
(9, 'Tiết 9', 45),
(10, 'Tiết 10', 45),
(11, 'Tiết 11', 45),
(12, 'Tiết 12', 45),
(13, 'Tiết 13', 45),
(14, 'Tiết 14', 45),
(15, 'Tiết 15', 45),
(16, 'Tiết 16', 45),
(17, 'Tiết 17', 45),
(18, 'Tiết 18', 45),
(19, 'Tiết 19', 45),
(20, 'Tiết 20', 45),
(21, 'Tiết 21', 45),
(22, 'Tiết 22', 45),
(23, 'Tiết 23', 45),
(24, 'Tiết 24', 45),
(25, 'Tiết 25', 45),
(26, 'Tiết 26', 45),
(27, 'Tiết 27', 45),
(28, 'Tiết 28', 45),
(29, 'Tiết 29', 45),
(30, 'Tiết 30', 45)";