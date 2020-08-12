-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 12, 2020 lúc 07:10 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price_gold`
--

CREATE TABLE `price_gold` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `buy` int(11) NOT NULL,
  `sell` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `price_gold`
--

INSERT INTO `price_gold` (`id`, `date`, `updated_at`, `buy`, `sell`, `created_at`) VALUES
(1, '2020/08/09', '2020-08-09 09:26:11', 5850, 6030, '2020-08-09 20:26:11'),
(2, '2020/08/09', '2020-08-09 16:29:12', 5850, 1234, '2020-08-09 23:29:12'),
(3, '2020/08/29', '2020-08-09 21:23:38', 5850, 6030, '2020-08-18 21:23:38'),
(5, '2020/09/29', '2020-08-09 21:23:38', 5850, 6030, '2020-09-29 21:23:38'),
(6, '2020/08/10', '2020-08-10 22:36:14', 5665, 5828, '2020-08-10 22:36:14'),
(7, '2020/08/12', '2020-08-12 22:01:58', 5256, 5638, '2020-08-12 22:01:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_send_email` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `price_gold`
--
ALTER TABLE `price_gold`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `price_gold`
--
ALTER TABLE `price_gold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
