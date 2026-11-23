
<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php

$grades = [3, 2, 4, 2, 1, 4, 5, 5, 3, 4];

function calcAvg ($arr) {
    $sum = 0;
    $quant = 0;
    foreach ($arr as $value) {
        $sum += $value;
        $quant = count ($arr);
        
    }
    return $sum/$quant;
}

function countExcellent ($arr) {
    $excQuant = 0;
    foreach ($arr as $value) {
        static $excQuant;
        if ($value==5) {
        $excQuant++;
        } 
    }
    return $excQuant;
}

function minimalGrade ($arr) {
    $minGrade = min ($arr);
    return $minGrade;
}

function arrayGrades ($arr) {
    $funcGradesArray = [
        5 => 0,
        4 => 0,
        3 => 0,
        2 => 0,
        1 => 0
        ];
        foreach ($arr as $value) {
            $funcGradesArray[$value]++;
        }
    return $funcGradesArray;
    }


echo "Average: ".calcAvg ($grades).'<br>';
echo "ExcelentNumber: ".countExcellent ($grades).'<br>';
echo "MinimalGrade: ".minimalGrade ($grades).'<br>';
echo "ArrayGrades: ".print_r(arrayGrades($grades), true).'<br>';
?>
</body>
</html>