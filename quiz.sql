-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2024 lúc 11:41 AM
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
(4, '5b85857d00f34', '5b85857d0ab77'),
(5, '5b85857d333f0', '5b85857d391b2'),
(6, '5b85857d59559', '5b85857d69efd'),
(7, '5b85857d917d6', '5b85857d97980'),
(8, '5b85857db810f', '5b85857dbd701'),
(81, '670b56407eef3', '670b56407f44b'),
(82, '670b564080d9e', '670b56408113c'),
(83, '670b5640824b7', '670b56408297c'),
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
(99, '670e9f8c3af58', '670e9f8c3b42d'),
(100, '670e9f8c3d15b', '670e9f8c3d53c'),
(101, '670e9f8c3e50c', '670e9f8c3e7d5'),
(102, '670e9f8c3f581', '670e9f8c3f896'),
(103, '670e9f8c409b5', '670e9f8c40ca1'),
(116, '6717d3da57ab4', '6717d3da580fc'),
(117, '6717d3da59f38', '6717d3da5a6ad'),
(118, '6717d3da5bbfa', '6717d3da5c0ff'),
(119, '6719135ca963b', '6719135ca9f07'),
(120, '6719135caf562', '6719135cafdd9'),
(121, '6719135cb2817', '6719135cb30f2'),
(122, '6721defb07138', '6721defb09bef'),
(123, '6721defb10054', '6721defb106c5'),
(124, '6721defb12279', '6721defb126c5'),
(125, '6721defb1421b', '6721defb1460c'),
(126, '6721defb15a62', '6721defb15e70');

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

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `username`, `subject`, `feedback`, `date`, `time`) VALUES
('5b86784504039', 'pravin', 'fyvgh@vgyvy.in', 'ytiu', 'yty', '2018-08-29', '03:41:09pm');

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
(14, '6719130f5158b', '6719135cb6a1e', 'Phát hiện, phân tích, ... mã độc', 'xử lý', 6),
(15, '6721de906c19e', '6721defb17655', 'Phát hiện, ..., xử lý mã độc', 'phân tích', 6),
(16, '6721de906c19e', '6721defb183d9', '..., phân tích, xử lý mã độc', 'phát hiện', 7),
(17, '6721de906c19e', '6721defb187c6', 'Phát hiện, phân tích, ... mã độc', 'xử lý', 8),
(18, '6721de906c19e', '6721defb18bf4', 'abc', 'defdf', 9);

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
(1, 'pravin', '5b85847bbe794', 3.00, 5, 2, 3, '2024-10-13 02:58:57', 1535538968, 'finished', 'true', 3.00, 6.00),
(2, 'mugunth', '5b85847bbe794', 6.00, 5, 4, 1, '2024-10-17 07:01:13', 1535539122, 'finished', 'true', 3.00, 9.00),
(30, 'vohieu', '5b85847bbe794', 4.00, 3, 2, 0, '2024-10-15 16:58:10', 1728826273, 'finished', 'true', 3.00, 7.00),
(38, 'vohieu', '670b561a8137a', 10.00, 3, 3, 0, '2024-10-15 16:58:04', 1728887414, 'finished', 'true', -1.00, 9.00),
(45, 'vohieu', '670e7468b24bd', 4.00, 5, 2, 3, '2024-10-15 16:58:18', 1729010651, 'finished', 'true', 3.00, 7.00),
(46, 'vohieu2002', '5b85847bbe794', 6.00, 5, 3, 2, '2024-10-21 13:06:56', 1729011073, 'finished', 'true', 1.00, 7.00),
(47, 'vohieu', '670e9f53856a4', 4.00, 5, 2, 3, '2024-10-15 17:00:39', 1729011612, 'finished', 'true', 0.00, 4.00),
(48, 'vohieu2002', '670e9f53856a4', 6.00, 4, 3, 2, '2024-10-16 03:03:21', 1729047598, 'finished', 'true', 0.00, 6.00),
(49, 'vohieu2002', '670b561a8137a', 3.33, 3, 1, 2, '2024-10-21 13:12:50', 1729047960, 'finished', 'true', 0.00, 3.33),
(52, 'vohieu', '6717d3a7c09e9', 5.71, 7, 4, 3, '2024-10-22 16:34:10', 1729614824, 'finished', 'true', 0.00, 5.71),
(58, 'vohieu', '6719130f5158b', 6.67, 6, 4, 2, '2024-10-30 06:02:26', 1730268117, 'finished', 'true', 0.00, 6.67),
(59, 'vohieu2002', '6721de906c19e', 5.56, 9, 5, 4, '2024-10-30 08:08:03', 1730274418, 'finished', 'true', 0.00, 5.56),
(60, 'vohieu', '6721de906c19e', 0.00, 1, 0, 1, '2024-10-30 08:10:00', 1730275735, 'finished', 'true', 0.00, 0.00);

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
(13, '5b85857d00f34', ' Hello World!Hello World!', '5b85857d0ab77'),
(14, '5b85857d00f34', ' Hello World! * 2', '5b85857d0af5f'),
(15, '5b85857d00f34', 'Hello World!', '5b85857d0b347'),
(16, '5b85857d00f34', 'None of the above.', '5b85857d0b72f'),
(17, '5b85857d333f0', '( \'abcd\', 786 , 2.23, \'john\', 70.2 )', '5b85857d389e2'),
(18, '5b85857d333f0', 'abcd', '5b85857d38dca'),
(19, '5b85857d333f0', '(786, 2.23)', '5b85857d391b2'),
(20, '5b85857d333f0', 'None of the above.', '5b85857d3959a'),
(21, '5b85857d59559', 'int(x [,base])', '5b85857d69b15'),
(22, '5b85857d59559', 'long(x [,base] )', '5b85857d69efd'),
(23, '5b85857d59559', 'float(x)', '5b85857d6a2e5'),
(24, '5b85857d59559', 'str(x)', '5b85857d6a6cd'),
(25, '5b85857d917d6', 'unichr(x)', '5b85857d97980'),
(26, '5b85857d917d6', 'ord(x)', '5b85857d97d68'),
(27, '5b85857d917d6', 'hex(x)', '5b85857d98150'),
(28, '5b85857d917d6', 'oct(x)', '5b85857d98538'),
(29, '5b85857db810f', 'choice(seq)', '5b85857dbd701'),
(30, '5b85857db810f', 'randrange ([start,] stop [,step])', '5b85857dbdae9'),
(31, '5b85857db810f', 'random()', '5b85857dbded1'),
(32, '5b85857db810f', 'seed([x])', '5b85857dbe2b9'),
(321, '670b56407eef3', 'a', '670b56407f44b'),
(322, '670b56407eef3', 'b', '670b56407f44f'),
(323, '670b56407eef3', 'c', '670b56407f450'),
(324, '670b56407eef3', 'd', '670b56407f451'),
(325, '670b564080d9e', 'abc', '670b56408113c'),
(326, '670b564080d9e', 'adb', '670b56408113e'),
(327, '670b564080d9e', 'sds', '670b56408113f'),
(328, '670b564080d9e', 'ads', '670b564081140'),
(329, '670b5640824b7', 'dscf', '670b564082977'),
(330, '670b5640824b7', 'abcd', '670b56408297c'),
(331, '670b5640824b7', 'ádas', '670b56408297d'),
(332, '670b5640824b7', 'sáddasa', '670b56408297e'),
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
(393, '670e9f8c3af58', 'a', '670e9f8c3b42d'),
(394, '670e9f8c3af58', 'b', '670e9f8c3b431'),
(395, '670e9f8c3af58', 'c', '670e9f8c3b432'),
(396, '670e9f8c3af58', 'd', '670e9f8c3b433'),
(397, '670e9f8c3d15b', 'a', '670e9f8c3d53a'),
(398, '670e9f8c3d15b', 'b', '670e9f8c3d53c'),
(399, '670e9f8c3d15b', 'c', '670e9f8c3d53d'),
(400, '670e9f8c3d15b', 'd', '670e9f8c3d53e'),
(401, '670e9f8c3e50c', 'abd', '670e9f8c3e7d2'),
(402, '670e9f8c3e50c', 'ac', '670e9f8c3e7d4'),
(403, '670e9f8c3e50c', 'ab', '670e9f8c3e7d5'),
(404, '670e9f8c3e50c', 'ae', '670e9f8c3e7d6'),
(405, '670e9f8c3f581', 'agd', '670e9f8c3f894'),
(406, '670e9f8c3f581', 'abc', '670e9f8c3f896'),
(407, '670e9f8c3f581', 'asd', '670e9f8c3f897'),
(408, '670e9f8c3f581', 'ádsd', '670e9f8c3f898'),
(409, '670e9f8c409b5', 'adbc', '670e9f8c40c9a'),
(410, '670e9f8c409b5', 'adjf', '670e9f8c40ca0'),
(411, '670e9f8c409b5', 'abcd', '670e9f8c40ca1'),
(412, '670e9f8c409b5', 'ákfj', '670e9f8c40ca2'),
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
(484, '6719135cb2817', 'd', '6719135cb30f3'),
(485, '6721defb07138', 'a', '6721defb09bef'),
(486, '6721defb07138', 'b', '6721defb09bf2'),
(487, '6721defb07138', 'c', '6721defb09bf3'),
(488, '6721defb07138', 'd', '6721defb09bf4'),
(489, '6721defb10054', 'b', '6721defb106c5'),
(490, '6721defb10054', 'c', '6721defb106c6'),
(491, '6721defb10054', 'd', '6721defb106c7'),
(492, '6721defb10054', 'a', '6721defb106c8'),
(493, '6721defb12279', 'a', '6721defb126c3'),
(494, '6721defb12279', 'b', '6721defb126c4'),
(495, '6721defb12279', 'c', '6721defb126c5'),
(496, '6721defb12279', 'd', '6721defb126c6'),
(497, '6721defb1421b', 'a', '6721defb14609'),
(498, '6721defb1421b', 'v', '6721defb1460a'),
(499, '6721defb1421b', 'c', '6721defb1460b'),
(500, '6721defb1421b', 'd', '6721defb1460c'),
(501, '6721defb15a62', 'asc', '6721defb15e70'),
(502, '6721defb15a62', 'asd', '6721defb15e71'),
(503, '6721defb15a62', 'asf', '6721defb15e72'),
(504, '6721defb15a62', 'asdf', '6721defb15e73');

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
(4, '5b85847bbe794', '5b85857d00f34', 'What is the output of print str * 2 if str = \'Hello World!\'?', 4, 1),
(5, '5b85847bbe794', '5b85857d333f0', 'What is the output of print tuple[1:3] if tuple = ( \'abcd\', 786 , 2.23, \'john\', 70.2 )?', 4, 2),
(6, '5b85847bbe794', '5b85857d59559', 'Which of the following function convert a string to a long in python?', 4, 3),
(7, '5b85847bbe794', '5b85857d917d6', 'Which of the following function convert an integer to an unicode character in python?', 4, 4),
(8, '5b85847bbe794', '5b85857db810f', 'Which of the following function returns a random item from a list, tuple, or string?', 4, 5),
(81, '670b561a8137a', '670b56407eef3', 'a', 4, 1),
(82, '670b561a8137a', '670b564080d9e', 'abc', 4, 2),
(83, '670b561a8137a', '670b5640824b7', 'abcd', 4, 3),
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
(99, '670e9f53856a4', '670e9f8c3af58', 'A', 4, 1),
(100, '670e9f53856a4', '670e9f8c3d15b', 'B', 4, 2),
(101, '670e9f53856a4', '670e9f8c3e50c', 'ab', 4, 3),
(102, '670e9f53856a4', '670e9f8c3f581', 'abc', 4, 4),
(103, '670e9f53856a4', '670e9f8c409b5', 'abcd', 4, 5),
(116, '6717d3a7c09e9', '6717d3da57ab4', 'A', 4, 1),
(117, '6717d3a7c09e9', '6717d3da59f38', 'b', 4, 2),
(118, '6717d3a7c09e9', '6717d3da5bbfa', 'c', 4, 3),
(119, '6719130f5158b', '6719135ca963b', 'a', 4, 1),
(120, '6719130f5158b', '6719135caf562', 'b', 4, 2),
(121, '6719130f5158b', '6719135cb2817', 'c', 4, 3),
(122, '6721de906c19e', '6721defb07138', 'a', 4, 1),
(123, '6721de906c19e', '6721defb10054', 'b', 4, 2),
(124, '6721de906c19e', '6721defb12279', 'c', 4, 3),
(125, '6721de906c19e', '6721defb1421b', 'd', 4, 4),
(126, '6721de906c19e', '6721defb15a62', 'asc', 4, 5);

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
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `title`, `total`, `choicequestion`, `fillquestion`, `time`, `date`, `status`) VALUES
(2, '5b85847bbe794', 'Python', 5, 5, 0, 2, '2024-10-22 13:18:56', 'enabled'),
(16, '670b561a8137a', 'Abcdef', 3, 3, 0, 5, '2024-10-22 13:19:04', 'enabled'),
(17, '670cc8a2d17f8', 'Testdethi', 5, 5, 0, 10, '2024-10-22 14:03:55', 'enabled'),
(23, '670e7468b24bd', 'Testdethi', 5, 5, 0, 60, '2024-10-22 13:19:15', 'enabled'),
(24, '670e9f53856a4', 'B1', 5, 5, 0, 30, '2024-10-22 13:19:20', 'enabled'),
(28, '6717d3a7c09e9', '25/08/2024', 7, 3, 4, 10, '2024-10-22 16:33:34', 'enabled'),
(29, '6719130f5158b', '23/10/2024', 6, 3, 3, 10, '2024-10-23 15:16:51', 'enabled'),
(30, '6721de906c19e', '29/10/2024', 9, 5, 4, 15, '2024-10-30 07:45:37', 'enabled');

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
(8, 'Test', 'Nữ', 'admin', '1234567890', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Kadhamburi', 'M', 'kadhu', '9887661361', 'b59c67bf196a4758191e42f76670ceba'),
(3, 'Kiran', 'M', 'kiran', '9876543212', 'b59c67bf196a4758191e42f76670ceba'),
(2, 'Mugunthan', 'M', 'mugunth', '9514444471', 'b59c67bf196a4758191e42f76670ceba'),
(5, 'Pravin', 'M', 'pravin', '8769891099', 'c86da2729ab8f79d8f582e9abc469eb0'),
(7, 'Võ Trung Hiếu', 'Nam', 'vohieu', '0899324758', 'e10adc3949ba59abbe56e057f20f883e'),
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
(4, '5b85857d00f34', '5b85857d0af5f', '5b85857d0ab77', '5b85847bbe794', 'pravin'),
(5, '5b85857d333f0', '5b85857d389e2', '5b85857d391b2', '5b85847bbe794', 'pravin'),
(6, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'pravin'),
(7, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'pravin'),
(8, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'pravin'),
(9, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'mugunth'),
(10, '5b85857d333f0', '5b85857d391b2', '5b85857d391b2', '5b85847bbe794', 'mugunth'),
(11, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'mugunth'),
(12, '5b85857d917d6', '5b85857d97980', '5b85857d97980', '5b85847bbe794', 'mugunth'),
(13, '5b85857db810f', '5b85857dbded1', '5b85857dbd701', '5b85847bbe794', 'mugunth'),
(60, '5b85857d00f34', '5b85857d0ab77', '5b85857d0ab77', '5b85847bbe794', 'vohieu'),
(61, '5b85857d333f0', '5b85857d38dca', '5b85857d391b2', '5b85847bbe794', 'vohieu'),
(62, '5b85857d59559', '5b85857d69efd', '5b85857d69efd', '5b85847bbe794', 'vohieu'),
(63, '5b85857d917d6', '5b85857d98150', '5b85857d97980', '5b85847bbe794', 'vohieu'),
(64, '5b85857db810f', '5b85857dbdae9', '5b85857dbd701', '5b85847bbe794', 'vohieu'),
(75, '670b56407eef3', '670b56407f44b', '670b56407f44b', '670b561a8137a', 'vohieu'),
(76, '670b564080d9e', '670b56408113c', '670b56408113c', '670b561a8137a', 'vohieu'),
(77, '670b5640824b7', '670b56408297c', '670b56408297c', '670b561a8137a', 'vohieu'),
(90, '670e749bd7883', '670e749bdb45d', '670e749bdb45d', '670e7468b24bd', 'vohieu'),
(91, '670e749be1a0e', '670e749be1dd0', '670e749be1dd3', '670e7468b24bd', 'vohieu'),
(92, '670e749be32b9', '670e749be36e3', '670e749be36e3', '670e7468b24bd', 'vohieu'),
(93, '670e749be49a1', '670e749be4d07', '670e749be4d09', '670e7468b24bd', 'vohieu'),
(94, '670e749be5ee5', '670e749be6290', '670e749be628c', '670e7468b24bd', 'vohieu'),
(100, '670e9f8c3af58', '670e9f8c3b42d', '670e9f8c3b42d', '670e9f53856a4', 'vohieu'),
(101, '670e9f8c3d15b', '670e9f8c3d53a', '670e9f8c3d53c', '670e9f53856a4', 'vohieu'),
(102, '670e9f8c3e50c', '670e9f8c3e7d2', '670e9f8c3e7d5', '670e9f53856a4', 'vohieu'),
(103, '670e9f8c3f581', '670e9f8c3f896', '670e9f8c3f896', '670e9f53856a4', 'vohieu'),
(104, '670e9f8c409b5', '670e9f8c40c9a', '670e9f8c40ca1', '670e9f53856a4', 'vohieu'),
(105, '670e9f8c3af58', '670e9f8c3b431', '670e9f8c3b42d', '670e9f53856a4', 'vohieu2002'),
(106, '670e9f8c3d15b', '670e9f8c3d53d', '670e9f8c3d53c', '670e9f53856a4', 'vohieu2002'),
(107, '670e9f8c3e50c', '670e9f8c3e7d5', '670e9f8c3e7d5', '670e9f53856a4', 'vohieu2002'),
(108, '670e9f8c3f581', '670e9f8c3f896', '670e9f8c3f896', '670e9f53856a4', 'vohieu2002'),
(109, '670e9f8c409b5', '670e9f8c40ca1', '670e9f8c40ca1', '670e9f53856a4', 'vohieu2002'),
(110, '670b56407eef3', '670b56407f44b', '670b56407f44b', '670b561a8137a', 'vohieu2002'),
(111, '670b564080d9e', '670b56408113e', '670b56408113c', '670b561a8137a', 'vohieu2002'),
(112, '670b5640824b7', '670b56408297e', '670b56408297c', '670b561a8137a', 'vohieu2002'),
(126, '6717d3da57ab4', '6717d3da580fc', '6717d3da580fc', '6717d3a7c09e9', 'vohieu'),
(127, '6717d3da59f38', '6717d3da5a6a8', '6717d3da5a6ad', '6717d3a7c09e9', 'vohieu'),
(128, '6717d3da5bbfa', '6717d3da5c0fe', '6717d3da5c0ff', '6717d3a7c09e9', 'vohieu'),
(129, '6717d3da5d1cc', 'abc', 'abc', '6717d3a7c09e9', 'vohieu'),
(130, '6717d3da5d4f9', '1234', '1234', '6717d3a7c09e9', 'vohieu'),
(131, '6717d3da5d8b7', 'abcdef', 'abcdef', '6717d3a7c09e9', 'vohieu'),
(132, '6717d3da5dbcb', '123', '1234567', '6717d3a7c09e9', 'vohieu'),
(159, '6719135ca963b', '6719135ca9f0c', '6719135ca9f07', '6719130f5158b', 'vohieu'),
(160, '6719135caf562', '6719135cafdd6', '6719135cafdd9', '6719130f5158b', 'vohieu'),
(161, '6719135cb2817', '6719135cb30f2', '6719135cb30f2', '6719130f5158b', 'vohieu'),
(162, '6719135cb5ca2', 'lớp b14d52', 'lớp b14d52', '6719130f5158b', 'vohieu'),
(163, '6719135cb6383', 'phân tích', 'phân tích', '6719130f5158b', 'vohieu'),
(164, '6719135cb6a1e', 'xử lý', 'xử lý', '6719130f5158b', 'vohieu'),
(165, '6721defb07138', '6721defb09bf2', '6721defb09bef', '6721de906c19e', 'vohieu2002'),
(166, '6721defb10054', '6721defb106c6', '6721defb106c5', '6721de906c19e', 'vohieu2002'),
(167, '6721defb12279', '6721defb126c5', '6721defb126c5', '6721de906c19e', 'vohieu2002'),
(168, '6721defb1421b', '6721defb1460a', '6721defb1460c', '6721de906c19e', 'vohieu2002'),
(169, '6721defb15a62', '6721defb15e70', '6721defb15e70', '6721de906c19e', 'vohieu2002'),
(170, '6721defb17655', 'phân tích', 'phân tích', '6721de906c19e', 'vohieu2002'),
(171, '6721defb183d9', 'phát hiện', 'phát hiện', '6721de906c19e', 'vohieu2002'),
(172, '6721defb187c6', 'xử lý', 'xử lý', '6721de906c19e', 'vohieu2002'),
(173, '6721defb18bf4', 'cbd', 'defdf', '6721de906c19e', 'vohieu2002'),
(174, '6721defb07138', '6721defb09bf2', '6721defb09bef', '6721de906c19e', 'vohieu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
