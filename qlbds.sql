-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2021 lúc 05:36 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbds`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--
create database qlbds;
use qlbds;
drop database qlbds;

CREATE TABLE `account` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `BirthDay` datetime NOT NULL,
  `Gender` varchar(1) NOT NULL DEFAULT 'M',
  `Address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `PhoneNumber` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `IDGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`Username`, `Password`, `Name`, `BirthDay`, `Gender`, `Address`, `PhoneNumber`, `Email`, `IDGroup`) VALUES
('admin', '02011998ducbac', 'Đinh Đức Bắc', '1998-01-02 00:00:00', 'M', 'Nha Trang', '0374382405', 'dinhducbac1998@gmail.com', 1),
('dat', '123', 'Nguyễn Duy Đạt', '2020-12-24 00:00:00', 'M', 'Hà Nội', '0367562254', 'nddat@gmail.com', 2),
('ducbac', '02011998ducbac', 'Đinh Đức Bắc', '1998-01-02 00:00:00', 'M', 'Nha Trang', '0374382405', 'dinhducbac1998@gmail.com', 1),
('thinh', '123', 'Huỳnh Tấn Thịnh', '1999-09-27 00:00:00', 'M', 'Nha Trang', '0374586621', 'huynhtanthinh1999@gmail.com', 2),
('thong', '123', 'Nguyễn Minh Thông', '1999-06-03 00:00:00', 'M', 'Bình Thuận', '0348525623', 'nguyenminhthong1999@gmail.com', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cateimage`
--

CREATE TABLE `cateimage` (
  `CateImageID` int(11) NOT NULL,
  `CateImageLink` varchar(300) NOT NULL,
  `CateID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cateimage`
--

INSERT INTO `cateimage` (`CateImageID`, `CateImageLink`, `CateID`) VALUES
(1, '/Assets/Images/Biet_Thu_NIOMON.png', 1),
(2, '/Assets/Images/Van_Phong_TIGER.png', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catetory`
--



--
-- Đang đổ dữ liệu cho bảng `catetory`
--
/*alter table Catetory 
add column ContactID int not null;

ALTER TABLE Catetory  ADD CONSTRAINT fk_Contact FOREIGN KEY(ContactID) REFERENCES Contact(ContactID);*/
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ContactID` int(11) NOT NULL,
  `ContactName` varchar(300) NOT NULL,
  `ContactAddress` varchar(300) NOT NULL,
  `ContactPhone` varchar(10) NOT NULL,
  `ContactEmail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into `contact`(`ContactID`,`ContactName`, `ContactAddress`, `ContactPhone`, `ContactEmail`)
values('1','Huỳnh Tấn Thịnh','02 đường 4A, Mai Xuân Thưởng, Nha Trang','0368456123','httthinh1999@gmail.com');
insert into `contact`(`ContactID`,`ContactName`, `ContactAddress`, `ContactPhone`, `ContactEmail`)
values('2','Nguyễn Duy Đạt','02 đường 4A, Mai Xuân Thưởng, Nha Trang','0374589741','nguyenduydat@gmail.com');


-- --------------------------------------------------------
CREATE TABLE `catetory` (
  `CateID` int(11) NOT NULL,
  `CateName` varchar(300) NOT NULL,
  `CateAddress` varchar(500) NOT NULL,
  `CateContent` varchar(500) NOT NULL,
  `CateRent` decimal(10,0) NOT NULL,
  `CateStatus` bit(1) NOT NULL,
  `GroupCateID` int(11) NOT NULL,
   `ContactID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Cấu trúc bảng cho bảng `groupbds`
--

INSERT INTO `catetory` (`CateID`, `CateName`, `CateAddress`, `CateContent`, `CateRent`, `CateStatus`, `GroupCateID`,`ContactID`) VALUES
(1, 'Biệt thự NIOMON', '02, đường 4A, Mai Xuân Thưởng, Vĩnh Hải, Nha Trang, Khánh Hòa', 'Bán', '2000000000', b'1', 1,1),
(6, 'Văn phòng CopTiger', '03, đường 4A, Mai Xuân Thưởng, Vĩnh Hải, Nha Trang, Khánh Hòa', 'Thuê', '5000000', b'1', 3,2);

CREATE TABLE `groupbds` (
  `IDGroup` int(11) NOT NULL,
  `Groupname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `groupbds`
--

INSERT INTO `groupbds` (`IDGroup`, `Groupname`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `groupcatetory`
--

CREATE TABLE `groupcatetory` (
  `GroupCateID` int(11) NOT NULL,
  `GroupCateName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `groupcatetory`
--

INSERT INTO `groupcatetory` (`GroupCateID`, `GroupCateName`) VALUES
(1, 'Biệt thự'),
(2, 'Chung cư'),
(3, 'Văn phòng cho thuê');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `IDGroup` (`IDGroup`);

--
-- Chỉ mục cho bảng `cateimage`
--
ALTER TABLE `cateimage`
  ADD PRIMARY KEY (`CateImageID`),
  ADD KEY `CateID` (`CateID`);

--
-- Chỉ mục cho bảng `catetory`
--
ALTER TABLE `catetory`
  ADD PRIMARY KEY (`CateID`),
  ADD KEY `GroupCateID` (`GroupCateID`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Chỉ mục cho bảng `groupbds`
--
ALTER TABLE `groupbds`
  ADD PRIMARY KEY (`IDGroup`);

--
-- Chỉ mục cho bảng `groupcatetory`
--
ALTER TABLE `groupcatetory`
  ADD PRIMARY KEY (`GroupCateID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cateimage`
--
ALTER TABLE `cateimage`
  MODIFY `CateImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `catetory`
--
ALTER TABLE `catetory`
  MODIFY `CateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `groupbds`
--
ALTER TABLE `groupbds`
  MODIFY `IDGroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `groupcatetory`
--
ALTER TABLE `groupcatetory`
  MODIFY `GroupCateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`IDGroup`) REFERENCES `groupbds` (`IDGroup`);

--
-- Các ràng buộc cho bảng `cateimage`
--
ALTER TABLE `cateimage`
  ADD CONSTRAINT `cateimage_ibfk_1` FOREIGN KEY (`CateID`) REFERENCES `catetory` (`CateID`);


--
-- Các ràng buộc cho bảng `catetory`
ALTER TABLE `catetory`
  ADD CONSTRAINT `fk_catetory` FOREIGN KEY (`ContactID`) REFERENCES `contact` (`ContactID`);
  ALTER TABLE `catetory`
  ADD CONSTRAINT `fk_catetory1` FOREIGN KEY (`GroupCateID`) REFERENCES `groupcatetory` (`GroupCateID`);
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

select * from contact;