-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Apr 25, 2021 at 02:25 PM
-- Server version: 8.0.23
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `detail_description` mediumtext COLLATE utf8mb4_unicode_ci,
  `count_view` bigint NOT NULL DEFAULT '0',
  `id_user` bigint DEFAULT NULL,
  `id_cate` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `short_description`, `detail_description`, `count_view`, `id_user`, `id_cate`, `created_at`, `updated_at`) VALUES
(1, 'Mới Nhất 2021: Shine Combo cắt gội 10 bước, giá chỉ 80k', 'moi-nhat-2021-shine-combo-cat-goi-10-buoc-gia-chi-80k', 'blogs/McPpVSAuhbT0G5Zp1DfSocOVj3viqXjQtv1cZlq7.jpg', 'Mới Nhất 2021: Shine Combo cắt gội 10 bước, giá chỉ 80k', '<div class=\"post-single-content box mark-links\">\n<p>Từ 28.01.2021, 30Shine triển khai g&oacute;i Shine Combo cắt gội 10 bước, gi&aacute; 80k tại tất cả salon tr&ecirc;n to&agrave;n quốc.</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22593\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/300x210-1.jpg\" alt=\"\" data-pagespeed-url-hash=\"4080132715\" />\n<figcaption>Shine Combo phi&ecirc;n bản 2021 được &aacute;p dụng từ ng&agrave;y 28.01.2021, từ thứ 2 &ndash; thứ 5 h&agrave;ng tuần.</figcaption>\n</figure>\n<p>Ra mắt ngay dịp trước Tết Nguy&ecirc;n Đ&aacute;n, khi m&agrave; c&aacute;c salon v&agrave;o thời điểm đ&ocirc;ng nhất, trước hết, đ&acirc;y l&agrave; lời tri &acirc;n m&agrave; 30Shine gửi tới anh em sau 5 năm đồng h&agrave;nh, tin tưởng. Sau l&agrave; mong muốn kh&iacute;ch lệ anh em tự tin thay đổi diện mạo, th&ecirc;m nhiều năng lượng tươi mới để c&oacute; một năm 2021 bứt ph&aacute; đầy ngoạn mục.</p>\n<p>Shine Combo cắt gội 10 bước được đ&aacute;nh gi&aacute; l&agrave; phi&ecirc;n bản to&agrave;n diện nhất, bổ sung 3 bước ho&agrave;n to&agrave;n mới trong h&agrave;nh tr&igrave;nh trải nghiệm, gi&aacute; lại cực hợp l&yacute; &ndash; l&agrave; kết quả của thời gian d&agrave;i nghi&ecirc;n cứu s&acirc;u về h&agrave;nh vi kh&aacute;ch h&agrave;ng, lắng nghe &yacute; kiến của h&agrave;ng ng&agrave;n anh em.</p>\n<p>10 bước trong Shine Combo l&agrave; sự thoả m&atilde;n từng nhu cầu ẩn s&acirc;u nhất trong từng điểm chạm: từ massage, dưỡng da,&hellip; tới việc tư vấn kiểu t&oacute;c hợp &yacute; nhất, v&agrave; chỉn chu, tỉ mỉ trong từng nh&aacute;t k&eacute;o:</p>\n<p>1.Dịch vụ mới: khai huyệt điều h&ograve;a, gi&uacute;p thư gi&atilde;n, lưu th&ocirc;ng mạch m&aacute;u.</p>\n<p>2. Rửa mặt, massage tinh chất nha đam thẩm thấu &ndash; l&agrave;m mềm da</p>\n<p>3. H&uacute;t mụn, phun nước hoa hồng c&ocirc;ng nghệ cao, l&agrave;m sạch s&acirc;u, đem đến một l&agrave;n da khỏe khoắn</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22601\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/IMG_8570-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"2935616104\" />\n<figcaption>C&aacute;c bước gội đầu, massage, dưỡng da&hellip; lu&ocirc;n khiến anh em th&iacute;ch th&uacute; v&igrave; sự sảng kho&aacute;i cực kỳ!</figcaption>\n</figure>\n<p>4. Gội đầu massage bấm huyệt cực đ&atilde;</p>\n<p>5. Dịch vụ mới: Massage rửa tai bọt sạch s&acirc;u, sảng kho&aacute;i tột đỉnh</p>\n<p>6. Dịch vụ mới: K&eacute;o khăn gi&atilde;n cơ cổ, xối nước th&aacute;c đổ &ndash; giải tỏa căng thẳng, giảm thiểu đau mỏi</p>\n<p>7. Tư vấn kiểu t&oacute;c ph&ugrave; hợp khu&ocirc;n mặt</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22597\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/IMG_8593-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"2432453203\" />\n<figcaption>Tư vấn kỹ lưỡng kiểu t&oacute;c, m&agrave;u t&oacute;c ph&ugrave; hợp gương mặt, phong c&aacute;ch</figcaption>\n</figure>\n<p>8. Cắt t&oacute;c tạo kiểu bởi stylist h&agrave;ng đầu</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22598\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/NVT02141-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"2973586830\" />\n<figcaption>30Shine lu&ocirc;n tự tin về đội ngũ Stylist l&agrave;nh nghề của m&igrave;nh</figcaption>\n</figure>\n<p>9. Cạo mặt &ecirc;m &aacute;i, xả sạch t&oacute;c con</p>\n<p>10. Vuốt s&aacute;p, xịt g&ocirc;m tạo kiểu cao cấp</p>\n<p>Vừa mới ra mắt, Shine Combo 10 bước, 80k đ&atilde; trở th&agrave;nh &ldquo;hot topic&rdquo; trong cộng đồng 30Shine, được anh em ủng hộ nhiệt t&igrave;nh.</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22599\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/IMG_8327-1-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"359936578\" />\n<figcaption>Ra mắt đ&uacute;ng dịp cuối năm, Shine Combo 10 bước khiến c&aacute;c salon n&oacute;ng hơn bao giờ hết</figcaption>\n</figure>\n<p>Lần đầu ti&ecirc;n xuất hiện tại Việt Nam một trải nghiệm cắt gội cực đ&atilde; m&agrave; gi&aacute; chỉ 80k. L&agrave; một sự lựa chọn ho&agrave;n hảo cho anh em muốn c&oacute; diện mạo bảnh bao trước thềm năm mới, lại thư gi&atilde;n, xả hơi sau những mệt mỏi ng&agrave;y cuối năm.</p>\n<p>Th&ecirc;m việc 30Shine vừa n&acirc;ng cấp h&agrave;ng loạt salon l&ecirc;n ti&ecirc;u chuẩn 6* với kh&ocirc;ng gian rộng r&atilde;i, điều ho&agrave;, nước m&aacute;t phục vụ tận nơi, wifi cực mạnh&hellip; việc đi cắt t&oacute;c đ&atilde; trở th&agrave;nh một trải nghiệm ho&agrave;n to&agrave;n thư gi&atilde;n, thoải m&aacute;i, đem lại những cảm x&uacute;c t&iacute;ch cực, tự tin.</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22600\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/NVT_1433-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"1972585096\" />\n<figcaption>Kh&ocirc;ng gian salon đẳng cấp 6* l&agrave; một điểm cộng lớn khiến anh em h&agrave;o hức tới 30Shine dịp n&agrave;y</figcaption>\n</figure>\n<p><strong>Anh em đặt lịch ngay tại website hoặc li&ecirc;n hệ hotline: 0962.370.557 để c&oacute; một diện mạo cực bảnh bao toả s&aacute;ng 2021 nh&eacute;!</strong></p>\n</div>', 4, 1, 1, '2021-04-08 07:17:46', '2021-04-25 20:54:59'),
(2, 'Siêu sale tháng 4 - Lễ hội Skincare', 'sieu-sale-thang-4-le-hoi-skincare', 'blogs/W29Hv00mypJ7hcjn9ycEZXljalKxeVlYSBjTpK6x.jpg', 'Sản phẩm đặc trị mụn ACSYS: Mua 1 tặng 1', '<div class=\"reward-detail__banner pointer\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/medium_Sale_da_12_26fe7d8d82.jpg\" alt=\"\" /></div>\n<div class=\"reward-detail__content\">\n<div>\n<p style=\"padding-left: 360px;\"><strong>SI&Ecirc;U SALE TH&Aacute;NG 4 - LỄ HỘI SKINCARE&nbsp;</strong></p>\n<p style=\"padding-left: 360px;\">Giảm tới 30% c&aacute;c sản phẩm chăm s&oacute;c da v&agrave; cơ thể.&nbsp;</p>\n<p style=\"padding-left: 360px;\">&Aacute;p dụng cho tất cả kh&aacute;ch h&agrave;ng mua sản phẩm online qua website 30shinestore.com v&agrave; fanpage 30Shine&nbsp;</p>\n<p style=\"padding-left: 360px;\"><strong>Lưu &yacute;:&nbsp;</strong></p>\n<p style=\"padding-left: 360px;\">- Thời hạn ưu đ&atilde;i từ 1/4/2021 đến 30/4/2021&nbsp;</p>\n<p style=\"padding-left: 360px;\">- Tặng Box qu&agrave; trị gi&aacute; 100,000 VNĐ cho mọi đơn h&agrave;ng&nbsp;</p>\n<p style=\"padding-left: 360px;\">- Freeship cho đơn h&agrave;ng tr&ecirc;n 300,000 VNĐ</p>\n<p style=\"padding-left: 360px;\">- Bảo h&agrave;nh 1 đổi 1 với cả c&aacute;c sản phẩm đ&atilde; qua sử dụng</p>\n</div>\n</div>', 2, 1, 2, '2021-04-25 03:41:03', '2021-04-25 20:49:47'),
(3, '1234', '1234', 'blogs/D4CHKv3MBT3IOxMrrl9yM1ffZiLgUqhM1r1mE80a.jpg', '1234', '1234', 1, 1, 1, '2021-04-25 04:11:54', '2021-04-25 20:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'tạo kiểu tóc', 'product/YMRGI7y177mUoczvxB7IEZjbKR50Dqk3cs2FnIxb.png', 'tao-kieu-toc', '2021-04-02 01:56:13', '2021-04-21 15:11:52'),
(2, 'chăm sóc tóc', NULL, 'cham-soc-toc', '2021-04-02 01:56:29', '2021-04-02 01:56:29'),
(3, 'chăm sóc da', NULL, 'cham-soc-da', '2021-04-02 01:56:49', '2021-04-02 01:56:49'),
(4, 'chăm sóc cơ thể', NULL, 'cham-soc-co-the', '2021-04-02 01:56:58', '2021-04-02 01:56:58'),
(5, 'khac', NULL, 'khac', '2021-04-03 07:37:58', '2021-04-03 07:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'thời trang tóc', NULL, 'thoi-trang-toc', '2021-04-06 09:54:53', '2021-04-06 09:54:53'),
(2, 'ưu đãi', NULL, 'uu-dai', '2021-04-25 03:34:02', '2021-04-25 03:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `category_services`
--

CREATE TABLE `category_services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_services`
--

INSERT INTO `category_services` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'cắt gội massage', 'category/a5OYpMZoV91Jm117P7POif1gQLngRW3t3QSpOesz.jpg', 'cat-goi-massage', '2021-04-01 01:39:06', '2021-04-01 01:39:06'),
(3, 'uốn', 'category/j2zEIWBpEImxDXH3NvktHR6JjVkjjyeZI3WuvKjf.jpg', 'uon', '2021-04-01 01:39:43', '2021-04-01 01:39:43'),
(4, 'nhuộm', 'category/pAiFaxtqpl94ZV8YgUXCjYXYRBZH85LsiJTBmpSO.jpg', 'nhuo', '2021-04-01 01:40:31', '2021-04-01 01:40:31'),
(5, 'dịch vụ khác', 'category/QopCrx3GJIx6YffORAoYXifTrDYyrIKSRtm3AllQ.jpg', 'dich-vu-khac', '2021-04-01 01:41:43', '2021-04-01 01:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'a', 1, 6, '2021-04-25 02:48:40', '2021-04-25 02:48:40'),
(2, 'hello\n', 1, 6, '2021-04-25 03:06:35', '2021-04-25 03:06:35'),
(3, 'hi', 1, 6, '2021-04-25 03:06:51', '2021-04-25 03:06:51'),
(4, '23', 1, 6, '2021-04-25 03:07:30', '2021-04-25 03:07:30'),
(5, 'asf', 1, 6, '2021-04-25 03:07:49', '2021-04-25 03:07:49'),
(6, 'asdfa', 1, 6, '2021-04-25 03:07:56', '2021-04-25 03:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2021_02_08_180455_create_sessions_table', 1),
(20, '2021_02_18_151420_create_products_table', 1),
(21, '2021_02_20_131843_create_product_images_table', 1),
(22, '2021_02_21_090029_create_sliders_table', 1),
(23, '2021_02_21_140332_create_trix_rich_texts_table', 1),
(24, '2021_03_01_135044_create_comments_table', 1),
(25, '2021_03_27_164052_create_roles_table', 1),
(26, '2021_02_18_151151_create_categories_table', 2),
(27, '2021_04_01_074928_create_category_services_table', 3),
(31, '2021_04_01_084212_create_services_table', 4),
(34, '2021_04_02_151432_create_orders_table', 5),
(35, '2021_04_04_003422_create_order_details_table', 5),
(36, '2021_04_06_164005_create_category_news_table', 6),
(42, '2021_04_06_165921_create_blogs_table', 7),
(43, '2021_04_21_142813_create_settings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1' COMMENT '1:đặt lịch - đặt hàng\r\n2: đã xác nhận\r\n3: đang gửi\r\n4: đã thanh toán\r\n5: không nhận hàng\r\n6: hủy',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user_order` bigint DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `time_shift` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone_number`, `email`, `address`, `status`, `note`, `id_user`, `id_user_order`, `book_date`, `time_shift`, `created_at`, `updated_at`) VALUES
(1, 'phạm hiếu', '0962370557', NULL, 'hn', 7, 'ok', NULL, 1, '2021-04-04', '10:00:00', '2021-04-03 17:51:56', '2021-04-24 03:00:21'),
(2, 'hoàng', '5333353', NULL, NULL, 7, 'a', '2', NULL, '2021-04-09', '08:00:00', '2021-04-09 05:38:53', '2021-04-24 03:00:21'),
(3, 'long', '1234', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, '2021-04-15 15:11:12', '2021-04-23 02:40:38'),
(4, 'xuân', '1234', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, '2021-04-15 15:11:22', '2021-04-23 02:40:46'),
(5, 'thu', '1234', NULL, '1234', 5, NULL, NULL, NULL, NULL, NULL, '2021-04-15 17:03:19', '2021-04-23 23:55:02'),
(6, 'Phạm Hiếu', '0962370557', NULL, NULL, 3, 'ok', NULL, 1, NULL, NULL, '2021-04-18 21:35:13', '2021-04-23 23:54:56'),
(7, 'phan minh', '1234567890', NULL, 'Hai phong', 4, NULL, NULL, NULL, NULL, NULL, '2021-04-18 21:48:23', '2021-04-23 02:41:07'),
(8, 'hạ', '9876543210', NULL, NULL, 7, 'hello', '2', NULL, '2021-04-20', '11:00:00', '2021-04-19 12:44:29', '2021-04-24 03:00:21'),
(9, 'phương', '1234567891', NULL, NULL, 7, '123', NULL, NULL, '2021-04-19', '10:00:00', '2021-04-19 13:17:35', '2021-04-24 03:00:21'),
(10, 'Phạm Hiếu', '0962370557', 'admin@gmail.com', 'Đông anh - Hà Nội', 1, NULL, NULL, NULL, NULL, NULL, '2021-04-19 13:28:37', '2021-04-19 13:28:37'),
(11, 'đông', '123412341', NULL, NULL, 7, '1234', '2', NULL, '2021-04-22', '20:00:00', '2021-04-20 12:43:08', '2021-04-24 03:00:21'),
(12, 'triều', '0123456789', NULL, NULL, 7, '123412312', NULL, NULL, '2021-04-20', '10:00:00', '2021-04-20 14:15:23', '2021-04-24 03:00:21'),
(13, 'hoa', '0987645321', NULL, NULL, 4, 'safd', NULL, NULL, '2021-04-20', '11:00:00', '2021-04-20 14:48:58', '2021-04-24 00:19:45'),
(14, 'như', '0987645321', NULL, NULL, 7, 'safd', '', NULL, '2021-04-20', '11:00:00', '2021-04-20 14:50:30', '2021-04-24 03:00:21'),
(15, 'linh', '0987645321', NULL, NULL, 7, 'safd', '', NULL, '2021-04-20', '11:00:00', '2021-04-20 14:50:39', '2021-04-24 03:00:21'),
(16, 'dương', '0987645321', NULL, NULL, 7, 'safd', NULL, NULL, '2021-04-20', '11:00:00', '2021-04-20 14:51:08', '2021-04-24 03:00:21'),
(17, 'ngọc', '0659848595', NULL, 'HN', 4, 'asfasdwqrqw', NULL, NULL, '2021-04-22', '13:00:00', '2021-04-20 14:51:32', '2021-04-24 02:27:28'),
(18, 'hà', '0659848595', NULL, NULL, 2, 'asfasdwqrqw', NULL, NULL, '2021-04-24', '10:00:00', '2021-04-20 14:52:40', '2021-04-24 00:55:09'),
(19, 'lan', '6546546544', NULL, 'asf', 4, 'ASFASDFASD', NULL, NULL, NULL, NULL, '2021-04-20 16:45:48', '2021-04-20 16:48:33'),
(20, 'john', '0123123123', NULL, 'adsfb', 2, 'ádf', NULL, NULL, NULL, NULL, '2021-04-20 23:22:31', '2021-04-20 23:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint UNSIGNED NOT NULL,
  `id_order` bigint NOT NULL,
  `id_ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality_ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_ps`, `quality_ps`, `price`, `created_at`, `updated_at`, `type`) VALUES
(5, 2, '1', '1', 80000, '2021-04-15 19:45:11', '2021-04-15 19:45:11', 1),
(6, 2, '6', '3', 470000, '2021-04-15 19:45:11', '2021-04-15 19:45:11', 2),
(7, 1, '6', '1', 470000, '2021-04-18 16:29:12', '2021-04-18 16:29:12', 2),
(8, 1, '1', '1', 80000, '2021-04-18 16:29:12', '2021-04-18 16:29:12', 1),
(17, 9, '1', '1', 0, '2021-04-19 13:24:04', '2021-04-19 13:24:04', 1),
(18, 10, '6', '3', NULL, '2021-04-19 13:28:37', '2021-04-19 13:28:37', 2),
(19, 10, '7', '3', NULL, '2021-04-19 13:28:37', '2021-04-19 13:28:37', 2),
(20, 12, '1', NULL, NULL, '2021-04-20 14:21:34', '2021-04-20 14:21:34', 1),
(30, 19, '7', '2', 142000, '2021-04-20 16:48:33', '2021-04-20 16:48:33', 2),
(31, 19, '1', '1', 80000, '2021-04-20 16:48:33', '2021-04-20 16:48:33', 1),
(32, 19, '6', '1', 470000, '2021-04-20 16:48:33', '2021-04-20 16:48:33', 2),
(37, 20, '6', '1', 470000, '2021-04-20 23:24:14', '2021-04-20 23:24:14', 2),
(38, 20, '7', '3', 142000, '2021-04-20 23:24:14', '2021-04-20 23:24:14', 2),
(40, 3, '8', '1', 230000, '2021-04-23 02:40:38', '2021-04-23 02:40:38', 2),
(41, 4, '9', '1', 300000, '2021-04-23 02:40:46', '2021-04-23 02:40:46', 2),
(44, 7, '6', '3', 470000, '2021-04-23 02:41:07', '2021-04-23 02:41:07', 2),
(45, 6, '6', '1', 470000, '2021-04-23 23:54:56', '2021-04-23 23:54:56', 2),
(46, 6, '8', '2', 0, '2021-04-23 23:54:56', '2021-04-23 23:54:56', 2),
(47, 5, '7', '1', 142000, '2021-04-23 23:55:02', '2021-04-23 23:55:02', 2),
(48, 5, '6', '2', 470000, '2021-04-23 23:55:02', '2021-04-23 23:55:02', 2),
(50, 13, '1', NULL, 80000, '2021-04-24 00:19:45', '2021-04-24 00:19:45', 1),
(51, 13, '1', NULL, 80000, '2021-04-24 00:19:45', '2021-04-24 00:19:45', 1),
(53, 16, '1', '1', 80000, '2021-04-24 00:32:22', '2021-04-24 00:32:22', 1),
(58, 18, '1', '1', 80000, '2021-04-24 00:55:09', '2021-04-24 00:55:09', 1),
(65, 17, '1', '1', 80000, '2021-04-24 02:27:28', '2021-04-24 02:27:28', 1),
(66, 17, '6', '1', 470000, '2021-04-24 02:27:28', '2021-04-24 02:27:28', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` bigint NOT NULL,
  `sale_price` bigint DEFAULT NULL,
  `feature_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `count_view` int NOT NULL DEFAULT '0',
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `regular_price`, `sale_price`, `feature_img`, `short_description`, `detail_description`, `featured`, `count_view`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'Sáp By Vilain Gold Digger Phiên Bản Đặc Biệt 2020', 'sap-by-vilain-gold-digger-phien-ban-dac-biet-2020', 500000, 470000, 'product/oUQ3aD25o3THSP6Ouddjc9N0tyNZUPlpQjYQ4Jpt.jpg', 'qwer', '1234', 0, 0, 1, '2021-04-07 04:53:31', '2021-04-08 09:01:33'),
(7, '12345', '12345', 150000, 142000, 'product/bEqUsWS3TUnfU0NdVVNLNpLifWzK0qHCfTPjmfKN.png', 'alo', 'alo', 0, 0, 2, '2021-04-19 13:27:27', '2021-04-19 13:27:27'),
(8, 'Sáp Reuzel Clay Matte Pomade Giữ Nếp Vừa - Không Bóng - Tan Trong Nước', 'sap-reuzel-clay-matte-pomade-giu-nep-vua-khong-bong-tan-trong-nuoc', 230000, NULL, 'product/11jsqEV857wResK6JsRkouo6UXy4waXFkKDgg6Ba.jpg', 'Ai biết đến Reuzel đều biết hãng đã đầu tư vào mùi hương cho sản phẩm như nào. Phiên bản Reuzel clay matte có mùi bạc hà the mát, tạo cảm giác thư giãn, sảng khoái cực đã hợp cho việc vuốt sáp vào mùa hè nóng bức.', '1. Chất sáp Reuzel Clay Matte Pomade \nXu thế của dòng sản phẩm sáp trên thế giới đều đang tập trung phát triển “clay pomade” với các tiêu chí đặc trưng là giảm độ bóng tới mức bóng mờ (matte), giảm độ bết (greasy) để phù hợp với nhu cầu ngày càng cao của khách hàng thì Reuzel cũng không phải ngoại lệ khi mới đây thôi hãng đã cho ra mắt REUZEL clay matte pomade.', 0, 0, 1, '2021-04-22 15:38:44', '2021-04-22 15:38:44'),
(9, 'Kem Tạo Kiểu Reuzel Matte Styling Paste 100ml', 'kem-tao-kieu-reuzel-matte-styling-paste-100ml', 300000, NULL, 'product/kTHJUmifNn2o3ljEb4dX13CybpoCn9vgLrTbMiyY.jpg', 'Vẫn là dòng sản phẩm đến từ thương hiệu Reuzel đình đám, Matte Styling Paste là dòng sản phẩm gel vuốt tóc được thiết kế dành riêng cho những anh chàng có phong cách trẻ trung thay vì chải nếp cứng cáp, phù hợp với nhiều kiểu tóc dù ngắn hay dài. Đặc biệt đây là loại kem vuốt tóc không chứa cồn, không bong tróc với thành phần chính là hạt phỉ, lá cây Tầm Mã, Hương Thảo, cỏ đuôi ngựa cung cấp độ ẩm và hỗ trợ nuôi dưỡng tóc.', 'Cấu tạo chất sáp Reuzel Matte Styling Paste\n\nSản phẩm có kết cấu gel dạng sệt, cực dễ tan và dễ vuốt. Khi apply sản phẩm trên tóc đều không bị bết dính, không để lại tạp chất dư thừa sau khi sử dụng mà vẫn cho khả năng giữ nếp tốt, mềm mại cho mái tóc.\n\nMùi hương của sản phẩm kem tạo kiểu Matte Styling Paste\n\nMùi rượu rum nam tính của Reuzel Matte Styling Paste đã chinh phục mọi giác quan của anh chàng hiện đại, còn bạn thì sao?\n\nĐộ giữ nếp, tạo phồng của Reuzel Matte Styling Paste\n\nNếu anh cần một con sáp dạng gel có công năng tăng độ dày, độ phồng cho tóc thì đừng bỏ qua Matte Styling Paste. Một điểm mạnh không thể bỏ qua của em nó chính là khả năng tạo kiểu linh hoạt cho phép restyling dễ dàng sau khi đội mũ bảo hiểm.', 0, 0, 1, '2021-04-22 15:40:39', '2021-04-22 15:40:39'),
(10, 'DẦU GỘI TIGI RECOVERY 400ml - Phiên bản mới 2021', 'dau-goi-tigi-recovery-400ml-phien-ban-moi-2021', 400000, NULL, 'product/rslbXrZVOkEiFkp2xoWAnVdrqEA5tHAPtvpLKVcE.webp', 'Dầu gội Bed Head\'s RecoveryTM: Công thức giàu chất dưỡng ẩm, không chỉ được thiết kế riêng mà còn được sử dụng bởi các người thợ làm tóc chuyên nghiệp. Mang lại kết quả và trải nghiệm như salon ngay tại nhà. ', '<p><strong>M&Ocirc; TẢ SẢN PHẨM:</strong></p>\n<p>&bull; Dầu gội Bed Head\'s RecoveryTM: C&ocirc;ng thức gi&agrave;u chất dưỡng ẩm, kh&ocirc;ng chỉ được thiết kế ri&ecirc;ng m&agrave; c&ograve;n được sử dụng bởi c&aacute;c người thợ l&agrave;m t&oacute;c chuy&ecirc;n nghiệp. Mang lại kết quả v&agrave; trải nghiệm như salon ngay tại nh&agrave;.&nbsp;</p>\n<p>&bull; Cung cấp cho m&aacute;i t&oacute;c kh&ocirc; v&agrave; thiếu độ ẩm một liều dưỡng ẩm nhanh ch&oacute;ng c&ugrave;ng Dầu gội Bed Head\'S RecoveryTM! Với c&ocirc;ng nghệ vượt trội gi&uacute;p c&aacute;c th&agrave;nh phần dưỡng ẩm lưu lại tr&ecirc;n t&oacute;c, gi&uacute;p t&oacute;c được cung cấp độ ẩm suốt cả ng&agrave;y d&agrave;i. Dầu gội dưỡng ẩm n&agrave;y gi&uacute;p dưỡng ẩm, l&agrave;m sạch s&acirc;u v&agrave; l&agrave;m mềm t&oacute;c kh&ocirc;. Dầu gội c&ograve;n gi&uacute;p bảo vệ t&oacute;c khỏi những hư tổn trong tương lai. Gi&uacute;p t&oacute;c b&oacute;ng mượt, mềm mại, mượt m&agrave; v&agrave; khỏe mạnh.&nbsp;</p>\n<p>&bull; C&ocirc;ng thức với Glycerin để cung cấp độ ẩm v&agrave; dưỡng, Dimethiconol để bảo vệ t&oacute;c khỏi những hư tổn trong tương lai v&agrave; giữ cho t&oacute;c lu&ocirc;n khỏe mạnh, Silicones để tăng độ mềm v&agrave; b&oacute;ng v&agrave; Chiết xuất c&acirc;y xương rồng Prickly Pear, được biết đến với đặc t&iacute;nh hồi phục.&nbsp;</p>\n<p>&bull; Hương thơm Zesty v&agrave; tr&agrave;n đầy sinh lực.</p>\n<p>&nbsp;</p>\n<p><strong>Cung cấp độ ẩm ho&agrave;n hảo cho m&aacute;i t&oacute;c kh&ocirc; xơ v&agrave; an to&agrave;n với m&agrave;u nhuộm</strong></p>\n<p>&nbsp;</p>\n<p><strong>HDSD:</strong></p>\n<p>M&aacute;t xa dầu gội tr&ecirc;n t&oacute;c ướt, sau đ&oacute; xả sạch. Để c&oacute; kết quả tốt nhất, sử dụng kết hợp với dầu xả Recovery</p>', 0, 0, 2, '2021-04-24 17:36:02', '2021-04-24 18:12:19'),
(11, 'Dầu Gội - Xả - Tắm 3 Trong 1 Reuzel', 'dau-goi-xa-tam-3-trong-1-reuzel', 196000, NULL, 'product/Lc5dYCG8IEn6KAKdWWsbCM6DNokEyte6AqRg7xSH.webp', '✅ Hãng sản xuất : Reuzel\n\n✅  Xuất xứ: Mỹ\n\n✅ Trọng lượng: 100ml và 350ml', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/cb2e13e0e90c008ff2fe0daa8b1c3588_507f04f6727e47a88c89ce440c94b5b7_grande.jpeg\" /></p>\n<h2><span style=\"font-size: 11pt;\"><strong>M&ocirc; Tả Sản Phẩm:</strong></span></h2>\n<p>Bạn đang cần một sản phẩm tiện lợi cho những ng&agrave;y phải đi xa nh&agrave;? Hay chỉ đơn giản l&agrave; th&iacute;ch những thứ đơn giản? Thế th&igrave; nhớ mang Reuzel 3-in-1 Gội, Xả v&agrave; Tắm to&agrave;n th&acirc;n theo nh&eacute;. N&oacute; rất đa năng, gi&uacute;p bạn tắm v&agrave; xả lu&ocirc;n. Rất ph&ugrave; hợp với c&aacute;c anh mang theo m&igrave;nh khi đi tập hoặc đi du lịch</p>\n<p>Dầu gội ba trong một của Reuzel khiếm việc tắm trở n&ecirc;n đơn giản hơn bao giờ hết. khi m&agrave; b&aacute;n sở hữu cho m&igrave;nh một sản phẩm vừa l&agrave; dầu gội, dầu xả, dầu tắm c&aacute;c bạn sẽ c&oacute; thể kết th&uacute;c được c&ocirc;ng việc tắm rửa một c&aacute;ch nhanh ch&oacute;ng v&agrave; kh&ocirc;ng phải qu&aacute; cầu k&igrave; v&agrave; dườm gi&agrave; sử dụng nhiều sản phẩm mỗi thứ một nơi như trước đ&acirc;y nữa.</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/78428e2413f65752ca0a8d60c3e64ad2_168ef5a180384d478a6ef41bfd5d6b5a_grande.jpeg\" /></p>\n<p>Sản phẩm n&agrave;y sẽ tiết kiệm cho c&aacute;c bạn rất nhiều diện t&iacute;ch trong ph&ograve;ng tắm c&aacute; nh&acirc;n của m&igrave;nh. Đơn giản, tiện lợi cho người d&ugrave;ng l&agrave; những g&igrave; m&agrave; Reuzel muốn đem lại cho người sử dụng, dễ d&agrave;ng di chuyển mọi nơi c&ugrave;ng bạn đi chơi, đi du lịch hay những huyến c&ocirc;ng t&aacute;c d&agrave;i ng&agrave;y.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>C&ocirc;ng Dụng:</strong></p>\n<p>Dễ d&agrave;ng tẩy rửa khử dầu cho m&aacute;i t&oacute;c đem lại cho người sử dụng c&oacute; một m&aacute;i t&oacute;c sạch sẽ gọn nhẹ. Bổ sung th&ecirc;m độ ẩm phục hồi c&aacute;c hư tổn của m&aacute;i t&oacute;c khiến cho m&aacute;i t&oacute;c trở n&ecirc;n mền mượt chắc khỏa hơn.</p>\n<p>Loại bỏ ho&agrave;n to&agrave;n da chết l&agrave;m sạch cơ thể hiệu quả. Cung cấp độ ẩm cho da l&agrave;m cho l&agrave;m da của anh em trở n&ecirc;n mềm mượt hơn rất nhiều, sử dụng c&aacute;c chất tẩy rửa từ tự nhi&ecirc;n rất an to&agrave;n cho người sử dụng.</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/99eee4a044b2f34c8a330d36c8bbb06e_c0114591330d4ae8922fcb0c7009aaed_grande.jpeg\" /></p>\n<p>L&agrave; một c&aacute;ch thức rất đơn giản để bạn c&oacute; thể l&agrave;m sạch từ đầu đến ch&acirc;n mỗi ng&agrave;y kh&ocirc;ng cần phải qu&aacute; lỉnh kỉnh, phức tạp. M&ugrave;i hương nước hoa cổ điển nhẹ nh&agrave;ng cuốn h&uacute;t người sử dụng. Tạo cho người sử dụng lu&ocirc;n lu&ocirc;n c&oacute; một sự lu&ocirc;i cuốn ở những nơi m&agrave; họ xuất hi&ecirc;n.</p>\n<ul>\n<li>Sản phẩm đa năng: dầu g&ocirc;i, dầu xả v&agrave; sữa tắm</li>\n<li>Tinh dầu tr&agrave; gi&uacute;p dưỡng v&agrave; l&agrave;m mềm mịn da</li>\n<li>L&agrave;m sạch bụi bẩn, b&atilde; nhờn tr&ecirc;n da đầu</li>\n<li>Nu&ocirc;i dưỡng v&agrave; bảo vệ m&aacute;i t&oacute;c</li>\n<li>Cung cấp độ ẩm, dưỡng chất cho t&oacute;c</li>\n<li>Hạn chế t&igrave;nh trạng kh&ocirc; xơ t&oacute;c</li>\n</ul>\n<p>&nbsp;</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/reuzel-teatree-trio_6382387ffc8f44f4b2bdb6d86926273e_grande.jpg\" /></p>\n<p><strong>Hướng dẫn sửa dụng</strong></p>\n<p>Tắm với nước rồi thoa l&ecirc;n t&oacute;c v&agrave; to&agrave;n th&acirc;n, thoa đến khi n&agrave;o sạch th&igrave; th&ocirc;i nh&eacute;. Tắm lại với nước l&agrave; xong rồi.</p>', 0, 0, 2, '2021-04-25 21:17:46', '2021-04-25 21:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `id_product`, `created_at`, `updated_at`) VALUES
(6, 'product_image/i8Kg2vmq0utLcdipcBMNmknKBHgZcahpl0QxVzsc.jpg', 6, '2021-04-07 04:53:31', '2021-04-07 04:53:31'),
(7, 'product_image/WgxHYPH9J5la2lnwx3Fvj1t9lwzpUKR7cGSndZ6B.jpg', 6, '2021-04-07 04:53:31', '2021-04-07 04:53:31'),
(8, 'product_image/W4FbpNguJw6EC7I48wNGBixcDCWeFac4v6NLZrgv.png', 7, '2021-04-19 13:27:27', '2021-04-19 13:27:27'),
(9, 'product_image/6Kl0189sos4v4YoTWMzUBzbT0unUo9WKC6cXVQGa.png', 7, '2021-04-19 13:27:27', '2021-04-19 13:27:27'),
(10, 'product_image/aIc3FuBMWBAtBravNLBYPw0Slk0hcURMoEEOSBiD.png', 7, '2021-04-19 13:27:27', '2021-04-19 13:27:27'),
(11, 'product_image/c7LsYyp3I33r04wmsPBierI3Aw4WBtqO6nVZ41Tn.png', 7, '2021-04-19 13:27:27', '2021-04-19 13:27:27'),
(12, 'product_image/Uh1NE9gd9RWBKqtI4wH8oBAvVpvHWEKkTh5zDLfk.png', 7, '2021-04-19 13:27:27', '2021-04-19 13:27:27'),
(13, 'product_image/Kw5FXnbu6YtTea1m4BpGqADV9d2ceOSLYFiJTsMF.jpg', 8, '2021-04-22 15:38:44', '2021-04-22 15:38:44'),
(14, 'product_image/sAQ2dWQOhywLwSUYQwhxfOgomUo261jWIAMIXIp5.jpg', 8, '2021-04-22 15:38:44', '2021-04-22 15:38:44'),
(15, 'product_image/2E2Nvt3wTMuxJSVVcTHtIalMuElRczeYCMyboX8R.jpg', 9, '2021-04-22 15:40:39', '2021-04-22 15:40:39'),
(17, 'product_image/lpq1AicQY5AdYF0vjFNW4AdkmhS6Z077kw10MWxx.webp', 10, '2021-04-24 18:12:18', '2021-04-24 18:12:18'),
(18, 'product_image/Wihs2aRPpvzpGdAQSf0svcq2U9r7OD71Ctr4SuDG.webp', 10, '2021-04-24 18:12:19', '2021-04-24 18:12:19'),
(19, 'product_image/S4m2ttzC5Uvxb9zGZgiDRlD9eRlEurqDUnkmQvgN.webp', 11, '2021-04-25 21:17:47', '2021-04-25 21:17:47'),
(20, 'product_image/mvwgJJSeMFNHpO7lCQsX3s3W5D7He82LtVOznydH.webp', 11, '2021-04-25 21:17:47', '2021-04-25 21:17:47'),
(21, 'product_image/K7DqZ1k7CaX5PZlMI7CCPL4ZPEIFBl7beHep6uai.webp', 11, '2021-04-25 21:17:47', '2021-04-25 21:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(2, 'employee', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(3, 'staff', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(4, 'member', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(5, 'guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cate` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `content`, `price`, `image`, `id_cate`, `created_at`, `updated_at`) VALUES
(1, 'cắt gội 10 bước', 'cat-goi-10-buoc', '1. Massage khai huyệt điều hòa (mới)\nĐầu tiên khi mới bắt đầu, anh sẽ được massage khai huyệt điều hòa, giúp anh thư giãn và lưu thông mạch máu. Skinner sẽ ấn vào các huyệt ngủ để bắt đầu quá trình thư giãn tại các bước sau\nShine combo cắt gội 10 bước\nShine combo cắt gội 10 bước\n2. Rửa mặt – massage tinh chất nha đam thẩm thấu\nĐây là bước làm sạch mặt anh sau một ngày dài tiếp xúc với bụi bẩn. Tiếp đó, các bạn skinner sẽ massage mặt bằng tinh chất nha đam thẩm thấu. Những động tác uyển chuyển, mềm mại sẽ giúp da anh trở nên căng mọng và sảng khoái\n3. Hút mụn – phun nước hoa hồng công nghệ cao\nSau khi được massage êm ái, bạn Skinner sẽ giúp anh hút hết các bã mụn nhờn trên mặt bằng máy hút mụn khử trùng. Tiếp đó là phun nước hoa hồng công nghệ cao giúp se nhỏ lỗ chân lông, bổ sung dưỡng chất cho da\nShine combo cắt gội 10 bước\nShine combo cắt gội 10 bước\n4. Gội đầu massage bấm huyệt\nKhi đã có một khuôn mặt đẹp trai, sạch sẽ, anh sẽ được skinner gội và massage đầu bấm huyệt một cách kỹ càng. Sử dụng dầu gội đầu chuẩn salon, không gây gàu, hư tổn cho tóc. Massage bấm huyệt đánh bay cơn đau đầu, giúp đầu nhẹ bẫng và có cảm giác thư thái nhất', 80000, 'product/ywmZeZ6BjXvAAySq5yeW2hqAsmP3KhjZv1aTppzS.jpg', 2, '2021-04-01 07:41:36', '2021-04-22 18:18:13'),
(2, 'kid combo', 'kid-combo', '<p>kid combo</p>', 70000, 'service/6f6sV3s4my3oMa2nYJH9VvKBfkwhDX3Ly1emP1BK.jpg', 2, '2021-04-08 06:26:34', '2021-04-08 09:10:12'),
(3, 'uốn cao cấp', 'uon-cao-cap', 'qwrqr', 315000, 'service/jCOAxvzHhoU2VoeWq7X5etZ1BFM1Xfmt8TVccll0.jpg', 3, '2021-04-22 20:45:45', '2021-04-22 20:45:45'),
(4, 'uốn tiêu chuẩn', 'uon-tieu-chua', '1234', 260000, 'service/v0fO1H7eMfd2rbSamO2Kem86Ga8jjBrrf5mjPUBm.jpg', 3, '2021-04-22 20:46:14', '2021-04-22 20:46:14'),
(5, 'uốn con sâu', 'uon-con-sau', '12431234', 450000, 'service/Aj8se5lfo7UBMUs0SvktMY5hwvTdlWCEYsMV11Zb.jpg', 3, '2021-04-22 20:46:39', '2021-04-22 20:46:39'),
(6, 'premlock', 'premlock', '1224', 799000, 'service/PTEK03ZhlWFM2KLrxUtBxzqAMQm4CJzHN5295uTZ.jpg', 3, '2021-04-22 20:47:05', '2021-04-22 20:47:05'),
(7, 'nhuộm đen phủ bạc', 'nhuom-den-phu-bac', '1234', 180000, 'service/eM4QtPBXEdS0MB6xMo7oVlEa4Y62d5amr01jOCE2.jpg', 4, '2021-04-22 20:47:53', '2021-04-22 20:47:53'),
(8, 'nhuộm nâu cao cấp', 'nhuom-nau-cao-cap', '24', 225000, 'service/HxWrQv68tkJZItawgcXTAi5VOB6Fl5Qk1DTtBi1b.jpg', 4, '2021-04-22 20:48:17', '2021-04-22 20:48:17'),
(9, 'nhuộm thời trang không tẩy', 'nhuom-thoi-trang-khong-tay', '1234', 260000, 'service/kx63DvWDG4yCLpCyJ2Klk2UeAkDxB3DEHu09ChEC.jpg', 4, '2021-04-22 20:48:47', '2021-04-22 20:48:47'),
(10, '124', '124', '&agrave;d', 1234, 'service/zyZ5VfzIguICyIxGKNy2okgUYHyeJt17wL6xYBbx.jpg', 5, '2021-04-22 23:57:32', '2021-04-23 00:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yNEiN5KV5pTiEKIFGfi27hrt9pG4TMX2CXzaKAVq', 1, '172.19.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:87.0) Gecko/20100101 Firefox/87.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoibFJkQWNJWFFiMVdXbXY1NWdiUHBMZjl2Ymw0ZFFTTzRRaTVEUGJ2VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTc6Imh0dHA6Ly9zYWxvbi5oYWlyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovL3NhbG9uLmhhaXIvYWRtaW4vYmxvZ3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NzoiaWRfcm9sZSI7czoxOiIxIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGI5Mk9PcVd4ZEUuS1VHQkRGcHdKck91WFJDZkNYN1I4dE0zeTV4ODhlL1RUTm1vcmR2am9HIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRiOTJPT3FXeGRFLktVR0JERnB3SnJPdVhSQ2ZDWDdSOHRNM3k1eDg4ZS9UVE5tb3JkdmpvRyI7fQ==', 1619360293);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone_number`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'setting/oKNNV5tURORmfVIVUU04wglGCQIEo5fiJdJq2E3p.png', '0962370557', 'hieupvph12651@fpt.edu.vn', 'Số 1 Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', NULL, '2021-04-25 19:17:37');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `url_image`, `url_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'slider/U27Y8fks9LlPTrwh1X7mMO9hKVJGM4LuI42MalS7.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `id_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'Phạm Hiếu', '0962370557', 'admin@gmail.com', NULL, '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, NULL, NULL, 'profile-photos/uPbfaQcdEYhis5kcyNhFdlHDUaPb20Lf4MKpq6Aa.jpg', '1', '2021-03-27 10:25:32', '2021-04-25 03:04:07'),
(2, 'Ora Hoppe', '123', 'nreilly@example.net', '2021-03-27 10:31:13', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'XMxtlpM7McTMoom0S5Y1vv0zKjAzNszWzvucAApsYW7S1TiqgUeFq8afmukl', NULL, NULL, '3', '2021-03-27 10:31:13', '2021-03-27 10:31:13'),
(3, 'Mrs. Alexanne Runte', '+1.904.414.1821', 'desiree31@example.com', '2021-03-27 10:31:13', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'Jq9mNozgdF', NULL, NULL, '3', '2021-03-27 10:31:13', '2021-03-27 10:31:13'),
(4, 'Prof. Dawn Koepp MD', '+1-941-541-5014', 'trevor46@example.org', '2021-03-27 10:31:13', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'PxLZZmSvB3', NULL, NULL, '3', '2021-03-27 10:31:13', '2021-03-29 10:46:48'),
(5, 'Madisyn Macejkovic', '1-225-500-6086', 'fay35@example.com', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'z4QjeWYIuh', NULL, NULL, '3', '2021-04-01 09:05:49', '2021-04-01 09:05:49'),
(6, 'Prof. Murray Ortiz', '404-598-2290', 'cjakubowski@example.net', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'oFnnBjr8x9', NULL, NULL, '3', '2021-04-01 09:05:49', '2021-04-01 09:05:49'),
(7, 'Prof. Adrianna Pfannerstill', '+1.830.966.9416', 'rdurgan@example.org', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'dJtGMCEuKv', NULL, NULL, '3', '2021-04-01 09:05:49', '2021-04-01 09:05:49'),
(8, 'Rhea Schroeder', '+1-246-219-4476', 'edgardo79@example.org', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, '0GIlUrMFOr', NULL, NULL, '4', '2021-04-01 09:05:49', '2021-04-01 09:05:49'),
(9, 'Savanna Mueller', '1-247-637-6896', 'mabelle.smith@example.com', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'Hl1Q9VfIme', NULL, NULL, '4', '2021-04-01 09:05:49', '2021-04-01 09:05:49'),
(10, 'Nikita Shanahan', '+1-872-724-0517', 'retha30@example.org', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, '5hOJ43es6A', NULL, NULL, '4', '2021-04-01 09:05:49', '2021-04-01 09:05:49'),
(11, 'Jaylon Hoeger', '+1.727.984.3229', 'augustine89@example.com', '2021-04-01 09:05:49', '$2y$10$b92OOqWxdE.KUGBDFpwJrOuXRCfCX7R8tM3y5x88e/TTNmordvjoG', NULL, NULL, 'D3QF82oF2Q', NULL, NULL, '4', '2021-04-01 09:05:49', '2021-04-01 09:07:36'),
(12, '1124', '1234', 'a@gmail.com', NULL, '$2y$10$gFOkqOamdLbXArnnqhsWXue2DmwgK.Zv5viPBACLY5BhGCD4vpH4m', NULL, NULL, NULL, NULL, NULL, '4', '2021-04-11 11:12:16', '2021-04-11 11:12:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_news_name_unique` (`name`),
  ADD UNIQUE KEY `category_news_slug_unique` (`slug`);

--
-- Indexes for table `category_services`
--
ALTER TABLE `category_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_services_name_unique` (`name`),
  ADD UNIQUE KEY `category_services_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_services`
--
ALTER TABLE `category_services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
