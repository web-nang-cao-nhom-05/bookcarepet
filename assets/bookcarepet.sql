-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 05:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `tai_khoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `tai_khoan`, `mat_khau`, `email`) VALUES
(1, 'mai_mai', 'Q', ''),
(2, 'minh_thuy', 'Q', 'thuy@gmail.com'),
(6, 'maint', 'Q', ''),
(7, 'maint35', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(8, 'lien', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_lich`
--

CREATE TABLE `book_lich` (
  `ma_book_lich` int(11) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giong_thu_cung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngay_kham` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ma_phong_kham` int(11) DEFAULT NULL,
  `ma_dv` int(11) DEFAULT NULL,
  `thoi_gian_tao` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_lich`
--

INSERT INTO `book_lich` (`ma_book_lich`, `ho_ten`, `sdt`, `dia_chi`, `email`, `giong_thu_cung`, `ngay_kham`, `ma_phong_kham`, `ma_dv`, `thoi_gian_tao`) VALUES
(14, 'Nguyễn Chi', '098187233', 'xã đàn', '', 'Husky', '2020-04-06 02:52:23', 3, 12, '2020-04-06 02:52:23'),
(15, 'Nguyễn Thị Mai', '0985632', '15 Lê Văn Lương', '19a4040096@bav.edu.vn', '', '2020-04-13 01:36:42', 1, 13, '2020-04-13 01:36:42'),
(16, 'Nguyễn Thị Mai', '0985632', '15 Lê Văn Lương', '0981945703', 'Husky', '2020-04-13 01:37:16', 2, 13, '2020-04-13 01:37:16'),
(17, 'hà', '75645343', '15 Lê Văn Lương', '', '', '2020-04-15 01:47:58', 3, 12, '2020-04-15 01:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `dich_vu`
--

CREATE TABLE `dich_vu` (
  `ma_dv` int(11) NOT NULL,
  `ten_dich_vu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `ma_phong_kham` int(11) NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_tao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dich_vu`
--

INSERT INTO `dich_vu` (`ma_dv`, `ten_dich_vu`, `gia`, `ma_phong_kham`, `hinh_anh`, `nguoi_tao`) VALUES
(12, 'Cắt tỉa lông', 100000, 2, 'cat_tia.jpg', 'admin'),
(13, 'Khách sạn trông giữ', 140000, 2, 'khach_san.jpg', 'admin'),
(14, 'Điều trị nấm ghẻ', 140000, 2, 'nam_ghe.png', 'admin'),
(15, 'viêm ruột', 300000, 3, 'viem_ruot.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `ng_tham_gia`
--

CREATE TABLE `ng_tham_gia` (
  `ma_tham_gia` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ng_tham_gia`
--

INSERT INTO `ng_tham_gia` (`ma_tham_gia`, `ho_ten`, `sdt`, `email`) VALUES
(1, 'Hàn Mặc Tử', '\r\n0984675488', '\r\nmactuhan@gmail.com'),
(2, 'Lý Bạch', '\r\n0854688644', '\r\nyeutho@gmail.com'),
(3, 'Nguyễn Mai Lan', '09857546899', 'cuoicongchua@gmail.com'),
(4, 'Lý Thông', '098765432', '\r\nluathachsacnh@gmail.com'),
(5, 'Nguyễn Thị Mai', '0864689743', 'pethouse@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `phan_hoi`
--

CREATE TABLE `phan_hoi` (
  `ma_phan_hoi` int(10) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gop_y` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phan_hoi`
--

INSERT INTO `phan_hoi` (`ma_phan_hoi`, `ho_ten`, `sdt`, `email`, `gop_y`, `thoi_gian`) VALUES
(1, 'Hoang Kim Lien', '123456789', 'kimlien@gmail.com', 'abc', '2020-05-05 03:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `phong_kham`
--

CREATE TABLE `phong_kham` (
  `ma_phong_kham` int(11) NOT NULL,
  `ten_phong_kham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phong_kham`
--

INSERT INTO `phong_kham` (`ma_phong_kham`, `ten_phong_kham`, `dia_chi`, `sdt`, `email`, `id_admin`) VALUES
(1, 'Happy Pet Care', 'Số 90 Cầu Giấy', '0336547788', 'happypetcare@gmail.com', 1),
(2, 'Pet City', 'Số 220 Trần Đại Nghĩa', '0902150091', 'petcity@gmail.com', 2),
(3, 'Chan Chan Pet', 'Số 28 Cầu Giấy,\r\nHà Nội', '099987822', 'chanchanpet@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham_pet`
--

CREATE TABLE `san_pham_pet` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `ma_phong_kham` int(11) NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_tao` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham_pet`
--

INSERT INTO `san_pham_pet` (`ma_sp`, `ten_sp`, `gia`, `ma_phong_kham`, `hinh_anh`, `nguoi_tao`) VALUES
(1, 'Vòng cổ cho mèo', 100000, 1, 'vong_co.png', 'admin'),
(2, 'Khay vệ sinh cho mèo', 120000, 3, 'khay.png', 'admin'),
(3, 'nệm', 200000, 2, 'nem.jpg', 'admin'),
(6, 'x', 0, 2, 'anh32.png', ''),
(7, 'x', 0, 2, 'anh33.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma_tin_tuc` int(10) NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_tao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_1` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma_tin_tuc`, `tieu_de`, `nguoi_tao`, `thoi_gian`, `mo_ta`, `anh_minh_hoa`, `noi_dung`, `noi_dung_1`, `noi_dung_2`) VALUES
(6, 'Cún yêu sợ ở nhà một mình, phải làm thế nào?', 'mai_mai', '2020-05-05 03:36:56', 'Cún cũng như con người, chúng đều cần có tình yêu thương của chủ đối với mình.', 'cun-lo-so-khi-o-nha-mot-minh-13.jpg', 'Cún cũng như con người, chúng đều cần có tình yêu thương của chủ đối với mình. Đặc biệt với nhiều loại cún, chúng còn có sự lo lắng, sợ hãi khi không có chủ ở bên cạnh, chúng sẽ cảm thấy cô đơn, có biểu hiện lạ và dần có trạng thái tinh thần giống như trầm cảm. Một vài loài khác thì lại phá phách, gây ồn (như tru, sủa) và làm náo loạn nhà cửa khi không có ai ở nhà. Vậy làm cách nào để chúng có thể ngoan ngoãn ở nhà một mình mà không vướng mắc bởi vấn đề sức khỏe hay gây náo loạn mọi người? Dưới đây chính là một số lời khuyên dành cho bạn. ', 'Tất cả các chú cún đều không nên bị bỏ lại một mình trong một khoảng thời gian dài. Một hình thức gây chú ý khi chúng bị bỏ trong một thời gian dài là chúng sẽ quậy phá đồ đạc trong nhà, sủa inh ỏi và có thể cắn những người đến gần. Hoặc có những chú cún có chứng hoảng loạn lo sợ thì lại rơi vào chứng trầm cảm, bỏ ăn và không muốn gần với chủ của chúng nữa. Loại chó có khả năng rơi vào tình trạng bất an là chó cứu hộ, nhất là đối với những chú rời nhà đi tới trại huấn luyện hoặc đến môi trường làm việc mới, chúng sẽ trở nên bất kham và khó trị. Hoặc có thể là những chú cún với vẻ ngoài nhút nhát, nhạy cảm và ngoan ngoãn, chúng có xu hướng bám nhanh lấy chủ của mình nhưng lại dễ rơi vào trạng thái tự kỉ khi không có chủ ở bên cạnh. Nỗi lo lắng bị bỏ rơi càng dễ xảy ra với những chú cún từng chuyển nhà khi dưới một tuổi và đặc biệt là những chú chó phải qua tay chủ quá nhiều lần, những chú chó này thường rất hung dữ, khó dạy bảo.', 'Bạn có thể huấn luyện chó theo những bước dưới đây: Bước 1: Để cún lại trong căn phòng chúng vẫn thường ở, đóng cửa rồi đi ra chỗ khác Bước 2: Sau một lúc (dưới năm phút), quay trở lại và bỏ qua màn chào hỏi với cún. Bước 3: Bạn hãy lặp lại điều này nhiều lần, với cùng cách thức và thời điểm trong ngày. Từng bước, hãy tăng dần khoảng thời gian để cún cưng ở lại một mình. Bước 4: Nếu cún của bạn tỏ ra khó chịu, bắt đầu sủa, cào cửa đòi ra, hoặc khi bạn quay lại thấy nó đang nhai bất cứ món đồ gì, thì lần tới hãy để cún một mình trong khoảng thời gian ngắn hơn. Ngoài ra, quá trình luyện tập của cún cũng nên điều chỉnh chậm lại để phù hợp hơn với tính cách của từng con. Bước 5: Tiếp tục như vậy cho đến khi cún có thể chịu đựng được sự vắng mặt của bạn trong vòng 30 phút mà không có bất kỳ một vấn đề gì. Bước 6: Khi đã thành công ở bước 5, hãy thử bắt đầu để cún lại một mình trong phòng vào bất kỳ lúc nào và đi làm những công việc hàng ngày của bạn như mặc quần áo hay lấy chìa khóa.'),
(7, 'Câu chuyện cảm động về chú chó Hachiko trung thành', 'minh_thuy', '2020-05-05 03:38:22', 'Câu chuyện về chú chó Hachiko đã xảy ra gần một thế kỷ, nhưng mỗi khi được nhắc lại nó luôn làm mọi người cảm động, tiếc thương về một chú chó trung thành.', '800px-Hachiko_Stuffed_specimen-760x4902.jpg', 'Hachiko là một chú chó giống Akita sinh ngày 10 tháng 11 năm 1923 tại thành phố Odate, tỉnh Akita, Nhật Bản.Năm 1924 Hachiko được một giáo sư thuộc khoa nông nghiệp trường đại học Tokyo mua về nuôi. Và từ đây một câu truyện cảm động giữa chú chó Hachiko với người chủ của mình đã làm cả đất nước Nhật cảm động.', 'Sau khi được giáo sư Ueno đưa về nuôi, Hachiko đã trở thành một người bạn thân thiết với ông chủ. Mỗi buổi sáng, Hachiko theo tiễn chủ tới tận nhà ga Shibuya nơi ông chủ đi tới nơi làm việc và chờ đón ông tại đó đến khi ông trở về nhà vào cuối ngày. Những ngày hành phúc của nó cứ như thế diễn ra trong vòng một năm. Nhưng vào một ngày định mệnh tháng 5 năm 1925, khi giáo sư Ueno bị nhồi máu đột ngột tại nơi làm việc, và qua đời. Trong các ngày sau đó, chú chó tội nghiệp Hachiko vẫn tới nhà ga để chờ đón ông chủ của mình trở về. Mỗi ngày sau đó, chú vẫn đều đặn có mặt tại nhà ga trong gần 10 năm. Năm 1932 một trong những sinh viên của giáo sư Ueno, Hirokichi Saito thấy Hachiko tại nhà ga và được nghe câu truyện cảm động về cuộc đời chú. cũng trong năm đó ông đã đăng một bài viết trên một tờ báo lớn Asahi Shimbun- một tờ nhật báo nổi tiếng tại Tokyo với số lượng độc giả rất lớn-, đã biến Hachiko thành một hiện tượng tầm cỡ quốc gia. Mọi người bắt đầu biết đến long trung thành của Hachiko với ông chủ của mình, họ mạng thức ăn tới cho Hachiko tại nhà ga. Các giáo viên đã lấy Hachiko như là một tấm gương về lòng trung thành cho thế hệ trẻ noi theo, các nghệ sĩ nổi tiếng bắt đầu tạc tượng chú.Cuối cùng lòng trung thành của chú chó Hachiko trở thành một biểu tượng quốc gia về lòng trung thành.', 'Cuối cùng, ngày 8 tháng 3 năm 1935, Hachiko đã có thể gặp người chủ của mình. Chú chết ở nơi mà gần 10 năm chú đã tới tiễn và đón ông. Xác Hachiko được nhồi bông và được bảo quản tại Bảo tàng quốc gia về thiên nhiên và khoa học Nhật. '),
(8, 'BỆNH SUY GIẢM MIỄN DỊCH TRÊN MÈO (FIV)', 'mai_mai', '2020-05-05 03:39:16', 'Bệnh suy giảm miễn dịch trên mèo (FIV) hay còn được gọi là bệnh HIV trên Mèo, do một loại Virus thuộc họ Retrovirus gây ra.', 'IMG_8325-630x4204.jpg', 'Bệnh suy giảm miễn dịch trên mèo (FIV) do một loại virus thuộc họ Retrovirus gây ra. Loại virus cùng họ với virus giảm bạch cầu ở mèo (FeLV) và virus gây ra hội chứng suy giảm miễn dịch ở người (HIV). Virus (FIV) chỉ lây truyền qua mèo và không lây lan sang các động vật có vú khác. Virus (FIV) rất dễ bị vô hiệu hóa bởi tia cực tím, nhiệt độ cao, chất tẩy rửa. Bệnh được chia thành nhiều phân nhóm (Clades), một phần dựa vào trình tự của gen Env (Envelope). Trên thế giới, có 5 phân nhóm được công nhận (A, B, C, D và E). Ngoài ra, có các phân nhóm mới đã được nghiên cứu ở mèo từ Texas (Nhóm F). ', 'Trong môi trường tự nhiên, (FIV) chủ yếu truyền qua nước bọt hoặc máu, do vết cắn và vết thương. Tỷ lệ mắc bệnh ở mèo cái thường cao hơn ở mèo đực. Ngoài ra, (FIV) có thể lây truyền qua các đường tiêm.Tại môi trường thí nghiệm, bệnh truyền lây qua tử cung và sữa chiếm tỉ lệ cao (trên 50%). Tuy nhiên, sự truyền lây qua tinh dịch trong tự nhiên có khả năng rất thấp. Lây truyền ngang hiếm khi xảy ra.Sữa bio cho mèo cung cấp đầy đủ chất dinh dưỡng cho mèo tương tự như sữa mẹ. Ngoài ra chúng còn có tác dụng rất tốt trong việc phòng nguyền bệnh suy giảm miễn dịch ở mèo.', 'Mèo nhiễm (FIV) cũng tiến triển qua nhiều giai đoạn, tương tự như nhiễm HIV ở người. Quá trình phát triển bệnh cũng được chia thành hai giai đoạn bao gồm giai đoạn: cấp tính và giai đoạn cuối – thường được gọi là AIDS trên mèo.Mặc dù sự phân chia các giai đoạn lâm sàng của quá trình nhiễm (FIV) có thể ít khi tiên lượng bệnh nhưng không thể phân biệt rõ ràng các giai đoạn. Triệu chứng lâm sàng của (FIV) là không đặc hiệu. Phụ thuộc và yếu tố như khả năng gây bệnh của vi khuẩn và tiếp xúc của mèo nhiễm với các tác nhân gây bệnh khác. Tuy nhiên, nó thường kéo dài trong nhiều năm. Trong giai đoạn cuối của bệnh, dấu hiệu lâm sàng phản ánh các nhiễm trùng cơ hội, xuất hiện khối u, suy tủy và thần kinh.'),
(9, 'BỆNH THẬN MÃN TÍNH Ở MÈO: NHỮNG DẤU HIỆU ĐÁNG LƯU Ý', 'minh_thuy', '2020-05-05 03:40:16', 'Bạn có biết, có đến 30% mèo trên một năm tuổi mắc bệnh về thận. Bệnh thận mãn tính ở mèo là một trong các bệnh về thận phổ biến. Khi mãn tính, không có cách chữa trị.', '1747826e86955ee3975b0bc1fd7a7fd82.jpg', 'Ngoài bệnh mèo bị đau mắt thì bệnh thận mãn tính ở mèo cũng khá phổ biến. Thận là một phần của hệ thống thận. Hệ thống của cơ thể để lọc các tạp chất ra khỏi máu. Nước tiểu được sản xuất trong thận được đưa đến bàng quang bằng niệu quản .Và từ bàng quang tiết niệu ra thế giới bên ngoài bằng niệu đạo. Bệnh thận mãn tính ở mèo (CKD) là sự mất chức năng thận kéo dài theo thời gian (tham khảo tại wikipedia). Thận khỏe mạnh thực hiện nhiều chức năng quan trọng. Đáng chú ý nhất là lọc máu và tạo nước tiểu. ', 'Những chú mèo bị CKD có thể bị tích tụ các chất thải và các hợp chất khác trong máu. Thường được loại bỏ hoặc điều hòa bởi thận. Sự tích lũy này có thể khiến mèo tỏ ra thờ ơ, thiếu thiện cảm và giảm cân. \r\n\r\nChúng cũng có thể mất khả năng cô đặc nước tiểu một cách thích hợp. Đi tiểu nhiều hơn và uống nhiều nước hơn để bù lại. \r\n\r\nViệc mất các protein và vitamin quan trọng trong nước tiểu. Có thể góp phần vào sự trao đổi chất bất thường và mất cảm giác ngon miệng. Suy giảm miễn dịch rõ rệt. \r\n\r\nChúng cũng có thể bị tăng huyết áp. Ảnh hưởng đến chức năng của một số hệ thống quan trọng, bao gồm mắt, não và tim. CKD cũng có thể làm giảm khả năng sản xuất hồng cầu của mèo, dẫn đến thiếu máu , giảm nồng độ hồng cầu trong máu. \r\n\r\nĐiều này có thể làm cho nướu của chúng xuất hiện màu hồng nhạt. Hoặc trong trường hợp nghiêm trọng, màu trắng và có thể khiến chúng lờ đờ. ', 'Các nghiên cứu khác có thể hữu ích trong việc đánh giá một chú mèo bị nghi ngờ mắc CKD bao gồm các nghiên cứu hình ảnh như siêu âm bụng, X – ray. Và trong một số trường hợp, đánh giá bằng kính hiển vi các mẫu sinh thiết. \r\n\r\nVới khả năng tăng huyết áp ở mèo bị CKD, đo huyết áp của mèo cũng là một phần quan trọng trong đánh giá y tế cho bệnh này.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `book_lich`
--
ALTER TABLE `book_lich`
  ADD PRIMARY KEY (`ma_book_lich`),
  ADD KEY `ma_phong_kham` (`ma_phong_kham`) USING BTREE,
  ADD KEY `ma_dv` (`ma_dv`);

--
-- Indexes for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`ma_dv`),
  ADD KEY `ma_phong_kham` (`ma_phong_kham`);

--
-- Indexes for table `ng_tham_gia`
--
ALTER TABLE `ng_tham_gia`
  ADD PRIMARY KEY (`ma_tham_gia`);

--
-- Indexes for table `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD PRIMARY KEY (`ma_phan_hoi`);

--
-- Indexes for table `phong_kham`
--
ALTER TABLE `phong_kham`
  ADD PRIMARY KEY (`ma_phong_kham`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `san_pham_pet`
--
ALTER TABLE `san_pham_pet`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `ma_phong_kham` (`ma_phong_kham`);

--
-- Indexes for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma_tin_tuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book_lich`
--
ALTER TABLE `book_lich`
  MODIFY `ma_book_lich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dich_vu`
--
ALTER TABLE `dich_vu`
  MODIFY `ma_dv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ng_tham_gia`
--
ALTER TABLE `ng_tham_gia`
  MODIFY `ma_tham_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phan_hoi`
--
ALTER TABLE `phan_hoi`
  MODIFY `ma_phan_hoi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `phong_kham`
--
ALTER TABLE `phong_kham`
  MODIFY `ma_phong_kham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `san_pham_pet`
--
ALTER TABLE `san_pham_pet`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma_tin_tuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_lich`
--
ALTER TABLE `book_lich`
  ADD CONSTRAINT `pk_booklich` FOREIGN KEY (`ma_dv`) REFERENCES `dich_vu` (`ma_dv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_dv` FOREIGN KEY (`ma_phong_kham`) REFERENCES `phong_kham` (`ma_phong_kham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `dv` FOREIGN KEY (`ma_phong_kham`) REFERENCES `phong_kham` (`ma_phong_kham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phong_kham`
--
ALTER TABLE `phong_kham`
  ADD CONSTRAINT `fk_pk` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `san_pham_pet`
--
ALTER TABLE `san_pham_pet`
  ADD CONSTRAINT `fk_sp_pk` FOREIGN KEY (`ma_phong_kham`) REFERENCES `phong_kham` (`ma_phong_kham`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
