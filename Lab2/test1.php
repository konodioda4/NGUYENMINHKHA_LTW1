<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test 1</title>
</head>
<style>
*{
    margin : 0;
    padding: 0;
    box-sizing:border-box;
}
nav{
    background:rgb(4,40,94);
}
nav ul{
    list-style:none;
    display:flex;

}
nav li{
    flex:1;
}
nav a{
    color :white;
    text-decoration:none;
    font-weight:bold;
    display:block;
    padding:15px;
    text-align:center;

}
nav ul li:hover{
    background: #084298;
}
body{
    padding: 20px;
}
.s1{
    max-width:500px;
    margin: auto;
    background: #fff;
    padding:20px;
    border-radius:8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}
.s1 h3{
text-align: center;
color:blue;
margin-bottom:20px;
}
.s1 ul{
    list-style:none;
}
.s1 li{
padding :12px;
margin-bottom : 10px; 
background:#e7f1ff;  
border-left:5px solid #0d6efd;
border-radius: 5px;
transition: .3s;
}
.s1 li:hover{
background:#cfe2ff;
transform: translateX(5px);
}
.s2{
    max-width:900px;
    margin: auto;
    background: #fff;
    padding:20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}
.s2 h3{
text-align: left;
color:black;
margin-bottom:20px;
}

.s2 th{
background: #1670f5;
color: white;
padding: 5px;
border: 1px solid #ddd;  
transition: .3s;
}
.s2  table {
width: 100%;
border-collapse: collapse;
text-align: center;
font-size: 12px;
}
.s2 td {
padding: 5px;
border: 1px solid #ddd;
}

.s2 tbody tr:nth-child(even){ 
background-color: #d9e9ff;}
.s2 tbody tr:nth-child(odd){ 
background-color: #f5f6f7;}
.s2 table tr:hover{
background: blue;

}
</style>
<!--Tao menu-->
<?php $menus=["Trang chủ","Tin tức","Liên hệ","Giới thiệu"]; ?>
<?php $subjects=["HTML", "CSS", "JavaScript", "PHP", "MySQL"];?>
<?php $students = [[
"id" => "SV001",
"name" => "Nguyễn Văn An",
"gender" => "Nam",
"class" => "CNTT1"
],[
"id" => "SV002",
"name" => "Trần Thị Bình",
"gender" => "Nữ",
"class" => "CNTT2"
],[
"id" => "SV003",
"name" => "Nguyễn Văn An",
"gender" => "Nam",
"class" => "CNTT1"
],[
"id" => "SV004",
"name" => "Trần Thị Bình",
"gender" => "Nữ",
"class" => "CNTT2"
]]?>
$faculties = [
"Công nghệ thông tin",
"Quản trị kinh doanh",
"Kế toán",
"Ngôn ngữ Anh"
];<?php $faculties = [
"Công nghệ thông tin",
"Quản trị kinh doanh",
"Kế toán",
"Ngôn ngữ Anh"
];?>
<?php $classes = [
"A1" => "CNTT1",
"A2" => "CNTT2",
"A3" => "CNTT3",
"A4" => "CNTT4"
];?>
<?php $genders = ["Nam", "Nữ", "Khác"];?>
<?php $hobbies = [
"LT" => "Lập trình",
"DS" => "Đọc sách",
"AN" => "Âm nhạc",
"DL" => "Du lịch",
"TT" => "Thể thao"
];?>
<body>

    <!--Menu-->
    <nav>
        <ul>
            <?php foreach ($menus as $menu){?>
            <li>
                <a href =#><?=$menu?></a>
            </li>
            <?php } ?>
        </ul>
    </nav>
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dụng trong môn học </h3>
        <ul>
    <!--Hiển thị dữ liệu -->
        <?php foreach($subjects as $subject){ 
            echo "<li>$subject</li>";}?>
        </ul>
    </section>
    <section class="s2">
        <h3>Danh sách sinh viên</h3>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ và tên</th>
                <th>Giới tính</th>
                <th>Lớp</th>
            </tr>
            <?php
            foreach($students as $index => $student){  ?>
            <tr>
                <td><?=$index +1 ?></td>
                <td><?=$student["id"]?></td>
                <td><?=$student["name"]?></td>
                <td><?=$student["gender"]?></td>
                <td><?=$student["class"]?></td>
            <?php } ?>
            </tr>
        </table>
    </section>
    <section class="s3">
        <h3>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h3>
        <form action="#" method="post">
            <div>
                <label>Họ và tên</label>
                <!-- input -->
            </div>
            <div>
                <label>Khoa</label>
                <!-- select -->
            </div>
            <div>
                <label>Lớp</label>
                <!-- select -->
            </div>
            <div>
                <label>Giới tính</label>
                <!-- radio -->
            </div>
            <div>
                <label>Sở thích</label>
                    <!-- checkbox -->
            </div>
            <div>
                    <!-- submit -->
                    <!-- reset -->
            </div>
        </form>
    </section>
    <select name="faculty">
        <?php foreach ($faculties as $faculty) { ?>
            <option><?= $faculty ?></option>
        <?php } ?>
    </select>
    <select name="class">
        <?php foreach ($classes as $key => $class) { ?>
            <option value="<?= $key ?>">
        <?= $class ?>
            </option>
        <?php } ?>
    </select>
    <?php foreach ($genders as $gender) { ?>
        <label>
            <input type="radio" name="gender"
                value="<?= $gender ?>">
            <?= $gender ?>
        </label>
    <?php } ?>
</body>
</html>