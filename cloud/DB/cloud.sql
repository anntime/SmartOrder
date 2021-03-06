-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 19 日 13:39
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `cloud`
--

-- --------------------------------------------------------

--
-- 表的结构 `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'company唯一的id',
  `user_id` int(11) NOT NULL COMMENT '登陆时的用户名id',
  `com_name` varchar(14) NOT NULL COMMENT '品牌名称',
  `com_eng_name` varchar(14) NOT NULL DEFAULT ' ' COMMENT '品牌英文名称',
  `com_add` varchar(14) NOT NULL DEFAULT ' ' COMMENT '总部地址',
  `com_detail_add` varchar(14) NOT NULL DEFAULT ' ' COMMENT '总部详细地址',
  `com_tel` varchar(14) NOT NULL DEFAULT ' ' COMMENT '固定电话',
  `bus_lic_num` varchar(14) NOT NULL DEFAULT ' ' COMMENT '营业执照注册号',
  `Leg_rep_name` varchar(14) NOT NULL DEFAULT ' ' COMMENT '法人代表姓名',
  `Leg_rep_id` varchar(14) NOT NULL DEFAULT ' ' COMMENT '法人代表身份证号',
  `version` varchar(14) NOT NULL DEFAULT ' ' COMMENT '版本号--修改最后日期',
  `Leg_rep_add` varchar(14) NOT NULL DEFAULT ' ' COMMENT '营业执照注册地址',
  `established_data` varchar(14) NOT NULL DEFAULT ' ' COMMENT '成立日期',
  `bus_lic_add` varchar(14) NOT NULL DEFAULT ' ' COMMENT '营业执照地址',
  `bus_lic_deta_add` varchar(14) NOT NULL DEFAULT ' ' COMMENT '营业执照详细地址',
  `bus_lic` varchar(14) NOT NULL DEFAULT ' ' COMMENT '营业执照',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cookmenu`
--

CREATE TABLE IF NOT EXISTS `cookmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '菜名ID',
  `com_id` int(14) NOT NULL,
  `styleid` int(4) NOT NULL COMMENT '菜系ID',
  `cookname` varchar(16) CHARACTER SET utf8 NOT NULL COMMENT '菜名',
  `introduce` varchar(3200) CHARACTER SET utf8 NOT NULL COMMENT '菜的简介',
  `price` decimal(8,0) NOT NULL COMMENT '单价',
  `standard` char(4) CHARACTER SET utf8 NOT NULL COMMENT '规格',
  `recommend` char(16) CHARACTER SET utf8 NOT NULL COMMENT '推荐',
  `picture` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '图片地址',
  `is_delete` int(1) NOT NULL COMMENT '逻辑删除',
  `edit_time` int(10) NOT NULL COMMENT '最后编辑时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `cookmenu`
--

INSERT INTO `cookmenu` (`id`, `com_id`, `styleid`, `cookname`, `introduce`, `price`, `standard`, `recommend`, `picture`, `is_delete`, `edit_time`) VALUES
(2, 0, 3, '水煮鱼123', '水煮鱼又称江水煮江鱼，是一道重庆市的汉族创新名菜，属于重庆渝北风味。最早流行于重庆、四川等地。看似原始的做法，实际做工考究--选新鲜生猛活鱼，又充分发挥辣椒御寒、益气养血功效，烹调出来的肉质一点也不会变韧，口感滑嫩，油而不腻。既去除了鱼的腥味，又保持了鱼的鲜嫩。满目的辣椒红亮养眼，辣而不燥，麻而不苦。“麻上头，辣过瘾”，让水煮鱼在全国流 行。', 91, '盘', '普通', '/SmartOrder/Data/Uploads/Images/54fa5da4c9383.jpg', 0, 1440822025),
(3, 0, 2, '回锅肉', '川菜里的回锅肉，是我比较喜欢的一个菜，去十家菜馆，有十种做法，味道各有特色。据说四川人家家都得会做回锅肉，作为一道传统的川菜，可见它的地位非同一般。今天我也来做一下这道经典的川菜，用的是传统的做法。', 78, '盘', '普通', '/SmartOrder/Data/Uploads/Images/552338dddbefe.png', 0, 1440815125),
(4, 0, 1, 'q', '', 0, '盘', '普通', '', 1, 0),
(5, 0, 4, '北京烤鸭', '烤鸭是具有世界声誉的北京著名菜式，由中国汉族人研制于明朝，在当时是宫廷食品。用料为优质肉食鸭北京鸭，果木炭火烤制，色泽红润，肉质肥而不腻，外脆里嫩。...', 168, '盘', '普通', '/SmartOrder/Data/Uploads/Images/55263628354af.png', 0, 1437472443),
(6, 0, 2, '白灼虾', '白灼虾是广东省广州地区一道汉族传统名菜，属粤菜系。主要食材是虾，主要烹饪工艺是白灼。广州人喜欢用白灼之法来做虾，为的是保持其鲜、甜、嫩的原味，然后将虾剥壳蘸酱汁而食。', 80, '盘', '普通', '/SmartOrder/Data/Uploads/Images/554988e86df3c.png', 0, 1437480588),
(7, 0, 3, '重庆辣子鸡', '重庆辣子鸡是一道色香味俱全的汉族名肴，属于川菜系或重庆菜。将鸡块炸至外焦内酥，与花椒、干辣椒和指天椒一同拌炒而成，成菜色泽红润，麻辣鲜香，酥香爽脆。 为了原汁原味的体现这道菜的特色， 做好的成品最好是辣椒能全部把鸡盖住， 而不是鸡块中零零星星出现几个辣椒和花椒。', 78, '盘', '普通', '/SmartOrder/Data/Uploads/Images/5549aaa1d4aff.png', 0, 1440815650),
(8, 0, 3, '瓦罐', '哈哈哈哈哈', 45, '罐', '普通', '', 1, 1435308337),
(9, 0, 5, '黄瓜', '的无法为爱而', 231, '盘', '普通', '', 1, 1435308400),
(10, 0, 3, '123', '2222', 12, '盘', '普通', '', 1, 1435318845),
(11, 0, 4, '金针菇凉拌', '金针菇，英文名："See You Tommrow!".', 45, '盘', '普通', '/SmartOrder/Data/Uploads/Images/55acaba78d9d8.png', 0, 1440818036),
(12, 0, 2, '糖醋小排', '糖醋小排，超级好吃，我最喜欢的一道菜~~~', 76, '盘', '普通', '', 0, 1440816916);

-- --------------------------------------------------------

--
-- 表的结构 `cookstyle`
--

CREATE TABLE IF NOT EXISTS `cookstyle` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '菜系ID',
  `com_id` int(11) NOT NULL,
  `stylename` varchar(16) CHARACTER SET utf8 NOT NULL COMMENT '菜系名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `cookstyle`
--

INSERT INTO `cookstyle` (`id`, `com_id`, `stylename`) VALUES
(1, 0, '招牌菜'),
(2, 0, '特色菜'),
(3, 0, '瓦罐煨汤'),
(4, 0, '农家菜'),
(5, 0, '凉菜'),
(7, 0, '香辣川菜'),
(8, 0, '川菜');

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(14) NOT NULL AUTO_INCREMENT COMMENT '唯一id',
  `com_id` varchar(14) NOT NULL COMMENT '公司的id',
  `dept_key` varchar(14) NOT NULL COMMENT '部分的key',
  `last_menu_time` varchar(14) NOT NULL COMMENT '最后更新菜单时间',
  `last_order_time` varchar(14) NOT NULL COMMENT '最后点餐时间',
  `dept_name` varchar(14) NOT NULL COMMENT '店铺名称',
  `dept_charge_name` varchar(14) NOT NULL COMMENT '店铺负责人名字',
  `dept_charge_tel` varchar(14) NOT NULL COMMENT '店铺负责人联系电话',
  `dept_charge_id` varchar(14) NOT NULL COMMENT '店铺负责人身份证',
  `dept_charge_email` varchar(14) NOT NULL COMMENT '电子邮箱',
  `dept_charge_add` varchar(14) NOT NULL COMMENT '地址',
  `dept_charge_deta_add` varchar(14) NOT NULL COMMENT '详细地址',
  `business_license` varchar(14) NOT NULL COMMENT '营业执照',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(14) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `email` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
