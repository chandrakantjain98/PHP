<?php
echo "PHP Program to Find Grade of a Student using Switch Case";
echo "<br>";
echo "<br>";
echo "<br>";

// These are the marks of five subjects
$Physics = 95;
$Chemistry = 85;
$Biology = 74;
$Mathemetics = 64;
$Computer = 53;

// It will calculate total, average, percentage, and grade
$total = $Physics + $Chemistry + $Biology + $Mathemetics + $Computer;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

// It will divides average by 10 check switch expression
$sAvg = (int) ($average / 10);

// It will calculate the Grade
switch ($sAvg) {
    case 10:
        $grade = 'A';
        break;

    case 9:
        $grade = 'A';
        break;

    case 8:
        $grade = 'B';
        break;

    case 7:
        $grade = 'C';
        break;

    case 6:
        $grade = 'D';
        break;

    default:
        $grade = 'E';
        break;
}

// It will print the final output
echo "The Total marks   = " . $total . "/500\n";
echo "The Average marks = " . $average . "\n";
echo "The Percentage    = " . $percentage . "%\n";
echo "The Grade         = '" . $grade . "'\n";

?>