-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 04 月 17 日 10:45
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `points_user`
--

CREATE TABLE IF NOT EXISTS `points_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `password` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `sex` int(11) NOT NULL COMMENT '性别0男1女',
  `job` int(11) NOT NULL COMMENT '职务0前厅1后厨',
  `points` int(11) unsigned NOT NULL COMMENT '积分总数',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `points_user`
--

INSERT INTO `points_user` (`id`, `username`, `password`, `sex`, `job`, `points`) VALUES
(1, '李四', 'dc3a8f1670d65bea69b7b65048a0ac40', 1, 0, 0),
(2, '张三', '01d7f40760960e7bd9443513f22ab9af', 0, 0, 0),
(4, '周七', '6760baccde3aff7e6b9b6b725964663b', 0, 0, 0),
(5, '老八', 'eb7fec375a5e03b7280cc620af356514', 1, 0, 0),
(6, '刘超', '96e79218965eb72c92a549dd5a330112', 0, 0, 0),
(7, '张三丰', '4297f44b13955235245b2497399d7a93', 0, 1, 0),
(8, '张无忌', '4297f44b13955235245b2497399d7a93', 0, 1, 0),
(9, '王三', '4297f44b13955235245b2497399d7a93', 0, 1, 0),
(10, '周三', '0acf03f408f90ea0dcba786d300620db', 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
