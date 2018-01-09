-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `home_ctrl`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `bids`
-- 

CREATE TABLE `bids` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(100) NOT NULL,
  `closing_date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- dump ตาราง `bids`
-- 

INSERT INTO `bids` VALUES (1, 'TEST COUNTDOWN', '2014-12-17 14:08:00');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `control_list`
-- 

CREATE TABLE `control_list` (
  `id` int(3) unsigned zerofill NOT NULL auto_increment,
  `name_devices` varchar(15) character set utf8 collate utf8_unicode_ci NOT NULL,
  `control_date` datetime NOT NULL,
  `status` varchar(2) NOT NULL,
  `IMEI_Number` varchar(17) NOT NULL,
  `user_control` varchar(5) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=298 ;

-- 
-- dump ตาราง `control_list`
-- 

INSERT INTO `control_list` VALUES (241, 'ไฟสวนหย่อม', '2014-11-01 12:59:04', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (240, 'ไฟห้องน้ำ', '2014-11-02 12:59:02', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (239, 'ไฟหลังบ้าน', '2014-11-29 12:59:01', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (238, 'ไฟหน้าครัว', '2014-11-03 12:59:00', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (234, 'ไฟหน้าครัว', '2014-02-18 12:45:07', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (233, 'หน้าบ้าน', '2014-03-28 12:39:23', '0', '000000', 'Admin');
INSERT INTO `control_list` VALUES (244, 'ไฟหลังบ้าน', '2014-11-04 12:59:08', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (245, 'ไฟหน้าครัว', '2014-04-23 12:59:09', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (246, 'ไฟหลังบ้าน', '2014-11-26 12:59:10', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (248, 'ไฟสวนหย่อม', '2014-11-29 12:59:12', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (297, 'ไฟหลังบ้าน', '2015-01-13 02:18:49', '1', '00000000', 'Users');
INSERT INTO `control_list` VALUES (296, 'ไฟหลังบ้าน', '2015-01-13 02:17:09', '1', '00000000', 'Users');
INSERT INTO `control_list` VALUES (295, 'ไฟสวนหย่อม', '2014-12-03 15:12:13', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (294, 'ไฟห้องน้ำ', '2014-12-03 15:12:12', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (293, 'ไฟครัว', '2014-12-03 15:04:40', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (292, 'ไฟหลังบ้าน', '2014-12-02 08:35:02', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (291, 'ไฟครัว', '2014-12-02 08:35:01', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (280, 'ไฟหลังบ้าน', '2014-12-01 23:25:18', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (279, 'ไฟห้องน้ำ', '2014-12-01 23:25:17', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (278, 'ไฟสวนหย่อม', '2014-12-01 23:25:16', '0', '', 'Admin');
INSERT INTO `control_list` VALUES (277, 'ไฟสวนหย่อม', '2014-12-01 23:25:13', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (276, 'ไฟห้องน้ำ', '2014-12-01 23:25:11', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (275, 'ไฟหลังบ้าน', '2014-12-01 23:25:08', '1', '', 'Admin');
INSERT INTO `control_list` VALUES (274, 'ไฟหน้าครัว', '2014-11-30 18:09:28', '1', '', 'Admin');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `devices`
-- 

CREATE TABLE `devices` (
  `device_id` int(2) NOT NULL auto_increment,
  `device_name` varchar(50) NOT NULL,
  `status` varchar(3) character set ucs2 NOT NULL,
  `date` datetime NOT NULL,
  `users_id` int(3) NOT NULL,
  PRIMARY KEY  (`device_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

-- 
-- dump ตาราง `devices`
-- 

INSERT INTO `devices` VALUES (1, 'ไฟครัว', '1', '2014-12-03 15:04:40', 7);
INSERT INTO `devices` VALUES (2, 'ไฟหลังบ้าน', '1', '2014-12-02 08:35:02', 7);
INSERT INTO `devices` VALUES (3, 'ไฟห้องน้ำ', '1', '2014-12-03 15:12:12', 7);
INSERT INTO `devices` VALUES (4, 'ไฟสวนหย่อม', '1', '2014-12-03 15:12:13', 7);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `ip_server`
-- 

CREATE TABLE `ip_server` (
  `id` int(1) NOT NULL,
  `ip_server` varchar(30) default NULL,
  `port` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `ip_server`
-- 

INSERT INTO `ip_server` VALUES (1, '192.168.1.200', 80);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `member`
-- 

CREATE TABLE `member` (
  `MemberID` int(2) NOT NULL auto_increment,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Email` varchar(150) NOT NULL,
  PRIMARY KEY  (`MemberID`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- dump ตาราง `member`
-- 

INSERT INTO `member` VALUES (1, 'weerachai', 'weerachai@1', 'Weerachai Nukitram', '0819876107', 'weerachai@thaicreate.com');
INSERT INTO `member` VALUES (2, 'adisorn', 'adisorn@2', 'Adisorn Bunsong', '021978032', 'adisorn@thaicreate.com');
INSERT INTO `member` VALUES (3, 'surachai', 'surachai@3', 'Surachai Sirisart', '0876543210', 'surachai@thaicreate.com');
INSERT INTO `member` VALUES (4, 'admin', '123456', 'ongard', '0862604108', 'ongardpulathane@gmail.com');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `people`
-- 

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `birthyear` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `people`
-- 

INSERT INTO `people` VALUES (0, 'นางดอกส้มสีทอง', 'F', 2010);
INSERT INTO `people` VALUES (1, 'Slayer', 'M', 1991);
INSERT INTO `people` VALUES (2, 'Petdo', 'M', 2011);
INSERT INTO `people` VALUES (3, 'มนุษย์ต่างดาว', 'F', 1500);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `users`
-- 

CREATE TABLE `users` (
  `uid` int(11) NOT NULL auto_increment,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `encrypted_password` varchar(80) NOT NULL,
  `salt` varchar(10) NOT NULL,
  `created_at` datetime default NULL,
  `update_at` datetime NOT NULL,
  `users_status` varchar(5) NOT NULL,
  `LoginStatus` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

-- 
-- dump ตาราง `users`
-- 

INSERT INTO `users` VALUES (7, 'องอาจ', 'ปุลาถาเน', 'admin ', 'ongard@gmail.com ', 'CjReeL75qf8xlV8bvUYeJD7DshcyNDI5ZjVkYTNk', '2429f5da3d', '2014-11-17 01:38:17', '2014-11-18 16:07:51', 'Admin', 0, '0000-00-00 00:00:00');
INSERT INTO `users` VALUES (15, 'hap', 'happy', 'number7', 'ongard@hotmail.com', 'Cn2aOgt8CBK3A7N+Fubp613QhO43N2I4MDBkMWQw', '77b800d1d0', '2014-07-26 16:07:40', '2014-12-02 12:26:47', 'User', 1, '2014-12-26 12:33:42');
