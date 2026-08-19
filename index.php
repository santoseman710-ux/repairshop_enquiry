<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Activity 3: Grade Evaluation</title> 
</head> 
<body> 
<?php

$averageGrade_SANTOS = 91.3;

$remarks_SANTOS = "";
$letterGrade_SANTOS = "";

if ($averageGrade_SANTOS>= 74.5) {
    $remarks_SANTOS = "Passed";
} else {
    $remarks_SANTOS = "Failed";
}

if ($averageGrade_SANTOS >= 90 && $averageGrade_SANTOS <= 100) {
    $letterGrade_SANTOS = "A";
} elseif ($averageGrade_SANTOS >= 80 && $averageGrade_SANTOS < 90) {
    $letterGrade_SANTOS = "B";
} elseif ($averageGrade_SANTOS >= 70 && $averageGrade_SANTOS < 80) {
    $letterGrade_SANTOS = "C";
} elseif ($averageGrade_SANTOS >= 60 && $averageGrade_SANTOS < 70) {
    $letterGrade_SANTOS = "D";
} elseif ($averageGrade_SANTOS >= 0 && $averageGrade_SANTOS < 60) {
    $letterGrade_SANTOS = "F";
} else {
    $letterGrade_SANTOS = "Invalid Grade";
}

echo "Average Grade: " . $averageGrade_SANTOS . "<br>";
echo "Remarks: " . $remarks_SANTOS . "<br>";
echo "Letter Grade: " . $letterGrade_SANTOS . "<br>";

?>
</body>
</html>