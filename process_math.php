<?php
$num1 = escapeshellarg($_POST['num1']);
$num2 = escapeshellarg($_POST['num2']);
$ope = escapeshellarg($_POST['operation']);

$publicIpcmd = escapeshellcmd("ec2-metadata -v");
$publicIp = shell_exec($publicIpcmd);

$command = escapeshellcmd("python3 math_operations.py $num1 $num2 $ope");

$output = shell_exec($command);
$host = escapeShellarg($_SERVER['HTTP_HOST']);

echo "$output";

?>

<h2>This result was processed on my EC2 instance with Public IP:<?php echo $publicIp; ?></h2>
<h2>Access the application via Load Balancer URL: http://<?php echo $host; ?>/math_form.php</h2>