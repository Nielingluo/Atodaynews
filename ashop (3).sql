-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 02 月 13 日 13:01
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ashop`
--

-- --------------------------------------------------------

--
-- 表的结构 `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `city`
--

INSERT INTO `city` (`id`, `name`, `intro`) VALUES
(1, 'sh', '上海有个东方明珠'),
(2, 'bj', '北京市首都哦'),
(3, 'gz', '广州在地图右下方');

-- --------------------------------------------------------

--
-- 表的结构 `tp_article`
--

CREATE TABLE IF NOT EXISTS `tp_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '匿名投稿',
  `content` text NOT NULL,
  `filename` varchar(800) NOT NULL,
  `date` int(90) NOT NULL,
  `uid` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `tp_article`
--

INSERT INTO `tp_article` (`id`, `title`, `author`, `content`, `filename`, `date`, `uid`) VALUES
(25, '公共广播', '匿名投稿', '广播广告', '', 0, 0),
(24, '嘎嘎嘎', '匿名投稿', '嘎嘎嘎', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_news`
--

CREATE TABLE IF NOT EXISTS `tp_news` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `author` varchar(30) NOT NULL DEFAULT '匿名投稿',
  `newsclass` varchar(90) NOT NULL,
  `content` text NOT NULL,
  `filename` varchar(800) NOT NULL,
  `date` int(90) NOT NULL,
  `uid` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `tp_news`
--

INSERT INTO `tp_news` (`id`, `title`, `author`, `newsclass`, `content`, `filename`, `date`, `uid`) VALUES
(23, '作者简介', '', '国际新闻', '钟绍京（695~746），字可大，唐代虔州（今江西赣州兴国县清德乡人，系三国魏国太傅、著名书法家钟繇的第17代世孙，史称钟太傅为“大钟”，称钟绍京为。绍京幼时家贫，出身微贱，凭才能进入京都长安府任职。初任朝廷司农录事，虽官职卑微，然其书法艺术卓尔超群。得兵部尚书裴行俭推荐，绍京才有机会被破格提拔到皇权核心机要重地“直凤阁”任职，成了皇宫里的大手笔，当时宫殿里的门榜、牌匾、楹联等，尽其墨宝手迹。小楷《灵飞经》乃小钟传世名作。', '56a77dd12df6b.jpg', 1453817297, 0),
(24, '作品介绍', '', '国际新闻', '《灵飞六甲经》是一卷道教的经，在明代晚期，发现，一卷唐代开元年间精写本，它的字迹风格和砖塔铭一派非常相近，但毫锋墨彩却远非石刻所能媲美。当时流入董其昌手，有他的题跋。海宁陈氏刻办渤海藏真》丛帖，由董家借到，摹刻入石，两家似有抵押手续。后来董氏又赎归转卖，闹了许多往返纠纷。《渤海》摹刻全卷时，脱落了十二行，董氏赎回时，陈氏扣留了四十三行。从这种抽页扣留的情况看，脱刻十二行也可能是初次抵押时被董氏扣留的，后来又合又分，只存陈氏所抽扣的四十三行，其余部分已不知存佚了。《灵飞》本身的书法，在唐人写经中，允推精品，试用敦煌所出那么多的唐人写经来比，够得上《灵飞》那样精美的，也并不太多。在清代科举考试的标准，书法的优劣，几乎与文章的优劣并重，所以它又成了文人士子学习小楷的极好范本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77ddfaea15.jpg', 1453817311, 0),
(25, '渤海', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77def32ccd.jpg', 1453817327, 0),
(33, 'ds多少', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e55f345e.jpg', 1453817430, 0),
(31, '撒', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e3b8d0d3.jpg', 1453817403, 0),
(32, 'd的', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e4ab7b76.jpg', 1453817418, 0),
(30, '时代发生的', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e2fb32fc.jpg', 1453817391, 0),
(29, '是《渤海》初拓遂成稀有', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e2255e82.jpg', 1453817378, 0),
(26, '搜索', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77df7f3bd5.jpg', 1453817336, 0),
(27, '但V公司的', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e03d5ad5.jpg', 1453817347, 0),
(28, '的说法', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e0ee8d9b.jpg', 1453817358, 0),
(22, '钟绍京《灵飞经》墨迹版', '', '国际新闻', '灵飞经是道教经名，主要阐述存思之法。今道藏有《上清琼宫灵飞六甲左右上符》，一卷。《汉武内传》谓此经用于请命延算、长生久视、驱策众灵、役使鬼神。 《灵飞经》是唐代著名小楷之一，无名款。元袁桷，明董其昌皆以为唐钟绍京书。钟绍京，字可大，虔州赣人。官至中书令，越国公。书学二王，褚、薛在当时是享有盛名的书家，时号“小钟，也是收藏家，个人收藏名家真迹数百卷。《灵飞经》笔势圆劲，精妙。后人初习小楷多以此为范本。', '56a77dc2cc846.jpg', 1453817282, 0),
(34, '哈', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e60439bc.jpg', 1453817440, 0),
(35, '打撒', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e6b20d55.jpg', 1453817451, 0),
(36, '多大的', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e7fb8863.jpg', 1453817471, 0),
(37, '多大的多大的', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77e944bc04.jpg', 1453817492, 0),
(38, 'sass', '', '国际新闻', '本。于是《渤海》初拓遂成稀有珍品。原石又因捶拓渐多，不断泐损，随着出现了种种翻刻本。《滋蕙堂帖》翻刻的笔画光滑，又伪加赵孟頫跋，在清代中期曾成为翻本的首领，事实却是翻本中的劣品，和《渤海》的原貌相离更远。嘉庆中嘉善谢恭铭得到陈氏抽扣的四十三行，刻入《望云楼帖》刻法比《渤海》不同。不但注意笔画起落处的顿挫，且比《渤海》本略肥。凡是看过敦煌写经的人都容易感觉《望云》可能比较”逼真”而《渤海》可能有所“失真”。', '56a77ea66af61.jpg', 1453817510, 0),
(39, '5555', '匿名投稿', '国际新闻', '热然后给', '56bf232c0fd19.jpg', 1455366956, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_newsclass`
--

CREATE TABLE IF NOT EXISTS `tp_newsclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsclass` varchar(90) NOT NULL,
  `date` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `tp_newsclass`
--

INSERT INTO `tp_newsclass` (`id`, `newsclass`, `date`) VALUES
(27, '国际新闻', 1455366728),
(26, '娱乐新闻', 1455366720),
(25, '体育新闻', 1453817220),
(24, '企业新闻', 1453817214);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(90) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `sex` tinyint(4) NOT NULL DEFAULT '1',
  `regdate` int(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=112 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `email`, `username`, `password`, `sex`, `regdate`) VALUES
(111, '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1455366577),
(110, '', '123', '202cb962ac59075b964b07152d234b70', 1, 1455366556);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
