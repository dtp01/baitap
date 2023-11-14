<!-- 22 - Đào Thanh Phương  -->

<!-- Câu 1. Kết quả in ra màn hình là: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 9 )  -->
<!-- Câu 2. a  -->
<!-- Câu 3. a -->
<!-- Câu 4. a  -->
<!-- Câu 5. b  -->

<!-- Bài 1 -->
<!-- Dãy Fibonacci là dãy vô hạn các số tự nhiên bắt đầu bằng 1 và 1, sau đó các số tiếp theo sẽ bằng tổng của 2 số liền trước nó -->
<?php
function Fibonacci($n) 
{
    $DayFibonacci = [];
    
    if ($n <= 0) 
    {
        return $DayFibonacci;
    } else if ($n == 1) 
    {
        $DayFibonacci[] = 0;
        return $DayFibonacci;
    } else if ($n == 2) 
    {
        $DayFibonacci = [0, 1];
        return $DayFibonacci;
    } else 
    {
        $DayFibonacci = [0, 1];
        for ($i = 2; $i < $n; $i++) 
        {
            $DayFibonacci[] = $DayFibonacci[$i - 1] + $DayFibonacci[$i - 2];
        }
        return $DayFibonacci;
    }
}

<!-- Hiển thị dãy số Fibonacci đầu tiên có 10 phần tử -->
$numberOfElements = 10;
$DayFibonacci = Fibonacci($numberOfElements);

echo "Dãy số Fibonacci đầu tiên có $numberOfElements phần tử là:\n";
echo implode(", ", $DayFibonacci);
?>

<!-- Kết quả in ra màn hình 
Dãy số Fibonacci đầu tiên có 10 phần tử là:
0, 1, 1, 2, 3, 5, 8, 13, 21, 34 -->

<!-- Bài 2 -->
<?php
<!-- Tạo mảng kết hợp chứa thông tin về học sinh -->
$HocSinh = 
[
    ['id' => 1, 'name' => 'Phuong', 'age' => 18, 'grade' => 7.5],
    ['id' => 2, 'name' => 'Nhung', 'age' => 17, 'grade' => 8.5],
    ['id' => 3, 'name' => 'Ha', 'age' => 19, 'grade' => 9.4],
];

<!-- Hiển thị thông tin của tất cả học sinh trong mảng -->
echo "Thông tin của tất cả học sinh là\n";
foreach ($HocSinh as $hocsinh) 
{
    echo "ID: {$hocsinh['id']}, Name: {$hocsinh['name']}, Age: {$hocsinh['age']}, Grade: {$hocsinh['grade']}\n";
}

<!-- Viết hàm để tìm học sinh có điểm cao nhất (grade) -->
function timHSdiemcaonhat($HocSinh)
{
    $diemcaonhat = 0;
    $HSdiemcaonhat = null;

    foreach ($HocSinh as $hocsinh) 
    {
        if ($hocsinh['grade'] > $diemcaonhat) 
        {
            $diemcaonhat = $hocsinh['grade'];
            $HSdiemcaonhat = $hocsinh;
        }
    }

    return $HSdiemcaonhat;
}

<!-- Tìm học sinh có điểm cao nhất -->
$HSdiemcaonhat = timHSdiemcaonhat($HocSinh);

<!-- Hiển thị thông tin của học sinh có điểm cao nhất -->
echo "\nThông tin của học sinh có điểm cao nhất là:\n";
if ($HSdiemcaonhat) 
{
    echo "ID: {$HSdiemcaonhat['id']}, Name: {$HSdiemcaonhat['name']}, Age: {$HSdiemcaonhat['age']}, Grade: {$HSdiemcaonhat['grade']}\n";
} else 
{
    echo "Không có học sinh nào trong danh sách.\n";
}
?>
