<!-- Câu 1. Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ? -->
<?php
function checkNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number không là số chẵn.";
    }
}
$number = 4; 
checkNumber($number);
?>

<!-- Câu 2. Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ. -->
<?php
function averageScore($middleScore, $finalScore)
{
    $average = ($middleScore * 0.3) + ($finalScore * 0.7);
    return $average;
}
function academicRanking($average)
{
    if ($average >= 9.0) {
        return "Xuất sắc";
    } elseif ($average >= 7.0 && $average < 9.0) {
        return "Giỏi";
    } elseif ($average >= 5.0 && $average < 7.0) {
        return "Khá";
    } else {
        return "Trung bình - Yếu";
    }
}
// Điểm thi giữa kỳ và điểm thi cuối kỳ
$middleScore = 9.5;
$finalScore = 10;
// Tính điểm trung bình
$average = averageScore($middleScore, $finalScore);
// Xếp hạng học lực
$academicRank = academicRanking($average);
echo "Điểm trung bình: " . number_format($average, 1) . "<br>";
echo "Hạng học lực: " . $academicRank;
?>

<!-- Câu 3. Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ. -->
<?php
function checkYear($year) {
  if ($year % 2 == 0) {
    echo $year . " là năm chẵn";
  } else {
    echo $year . " là năm lẻ";
  }
}

// Sử dụng hàm checkYear để kiểm tra năm hiện tại
$currentYear = date("2023");
checkYear($currentYear);
?>


<!-- Câu 4. Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100. -->
<?php
function printNumbers() {
  for ($i = 1; $i <= 100; $i++) {
    echo $i . "<br>";
  }
}
printNumbers();
?>

<!-- Câu 5. Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %. -->
<?php
function printNumbers1() {
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
      echo "<b>$i</b> ";
    } else {
      echo "$i ";
    }
  }
}

printNumbers1();
?>


<!-- Câu 6.  Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây: $nam = array(1990, 1991, 1992, 1993, 1994, 1995)-->
<?php
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

function inNam($nam) {
  foreach ($nam as $value) {
    echo $value . "<br>";
  }
}

inNam($nam);

?>
