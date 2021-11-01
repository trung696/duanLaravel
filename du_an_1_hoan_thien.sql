-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 20, 2021 lúc 04:24 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1_hoan_thien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` bigint(20) NOT NULL DEFAULT 0,
  `id_user` bigint(20) DEFAULT NULL,
  `id_cate` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image`, `short_description`, `detail_description`, `count_view`, `id_user`, `id_cate`, `created_at`, `updated_at`) VALUES
(1, 'Mới Nhất 2021: Shine Combo cắt gội 10 bước, giá chỉ 80k', 'moi-nhat-2021-shine-combo-cat-goi-10-buoc-gia-chi-80k', 'blogs/McPpVSAuhbT0G5Zp1DfSocOVj3viqXjQtv1cZlq7.jpg', 'Mới Nhất 2021: Shine Combo cắt gội 10 bước, giá chỉ 80k', '<div class=\"post-single-content box mark-links\">\n<p>Từ 28.01.2021, 30Shine triển khai g&oacute;i Shine Combo cắt gội 10 bước, gi&aacute; 80k tại tất cả salon tr&ecirc;n to&agrave;n quốc.</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22593\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/300x210-1.jpg\" alt=\"\" data-pagespeed-url-hash=\"4080132715\" />\n<figcaption>Shine Combo phi&ecirc;n bản 2021 được &aacute;p dụng từ ng&agrave;y 28.01.2021, từ thứ 2 &ndash; thứ 5 h&agrave;ng tuần.</figcaption>\n</figure>\n<p>Ra mắt ngay dịp trước Tết Nguy&ecirc;n Đ&aacute;n, khi m&agrave; c&aacute;c salon v&agrave;o thời điểm đ&ocirc;ng nhất, trước hết, đ&acirc;y l&agrave; lời tri &acirc;n m&agrave; 30Shine gửi tới anh em sau 5 năm đồng h&agrave;nh, tin tưởng. Sau l&agrave; mong muốn kh&iacute;ch lệ anh em tự tin thay đổi diện mạo, th&ecirc;m nhiều năng lượng tươi mới để c&oacute; một năm 2021 bứt ph&aacute; đầy ngoạn mục.</p>\n<p>Shine Combo cắt gội 10 bước được đ&aacute;nh gi&aacute; l&agrave; phi&ecirc;n bản to&agrave;n diện nhất, bổ sung 3 bước ho&agrave;n to&agrave;n mới trong h&agrave;nh tr&igrave;nh trải nghiệm, gi&aacute; lại cực hợp l&yacute; &ndash; l&agrave; kết quả của thời gian d&agrave;i nghi&ecirc;n cứu s&acirc;u về h&agrave;nh vi kh&aacute;ch h&agrave;ng, lắng nghe &yacute; kiến của h&agrave;ng ng&agrave;n anh em.</p>\n<p>10 bước trong Shine Combo l&agrave; sự thoả m&atilde;n từng nhu cầu ẩn s&acirc;u nhất trong từng điểm chạm: từ massage, dưỡng da,&hellip; tới việc tư vấn kiểu t&oacute;c hợp &yacute; nhất, v&agrave; chỉn chu, tỉ mỉ trong từng nh&aacute;t k&eacute;o:</p>\n<p>1.Dịch vụ mới: khai huyệt điều h&ograve;a, gi&uacute;p thư gi&atilde;n, lưu th&ocirc;ng mạch m&aacute;u.</p>\n<p>2. Rửa mặt, massage tinh chất nha đam thẩm thấu &ndash; l&agrave;m mềm da</p>\n<p>3. H&uacute;t mụn, phun nước hoa hồng c&ocirc;ng nghệ cao, l&agrave;m sạch s&acirc;u, đem đến một l&agrave;n da khỏe khoắn</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22601\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/IMG_8570-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"2935616104\" />\n<figcaption>C&aacute;c bước gội đầu, massage, dưỡng da&hellip; lu&ocirc;n khiến anh em th&iacute;ch th&uacute; v&igrave; sự sảng kho&aacute;i cực kỳ!</figcaption>\n</figure>\n<p>4. Gội đầu massage bấm huyệt cực đ&atilde;</p>\n<p>5. Dịch vụ mới: Massage rửa tai bọt sạch s&acirc;u, sảng kho&aacute;i tột đỉnh</p>\n<p>6. Dịch vụ mới: K&eacute;o khăn gi&atilde;n cơ cổ, xối nước th&aacute;c đổ &ndash; giải tỏa căng thẳng, giảm thiểu đau mỏi</p>\n<p>7. Tư vấn kiểu t&oacute;c ph&ugrave; hợp khu&ocirc;n mặt</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22597\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/IMG_8593-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"2432453203\" />\n<figcaption>Tư vấn kỹ lưỡng kiểu t&oacute;c, m&agrave;u t&oacute;c ph&ugrave; hợp gương mặt, phong c&aacute;ch</figcaption>\n</figure>\n<p>8. Cắt t&oacute;c tạo kiểu bởi stylist h&agrave;ng đầu</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22598\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/NVT02141-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"2973586830\" />\n<figcaption>30Shine lu&ocirc;n tự tin về đội ngũ Stylist l&agrave;nh nghề của m&igrave;nh</figcaption>\n</figure>\n<p>9. Cạo mặt &ecirc;m &aacute;i, xả sạch t&oacute;c con</p>\n<p>10. Vuốt s&aacute;p, xịt g&ocirc;m tạo kiểu cao cấp</p>\n<p>Vừa mới ra mắt, Shine Combo 10 bước, 80k đ&atilde; trở th&agrave;nh &ldquo;hot topic&rdquo; trong cộng đồng 30Shine, được anh em ủng hộ nhiệt t&igrave;nh.</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22599\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/IMG_8327-1-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"359936578\" />\n<figcaption>Ra mắt đ&uacute;ng dịp cuối năm, Shine Combo 10 bước khiến c&aacute;c salon n&oacute;ng hơn bao giờ hết</figcaption>\n</figure>\n<p>Lần đầu ti&ecirc;n xuất hiện tại Việt Nam một trải nghiệm cắt gội cực đ&atilde; m&agrave; gi&aacute; chỉ 80k. L&agrave; một sự lựa chọn ho&agrave;n hảo cho anh em muốn c&oacute; diện mạo bảnh bao trước thềm năm mới, lại thư gi&atilde;n, xả hơi sau những mệt mỏi ng&agrave;y cuối năm.</p>\n<p>Th&ecirc;m việc 30Shine vừa n&acirc;ng cấp h&agrave;ng loạt salon l&ecirc;n ti&ecirc;u chuẩn 6* với kh&ocirc;ng gian rộng r&atilde;i, điều ho&agrave;, nước m&aacute;t phục vụ tận nơi, wifi cực mạnh&hellip; việc đi cắt t&oacute;c đ&atilde; trở th&agrave;nh một trải nghiệm ho&agrave;n to&agrave;n thư gi&atilde;n, thoải m&aacute;i, đem lại những cảm x&uacute;c t&iacute;ch cực, tự tin.</p>\n<figure class=\"wp-block-image\"><img class=\"wp-image-22600\" src=\"https://blog.30shine.com/wp-content/uploads/2021/01/NVT_1433-1024x683.jpg\" alt=\"\" data-pagespeed-url-hash=\"1972585096\" />\n<figcaption>Kh&ocirc;ng gian salon đẳng cấp 6* l&agrave; một điểm cộng lớn khiến anh em h&agrave;o hức tới 30Shine dịp n&agrave;y</figcaption>\n</figure>\n<p><strong>Anh em đặt lịch ngay tại website hoặc li&ecirc;n hệ hotline: 0962.370.557 để c&oacute; một diện mạo cực bảnh bao toả s&aacute;ng 2021 nh&eacute;!</strong></p>\n</div>', 4, 1, 1, '2021-04-08 07:17:46', '2021-04-25 20:54:59'),
(2, 'Siêu sale tháng 4 - Lễ hội Skincare', 'sieu-sale-thang-4-le-hoi-skincare', 'blogs/W29Hv00mypJ7hcjn9ycEZXljalKxeVlYSBjTpK6x.jpg', 'Sản phẩm đặc trị mụn ACSYS: Mua 1 tặng 1', '<div class=\"reward-detail__banner pointer\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://30shine-store-images.s3.ap-southeast-1.amazonaws.com/uploads/medium_Sale_da_12_26fe7d8d82.jpg\" alt=\"\" /></div>\n<div class=\"reward-detail__content\">\n<div>\n<p style=\"padding-left: 360px;\"><strong>SI&Ecirc;U SALE TH&Aacute;NG 4 - LỄ HỘI SKINCARE&nbsp;</strong></p>\n<p style=\"padding-left: 360px;\">Giảm tới 30% c&aacute;c sản phẩm chăm s&oacute;c da v&agrave; cơ thể.&nbsp;</p>\n<p style=\"padding-left: 360px;\">&Aacute;p dụng cho tất cả kh&aacute;ch h&agrave;ng mua sản phẩm online qua website 30shinestore.com v&agrave; fanpage 30Shine&nbsp;</p>\n<p style=\"padding-left: 360px;\"><strong>Lưu &yacute;:&nbsp;</strong></p>\n<p style=\"padding-left: 360px;\">- Thời hạn ưu đ&atilde;i từ 1/4/2021 đến 30/4/2021&nbsp;</p>\n<p style=\"padding-left: 360px;\">- Tặng Box qu&agrave; trị gi&aacute; 100,000 VNĐ cho mọi đơn h&agrave;ng&nbsp;</p>\n<p style=\"padding-left: 360px;\">- Freeship cho đơn h&agrave;ng tr&ecirc;n 300,000 VNĐ</p>\n<p style=\"padding-left: 360px;\">- Bảo h&agrave;nh 1 đổi 1 với cả c&aacute;c sản phẩm đ&atilde; qua sử dụng</p>\n</div>\n</div>', 2, 1, 2, '2021-04-25 03:41:03', '2021-04-25 20:49:47'),
(3, '1234', '1234', 'blogs/D4CHKv3MBT3IOxMrrl9yM1ffZiLgUqhM1r1mE80a.jpg', '1234', '1234', 1, 1, 1, '2021-04-25 04:11:54', '2021-04-25 20:15:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'tạo kiểu tóc', 'product/YMRGI7y177mUoczvxB7IEZjbKR50Dqk3cs2FnIxb.png', 'tao-kieu-toc', '2021-04-02 01:56:13', '2021-04-21 15:11:52'),
(2, 'chăm sóc tóc', NULL, 'cham-soc-toc', '2021-04-02 01:56:29', '2021-04-02 01:56:29'),
(3, 'chăm sóc da', NULL, 'cham-soc-da', '2021-04-02 01:56:49', '2021-04-02 01:56:49'),
(4, 'chăm sóc cơ thể', NULL, 'cham-soc-co-the', '2021-04-02 01:56:58', '2021-04-02 01:56:58'),
(5, 'khac', NULL, 'khac', '2021-04-03 07:37:58', '2021-04-03 07:37:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_news`
--

INSERT INTO `category_news` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'thời trang tóc', NULL, 'thoi-trang-toc', '2021-04-06 09:54:53', '2021-04-06 09:54:53'),
(2, 'ưu đãi', NULL, 'uu-dai', '2021-04-25 03:34:02', '2021-04-25 03:34:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_services`
--

CREATE TABLE `category_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_services`
--

INSERT INTO `category_services` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'cắt gội massage', 'category/a5OYpMZoV91Jm117P7POif1gQLngRW3t3QSpOesz.jpg', 'cat-goi-massage', '2021-04-01 01:39:06', '2021-04-01 01:39:06'),
(3, 'uốn', 'category/j2zEIWBpEImxDXH3NvktHR6JjVkjjyeZI3WuvKjf.jpg', 'uon', '2021-04-01 01:39:43', '2021-04-01 01:39:43'),
(4, 'nhuộm', 'category/pAiFaxtqpl94ZV8YgUXCjYXYRBZH85LsiJTBmpSO.jpg', 'nhuo', '2021-04-01 01:40:31', '2021-04-01 01:40:31'),
(5, 'dịch vụ khác', 'category/QopCrx3GJIx6YffORAoYXifTrDYyrIKSRtm3AllQ.jpg', 'dich-vu-khac', '2021-04-01 01:41:43', '2021-04-01 01:41:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
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
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
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
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1:đặt lịch - đặt hàng\r\n2: đã xác nhận\r\n3: đang gửi\r\n4: đã thanh toán\r\n5: không nhận hàng\r\n6: hủy',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user_order` bigint(20) DEFAULT NULL,
  `book_date` date DEFAULT NULL,
  `time_shift` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone_number`, `email`, `address`, `status`, `note`, `id_user`, `id_user_order`, `book_date`, `time_shift`, `created_at`, `updated_at`) VALUES
(1, 'phạm hiếu', '0962370557', NULL, 'hn', 7, 'ok', NULL, 1, '2021-04-04', '10:00:00', '2021-04-03 17:51:56', '2021-07-20 14:22:38'),
(2, 'hoàng', '5333353', NULL, NULL, 7, 'a', '2', NULL, '2021-04-09', '08:00:00', '2021-04-09 05:38:53', '2021-07-20 14:22:38'),
(3, 'long', '1234', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, '2021-04-15 15:11:12', '2021-04-23 02:40:38'),
(4, 'xuân', '1234', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, '2021-04-15 15:11:22', '2021-04-23 02:40:46'),
(5, 'thu', '1234', NULL, '1234', 5, NULL, NULL, NULL, NULL, NULL, '2021-04-15 17:03:19', '2021-04-23 23:55:02'),
(6, 'Phạm Hiếu', '0962370557', NULL, NULL, 3, 'ok', NULL, 1, NULL, NULL, '2021-04-18 21:35:13', '2021-04-23 23:54:56'),
(7, 'phan minh', '1234567890', NULL, 'Hai phong', 4, NULL, NULL, NULL, NULL, NULL, '2021-04-18 21:48:23', '2021-04-23 02:41:07'),
(8, 'hạ', '9876543210', NULL, NULL, 7, 'hello', '2', NULL, '2021-04-20', '11:00:00', '2021-04-19 12:44:29', '2021-07-20 14:22:38'),
(9, 'phương', '1234567891', NULL, NULL, 7, '123', NULL, NULL, '2021-04-19', '10:00:00', '2021-04-19 13:17:35', '2021-07-20 14:22:38'),
(10, 'Phạm Hiếu', '0962370557', 'admin@gmail.com', 'Đông anh - Hà Nội', 1, NULL, NULL, NULL, NULL, NULL, '2021-04-19 13:28:37', '2021-04-19 13:28:37'),
(11, 'đông', '123412341', NULL, NULL, 7, '1234', '2', NULL, '2021-04-22', '20:00:00', '2021-04-20 12:43:08', '2021-04-24 03:00:21'),
(12, 'triều', '0123456789', NULL, NULL, 7, '123412312', NULL, NULL, '2021-04-20', '10:00:00', '2021-04-20 14:15:23', '2021-07-20 14:22:38'),
(13, 'hoa', '0987645321', NULL, NULL, 7, 'safd', NULL, NULL, '2021-04-20', '11:00:00', '2021-04-20 14:48:58', '2021-07-20 14:22:38'),
(14, 'như', '0987645321', NULL, NULL, 7, 'safd', '', NULL, '2021-04-20', '11:00:00', '2021-04-20 14:50:30', '2021-07-20 14:22:38'),
(15, 'linh', '0987645321', NULL, NULL, 7, 'safd', '', NULL, '2021-04-20', '11:00:00', '2021-04-20 14:50:39', '2021-07-20 14:22:38'),
(16, 'dương', '0987645321', NULL, NULL, 7, 'safd', NULL, NULL, '2021-04-20', '11:00:00', '2021-04-20 14:51:08', '2021-07-20 14:22:38'),
(17, 'ngọc', '0659848595', NULL, 'HN', 4, 'asfasdwqrqw', NULL, NULL, '2021-04-22', '13:00:00', '2021-04-20 14:51:32', '2021-04-24 02:27:28'),
(18, 'hà', '0659848595', NULL, NULL, 2, 'asfasdwqrqw', NULL, NULL, '2021-04-24', '10:00:00', '2021-04-20 14:52:40', '2021-04-24 00:55:09'),
(19, 'lan', '6546546544', NULL, 'asf', 4, 'ASFASDFASD', NULL, NULL, NULL, NULL, '2021-04-20 16:45:48', '2021-04-20 16:48:33'),
(20, 'john', '0123123123', NULL, 'adsfb', 2, 'ádf', NULL, NULL, NULL, NULL, '2021-04-20 23:22:31', '2021-04-20 23:24:14'),
(21, 'Duy', '0399089824', NULL, '20', 1, '1', NULL, NULL, NULL, NULL, '2021-07-17 09:04:25', '2021-07-17 09:04:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` bigint(20) NOT NULL,
  `id_ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality_ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
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
(66, 17, '6', '1', 470000, '2021-04-24 02:27:28', '2021-04-24 02:27:28', 2),
(67, 21, '1', '1', 80000, '2021-07-17 09:04:25', '2021-07-17 09:04:25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` bigint(20) NOT NULL,
  `sale_price` bigint(20) DEFAULT NULL,
  `feature_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `count_view` int(11) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `regular_price`, `sale_price`, `feature_img`, `short_description`, `detail_description`, `featured`, `count_view`, `category_id`, `created_at`, `updated_at`) VALUES
(6, 'Sáp By Vilain Gold Digger Phiên Bản Đặc Biệt 2020', 'sap-by-vilain-gold-digger-phien-ban-dac-biet-2020', 500000, 470000, 'product/bfm3iEwXfbGQTKAXPm8MSmp8id0XQWSAI4HhwYCR.jpg', 'Vẫn thuộc dòng sản phẩm cao cấp của cái tên đến từ Đan Mạch - By Vilain, Gold Digger sinh ra là dành cho các loại tóc dày và dài, tóc càng dày và càng dài thì lên Gold Digger càng đẹp. Gold Digger đạt độ giữ nếp ổn định trong thời gian dài, By Vilain Gold Digger sinh ra chuẩn cho các loại tóc dày và dài tới mũi. Tóc càng dày và càng dài thì lên Gold Digger càng đẹp .', '<p><strong>Thương hiệu By Vilain - Trẻ trung v&agrave; sang trọng</strong></p>\n<p><strong>By Vilain l&agrave; một &ocirc;ng lớn trong lĩnh vực ph&aacute;t triển c&aacute;c sản phẩm về chăm s&oacute;c v&agrave; tạo kiểu t&oacute;c</strong>, thương hiệu n&agrave;y đ&igrave;nh đ&aacute;m đến nỗi sở hữu 1 k&ecirc;nh Youtube ri&ecirc;ng về t&oacute;c nam v&agrave; c&aacute;c sản phẩm By Vilain li&ecirc;n quan v&agrave; c&oacute; tới 2 triệu subscriber.</p>\n<p>Với By Vilain c&aacute;c sản phẩm được ph&aacute;t triển cực k&igrave;&nbsp;<strong>đa dạng</strong>&nbsp;v&agrave; dường như d&ugrave; bạn sở hữu chất t&oacute;c như thế n&agrave;o, y&ecirc;u cầu của bạn l&agrave; g&igrave; By Vilain đều c&oacute; mẫu sản phẩm tương th&iacute;ch.</p>\n<p>Ở c&aacute;c nước phương T&acirc;y, By Vilain kh&ocirc;ng chỉ l&agrave; thương hiệu b&agrave;n t&aacute;n của c&aacute;nh m&agrave;y r&acirc;u m&agrave; đến ngay c&aacute;c chị em cũng quan t&acirc;m tới như m&oacute;n qu&agrave; gi&aacute; trị d&agrave;nh tặng anh em.<br /><br /></p>\n<p><strong>By Vilain Gold Digger&nbsp;2020 &ndash; Version 3 - Tuyệt phẩm d&agrave;nh cho t&oacute;c d&agrave;y&nbsp;</strong></p>\n<p>Sau rất nhiều &yacute; kiến phản hồi của kh&aacute;ch h&agrave;ng, ch&iacute;nh thức BY VILAIN đ&atilde; khai tử mẫu label cũ (label cũ thường bị xước, bong tr&oacute;c v&agrave; k&eacute;m thẩm mỹ hơn). Thay v&agrave;o đ&oacute; chất liệu label được đưa l&ecirc;n tầm cao mới (c&oacute; độ nh&aacute;m đầy nam t&iacute;nh, b&aacute;m d&iacute;nh tốt hơn &amp; tr&aacute;nh t&igrave;nh trạng bị xước).</p>', 0, 4, 1, '2021-04-07 04:53:31', '2021-07-20 08:29:13'),
(7, 'Dầu gội Hoa cúc Bio Naturell 1000ml', 'dau-goi-hoa-cuc-bio-naturell-1000ml', 230000, 115000, 'product/GdfKJ7rQ6e95CzvEBRikx6gm3dFRXICJqTTFoj62.jpg', 'Dầu gội Hoa cúc Bio Naturell 1000ml\n\nXuất xứ: Ukraine\nThương hiệu: Bio Naturel\n\nBio Naturell là dòng sản phẩm thiết yếu mới cho cả gia đình với giá cả phải chăng, ra đời nhằm đáp ứng nhu cầu chăm sóc cá nhân.', 'TH&Agrave;NH PHẦN V&Agrave; C&Ocirc;NG DỤNG<br />Dầu gội nhẹ nh&agrave;ng l&agrave;m sạch t&oacute;c v&agrave; da đầu. Chứa phức hợp vitamin v&agrave; chiết xuất từ hoa c&uacute;c để củng cố t&oacute;c v&agrave; th&uacute;c đẩy sự ph&aacute;t triển của t&oacute;c, c&oacute; độ pH c&acirc;n bằng.<br />Sau khi gội, t&oacute;c sẽ được chải chuốt v&agrave; b&oacute;ng khỏe, th&iacute;ch hợp để sử dụng h&agrave;ng ng&agrave;y, d&agrave;nh cho mọi loại t&oacute;c.<br /><br />HƯỚNG DẪN SỬ DỤNG:<br />L&agrave;m ướt t&oacute;c, thoa một lượng dầu gội vừa phải l&ecirc;n t&oacute;c, xoa đều v&agrave; gội lại bằng nước sạch. Lặp lại quy tr&igrave;nh nếu cần thiết.<br /><br />🔰 T&Agrave;I KHOẢN CH&Iacute;NH THỨC CỦA HỆ THỐNG 30SHINE TẠI SHOPEE<br />- Cam kết h&agrave;ng ch&iacute;nh h&atilde;ng 100%<br />- Ho&agrave;n lại tiền nếu ph&aacute;t hiện h&agrave;ng giả - nh&aacute;i<br />- Đổi trả h&agrave;ng miễn ph&iacute; trong v&ograve;ng 3 ng&agrave;y', 0, 0, 2, '2021-04-19 13:27:27', '2021-07-20 08:37:11'),
(8, 'Sáp Reuzel Clay Matte Pomade Giữ Nếp Vừa - Không Bóng - Tan Trong Nước', 'sap-reuzel-clay-matte-pomade-giu-nep-vua-khong-bong-tan-trong-nuoc', 230000, NULL, 'product/11jsqEV857wResK6JsRkouo6UXy4waXFkKDgg6Ba.jpg', 'Ai biết đến Reuzel đều biết hãng đã đầu tư vào mùi hương cho sản phẩm như nào. Phiên bản Reuzel clay matte có mùi bạc hà the mát, tạo cảm giác thư giãn, sảng khoái cực đã hợp cho việc vuốt sáp vào mùa hè nóng bức.', '1. Chất sáp Reuzel Clay Matte Pomade \nXu thế của dòng sản phẩm sáp trên thế giới đều đang tập trung phát triển “clay pomade” với các tiêu chí đặc trưng là giảm độ bóng tới mức bóng mờ (matte), giảm độ bết (greasy) để phù hợp với nhu cầu ngày càng cao của khách hàng thì Reuzel cũng không phải ngoại lệ khi mới đây thôi hãng đã cho ra mắt REUZEL clay matte pomade.', 0, 0, 1, '2021-04-22 15:38:44', '2021-04-22 15:38:44'),
(9, 'Kem Tạo Kiểu Reuzel Matte Styling Paste 100ml', 'kem-tao-kieu-reuzel-matte-styling-paste-100ml', 300000, NULL, 'product/kTHJUmifNn2o3ljEb4dX13CybpoCn9vgLrTbMiyY.jpg', 'Vẫn là dòng sản phẩm đến từ thương hiệu Reuzel đình đám, Matte Styling Paste là dòng sản phẩm gel vuốt tóc được thiết kế dành riêng cho những anh chàng có phong cách trẻ trung thay vì chải nếp cứng cáp, phù hợp với nhiều kiểu tóc dù ngắn hay dài. Đặc biệt đây là loại kem vuốt tóc không chứa cồn, không bong tróc với thành phần chính là hạt phỉ, lá cây Tầm Mã, Hương Thảo, cỏ đuôi ngựa cung cấp độ ẩm và hỗ trợ nuôi dưỡng tóc.', 'Cấu tạo chất sáp Reuzel Matte Styling Paste\n\nSản phẩm có kết cấu gel dạng sệt, cực dễ tan và dễ vuốt. Khi apply sản phẩm trên tóc đều không bị bết dính, không để lại tạp chất dư thừa sau khi sử dụng mà vẫn cho khả năng giữ nếp tốt, mềm mại cho mái tóc.\n\nMùi hương của sản phẩm kem tạo kiểu Matte Styling Paste\n\nMùi rượu rum nam tính của Reuzel Matte Styling Paste đã chinh phục mọi giác quan của anh chàng hiện đại, còn bạn thì sao?\n\nĐộ giữ nếp, tạo phồng của Reuzel Matte Styling Paste\n\nNếu anh cần một con sáp dạng gel có công năng tăng độ dày, độ phồng cho tóc thì đừng bỏ qua Matte Styling Paste. Một điểm mạnh không thể bỏ qua của em nó chính là khả năng tạo kiểu linh hoạt cho phép restyling dễ dàng sau khi đội mũ bảo hiểm.', 0, 0, 1, '2021-04-22 15:40:39', '2021-04-22 15:40:39'),
(10, 'DẦU GỘI TIGI RECOVERY 400ml - Phiên bản mới 2021', 'dau-goi-tigi-recovery-400ml-phien-ban-moi-2021', 400000, NULL, 'product/rslbXrZVOkEiFkp2xoWAnVdrqEA5tHAPtvpLKVcE.webp', 'Dầu gội Bed Head\'s RecoveryTM: Công thức giàu chất dưỡng ẩm, không chỉ được thiết kế riêng mà còn được sử dụng bởi các người thợ làm tóc chuyên nghiệp. Mang lại kết quả và trải nghiệm như salon ngay tại nhà. ', '<p><strong>M&Ocirc; TẢ SẢN PHẨM:</strong></p>\n<p>&bull; Dầu gội Bed Head\'s RecoveryTM: C&ocirc;ng thức gi&agrave;u chất dưỡng ẩm, kh&ocirc;ng chỉ được thiết kế ri&ecirc;ng m&agrave; c&ograve;n được sử dụng bởi c&aacute;c người thợ l&agrave;m t&oacute;c chuy&ecirc;n nghiệp. Mang lại kết quả v&agrave; trải nghiệm như salon ngay tại nh&agrave;.&nbsp;</p>\n<p>&bull; Cung cấp cho m&aacute;i t&oacute;c kh&ocirc; v&agrave; thiếu độ ẩm một liều dưỡng ẩm nhanh ch&oacute;ng c&ugrave;ng Dầu gội Bed Head\'S RecoveryTM! Với c&ocirc;ng nghệ vượt trội gi&uacute;p c&aacute;c th&agrave;nh phần dưỡng ẩm lưu lại tr&ecirc;n t&oacute;c, gi&uacute;p t&oacute;c được cung cấp độ ẩm suốt cả ng&agrave;y d&agrave;i. Dầu gội dưỡng ẩm n&agrave;y gi&uacute;p dưỡng ẩm, l&agrave;m sạch s&acirc;u v&agrave; l&agrave;m mềm t&oacute;c kh&ocirc;. Dầu gội c&ograve;n gi&uacute;p bảo vệ t&oacute;c khỏi những hư tổn trong tương lai. Gi&uacute;p t&oacute;c b&oacute;ng mượt, mềm mại, mượt m&agrave; v&agrave; khỏe mạnh.&nbsp;</p>\n<p>&bull; C&ocirc;ng thức với Glycerin để cung cấp độ ẩm v&agrave; dưỡng, Dimethiconol để bảo vệ t&oacute;c khỏi những hư tổn trong tương lai v&agrave; giữ cho t&oacute;c lu&ocirc;n khỏe mạnh, Silicones để tăng độ mềm v&agrave; b&oacute;ng v&agrave; Chiết xuất c&acirc;y xương rồng Prickly Pear, được biết đến với đặc t&iacute;nh hồi phục.&nbsp;</p>\n<p>&bull; Hương thơm Zesty v&agrave; tr&agrave;n đầy sinh lực.</p>\n<p>&nbsp;</p>\n<p><strong>Cung cấp độ ẩm ho&agrave;n hảo cho m&aacute;i t&oacute;c kh&ocirc; xơ v&agrave; an to&agrave;n với m&agrave;u nhuộm</strong></p>\n<p>&nbsp;</p>\n<p><strong>HDSD:</strong></p>\n<p>M&aacute;t xa dầu gội tr&ecirc;n t&oacute;c ướt, sau đ&oacute; xả sạch. Để c&oacute; kết quả tốt nhất, sử dụng kết hợp với dầu xả Recovery</p>', 0, 0, 2, '2021-04-24 17:36:02', '2021-04-24 18:12:19'),
(11, 'Dầu Gội - Xả - Tắm 3 Trong 1 Reuzel', 'dau-goi-xa-tam-3-trong-1-reuzel', 196000, NULL, 'product/Lc5dYCG8IEn6KAKdWWsbCM6DNokEyte6AqRg7xSH.webp', '✅ Hãng sản xuất : Reuzel\n\n✅  Xuất xứ: Mỹ\n\n✅ Trọng lượng: 100ml và 350ml', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/cb2e13e0e90c008ff2fe0daa8b1c3588_507f04f6727e47a88c89ce440c94b5b7_grande.jpeg\" /></p>\n<h2><span style=\"font-size: 11pt;\"><strong>M&ocirc; Tả Sản Phẩm:</strong></span></h2>\n<p>Bạn đang cần một sản phẩm tiện lợi cho những ng&agrave;y phải đi xa nh&agrave;? Hay chỉ đơn giản l&agrave; th&iacute;ch những thứ đơn giản? Thế th&igrave; nhớ mang Reuzel 3-in-1 Gội, Xả v&agrave; Tắm to&agrave;n th&acirc;n theo nh&eacute;. N&oacute; rất đa năng, gi&uacute;p bạn tắm v&agrave; xả lu&ocirc;n. Rất ph&ugrave; hợp với c&aacute;c anh mang theo m&igrave;nh khi đi tập hoặc đi du lịch</p>\n<p>Dầu gội ba trong một của Reuzel khiếm việc tắm trở n&ecirc;n đơn giản hơn bao giờ hết. khi m&agrave; b&aacute;n sở hữu cho m&igrave;nh một sản phẩm vừa l&agrave; dầu gội, dầu xả, dầu tắm c&aacute;c bạn sẽ c&oacute; thể kết th&uacute;c được c&ocirc;ng việc tắm rửa một c&aacute;ch nhanh ch&oacute;ng v&agrave; kh&ocirc;ng phải qu&aacute; cầu k&igrave; v&agrave; dườm gi&agrave; sử dụng nhiều sản phẩm mỗi thứ một nơi như trước đ&acirc;y nữa.</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/78428e2413f65752ca0a8d60c3e64ad2_168ef5a180384d478a6ef41bfd5d6b5a_grande.jpeg\" /></p>\n<p>Sản phẩm n&agrave;y sẽ tiết kiệm cho c&aacute;c bạn rất nhiều diện t&iacute;ch trong ph&ograve;ng tắm c&aacute; nh&acirc;n của m&igrave;nh. Đơn giản, tiện lợi cho người d&ugrave;ng l&agrave; những g&igrave; m&agrave; Reuzel muốn đem lại cho người sử dụng, dễ d&agrave;ng di chuyển mọi nơi c&ugrave;ng bạn đi chơi, đi du lịch hay những huyến c&ocirc;ng t&aacute;c d&agrave;i ng&agrave;y.</p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>C&ocirc;ng Dụng:</strong></p>\n<p>Dễ d&agrave;ng tẩy rửa khử dầu cho m&aacute;i t&oacute;c đem lại cho người sử dụng c&oacute; một m&aacute;i t&oacute;c sạch sẽ gọn nhẹ. Bổ sung th&ecirc;m độ ẩm phục hồi c&aacute;c hư tổn của m&aacute;i t&oacute;c khiến cho m&aacute;i t&oacute;c trở n&ecirc;n mền mượt chắc khỏa hơn.</p>\n<p>Loại bỏ ho&agrave;n to&agrave;n da chết l&agrave;m sạch cơ thể hiệu quả. Cung cấp độ ẩm cho da l&agrave;m cho l&agrave;m da của anh em trở n&ecirc;n mềm mượt hơn rất nhiều, sử dụng c&aacute;c chất tẩy rửa từ tự nhi&ecirc;n rất an to&agrave;n cho người sử dụng.</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/99eee4a044b2f34c8a330d36c8bbb06e_c0114591330d4ae8922fcb0c7009aaed_grande.jpeg\" /></p>\n<p>L&agrave; một c&aacute;ch thức rất đơn giản để bạn c&oacute; thể l&agrave;m sạch từ đầu đến ch&acirc;n mỗi ng&agrave;y kh&ocirc;ng cần phải qu&aacute; lỉnh kỉnh, phức tạp. M&ugrave;i hương nước hoa cổ điển nhẹ nh&agrave;ng cuốn h&uacute;t người sử dụng. Tạo cho người sử dụng lu&ocirc;n lu&ocirc;n c&oacute; một sự lu&ocirc;i cuốn ở những nơi m&agrave; họ xuất hi&ecirc;n.</p>\n<ul>\n<li>Sản phẩm đa năng: dầu g&ocirc;i, dầu xả v&agrave; sữa tắm</li>\n<li>Tinh dầu tr&agrave; gi&uacute;p dưỡng v&agrave; l&agrave;m mềm mịn da</li>\n<li>L&agrave;m sạch bụi bẩn, b&atilde; nhờn tr&ecirc;n da đầu</li>\n<li>Nu&ocirc;i dưỡng v&agrave; bảo vệ m&aacute;i t&oacute;c</li>\n<li>Cung cấp độ ẩm, dưỡng chất cho t&oacute;c</li>\n<li>Hạn chế t&igrave;nh trạng kh&ocirc; xơ t&oacute;c</li>\n</ul>\n<p>&nbsp;</p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://file.hstatic.net/1000306701/file/reuzel-teatree-trio_6382387ffc8f44f4b2bdb6d86926273e_grande.jpg\" /></p>\n<p><strong>Hướng dẫn sửa dụng</strong></p>\n<p>Tắm với nước rồi thoa l&ecirc;n t&oacute;c v&agrave; to&agrave;n th&acirc;n, thoa đến khi n&agrave;o sạch th&igrave; th&ocirc;i nh&eacute;. Tắm lại với nước l&agrave; xong rồi.</p>', 0, 0, 2, '2021-04-25 21:17:46', '2021-04-25 21:17:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `image_path`, `id_product`, `created_at`, `updated_at`) VALUES
(13, 'product_image/Kw5FXnbu6YtTea1m4BpGqADV9d2ceOSLYFiJTsMF.jpg', 8, '2021-04-22 15:38:44', '2021-04-22 15:38:44'),
(14, 'product_image/sAQ2dWQOhywLwSUYQwhxfOgomUo261jWIAMIXIp5.jpg', 8, '2021-04-22 15:38:44', '2021-04-22 15:38:44'),
(15, 'product_image/2E2Nvt3wTMuxJSVVcTHtIalMuElRczeYCMyboX8R.jpg', 9, '2021-04-22 15:40:39', '2021-04-22 15:40:39'),
(17, 'product_image/lpq1AicQY5AdYF0vjFNW4AdkmhS6Z077kw10MWxx.webp', 10, '2021-04-24 18:12:18', '2021-04-24 18:12:18'),
(18, 'product_image/Wihs2aRPpvzpGdAQSf0svcq2U9r7OD71Ctr4SuDG.webp', 10, '2021-04-24 18:12:19', '2021-04-24 18:12:19'),
(19, 'product_image/S4m2ttzC5Uvxb9zGZgiDRlD9eRlEurqDUnkmQvgN.webp', 11, '2021-04-25 21:17:47', '2021-04-25 21:17:47'),
(20, 'product_image/mvwgJJSeMFNHpO7lCQsX3s3W5D7He82LtVOznydH.webp', 11, '2021-04-25 21:17:47', '2021-04-25 21:17:47'),
(21, 'product_image/K7DqZ1k7CaX5PZlMI7CCPL4ZPEIFBl7beHep6uai.webp', 11, '2021-04-25 21:17:47', '2021-04-25 21:17:47'),
(22, 'product_image/wHwGd6uADT4NqnN5GoUP4vAOCvKBmJ26vw1XAAld.jpg', 6, '2021-07-20 08:26:27', '2021-07-20 08:26:27'),
(23, 'product_image/2dXwtGi5eOnwhJbRQ9X9PNnHi77CGrxQ0Pe5z779.jpg', 6, '2021-07-20 08:26:27', '2021-07-20 08:26:27'),
(24, 'product_image/aMc5JLlsubjnkhPeB9a4Dpcn3eMgg1Ljwe6dFLsd.jpg', 7, '2021-07-20 08:37:11', '2021-07-20 08:37:11'),
(25, 'product_image/9Vp6gxC7ykbyEokjaDI9px4x3N2UZqpUbFeruVDl.jpg', 7, '2021-07-20 08:37:11', '2021-07-20 08:37:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(2, 'employee', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(3, 'staff', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(4, 'member', '2021-03-27 10:12:23', '2021-03-27 10:12:23'),
(5, 'guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cate` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `content`, `price`, `image`, `id_cate`, `created_at`, `updated_at`) VALUES
(1, 'cắt gội 10 bước', 'cat-goi-10-buoc', '<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"content-center content-left\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 30px 0px 0px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">1. Massage khai huyệt điều h&ograve;a (mới)</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Đầu ti&ecirc;n khi mới bắt đầu, anh sẽ được massage khai huyệt điều h&ograve;a, gi&uacute;p anh thư gi&atilde;n v&agrave; lưu th&ocirc;ng mạch m&aacute;u. Skinner sẽ ấn v&agrave;o c&aacute;c huyệt ngủ để bắt đầu qu&aacute; tr&igrave;nh thư gi&atilde;n tại c&aacute;c bước sau</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-15.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-2 ant-col-sm-12 ant-col-sm-order-1\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 1; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-3.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-1 ant-col-sm-12 ant-col-sm-order-2\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 2; padding: 10px 15px 15px;\">\n<div class=\"content-center content-right\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 0px 0px 30px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">2. Rửa mặt &ndash; massage tinh chất nha đam thẩm thấu</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Đ&acirc;y l&agrave; bước l&agrave;m sạch mặt anh sau một ng&agrave;y d&agrave;i tiếp x&uacute;c với bụi bẩn. Tiếp đ&oacute;, c&aacute;c bạn skinner sẽ massage mặt bằng tinh chất nha đam thẩm thấu. Những động t&aacute;c uyển chuyển, mềm mại sẽ gi&uacute;p da anh trở n&ecirc;n căng mọng v&agrave; sảng kho&aacute;i</div>\n</div>\n</div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"content-center content-left\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 30px 0px 0px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">3. H&uacute;t mụn &ndash; phun nước hoa hồng c&ocirc;ng nghệ cao</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Sau khi được massage &ecirc;m &aacute;i, bạn Skinner sẽ gi&uacute;p anh h&uacute;t hết c&aacute;c b&atilde; mụn nhờn tr&ecirc;n mặt bằng m&aacute;y h&uacute;t mụn khử tr&ugrave;ng. Tiếp đ&oacute; l&agrave; phun nước hoa hồng c&ocirc;ng nghệ cao gi&uacute;p se nhỏ lỗ ch&acirc;n l&ocirc;ng, bổ sung dưỡng chất cho da</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-4.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-2 ant-col-sm-12 ant-col-sm-order-1\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 1; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-5.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-1 ant-col-sm-12 ant-col-sm-order-2\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 2; padding: 10px 15px 15px;\">\n<div class=\"content-center content-right\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 0px 0px 30px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">4. Gội đầu massage bấm huyệt</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Khi đ&atilde; c&oacute; một khu&ocirc;n mặt đẹp trai, sạch sẽ, anh sẽ được skinner gội v&agrave; massage đầu bấm huyệt một c&aacute;ch kỹ c&agrave;ng. Sử dụng dầu gội đầu chuẩn salon, kh&ocirc;ng g&acirc;y g&agrave;u, hư tổn cho t&oacute;c. Massage bấm huyệt đ&aacute;nh bay cơn đau đầu, gi&uacute;p đầu nhẹ bẫng v&agrave; c&oacute; cảm gi&aacute;c thư th&aacute;i nhất</div>\n</div>\n</div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"content-center content-left\" style=\"box-sizing: border-box; height: 365.156px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 30px 0px 0px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">5. Massage rửa tai bọt sảng kho&aacute;i (mới)</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Anh sẽ được massage rửa tai sạch s&acirc;u v&agrave; sảng kho&aacute;i tột đỉnh. Đầu ti&ecirc;n c&aacute;c bạn sẽ cho bọt nhẹ nh&agrave;ng v&agrave;o tai anh, d&ugrave;ng tay để l&agrave;m sạch tai của anh. Sau đ&oacute;, Skinner sẽ sử dụng kỹ thuật massage tạo tiếng nổ gi&uacute;p anh thư gi&atilde;n giống l&uacute;c nghe ASRM. Cuối c&ugrave;ng, anh sẽ được xối nước qua tay Skinner để l&agrave;m sạch s&acirc;u tai, loại bỏ hết bụi bẩn v&agrave; bọt trong tai</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-6.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-2 ant-col-sm-12 ant-col-sm-order-1\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 1; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-7.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-1 ant-col-sm-12 ant-col-sm-order-2\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 2; padding: 10px 15px 15px;\">\n<div class=\"content-center content-right\" style=\"box-sizing: border-box; height: 365.156px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 0px 0px 30px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">6. K&eacute;o khăn gi&atilde;n cơ cổ - xối nước th&aacute;c đổ (mới)</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Ph&ugrave; hợp với những anh hay phải ngồi nhiều, thường xuy&ecirc;n bị đau cổ, mỏi cổ. Skinner sẽ sử dụng khăn ấm để k&eacute;o gi&atilde;n cơ cổ cho anh, trong bước n&agrave;y, anh chỉ cần thả lỏng v&agrave; tận hưởng, đừng d&ugrave;ng lực cứng cổ lại nh&eacute;!<br style=\"box-sizing: border-box;\" />Tiếp theo l&agrave; động t&aacute;c xối nước quanh mắt. Động t&aacute;c n&agrave;y sẽ gi&uacute;p giải tỏa sự căng thẳng, mệt mỏi của cơ mắt v&agrave; tr&aacute;n sau một ng&agrave;y d&agrave;i nh&igrave;n v&agrave;o c&aacute;c m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh</div>\n</div>\n</div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"content-center content-left\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 30px 0px 0px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">7. Tư vấn kiểu t&oacute;c hợp khu&ocirc;n mặt</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Trước khi cắt t&oacute;c cho anh, Stylist sẽ hỏi về nghề nghiệp, sở th&iacute;ch v&agrave; nh&igrave;n kiểu t&oacute;c, khu&ocirc;n mặt để tư vấn cho anh kiểu t&oacute;c ph&ugrave; hợp nhất</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-8.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-2 ant-col-sm-12 ant-col-sm-order-1\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 1; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-9.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-1 ant-col-sm-12 ant-col-sm-order-2\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 2; padding: 10px 15px 15px;\">\n<div class=\"content-center content-right\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 0px 0px 30px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">8. Cắt t&oacute;c tạo kiểu bởi stylist h&agrave;ng đầu</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Anh sẽ được cắt t&oacute;c tạo kiểu một c&aacute;ch tỉ mỉ, tận t&igrave;nh. C&aacute;c vật dụng phục vụ cho việc cắt t&oacute;c đều đầy đủ, c&oacute; sẵn v&agrave; thay thế định kỳ</div>\n</div>\n</div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"content-center content-left\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 30px 0px 0px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">9. Cạo mặt &ecirc;m &aacute;i &ndash; xả sạch t&oacute;c con</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Sau khi cắt xong, Stylist sẽ cạo mặt, r&acirc;u, c&aacute;c đoạn t&oacute;c thừa cho anh. Với tay nghề cao, cẩn thận, đảm bảo cho việc cạo thật &ecirc;m &aacute;i, kh&ocirc;ng đau. Tiếp đ&oacute; sẽ l&agrave; một lần xả t&oacute;c gi&uacute;p sạch t&oacute;c con</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-10.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: #ffffff; color: #111111; font-family: be; font-size: 18px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-2 ant-col-sm-12 ant-col-sm-order-1\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 1; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-combo-10bc/shine-combo-10-buoc-80k-11.jpg\" alt=\"Shine combo cắt gội 10 bước\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-xs-order-1 ant-col-sm-12 ant-col-sm-order-2\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; order: 2; padding: 10px 15px 15px;\">\n<div class=\"content-center content-right\" style=\"box-sizing: border-box; height: 366.875px; display: flex; flex-flow: column; justify-content: center; text-align: justify; padding: 0px 0px 0px 30px;\">\n<div class=\"service-combo__title\" style=\"box-sizing: border-box; padding: 0px 0px 0px 18px; position: relative; font-weight: 600; margin-bottom: 15px;\">10. Vuốt s&aacute;p &ndash; xịt g&ocirc;m tạo kiểu cao cấp</div>\n<div class=\"service-combo__text\" style=\"box-sizing: border-box; font-size: 16px; padding-left: 20px; position: relative;\">Cuối c&ugrave;ng, anh sẽ được sấy kh&ocirc; t&oacute;c, vuốt s&aacute;p tạo kiểu v&agrave; xịt g&ocirc;m để giữ kiểu t&oacute;c đẹp trai suốt cả ng&agrave;y d&agrave;i</div>\n<div>&nbsp;</div>\n</div>\n</div>\n</div>', 80000, 'product/oyK3WmZs1cTD4JgUeVQzp9nDo5wdqIGbbtgh3dvR.jpg', 2, '2021-04-01 07:41:36', '2021-07-17 09:12:35'),
(2, 'kid combo', 'kid-combo', '<div class=\"container\" style=\"box-sizing: border-box; max-width: 1170px; margin: auto; color: #111111; font-family: Be; font-size: 16px; background-color: #eeeeee;\">\n<div class=\"pd-bottom\" style=\"box-sizing: border-box; padding-bottom: 30px;\">\n<div class=\"container-small\" style=\"box-sizing: border-box; padding: 0px 80px;\">\n<div class=\"kid-combo__content-brown pd-top\" style=\"box-sizing: border-box; font-size: 18px; color: #9f7344; font-weight: bold; text-align: center; padding-top: 30px;\">Đẹp trai kh&ocirc;ng ph&acirc;n biệt độ tuổi. Ai bảo c&aacute;c bạn nhỏ th&igrave; kh&ocirc;ng thể \"l&agrave;m đẹp\" n&agrave;o? Nếu bố v&agrave; anh đ&atilde; c&oacute; Shine Combo Cắt Gội 10 Bước 80k bao ph&ecirc;, bao đ&atilde;. Th&igrave; c&aacute;c em nhỏ cũng c&oacute; thể trải nghiệm dịch vụ cực \"đỉnh\" tại 30Shine với g&oacute;i Kid Combo 5 bước, được thiết kế đặc biệt d&agrave;nh ri&ecirc;ng cho c&aacute;c em.</div>\n<div class=\"pd-top\" style=\"box-sizing: border-box; padding-top: 30px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 1010px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-2.jpg\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"kid-combo__advantage\" style=\"box-sizing: border-box;\">\n<div class=\"kid-combo__title kid-combo__title-big pd-top\" style=\"box-sizing: border-box; font-size: 36px; color: #9f7344; text-transform: uppercase; font-weight: bold; padding-top: 30px; padding-bottom: 15px;\">ƯU ĐIỂM</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -15px; margin-right: -15px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-8\" style=\"box-sizing: border-box; position: relative; max-width: 33.3333%; min-height: 1px; flex: 0 0 33.3333%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__box\" style=\"box-sizing: border-box; position: relative; padding-top: 30px;\">\n<div class=\"box__img\" style=\"box-sizing: border-box; position: absolute; top: 0px; left: 158.328px; transform: translateX(-50%);\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 50px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-17.png\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"box__content\" style=\"box-sizing: border-box; text-align: center; padding: 0px 15px; background-color: #d8bda0; min-height: 150px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-weight: bold;\">G&oacute;i dịch vụ thiết kế độc quyền bởi 30Shine, ph&ugrave; hợp với lứa tuổi</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-8\" style=\"box-sizing: border-box; position: relative; max-width: 33.3333%; min-height: 1px; flex: 0 0 33.3333%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__box\" style=\"box-sizing: border-box; position: relative; padding-top: 30px;\">\n<div class=\"box__img\" style=\"box-sizing: border-box; position: absolute; top: 0px; left: 158.328px; transform: translateX(-50%);\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 50px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-17.png\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"box__content\" style=\"box-sizing: border-box; text-align: center; padding: 0px 15px; background-color: #d8bda0; min-height: 150px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-weight: bold;\">Sử dụng c&aacute;c mỹ phẩm dịu nhẹ, kh&ocirc;ng k&iacute;ch ứng, với sự đồng &yacute; của phụ huynh</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-8\" style=\"box-sizing: border-box; position: relative; max-width: 33.3333%; min-height: 1px; flex: 0 0 33.3333%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__box\" style=\"box-sizing: border-box; position: relative; padding-top: 30px;\">\n<div class=\"box__img\" style=\"box-sizing: border-box; position: absolute; top: 0px; left: 158.328px; transform: translateX(-50%);\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 50px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-17.png\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"box__content\" style=\"box-sizing: border-box; text-align: center; padding: 0px 15px; background-color: #d8bda0; min-height: 150px; border-radius: 10px; display: flex; justify-content: center; align-items: center; font-weight: bold;\">Stylist l&agrave; chuy&ecirc;n gia trong lĩnh vực về t&oacute;c, tư vấn v&agrave; tạo kiểu ph&ugrave; hợp nhất với c&aacute;c bạn</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"bg-white\" style=\"box-sizing: border-box; background-color: #ffffff; padding: 0px 15px; color: #111111; font-family: Be; font-size: 16px;\">\n<div class=\"container\" style=\"box-sizing: border-box; max-width: 1170px; margin: auto;\">\n<div class=\"kid-combo__block\" style=\"box-sizing: border-box;\">\n<div class=\"container-small\" style=\"box-sizing: border-box; padding: 0px 80px;\">\n<div class=\"kid-combo__title kid-combo__title-big pd-top pd-bottom text-center\" style=\"box-sizing: border-box; text-align: center; font-size: 36px; color: #9f7344; text-transform: uppercase; font-weight: bold; padding-top: 30px; padding-bottom: 30px;\">QUY TR&Igrave;NH 5 BƯỚC,&nbsp;<span style=\"box-sizing: border-box;\">GI&Aacute; CHỈ 70K</span></div>\n</div>\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -15px; margin-right: -15px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__step\" style=\"box-sizing: border-box;\">\n<div class=\"step__title\" style=\"box-sizing: border-box; margin-bottom: 5px; min-height: 50px;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 1:&nbsp;</span><span style=\"box-sizing: border-box;\">Gội đầu l&agrave;m mềm t&oacute;c, sạch bụi bẩn</span></div>\n<div class=\"step__img\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-3.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__step\" style=\"box-sizing: border-box;\">\n<div class=\"step__title\" style=\"box-sizing: border-box; margin-bottom: 5px; min-height: 50px;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 2:&nbsp;</span><span style=\"box-sizing: border-box;\">Tư vấn kiểu t&oacute;c gọn g&agrave;ng, ph&ugrave; hợp với lứa tuổi, thể hiện c&aacute; t&iacute;nh, bản sắc ri&ecirc;ng</span></div>\n<div class=\"step__img\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-4.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__step\" style=\"box-sizing: border-box;\">\n<div class=\"step__title\" style=\"box-sizing: border-box; margin-bottom: 5px; min-height: 50px;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 3:&nbsp;</span><span style=\"box-sizing: border-box;\">Cắt t&oacute;c tạo kiểu</span></div>\n<div class=\"step__img\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-5.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__step\" style=\"box-sizing: border-box;\">\n<div class=\"step__title\" style=\"box-sizing: border-box; margin-bottom: 5px; min-height: 50px;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 4:&nbsp;</span><span style=\"box-sizing: border-box;\">Gội xả kỹ c&agrave;ng sạch t&oacute;c con, gi&uacute;p b&eacute; kh&ocirc;ng cảm thấy kh&oacute; chịu suốt cả ng&agrave;y</span></div>\n<div class=\"step__img\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-6.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"kid-combo__step\" style=\"box-sizing: border-box;\">\n<div class=\"step__title\" style=\"box-sizing: border-box; margin-bottom: 5px; min-height: 50px;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 5:&nbsp;</span><span style=\"box-sizing: border-box;\">Vuốt s&aacute;p đẹp trai</span></div>\n<div class=\"step__img\" style=\"box-sizing: border-box;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-7.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\">\n<div class=\"content-center-middle kid-combo__step-commit\" style=\"box-sizing: border-box; display: flex; justify-content: center; align-items: center; height: 519.516px; flex-flow: column; padding: 0px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 100px; margin-bottom: 30px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-18.png\" alt=\"30Shine Kid Combo\" />\n<div class=\"kid-combo__content-brown\" style=\"box-sizing: border-box; font-size: 18px; color: #9f7344; font-weight: bold; text-align: center;\">Bố mẹ h&atilde;y cứ y&ecirc;n t&acirc;m về việc đưa b&eacute; tới 30Shine cắt t&oacute;c. Mọi thao t&aacute;c đều được tối ưu ho&agrave;n to&agrave;n, để bố mẹ c&oacute; thể tiết kiệm thời gian, lại đảm bảo hợp l&yacute;, phục vụ cực kỳ tận t&igrave;nh tận &yacute;</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"container-small\" style=\"box-sizing: border-box; padding: 0px 80px;\">\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -30px; margin-right: -30px; justify-content: center;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 30px 15px;\">\n<div class=\"kid-combo__box kid-combo__box2\" style=\"box-sizing: border-box; position: relative; padding-top: 30px;\">\n<div class=\"box__img\" style=\"box-sizing: border-box; position: absolute; top: 0px; left: -20px; transform: none;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 50px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-18.png\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"box__content\" style=\"box-sizing: border-box; text-align: center; padding: 0px 30px; background-color: #ffcc32; min-height: 200px; border-radius: 10px; display: flex; justify-content: center; align-items: center; flex-flow: column;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 1:</span>Truy cập website: 30shine.com</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 30px 15px;\">\n<div class=\"kid-combo__box kid-combo__box2\" style=\"box-sizing: border-box; position: relative; padding-top: 30px;\">\n<div class=\"box__img\" style=\"box-sizing: border-box; position: absolute; top: 0px; left: -20px; transform: none;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 50px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-18.png\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"box__content\" style=\"box-sizing: border-box; text-align: center; padding: 0px 30px; background-color: #ffcc32; min-height: 200px; border-radius: 10px; display: flex; justify-content: center; align-items: center; flex-flow: column;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 2:</span>Điền th&ocirc;ng tin<br style=\"box-sizing: border-box;\" />\"sđt + địa chỉ + khung giờ\"<br style=\"box-sizing: border-box;\" />để đặt lịch</div>\n</div>\n</div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 30px 15px;\">\n<div class=\"kid-combo__box kid-combo__box2\" style=\"box-sizing: border-box; position: relative; padding-top: 30px;\">\n<div class=\"box__img\" style=\"box-sizing: border-box; position: absolute; top: 0px; left: -20px; transform: none;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 50px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-18.png\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"box__content\" style=\"box-sizing: border-box; text-align: center; padding: 0px 30px; background-color: #ffcc32; min-height: 200px; border-radius: 10px; display: flex; justify-content: center; align-items: center; flex-flow: column;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Bước 3:</span>Tới trước giờ hẹn 15ph để tạo t&acirc;m l&yacute; thoải m&aacute;i nhất cho b&eacute;. Y&ecirc;n t&acirc;m l&agrave; c&aacute;c salon 30Shine c&oacute; kh&ocirc;ng gian ngồi chờ cực rộng r&atilde;i, nước m&aacute;t, wifi mạnh tận nơi!</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"kid-combo__style-hair\" style=\"box-sizing: border-box; background-repeat: no-repeat; background-size: cover; padding: 0px 15px 50px; color: #111111; font-family: Be; font-size: 16px; background-color: #eeeeee; background-image: url(\'https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-16.jpg\');\">\n<div class=\"container\" style=\"box-sizing: border-box; max-width: 1170px; margin: auto;\">\n<div class=\"container-small\" style=\"box-sizing: border-box; padding: 0px 80px;\">\n<div class=\"kid-combo__title kid-combo__title-big text-center pd-top\" style=\"box-sizing: border-box; text-align: center; font-size: 36px; color: #9f7344; text-transform: uppercase; font-weight: bold; padding-top: 30px;\">DƯỚI Đ&Acirc;Y L&Agrave; TOP C&Aacute;C KIỂU T&Oacute;C HOTTREND 2021 M&Agrave; 30SHINE GỢI &Yacute;, CỰC HỢP L&Yacute; CHO C&Aacute;C BẠN NHỎ</div>\n</div>\n<div class=\"pd-top\" style=\"box-sizing: border-box; padding-top: 30px;\">\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -15px; margin-right: -15px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-8.jpg\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-9.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n<div class=\"style-hair__wrapper\" style=\"box-sizing: border-box; text-align: center; padding-top: 30px;\">\n<div class=\"style-hair__title\" style=\"box-sizing: border-box; font-weight: bold; font-size: 22px; text-transform: uppercase;\">UNDERCUT QUIFF</div>\n<div class=\"style-hair__content\" style=\"box-sizing: border-box; padding: 10px 200px 0px;\">Kiểu t&oacute;c được cắt ngắn 2 b&ecirc;n v&agrave; cắt cao ở ph&iacute;a sau đầu, gọn g&agrave;ng v&agrave; ph&ugrave; hợp với nhiều gương mặt, mang lại cảm gi&aacute;c c&aacute; t&iacute;nh, nổi bật.</div>\n</div>\n</div>\n<div class=\"pd-top\" style=\"box-sizing: border-box; padding-top: 30px;\">\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -15px; margin-right: -15px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-10.jpg\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-11.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n<div class=\"style-hair__wrapper\" style=\"box-sizing: border-box; text-align: center; padding-top: 30px;\">\n<div class=\"style-hair__title\" style=\"box-sizing: border-box; font-weight: bold; font-size: 22px; text-transform: uppercase;\">LAYER NHUỘM N&Acirc;U</div>\n<div class=\"style-hair__content\" style=\"box-sizing: border-box; padding: 10px 200px 0px;\">Style H&agrave;n Quốc nhẹ nh&agrave;ng với những lớp t&oacute;c đan v&agrave;o nhau, c&agrave;ng l&agrave;m tăng th&ecirc;m n&eacute;t đ&aacute;ng y&ecirc;u của c&aacute;c bạn nhỏ.</div>\n</div>\n</div>\n<div class=\"pd-top\" style=\"box-sizing: border-box; padding-top: 30px;\">\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -15px; margin-right: -15px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-12.jpg\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-13.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n<div class=\"style-hair__wrapper\" style=\"box-sizing: border-box; text-align: center; padding-top: 30px;\">\n<div class=\"style-hair__title\" style=\"box-sizing: border-box; font-weight: bold; font-size: 22px; text-transform: uppercase;\">SIDE PART</div>\n<div class=\"style-hair__content\" style=\"box-sizing: border-box; padding: 10px 200px 0px;\">Lu&ocirc;n nằm trong top kiểu t&oacute;c được ưa chuộng nhất, đ&acirc;y l&agrave; kiểu t&oacute;c dễ để, ph&ugrave; hợp với nhiều kiểu gương mặt, mang lại cảm gi&aacute;c khoẻ khoắn v&agrave; nhanh nhẹn.</div>\n</div>\n</div>\n<div class=\"pd-top\" style=\"box-sizing: border-box; padding-top: 30px;\">\n<div class=\"ant-row\" style=\"box-sizing: border-box; flex-flow: row wrap; display: flex; padding-bottom: 0px; background: transparent; margin-left: -15px; margin-right: -15px;\">\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-14.jpg\" alt=\"30Shine Kid Combo\" /></div>\n<div class=\"ant-col ant-col-xs-24 ant-col-sm-12\" style=\"box-sizing: border-box; position: relative; max-width: 50%; min-height: 1px; flex: 0 0 50%; padding: 10px 15px 15px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: 570px; margin-bottom: 15px;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/shine-kid-combo/30shine-kid-combo-15.jpg\" alt=\"30Shine Kid Combo\" /></div>\n</div>\n<div class=\"style-hair__wrapper\" style=\"box-sizing: border-box; text-align: center; padding-top: 30px;\">\n<div class=\"style-hair__title\" style=\"box-sizing: border-box; font-weight: bold; font-size: 22px; text-transform: uppercase;\">LAYER MOI</div>\n<div class=\"style-hair__content\" style=\"box-sizing: border-box; padding: 10px 200px 0px;\">L&agrave; biến tấu đầy ph&aacute; c&aacute;ch của 2 kiểu t&oacute;c lu&ocirc;n nằm trong top trend, Layer Moi mang lại cảm gi&aacute;c tinh nghịch đầy c&aacute; t&iacute;nh.</div>\n</div>\n</div>\n<div class=\"container-small\" style=\"box-sizing: border-box; padding: 0px 80px;\">\n<div class=\"kid-combo__content-brown style-hair__footer\" style=\"box-sizing: border-box; color: #9f7344; font-weight: bold; text-align: center; padding: 30px 0px; width: 808px; margin: 0px auto;\">Muốn c&aacute;c b&eacute; cũng c&oacute; một diện mạo bừng s&aacute;ng, đẹp trai m&agrave; vẫn giữ được n&eacute;t ngộ nghĩnh, ng&acirc;y thơ trẻ nhỏ?<br style=\"box-sizing: border-box;\" />Một kiểu t&oacute;c đầy ph&aacute; c&aacute;ch m&agrave; vẫn hợp độ tuổi?<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />Chỉ với 70k cho một Combo Cắt Gội thiết kế đặc biệt d&agrave;nh ri&ecirc;ng cho c&aacute;c bạn nhỏ!!!<br style=\"box-sizing: border-box;\" />Book lịch ngay tại website:&nbsp;<span style=\"box-sizing: border-box; font-weight: bolder;\">30shine.com</span>&nbsp;hoặc li&ecirc;n hệ hotline:&nbsp;<span style=\"box-sizing: border-box; font-weight: bolder;\">1800.28.28.30</span></div>\n</div>\n</div>\n</div>', 70000, 'product/2vNotf70bpfqpqbhSLePQEmCzqjWooXDWEGF1Dl0.jpg', 2, '2021-04-08 06:26:34', '2021-07-17 09:14:03'),
(3, 'uốn cao cấp', 'uon-cao-cap', '<div class=\"service-detail__content\" style=\"box-sizing: border-box; text-align: justify; padding: 0px 15px 30px; font-size: 16px; width: 702px; margin: 0px auto; color: #111111; font-family: be; background-color: #ffffff;\">Uốn phồng l&agrave; b&iacute; quyết để m&aacute;i t&oacute;c lu&ocirc;n bồng bềnh v&agrave;o nếp, đẹp như được vuốt tại salon. Chỉ cần l&agrave;m một lần, form t&oacute;c đẹp giữ được v&agrave;i th&aacute;ng. Uốn phồng cao cấp được tăng cường th&agrave;nh phần Collagen v&agrave; Keratin đem lại độ su&ocirc;n mượt v&agrave; độ b&oacute;ng ho&agrave;n hảo cho t&oacute;c, phục hồi t&oacute;c hư tổn.</div>\n<div class=\"service-detail__image\" style=\"box-sizing: border-box; color: #111111; font-family: be; font-size: 18px; background-color: #ffffff;\">\n<div class=\"my-swiper\" style=\"box-sizing: border-box; position: relative;\">\n<div class=\"swiper-container swiper-container-initialized swiper-container-horizontal\" style=\"box-sizing: border-box; margin-left: auto; margin-right: auto; position: relative; overflow: hidden; list-style: none; padding: 0px; z-index: 1;\">\n<div class=\"swiper-wrapper\" style=\"box-sizing: content-box; position: relative; width: 1170px; height: 379.328px; z-index: 1; display: flex; transition-property: transform; transform: translateZ(0px);\">\n<div class=\"swiper-slide swiper-slide-active\" style=\"box-sizing: border-box; flex-shrink: 0; width: 379.333px; height: 379.328px; position: relative; transition-property: transform; margin-right: 16px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/v2/uon-cao-cap/30shine-uon-cao-cap-2.jpg\" alt=\"\" /></div>\n<div class=\"swiper-slide swiper-slide-next\" style=\"box-sizing: border-box; flex-shrink: 0; width: 379.333px; height: 379.328px; position: relative; transition-property: transform; margin-right: 16px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/v2/uon-cao-cap/30shine-uon-cao-cap-3.jpg\" alt=\"\" /></div>\n<div class=\"swiper-slide\" style=\"box-sizing: border-box; flex-shrink: 0; width: 379.333px; height: 379.328px; position: relative; transition-property: transform; margin-right: 16px;\"><img style=\"box-sizing: border-box; vertical-align: middle; border-style: none; width: auto; max-width: 100%; margin: 0px auto;\" src=\"https://storage.30shine.com/ResourceWeb/data/images/Service/v2/uon-cao-cap/30shine-uon-cao-cap-4.jpg\" alt=\"\" /></div>\n</div>\n</div>\n</div>\n</div>', 315000, 'product/Sx68k4K9jwttFmyjoh1x5tnyMIcbPukUj2jWiJX3.jpg', 3, '2021-04-22 20:45:45', '2021-07-17 09:15:17'),
(4, 'uốn tiêu chuẩn', 'uon-tieu-chua', '1234', 260000, 'service/v0fO1H7eMfd2rbSamO2Kem86Ga8jjBrrf5mjPUBm.jpg', 3, '2021-04-22 20:46:14', '2021-04-22 20:46:14'),
(5, 'uốn con sâu', 'uon-con-sau', '12431234', 450000, 'service/Aj8se5lfo7UBMUs0SvktMY5hwvTdlWCEYsMV11Zb.jpg', 3, '2021-04-22 20:46:39', '2021-04-22 20:46:39'),
(6, 'premlock', 'premlock', '1224', 799000, 'service/PTEK03ZhlWFM2KLrxUtBxzqAMQm4CJzHN5295uTZ.jpg', 3, '2021-04-22 20:47:05', '2021-04-22 20:47:05'),
(7, 'nhuộm đen phủ bạc', 'nhuom-den-phu-bac', '1234', 180000, 'service/eM4QtPBXEdS0MB6xMo7oVlEa4Y62d5amr01jOCE2.jpg', 4, '2021-04-22 20:47:53', '2021-04-22 20:47:53'),
(8, 'nhuộm nâu cao cấp', 'nhuom-nau-cao-cap', '24', 225000, 'service/HxWrQv68tkJZItawgcXTAi5VOB6Fl5Qk1DTtBi1b.jpg', 4, '2021-04-22 20:48:17', '2021-04-22 20:48:17'),
(9, 'nhuộm thời trang không tẩy', 'nhuom-thoi-trang-khong-tay', '1234', 260000, 'service/kx63DvWDG4yCLpCyJ2Klk2UeAkDxB3DEHu09ChEC.jpg', 4, '2021-04-22 20:48:47', '2021-04-22 20:48:47'),
(10, '124', '124', '&agrave;d', 1234, 'service/zyZ5VfzIguICyIxGKNy2okgUYHyeJt17wL6xYBbx.jpg', 5, '2021-04-22 23:57:32', '2021-04-23 00:19:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gBUFJL1P1g9jtuW8ZOp4OiMBCjyy5Rsp7bgIyzEn', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQ3dTeXpSNEtLclhBVXBDNHBGbGgzOWNwS0VlMURuREFpYjNDMG5yQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0cy9lZGl0L2RhdS1nb2kteGEtdGFtLTMtdHJvbmctMS1yZXV6ZWwiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMztzOjc6ImlkX3JvbGUiO3M6MToiMSI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRHU3ZCSldtR1I0TmhGQS9RNjJJNWUuOXdKM2tCVExEQi5TLmRBWTVvSmVQZm1ya3Q3UHQvRyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkR1N2QkpXbUdSNE5oRkEvUTYySTVlLjl3SjNrQlRMREIuUy5kQVk1b0plUGZtcmt0N1B0L0ciO30=', 1626770543),
('R2T2BohJ1x7voGchyF2iWmMslg3ZA33eFOVig1hk', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQUFINDNRVXl6RHRCdU9oclRGZkN2VnJIalZvMFcwd0pBa080eVVocCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9vcmRlcnMtcHJvZHVjdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEzO3M6NzoiaWRfcm9sZSI7czoxOiIxIjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEdTdkJKV21HUjROaEZBL1E2Mkk1ZS45d0oza0JUTERCLlMuZEFZNW9KZVBmbXJrdDdQdC9HIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRHU3ZCSldtR1I0TmhGQS9RNjJJNWUuOXdKM2tCVExEQi5TLmRBWTVvSmVQZm1ya3Q3UHQvRyI7fQ==', 1626790965);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone_number`, `email`, `address`, `created_at`, `updated_at`) VALUES
(1, 'setting/oKNNV5tURORmfVIVUU04wglGCQIEo5fiJdJq2E3p.png', '0962370557', 'hieupvph12651@fpt.edu.vn', 'Số 1 Trịnh Văn Bô - Nam Từ Liêm - Hà Nội', NULL, '2021-04-25 19:17:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `url_image`, `url_link`, `created_at`, `updated_at`) VALUES
(1, '1', 'slider/U27Y8fks9LlPTrwh1X7mMO9hKVJGM4LuI42MalS7.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int(10) UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
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
(12, '1124', '1234', 'a@gmail.com', NULL, '$2y$10$gFOkqOamdLbXArnnqhsWXue2DmwgK.Zv5viPBACLY5BhGCD4vpH4m', NULL, NULL, NULL, NULL, NULL, '4', '2021-04-11 11:12:16', '2021-04-11 11:12:16'),
(13, 'Duy', '0922222222', '02091997@gmail.com', NULL, '$2y$10$GSvBJWmGR4NhFA/Q62I5e.9wJ3kBTLDB.S.dAY5oJePfmrkt7Pt/G', NULL, NULL, NULL, NULL, NULL, '1', '2021-07-17 08:59:15', '2021-07-17 12:29:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_news_name_unique` (`name`),
  ADD UNIQUE KEY `category_news_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `category_services`
--
ALTER TABLE `category_services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_services_name_unique` (`name`),
  ADD UNIQUE KEY `category_services_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category_services`
--
ALTER TABLE `category_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
