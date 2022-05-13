-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2022 lúc 11:38 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoctructuyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Admin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Permission` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birth_Admin` date NOT NULL,
  `Gender_Admin` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail_Admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Admin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img_Admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass_Admin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `ID_Admin`, `ID_Permission`, `Name_Admin`, `Birth_Admin`, `Gender_Admin`, `Address_Admin`, `Mail_Admin`, `Phone_Admin`, `Img_Admin`, `Pass_Admin`, `created_at`, `updated_at`) VALUES
(1, 'AD001', 'Q001', 'Nguyễn Văn A', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenvana@gmail.com', '0397454857', '', '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'AD002', 'Q001', 'Nguyễn Văn B', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenvanb@gmail.com', '0397454857', '', '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(3, 'AD003', 'Q001', 'Nguyễn Văn C', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenvanc@gmail.com', '0397454857', '', '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(4, 'AD004', 'Q001', 'Nguyễn Văn D', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenvand@gmail.com', '0397454857', '', '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(5, 'AD005', 'Q001', 'Nguyễn Văn E', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenvane@gmail.com', '0397454857', '', '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classs`
--

CREATE TABLE `classs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Class` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Class` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grade` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Student` int(10) UNSIGNED DEFAULT NULL,
  `School_Year` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classs`
--

INSERT INTO `classs` (`id`, `ID_Class`, `ID_Teacher`, `Name_Class`, `Grade`, `Total_Student`, `School_Year`, `created_at`, `updated_at`) VALUES
(3, 'A2023', 'GV008', '11A', '11', 30, '2020-2023', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(1, 'A2124', 'GV002', '10A', '10', 30, '2021-2024', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'B2124', 'GV007', '10B', '10', 30, '2021-2024', '2022-04-15 17:31:14', '2022-04-15 17:31:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `details_assignments`
--

CREATE TABLE `details_assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Test` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Question` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer_Student` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `details_assignments`
--

INSERT INTO `details_assignments` (`id`, `ID_Student`, `ID_Test`, `ID_Question`, `Answer_Student`, `created_at`, `updated_at`) VALUES
(1, 'A20230004', 'T00000001', 'Q00000004', 'Bổ trợ cho mắt làm tăng góc trông của các vật nhỏ.', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'A20230004', 'T00000001', 'Q00000005', 'Vật cần quan sát đặt trước kính lúp cho ảnh thật có số phóng đại lớn.', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'A20230005', 'T00000001', 'Q00000004', 'Bổ trợ cho mắt làm tăng góc trông của các vật nhỏ.', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(4, 'A20230005', 'T00000001', 'Q00000005', 'Vật cần quan sát đặt trước kính lúp cho ảnh thật có số phóng đại lớn.', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(5, 'A20230005', 'T00000006', 'Q00000008', 'Hàm số đồng biến trên các khoảng (−∞;−3) và (1; +∞).', '2022-05-07 21:24:23', '2022-05-07 21:24:23'),
(6, 'A20230005', 'T00000006', 'Q00000009', 'Giá trị lớn nhất của hàm số bằng 5.', '2022-05-07 21:24:23', '2022-05-07 21:24:23'),
(7, 'A20230005', 'T00000006', 'Q00000010', 'Đồ thị hàm số có hai tiệm cận ngang.', '2022-05-07 21:30:07', '2022-05-07 21:30:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expense`
--

CREATE TABLE `expense` (
  `id` int(10) NOT NULL,
  `ID_Expense` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Staff` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_Expense` date DEFAULT NULL,
  `Total_Money` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `expense`
--

INSERT INTO `expense` (`id`, `ID_Expense`, `ID_Staff`, `Date_Expense`, `Total_Money`) VALUES
(1, 'KC0000001', 'NV005', '2022-05-05', 5000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expense_ct`
--

CREATE TABLE `expense_ct` (
  `id` int(10) NOT NULL,
  `ID_Expense_CT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Expense` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeOfExpense` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Into_Money` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `expense_ct`
--

INSERT INTO `expense_ct` (`id`, `ID_Expense_CT`, `ID_Expense`, `TypeOfExpense`, `Into_Money`) VALUES
(1, 'KCCT000001', 'KC0000001', 'Tiền nước uống', 2000000),
(2, 'KCCT00002', 'KC0000001', 'Tiền thuốc y tế', 3000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Admin` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Feedback_Content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Feedback_Image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reply_Status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reply_Content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reply_Image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `ID_Admin`, `ID_Student`, `Title`, `Feedback_Content`, `Feedback_Image`, `Reply_Status`, `Reply_Content`, `Reply_Image`, `created_at`, `updated_at`) VALUES
(1, 'AD001', 'A20230005', 'Chất lượng phần mềm', 'Phần mềm rất tốt, em rất hài lòng ạ!', '', 'Đã hồi đáp', 'Chân thành cảm ơn em. Mong em sẽ có thật nhiều trải nghiệm tốt và có kết quả học tập thật tốt!', '', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'AD001', 'A20230004', 'Chất lượng phần mềm', 'Phần mềm rất tốt, em rất hài lòng ạ!', '', 'Đã hồi đáp', 'Chân thành cảm ơn em. Mong em sẽ có thật nhiều trải nghiệm tốt và có kết quả học tập thật tốt!', '', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(3, 'AD002', 'A20230004', 'Chất lượng phần mềm', 'Phần mềm rất tốt, em rất hài lòng ạ!', '', 'Chưa hồi đáp', '', '', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(4, 'AD002', 'A20230005', 'Chất lượng phần mềm', 'Phần mềm rất tốt, em rất hài lòng ạ!', '', 'Chưa hồi đáp', '', '', '2022-04-15 17:31:14', '2022-04-15 17:31:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parent_student`
--

CREATE TABLE `parent_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Parent` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Dad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birth_Dad` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nationality_Dad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ethnic_Dad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Religion_Dad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job_Dad` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_Dad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Mom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birth_Mom` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nationality_Mom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ethnic_Mom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Religion_Mom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job_Mom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_Mom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `parent_student`
--

INSERT INTO `parent_student` (`id`, `ID_Parent`, `ID_Student`, `Name_Dad`, `Birth_Dad`, `Nationality_Dad`, `Ethnic_Dad`, `Religion_Dad`, `Address_Dad`, `Job_Dad`, `Phone_Dad`, `Name_Mom`, `Birth_Mom`, `Nationality_Mom`, `Ethnic_Mom`, `Religion_Mom`, `Address_Mom`, `Job_Mom`, `Phone_Mom`, `created_at`, `updated_at`) VALUES
(1, 'PR0001', 'A20230004', 'Lê Văn A', '1960', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Nông dân', '0397454857', 'Trần Thị A', '1963', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Nông dân', '0397454857', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'PR0002', 'A20230005', 'Lê Văn B', '1960', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Công nhân', '0397454857', 'Trần Thị B', '1963', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Công nhân', '0397454857', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'PR0003', 'A21240001', 'Lê Văn C', '1970', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Công nhân', '0397454857', 'Trần Thị C', '1975', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Công nhân', '0397454857', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(4, 'PR0004', 'A21240002', 'Lê Văn D', '1970', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Doanh nhân', '0397454857', 'Trần Thị D', '1973', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Doanh nhân', '0397454857', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(5, 'PR0005', 'B21240003', 'Lê Văn E', '1970', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Công nhân', '0397454857', 'Trần Thị E', '1973', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'Nông dân', '0397454857', '2022-04-11 08:36:11', '2022-04-11 08:36:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Permission` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Details_Permission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `ID_Permission`, `Name_Permission`, `Details_Permission`, `created_at`, `updated_at`) VALUES
(1, 'Q001', 'Admin quản trị hệ thống', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'Q002', 'Giáo viên bộ môn', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(3, 'Q003', 'Giáo viên chủ nhiệm', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(4, 'Q004', 'Giáo viên trưởng tổ', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(5, 'Q005', 'Học sinh', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(6, 'Q006', 'Nhân viên', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `professional_groups`
--

CREATE TABLE `professional_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Professional` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Professional` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Details_Professional` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `professional_groups`
--

INSERT INTO `professional_groups` (`id`, `ID_Professional`, `Name_Professional`, `Details_Professional`, `created_at`, `updated_at`) VALUES
(1, 'CM001', 'Tổ Toán- Tin học', 'Gồm 2 nhóm chuyên môn là Toán và Tin học', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'CM002', 'Tổ Tự nhiên', 'Gồm 3 nhóm chuyên môn là Vật lý - CN, Hóa học, Sinh học - CN', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(3, 'CM003', 'Tổ Văn - Ngoại ngữ', 'Gồm 2 nhóm chuyên môn là Ngữ văn và Tiếng Anh', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(4, 'CM004', 'Tổ Xã hội', 'Gồm 4 nhóm chuyên môn là Lịch sử, Địa lý, GDCD, Thể dục - QP', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(5, 'CM005', 'Tổ Văn phòng', 'Văn thư, kế toán, phụ trách đoàn – đội, phụ trách thiết bị, phụ trách thư viện, phụ trách an ninh', '2022-04-15 17:31:14', '2022-04-15 17:31:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Question` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Subjects` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grade` int(10) UNSIGNED NOT NULL,
  `Unit` int(10) UNSIGNED NOT NULL,
  `Name_Unit` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img_Content` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Question_Content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer_A` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer_B` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer_C` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Answer_D` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correct_Answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Question_Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `ID_Question`, `ID_Subjects`, `Grade`, `Unit`, `Name_Unit`, `Img_Content`, `Question_Content`, `Answer_A`, `Answer_B`, `Answer_C`, `Answer_D`, `Correct_Answer`, `Question_Status`, `ID_Teacher`, `created_at`, `updated_at`) VALUES
(1, 'Q00000001', 'MH009', 12, 4, 'Các nước Tây Âu', '', 'Để nhanh chóng khôi phục nền kinh tế đất nước, các nước Tây Âu phải làm gì?', 'Tiến hành cải cách nền kinh tế.', 'Nhận viện trợ từ Mĩ.', 'Thu hẹp các quyền tự do dân chủ.', 'Trở lại xâm lược thuộc địa.', 'Nhận viện trợ từ Mĩ.', 'Đã duyệt', 'GV001', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'Q00000002', 'MH009', 12, 4, 'Các nước Tây Âu', '', 'Các nước Tây Âu tham gia khối quân sự Bắc Đại Tây Dương (NATO) nhằm mục đích gì?', 'Chống lại phong trào giải phóng dân tộc trên thế giới.', 'Chống lại Liên Xô và các nước xã hội chủ nghĩa Đông Âu.', 'Chống Liên Xô, Trung Quốc, Việt Nam.', 'Chống lại các nước xã hội chủ nghĩa và phong trào giải phóng dân tộc trên thế giới.', 'Chống lại Liên Xô và các nước xã hội chủ nghĩa Đông Âu.', 'Đã duyệt', 'GV001', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'Q00000003', 'MH009', 12, 4, 'Các nước Tây Âu', '', 'Theo quyết định của Hội nghị Ianta vùng Tây Đức và Tây Âu thuộc phạm vi ảnh hưởng của nước nào?', 'Anh, Mĩ.', 'Liên Xô.', 'Anh.', 'Mĩ.', 'Anh, Mĩ.', 'Đã duyệt', 'GV001', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(4, 'Q00000004', 'MH003', 11, 32, 'Kính lúp', '', 'Kính lúp là dụng cụ quang dùng để?', 'Bổ trợ cho mắt làm tăng góc trông của các vật nhỏ.', 'Tạo ra một ảnh thật, lớn hơn vật và thu trên màn để quan sát vật rõ hơn.', 'Bổ trợ cho mắt cận thị quan sát được những vật ở rất xa.', 'Tạo ra một ảnh thật, lớn hơn vật và trong giới hạn nhìn rõ của mắt.', 'Bổ trợ cho mắt làm tăng góc trông của các vật nhỏ.', 'Đã duyệt', 'GV005', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(5, 'Q00000005', 'MH003', 11, 32, 'Kính lúp', '', 'Khi nói về kính lúp, phát biểu nào sau đây là sai?', 'Kính lúp là dụng cụ quang bổ trợ cho mắt làm tăng góc trông quan sát các vật nhỏ.', 'Vật cần quan sát đặt trước kính lúp cho ảnh ảo có số phóng đại lớn.', 'Kính lúp đơn giản là một thấu kính hội tụ có tiêu cự ngắn.', 'Vật cần quan sát đặt trước kính lúp cho ảnh thật có số phóng đại lớn.', 'Vật cần quan sát đặt trước kính lúp cho ảnh thật có số phóng đại lớn.', 'Đã duyệt', 'GV005', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(6, 'Q00000006', 'MH009', 12, 4, 'Các nước Tây Âu', '', 'Các nước Tây Âu đã có nhiều hoạt động nhằm tăng cường quá trình liên kết ở châu Âu vào thời gian nào?', 'Trước Chiến tranh thế giới thứ hai.', 'Sau Chiến tranh thế giới thứ hai.', 'Trong Chiến tranh thế giới thứ hai.', 'Sắp kết thúc Chiến tranh thế giới thứ hai.', 'Trong Chiến tranh thế giới thứ hai.', 'Đã duyệt', 'GV001', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(7, 'Q00000007', 'MH009', 12, 4, 'Các nước Tây Âu', '', 'Sau Chiến tranh thế giới thứ hai, các nước Tây Âu đã có nhiều hoạt động nhằm?', 'Xây dựng \"Kế hoạch Mácsan\".', 'Thành lập Cộng đồng Năng lượng châu Âu.', 'Tăng cường quá trình liên kết ở châu Âu.', 'Thành lập Tổ chức Hiệp ước Bắc Đại Tây Dương.', 'Thành lập Tổ chức Hiệp ước Bắc Đại Tây Dương.', 'Đã duyệt', 'GV010', '2022-04-30 08:51:28', '2022-04-30 08:51:28'),
(8, 'Q00000008', 'MH001', 12, 2, 'Bảng biến thiên', '573.png', 'Cho hàm số y=f(x) có bảng biến thiên như sau. Mệnh đề nào sau đây là đúng?', 'Hàm số có giá trị nhỏ nhất là −4.', 'Hàm số đồng biến trên các khoảng (−∞;−3) và (1; +∞).', 'Hàm số có một điểm cực đại và hai điểm cực tiểu.', 'Giá trị cực đại của hàm số là 5.', 'Hàm số đồng biến trên các khoảng (−∞;−3) và (1; +∞).', 'Đã duyệt', 'GV003', '2022-05-07 20:44:09', '2022-05-07 20:44:09'),
(9, 'Q00000009', 'MH001', 12, 2, 'Bảng biến thiên', '564.png', 'Cho hàm số y=f(x) có bảng biến thiên như hình vẽ bên dưới. Trong các khẳng định sau, khẳng định nào sau đây là sai?', 'Hàm số có 3 điểm cực trị.', 'Giá trị nhỏ nhất của hàm số bằng 4.', 'Hàm số đồng biến trong các khoảng(−1; 0) và (1; +∞).', 'Giá trị lớn nhất của hàm số bằng 5.', 'Giá trị lớn nhất của hàm số bằng 5.', 'Đã duyệt', 'GV003', '2022-05-07 20:44:09', '2022-05-07 20:44:09'),
(10, 'Q00000010', 'MH001', 12, 3, 'Tiệm cận', '17.png', 'Cho hàm số y=f(x) xác định trên R{1}, liên tục trên mỗi khoảng xác định và có bảng biến thiên như sau:', 'Đồ thị hàm số có đúng một tiệm cận ngang.', 'Đồ thị hàm số không có tiệm cận đứng, không có tiệm cận ngang.', 'Đồ thị hàm số có đúng một tiệm cận đứng.', 'Đồ thị hàm số có hai tiệm cận ngang.', 'Đồ thị hàm số có đúng một tiệm cận đứng.', 'Đã duyệt', 'GV003', '2022-05-07 20:44:09', '2022-05-07 20:44:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `revenue`
--

CREATE TABLE `revenue` (
  `id` int(10) NOT NULL,
  `ID_Revenue` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_Revenue` datetime DEFAULT NULL,
  `Total_Money` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `revenue`
--

INSERT INTO `revenue` (`id`, `ID_Revenue`, `ID_Student`, `Date_Revenue`, `Total_Money`) VALUES
(1, 'KT0000001', 'A20230004', '2022-05-05 05:46:14', 5000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `revenue_ct`
--

CREATE TABLE `revenue_ct` (
  `id` int(10) NOT NULL,
  `ID_Revenue_CT` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Revenue` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TypeOfRevenue` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Into_Money` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `revenue_ct`
--

INSERT INTO `revenue_ct` (`id`, `ID_Revenue_CT`, `ID_Revenue`, `TypeOfRevenue`, `Into_Money`) VALUES
(2, 'KT000002', 'KT0000001', 'Bảo hiểm y tế năm học 2021-2022', 500000),
(1, 'KTCT000001', 'KT0000001', 'Học phí học kỳ 1 năm học 2021-2022', 4500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Class` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Subjects` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Learn_Day` date NOT NULL,
  `Day` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lesson` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link_Online` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Semester` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `School_Year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Schedule_Status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `schedule`
--

INSERT INTO `schedule` (`id`, `ID_Class`, `ID_Teacher`, `ID_Subjects`, `Learn_Day`, `Day`, `Lesson`, `Link_Online`, `Semester`, `School_Year`, `Schedule_Status`, `created_at`, `updated_at`) VALUES
(1, 'A2023', 'GV003', 'MH001', '2022-05-02', '2', '1', NULL, '1', '2020-2021', 'Đã duyệt', '2022-05-10 08:11:28', '2022-05-10 08:11:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `ID_Staff` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Permission` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Staff` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Birth_Staff` date DEFAULT NULL,
  `Gender_Staff` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address_Staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mail_Staff` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone_Staff` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Img_Staff` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position_Staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status_Staff` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Time_Start` date DEFAULT NULL,
  `Time_End` date DEFAULT NULL,
  `Pass_Staff` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staff`
--

INSERT INTO `staff` (`id`, `ID_Staff`, `ID_Permission`, `Name_Staff`, `Birth_Staff`, `Gender_Staff`, `Address_Staff`, `Mail_Staff`, `Phone_Staff`, `Img_Staff`, `Position_Staff`, `Status_Staff`, `Time_Start`, `Time_End`, `Pass_Staff`) VALUES
(1, 'NV001', 'Q006', 'Ngô Văn A', '1980-12-12', 'Nam', 'Hải Dương', 'ngovana@gmail.com', '0398515321', '', 'Nhân viên thư viện', 'Đang làm việc', '2002-11-20', NULL, '123456789'),
(2, 'NV002', 'Q006', 'Ngô Văn B', '1980-12-12', 'Nam', 'Hải Dương', 'ngovanb@gmail.com', '0398515321', '', 'Nhân viên thiết bị, thí nghiệm', 'Đang làm việc', '2002-11-20', NULL, '123456789'),
(3, 'NV003', 'Q006', 'Ngô Văn C', '1980-12-12', 'Nam', 'Hải Dương', 'ngovanc@gmail.com', '0398515321', '', 'Nhân viên y tế', 'Đang làm việc', '2002-11-20', NULL, '123456789'),
(4, 'NV004', 'Q006', 'Ngô Văn D', '1980-12-12', 'Nam', 'Hải Dương', 'ngovand@gmail.com', '0398515321', '', 'Nhân viên kế toán', 'Đang làm việc', '2002-12-12', NULL, '123456789'),
(5, 'NV005', 'Q006', 'Ngô Văn E', '1980-12-12', 'Nam', 'Hải Dương', 'ngovane@gmail.com', '0398515321', '', 'Nhân viên văn thư', 'Đang làm việc', '2002-12-12', NULL, '123456789'),
(6, 'NV006', 'Q006', 'Ngô Văn F', '1980-12-12', 'Nam', 'Hải Dương', 'ngovanf@gmail.com', '0398515321', '', 'Bảo vệ', 'Đang làm việc', '2002-12-12', NULL, '123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Permission` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Class` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AccountNumber_Student` int(30) NOT NULL,
  `Birth_Student` date NOT NULL,
  `Gender_Student` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nationality_Student` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ethnic_Student` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Religion_Student` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Insurance_Code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `School_Year` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Student` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mail_Student` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Img_Student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass_Student` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status_Student` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `ID_Student`, `ID_Permission`, `ID_Class`, `Name_Student`, `AccountNumber_Student`, `Birth_Student`, `Gender_Student`, `Nationality_Student`, `Ethnic_Student`, `Religion_Student`, `Address_Student`, `Insurance_Code`, `School_Year`, `Phone_Student`, `Mail_Student`, `Img_Student`, `Pass_Student`, `Status_Student`, `created_at`, `updated_at`) VALUES
(1, 'A20230004', 'Q005', 'A2023', 'Nguyễn Ngọc D', 999986868, '2005-05-14', 'Nam', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'BH00000004', '2020-2023', '0397454857', 'nguyenngocd@gmail.com', '', '123456789', 'Đang học', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'A20230005', 'Q005', 'A2023', 'Nguyễn Ngọc E', 999999996, '2005-05-14', 'Nữ', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'BH00000005', '2020-2023', '0397454857', 'nguyenngoce@gmail.com', 'user-3.png', '123456789', 'Đang học', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'A21240001', 'Q005', 'A2124', 'Nguyễn Ngọc A', 999999997, '2006-05-14', ' Nữ', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'BH00000001', '2021-2024', '0397454857', 'nguyenngoca@gmail.com', '', '123456789', 'Đang học', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(4, 'A21240002', 'Q005', 'B2124', 'Nguyễn Ngọc B', 999999998, '2006-05-14', ' Nữ', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'BH00000002', '2021-2024', '0397454857', 'nguyenngocb@gmail.com', '', '123456789', 'Đang học', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(5, 'B21240003', 'Q005', 'B2124', 'Nguyễn Ngọc C', 999999999, '2006-05-14', 'Nữ', 'Việt Nam', 'Kinh', 'Không', 'Hàm Hy - Cộng Lạc - Tứ Kỳ - Hải Dương', 'BH00000003', '2021-2024', '0397454857', 'nguyenngocc@gmail.com', '', '123456789', 'Đang học', '2022-04-11 08:36:11', '2022-04-11 08:36:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Subjects` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Professional` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Subjects` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Details_Subjects` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `ID_Subjects`, `ID_Professional`, `Name_Subjects`, `Details_Subjects`, `created_at`, `updated_at`) VALUES
(1, 'MH001', 'CM001', 'Toán', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'MH002', 'CM001', 'Tin học', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(3, 'MH003', 'CM002', 'Vật lý', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(4, 'MH004', 'CM002', 'Sinh học', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(5, 'MH005', 'CM002', 'Công nghệ', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(6, 'MH006', 'CM002', 'Hóa học', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(7, 'MH007', 'CM003', 'Ngữ văn', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(8, 'MH008', 'CM003', 'Ngoại ngữ', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(9, 'MH009', 'CM004', 'Lịch sử', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(10, 'MH010', 'CM004', 'Giáo dục công dân', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(11, 'MH011', 'CM004', 'Địa lý', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(12, 'MH012', 'CM004', 'Thể dục', NULL, '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(13, 'MH013', 'CM004', 'Giáo dục quốc phòng an ninh', NULL, '2022-04-16 00:31:14', '2022-04-16 00:31:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject_scores`
--

CREATE TABLE `subject_scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Subjects` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Regular_Score_1` float DEFAULT NULL,
  `Regular_Score_2` float DEFAULT NULL,
  `_15minutes_Score_1` float DEFAULT NULL,
  `_15minutes_Score_2` float DEFAULT NULL,
  `_15minutes_Score_3` float DEFAULT NULL,
  `_45minutes_Score_1` float DEFAULT NULL,
  `_45minutes_Score_2` float DEFAULT NULL,
  `_45minutes_Score_3` float DEFAULT NULL,
  `Semester_Score` float DEFAULT NULL,
  `Semester` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `School_Year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subject_scores`
--

INSERT INTO `subject_scores` (`id`, `ID_Student`, `ID_Subjects`, `ID_Teacher`, `Regular_Score_1`, `Regular_Score_2`, `_15minutes_Score_1`, `_15minutes_Score_2`, `_15minutes_Score_3`, `_45minutes_Score_1`, `_45minutes_Score_2`, `_45minutes_Score_3`, `Semester_Score`, `Semester`, `School_Year`, `created_at`, `updated_at`) VALUES
(1, 'A20230005', 'MH001', 'GV003', 8, 8, 8, 7, NULL, 7, 8, NULL, 8, '1', '2020-2021', '2022-05-08 04:36:24', '2022-05-08 04:36:24'),
(2, 'A20230004', 'MH001', 'GV003', 8, NULL, 8, 7, NULL, 7, NULL, NULL, NULL, '1', '2020-2021', '2022-05-08 04:36:24', '2022-05-08 04:36:24'),
(3, 'A20230005', 'MH002', 'GV001', 10, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2020-2021', '2022-05-08 14:26:16', '2022-05-08 14:26:16'),
(4, 'A20230005', 'MH009', 'GV010', 7, 6, 6, 7, NULL, 8, 8, NULL, 9, '2', '2019-2020', '2022-05-08 15:34:56', '2022-05-08 15:34:56'),
(5, 'A20230005', 'MH001', 'GV003', 8, 9, 8, 7, NULL, 7, 8, NULL, 8, '2', '2020-2021', '2022-05-08 04:36:24', '2022-05-08 04:36:24'),
(6, 'A20230005', 'MH009', 'GV010', 7, 9, 6, 8, NULL, 8, 8, NULL, 9, '1', '2019-2020', '2022-05-08 15:34:56', '2022-05-08 15:34:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Teacher` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Permission` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Professional` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Teacher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birth_Teacher` date NOT NULL,
  `Gender_Teacher` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address_Teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mail_Teacher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Teacher` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img_Teacher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Position_Teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status_Teacher` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time_Start` date NOT NULL,
  `Time_End` date DEFAULT NULL,
  `Pass_Teacher` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teachers`
--

INSERT INTO `teachers` (`id`, `ID_Teacher`, `ID_Permission`, `ID_Professional`, `Name_Teacher`, `Birth_Teacher`, `Gender_Teacher`, `Address_Teacher`, `Mail_Teacher`, `Phone_Teacher`, `Img_Teacher`, `Position_Teacher`, `Status_Teacher`, `Time_Start`, `Time_End`, `Pass_Teacher`, `created_at`, `updated_at`) VALUES
(1, 'GV001', 'Q005', 'CM001', 'Nguyễn Ngọc C', '1986-11-20', 'Nam', 'Hải Dương', 'nguyenngocc@gmail.com', '0397454857', '', 'Tổ trưởng Tổ Toán - Tin học', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(2, 'GV002', 'Q004', 'CM001', 'Nguyễn Ngọc A', '1986-11-20', 'Nam', 'Hải Dương', 'nguyenngoca@gmail.com', '0397454857', '', 'Giáo viên chủ nhiệm lớp A2124', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(3, 'GV003', 'Q003', 'CM001', 'Nguyễn Ngọc B', '1986-11-20', 'Nam', 'Hải Dương', 'nguyenngocb@gmail.com', '0397454857', '', 'Giáo viên bộ môn Toán', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(4, 'GV004', 'Q003', 'CM001', 'Nguyễn Ngọc D', '1986-11-20', 'Nam', 'Hải Dương', 'nguyenngocd@gmail.com', '0397454857', '', 'Giáo viên bộ môn Toán', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(5, 'GV005', 'Q003', 'CM001', 'Nguyễn Ngọc E', '1986-11-20', 'Nam', 'Hải Dương', 'nguyenngocd@gmail.com', '0397454857', '', 'Giáo viên bộ môn Toán', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(6, 'GV006', 'Q003', 'CM001', 'Nguyễn Ngọc F', '1986-11-20', 'Nam', 'Hải Dương', 'nguyenngoce@gmail.com', '0397454857', '', 'Giáo viên bộ môn Toán', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(7, 'GV007', 'Q004', 'CM001', 'Nguyễn Ngọc G', '1960-11-20', 'Nam', 'Hải Dương', 'nguyenngocg@gmail.com', '0397454857', '', 'Giáo viên chủ nhiệm lớp B2124', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(8, 'GV008', 'Q004', 'CM002', 'Nguyễn Ngọc H', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenngoch@gmail.com', '0397454857', '', 'Giáo viên chủ nhiệm lớp A2023', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(9, 'GV009', 'Q002', 'CM001', 'Nguyễn Ngọc K', '1980-11-20', 'Nam', 'Hải Dương', 'nguyenngock@gmail.com', '0397454857', '', 'Hiệu trưởng', 'Đang giảng dạy', '2002-11-20', NULL, '123456789', '2022-04-15 17:31:14', '2022-04-15 17:31:14'),
(10, 'GV010', 'Q003', 'CM004', 'Trần Thu T', '1997-04-17', 'Nữ', 'Hải Dương', 'tranthut@gmail.com', '0912151256', '', 'Giáo viên bộ môn Lịch sử', 'Đang giảng dạy', '2000-11-10', NULL, '123456789', '2022-04-30 08:33:29', '2022-04-30 08:33:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Test` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Class` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type_Test` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Subjects` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pass_Test` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name_Test` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_Questions` int(10) UNSIGNED NOT NULL,
  `Time_To_Do` int(10) UNSIGNED NOT NULL,
  `Note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Date_To_Do` datetime NOT NULL,
  `Test_Status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Teacher` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `School_Year` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tests`
--

INSERT INTO `tests` (`id`, `ID_Test`, `ID_Class`, `Type_Test`, `ID_Subjects`, `Pass_Test`, `Name_Test`, `Total_Questions`, `Time_To_Do`, `Note`, `Date_To_Do`, `Test_Status`, `ID_Teacher`, `Semester`, `School_Year`, `created_at`, `updated_at`) VALUES
(1, 'T00000001', 'A2023', '15 phút', 'MH003', '123', 'Kiểm tra 15 phút môn Vậy lý', 2, 15, 'Học sinh không sử dụng tài liệu.', '2022-04-12 09:00:00', 'Mở', 'GV005', 1, '2021-2022', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'T00000002', 'A2124', '15 phút', 'MH003', '123', 'Kiểm tra 15 phút môn Vậy lý', 2, 15, 'Học sinh không sử dụng tài liệu.', '2022-04-12 09:00:00', 'Mở', 'GV005', 2, '2021-2022', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'T00000003', 'A2124', '15 phút', 'MH009', '123', 'Kiểm tra 15 phút môn Lịch sử', 3, 15, 'Học sinh không sử dụng tài liệu.', '2022-04-12 09:30:00', 'Mở', 'GV007', 2, '2021-2022', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(4, 'T00000005', 'A2023', '15 phút', 'MH009', '123', 'Kiểm tra 15 phút môn Lịch sử', 5, 15, NULL, '2022-04-30 08:00:00', 'Mở', 'GV010', 2, '2021-2022', '2022-04-30 08:38:45', '2022-04-30 08:38:45'),
(5, 'T00000006', 'A2023', '15 phút', 'MH001', '123', 'Kiểm tra 15 phút môn Toán', 3, 15, NULL, '2022-05-05 10:00:00', 'Khóa', 'GV003', 2, '2020-2021', '2022-05-07 21:10:20', '2022-05-07 21:10:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test_info`
--

CREATE TABLE `test_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Student` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Test` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Test_Status_Student` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Scores` float NOT NULL,
  `Detail` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `test_info`
--

INSERT INTO `test_info` (`id`, `ID_Student`, `ID_Test`, `Test_Status_Student`, `Scores`, `Detail`, `created_at`, `updated_at`) VALUES
(1, 'A20230005', 'T00000001', 'Đã hoàn thành', 10, '2/2', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'A20230004', 'T00000001', 'Đã hoàn thành', 10, '2/2', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'A20230005', 'T00000006', 'Đã hoàn thành', 6.7, '2/3', '2022-05-07 21:22:27', '2022-05-07 21:22:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test_questions`
--

CREATE TABLE `test_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `ID_Test_Question` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Test` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Question` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `test_questions`
--

INSERT INTO `test_questions` (`id`, `ID_Test_Question`, `ID_Test`, `ID_Question`, `created_at`, `updated_at`) VALUES
(1, 'TQ00000001', 'T00000003', 'Q00000001', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(2, 'TQ00000002', 'T00000003', 'Q00000002', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(3, 'TQ00000003', 'T00000003', 'Q00000003', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(4, 'TQ00000004', 'T00000001', 'Q00000004', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(5, 'TQ00000005', 'T00000001', 'Q00000005', '2022-04-11 08:36:11', '2022-04-11 08:36:11'),
(6, 'TQ00000006', 'T00000005', 'Q00000001', '2022-04-30 08:49:30', '2022-04-30 08:49:30'),
(7, 'TQ00000007', 'T00000005', 'Q00000002', '2022-04-30 08:49:30', '2022-04-30 08:49:30'),
(8, 'TQ00000008', 'T00000005', 'Q00000003', '2022-04-30 08:49:30', '2022-04-30 08:49:30'),
(9, 'TQ00000009', 'T00000005', 'Q00000006', '2022-04-30 08:49:30', '2022-04-30 08:49:30'),
(10, 'TQ00000010', 'T00000005', 'Q00000007', '2022-04-30 08:49:30', '2022-04-30 08:49:30'),
(11, 'TQ00000011', 'T00000006', 'Q00000008', '2022-05-07 21:18:12', '2022-05-07 21:18:12'),
(12, 'TQ00000012', 'T00000006', 'Q00000009', '2022-05-07 21:18:12', '2022-05-07 21:18:12'),
(13, 'TQ00000013', 'T00000006', 'Q00000010', '2022-05-07 21:19:28', '2022-05-07 21:19:28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID_Admin`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Permission` (`ID_Permission`);

--
-- Chỉ mục cho bảng `classs`
--
ALTER TABLE `classs`
  ADD PRIMARY KEY (`ID_Class`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Teacher` (`ID_Teacher`);

--
-- Chỉ mục cho bảng `details_assignments`
--
ALTER TABLE `details_assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Student` (`ID_Student`),
  ADD KEY `ID_Test` (`ID_Test`),
  ADD KEY `ID_Question` (`ID_Question`);

--
-- Chỉ mục cho bảng `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`ID_Expense`),
  ADD KEY `FEX_STAFF` (`ID_Staff`);

--
-- Chỉ mục cho bảng `expense_ct`
--
ALTER TABLE `expense_ct`
  ADD PRIMARY KEY (`ID_Expense_CT`),
  ADD KEY `FEX_EX` (`ID_Expense`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Admin` (`ID_Admin`),
  ADD KEY `ID_Student` (`ID_Student`);

--
-- Chỉ mục cho bảng `parent_student`
--
ALTER TABLE `parent_student`
  ADD PRIMARY KEY (`ID_Parent`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Student` (`ID_Student`);

--
-- Chỉ mục cho bảng `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`ID_Permission`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `professional_groups`
--
ALTER TABLE `professional_groups`
  ADD PRIMARY KEY (`ID_Professional`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID_Question`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Subjects` (`ID_Subjects`),
  ADD KEY `ID_Teacher` (`ID_Teacher`);

--
-- Chỉ mục cho bảng `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`ID_Revenue`),
  ADD KEY `FVE_STU` (`ID_Student`);

--
-- Chỉ mục cho bảng `revenue_ct`
--
ALTER TABLE `revenue_ct`
  ADD PRIMARY KEY (`ID_Revenue_CT`),
  ADD KEY `FRE_RE` (`ID_Revenue`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Class` (`ID_Class`),
  ADD KEY `ID_Teacher` (`ID_Teacher`),
  ADD KEY `ID_Subjects` (`ID_Subjects`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID_Staff`),
  ADD KEY `FSTA_PER` (`ID_Permission`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID_Student`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Permission` (`ID_Permission`),
  ADD KEY `ID_Class` (`ID_Class`);

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`ID_Subjects`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Professional` (`ID_Professional`);

--
-- Chỉ mục cho bảng `subject_scores`
--
ALTER TABLE `subject_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Student` (`ID_Student`),
  ADD KEY `ID_Subjects` (`ID_Subjects`),
  ADD KEY `ID_Teacher` (`ID_Teacher`);

--
-- Chỉ mục cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID_Teacher`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Permission` (`ID_Permission`),
  ADD KEY `ID_Professional` (`ID_Professional`);

--
-- Chỉ mục cho bảng `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`ID_Test`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Class` (`ID_Class`),
  ADD KEY `ID_Subjects` (`ID_Subjects`),
  ADD KEY `ID_Teacher` (`ID_Teacher`);

--
-- Chỉ mục cho bảng `test_info`
--
ALTER TABLE `test_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Student` (`ID_Student`),
  ADD KEY `ID_Test` (`ID_Test`);

--
-- Chỉ mục cho bảng `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`ID_Test_Question`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `ID_Test` (`ID_Test`),
  ADD KEY `ID_Question` (`ID_Question`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `classs`
--
ALTER TABLE `classs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `details_assignments`
--
ALTER TABLE `details_assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `parent_student`
--
ALTER TABLE `parent_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `professional_groups`
--
ALTER TABLE `professional_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `subject_scores`
--
ALTER TABLE `subject_scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `test_info`
--
ALTER TABLE `test_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `test_questions`
--
ALTER TABLE `test_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`ID_Permission`) REFERENCES `permission_groups` (`ID_Permission`);

--
-- Các ràng buộc cho bảng `classs`
--
ALTER TABLE `classs`
  ADD CONSTRAINT `classs_ibfk_1` FOREIGN KEY (`ID_Teacher`) REFERENCES `teachers` (`ID_Teacher`);

--
-- Các ràng buộc cho bảng `details_assignments`
--
ALTER TABLE `details_assignments`
  ADD CONSTRAINT `details_assignments_ibfk_1` FOREIGN KEY (`ID_Student`) REFERENCES `students` (`ID_Student`),
  ADD CONSTRAINT `details_assignments_ibfk_3` FOREIGN KEY (`ID_Test`) REFERENCES `tests` (`ID_Test`),
  ADD CONSTRAINT `details_assignments_ibfk_4` FOREIGN KEY (`ID_Question`) REFERENCES `questions` (`ID_Question`);

--
-- Các ràng buộc cho bảng `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `FEX_STAFF` FOREIGN KEY (`ID_Staff`) REFERENCES `staff` (`ID_Staff`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `expense_ct`
--
ALTER TABLE `expense_ct`
  ADD CONSTRAINT `FEX_EX` FOREIGN KEY (`ID_Expense`) REFERENCES `expense` (`ID_Expense`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`ID_Admin`) REFERENCES `admins` (`ID_Admin`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`ID_Student`) REFERENCES `students` (`ID_Student`);

--
-- Các ràng buộc cho bảng `parent_student`
--
ALTER TABLE `parent_student`
  ADD CONSTRAINT `parent_student_ibfk_1` FOREIGN KEY (`ID_Student`) REFERENCES `students` (`ID_Student`);

--
-- Các ràng buộc cho bảng `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`ID_Subjects`) REFERENCES `subjects` (`ID_Subjects`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`ID_Teacher`) REFERENCES `teachers` (`ID_Teacher`);

--
-- Các ràng buộc cho bảng `revenue`
--
ALTER TABLE `revenue`
  ADD CONSTRAINT `FVE_STU` FOREIGN KEY (`ID_Student`) REFERENCES `students` (`ID_Student`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `revenue_ct`
--
ALTER TABLE `revenue_ct`
  ADD CONSTRAINT `FRE_RE` FOREIGN KEY (`ID_Revenue`) REFERENCES `revenue` (`ID_Revenue`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`ID_Class`) REFERENCES `classs` (`ID_Class`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`ID_Teacher`) REFERENCES `teachers` (`ID_Teacher`),
  ADD CONSTRAINT `schedule_ibfk_3` FOREIGN KEY (`ID_Subjects`) REFERENCES `subjects` (`ID_Subjects`);

--
-- Các ràng buộc cho bảng `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `FSTA_PER` FOREIGN KEY (`ID_Permission`) REFERENCES `permission_groups` (`ID_Permission`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`ID_Permission`) REFERENCES `permission_groups` (`ID_Permission`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`ID_Class`) REFERENCES `classs` (`ID_Class`);

--
-- Các ràng buộc cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`ID_Professional`) REFERENCES `professional_groups` (`ID_Professional`);

--
-- Các ràng buộc cho bảng `subject_scores`
--
ALTER TABLE `subject_scores`
  ADD CONSTRAINT `subject_scores_ibfk_1` FOREIGN KEY (`ID_Student`) REFERENCES `students` (`ID_Student`),
  ADD CONSTRAINT `subject_scores_ibfk_2` FOREIGN KEY (`ID_Subjects`) REFERENCES `subjects` (`ID_Subjects`),
  ADD CONSTRAINT `subject_scores_ibfk_3` FOREIGN KEY (`ID_Teacher`) REFERENCES `teachers` (`ID_Teacher`);

--
-- Các ràng buộc cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`ID_Permission`) REFERENCES `permission_groups` (`ID_Permission`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`ID_Professional`) REFERENCES `professional_groups` (`ID_Professional`);

--
-- Các ràng buộc cho bảng `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_ibfk_1` FOREIGN KEY (`ID_Class`) REFERENCES `classs` (`ID_Class`),
  ADD CONSTRAINT `tests_ibfk_2` FOREIGN KEY (`ID_Subjects`) REFERENCES `subjects` (`ID_Subjects`),
  ADD CONSTRAINT `tests_ibfk_3` FOREIGN KEY (`ID_Teacher`) REFERENCES `teachers` (`ID_Teacher`);

--
-- Các ràng buộc cho bảng `test_info`
--
ALTER TABLE `test_info`
  ADD CONSTRAINT `test_info_ibfk_1` FOREIGN KEY (`ID_Student`) REFERENCES `students` (`ID_Student`),
  ADD CONSTRAINT `test_info_ibfk_2` FOREIGN KEY (`ID_Test`) REFERENCES `tests` (`ID_Test`);

--
-- Các ràng buộc cho bảng `test_questions`
--
ALTER TABLE `test_questions`
  ADD CONSTRAINT `test_questions_ibfk_1` FOREIGN KEY (`ID_Test`) REFERENCES `tests` (`ID_Test`),
  ADD CONSTRAINT `test_questions_ibfk_2` FOREIGN KEY (`ID_Question`) REFERENCES `questions` (`ID_Question`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
