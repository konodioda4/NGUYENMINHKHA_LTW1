<?php
// 1. Sử dụng trim() loại bỏ khoảng trắng đầu và cuối chuỗi
echo "<h3>1. Hàm trim():</h3>";
$chuoiKhoangTrang = "   Xin chào sinh viên lớp Lập trình Web 1   ";
echo "Chuỗi gốc: '<pre style='display:inline;'>$chuoiKhoangTrang</pre>'<br>";
echo "Sau khi trim(): '<pre style='display:inline;'>" . trim($chuoiKhoangTrang) . "</pre>'<br>";

// 2. Loại bỏ khoảng trắng bên trái (ltrim) và bên phải (rtrim)
echo "<h3>2. Hàm ltrim() và rtrim():</h3>";
echo "Sau khi ltrim() (xóa trái): '<pre style='display:inline;'>" . ltrim($chuoiKhoangTrang) . "</pre>'<br>";
echo "Sau khi rtrim() (xóa phải): '<pre style='display:inline;'>" . rtrim($chuoiKhoangTrang) . "</pre>'<br>";

// 3. Cắt chuỗi với substr()
echo "<h3>3. Cắt chuỗi substr():</h3>";
$chuoiDai = "Lap trinh ung dung Web voi PHP va MySQL co ban"; // Chuỗi không dấu > 30 ký tự để cắt chuẩn từng byte
echo "Chuỗi gốc: $chuoiDai <br>";
echo "10 ký tự đầu tiên: " . substr($chuoiDai, 0, 10) . "<br>";
echo "Từ ký tự thứ 5 đến hết chuỗi: " . substr($chuoiDai, 4) . "<br>";

// 4. Thay thế chuỗi với str_replace()
echo "<h3>4. Thay thế chuỗi str_replace():</h3>";
$chuoiGoc = "Mon hoc Lap trinh Web 1 su dung ngon ngu Java de xay dung website.";
$chuoiMoi = str_replace("Java", "PHP", $chuoiGoc);
echo "Chuỗi ban đầu: $chuoiGoc <br>";
echo "Chuỗi sau khi thay thế: $chuoiMoi <br>";
?>
