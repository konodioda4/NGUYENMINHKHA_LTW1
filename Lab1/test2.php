<?php
// 1. Khai báo hai số nguyên và thực hiện 5 phép toán cơ bản
echo "<h3>1. Các phép toán số học:</h3>";
$a = 15;
$b = 4;
echo "a = $a, b = $b <br>";
echo "Cộng: " . ($a + $b) . "<br>";
echo "Trừ: " . ($a - $b) . "<br>";
echo "Nhân: " . ($a * $b) . "<br>";
echo "Chia: " . ($a / $b) . "<br>";
echo "Chia lấy dư: " . ($a % $b) . "<br>";

// 2. So sánh số nguyên (int) và chuỗi số (string)
echo "<h3>2. Toán tử so sánh:</h3>";
$soNguyen = 10;
$chuoiSo = "10";

echo "So sánh == : "; var_dump($soNguyen == $chuoiSo); echo "<br>";
echo "So sánh === : "; var_dump($soNguyen === $chuoiSo); echo "<br>";
echo "So sánh != : "; var_dump($soNguyen != $chuoiSo); echo "<br>";
echo "So sánh <> : "; var_dump($soNguyen <> $chuoiSo); echo "<br>";
echo "So sánh !== : "; var_dump($soNguyen !== $chuoiSo); echo "<br>";

/*
   Sự khác nhau:
   - ==, !=, <> : Chỉ so sánh GIÁ TRỊ sau khi tự động ép kiểu (10 == "10" là true).
   - ===, !== : So sánh cả GIÁ TRỊ và KIỂU DỮ LIỆU (10 === "10" là false vì khác kiểu int và string).
*/
// 3. Phép tăng trước (++$x) và tăng sau ($x++)
echo "<h3>3. Toán tử tăng trước và tăng sau:</h3>";
$x = 5;
echo "Giá trị ban đầu x = $x <br>";
echo "Khi chạy ++\$x: " . (++$x) . " | Giá trị x sau đó: $x <br>";

$y = 5;
echo "Giá trị ban đầu y = $y <br>";
echo "Khi chạy \$y++: " . ($y++) . " | Giá trị y sau đó: $y <br>";
/*
   Sự khác nhau:
   - ++$x (Tăng trước): Cộng 1 vào biến trước, sau đó mới trả về giá trị mới để sử dụng.
   - $x++ (Tăng sau): Trả về giá trị hiện tại để sử dụng trước, sau đó mới cộng 1 vào biến.
*/

// 4. Nối chuỗi bằng toán tử . và .=
echo "<h3>4. Nối chuỗi với . và .= :</h3>";
$str1 = "Xin chào ";
$str2 = "Việt Nam";
$ketQua = $str1 . $str2; // Nối hai chuỗi và gán vào biến mới
echo "Dùng toán tử (.): $ketQua <br>";

$str1 .= $str2; // Nối thêm $str2 trực tiếp vào cuối biến $str1
echo "Dùng toán tử (.=): $str1 <br>";
/*
   Sự khác nhau:
   - Toán tử (.) ghép các chuỗi lại để tạo ra một giá trị mới, không làm thay đổi biến gốc.
   - Toán tử (.=) nối thêm chuỗi vào biến bên trái và lưu đè kết quả vào chính biến đó.
*/

// 5. Đếm ký tự bằng strlen() và mb_strlen()
echo "<h3>5. Đếm độ dài chuỗi:</h3>";
$khongDau = "Lap trinh web";
$coDau = "Lập trình web";

echo "Chuỗi không dấu '$khongDau' - strlen(): " . strlen($khongDau) . "<br>";
echo "Chuỗi có dấu '$coDau' - strlen(): " . strlen($coDau) . " (đếm sai vì tính theo byte) <br>";
echo "Chuỗi có dấu '$coDau' - mb_strlen(): " . mb_strlen($coDau, "UTF-8") . "<br>";
/*
   Sự khác nhau:
   - strlen() đếm số BYTE của chuỗi (ký tự tiếng Việt có dấu UTF-8 chiếm 2-3 bytes nên đếm bị dư).
   - mb_strlen() đếm chính xác số KÝ TỰ đa byte (hỗ trợ tiếng Việt có dấu chuẩn xác).
*/

// 6. Chuyển chữ in hoa và chữ thường
echo "<h3>6. Chuyển đổi chữ hoa / chữ thường:</h3>";
$vanBan = "Hoc PHP Co Ban";
echo "In hoa (strtoupper): " . strtoupper($vanBan) . "<br>";
echo "In thường (strtolower): " . strtolower($vanBan) . "<br>";
/*
   Sự khác nhau:
   - strtoupper() và strtolower() chỉ chuyển đổi chuẩn các ký tự tiếng Anh (ASCII), dễ bị lỗi font với chữ có dấu.
   - mb_strtoupper() và mb_strtolower() hỗ trợ chuyển đổi chữ hoa/thường chính xác cho tiếng Việt có dấu (UTF-8).
*/

// 7. Ép kiểu chuỗi về int và kiểm tra bằng var_dump()
echo "<h3>7. Ép kiểu chuỗi sang int:</h3>";
$chuoi1 = "123 abc";
$chuoi2 = "abc 123";

$epKieu1 = (int)$chuoi1;
$epKieu2 = (int)$chuoi2;

echo "Ép kiểu '123 abc': "; var_dump($epKieu1); echo "<br>"; // Kết quả: int(123)
echo "Ép kiểu 'abc 123': "; var_dump($epKieu2); echo "<br>"; // Kết quả: int(0)

// 8. Khai báo các kiểu dữ liệu cơ bản và dùng var_dump()
echo "<h3>8. Kiểm tra kiểu dữ liệu với var_dump():</h3>";
$bienInt = 2026;
$bienFloat = 9.5;
$bienString = "PHP & MySQL";
$bienBool = true;

var_dump($bienInt); echo "<br>";
var_dump($bienFloat); echo "<br>";
var_dump($bienString); echo "<br>";
var_dump($bienBool); echo "<br>";
?>
