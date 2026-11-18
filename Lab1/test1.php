<?php
// 1. Sử dụng echo để in trực tiếp các thông tin
echo"Ho Ten: Nguyen Minh Kha <br>";
echo"Ngay sinh: 15/05/2007 <br>";
echo"Mssv: 2125110113 <br>";
// 2. Khai báo 4 biến và in giá trị bằng echo
$ht="Nguyen Minh Kha";
$ms="2125110113";
$ns="15/05/2007";
$sdt="0987654321";
// 3. Khai báo các hằng số kết nối CSDL và hiển thị
echo "Ho Ten:".$hoten ."<br>";
echo "Mssv:".$ms."<br>";
echo "Sdt:".$sdt."<br>";
echo "Ngay sinh:".$ns."<br>";

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: '" . PASSWORD . "'<br>";
// 4. Sự khác nhau giữa dấu nháy kép (" ") và dấu nháy đơn (' ')
echo "<h3>4. Phân biệt nháy kép và nháy đơn:</h3>";
$monHoc = "Lập trình Web 1";

// Dấu nháy kép: PHP tự động hiểu và thay thế giá trị của biến bên trong chuỗi
echo "Nháy kép: Chào mừng bạn đến với môn $monHoc <br>";

// Dấu nháy đơn: PHP coi toàn bộ là văn bản thuần túy, không giá trị biến
echo 'Nháy đơn: Chào mừng bạn đến với môn $monHoc <br>';
?>