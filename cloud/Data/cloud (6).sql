-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 10 月 18 日 14:56
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
  `Leg_rep_tel` varchar(14) NOT NULL DEFAULT ' ' COMMENT '法人电话',
  `Leg_rep_email` varchar(14) NOT NULL COMMENT '负责人邮箱',
  `bus_lic_num` varchar(14) NOT NULL DEFAULT ' ' COMMENT '营业执照注册号',
  `Leg_rep_name` varchar(14) NOT NULL DEFAULT ' ' COMMENT '法人代表姓名',
  `Leg_rep_id` varchar(14) NOT NULL DEFAULT ' ' COMMENT '法人代表身份证号',
  `version` varchar(14) NOT NULL DEFAULT ' ' COMMENT '版本号--修改最后日期',
  `established_data` varchar(14) NOT NULL DEFAULT ' ' COMMENT '成立日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `company`
--

INSERT INTO `company` (`id`, `user_id`, `com_name`, `com_eng_name`, `Leg_rep_tel`, `Leg_rep_email`, `bus_lic_num`, `Leg_rep_name`, `Leg_rep_id`, `version`, `established_data`) VALUES
(1, 1, '明台d', ' dc', ' d', 'd', ' d', ' dc', ' d', ' ', ' d'),
(2, 2, '明楼', ' ', ' ', '', ' ', ' ', ' ', ' ', ' ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- 转存表中的数据 `cookmenu`
--

INSERT INTO `cookmenu` (`id`, `com_id`, `styleid`, `cookname`, `introduce`, `price`, `standard`, `recommend`, `picture`, `is_delete`, `edit_time`) VALUES
(2, 1, 3, '水煮鱼', '水煮鱼又称江水煮江鱼，是一道重庆市的汉族创新名菜，属于重庆渝北风味。最早流行于重庆、四川等地。看似原始的做法，实际做工考究--选新鲜生猛活鱼，又充分发挥辣椒御寒、益气养血功效，烹调出来的肉质一点也不会变韧，口感滑嫩，油而不腻。既去除了鱼的腥味，又保持了鱼的鲜嫩。满目的辣椒红亮养眼，辣而不燥，麻而不苦。“麻上头，辣过瘾”，让水煮鱼在全国流 行。', 48, '盘', '推荐', '/cloud/Data/Uploads/Images/5619c3e939641.jpg', 0, 1444551621),
(3, 1, 2, '回锅肉', '川菜里的回锅肉，是我比较喜欢的一个菜，去十家菜馆，有十种做法，味道各有特色。据说四川人家家都得会做回锅肉，作为一道传统的川菜，可见它的地位非同一般。今天我也来做一下这道经典的川菜，用的是传统的做法。', 45, '盘', '普通', '/SmartOrder/Data/Uploads/Images/552338dddbefe.png', 0, 1444551377),
(4, 1, 1, 'q', '', 0, '盘', '普通', '', 1, 0),
(5, 1, 4, '北京烤鸭', '烤鸭是具有世界声誉的北京著名菜式，由中国汉族人研制于明朝，在当时是宫廷食品。用料为优质肉食鸭北京鸭，果木炭火烤制，色泽红润，肉质肥而不腻，外脆里嫩。...', 78, '盘', '普通', '/SmartOrder/Data/Uploads/Images/55263628354af.png', 0, 1444551491),
(6, 1, 2, '白灼虾', '白灼虾是广东省广州地区一道汉族传统名菜，属粤菜系。主要食材是虾，主要烹饪工艺是白灼。广州人喜欢用白灼之法来做虾，为的是保持其鲜、甜、嫩的原味，然后将虾剥壳蘸酱汁而食。', 80, '盘', '普通', '/SmartOrder/Data/Uploads/Images/554988e86df3c.png', 0, 1437480588),
(7, 1, 3, '重庆辣子鸡', '重庆辣子鸡是一道色香味俱全的汉族名肴，属于川菜系或重庆菜。将鸡块炸至外焦内酥，与花椒、干辣椒和指天椒一同拌炒而成，成菜色泽红润，麻辣鲜香，酥香爽脆。 为了原汁原味的体现这道菜的特色， 做好的成品最好是辣椒能全部把鸡盖住， 而不是鸡块中零零星星出现几个辣椒和花椒。', 78, '盘', '普通', '/SmartOrder/Data/Uploads/Images/5549aaa1d4aff.png', 0, 1440815650),
(8, 1, 3, '瓦罐', '哈哈哈哈哈', 45, '罐', '普通', '', 1, 1435308337),
(9, 2, 5, '黄瓜', '的无法为爱而', 231, '盘', '普通', '', 1, 1435308400),
(10, 1, 3, '123', '2222', 12, '盘', '普通', '', 1, 1435318845),
(11, 1, 4, '金针菇凉拌', '金针菇，英文名："See You Tommrow!".', 45, '盘', '普通', '/SmartOrder/Data/Uploads/Images/55acaba78d9d8.png', 0, 1440818036),
(12, 1, 2, '糖醋小排', '糖醋小排，超级好吃，我最喜欢的一道菜~~~', 76, '盘', '普通', '/cloud/Data/Uploads/Images/5619c991a8fe8.jpg', 0, 1444547826),
(13, 2, 6, '葱花饼', '', 0, '', '', '', 0, 0),
(14, 2, 7, '烤鱼', '', 0, '', '', '', 0, 0),
(15, 2, 8, '松花蛋', '', 0, '', '', '', 0, 0),
(16, 2, 9, '大闸蟹', '', 0, '', '', '', 0, 0),
(30, 1, 4, '羊肉串', '彼此怕我【WEHI[FBPNKNDE多少分', 168, '盘', '普通', '/cloud/Data/Uploads/Images/5618a7fc66627.jpg', 0, 1444456444),
(31, 1, 3, '水煮鱼123', '水煮鱼又称江水煮江鱼，是一道重庆市的汉族创新名菜，属于重庆渝北风味。最早流行于重庆、四川等地。看似原始的做法，实际做工考究--选新鲜生猛活鱼，又充分发挥辣椒御寒、益气养血功效，烹调出来的肉质一点也不会变韧，口感滑嫩，油而不腻。既去除了鱼的腥味，又保持了鱼的鲜嫩。满目的辣椒红亮养眼，辣而不燥，麻而不苦。“麻上头，辣过瘾”，让水煮鱼在全国流 行。', 56, '盘', '推荐', '/cloud/Data/Uploads/Images/5618ce3d30779.jpg', 0, 1444466237),
(32, 1, 3, '水煮鱼123', '水煮鱼又称江水煮江鱼，是一道重庆市的汉族创新名菜，属于重庆渝北风味。最早流行于重庆、四川等地。看似原始的做法，实际做工考究--选新鲜生猛活鱼，又充分发挥辣椒御寒、益气养血功效，烹调出来的肉质一点也不会变韧，口感滑嫩，油而不腻。既去除了鱼的腥味，又保持了鱼的鲜嫩。满目的辣椒红亮养眼，辣而不燥，麻而不苦。“麻上头，辣过瘾”，让水煮鱼在全国流 行。', 56, '盘', '推荐', '/cloud/Data/Uploads/Images/5618ceadf362d.jpg', 1, 1444466349),
(33, 1, 4, 'egress', '更方便粉丝 封别人更惹人个人股', 0, '盘', '推荐', '/cloud/Data/Uploads/Images/561a1a90490d7.jpg', 0, 1444551312),
(34, 1, 4, '而且为人v', '让我去让企鹅王菲菲问题发v', 34, '盘', '推荐', '/cloud/Data/Uploads/Images/561a1be953621.jpg', 0, 1444551657),
(35, 1, 12, '红烧茄子', '红烧茄子是鲁菜嘛？应该是吧', 23, '盘', '普通', '/cloud/Data/Uploads/Images/56235fb30a977.jpg', 0, 1445158834);

-- --------------------------------------------------------

--
-- 表的结构 `cookstyle`
--

CREATE TABLE IF NOT EXISTS `cookstyle` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '菜系ID',
  `com_id` int(11) NOT NULL,
  `stylename` varchar(16) CHARACTER SET utf8 NOT NULL COMMENT '菜系名称',
  `edit_time` int(10) NOT NULL COMMENT '最后编辑时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `cookstyle`
--

INSERT INTO `cookstyle` (`id`, `com_id`, `stylename`, `edit_time`) VALUES
(2, 1, '特色菜123', 0),
(3, 1, '瓦罐煨汤', 0),
(4, 1, '农家菜', 0),
(5, 2, '凉菜', 0),
(7, 2, '香辣川菜', 0),
(8, 2, '川菜', 0),
(9, 2, '鲁菜', 0),
(11, 2, '打分', 0),
(12, 1, '鲁菜', 1445158764);

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(14) NOT NULL AUTO_INCREMENT COMMENT '唯一id',
  `com_id` varchar(14) NOT NULL COMMENT '公司的id',
  `dept_key` varchar(32) NOT NULL COMMENT '随机分配的key',
  `last_menu_time` varchar(14) NOT NULL COMMENT '最后更新菜单时间',
  `last_order_time` varchar(14) NOT NULL COMMENT '最后点餐时间',
  `dept_name` varchar(14) NOT NULL COMMENT '店铺名称',
  `dept_charge_name` varchar(14) NOT NULL COMMENT '店铺负责人名字',
  `dept_charge_tel` varchar(14) NOT NULL COMMENT '店铺负责人联系电话',
  `dept_charge_id` varchar(14) NOT NULL COMMENT '店铺负责人身份证',
  `dept_charge_email` varchar(14) NOT NULL COMMENT '电子邮箱',
  `dept_add` varchar(14) NOT NULL COMMENT '地址',
  `dept_detail_add` varchar(14) NOT NULL COMMENT '详细地址',
  `business_license` varchar(14) NOT NULL COMMENT '营业执照',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`id`, `com_id`, `dept_key`, `last_menu_time`, `last_order_time`, `dept_name`, `dept_charge_name`, `dept_charge_tel`, `dept_charge_id`, `dept_charge_email`, `dept_add`, `dept_detail_add`, `business_license`) VALUES
(1, '1', 'dsas', '', '', '', '', '', '', '', '', '', ''),
(2, '1', '', '', '', '肯德基双龙店', '张亚君', '15678931234', '', 'yueuc@163.com', '22000022010022', '', '125351'),
(3, '1', '', '', '', '肯德基双龙店', '张亚君', '15678931234', '', 'yueuc@163.com', '22000022010022', '', '1253513'),
(4, '1', '', '', '', '麦当劳', '常成月', '14789654478', '', 'xianhawhae@163', '北京北京市东城区', '', '5447400'),
(5, '1', '', '', '', '软胶囊', '听听', '同人女人数', '', 'cian@163.com', '吉林省-长春市-朝阳区', '', '上班'),
(6, '1', '', '', '', '恩比额', '而不', '而过后，', '', 'xajf@163.com', '吉林省-长春市-朝阳区-', '', '4601'),
(7, '1', '', '', '', '大白片', '撒女', '答复', '232', 'daofnaq@133.co', '12000012010012', '阿斯顿和规范', '是大法官vjas'),
(8, '1', '', '', '', '额女鬼', '爱如', '啊女方', '', 'asawer@123.com', '河北省-石家庄市-长安区-', '啊说的va', '爱上我v'),
(9, '1', '', '', '', '为其付出', '按违反', '啊深v发个', '', 'aefc@132.com  ', '吉林省-长春市-朝阳区-', 'ASfc  ', 'aSfc  '),
(10, '1', '', '', '', '撒擦完', 'sav ', '啊说的v', 'aSEffective', 'aAfc@123.com', '内蒙古自治区-呼和浩特市-新', 'adv', '说的'),
(11, '1', '', '', '', '我噶尔', '阿斯钢v', '阿斯钢v', '阿女', 's@123.com', '22000022010022', 'wev ', 'wa s');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(14) NOT NULL,
  `password` varchar(11) NOT NULL,
  `tel` varchar(14) NOT NULL,
  `email` varchar(14) NOT NULL,
  `lock` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `tel`, `email`, `lock`) VALUES
(1, 'admin', '123', '', '', 1),
(2, 'admin', '123', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
