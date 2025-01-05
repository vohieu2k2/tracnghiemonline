-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 05, 2025 lúc 08:47 AM
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
(118, '6717d3da5bbfa', '6717d3da5c100'),
(119, '6719135ca963b', '6719135ca9f07'),
(120, '6719135caf562', '6719135cafdd9'),
(121, '6719135cb2817', '6719135cb30ef'),
(127, '6767e5d678833', '6767e5d6790fa'),
(128, '6767e5d67b393', '6767e5d67ba6b'),
(129, '6767e5d67d9d2', '6767e5d67dfe0'),
(130, '6767e5d681872', '6767e5d681cdb'),
(131, '6767e5d6843bd', '6767e5d684b57'),
(132, '676910560ba3d', '676910560cf67'),
(133, '67691062c3a33', '67691062c468d'),
(134, '67691062c6750', '67691062c6dbc'),
(135, '6769106cafa26', '6769106cb05af'),
(136, '6769107e10986', '6769107e115c2'),
(137, '67691084b3d68', '67691084b4900'),
(138, '6769108bd74e1', '6769108bd81a8'),
(139, '67691093ca4e8', '67691093cb00a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `userType` varchar(50) NOT NULL,
  `recipient` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `username`, `feedback`, `date`, `userType`, `recipient`) VALUES
('677a274717cc7', 'admin', 'dâssd', '2025-01-05 13:31:35', 'user', NULL),
('677a329bd48d2', 'toannn', 'ádsfff', '2025-01-05 14:19:55', 'admin', '<admin'),
('677a3307bd283', 'toannn', 'âdassa', '2025-01-05 14:21:43', 'admin', 'admin'),
('677a3307bfb1e', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307c52e5', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307c7870', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307c9f4d', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307cd480', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307cf906', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307d1e6f', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307d3b06', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307d5b05', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307d7896', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307d9636', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307db29f', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307dcf96', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307debdd', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307e0556', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307e20ef', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307e3c0f', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307e5811', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3307e75f8', '', '', '2025-01-05 14:21:43', 'admin', ''),
('677a3309002cd', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33090284f', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330904fb8', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330906d95', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330908bb5', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33090ad5c', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33090c8f4', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33090e6b6', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330910388', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330912294', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330913d6b', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330915675', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33091723d', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330918bcc', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33091a628', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33091bf74', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33091d83a', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a33091f450', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330920fca', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330922892', '', '', '2025-01-05 14:21:45', 'admin', ''),
('677a330d25efa', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d28041', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d2a1d6', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d2e265', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d30836', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d352e5', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d370f1', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d38b2f', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d3a775', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d3c098', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d3d817', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d3f3df', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d40bb0', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d42463', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d43e1a', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d4562b', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d47106', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d489fa', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d4a17f', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d4bd03', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d85003', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d8790c', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d89e4f', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d8c139', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d8e273', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d906d0', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d928c9', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d94715', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d964c3', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d985de', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d9a0ac', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d9b9f9', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d9d378', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330d9ec03', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330da0d52', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330da27bf', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330da41d3', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330da5aa9', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330da734c', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a330da8fcd', '', '', '2025-01-05 14:21:49', 'admin', ''),
('677a33702d375', 'toannn', 'fssa', '2025-01-05 14:23:28', 'admin', 'admin'),
('677a33703033a', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a3370321ec', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337034a43', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337036b67', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337038fc6', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33703b687', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33703d2ee', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33703ed75', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337040e64', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337042810', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337044880', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a3370463cb', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337048271', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337049dd1', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33704bb1e', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33704d5e5', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33704f0e8', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337050ec8', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a337052a48', '', '', '2025-01-05 14:23:28', 'admin', ''),
('677a33715ff2b', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337162151', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a3371643cd', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337166067', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337167be9', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a3371699b1', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33716c116', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33716df37', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33716fc0f', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a3371720e3', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337173de4', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337175ec7', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a3371779e8', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337179724', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33717b0c4', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33717cdf9', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33717e999', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a33718052e', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337181fa5', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a337183938', '', '', '2025-01-05 14:23:29', 'admin', ''),
('677a356468bcd', 'admin', 'ádsds', '2025-01-05 14:31:48', 'user', NULL),
('677a35698442f', 'admin', 'ádsds', '2025-01-05 14:31:53', 'user', NULL),
('677a35f5074ed', 'admin', 'asadasd', '2025-01-05 14:34:13', 'user', NULL),
('677a35f833882', 'admin', 'asadasd', '2025-01-05 14:34:16', 'user', NULL),
('677a3611995a2', 'admin', 'hello', '2025-01-05 14:34:41', 'user', NULL),
('677a364e25142', 'admin', 'asđsds', '2025-01-05 14:35:42', 'user', NULL),
('677a3664d1ba0', 'vohieu2002', 'ádadsa', '2025-01-05 14:36:04', 'user', NULL),
('677a3667c359a', 'vohieu2002', 'sấcdasas', '2025-01-05 14:36:07', 'user', NULL),
('677a367c52042', 'toannn', 'âssasa', '2025-01-05 14:36:28', 'admin', 'vohieu2002'),
('677a36c67f1ae', 'toannn', 'ádssads', '2025-01-05 14:37:42', 'admin', 'vohieu2002'),
('677a36e12f0d1', 'toannn', 'adsdasasd', '2025-01-05 14:38:09', 'admin', 'vohieu2002'),
('677a36e413799', 'toannn', 'assđ', '2025-01-05 14:38:12', 'admin', 'vohieu2002');

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
(8, '6717d3a7c09e9', '6717d3da5d1cc', 'abcd', 'abcd', 4),
(9, '6717d3a7c09e9', '6717d3da5d4f9', '1234567', '1234567', 5),
(10, '6717d3a7c09e9', '6717d3da5d8b7', 'ABCDEFfgh', 'abcdefđgff', 6),
(11, '6717d3a7c09e9', '6717d3da5dbcb', '1234567', '1234567', 7),
(12, '6719130f5158b', '6719135cb5ca2', 'abcdfefssffs', 'lớp b14d52 abcdfsff', 4),
(13, '6719130f5158b', '6719135cb6383', 'Phát hiện, ..., xử lý mã độc', 'phân tích', 5),
(14, '6719130f5158b', '6719135cb6a1e', 'Phát hiện, phân tích, ... mã độc', 'xử lý', 6),
(23, '6767e5b436187', '6767e5d686bc4', '', '', 6),
(24, '6767e5b436187', '6767e5d686fed', '', '', 7),
(25, '6767e5b436187', '6767e5d687354', '', '', 8),
(26, '6767e5b436187', '6767e5d68784b', '', '', 9),
(27, '6767e5b436187', '6767e5d687e2d', '', '', 10),
(28, '676910549435b', '676910560fc78', '', '', 2),
(29, '676910612c4f5', '67691062c8c0b', '', '', 3),
(30, '676910612c4f5', '67691062c90e6', '', '', 4),
(31, '6769108369cfb', '67691084b6fad', '', '', 2),
(32, '6769108adb0e7', '6769108bda883', '', '', 2),
(33, '6769109c7f3d2', '6769109d9f519', '', '', 1);

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
(62, 'b', '6717d3a7c09e9', 7.14, 7, 5, 2, '2024-11-17 12:54:51', 1731848065, 'finished', 'true', 0.00, 7.14),
(64, 'a', '676910549435b', 5.00, 1, 1, 0, '2024-12-23 07:28:30', 1734938900, 'finished', 'true', 0.00, 5.00),
(65, 'a', '676910612c4f5', 0.00, 0, 0, 0, '2024-12-23 07:28:41', 1734938917, 'finished', 'true', 0.00, 0.00),
(66, 'a', '6769106ac0b72', 0.00, 0, 0, 0, '2024-12-23 07:28:49', 1734938925, 'finished', 'true', 0.00, 0.00),
(67, 'a', '6769107cc1e34', 0.00, 0, 0, 0, '2024-12-23 07:33:41', 1734938932, 'finished', 'true', 1.00, 1.00),
(68, 'a', '6769108369cfb', 0.00, 0, 0, 0, '2024-12-23 07:29:04', 1734938941, 'finished', 'true', 0.00, 0.00),
(69, 'a', '6769108adb0e7', 0.00, 0, 0, 0, '2024-12-23 07:29:09', 1734938946, 'finished', 'true', 0.00, 0.00),
(70, 'a', '67691092a76eb', 0.00, 0, 0, 0, '2024-12-23 07:29:14', 1734938951, 'finished', 'true', 0.00, 0.00),
(71, 'a', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:34:14', 1734938955, 'finished', 'true', 1.00, 1.00),
(72, 'a', '6767e5b436187', 0.00, 0, 0, 0, '2024-12-23 07:29:29', 1734938967, 'finished', 'true', 0.00, 0.00),
(73, 'a', '6717d3a7c09e9', 0.00, 0, 0, 0, '2024-12-23 07:29:38', 1734938974, 'finished', 'true', 0.00, 0.00),
(74, 'a', '670cc8a2d17f8', 0.00, 0, 0, 0, '2024-12-23 07:29:47', 1734938982, 'finished', 'true', 0.00, 0.00),
(75, 'a', '670e7468b24bd', 0.00, 0, 0, 0, '2024-12-23 07:33:40', 1734938990, 'finished', 'true', -0.50, -0.50),
(76, 'b', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:30:09', 1734939007, 'finished', 'true', 0.00, 0.00),
(77, 'adjas', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:30:42', 1734939040, 'finished', 'true', 0.00, 0.00),
(78, 'admin', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:30:59', 1734939056, 'finished', 'true', 0.00, 0.00),
(79, 'kadhu', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:31:17', 1734939074, 'finished', 'true', 0.00, 0.00),
(80, 'kiran', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:31:36', 1734939093, 'finished', 'true', 0.00, 0.00),
(81, 'mugunth', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:34:22', 1734939112, 'finished', 'true', 0.00, 0.00),
(82, 'pravin', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:32:10', 1734939127, 'finished', 'true', 0.00, 0.00),
(83, 'sdfddf', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:32:31', 1734939147, 'finished', 'true', 0.00, 0.00),
(84, 'sdffs', '6769109c7f3d2', 0.00, 0, 0, 0, '2024-12-23 07:32:47', 1734939164, 'finished', 'true', 0.00, 0.00),
(85, 'vohieu2002', '6769109c7f3d2', 10.00, 1, 1, 0, '2024-12-23 07:33:13', 1734939180, 'finished', 'true', 0.00, 10.00),
(86, 'vohieu2002', '6717d3a7c09e9', 5.71, 7, 4, 3, '2024-12-23 07:35:15', 1734939287, 'finished', 'true', 0.00, 5.71);

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
(481, '6719135cb2817', 'adsfdfd', '6719135cb30ef'),
(482, '6719135cb2817', 'bsdfđs', '6719135cb30f1'),
(483, '6719135cb2817', 'cdsfdfdf', '6719135cb30f2'),
(484, '6719135cb2817', 'dsdfđf', '6719135cb30f3'),
(505, '6767e5d678833', 'acd', '6767e5d6790f3'),
(506, '6767e5d678833', 'bds', '6767e5d6790f9'),
(507, '6767e5d678833', 'cs', '6767e5d6790fa'),
(508, '6767e5d678833', 'de', '6767e5d6790fb'),
(509, '6767e5d67b393', 'a', '6767e5d67ba65'),
(510, '6767e5d67b393', 'b', '6767e5d67ba6a'),
(511, '6767e5d67b393', 'c', '6767e5d67ba6b'),
(512, '6767e5d67b393', 'd', '6767e5d67ba6c'),
(513, '6767e5d67d9d2', 'a', '6767e5d67dfe0'),
(514, '6767e5d67d9d2', 'b', '6767e5d67dfe8'),
(515, '6767e5d67d9d2', 'c', '6767e5d67dfe9'),
(516, '6767e5d67d9d2', 'd', '6767e5d67dfea'),
(517, '6767e5d681872', '', '6767e5d681cdb'),
(518, '6767e5d681872', '', '6767e5d681ce2'),
(519, '6767e5d681872', '', '6767e5d681ce3'),
(520, '6767e5d681872', '', '6767e5d681ce4'),
(521, '6767e5d6843bd', '', '6767e5d684b57'),
(522, '6767e5d6843bd', '', '6767e5d684b5e'),
(523, '6767e5d6843bd', '', '6767e5d684b60'),
(524, '6767e5d6843bd', '', '6767e5d684b62'),
(525, '676910560ba3d', '', '676910560cf67'),
(526, '676910560ba3d', '', '676910560cf6d'),
(527, '676910560ba3d', '', '676910560cf6e'),
(528, '676910560ba3d', '', '676910560cf6f'),
(529, '67691062c3a33', '', '67691062c468d'),
(530, '67691062c3a33', '', '67691062c469a'),
(531, '67691062c3a33', '', '67691062c469b'),
(532, '67691062c3a33', '', '67691062c469c'),
(533, '67691062c6750', '', '67691062c6dbc'),
(534, '67691062c6750', '', '67691062c6dbf'),
(535, '67691062c6750', '', '67691062c6dc0'),
(536, '67691062c6750', '', '67691062c6dc1'),
(537, '6769106cafa26', '', '6769106cb05af'),
(538, '6769106cafa26', '', '6769106cb05b5'),
(539, '6769106cafa26', '', '6769106cb05b6'),
(540, '6769106cafa26', '', '6769106cb05b7'),
(541, '6769107e10986', '', '6769107e115c2'),
(542, '6769107e10986', '', '6769107e115c7'),
(543, '6769107e10986', '', '6769107e115c8'),
(544, '6769107e10986', '', '6769107e115c9'),
(545, '67691084b3d68', '', '67691084b4900'),
(546, '67691084b3d68', '', '67691084b4905'),
(547, '67691084b3d68', '', '67691084b4906'),
(548, '67691084b3d68', '', '67691084b4907'),
(549, '6769108bd74e1', '', '6769108bd81a8'),
(550, '6769108bd74e1', '', '6769108bd81b0'),
(551, '6769108bd74e1', '', '6769108bd81b1'),
(552, '6769108bd74e1', '', '6769108bd81b2'),
(553, '67691093ca4e8', '', '67691093cb00a'),
(554, '67691093ca4e8', '', '67691093cb00f'),
(555, '67691093ca4e8', '', '67691093cb010'),
(556, '67691093ca4e8', '', '67691093cb011');

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
(121, '6719130f5158b', '6719135cb2817', 'cdfnkfffdsd', 4, 3),
(127, '6767e5b436187', '6767e5d678833', 'abcd', 4, 1),
(128, '6767e5b436187', '6767e5d67b393', 'abc', 4, 2),
(129, '6767e5b436187', '6767e5d67d9d2', 'a', 4, 3),
(130, '6767e5b436187', '6767e5d681872', '', 4, 4),
(131, '6767e5b436187', '6767e5d6843bd', '', 4, 5),
(132, '676910549435b', '676910560ba3d', '', 4, 1),
(133, '676910612c4f5', '67691062c3a33', '', 4, 1),
(134, '676910612c4f5', '67691062c6750', '', 4, 2),
(135, '6769106ac0b72', '6769106cafa26', '', 4, 1),
(136, '6769107cc1e34', '6769107e10986', '', 4, 1),
(137, '6769108369cfb', '67691084b3d68', '', 4, 1),
(138, '6769108adb0e7', '6769108bd74e1', '', 4, 1),
(139, '67691092a76eb', '67691093ca4e8', '', 4, 1);

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
(17, '670cc8a2d17f8', 'Testdethi', 5, 5, 0, 10, '2024-12-23 07:48:49', 'enabled', '10/8/2023'),
(23, '670e7468b24bd', 'Testdethi', 5, 5, 0, 60, '2024-12-23 07:48:57', 'enabled', '15/10/2022'),
(28, '6717d3a7c09e9', '25/08/2024', 7, 3, 4, 10, '2024-11-13 08:10:30', 'enabled', '25/08/2024'),
(29, '6719130f5158b', '23/10/2024', 6, 3, 3, 10, '2024-12-22 10:22:45', 'enabled', '23/10/2024'),
(33, '6767e5b436187', 'A', 10, 5, 5, 10, '2024-12-23 07:26:36', 'enabled', '12/11/2024'),
(34, '676910549435b', '1', 2, 1, 1, 1, '2024-12-23 07:49:08', 'enabled', '20/12/2024'),
(35, '676910612c4f5', '2', 4, 2, 2, 2, '2024-12-23 07:49:14', 'enabled', '19/12/2024'),
(36, '6769106ac0b72', '3', 1, 1, 0, 4, '2024-12-23 07:49:22', 'enabled', '21/11/2024'),
(37, '6769107cc1e34', '4', 1, 1, 0, 4, '2024-12-23 07:49:30', 'enabled', '18/11/2024'),
(38, '6769108369cfb', '5', 2, 1, 1, 1, '2024-12-23 07:49:37', 'enabled', '20/9/2023'),
(39, '6769108adb0e7', '6', 2, 1, 1, 1, '2024-12-23 07:49:44', 'enabled', '7/10/2023'),
(40, '67691092a76eb', '7', 1, 1, 0, 1, '2024-12-23 07:49:49', 'enabled', '15/10/2023'),
(41, '6769109c7f3d2', '8', 1, 0, 1, 1, '2024-12-23 07:49:54', 'enabled', '12/10/2023');

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
(12, 'A', 'Nam', 'a', '1234567890', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'Abcdef', 'Nữ', 'adjas', '0123456789', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Test', 'Nữ', 'admin', '1234567890', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'B', 'Nam', 'b', '1234567890', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Kadhamburi', 'M', 'kadhu', '9887661361', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Kiran', 'M', 'kiran', '9876543212', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Mugunthan', 'M', 'mugunth', '9514444471', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Pravin', 'M', 'pravin', '8769891099', 'e10adc3949ba59abbe56e057f20f883e'),
(16, '25/08/2024', 'Nam', 'sdfddf', '0123456789', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'A', 'Nam', 'sdffs', '0123456789', 'e10adc3949ba59abbe56e057f20f883e'),
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
(187, '6717d3da5dbcb', '1234567', '1234567', '6717d3a7c09e9', 'b'),
(192, '676910560ba3d', '676910560cf67', '676910560cf67', '676910549435b', 'a'),
(193, '6769109d9f519', '', '', '6769109c7f3d2', 'vohieu2002'),
(194, '6717d3da57ab4', '6717d3da580fc', '6717d3da580fc', '6717d3a7c09e9', 'vohieu2002'),
(195, '6717d3da59f38', '6717d3da5a6a8', '6717d3da5a6ad', '6717d3a7c09e9', 'vohieu2002'),
(196, '6717d3da5bbfa', '6717d3da5c0ff', '6717d3da5c100', '6717d3a7c09e9', 'vohieu2002'),
(197, '6717d3da5d1cc', 'abcd', 'abcd', '6717d3a7c09e9', 'vohieu2002'),
(198, '6717d3da5d4f9', '1234567', '1234567', '6717d3a7c09e9', 'vohieu2002'),
(199, '6717d3da5d8b7', 'abcdeffdh', 'abcdefđgff', '6717d3a7c09e9', 'vohieu2002'),
(200, '6717d3da5dbcb', '1234567', '1234567', '6717d3a7c09e9', 'vohieu2002');

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
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT cho bảng `fill_questions`
--
ALTER TABLE `fill_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT cho bảng `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
