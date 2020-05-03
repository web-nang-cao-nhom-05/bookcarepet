-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2020 lúc 04:47 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookcarepet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `tai_khoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `tai_khoan`, `mat_khau`) VALUES
(1, 'mai_mai', '1234'),
(2, 'minh_thuy', '1234');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_lich`
--

CREATE TABLE `book_lich` (
  `ma_book_lich` int(11) NOT NULL,
  `giong_thu_cung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_kham` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ma_phong_kham` int(11) NOT NULL,
  `ma_dv` int(11) NOT NULL,
  `thoi_gian_tao` timestamp NOT NULL DEFAULT current_timestamp(),
  `ma_tham_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `book_lich`
--

INSERT INTO `book_lich` (`ma_book_lich`, `giong_thu_cung`, `ngay_kham`, `ma_phong_kham`, `ma_dv`, `thoi_gian_tao`, `ma_tham_gia`) VALUES
(1, 'Husky', '2020-03-27 17:13:57', 3, 2, '2020-03-01 21:54:08', 1),
(2, 'Pug', '2020-03-27 17:14:03', 2, 2, '2020-03-10 22:06:07', 2),
(3, 'Pug', '2020-03-27 17:14:09', 1, 1, '2020-02-18 22:06:07', 3),
(4, 'Poodle', '2020-03-27 17:14:14', 2, 2, '2020-02-17 23:52:34', 4),
(5, 'Pug', '2020-03-27 17:14:21', 2, 2, '2020-03-10 23:56:15', 5),
(6, 'Mèo Ba Tư', '2020-03-27 17:14:25', 1, 1, '2020-03-01 23:56:15', 3),
(7, 'Mèo vàng', '2020-03-27 17:14:28', 1, 1, '2020-03-10 23:59:18', 2),
(8, 'Poodle', '2020-03-27 17:14:33', 1, 1, '2020-03-02 23:59:18', 1),
(9, 'Husky', '2020-03-27 17:14:36', 2, 2, '2020-03-02 23:59:18', 3),
(10, 'Poodle', '2020-03-27 17:14:51', 2, 2, '2020-03-02 23:59:18', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dich_vu`
--

CREATE TABLE `dich_vu` (
  `ma_dv` int(11) NOT NULL,
  `ten_dich_vu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ma_phong_kham` int(11) NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoi_tao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dich_vu`
--

INSERT INTO `dich_vu` (`ma_dv`, `ten_dich_vu`, `ma_phong_kham`, `hinh_anh`, `nguoi_tao`) VALUES
(1, 'Sữa tắm', 1, 'c', 'admin'),
(2, 'Áo khoác mũ lông', 1, 'c', 'admin'),
(3, 'Thức ăn khô', 3, 'c', 'admin'),
(4, 'Vòng cổ', 1, 'c', 'admin'),
(5, 'Cát vệ sinh', 1, 'c', 'admin'),
(6, 'Nệm', 3, 'c', 'admin'),
(11, 'Lồng vận chuyển', 1, 'c', 'admin'),
(12, 'Cắt tỉa lông', 2, 'c', 'admin'),
(13, 'Khách sạn trông giữ', 2, 'c', 'admin'),
(14, 'Điều trị nấm ghẻ', 2, 'c', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ng_tham_gia`
--

CREATE TABLE `ng_tham_gia` (
  `ma_tham_gia` int(11) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ng_tham_gia`
--

INSERT INTO `ng_tham_gia` (`ma_tham_gia`, `ho_ten`, `sdt`, `email`) VALUES
(1, 'Hàn Mặc Tử', '\r\n0984675488', '\r\nmactuhan@gmail.com'),
(2, 'Lý Bạch', '\r\n0854688644', '\r\nyeutho@gmail.com'),
(3, 'Nguyễn Mai Lan', '09857546899', 'cuoicongchua@gmail.com'),
(4, 'Lý Thông', '098765432', '\r\nluathachsacnh@gmail.com'),
(5, 'Nguyễn Thị Mai', '0864689743', 'pethouse@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_hoi`
--

CREATE TABLE `phan_hoi` (
  `ma_phan_hoi` int(11) NOT NULL,
  `ma_tham_gia` int(11) NOT NULL,
  `gop_y` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_hoi`
--

INSERT INTO `phan_hoi` (`ma_phan_hoi`, `ma_tham_gia`, `gop_y`, `thoi_gian`) VALUES
(1, 1, '', '2020-03-27 16:46:04'),
(2, 2, '\r\nCảm ơn thông tin của các bạn', '2020-03-27 16:46:10'),
(3, 3, '\r\nHãy liên hệ với chúng tôi', '2020-03-27 16:46:14'),
(4, 4, 'Thông tin chia sẻ về chăm sóc boss thật hữu ích', '2020-03-27 16:46:18'),
(5, 5, 'Hãy liên hệ với chúng tôi', '2020-03-27 16:46:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_kham`
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
-- Đang đổ dữ liệu cho bảng `phong_kham`
--

INSERT INTO `phong_kham` (`ma_phong_kham`, `ten_phong_kham`, `dia_chi`, `sdt`, `email`, `id_admin`) VALUES
(1, 'Happy Pet Care', 'Số 90 Cầu Giấy', '0336547788', 'happypetcare@gmail.com', 1),
(2, 'Pet City', 'Số 220 Trần Đại Nghĩa', '0902150091', 'petcity@gmail.com', 2),
(3, 'Chan Chan Pet', 'Số 28 Cầu Giấy,\r\nHà Nội', '099987822', 'chanchanpet@gmail.com', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham_pet`
--

CREATE TABLE `san_pham_pet` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham_pet`
--

INSERT INTO `san_pham_pet` (`ma_sp`, `ten_sp`, `dia_chi`, `hinh_anh`, `id_admin`) VALUES
(1, 'Vòng cổ cho mèo', '', '', 1),
(2, 'Khay vệ sinh cho mèo', '', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin_tuc`
--

CREATE TABLE `tin_tuc` (
  `ma_tin_tuc` int(10) NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(11) NOT NULL,
  `thoi_gian` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin_tuc`
--

INSERT INTO `tin_tuc` (`ma_tin_tuc`, `tieu_de`, `id_admin`, `thoi_gian`, `mo_ta`, `anh`, `noi_dung`) VALUES
(1, 'Combo 6 dịch vụ tại nhà chỉ 99k', 1, '2020-03-27 16:00:07', 'Dịch vụ tại nhà PetHealth đã hình thành và phát triển hơn 10 năm nay. Chúng tôi tự hào mang đến cho bạn những dịch vụ tốt nhất với giá cả hợp lý nhất. Chương trình ưu đãi này là minh chứng cho điều ấy.', NULL, 'Combo 6 dịch vụ tại nhà chỉ 99k\r\nTẩy giun\r\nCắt móng\r\nVắt tuyến hôi\r\nVệ sinh tai\r\nKhám lâm sàng\r\nKhám tổng thể\r\nNgoài ra, bạn sẽ được tư vấn sức khỏe, cách chăm sóc miễn phí từ đội ngũ chuyên gia PetHealth. Tuy nhiên, có 1 vài lưu ý nho nhỏ cho bạn, bạn hãy chú ý đọc kỹ để tránh bị nhầm lẫn nhé!\r\nChỉ áp dụng cho các khách hàng ở Thành phố Hà Nội\r\nThời gian diễn ra ưu đãi: 09/03 – 15/03/2020\r\nDo lượng khách hàng đặt hẹn là khá nhiều, chúng tôi ưu tiên phục vụ những khách hàng đăng ký Online trước tại đây hoặc gọi đến Hotline: 024 2242 8882\r\nNhững thắc mắc thường gặp của khách hàng khi sử dụng dịch vụ khuyến mãi\r\nChúng tôi hiểu rằng, nhiều khách hàng có tâm lý quan ngại khi thấy chương trình khuyến mãi bởi những lý do khách quan. Nhưng bạn có thể yên tâm, tại PetHealth chúng tôi luôn đặt sự hài lòng của khách hàng lên hàng đầu. Chắc chắn bạn sẽ nhận được sự hài lòng tuyệt đối khi đến với PetHealth.\r\nThuốc được sử dụng khuyến mãi có phải gần hết hạn không?\r\nCâu trả lời là KHÔNG. Tất cả thuốc tẩy giun được sử dụng trong chương trình đều là những sản phẩm hoàn toàn còn hạn sử dụng dài, được phân phối bởi những công ty thuốc thú y lớn như Viphavet. \r\nĐẩy giá lên cao rồi khuyến mãi\r\nVẫn là KHÔNG cho câu hỏi này. Giá dịch vụ tại PetHealth luôn được công khai với tất cả mọi khách hàng, nên chắc chắn chúng tôi không đội giá lên cao rồi giảm giá để làm chương trình. Bạn có thể tham khảo bảng giá của PetHealth tại đây. '),
(2, 'CHÓ BỊ TIÊU CHẢY: PHẢI LÀM SAO MỚI KHÔNG CHẾT?', 2, '2020-03-27 16:00:27', 'Tiêu chảy là một triệu chứng phổ biến ở chó, đặc biệt xuất hiện nhiều trên chó nhỏ. Đây có thể là biểu hiện ban đầu của rất nhiều bệnh nguy hiểm, có khả năng gây tử vong cho chó. Chính vì vậy, các bạn không nên chủ quan khi chó bị tiêu chảy.\r\nVậy bạn đã biết có những nguyên nhân nào dẫn đến tình trạng tiêu chảy này hay không? Hãy cùng bệnh viện thú y chúng tôi, tìm hiểu cách điều trị và phòng ngừa triệu chứng này nhé.', NULL, 'Triệu Chứng Chó Bị Tiêu Chảy\r\nThông thường, chó con bị tiêu chảy nhiều hơn chó trưởng thành. Nhiều nhất là khoảng dưới 8 tháng tuổi, đặc biệt là giai đoạn 2 đến 4 tháng tuổi. Đây là thời kỳ hệ tiêu hóa của chó chưa phát triển đầy đủ, rất dễ mắc các bệnh về đường ruột.\r\nThêm vào đó, một số chủ nuôi chưa ý thức được việc tiêm phòng, tẩy giun sớm và chăm sóc cún con. Dẫn tới việc chó bị nhiễm ký sinh trùng hoặc bệnh tiêu hóa. Các dấu hiệu rõ rệt nhất là:\r\nChó bị nôn bỏ ăn, tiêu chảy trong thời gian dài.\r\nChó bị đi ngoài ra máu hoặc trong phân sẽ có lẫn máu.\r\nChó đi ngoài có mùi tanh rất khó chịu.\r\nTần suất đi ngoài của chó rất nhiều và liên tục\r\nCách Xử Lý Và Theo Dõi Tạm Thời\r\nNước và muối khoáng là 2 yếu tố cần quan tâm nhất lúc này. Mỗi 1 lần đi ngoài, chó sẽ mất đi một lượng nước đáng kể trong cơ thể. Kèm theo đó là rất nhiều chất điện giải và khoáng chất.\r\nNếu để kéo dài, chó sẽ ngày càng mỏi mệt. Đối với các giống chó có thể trạng yếu, có thể bị khô miệng và trũng mắt do mất nước và rối loạn điện giải.\r\nKhi chó con bị tiêu chảy phải làm sao để nó uống nước. Chính vì không thể ăn gì nên nước là nguồn bổ sung năng lượng tốt nhất lúc này. Hãy cho chó uống nước đường Glucose ấm/ E-lectrolytes.\r\nNếu dụng cụ đựng nước bị bẩn, hãy vệ sinh sạch sẽ hoặc thay bằng dụng cụ mới. Chú ý quan sát lượng nước trong bát xem chó có uống không, và không để nước đường Glucose cho chó uống cả ngày, nửa buổi sẽ thay nước mới.\r\nVề phần muối khoáng, các bạn có thể đi mua C-Electrolytes về cho chó uống. Đây là thuốc dạng bột hòa tan, chuyên dùng khi chó bị tiêu chảy bỏ ăn. Tác dụng chính của thuốc là bổ sung thêm các chất điện giải cho chó.\r\nNgoài ra, còn bình ổn tâm trạng stress khi thời tiết thay đổi hoặc vận chuyển (say tàu xe). Nếu chó không chịu uống nước có hòa tan C-Electrolytes, bạn hãy dùng xi lanh hút dung dịch rồi bơm vào miệng chó.\r\nHoặc trong nhà có đường Glucose bột thì hãy pha loãng với nước ấm cho cún uống. Liều lượng cụ thể phụ thuộc vào tình trạng bệnh. Bạn có thể tham khảo ý kiến của người bán và đọc kỹ hướng dẫn sử dụng để tính toán cụ thể.'),
(3, 'CÔNG THỨC VÀNG TRONG CÁCH NUÔI MÈO SƠ SINH', 2, '2020-03-27 16:00:33', 'Cách nuôi mèo sơ sinh rất quan trọng những không phải ai cũng biết làm. Thời kỳ này chúng khá yếu ớt và dễ tổn thương. Nếu như quá trình sinh đẻ an toàn, chúng ta chỉ cần hỗ trợ mèo mẹ là đủ. Bản năng làm mẹ của mèo mẹ sẽ giúp ích rất nhiều cho mèo con.\r\nNhưng nếu không may mèo mẹ mất hoặc không chăm sóc mèo con, bạn cần biết những điều cơ trong cách nuôi mèo sơ sinh. Các chú ý chính bao gồm: cách cho ăn, cách cho mèo sơ sinh uống sữa và cách vệ sinh chúng.', NULL, 'Cách Nuôi Mèo Sơ Sinh\r\nMột lần nữa, Bệnh viện PetHealth xin nhắc các bạn rằng: mèo mẹ có vai trò vô cùng to lớn đối với mèo con. Hãy cố gắng giữ mèo mẹ khỏe mạnh hết mức có thể sau thời kỳ thai sản.\r\nĐể thực sự an toàn và an tâm nhất có thể. Bạn nên đưa mèo mẹ đang mang thai, đi siêu âm tối thiểu 1 lần và tham khảo tư vấn từ các bác sĩ.\r\nMèo con là một con mèo ở trong giai đoạn tuổi vị thành niên. Sau khi được sinh ra, mèo con hoàn toàn phụ thuộc vào mẹ của chúng để tồn tại và chúng thường không mở mắt cho đến 7 đến 10 ngày sau khi sinh. (Nguồn wikipedia)\r\nNếu trong nhà có nuôi các động vật khác, hãy tách chúng ra xa khỏi ổ mèo. Người lạ cũng phải bị hạn chế lai vãng quanh khu vực đó. Chú ý bổ sung dinh dưỡng cho mèo mẹ những ngày trước và sau sinh.\r\nThời gian này mèo mẹ cần rất nhiều năng lượng. Nhưng lúc mới sinh mèo còn rất yếu, không thể đi lại. Hơn nữa, nó cũng không dám bỏ đàn con mà đi xa.'),
(4, 'VIÊM DA DO NHIỄM KHUẨN | NGUYÊN NHÂN VÀ ĐIỀU TRỊ', 1, '2020-03-27 16:00:36', 'Viêm da do nhiễm khuẩn ảnh hưởng lớn đến đời sống bình thường của bản thân con vật và con người. Nếu bạn không muốn thú cưng nhà mình mắc phải viêm da nhiễm khuẩn, hãy chịu khó vệ sinh sạch sẽ cho thú cưng của bạn.\r\nSẽ thật tiếu nuối nếu như bạn bở lõ bài viết dưới đây. Những thông tin liên quan đến căn bẹnh này sẽ được chia sẻ bởi đội ngũ chuyên gia PetHealth.', NULL, 'Nguyên nhân viêm da do nhiễm khuẩn\r\nTình trạng này có thể xảy ra ở bất cứ đối tượng nào và cũng có rất nhiều nguyên nhân gây ra bệnh viêm da do nhiễm khuẩn ở chó. Phổ biến như:\r\nNguyên nhân do nhiễm khuẩn Staphylococus intermedius, Staphylococus Aurius\r\nDo nhiễm trùng kế phát như: bị nấm, viêm da dị ứng, viêm da do nội tiết tố, có dị ứng với bọ chét,….\r\nNhững giống có lông ngắn, chó mặt nhăn do bị chai phần khủy tay, khủy chân…\r\nĐiều trị viêm da do nhiễm khuẩn\r\nNgay từ khi đầu tiên phát hiện ra triệu chứng, người chủ cần cho chúng cách ly với cách ly với những con chó khác nếu nhà nuôi nhiều con. Và thực hiện điều trị theo các trường hợp sau đây.\r\nTìm nguyên chính gây nên trường hợp viêm da trên thú cưng.\r\nCạo lông vùng da bị viêm và vùng da lân cận.\r\nTắm bằng dầu gội có thành phần kháng sinh như Benzoyl Peroxiden hoặc Betadine pha loãng sau đó sấy khô.\r\nBôi mỡ kháng sinh vào những vùng tổn thương cục bộ\r\nTrường hợp tổn thương nặng hoặc có thể dẫn đến nhiễm trùng máu cần sử dụng thêm kháng sinh trong vòng từ 3 – 4 tuần.\r\nĐeo loa chống liếm để tránh thú cưng không căn, liếm vào vùng tổn thương.\r\nMột số mủ có liên quan đến nếp gấp trên da, cần phải phẫu thật để khắc phục\r\nHầu hết trường hợp điều trị khỏi, nhưng vẫn có thể tái phát lại. Cần tìm nguyên nhân chính gây viêm da mới có thể điều trị dứt điểm tình trạng nhiễm khuẩn.\r\nMọi người cần theo dõi thú cưng trong và sau quá trình điều trị. Đặc biệt chủ nuôi cần thật kiên nhẫn khi cho thú cưng điều trị các bệnh về da'),
(5, 'DỊCH VỤ LƯU CHUỒNG TẾT 2020', 1, '2020-03-27 16:00:39', 'Nhằm hỗ trợ chủ nuôi trong việc chăm sóc thú cưng dịp Tết 2020, Bệnh Viện Thú Y PetCare nhận chăm sóc thú cưng qua đêm với thời gian linh động theo yêu cầu của quý khách.', NULL, 'ĐỐI VỚI DỊCH VỤ TRỌN GÓI:\r\nDịch vụ trọn gói chăm sóc thú cưng trong 8 ngày lễ, từ 28 – mồng 6 Tết âm lịch (22/01/2020 – 30/01/2020).\r\nTặng 1 gói grooming cơ bản khi lưu chuồng tại PetCare từ 7 ngày trở lên (để chuyển qua dịch vụ SODA SPA, xin quý khách vui lòng liên hệ tiếp tân).\r\nGiảm 10% cho khách đặt chỗ và thanh toán trước ngày 31/12/2019\r\nGiảm 5% cho khách đặt chỗ và thanh toán trước ngày 15/01/2020\r\n***Đặc biệt giảm thêm 5% cho khách gửi trên 3 bé\r\nPetcare áp dụng quy trình lưu giữ thú cưng khoa học, đảm bảo cho thú cưng nhà bạn sống trong môi trường an toàn và sạch sẽ:\r\n•   Petcare có một không gian rộng với mục đích phục vụ cho việc lưu giữ chó, mèo. Khu vực lưu trú có sân cỏ, giúp các bạn nhỏ thoải mái vận động mỗi ngày 2 lần, đảm bảo sức khoẻ và ổn định tinh thần cho các bạn nhỏ.\r\n•   Có hệ thống hút mùi công nghiệp, tránh ô nhiễm do chính thú cưng thải ra.\r\n•   Có hệ thống điều hòa nhiệt khi cần thiết vào những ngày nắng nóng theo chế độ yêu cầu.\r\n•   Cung cấp thức ăn Royal Canin cho thú cưng và cả thực phẩm chế biến theo nhu cầu.\r\n•   Có hệ thống camera theo dõi thú cưng giúp các bác sỹ kiểm soát tình hình.\r\n•   Có Bác Sỹ Thú Y kiểm tra sức khoẻ hàng ngày.\r\n•   Giờ nhận và đón thú cưng linh động.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `book_lich`
--
ALTER TABLE `book_lich`
  ADD PRIMARY KEY (`ma_book_lich`),
  ADD KEY `ma_phong_kham` (`ma_phong_kham`) USING BTREE,
  ADD KEY `ma_dv` (`ma_dv`),
  ADD KEY `ma_tham_gia` (`ma_tham_gia`);

--
-- Chỉ mục cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD PRIMARY KEY (`ma_dv`),
  ADD KEY `ma_phong_kham` (`ma_phong_kham`);

--
-- Chỉ mục cho bảng `ng_tham_gia`
--
ALTER TABLE `ng_tham_gia`
  ADD PRIMARY KEY (`ma_tham_gia`);

--
-- Chỉ mục cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD PRIMARY KEY (`ma_phan_hoi`),
  ADD KEY `ma_tham_gia` (`ma_tham_gia`);

--
-- Chỉ mục cho bảng `phong_kham`
--
ALTER TABLE `phong_kham`
  ADD PRIMARY KEY (`ma_phong_kham`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `san_pham_pet`
--
ALTER TABLE `san_pham_pet`
  ADD PRIMARY KEY (`ma_sp`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Chỉ mục cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD PRIMARY KEY (`ma_tin_tuc`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `book_lich`
--
ALTER TABLE `book_lich`
  MODIFY `ma_book_lich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  MODIFY `ma_dv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `ng_tham_gia`
--
ALTER TABLE `ng_tham_gia`
  MODIFY `ma_tham_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  MODIFY `ma_phan_hoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phong_kham`
--
ALTER TABLE `phong_kham`
  MODIFY `ma_phong_kham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `san_pham_pet`
--
ALTER TABLE `san_pham_pet`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  MODIFY `ma_tin_tuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book_lich`
--
ALTER TABLE `book_lich`
  ADD CONSTRAINT `fk_ng_join` FOREIGN KEY (`ma_tham_gia`) REFERENCES `ng_tham_gia` (`ma_tham_gia`),
  ADD CONSTRAINT `pk_booklich` FOREIGN KEY (`ma_dv`) REFERENCES `dich_vu` (`ma_dv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_dv` FOREIGN KEY (`ma_phong_kham`) REFERENCES `dich_vu` (`ma_phong_kham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dich_vu`
--
ALTER TABLE `dich_vu`
  ADD CONSTRAINT `dv` FOREIGN KEY (`ma_phong_kham`) REFERENCES `phong_kham` (`ma_phong_kham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD CONSTRAINT `fk_tham_gia` FOREIGN KEY (`ma_tham_gia`) REFERENCES `ng_tham_gia` (`ma_tham_gia`);

--
-- Các ràng buộc cho bảng `phong_kham`
--
ALTER TABLE `phong_kham`
  ADD CONSTRAINT `fk_pk` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Các ràng buộc cho bảng `san_pham_pet`
--
ALTER TABLE `san_pham_pet`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Các ràng buộc cho bảng `tin_tuc`
--
ALTER TABLE `tin_tuc`
  ADD CONSTRAINT `fk_ngtao` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
