
<!DOCTYPE html>
<html lang="en">
<head>
<body>
<?php

 function first try
function summary($arr) {
    $summa = 0;
        foreach($arr as $val) {
        $summa += $val;
    }
    return($summa);
}

$array = [1, 3, 7];
echo summary($array).'<br>';

?>
</body>
</html>