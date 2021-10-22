-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 05:09 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exams`
--

CREATE TABLE `exams` (
  `id` int(10) NOT NULL,
  `exam_title` varchar(50) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` int(60) NOT NULL,
  `total_question` int(20) NOT NULL,
  `marks_per_right_answer` int(10) NOT NULL,
  `created_on` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `exam_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `exams`
--

INSERT INTO `exams` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
(1, 'Kiểm tra học kì', '2021-10-22', 60, 20, 1, '2021-10-21', 'Started', 101),
(10, 'Kiểm tra học kì', '2021-10-22', 60, 20, 1, '2021-10-21', 'Started', 101),
(12, 'Kiểm tra học kì', '2021-10-22', 60, 20, 1, '2021-10-21', 'Pending’', 102),
(13, 'Kiểm tra học kì', '2021-10-22', 60, 20, 1, '2021-10-21', '‘Created’', 103),
(14, 'Kiểm tra học kì', '2021-10-22', 60, 20, 1, '2021-10-21', 'Completed', 104);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
