A
SELECT * FROM baiviet JOIN theloai ON baiviet.ma_tloai=theloai.ma_tloai WHERE theloai.ten_tloai = 'Nhạc trữ tình';
B
SELECT * FROM baiviet JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia WHERE tacgia.ten_tgia = "Nhacvietplus";
C
SELECT * FROM theloai WHERE ma_tloai NOT IN( SELECT ma_tloai FROM baiviet)
D
SELECT ma_bviet,tieude,ten_bhat,ten_tgia,ten_tloai,ngayviet FROM baiviet JOIN tacgia ON baiviet.ma_tgia= tacgia.ma_tgia LEFT JOIN theloai ON baiviet.ma_tloai= theloai.ma_tloai
E
SELECT ten_tloai FROM theloai INNER JOIN baiviet ON baiviet.ma_tloai= theloai.ma_tloai GROUP BY baiviet.ma_tloai ORDER BY COUNT(baiviet.ma_tloai) DESC LIMIT 1;
F
SELECT ten_tgia FROM tacgia INNER JOIN baiviet ON baiviet.ma_tgia= tacgia.ma_tgia GROUP BY tacgia.ma_tgia ORDER BY COUNT(baiviet.ma_tgia) DESC LIMIT 2;
G
SELECT * FROM baiviet WHERE ten_bhat LIKE'%yêu%' OR ten_bhat LIKE '%thương%' OR ten_bhat LIKE '%anh%'
H
SELECT * FROM baiviet WHERE ten_bhat LIKE'%yêu%' OR tieude LIKE'%yêu%' OR ten_bhat LIKE '%thương%' OR tieude LIKE'%thương%' OR ten_bhat LIKE '%anh%' OR tieude LIKE'%anh%'
I 
CREATE VIEW vw_Music as SELECT ma_bviet,tieude,ten_bhat,ten_tgia,ten_tloai,ngayviet FROM baiviet JOIN tacgia ON baiviet.ma_tgia= tacgia.ma_tgia LEFT JOIN theloai ON baiviet.ma_tloai= theloai.ma_tloai
L
CREATE TABLE `nguoidung` (
  `ma_ndung` int(10) UNSIGNED NOT NULL,
  `ten_ndung` varchar(100) DEFAULT NULL,
  `mat_khau` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `nguoidung` (`ma_ndung`, `ten_ndung`, `mat_khau`) VALUES
(1, 'loan', '123456'),
(2, 'quynh', '654321'),
(3, 'ngoc', '131517'),
(4, 'lan', '141618');