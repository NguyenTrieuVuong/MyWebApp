-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 09, 2023 lúc 04:44 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eclasse`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `Name`, `Description`, `Prix`) VALUES
(1, 'Tuan', 'Toan', '100$'),
(2, 'Vuong', 'Tiếng Anh', '2000$'),
(3, 'Hieu', 'Văn', '200$');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments_list`
--

CREATE TABLE `payments_list` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PaymentSchedule` date NOT NULL,
  `BillNumber` varchar(255) NOT NULL,
  `AmountPaid` varchar(255) NOT NULL,
  `BalanceAmount` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `payments_list`
--

INSERT INTO `payments_list` (`id`, `Name`, `PaymentSchedule`, `BillNumber`, `AmountPaid`, `BalanceAmount`, `Date`) VALUES
(20, 'Tuan', '2020-01-20', '22', '2', '3', '2020-01-12'),
(25, 'Vương', '2023-08-22', '5', '100$', '0', '2023-08-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students_list`
--

CREATE TABLE `students_list` (
  `Id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `EnrollNumber` varchar(255) NOT NULL,
  `DateOfAdmission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `students_list`
--

INSERT INTO `students_list` (`Id`, `img`, `Name`, `Email`, `Phone`, `EnrollNumber`, `DateOfAdmission`) VALUES
(3, 'Angular_full_color_logo.svg.png', 'Hieu', 'hoanghuuhieu@gmail.com', '093213124', '20003123', '0000-00-00'),
(6, 'hoc-tieng-anh-voi-nguoi-nuoc-ngoai.jpg', 'Tuấn Nguyễn Anh', 'nguyenatuan0302@gmail.com', '0876687256', '20002176', '0000-00-00'),
(7, 'image.jpg', 'Nguyễn Triệu Vương', 'nguyentrieuvuong@gmail.com', '031294712', '04128481', '2002-09-06'),
(9, 'book.jpg', 'DO HOC', 'dotruongtop2002@gmail.com', '0355068592', '20002182', '2023-11-09'),
(11, 'blog_1.jpg', 'Material Informatics', '20002182@vnu.edu.vn', '0399617303', '20002101', '2023-11-11'),
(12, 'gallery_6.jpg', 'DO HOC', 'dotruongtop2002@gmail.com', '0355068592', '20002100', '2023-10-31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `Email`, `Password`, `role`) VALUES
(1, 'sabir', 'sabir@gmail.com', 'Sabir123', ''),
(3, 'tung', 'nguyen2atuan0302@gmail.com', '12345678', 'admin'),
(4, 'hieu', 'hoanghuuhieu@gmail.com', '12345678', 'User'),
(5, 'tuan', 'nguyenatuan0302@gmail.com', '12345', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payments_list`
--
ALTER TABLE `payments_list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Chỉ mục cho bảng `students_list`
--
ALTER TABLE `students_list`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `payments_list`
--
ALTER TABLE `payments_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `students_list`
--
ALTER TABLE `students_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students_list` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
