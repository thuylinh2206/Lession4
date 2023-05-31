<!DOCTYPE html>
<html>
    <body>
        <h1>
            BÀI 4
        </h1>
    </body>
<?php echo "Câu 1: ";
//Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "$number là số chẵn.";
    } else {
        return "$number là số lẻ.";
    }
}

// Sử dụng hàm để kiểm tra số
$number = 12;
echo checkEvenOdd($number);
?>
<br/>
<?php echo "Câu 2: ";
/*Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%)
Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc".
Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi"
Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá"
Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu"*/
function calculateAverage($midtermScore, $finalScore) {
    $average = ($midtermScore * 0.3) + ($finalScore * 0.7);
    
    if ($average >= 9.0) {
        return "Xuất sắc";
    } elseif ($average >= 7.0) {
        return "Tốt";
    } elseif ($average >= 5.0) {
        return "Khá";
    } else {
        return "Trung bình - Yếu";
    }
}


$midtermScore = 8.5;
$finalScore = 7.0;
echo calculateAverage($midtermScore, $finalScore);
?>
<br/>
<?php echo "Câu 3: ";
//Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
function checkEvenOddYear($year) {
    if ($year % 2 == 0) {
        return "chắn";
    } else {
        return "lẻ";
    }
}

$currentYear = date("Y");
$result = checkEvenOddYear($currentYear);
echo "Năm nay là năm $currentYear, là năm $result.";
?>
<br/>
<?php echo "Câu 4: ";
//Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
function printNumbers() {
    for ($i = 1; $i <= 100; $i++) {
        echo $i . " ";
    }
}
printNumbers();
?>
<br/>
<?php echo "Câu 5: ";
//Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
function printNumbers2() {
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo "<b>$i</b> ";
        } else {
            echo "$i ";
        }
    }
}
printNumbers2();
?>
<br/>
<?php echo "Câu 6: ";
/*Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);*/
function printYears($years) {
    foreach ($years as $year) {
        echo $year . " ";
    }
}
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
printYears($nam);
?>
</html>