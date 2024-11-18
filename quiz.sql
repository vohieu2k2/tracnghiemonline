-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2024 lúc 08:16 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quiz`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'toannn', '1111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answer`
--

CREATE TABLE `answer` (
  `id` int(100) NOT NULL,
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(84, '670cc8e48f30f', '670cc8e48fac8'),
(85, '670cc8e491660', '670cc8e4919b9'),
(86, '670cc8e492c5a', '670cc8e49302a'),
(87, '670cc8e494097', '670cc8e494377'),
(88, '670cc8e495105', '670cc8e495371'),
(94, '670e749bd7883', '670e749bdb45d'),
(95, '670e749be1a0e', '670e749be1dd3'),
(96, '670e749be32b9', '670e749be36e3'),
(97, '670e749be49a1', '670e749be4d09'),
(98, '670e749be5ee5', '670e749be628c'),
(116, '6717d3da57ab4', '6717d3da580fc'),
(117, '6717d3da59f38', '6717d3da5a6ad'),
(118, '6717d3da5bbfa', '6717d3da5c0ff'),
(119, '6719135ca963b', '6719135ca9f07'),
(120, '6719135caf562', '6719135cafdd9'),
(121, '6719135cb2817', '6719135cb30f2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fill_questions`
--

CREATE TABLE `fill_questions` (
  `id` int(11) NOT NULL,
  `eid` text DEFAULT NULL,
  `qid` text DEFAULT NULL,
  `qns` text DEFAULT NULL,
  `answer` varchar(255) NOT NULL,
  `sn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `fill_questions`
--

INSERT INTO `fill_questions` (`id`, `eid`, `qid`, `qns`, `answer`, `sn`) VALUES
(8, '6717d3a7c09e9', '6717d3da5d1cc', 'abc', 'abc', 4),
(9, '6717d3a7c09e9', '6717d3da5d4f9', '1234', '1234', 5),
(10, '6717d3a7c09e9', '6717d3da5d8b7', 'ABCDEF', 'abcdef', 6),
(11, '6717d3a7c09e9', '6717d3da5dbcb', '1234567', '1234567', 7),
(12, '6719130f5158b', '6719135cb5ca2', 'abc', 'lớp b14d52', 4),
(13, '6719130f5158b', '6719135cb6383', 'Phát hiện, ..., xử lý mã độc', 'phân tích', 5),
(14, '6719130f5158b', '6719135cb6a1e', 'Phát hiện, phân tích, ... mã độc', 'xử lý', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` decimal(4,2) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timestamp` bigint(50) NOT NULL,
  `status` varchar(40) NOT NULL,
  `score_updated` varchar(10) NOT NULL,
  `plusscore` decimal(4,2) DEFAULT NULL,
  `totalscore` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id`, `username`, `eid`, `score`, `level`, `correct`, `wrong`, `date`, `timestamp`, `status`, `score_updated`, `plusscore`, `totalscore`) VALUES
(61, 'a', '6719130f5158b', 5.00, 6, 3, 3, '2024-11-17 12:54:00', 1731848015, 'finished', 'true', 0.00, 5.00),
(62, 'b', '6717d3a7c09e9', 7.14, 7, 5, 2, '2024-11-17 12:54:51', 1731848065, 'finished', 'true', 0.00, 7.14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(333, '670cc8e48f30f', 'A', '670cc8e48fac8'),
(334, '670cc8e48f30f', 'B', '670cc8e48facc'),
(335, '670cc8e48f30f', 'c', '670cc8e48facd'),
(336, '670cc8e48f30f', 'd', '670cc8e48face'),
(337, '670cc8e491660', 'a', '670cc8e4919b7'),
(338, '670cc8e491660', 'b', '670cc8e4919b9'),
(339, '670cc8e491660', 'c', '670cc8e4919ba'),
(340, '670cc8e491660', 'd', '670cc8e4919bb'),
(341, '670cc8e492c5a', 'a', '670cc8e493025'),
(342, '670cc8e492c5a', 'b', '670cc8e493029'),
(343, '670cc8e492c5a', 'c', '670cc8e49302a'),
(344, '670cc8e492c5a', 'd', '670cc8e49302b'),
(345, '670cc8e494097', 'a', '670cc8e494372'),
(346, '670cc8e494097', 'b', '670cc8e494375'),
(347, '670cc8e494097', 'c', '670cc8e494376'),
(348, '670cc8e494097', 'd', '670cc8e494377'),
(349, '670cc8e495105', 'adc', '670cc8e49536d'),
(350, '670cc8e495105', 'adb', '670cc8e495370'),
(351, '670cc8e495105', 'abc', '670cc8e495371'),
(352, '670cc8e495105', 'afd', '670cc8e495372'),
(373, '670e749bd7883', 'A', '670e749bdb45d'),
(374, '670e749bd7883', 'B', '670e749bdb467'),
(375, '670e749bd7883', 'C', '670e749bdb468'),
(376, '670e749bd7883', 'D', '670e749bdb469'),
(377, '670e749be1a0e', 'a', '670e749be1dd0'),
(378, '670e749be1a0e', 'b', '670e749be1dd3'),
(379, '670e749be1a0e', 'c', '670e749be1dd4'),
(380, '670e749be1a0e', 'd', '670e749be1dd5'),
(381, '670e749be32b9', 'a', '670e749be36dd'),
(382, '670e749be32b9', 'b', '670e749be36e2'),
(383, '670e749be32b9', 'c', '670e749be36e3'),
(384, '670e749be32b9', 'd', '670e749be36e4'),
(385, '670e749be49a1', 'a', '670e749be4d04'),
(386, '670e749be49a1', 'b', '670e749be4d07'),
(387, '670e749be49a1', 'c', '670e749be4d08'),
(388, '670e749be49a1', 'd', '670e749be4d09'),
(389, '670e749be5ee5', 'abc', '670e749be628c'),
(390, '670e749be5ee5', 'abd', '670e749be628f'),
(391, '670e749be5ee5', 'aef', '670e749be6290'),
(392, '670e749be5ee5', 'ade', '670e749be6291'),
(461, '6717d3da57ab4', 'a', '6717d3da580fc'),
(462, '6717d3da57ab4', 'b', '6717d3da58102'),
(463, '6717d3da57ab4', 'c', '6717d3da58103'),
(464, '6717d3da57ab4', 'd', '6717d3da58104'),
(465, '6717d3da59f38', 'a', '6717d3da5a6a8'),
(466, '6717d3da59f38', 'b', '6717d3da5a6ad'),
(467, '6717d3da59f38', 'c', '6717d3da5a6ae'),
(468, '6717d3da59f38', 'd', '6717d3da5a6af'),
(469, '6717d3da5bbfa', 'a', '6717d3da5c0f8'),
(470, '6717d3da5bbfa', 'b', '6717d3da5c0fe'),
(471, '6717d3da5bbfa', 'c', '6717d3da5c0ff'),
(472, '6717d3da5bbfa', 'd', '6717d3da5c100'),
(473, '6719135ca963b', 'a', '6719135ca9f07'),
(474, '6719135ca963b', 'b', '6719135ca9f0c'),
(475, '6719135ca963b', 'c', '6719135ca9f0d'),
(476, '6719135ca963b', 'd', '6719135ca9f0e'),
(477, '6719135caf562', 'a', '6719135cafdd6'),
(478, '6719135caf562', 'b', '6719135cafdd9'),
(479, '6719135caf562', 'c', '6719135cafdda'),
(480, '6719135caf562', 'd', '6719135cafddb'),
(481, '6719135cb2817', 'a', '6719135cb30ef'),
(482, '6719135cb2817', 'b', '6719135cb30f1'),
(483, '6719135cb2817', 'c', '6719135cb30f2'),
(484, '6719135cb2817', 'd', '6719135cb30f3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(84, '670cc8a2d17f8', '670cc8e48f30f', 'A', 4, 1),
(85, '670cc8a2d17f8', '670cc8e491660', 'B', 4, 2),
(86, '670cc8a2d17f8', '670cc8e492c5a', 'C', 4, 3),
(87, '670cc8a2d17f8', '670cc8e494097', 'd', 4, 4),
(88, '670cc8a2d17f8', '670cc8e495105', 'abc', 4, 5),
(94, '670e7468b24bd', '670e749bd7883', 'A', 4, 1),
(95, '670e7468b24bd', '670e749be1a0e', 'B', 4, 2),
(96, '670e7468b24bd', '670e749be32b9', 'c', 4, 3),
(97, '670e7468b24bd', '670e749be49a1', 'd', 4, 4),
(98, '670e7468b24bd', '670e749be5ee5', 'abc', 4, 5),
(116, '6717d3a7c09e9', '6717d3da57ab4', 'A', 4, 1),
(117, '6717d3a7c09e9', '6717d3da59f38', 'b', 4, 2),
(118, '6717d3a7c09e9', '6717d3da5bbfa', 'c', 4, 3),
(119, '6719130f5158b', '6719135ca963b', 'a', 4, 1),
(120, '6719130f5158b', '6719135caf562', 'b', 4, 2),
(121, '6719130f5158b', '6719135cb2817', 'c', 4, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `eid` text DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `choicequestion` int(11) DEFAULT NULL,
  `fillquestion` int(11) DEFAULT NULL,
  `time` bigint(20) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) DEFAULT NULL,
  `examdate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `total`, `choicequestion`, `fillquestion`, `time`, `date`, `status`, `examdate`) VALUES
(17, '670cc8a2d17f8', 'Testdethi', 5, 5, 0, 10, '2024-10-22 14:03:55', 'enabled', NULL),
(23, '670e7468b24bd', 'Testdethi', 5, 5, 0, 60, '2024-10-22 13:19:15', 'enabled', NULL),
(28, '6717d3a7c09e9', '25/08/2024', 7, 3, 4, 10, '2024-11-13 08:10:30', 'enabled', '25/08/2024'),
(29, '6719130f5158b', '23/10/2024', 6, 3, 3, 10, '2024-11-13 08:10:35', 'enabled', '23/10/2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `upload`
--

CREATE TABLE `upload` (
  `id` text NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `size` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `txt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `upload`
--

INSERT INTO `upload` (`id`, `name`, `date`, `size`, `txt`) VALUES
('5feb05bd363ae', 'Nguyen-Khac-Mung.xlsx', '2020-12-29 16:02:29', '289.70 KB', 'xlsx'),
('5feb05cbd94fb', 'Untitle.png', '2020-12-29 16:02:43', '4.53 KB', 'png'),
('5feb05d053b8e', 'NguyenKhacMung.docx', '2020-12-29 16:02:48', '131.23 KB', 'docx'),
('5feb387598141', 'yeu cau tuyen dung.docx', '2020-12-29 19:38:53', '100.27 KB', 'docx'),
('5ff0ac3b6c41e', 'BÁO-CÁO-STRUTS2 (2).docx', '2021-01-03 00:24:11', '1.15 MB', 'docx'),
('5ff0ac476e6b1', 'BÁO-CÁO-STRUTS2 (1).docx', '2021-01-03 00:24:23', '1.15 MB', 'docx'),
('5ff0ac4eb1c3f', 'TOPICS FOR.pptx', '2021-01-03 00:24:30', '1.76 MB', 'pptx'),
('5ff0ac57453c5', 'Test-requirement.docx', '2021-01-03 00:24:39', '18.50 KB', 'docx');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phno` char(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `username`, `phno`, `password`) VALUES
(12, 'A', 'Nam', 'a', '1234567890', '0cc175b9c0f1b6a831c399e269772661'),
(8, 'Test', 'Nữ', 'admin', '1234567890', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'B', 'Nam', 'b', '1234567890', '92eb5ffee6ae2fec3ad71c777531578f'),
(4, 'Kadhamburi', 'M', 'kadhu', '9887661361', 'b59c67bf196a4758191e42f76670ceba'),
(3, 'Kiran', 'M', 'kiran', '9876543212', 'b59c67bf196a4758191e42f76670ceba'),
(2, 'Mugunthan', 'M', 'mugunth', '9514444471', 'b59c67bf196a4758191e42f76670ceba'),
(5, 'Pravin', 'M', 'pravin', '8769891099', 'c86da2729ab8f79d8f582e9abc469eb0'),
(11, 'Võ Hiếu', 'Nam', 'vohieu2002', '1234567890', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_answer`
--

CREATE TABLE `user_answer` (
  `id` int(100) NOT NULL,
  `qid` varchar(50) NOT NULL,
  `ans` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correctans` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `eid` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `user_answer`
--

INSERT INTO `user_answer` (`id`, `qid`, `ans`, `correctans`, `eid`, `username`) VALUES
(175, '6719135ca963b', '6719135ca9f07', '6719135ca9f07', '6719130f5158b', 'a'),
(176, '6719135caf562', '6719135cafdda', '6719135cafdd9', '6719130f5158b', 'a'),
(177, '6719135cb2817', '6719135cb30f1', '6719135cb30f2', '6719130f5158b', 'a'),
(178, '6719135cb5ca2', 'abc', 'lớp b14d52', '6719130f5158b', 'a'),
(179, '6719135cb6383', 'phân tích', 'phân tích', '6719130f5158b', 'a'),
(180, '6719135cb6a1e', 'xử lý', 'xử lý', '6719130f5158b', 'a'),
(181, '6717d3da57ab4', '6717d3da580fc', '6717d3da580fc', '6717d3a7c09e9', 'b'),
(182, '6717d3da59f38', '6717d3da5a6ad', '6717d3da5a6ad', '6717d3a7c09e9', 'b'),
(183, '6717d3da5bbfa', '6717d3da5c0ff', '6717d3da5c0ff', '6717d3a7c09e9', 'b'),
(184, '6717d3da5d1cc', 'lớp b14d52', 'abc', '6717d3a7c09e9', 'b'),
(185, '6717d3da5d4f9', '1234', '1234', '6717d3a7c09e9', 'b'),
(186, '6717d3da5d8b7', 'ádsđfffd', 'abcdef', '6717d3a7c09e9', 'b'),
(187, '6717d3da5dbcb', '1234567', '1234567', '6717d3a7c09e9', 'b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `fill_questions`
--
ALTER TABLE `fill_questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `fill_questions`
--
ALTER TABLE `fill_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT cho bảng `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
