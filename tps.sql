-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 26, 2024 lúc 12:56 PM
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
-- Cơ sở dữ liệu: `tps`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `Employ_ID` int(10) UNSIGNED NOT NULL,
  `Employ_Name` varchar(255) NOT NULL,
  `Employ_Email` varchar(255) NOT NULL,
  `Employ_Phone` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Name_TK` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`Employ_ID`, `Employ_Name`, `Employ_Email`, `Employ_Phone`, `Gender`, `DOB`, `Address`, `Name_TK`, `Password`) VALUES
(1, 'Gutkowski', 'mercedes13@donnelly.net', '(361) 937-9548', 'Nữ', '1986-10-12', 'Watsicamouth', 'hziemann', 'Y`aqbpnZVL>'),
(2, 'Roberts', 'fheidenreich@funk.org', '410.273.3794', 'Nam', '2014-06-06', 'Bernierland', 'heaven10', 'pm.p@k]wW%V'),
(3, 'Boyle', 'crona.beatrice@gmail.com', '820-208-7275', 'Nam', '1978-08-21', 'South Vada', 'oconner.mya', '?T<N~;rgr?_&bCciek.l'),
(4, 'Kshlerin', 'ymraz@hotmail.com', '517.674.5362', 'Nữ', '2019-10-26', 'Gaylordhaven', 'olen.kuhn', '75lg0**)GH'),
(5, 'Rice', 'carlo93@yahoo.com', '+1.838.375.8713', 'Nữ', '1975-06-23', 'Lake Alfonzotown', 'jbeatty', '$FpC?SvNn?ye'),
(6, 'Wunsch', 'waters.dana@kuhlman.com', '(360) 287-6970', 'Nam', '1976-07-11', 'South Michael', 'marvin.lenny', 'i8iWe<'),
(7, 'Swaniawski', 'doyle.dale@franecki.com', '(732) 764-9090', 'Nữ', '2018-08-16', 'Lake Cheyannetown', 'hickle.sylvia', '_r&V\"Ep'),
(8, 'Fritsch', 'eusebio.legros@harvey.com', '405.294.6547', 'Nam', '1991-12-10', 'Lake Juwan', 'wward', '!/xbK\\aa_'),
(9, 'Zieme', 'vanderson@yahoo.com', '1-308-467-8529', 'Nữ', '1970-11-19', 'South Eda', 'rutherford.henriette', 'dD/gn)'),
(10, 'Yost', 'jwhite@yahoo.com', '(786) 673-1930', 'Nam', '1996-10-12', 'Lake Carmela', 'ljacobi', 'Y;[qF$uB/?v\"c}'),
(11, 'Pfeffer', 'erica38@gmail.com', '+1-609-266-0473', 'Nam', '1974-12-02', 'North Margarett', 'obashirian', '(%aJQY[+.Ugr?'),
(12, 'Dach', 'hbradtke@yahoo.com', '+14707080045', 'Nữ', '1978-03-24', 'Coltbury', 'schulist.maximillia', '=bC:L6%XU]mX'),
(13, 'Lynch', 'carrie.davis@langosh.com', '+1 (820) 728-9016', 'Nam', '2015-09-12', 'Port Mabellemouth', 'pfadel', 'h^N\\2i0k8~7p&=^0S\"'),
(14, 'Gottlieb', 'gerhold.chaz@herman.com', '269.994.3705', 'Nam', '2022-01-10', 'Lake Gaetano', 'krajcik.herman', 'aL?g[-!'),
(15, 'Gottlieb', 'garry47@runte.com', '+1.361.720.9290', 'Nam', '2021-01-22', 'Alanashire', 'reilly.boehm', 'f`J|*l9z'),
(16, 'Cronin', 'colton.watsica@gmail.com', '(458) 568-0699', 'Nam', '2020-07-07', 'Lehnerborough', 'otilia.reichert', 'C;hm<\\=6D'),
(17, 'Crooks', 'adrian.corwin@yahoo.com', '802.341.0830', 'Nữ', '1972-03-08', 'West Jeremyhaven', 'lesch.lemuel', '&t^-S=T:WGM['),
(18, 'Rempel', 'mona.renner@fritsch.info', '937-931-4550', 'Nam', '2016-07-01', 'Madalineland', 'prosacco.elwyn', 'D#+XKHOyfg'),
(19, 'Halvorson', 'zgislason@grady.com', '678-231-4900', 'Nam', '1977-05-31', 'Feestview', 'fritsch.tremaine', '{f[x.|X4M}L|1J'),
(20, 'O\'Kon', 'axel24@hotmail.com', '+17726796607', 'Nam', '2006-03-09', 'East Madisynbury', 'hcummings', '=;A:N9]c*\'v:v+y:'),
(21, 'Crona', 'rowena.rohan@zulauf.com', '+1 (212) 387-2403', 'Nữ', '2007-01-24', 'Queenland', 'maureen37', '\\hUXU{Mw'),
(22, 'Klein', 'wsawayn@oconner.com', '772.263.2026', 'Nữ', '2020-03-25', 'East Muriel', 'brycen.feeney', '.Ac\"$D:FCQfDjv5i'),
(23, 'Hessel', 'sylvia.legros@barrows.com', '1-417-331-0437', 'Nữ', '1997-08-20', 'New Nicolette', 'kovacek.erick', 'o[da=4<@H)V'),
(24, 'O\'Connell', 'gorczany.kelvin@gmail.com', '341.771.4121', 'Nữ', '2008-07-31', 'Haydentown', 'rosemary.klocko', 'HWUo9]'),
(25, 'King', 'gottlieb.guy@jones.com', '+1 (914) 557-0026', 'Nữ', '1994-01-12', 'Jeanneport', 'nina.bogan', 'Fh[T-Z'),
(26, 'Labadie', 'ccorwin@yahoo.com', '(321) 896-5843', 'Nữ', '1993-08-18', 'Janickport', 'friesen.maximo', '1<mUn.bP9*DBErAO!'),
(27, 'Beier', 'lilla66@hotmail.com', '1-580-515-7320', 'Nam', '2017-05-07', 'Roobton', 'leonel.rath', 'O_YhG$-|S'),
(28, 'Becker', 'gmante@gmail.com', '+1-678-905-0728', 'Nam', '1999-12-02', 'Wehnerland', 'willis38', 'Ll07J#C%i8mS]~J|>@'),
(29, 'Wilderman', 'larue11@powlowski.com', '+1-302-959-5359', 'Nam', '2012-04-22', 'Parisianfort', 'amara.klocko', 'ruL8W^M0dKYHC>u'),
(30, 'Hartmann', 'meda35@hotmail.com', '918-500-7259', 'Nữ', '1986-09-30', 'South Kenville', 'dariana64', '((BFQ&`\\8/(N-xw'),
(31, 'Kertzmann', 'price32@nolan.com', '608.247.8678', 'Nữ', '1987-02-03', 'West Antonio', 'clotilde03', 'j1Wbc&4:6@'),
(32, 'Hickle', 'russel.cruz@gmail.com', '+1-445-837-1778', 'Nữ', '1986-07-26', 'Gleichnerville', 'iernser', '/bQiH$Pm5L,'),
(33, 'Hudson', 'funk.kathryne@murazik.com', '620.553.6156', 'Nam', '2019-08-18', 'Luettgenhaven', 'rempel.rosendo', 'Ls5.sG4UbEC$!en+Yn`'),
(34, 'Glover', 'marguerite10@johnston.com', '505.386.8925', 'Nam', '2020-07-20', 'South Queenieland', 'rosalee.keebler', 'EiXXV>\''),
(35, 'Littel', 'chesley83@gmail.com', '(781) 627-0645', 'Nam', '1970-07-22', 'Heathcotemouth', 'hyatt.providenci', '|n@+VV.5&w)2h'),
(36, 'Schmitt', 'dickens.barbara@gmail.com', '+1.574.590.7135', 'Nữ', '1986-09-05', 'South Liamport', 'sidney.schoen', 'w\"Uu+BRGA\'f{'),
(37, 'Abshire', 'aditya51@lindgren.com', '352-868-4987', 'Nữ', '2000-03-30', 'Wuckertport', 'mckenzie.zachariah', 'GFvUgX%-rF'),
(38, 'Fay', 'fdamore@schroeder.com', '820.316.4189', 'Nữ', '1972-10-30', 'Naderside', 'hermiston.kristin', 'u{XIXm$'),
(39, 'Crooks', 'mitchell78@jacobi.com', '+1.480.626.8797', 'Nam', '2013-04-12', 'Lake Lavonfurt', 'heaven91', '@5v}\'b]K-Bq#8E+'),
(40, 'Erdman', 'kaelyn86@beier.com', '(757) 307-9179', 'Nữ', '2007-02-13', 'South Tomasaborough', 'cbrekke', '%srr,W!}E@Nf\\xk_+Lh'),
(41, 'Larkin', 'zena11@oreilly.com', '909-339-6721', 'Nam', '2014-05-29', 'Port Queen', 'ladams', '-B#(\'6qXzm._&W<I\''),
(42, 'Kiehn', 'tre.fahey@hotmail.com', '1-959-923-4229', 'Nữ', '1982-02-12', 'Turcottemouth', 'aylin62', 'md_lhYt>07p@Z>*'),
(43, 'Reichel', 'hudson.princess@schuppe.com', '+13079853847', 'Nữ', '1992-03-24', 'New Krystal', 'era.cassin', '/Kl:YJX}Z'),
(44, 'Ritchie', 'aaron47@beahan.com', '901-679-2605', 'Nữ', '1994-10-01', 'Kertzmannmouth', 'eulah.crooks', 'JH/\\T3nr3u=U<3eQI'),
(45, 'Ward', 'martina29@yahoo.com', '248-614-5115', 'Nam', '2002-09-04', 'Lake Gilda', 'nova.collins', 'O6T,?X@ji@G<\'DuD}&'),
(46, 'Schimmel', 'kendall.cartwright@gmail.com', '1-314-279-3102', 'Nữ', '1972-01-17', 'South Wilhelmineshire', 'maurine52', '[bROiivW<_K6u'),
(47, 'Medhurst', 'olin.towne@mante.net', '347-201-9475', 'Nam', '2006-04-01', 'Port Craigview', 'mann.jeanette', '*ub\"?3d|^t3'),
(48, 'Zboncak', 'linnie60@hotmail.com', '978-433-5998', 'Nam', '1975-06-08', 'Marquiseville', 'jhuel', 'W5{J}(_28T[j)|c'),
(49, 'Beahan', 'arturo50@schmeler.com', '832.533.0340', 'Nam', '2009-04-26', 'Daisybury', 'lawrence56', 'RRU.[_W:');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `films`
--

CREATE TABLE `films` (
  `Film_ID` int(10) UNSIGNED NOT NULL,
  `Film_Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Image_url` varchar(255) NOT NULL,
  `Trailler_url` varchar(255) NOT NULL,
  `Film_time` int(11) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `DOS` date NOT NULL,
  `DOE` date NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Actor` varchar(255) NOT NULL,
  `Director` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `films`
--

INSERT INTO `films` (`Film_ID`, `Film_Name`, `Description`, `Age`, `Image_url`, `Trailler_url`, `Film_time`, `Language`, `DOS`, `DOE`, `Category`, `Actor`, `Director`) VALUES
(1, 'Ngôi đền kỳ quái 4', 'Hồn ma Nak với sức mạnh khủng khiếp nhất, đáng sợ nhất mà bộ đôi mỏ hỗn Balloon & First phải đối mặt để giải cứu cho trai đẹp Min Joon. Liệu hội bạn này sẽ giải được nghiệp mình tạo ra hay sẽ tan rã từ đây?', 16, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/4/0/406x600-peenak.jpg', 'https://www.youtube.com/watch?time_continue=1&v=hiMCzdGSnCY&embeds_referring_euri=https%3A%2F%2Fwww.cgv.vn%2F&source_ve_path=Mjg2NjY&feature=emb_logo', 111, 'Tiếng Thái', '2024-05-27', '2024-07-15', 'Kinh Dị', ' Witthawat Rattanaboonbaramee, Bhuripat Vejvongsatechawat, Phiravich Attachitsataporn', 'Phontharis Chotkijsadarsopon'),
(2, 'Mèo béo siêu quậy', 'Garfield (Chris Pratt) là một chú mèo nổi tiếng khắp thế giới, hướng nội, siêu ghét thứ hai và cực yêu món lasagna bị cuốn vào một chuyến phiêu lưu ngoài trời. Sau cuộc hội ngộ đầy bất ngờ với người cha đã mất từ lâu của mình là chú mèo đường phố lôi thôi', 3, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/1/2/1200x1800-garfield.jpg', 'https://www.youtube.com/watch?v=oU7x71wB9PA', 101, 'Tiếng Anh', '2024-05-31', '2024-07-15', 'Hài, Hoạt Hình, Phiêu Lưu', 'Hannah Waddingham, Chris Pratt, Samuel L. Jackson, Brett Goldstein, Cecily Strong', 'Mark Dindal'),
(3, 'Những mảnh ghép cảm xúc 2', 'Cuộc sống tuổi mới lớn của cô bé Riley lại tiếp tục trở nên hỗn loạn hơn bao giờ hết với sự xuất hiện của 4 cảm xúc hoàn toàn mới: Lo u, Ganh Tị, Xấu Hổ, Chán Nản. Mọi chuyện thậm chí còn rối rắm hơn khi nhóm cảm xúc mới này nổi loạn và nhốt nhóm cảm xúc', 3, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/1/0/1080x1350-insideout.jpg', 'https://www.youtube.com/watch?v=9phK0prtuJM', 96, 'Tiếng Anh', '2024-06-14', '2024-07-31', 'Tình cảm', '(Lồng tiếng) Amy Poehler, Maya Hawke, Lewis Black, Phyllis Smith, Tony Hale, Liza Lapira, Ayo Edebiri, Adèle Exarchopoulos, Paul Walter Hauser,....', 'Kelsey Mann'),
(4, 'Gia tài của ngoại', 'Gia Tài Của Ngoại xoay quanh câu chuyện về M (do Billkin Putthipong thủ vai) là một chàng trai thất nghiệp và đang tìm mọi cách để làm giàu. Một ngày nọ, M nhận ra có một cách làm giàu nhanh chóng: chăm sóc người bà đang mắc ung thư giai đoạn cuối để lấy', 13, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_opt1_gia_tai_cua_ngoai_3.jpg', 'https://www.youtube.com/watch?v=Y_qYJ6To93k', 127, 'Tiếng Thái', '2024-06-07', '2024-07-31', 'Tâm lý', 'Putthipong Assaratanakul (Billkin), Usha Seamkhum, Tontawan Tantivejakul,…', 'Pat Boonnitipat'),
(5, 'Cửu long thành trại: Vây thành', 'Lạc Quân nhập cảnh trái phép vào Hồng Kông và được Quyền Phong giúp đỡ để tồn tại ở Cửu Long Thành Trại - khu vực phức tạp có rất nhiều băng đảng xã hội đen. Trong lúc gặp nạn họ vô tình phát hiện ra quy luật ngầm giữa sự hỗn loạn phía sau nó. Đứng trước', 18, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/b/_/b_n_sao_c_a_470wx700h.jpg', 'https://www.youtube.com/watch?v=4slIl4BFveI', 125, 'Tiếng Trung', '2024-06-14', '2024-07-31', 'Hành động', 'Cổ Thiên Lạc, Hồng Kim Bảo, Nhậm Hiền Tề, Quách Phú Thành, Lâm Phong, Lưu Tuấn Khiêm, Huỳnh Đức Bân, Ngũ Doãn Long, Hồ Tử Đồng, Trương Văn Kiệt', 'Trịnh Bảo Thụy'),
(6, 'Phim điện ảnh Doraemon: Nobita và bản giao hưởng địa cầu', 'TÁC PHẨM KỶ NIỆM 90 NĂM FUJIKO F FUJIO Chuẩn bị cho buổi hòa nhạc ở trường, Nobita đang tập thổi sáo - nhạc cụ mà cậu dở tệ. Thích thú trước nốt \"No\" lạc quẻ của Nobita, Micca - cô bé bí ẩn đã mời Doraemon, Nobita cùng nhóm bạn đến \"Farre\" - Cung điện âm', 3, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/d/r/drm24_-_poster.jpg', 'https://youtu.be/Yug8gbDd5EQ', 115, 'Tiếng Nhật', '2024-05-24', '2024-07-17', 'Hoạt hình', 'Wasabi Mizuta, Megumi Ôhara, Yumi Kakazu', 'Kazuaki Imai'),
(7, 'Trư bát giới: Đại náo thế giới mới', 'Một ngày nọ, Bát Giới vụng về mong muốn được chọn để gia nhập vào \"Thế giới mới\", một xã hội tân tiến và hoàn hảo! Trong một tình huống tiến thoái lưỡng nan, Bát Giới buộc phải thành lập một thỏa thuận bí mật với Ngưu Ma Vương và gia nhập nhóm của Tam Ta', 5, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_tru_bat_gioi_2_1_.jpg', 'https://youtu.be/EpoMV-jCDV8', 96, 'Tiếng Trung', '2024-06-21', '2024-07-31', 'Hoạt hình', 'Greg Han Hsu, Kuan-Ting Liu, Chung-Hua Tou, Hsin - Ling Chung, Waa Wei, Harlem Yu, Ivy Shao', 'Chiu Li-Wei'),
(8, 'Lật mặt 7: Một điều ước', 'Một câu chuyện lần đầu được kể bằng tất cả tình yêu, và từ tất cả những hồi ức xao xuyến nhất của đấng sinh thành', 16, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/l/a/lat-mat-7.jpg', 'https://youtu.be/_HgBbIUcylw', 138, 'Tiếng Việt', '2024-04-26', '2024-07-15', 'Gia đình', 'Thanh Hiền, Trương Minh Cường, Đinh Y Nhung, Quách Ngọc Tuyên, Trâm Anh, Trần Kim Hải', 'Lý Hải'),
(9, 'Chuyện ma giảng đường - Năm 3', 'Dựa trên loạt nghi thức tâm linh có thật, phần phim mới của thương hiệu phim kinh dị nổi tiếng, “Chuyện Ma Giảng Đường - Năm 3” sẽ thuật lại những câu chuyện rùng rợn tại các ngôi trường bị ám tại Thái Lan và nhiều sự kiện kỳ bí không thể giải thích…', 18, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/3/5/350x495-haunted.jpg', 'https://youtu.be/yHLLH0rKA90', 117, 'Tiếng Thái', '2024-06-21', '2024-08-12', 'Kinh dị', 'Siwat Jumlongkul, Pisitpol Ekaphongpisit, Awat Ratanapintha, Ponchanan Chantra, Nichaphat Chatchaipholrat, Chatchai Chinsi, Tawan Hiranyapong, Eisaya Hosuwan, Kanchit Jaichobngam,...', 'Aussada Likitboonma, Sorawit Meungkeaw, Nontawat Numbenchap, Aroonakorn Pick.'),
(10, 'Cùng em ở ngày thế giới kết thúc', 'Thương hiệu ăn khách CÙNG EM Ở NGÀY THẾ GIỚI KẾT THÚC trở lại với phần phim điện ảnh. Hibiki quyết tâm cứu lấy đứa con gái yêu thương Mirai vì đây là sự sống và hy vọng cuối cùng còn lại của anh và người vợ đã mất Kurumi. Một nơi tuyệt vọng và nguy hiểm n', 18, 'https://iguov8nhvyobj.vcdn.cloud/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/o/f/official_poster.jpg', 'https://youtu.be/OMTOgYvmxZQ', 116, 'Tiếng Nhật', '2024-06-21', '2024-07-31', 'Tình cảm', 'Ryoma Takeuchi, Fumiya Takahashi, Mayu Hotta, Rihito Itagaki, Airu Kubozuka, Yuki Tachibana, Sakura Kiryu', 'Shintaro SUGAwara');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_06_17_192637_create_employees_table', 2),
(12, '2024_06_18_194051_create_s_c_s_table', 3),
(13, '2024_06_18_224506_create_films_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FPo0ZNifjyUSXO6SRIfBY3F0QIlTNEiyf6cXADA3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVFLaWJqTHZLNVpVQWxTZXdPbDFkYU5sVE9VWHh2RlhXeGY5WFVnaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9maWxtcy9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719395504);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `s_c_s`
--

CREATE TABLE `s_c_s` (
  `Cinema_ID` int(10) UNSIGNED NOT NULL,
  `Cinema_Name` varchar(255) NOT NULL,
  `Film_Name` varchar(255) NOT NULL,
  `SC` varchar(255) NOT NULL,
  `DOS` date NOT NULL,
  `Price` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `s_c_s`
--

INSERT INTO `s_c_s` (`Cinema_ID`, `Cinema_Name`, `Film_Name`, `SC`, `DOS`, `Price`) VALUES
(1, 'TPS Vincom Royal City', 'Ngôi đền kỳ quái 4', '12:00', '2024-06-11', 50000.00),
(2, 'TPS Vincom Trần Duy Hưng', 'Những mảnh ghép cảm xúc 2', '18:20', '2024-06-13', 75000.00),
(3, 'TPS Vincom Bà Triệu', 'Trư bát giới: Đại náo thế giới mới', '15:30', '2024-06-01', 50000.00),
(4, 'TPS Vincom Royal City', 'Cửu long thành trại: Vây thành', '12:00', '2024-06-06', 55000.00),
(5, 'TPS Vincom Trần Duy Hưng', 'Lật mặt 7: Một điều ước', '22:00', '2024-06-12', 75000.00),
(6, 'TPS Vincom Royal City', 'Chuyện ma giảng đường - Năm 3', '22:00', '2024-06-13', 75000.00),
(7, 'TPS Vincom Royal City', 'Lật mặt 7: Một điều ước', '18:20', '2024-06-09', 75000.00),
(8, 'TPS Vincom Bà Triệu', 'Cửu long thành trại: Vây thành', '14:20', '2024-06-29', 75000.00),
(9, 'TPS Vincom Trần Duy Hưng', 'Gia tài của ngoại', '15:30', '2024-06-28', 50000.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2024-06-17 12:49:58', '$2y$12$Ecx6lhwPKnOU/LJaSVSmxetp1/mMNm5XW/Rrxo8C4LCCffi2vq3q2', 'mxDq8ozQ3k', '2024-06-17 12:49:59', '2024-06-17 12:49:59'),
(9, 'Dr. Louvenia McCullough IV', 'jamie.raynor@example.net', '2024-06-17 13:01:10', '$2y$12$2/P1G.5vh/v7P1SZxSfi8ubdwzwY3M3rz/W26RrGbhvvR8i11HWPq', 'QO5nf3cpiU', '2024-06-17 13:01:10', '2024-06-17 13:01:10'),
(10, 'Fredy Kris', 'donnie.gaylord@example.com', '2024-06-17 13:01:50', '$2y$12$VynXNpzF/l8c/lTRvRdYHuhdpOtkrmkeKhOKZIL.HAaMsTeUk3AYC', 'mGCpMQREIP', '2024-06-17 13:01:50', '2024-06-17 13:01:50'),
(11, 'Abigale Gleichner', 'hauck.zaria@example.com', '2024-06-17 13:03:04', '$2y$12$3wUGv1e5KrUeRQJgKj94i.ppsVmB404YKj3lruok2DMj4f7gPpBcq', 'XtIm2D6Pto', '2024-06-17 13:03:05', '2024-06-17 13:03:05'),
(12, 'Florencio McGlynn', 'zohara@example.com', '2024-06-17 13:04:06', '$2y$12$.CosUSjNAoI9o1MeQ0qsq.pi6CvjQQORKT1/cMIRGhYb7PyM8za3a', '5paAWC6LUo', '2024-06-17 13:04:06', '2024-06-17 13:04:06'),
(13, 'Lucinda Beer', 'raheem74@example.org', '2024-06-17 13:05:46', '$2y$12$G8xQdKYJwMBA1MFRWsWhGej2.l16AV9.41jk/KqLpSjgmhssJc.K.', 'DcpyvV3QCz', '2024-06-17 13:05:47', '2024-06-17 13:05:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Employ_ID`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`Film_ID`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `s_c_s`
--
ALTER TABLE `s_c_s`
  ADD PRIMARY KEY (`Cinema_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `Employ_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `films`
--
ALTER TABLE `films`
  MODIFY `Film_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `s_c_s`
--
ALTER TABLE `s_c_s`
  MODIFY `Cinema_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
