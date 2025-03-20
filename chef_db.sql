DROP DATABASE IF EXISTS CHEF_DB;
CREATE DATABASE CHEF_DB
DEFAULT CHARACTER SET = 'utf8mb4';
/*-------------------------------*/
use CHEF_DB;
/*********************************/
/*********************************/
-- tạo bảng
/* tạo bảng phân loại sản phẩm */
create table loaisanpham (
	maLSP varchar(10) not null primary key,
    tenLSP varchar(100) not null
);
/*********************************/
/* tạo bảng sản phẩm */
create table sanpham (
	maSP varchar(10) not null primary key,
    tenSP varchar(255) not null,
    soluong INT unsigned not null default 1,
    gia BIGINT not null,
    hinhanh varchar(255) not null,
    maLSP varchar(10) not null,
    mota varchar(4000) default null,
    CONSTRAINT fk_sanpham FOREIGN KEY (maLSP) REFERENCES loaisanpham(maLSP)
);
/*********************************/
/* tạo bảng chức năng */
create table chucnang (
	maCN varchar(10) not null primary key,
    tenCN varchar(100) not null
);
/*********************************/
/* tạo bảng quyền */
create table quyen (
	maQuyen varchar(10) not null primary key,
    tenQuyen varchar(100) not null
);
/*********************************/
/* tạo bảng chi tiết quyền - chức năng */
create table chitietQCN (
	idQCN INT not null auto_increment primary key,
	maQuyen varchar(10) not null,
    maCN varchar(10) not null ,
    xem tinyint NOT NULL DEFAULT 0,
    sua tinyint NOT NULL DEFAULT 0,
    xoa tinyint NOT NULL DEFAULT 0,
    CONSTRAINT fk_chitietQCN_1 FOREIGN KEY (maQuyen) REFERENCES quyen(maQuyen),
    CONSTRAINT fk_chitietQCN_2 FOREIGN KEY (maCN) REFERENCES chucnang(maCN)
);
/*********************************/
/* tạo bảng nhân viên */
create table nhanvien (
	maNV varchar(10) not null primary key,
    tenNV varchar(100) not null,
    sodienthoai varchar(11) not null,
    email varchar(50) not null
);
/*********************************/
/* tạo bảng tài khoản */
create table taikhoan (
	maTK varchar(10) not null primary key,
    tendangnhap varchar(50) not null,
    matkhau varchar(10) not null,
    maQuyen varchar(10) not null,
    maNV varchar(10) not null,
	CONSTRAINT fk_taikhoan_1  FOREIGN KEY (maQuyen) REFERENCES quyen(maQuyen),
    CONSTRAINT fk_taikhoan_2  FOREIGN KEY ( maNV) REFERENCES nhanvien( maNV)
);
/*********************************/
/* tạo bảng khách hàng */
create table khachhang (
	maKH varchar(10) not null primary key,
    tenKH varchar(100) not null,
    email varchar(50) not null,
    matkhau varchar(10) not null,
    sodienthoai varchar(11) not null,
    diachi varchar(255) default null,
	ngaytaoTK TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
/*********************************/

/*********************************/
/* tạo bảng danh mục món ăn*/
create table danhmucmonan (
	maDM INT not null auto_increment PRIMARY KEY,
    tenDM varchar(100) not null
);
/*********************************/
/* tạo bảng bài đăng món ăn */
create table baidangmonan (
	maBD INT not null auto_increment PRIMARY KEY,
    tenBD varchar(255) not null,
    hinhanh varchar(255) ,
    mota varchar(4000) ,
    nguyenlieu varchar(4000) ,
    duongdan varchar(255) ,
    maNV varchar(10) not null,
    maDM INT not null,
    CONSTRAINT fk_baidangmonan_1 FOREIGN KEY (maDM) REFERENCES danhmucmonan (maDM),
     CONSTRAINT fk_baidangmonan_2 FOREIGN KEY (maNV) REFERENCES nhanvien(maNV)
);
/*********************************/
/* tạo bảng hóa đơn */
CREATE TABLE hoadon (
    maHD varchar(10) not null PRIMARY KEY,
    tinhtrangDH VARCHAR(50) NOT NULL,
    ngaytao DATE NOT NULL,
    tongtien DECIMAL(18,2) NOT NULL DEFAULT 0,
    maNV varchar(10) not null,
    maKH varchar(10) not null,
    CONSTRAINT fk_hoadon_1 FOREIGN KEY  (maNV) REFERENCES nhanvien( maNV),
    CONSTRAINT fk_hoadon_2 FOREIGN KEY (maKH) REFERENCES khachhang( maKH)
);
/*********************************/
-- Bảng Chi Tiết Hóa Đơn
CREATE TABLE chitiethoadon (
	maCTHD INT UNSIGNED AUTO_INCREMENT not null PRIMARY KEY,
    maHD varchar(10) NOT NULL,
    maSP varchar(10) NOT NULL,
    soluong INT UNSIGNED NOT NULL DEFAULT 1,
    dongia BIGINT NOT NULL,
    CONSTRAINT fk_chitiethoadon_1 FOREIGN KEY  ( maHD) REFERENCES hoadon(maHD),
    CONSTRAINT fk_chitiethoadon_2 FOREIGN KEY (maSP) REFERENCES sanpham( maSP)
);
/*********************************/
-- Bảng NCC (Nhà Cung Cấp)
CREATE TABLE nhacungcap (
    maNCC varchar(10) not null PRIMARY KEY,
    tenNCC VARCHAR(255) NOT NULL,
    email varchar(50) not null,
    sodienthoai varchar(11) not null,
    diachi varchar(4000) not null
);
/*********************************/
-- Bảng Phiếu Nhập
CREATE TABLE phieunhap (
    maPN varchar(10) not null PRIMARY KEY,
    ngaynhap DATE NOT NULL,
    tongtien BIGINT NOT NULL DEFAULT 0,
    maNCC varchar(10) not null,
    maNV varchar(10) not null,
    CONSTRAINT fk_phieunhap_1 FOREIGN KEY  (maNV) REFERENCES nhanvien( maNV),
    CONSTRAINT fk_phieunhap_2 FOREIGN KEY (maNCC) REFERENCES nhacungcap( maNCC)
);
/*********************************/
-- Bảng Chi Tiết Phiếu Nhập
CREATE TABLE chitietphieunhap (
	maCTPN  INT UNSIGNED AUTO_INCREMENT not null PRIMARY KEY,
    maPN varchar(10) NOT NULL,
    maSP varchar(10) NOT NULL,
    soluong INT UNSIGNED NOT NULL DEFAULT 1,
    dongia BIGINT NOT NULL,
	CONSTRAINT fk_chitietphieunhap_1 FOREIGN KEY  ( maPN) REFERENCES phieunhap(maPN),
    CONSTRAINT fk_chitietphieunhap_2 FOREIGN KEY (maSP) REFERENCES sanpham( maSP)
);


-- ------------------------------------------
/* ĐỔ DỮ LIỆU */
INSERT INTO loaisanpham(maLSP, tenLSP) VALUES
('GV001', 'Gia vị tự nhiên'),
('GV002', 'Sốt chấm'),
('GV003', 'Sa tế'),
('GV004', 'Gia vị nấu và ướp'),
('DC001', 'Nồi'),
('DC002', 'Chảo'),
('DC003', 'Bếp'),
('DC004', 'Chén'),
('DC005', 'Ly'),
('DC006', 'Đĩa');

INSERT INTO sanpham(maSP, tenSP, maLSP, soluong, gia, hinhanh, mota) VALUES
('SP001', 'Màu dầu điều', 'GV001', 10, 56000, 'mau_dau_dieu.png', ''),
('SP003', 'Chảo inox cao cấp 26cm', 'DC002', 2, 800000, 'chao-inox-26cm.png', ''),
('SP002', 'Chảo chiên chống dính Tefal cao cấp 24cm', 'DC002', 2, 1500000, 'chao-chien-tefal-24cm.png', ''),
('SP004', 'Bát thủy tinh cao cấp 12cm', 'DC004', 10, 65000, 'chen-12cm.png', ''),
('SP005', 'Bộ 6 ly rượu vang thủy tinh cao cấp', 'DC005', 5, 1086000, 'bo-6-ly-ruou-vang-62cl.png', ''),
('SP007', 'Sốt xoài chấm ', 'GV002', 4, 60000, 'sot-xoai-200g.png', ''),
('SP008', 'Sốt thơm chấm ', 'GV002', 4, 60000, 'sot-thom-200g.png', ''),
('SP009', 'Sốt cam chấm ', 'GV002', 4, 60000, 'sot-cam-200g.png', ''),
('SP010', 'Sa tế tôm ', 'GV003', 7, 65000, 'Sa_te_Tom_100g.png', ''),
('SP011', 'Sa tế Hội An ', 'GV003', 7, 65000, 'Sa_te_Hoi_An_100g.png', ''),
('SP012', 'Sa tế chay ', 'GV003', 7, 65000, 'Sa_te_Chay_100g.png', ''),
('SP013', 'Gia vị Hạt mắc khén ', 'GV001', 10, 56000, 'NATURAL_Hat_Mac_khen_15g.png', ''),
('SP014', 'Gia vị Muối Himalaya Tiêu chín Phú Quốc Lá chanh ', 'GV001', 10, 56000, 'NATURAL_MUOI_HIMALAYA_Tieu_chin_PQ_la_chanh_70g.png', ''),
('SP015', 'Gia vị Nấu bò kho ', 'GV004', 4, 100000, 'GV-nau-Bo_kho_10g.png', ''),
('SP016', 'Gia vị Nấu bún bò Huế ', 'GV004', 4, 100000, 'GV-nau-bun-bo-hue.png', ''),
('SP017', 'Gia vị Ướp thịt chẩm chéo ', 'GV004', 4, 100000, 'GV-uop_Cham_cheo_10g.png', ''),
('SP018', 'Gia vị Ướp thịt mắc mật ', 'GV004', 4, 100000, 'GV-uop_Mac_mat_10g.png', ''),
('SP019', 'Nồi chiên không dầu Philips 4.2L ', 'DC001', 2, 5000000, 'bep-chien-khong-dau-4L2.png', ''),
('SP020', 'Bếp vỉ nướng bằng điện thiết kế sang trọng cao cấp ', 'DC003', 2, 3990000, 'bep-vi-nuong-dien-1600W.png', ''),
('SP021', 'Chén thủy tinh cannes cao cấp 12cm ', 'DC004', 20, 72000, 'chen-cannes-12cm.png', ''),
('SP022', 'Dĩa nông lòng thủy tinh cao cấp 19cm ', 'DC006', 17, 89000, 'dia-nong-19cm.png', ''),
('SP023', 'Dĩa sâu lòng thủy tinh cao cấp 20cm ', 'DC006', 10, 89000, 'dia-sau-20cm.png', ''),
('SP024', 'Dĩa nông lòng thủy tinh cao cấp 25cm ', 'DC006', 10, 95000, 'dia-nong-25cm.png', ''),
('SP025', 'Ly thủy tinh uống nước cao cấp thiết kế đơn giản ', 'DC005', 10, 45000, 'ly-thuy-tinh.png', '');

INSERT INTO quyen(maQuyen, tenQuyen) VALUES
('Q1', 'Admin'),
('Q2', 'Quản lý'),
('Q3', 'Nhân viên');

INSERT INTO chucnang(maCN, tenCN) VALUES
('CN1', 'Quản lý sản phẩm'),
('CN2', 'Quản lý nhân viên'),
('CN3', 'Quản lý khách hàng'),
('CN4', 'Quản lý bài đăng món ăn'),
('CN5', 'Quản lý tài khoản'),
('CN6', 'Quản lý phiếu nhập'),
('CN7', 'Quản lý hóa đơn'),
('CN8', 'Quản lý quyền'),
('CN9', 'Quản lý loại sản phẩm'),
('CN10', 'Quản lý loại món ăn');

INSERT INTO chitietQCN (maQuyen, maCN, xem, sua, xoa) VALUES
('Q1','CN1', 1, 1, 1),
('Q1','CN2', 1, 1, 1),
('Q1','CN3', 1, 1, 1),
('Q1','CN4', 1, 1, 1),
('Q1','CN5', 1, 1, 1),
('Q1','CN6', 1, 1, 1),
('Q1','CN7', 1, 1, 1),
('Q1','CN8', 1, 1, 1),
('Q1','CN9', 1, 1, 1),
('Q1','CN10', 1, 1, 1),
('Q2','CN1', 1, 1, 1),
('Q2','CN2', 1, 1, 1),
('Q2','CN3', 1, 1, 1),
('Q2','CN4', 1, 1, 1),
('Q2','CN5', 1, 1, 0),
('Q2','CN6', 1, 1, 1),
('Q2','CN7', 1, 1, 1),
('Q2','CN8', 0, 0, 0),
('Q2','CN9', 1, 1, 1),
('Q2','CN10', 1, 1, 1),
('Q3','CN1', 1, 1, 0),
('Q3','CN2', 0, 0, 0),
('Q3','CN3', 1, 1, 0),
('Q3','CN4', 1, 1, 1),
('Q3','CN5', 1, 0, 0),
('Q3','CN6', 1, 1, 0),
('Q3','CN7', 1, 1, 0),
('Q3','CN8', 0, 0, 0),
('Q3','CN9', 1, 0, 0),
('Q3','CN10', 1, 0, 0);

INSERT INTO nhanvien (maNV, tenNV, sodienthoai, email) VALUES
('NV001', 'Admin', '0923456789', 'admin@gmail.com'),
('NV002', 'Nguyễn Văn Anh', '0934567890', 'vananh@gmail.com'),
('NV003', 'Lương Anh Thy', '098787765', 'thy@gmail.com'),
('NV004', 'Hoàng Gia Bảo', '0909675681', 'bao@gmail.com'),
('NV005', 'Võ Xuân Nay', '0908456456', 'xuannay@gmail.com');

INSERT INTO taikhoan (maTK, tendangnhap, matkhau, maQuyen, maNV) VALUES
('TK001', 'admin', 'admin', 'Q1', 'NV001'),
('TK002', 'quanly-vananh', 'vananh', 'Q2', 'NV002'),
('TK003', 'quanly-anhthy', 'anhthy', 'Q2', 'NV003'),
('TK004', 'nhanvien-giabao', 'giabao', 'Q3', 'NV004'),
('TK005', 'nhanvien-xuannay', 'xuannay', 'Q3', 'NV005');

INSERT INTO khachhang (maKH, tenKH, email, matkhau, sodienthoai, diachi) VALUES
('KH001', 'Võ Xuân Mai', 'voxuanmai@gmail.com', 'maicute','0901234567', 'TP.HCM'),
('KH002', 'Trần Văn Đan', 'dantran@gmail.com', 'dantran', '0912345678', 'TP.HCM'),
('KH003', 'Nguyễn Xuân An','xuanan@gmail.com', 'xuanan', '036381898', 'TP.HCM');



INSERT INTO danhmucmonan(tenDM) VALUES
( 'Món khai vị'),
( 'Món chính'),
('Món tráng miệng'),
( 'Đồ uống');

INSERT INTO baidangmonan (tenBD, hinhanh, mota, nguyenlieu, duongdan, maNV, maDM) VALUES
('Bún bò Huế', 'bun-bo-hue.jpg', 'Món ăn đặc trưng của Huế với nước dùng đậm đà', 'Bún, thịt bò, giò heo, sả, ớt, chanh', NULL, 'NV001', 2),
('Bánh xèo miền Trung', 'banhxeomientrung.jpg', 'Món ăn đặc trưng của người dân miền Trung, ăn kèm với rau sống', 'Bột làm bánh xèo, giá, thịt heo, rau sống', NULL, 'NV002', 2),
('Cơm chiên dương châu', 'com-chien-duong-chau.jpg', 'Món ăn được tất cả mọi người ở mọi lứa tuổi đều yêu thích', 'Cơm, cà rốt, xúc xích, đậu cô ve, hành lá', NULL, 'NV002', 2),
('Trà tắc xí muội', 'tra-tac-xi-muoi.jpg', 'Thức uống giải khát dễ làm với những nguyên liệu đơn giản', 'Trà, tắc, xí muội, đá', NULL, 'NV002', 4);


INSERT INTO nhacungcap(maNCC, tenNCC, email, sodienthoai, diachi) VALUES
('NCC1', 'Homechef - Đồ bếp tốt', 'homechef_company@gmail.com', '0909800800', 'số 7 đường số 7 phường 7 quận 7 tp.hcm'),
('NCC2', 'Công ty Cổ phần Dh Foods', 'dh_foods@gmail.com', '02835102267', 'số 6 đường số 6 phường 6 quận 6 tp.hcm');


INSERT INTO phieunhap(maPN, ngaynhap, tongtien, maNCC, maNV) VALUES
('PN1', '2024-01-25', 925000 ,'NCC1','NV002'),
('PN2', '2024-02-25', 10000000 ,'NCC1','NV002'),
('PN3', '2024-03-25', 780000 ,'NCC2','NV003'),
('PN4', '2024-04-10', 4858000 ,'NCC1','NV002'),
('PN5', '2024-04-25', 363000 ,'NCC1','NV003');

INSERT INTO chitietphieunhap(maPN, maSP, soluong, dongia) VALUES
('PN1', 'SP025', 10, 45000),
('PN1', 'SP024', 5, 95000),
('PN2', 'SP019', 2, 5000000),
('PN3', 'SP013', 5, 56000),
('PN3', 'SP017', 5, 100000),
('PN4', 'SP003', 2, 800000),
('PN4', 'SP005', 3, 1086000),
('PN5', 'SP001', 3, 56000),
('PN5', 'SP012', 3, 65000);

INSERT INTO hoadon(maHD, tinhtrangDH, ngaytao, tongtien, maNV, maKH) VALUES
('HD1', 'Giao thành công', '2024-12-10', 425000, 'NV003', 'KH001' ),
('HD2', 'Giao thành công', '2024-12-11', 245000, 'NV003', 'KH002' ),
('HD3', 'Đã vận chuyển', '2024-12-11', 3990000, 'NV003', 'KH003' ),
('HD4', 'Chờ xử lý', '2024-12-24', 5000000, 'NV003', 'KH001' ),
('HD5', 'Giao thành công', '2025-01-10', 156000, 'NV003', 'KH003' );


INSERT INTO chitiethoadon(maHD, maSP, soluong, dongia) VALUES
('HD1', 'SP004', 5, 65000),
('HD1', 'SP015', 1, 100000),
('HD2', 'SP010', 1, 65000),
('HD2', 'SP007', 3, 60000),
('HD3', 'SP020', 1, 3990000),
('HD4', 'SP019', 1, 5000000),
('HD5', 'SP016', 1, 100000),
('HD5', 'SP001', 1, 56000);




