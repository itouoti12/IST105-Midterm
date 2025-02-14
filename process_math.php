<?php
$num1 = escapeshellarg($_POST['num1']);
$num2 = escapeshellarg($_POST['num2']);
$ope = escapeshellarg($_POST['operation']);
$publicIp = file_get_contents('http://169.254.169.254/latest/meta-data/public-ipv4');
$elbhost = $_SERVER['HOST_NAME']

$command = escapeshellcmd("python3 math_operations.py $num1 $num2 $ope");

$output = shell_exec($command);

echo "$output";

?>

<h2>This result was processed on my EC2 instance with Public IP:<?php echo $publicIp; ?></h2>
<h2>Access the application via Load Balancer URL: http://<?php echo $elbhost; ?>/math_form.php</h2>