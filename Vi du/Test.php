<?php

$students = array(
    array("Tên" => "Phúc", "Tuổi" => 20, "Điểm" => 78),

    array("Tên" => "Đức", "Tuổi" => 19, "Điểm" => 70),
        
    array("Tên" => "Giáp", "Tuổi" => 19, "Điểm" => 37),

    array("Tên" => "Hùng", "Tuổi" => "20", "Điểm" => 29),
);

foreach ($students as $student) {
    if ($student["Điểm"] < 40) {
        $kếtquả = "trượt";
    } else {
        $kếtquả = "đỗ";
    }

    echo "Tên: " . $student["Tên"] . ", Tuổi: " . $student["Tuổi"] . ", Điểm: " . $student["Điểm"] . ", Kết quả: " . $kếtquả . "<br>";
}
?>
