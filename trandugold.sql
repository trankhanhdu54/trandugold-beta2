-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 30, 2023 lúc 11:35 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trandugold`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `ten`, `password`) VALUES
(1, 'admin', 'Khánh Dư', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9'),
(3, 'trandugold', NULL, '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chamngon`
--

CREATE TABLE `chamngon` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chamngon`
--

INSERT INTO `chamngon` (`id`, `name`, `image`) VALUES
(1, 'Nếu tuổi thơ chưa làm được điều mình muốn thì tuổi trẻ phải làm được điều mình đam mê. Vì chỉ cần có hạnh phúc một khắc nào đó, ta sẽ mang theo nó cả cuộc đời.', 'website-demo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`id`, `name`, `text`) VALUES
(2, 'Thiết Kế Website', 'Nhận thiết kế website theo yêu cầu với giá cả hợp lý tùy từng trường hợp của khách hàng theo từng yêu cầu.'),
(3, 'Quảng Cáo - Tiếp Thị', 'Nhận quảng cáo facebook, quảng cáo google, tiếp thị số nhằm vào khách hàng mục tiêu.'),
(4, 'Phát Triển Web Ứng Dụng', 'Web ứng dụng là một trang web cũng là một ứng dụng. Web ứng dụng chạy ở mọi hệ điều hành, mọi nền tảng.'),
(5, 'Xây Dựng Thương Hiệu', 'Từ thiết kế hình ảnh, đồ họa. Đến thiết kế website và phát triển website. Nội dung và quảng cáo facebook, google.'),
(6, 'Phát Triển Nền Tảng', 'Xây dựng nền tảng, hệ thống ERP - CRM - HRM nhằm hoạch định tài nguyên doanh nghiệp.'),
(7, 'Thiết Kế UI/UX', 'Thiết Kế UI/UX, thiết kế đồ họa, banner, logo... Thiết kế bản mẫu demo, mockup, hình ảnh quảng cáo sản phẩm.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Huỳnh Minh Lâm', 'lalaa@gmail.com', 'Web đẹp đấy bro ^^'),
(45, 'Nguyễn Văn zZ', 'lalaaa@gmail.com', 'Hiii'),
(46, 'Nguyễn Văn A', 'lalaa@gmail.com', '55555555');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `noidung`
--

CREATE TABLE `noidung` (
  `id` int(100) NOT NULL,
  `name` varchar(300) NOT NULL,
  `nam` text NOT NULL,
  `text` text DEFAULT NULL,
  `namelink` varchar(100) DEFAULT NULL,
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `noidung`
--

INSERT INTO `noidung` (`id`, `name`, `nam`, `text`, `namelink`, `link`) VALUES
(1, 'The Youth Has Not Lived\n', '2016', 'Sống cuộc sống thường ngày như bao đứa khác, nhưng được cái là Nghèo...', '- Gold Designer', 'https://www.facebook.com/TranDuGold/'),
(2, 'Lost In Life Stream\n', '2017', 'Một kẻ lười biến,tôi phát hiện mình đang lạc trôi giữa dòng đời ...\n\n', NULL, 'https://www.facebook.com/TranDuGold/'),
(3, 'Find Your Own Passion', '2018', 'Vào một ngày đẹp trời tôi vô tình phát hiện sự đam mê của mình với Website...\n\n', '- i\'m Gold', 'https://www.facebook.com/TranDuGold/'),
(4, 'Build The Gold\n', '2019', 'Code Golang. Xây dựng hệ thống back-end, quản lý database, phát triển landing page, static page, phát triển flowchart....\n\n', '- Designer System', 'https://www.facebook.com/TranDuGold/'),
(5, 'CTEC', '2020', 'Thực tập viết Website tra cứu và quản lí văn bằng tại phòng Đào Tạo.\n\n', '- Gold Designer', 'https://www.facebook.com/TranDuGold/'),
(6, 'Cuộc Sống Phía Trước', '2021', 'Một năm đầy thử thách , mở ra một bước ngoặc mới của cuộc đời...', NULL, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `text1`, `text2`, `text3`, `image`) VALUES
(1, 'Sản phẩm là giá trị của bản thân. Một sản phẩm tốt cần sự nỗ lực hết mình.', 'Cách tôi làm không phải là làm lại những gì đã có. Cách tôi là là phát triển những gì đã học hỏi và trải nghiệm.', 'Một công nghệ mới chưa chắn tôi sẽ sử dụng nhưng một công nghệ tốt tôi sẽ áp dụng cho sản phẩm của mình.', 'Với tôi, website là sản phẩm. Chính website là điều tôi có thể nói lên giá trị của bản thân mình. Tôi là một nhà thiết kế và lập trình web.', 'website-demo (1).jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `name`, `image`) VALUES
(1, 'If childhood has not done what we want, then youth must do what we are passionate about. Because as long as we have happiness for a moment, we carry it with us for life.', 'gold.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tieude`
--

CREATE TABLE `tieude` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tieude`
--

INSERT INTO `tieude` (`id`, `name`, `text1`, `text2`, `text3`, `image`) VALUES
(0, 'Kỹ năng bản thân và kinh nghiệm bản thân là điều bạn có thể tin tưởng thuê một người phát triển website cho thương hiệu bạn.', 'Thiết kế website có rất nhiều công nghệ. Tại sao bạn không tìm một người giỏi công nghệ để làm điều đó?', 'Website là cách nói lên thương hiệu online. Tiếp cận khách hàng tốt nhờ website tốt hơn.', 'Website đơn giản là sự tối ưu hóa đỉnh cao. Mang trải nghiệm tốt hơn, tiếp cận nhanh hơn.', 'mid.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chamngon`
--
ALTER TABLE `chamngon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `noidung`
--
ALTER TABLE `noidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tieude`
--
ALTER TABLE `tieude`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chamngon`
--
ALTER TABLE `chamngon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `noidung`
--
ALTER TABLE `noidung`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tieude`
--
ALTER TABLE `tieude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
