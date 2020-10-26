-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 12:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_pages`
--

CREATE TABLE `active_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `active_pages`
--

INSERT INTO `active_pages` (`id`, `name`, `enabled`) VALUES
(1, 'blog', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `image`, `url`, `time`) VALUES
(6, 'slide22.jpg', 'điều_về_pin_ô_tô_mà_bạn_chưa_từng_biết_6', 1602823951),
(4, 'slide11.jpg', 'Cách_sử_dụng_ắc_quy_hợp_lý_và_các_dấu_hiệu_bất_ổn_của_bình_ắc_quy_4', 1602823654),
(5, 'slide21.jpg', 'Tại_sao_bạn_nên_mua_Pin_không_cần_bảo_dưỡng_thay_vì_Pin_sạc_khô_5', 1602823810);

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `title`, `description`, `abbr`, `for_id`) VALUES
(4, 'Cách sử dụng ắc quy hợp lý và các dấu hiệu bất ổn của bình ắc quy', '<p>Ắc quy là một bộ phận rất quan trọng đối với xe ô tô. Nó cung cấp nguồn điện cho tất cả các hoạt động, hệ thống sử dụng điện áp trên xe. Trên thị trường hiện nay có rất nhiều loại ắc quy của các hãng khác nhau, vậy làm sao để lựa chọn được cho xe một bình ắc quy phù hợp và sử dụng chúng thế nào cho hợp lý, kéo dài tuổi thọ cho ắc quy? Bài viết dưới đây sẽ&nbsp;đưa ra kinh nghiệm sử dụng ắc quy, giúp bạn&nbsp;sử dụng chúng một cách hiệu quả hơn và những&nbsp;cách khắc phục khi ắc quy có sự cố.</p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg\" rel=\"gallery\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 480w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 640w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 800w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 1280w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 1600w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 2560w\" sizes=\"689px\" src=\"https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 480w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 640w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 800w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 1280w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 1600w, https://static.danhgiaxe.com/data/201515/chon-mua-ac-quy-oto1_9052.jpg 2560w\" width=\"100%\" /></a></p>\r\n\r\n<h3>Lưu ý khi sử dụng ắc quy</h3>\r\n\r\n<ul>\r\n	<li>Nên tắt hết các&nbsp;thiết bị điện khi khởi động xe để tránh hao tổn năng lượng của ắc quy. Khi khởi động dòng điện cần cung cấp sẽ cao hơn bình thường (5 đến 7 lần) nên ắc quy sẽ tụt áp mạnh, vì vậy mỗi lần khởi động không nên kéo dài quá 5 giây và khoảng cách giữa mỗi lần khởi động ít nhất phải 10 giây để ắc quy kịp ổn định.</li>\r\n	<li>Khi lắp đặt ắc quy phải gắn cực dương&nbsp;trước âm&nbsp;sau và các cọc bình phải đảm bảo siết chặt tránh tình trạng lỏng lẻo gây nẹt lửa do tiếp xúc, sẽ&nbsp;không tốt và ảnh hưởng đến độ bền của các cực.&nbsp;</li>\r\n	<li>Thường xuyên kiểm tra và đảm bảo đủ lượng nước dung dịch đối với ắc quy ướt.</li>\r\n	<li>Thường xuyên vệ sinh các đầu cực ắc quy trong quá trình sử dụng và bảo dưỡng ắc quy định kỳ theo hướng dẫn sử dụng của nhà sản xuất.</li>\r\n	<li>Tuyệt đối không để ắc quy bị ngắn mạch vì sẽ làm tổn hại nặng cho ắc quy và có thể gây nguy hiểm cho bản thân.</li>\r\n	<li>Khi sạc ắc quy cần sử dụng bộ sạc đúng chất lượng và tiêu chuẩn của nhà sản xuất, dòng sạc không vượt quá 10% dòng định mức của ắc quy và không được đấu nhầm cực khi sạc.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg 640w, https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg 1280w, https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg 640w, https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg 1280w, https://static.danhgiaxe.com/data/201515/do-dong_5694.jpg 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg 640w, https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg 1280w, https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg 640w, https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg 1280w, https://static.danhgiaxe.com/data/201515/xiet-coc_7281.jpg 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p>kiểm tra điện áp ắc quy trước khi khởi động, xiết cọc bình chắc chắn</p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/untitled_583.png\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/untitled_583.png 640w, https://static.danhgiaxe.com/data/201515/untitled_583.png 1280w, https://static.danhgiaxe.com/data/201515/untitled_583.png 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/untitled_583.png\" srcset=\"https://static.danhgiaxe.com/data/201515/untitled_583.png 640w, https://static.danhgiaxe.com/data/201515/untitled_583.png 1280w, https://static.danhgiaxe.com/data/201515/untitled_583.png 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/sac_5812.jpg\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/sac_5812.jpg 640w, https://static.danhgiaxe.com/data/201515/sac_5812.jpg 1280w, https://static.danhgiaxe.com/data/201515/sac_5812.jpg 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/sac_5812.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/sac_5812.jpg 640w, https://static.danhgiaxe.com/data/201515/sac_5812.jpg 1280w, https://static.danhgiaxe.com/data/201515/sac_5812.jpg 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p>Không để đồ nghề trên ắc quy tránh làm ngắn mạch, sử dụng bộ sạc ắc quy đúng tiêu chuẩn&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png 640w, https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png 1280w, https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png\" srcset=\"https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png 640w, https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png 1280w, https://static.danhgiaxe.com/data/201515/luu-moi_2007_9123.png 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg 640w, https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg 1280w, https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg 640w, https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg 1280w, https://static.danhgiaxe.com/data/201515/lap-ac-quy_6814.jpg 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p>Tắt các thiết bị điện khi khởi động, thứ tự tháo lắp các cực ắc quy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Những chú ý trong quá trình sử dụng xe</h3>\r\n\r\n<ul>\r\n	<li>Thường xuyên kiểm tra bộ sạc vì nó ảnh hưởng trực tiếp đến ắc quy. Bộ sạc tốt thì điện thế nằm khoảng (13,8 đến 14,2 ) khi động cơ hoạt động. Mọi trường hợp điện áp cao vượt mức hoặc quá thấp đều ảnh hưởng đến tuổi thọ của ắc quy.&nbsp;</li>\r\n</ul>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg\" rel=\"gallery\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 480w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 640w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 800w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 1280w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 1600w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 2560w\" sizes=\"689px\" src=\"https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg\" srcset=\"https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 480w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 640w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 800w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 1280w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 1600w, https://static.danhgiaxe.com/data/201516/kt-may-phat_6884.jpg 2560w\" width=\"100%\" /></a>Kiểm tra điện áp của bộ sạc thông qua ắc quy</p>\r\n\r\n<ul>\r\n	<li>Không để ắc quy cạn kiệt, chỉ sử dụng khoảng 70% ắc quy ( khoảng 3/4 thời gian phóng điện cho phép) và sạc lại để phục hồi năng lượng cho ắc quy. Không nên xài ắc quy đến khi hư hỏng mới thay vì khi đó có thể xe bạn sẽ không thể khởi động và phải cứu pan do ắc quy hư hỏng.</li>\r\n</ul>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg\" rel=\"gallery\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 480w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 640w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 800w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 1280w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 1600w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 2560w\" sizes=\"689px\" src=\"https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 480w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 640w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 800w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 1280w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 1600w, https://static.danhgiaxe.com/data/201515/sac-ac-quy-khi-yeu_3710.jpg 2560w\" width=\"100%\" /></a>Sạc bình khi điện thế yếu sau một thời gian sử dụng</p>\r\n\r\n<ul>\r\n	<li>Khi gắn đồ chơi cho xe, đặc biệt là các thiết bị điện sẽ làm ắc quy mau hết điện hơn vì phải phóng điện nhiều hơn. Nên tính toán và lựa chọn ắc quy có dung lượng cao hơn.&nbsp;</li>\r\n</ul>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/accui_1557.jpg\" rel=\"gallery\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/accui_1557.jpg 480w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 640w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 800w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 1280w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 1600w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 2560w\" sizes=\"689px\" src=\"https://static.danhgiaxe.com/data/201515/accui_1557.jpg\" srcset=\"https://static.danhgiaxe.com/data/201515/accui_1557.jpg 480w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 640w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 800w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 1280w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 1600w, https://static.danhgiaxe.com/data/201515/accui_1557.jpg 2560w\" width=\"100%\" /></a>Tính toán và lựa chọn ắc quy dung lượng cao phù hợp khi gắn thêm đồ chơi xe hơi</p>\r\n\r\n<h3>Các dấu hiệu bất ổn của ắc quy</h3>\r\n\r\n<p>Ắc quy có độ bền và độ tin cậy khá cao, tuy nhiên sau một thời gian hoạt động lâu dài nó cũng sẽ hư hỏng và có các dấu hiệu sau:</p>\r\n\r\n<ul>\r\n	<li>Xe không khởi động được do bình yếu.</li>\r\n	<li>Đề xe khởi động yếu và quay chậm.</li>\r\n	<li>Đèn xi nhan mờ và không cắt rờ le.</li>\r\n	<li>Bình ắc quy có rỉ bẩn và cọc bình dơ.</li>\r\n	<li>Còi xe yếu và đèn xe mờ khi bóp còi.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png 640w, https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png 1280w, https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png\" srcset=\"https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png 640w, https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png 1280w, https://static.danhgiaxe.com/data/201515/cuu-pan_4951.png 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png 640w, https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png 1280w, https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png\" srcset=\"https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png 640w, https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png 1280w, https://static.danhgiaxe.com/data/201515/ac-cui-hu_1684.png 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/coi-xe_9276.png\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/coi-xe_9276.png 640w, https://static.danhgiaxe.com/data/201515/coi-xe_9276.png 1280w, https://static.danhgiaxe.com/data/201515/coi-xe_9276.png 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/coi-xe_9276.png\" srcset=\"https://static.danhgiaxe.com/data/201515/coi-xe_9276.png 640w, https://static.danhgiaxe.com/data/201515/coi-xe_9276.png 1280w, https://static.danhgiaxe.com/data/201515/coi-xe_9276.png 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p><a href=\"https://static.danhgiaxe.com/data/201515/den-mo_9590.png\" rel=\"gallery2\" title=\"\"><img alt=\"\" data-optimumx=\"1.6\" data-sizes=\"auto\" data-srcset=\"https://static.danhgiaxe.com/data/201515/den-mo_9590.png 640w, https://static.danhgiaxe.com/data/201515/den-mo_9590.png 1280w, https://static.danhgiaxe.com/data/201515/den-mo_9590.png 2560w\" sizes=\"334px\" src=\"https://static.danhgiaxe.com/data/201515/den-mo_9590.png\" srcset=\"https://static.danhgiaxe.com/data/201515/den-mo_9590.png 640w, https://static.danhgiaxe.com/data/201515/den-mo_9590.png 1280w, https://static.danhgiaxe.com/data/201515/den-mo_9590.png 2560w\" width=\"100%\" /></a></p>\r\n\r\n<p>Một số dấu hiệu báo động ắc quy hỏng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khi ắc quy có các dấu hiệu hư hỏng cần dự tính thời gian thay thế và trong thời gian này phải thường xuyên quan tâm đến tình trạng ắc quy hơn để việc sử dụng xe luôn hiệu quả. Giải pháp tốt nhất trong các trường hợp này là thay thế một bình ắc quy mới loại tốt, phù hợp với công suất sử dụng điện của xe bạn.</p>\r\n', 'en', 4),
(5, 'Tại sao bạn nên mua Pin không cần bảo dưỡng thay vì Pin sạc khô', '<p><font><font>Bạn đã bao giờ tự hỏi tại sao bạn nên trả nhiều tiền hơn cho một bình ắc quy ô tô Không cần Bảo dưỡng (MF)?&nbsp;</font><font>Chúng tôi ở đây để giúp làm sáng tỏ sự khác biệt giữa hai công nghệ.</font></font></p>\r\n\r\n<h2><font><font>Tiện</font></font></h2>\r\n\r\n<p><font><font>Bạn có biết rằng khoảng 50% trường hợp ắc quy ô tô bị hỏng sớm là do mất nước do không được bảo dưỡng?&nbsp;</font><font>Pin sạc khô (DC) phải được bổ sung nước cất định kỳ để trả lại lượng chất điện phân đã cạn kiệt về mức tối ưu, và việc tưới thiếu hoặc quá mức dẫn đến giảm hiệu suất và tuổi thọ của pin.</font></font></p>\r\n\r\n<p><font><font>Ưu điểm lớn nhất của pin MF là không cần bảo trì.&nbsp;</font><font>Vì pin MF được đóng kín hoàn toàn nên không cần nạp thêm chất điện phân bên trong và điều này có nghĩa là tiết kiệm được rất nhiều thời gian, ít rắc rối và yên tâm hơn.&nbsp;</font><font>Ắc quy MF cũng thường được trang bị một tỷ trọng kế để người lái xe theo dõi tình trạng sức khoẻ của ắc quy.</font></font></p>\r\n\r\n<h2><font><font>Hiệu suất</font></font></h2>\r\n\r\n<p><font><font>Nói chung, ắc quy MF đảm bảo động cơ đánh lửa chỉ trong tích tắc - khởi động xe của bạn mượt mà và nhanh chóng hơn.&nbsp;</font><font>Công suất cao này đạt được nhờ vào một lượng lớn hơn các vật liệu hoạt động chất lượng.</font></font></p>\r\n\r\n<p><font><font>Pin MF cũng sạc nhanh hơn để đảm bảo rằng luôn có nguồn điện phù hợp.&nbsp;</font><font>Điều này đặc biệt quan trọng đối với những chiếc ô tô hiện đại có nhiều phụ tải điện, chẳng hạn như cấp nguồn cho GPS, hệ thống giải trí và camera hành trình.</font></font></p>\r\n\r\n<h2><font><font>Tuổi thọ</font></font></h2>\r\n\r\n<p><font><font>Công nghệ Chì-Canxi, được sử dụng trong pin MF, mang lại khả năng chống ăn mòn, thoát khí và tự phóng điện cao hơn, tất cả đều cải thiện tuổi thọ của pin so với pin DC.&nbsp;</font><font>Trong môi trường được kiểm soát, pin MF có tuổi thọ chu kỳ dài hơn khoảng 2,5 lần so với pin DC.&nbsp;</font><font>(Lưu ý rằng tuổi thọ thực tế phụ thuộc phần lớn vào thói quen lái xe của người lái xe, tải điện của xe, điều kiện đường xá và nhiệt độ bên ngoài.)</font></font></p>\r\n\r\n<h2><font><font>Sự an toàn</font></font></h2>\r\n\r\n<p><font><font>Thực tế là pin MF được niêm phong cũng có nghĩa là không có khả năng rò rỉ.&nbsp;</font><font>Người lái xe hoặc thậm chí thợ máy xử lý pin MF có thể tránh tiếp xúc với axit ăn mòn (chất điện phân) bên trong.</font></font></p>\r\n\r\n<p><font><font>Pin MF thường đi kèm với nắp mê cung và bộ chống cháy tích hợp, giúp bảo vệ pin khỏi tia lửa bên ngoài, ngọn lửa hoặc các nguồn đánh lửa khác có thể gây cháy nổ!</font></font></p>\r\n\r\n<p><font><font>Tóm lại, bạn sẽ chỉ đầu tư một khoản nhỏ để mang lại nhiều lợi ích hơn cho chiếc xe của mình.&nbsp;</font><font>Khám phá các dòng pin MF của Bosch tại đây.&nbsp;</font></font><strong><font><font>#GetItRight&nbsp;</font></font></strong><strong><font><font>#StartWithBosch</font></font></strong></p>\r\n', 'en', 5),
(6, '5 điều về pin ô tô mà bạn chưa từng biết', '<p><font><font>Chúng tôi đã tìm ra một số sự thật thú vị (và khá hữu ích) về chiếc hộp thần kỳ chịu trách nhiệm cung cấp năng lượng cho chiếc xe của bạn.</font></font></p>\r\n\r\n<h2><font><font>Những chuyến đi ngắn là không đủ</font></font></h2>\r\n\r\n<p><font><font>Nếu bạn chủ yếu lái xe những quãng đường ngắn trong phạm vi một thành phố nhỏ hoặc tắc nghẽn, ắc quy ô tô của bạn liên tục được sạc ở mức thấp.&nbsp;</font><font>Điều này dẫn đến sự phân tầng axit và sunfat hóa, dẫn đến hỏng pin.&nbsp;</font><font>Để tránh điều này, hãy luôn sạc đầy pin bằng bộ sạc pin chẳng hạn như Bộ sạc C3 / C7 Bosch (điều này yêu cầu nguồn điện).</font></font></p>\r\n\r\n<h2><font><font>Thời tiết nóng bức</font></font></h2>\r\n\r\n<p><font><font>Nhiệt làm tăng tốc độ phản ứng hóa học và làm tăng tốc độ ăn mòn trong pin, giảm đến một nửa tuổi thọ tiềm năng của nó.&nbsp;</font><font>Mặc dù điều này là không thể tránh khỏi ở khí hậu nhiệt đới của chúng ta, bạn có thể giảm tốc độ bằng cách đỗ xe trong bóng râm và trong nhà bất cứ khi nào có thể.</font></font></p>\r\n\r\n<h2><font><font>Cẩn thận với mùi trứng thối</font></font></h2>\r\n\r\n<p><font><font>Vì ắc quy ô tô có chứa axit sulfuric, nên nó có thể thoát ra khí có mùi hôi (lưu huỳnh) khi nó bị thiếu bên trong, đóng băng hoặc sạc quá mức.&nbsp;</font><font>Điều này có thể nguy hiểm vì axit sulfuric bị rò rỉ có thể làm hỏng các bộ phận khác của xe hơi.&nbsp;</font><font>Chúng tôi khuyên bạn nên kiểm tra pin càng sớm càng tốt nếu bạn bắt gặp mùi trứng thối thoang thoảng bên dưới nắp ca-pô.</font></font></p>\r\n\r\n<h2><font><font>Bạn có thể sử dụng baking soda để kéo dài tuổi thọ</font></font></h2>\r\n\r\n<p><font><font>Bạn có biết rằng bạn có thể sử dụng baking soda trộn với một ít nước để làm sạch các cực pin bị ăn mòn?&nbsp;</font><font>Baking soda có tính kiềm giúp trung hòa axit sulfuric (có mùi hôi), giúp dễ dàng loại bỏ cặn bẩn và ăn mòn ngăn pin hoạt động tối ưu.&nbsp;</font><font>Điều này giúp giữ cho pin của bạn hoạt động trong tình trạng hoạt động lâu hơn.</font></font></p>\r\n\r\n<h2><font><font>Chúng là nguyên nhân hàng đầu khiến ô tô bị hỏng hóc</font></font></h2>\r\n\r\n<p><font><font>Sự cố về pin là một trong những lý do hàng đầu được viện dẫn để hỗ trợ khẩn cấp bên đường.&nbsp;</font><font>Đảm bảo rằng bạn sử dụng pin đáng tin cậy và thực hiện kiểm tra thường xuyên để tránh rơi vào trường hợp như vậy.&nbsp;</font><font>#GetItRight #StartWithBosch</font></font></p>\r\n', 'en', 6);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Atlas'),
(2, 'Bosch'),
(3, 'GS'),
(4, 'Varta');

-- --------------------------------------------------------

--
-- Table structure for table `confirm_links`
--

CREATE TABLE `confirm_links` (
  `id` int(11) NOT NULL,
  `link` char(32) NOT NULL,
  `for_order` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law`
--

CREATE TABLE `cookie_law` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cookie_law_translations`
--

CREATE TABLE `cookie_law_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `button_text` varchar(50) NOT NULL,
  `learn_more` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `discount_codes`
--

CREATE TABLE `discount_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(10) NOT NULL,
  `code` varchar(10) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `valid_from_date` int(10) UNSIGNED NOT NULL,
  `valid_to_date` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-enabled, 0-disabled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `currencyKey` varchar(5) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `abbr`, `name`, `currency`, `currencyKey`, `flag`) VALUES
(2, 'en', 'english', '$', 'USD', 'en.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'point to public_users ID',
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT 0,
  `viewed` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'viewed status is change when change processed status',
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `discount_code` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_clients`
--

CREATE TABLE `orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `folder` int(10) UNSIGNED DEFAULT NULL COMMENT 'folder with images',
  `image` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL COMMENT 'time created',
  `time_update` int(10) UNSIGNED NOT NULL COMMENT 'time updated',
  `visibility` tinyint(1) NOT NULL DEFAULT 1,
  `shop_categorie` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `procurement` int(10) UNSIGNED NOT NULL,
  `in_slider` tinyint(1) NOT NULL DEFAULT 0,
  `url` varchar(255) NOT NULL,
  `virtual_products` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(5) DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `folder`, `image`, `time`, `time_update`, `visibility`, `shop_categorie`, `quantity`, `procurement`, `in_slider`, `url`, `virtual_products`, `brand_id`, `position`, `vendor_id`) VALUES
(1, 1601974733, 'bosch2.jpg', 1601974854, 1602822772, 1, 11, 10, 0, 0, 'BOSCH_AH_CLS_1', NULL, 2, 0, 0),
(2, 1601974871, 'varta21.jpg', 1601974910, 1602476250, 1, 11, 20, 0, 0, 'VARTA_EFB_AH_DL_2', NULL, 4, 0, 0),
(3, 1602476193, '560500064_H5_L2_R.png', 1602476230, 1602822786, 1, 5, 10, 0, 0, 'VARTA_EFB_AH_DL_3', NULL, 4, 0, 0),
(4, 1602476259, 'varta215.jpg', 1602476291, 1602822797, 1, 6, 10, 0, 0, 'VARTA_4', NULL, 4, 0, 0),
(5, 1602476447, 'atlas23.jpg', 1602476482, 1602822663, 1, 8, 10, 0, 0, 'ATLAS_MFDL_SEALED_WET_5', NULL, 1, 0, 0),
(6, 1602476521, 'varta4.jpg', 1602476555, 1602822819, 1, 7, 1, 0, 0, 'VARTA_6', NULL, 4, 0, 0),
(7, 1602476576, '560500064_H5_L2_R.png', 1602476624, 0, 1, 8, 2, 0, 0, 'VARTA_EFB_AH_DL_EFB_AH_DL_7', NULL, 4, 0, 0),
(8, 1602496019, 'varta3.jpg', 1602496082, 1602822831, 1, 6, 1, 0, 1, 'VARTA_SALE_OFF_8', NULL, 4, 0, 0),
(9, 1602842517, 'atlas24.jpg', 1602842554, 0, 1, 13, 10, 0, 0, 'ATLAS_MFDL_SEALED_WET_9', NULL, 1, 0, 0),
(10, 1602842616, 'atlas25.jpg', 1602842662, 0, 1, 10, 10, 0, 0, 'ATLAS_MFDL_XXXX_10', NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_translations`
--

CREATE TABLE `products_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `basic_description` text NOT NULL,
  `price` varchar(20) NOT NULL,
  `old_price` varchar(20) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_translations`
--

INSERT INTO `products_translations` (`id`, `title`, `description`, `basic_description`, `price`, `old_price`, `abbr`, `for_id`) VALUES
(1, 'BOSCH 35AH 32C9LS', '<p><a href=\"http://localhost/test/product-details/81\">BOSCH 35AH 32C9LSBOSCH 35AH 32C9LSBOSCH 35AH 32C9LSBOSCH 35AH 32C9LSBOSCH 35AH 32C9LS</a></p>\r\n', '', '1.500', '', 'en', 1),
(2, 'VARTA EFB 65AH 95D23L', '<p><a href=\"http://localhost/test/product-details/76\">VARTA EFB 65AH 95D23L</a></p>\r\n\r\n<p><a href=\"http://localhost/test/product-details/76\">VARTA EFB 65AH 95D23L</a></p>\r\n\r\n<p><a href=\"http://localhost/test/product-details/76\">VARTA EFB 65AH 95D23L</a></p>\r\n\r\n<p><a href=\"http://localhost/test/product-details/76\">VARTA EFB 65AH 95D23L</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '1.500', '1.700', 'en', 2),
(3, 'VARTA EFB 65AH 95D23L', '<p>VARTA EFB 65AH 95D23L</p>\r\n', '', '1.200', '1.500', 'en', 3),
(4, 'VARTA 111111111111111111', '<p>VARTA 111111111111111111</p>\r\n', '', '1.200', '', 'en', 4),
(5, 'ATLAS MF80D26L SEALED WET', '<p>ATLAS MF80D26L SEALED WET</p>\r\n', '', '1.300', '', 'en', 5),
(6, 'VARTA 222222', '<p>VARTA 222222</p>\r\n', '', '2.000', '', 'en', 6),
(7, 'VARTA EFB 65AH 95D23L EFB 65AH 95D23L', '<p>VARTA EFB 65AH 95D23L EFB 65AH 95D23L</p>\r\n', '', '3.000', '4.000', 'en', 7),
(8, 'VARTA SALE OFF 1210', '<p>VARTA SALE OFF 1210VARTA SALE OFF 1210</p>\r\n\r\n<p>VARTA SALE OFF 1210VARTA SALE OFF 1210</p>\r\n\r\n<p>VARTA SALE OFF 1210VARTA SALE OFF 1210</p>\r\n', '<p>Ắc Quy Varta 40Ah 54087 Dung lượng : 40Ah, CCA 350 Kích thước : 197 x 129 x 227 Có chân, cọc trái, chuẩn cọc nhỏ Sản phẩm có chất lượng cao nhất, dòng ổn định và tuổi thọ vượt trội</p>\r\n\r\n<div aria-describedby=\"bubble-2\" class=\"jfk-bubble gtx-bubble\" role=\"alertdialog\" style=\"visibility: visible; left: 146px; top: 113px; opacity: 1;\">\r\n<div class=\"jfk-bubble-arrow-id jfk-bubble-arrow jfk-bubble-arrowup\" style=\"left: 140.5px;\">\r\n<div class=\"jfk-bubble-arrowimplafter\">&nbsp;</div>\r\n</div>\r\n</div>\r\n', '2.000', '3.000', 'en', 8),
(9, 'ATLAS MF80D26L SEALED WET', '<p>ATLAS MF80D26L SEALED WET</p>\r\n\r\n<p>ATLAS MF80D26L SEALED WET</p>\r\n\r\n<p>ATLAS MF80D26L SEALED WET</p>\r\n\r\n<p>ATLAS MF80D26L SEALED WET</p>\r\n', '', '1.500', '', 'en', 9),
(10, 'ATLAS MF90D27L XXXX', '<p>ATLAS MF90D27L XXATLAS MF90D27L XXXX</p>\r\n\r\n<p>ATLAS MF90D27L XXXXATLAS MF90D27L XXXXXXATLAS MF90D27L XXXX</p>\r\n', '', '2.000', '3.000', 'en', 10);

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo_pages`
--

INSERT INTO `seo_pages` (`id`, `name`) VALUES
(1, 'home'),
(2, 'checkout'),
(3, 'contacts'),
(4, 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages_translations`
--

CREATE TABLE `seo_pages_translations` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `page_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_for` int(11) NOT NULL,
  `position` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`id`, `sub_for`, `position`) VALUES
(7, 0, 3),
(6, 0, 2),
(5, 0, 1),
(8, 0, 4),
(9, 5, 0),
(10, 5, 0),
(11, 6, 0),
(12, 6, 0),
(13, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories_translations`
--

CREATE TABLE `shop_categories_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_categories_translations`
--

INSERT INTO `shop_categories_translations` (`id`, `name`, `abbr`, `for_id`) VALUES
(5, 'Acura', 'en', 5),
(6, 'Audi', 'en', 6),
(7, 'Bentley', 'en', 7),
(8, 'BMW', 'en', 8),
(9, 'Acura MDX', 'en', 9),
(10, 'Acura RDX', 'en', 10),
(11, 'Audi A1', 'en', 11),
(12, 'Audi A2', 'en', 12),
(13, 'Audi A3', 'en', 13);

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `textual_pages_tanslations`
--

CREATE TABLE `textual_pages_tanslations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `abbr` varchar(5) NOT NULL,
  `for_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notify` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'notifications by email',
  `last_login` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `notify`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'your@email.com', 0, 1602822603);

-- --------------------------------------------------------

--
-- Table structure for table `users_public`
--

CREATE TABLE `users_public` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `value_store`
--

CREATE TABLE `value_store` (
  `id` int(10) UNSIGNED NOT NULL,
  `thekey` varchar(50) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `value_store`
--

INSERT INTO `value_store` (`id`, `thekey`, `value`) VALUES
(1, 'sitelogo', 'logo4.png'),
(2, 'navitext', ''),
(3, 'footercopyright', 'Powered by acquygiaphong.com © All right reserved. '),
(4, 'contactspage', 'Hello dear client'),
(5, 'footerContactAddr', ''),
(6, 'footerContactEmail', 'acquygiaphong@gmail.com'),
(7, 'footerContactPhone', ''),
(8, 'googleMaps', '42.671840, 83.279163'),
(9, 'footerAboutUs', ''),
(10, 'footerSocialFacebook', ''),
(11, 'footerSocialTwitter', ''),
(12, 'footerSocialGooglePlus', ''),
(13, 'footerSocialPinterest', ''),
(14, 'footerSocialYoutube', ''),
(16, 'contactsEmailTo', 'contacts@shop.dev'),
(17, 'shippingOrder', '1'),
(18, 'addJs', ''),
(19, 'publicQuantity', '0'),
(20, 'paypal_email', ''),
(21, 'paypal_sandbox', '0'),
(22, 'publicDateAdded', '0'),
(23, 'googleApi', ''),
(24, 'template', 'redlabel'),
(25, 'cashondelivery_visibility', '1'),
(26, 'showBrands', '1'),
(27, 'showInSlider', '0'),
(28, 'codeDiscounts', '1'),
(29, 'virtualProducts', '0'),
(30, 'multiVendor', '0'),
(31, 'outOfStock', '0'),
(32, 'hideBuyButtonsOfOutOfStock', '0'),
(33, 'moreInfoBtn', ''),
(34, 'refreshAfterAddToCart', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `url` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders`
--

CREATE TABLE `vendors_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `referrer` varchar(255) NOT NULL,
  `clean_referrer` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `paypal_status` varchar(10) DEFAULT NULL,
  `processed` tinyint(1) NOT NULL DEFAULT 0,
  `viewed` tinyint(1) NOT NULL DEFAULT 0,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `discount_code` varchar(20) NOT NULL,
  `vendor_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_orders_clients`
--

CREATE TABLE `vendors_orders_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `post_code` varchar(10) NOT NULL,
  `notes` text NOT NULL,
  `for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_pages`
--
ALTER TABLE `active_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm_links`
--
ALTER TABLE `confirm_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law`
--
ALTER TABLE `cookie_law`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`abbr`,`for_id`) USING BTREE;

--
-- Indexes for table `discount_codes`
--
ALTER TABLE `discount_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_clients`
--
ALTER TABLE `orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_translations`
--
ALTER TABLE `products_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_public`
--
ALTER TABLE `users_public`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `value_store`
--
ALTER TABLE `value_store`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key` (`thekey`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_pages`
--
ALTER TABLE `active_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `confirm_links`
--
ALTER TABLE `confirm_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookie_law`
--
ALTER TABLE `cookie_law`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookie_law_translations`
--
ALTER TABLE `cookie_law_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount_codes`
--
ALTER TABLE `discount_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_clients`
--
ALTER TABLE `orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_translations`
--
ALTER TABLE `products_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_pages_translations`
--
ALTER TABLE `seo_pages_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shop_categories_translations`
--
ALTER TABLE `shop_categories_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `textual_pages_tanslations`
--
ALTER TABLE `textual_pages_tanslations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_public`
--
ALTER TABLE `users_public`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `value_store`
--
ALTER TABLE `value_store`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_orders`
--
ALTER TABLE `vendors_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_orders_clients`
--
ALTER TABLE `vendors_orders_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
