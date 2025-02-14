<?php
$num1 = escapeshellarg($_POST['num1']);
$num2 = escapeshellarg($_POST['num2']);
$ope = escapeshellarg($_POST['operation']);

$command = escapeshellcmd("python3 math_operations.py $num1 $num2 $ope");

$output = shell_exec($command);

echo "$output";
?>