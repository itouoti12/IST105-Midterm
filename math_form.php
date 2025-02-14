<?php
$ipaddress=$_SERVER[ 'SERVER_ADDR' ]
?>
<html>
<h1>Welcome to the Calculator!</h1>
<h2>This application is hosted on my EC2 instance with Public IP:<?php echo $ipaddress; ?></h2>
<h2>Enter 2 numbers and operation</h2>
<form action="process_math.php" method="post">

<label>Number1: </label>
<input type="number" name="num1" required>
<br/>

<label>Number2: </label>
<input type="number" name="num2" required>
<br/>

<lavel for="operation">operation</lavel>
<select name="operation">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="mul">*</option>
    <option value="div">/</option>
</select>

<input type="submit" value="Calculate">
</form>
</html>