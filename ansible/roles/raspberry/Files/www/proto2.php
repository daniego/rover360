<?php

$verz="1.0";
$comPort = "/dev/ttyUSB0"; /*change to correct com port */

$led = $_POST["led"];

$fp =fopen($comPort, "w");
sleep(2);
fwrite($fp, $led); /* this is the number that it will write */
fclose($fp);

?>
<html>
<body>

<center><h1>Arduino from PHP Example</h1><b>Version <?php echo $verz; ?></b></c$

<form method="post" action="<?php echo $PHP_SELF;?>">

&nbsp&nbsp&nbsp&nbsp
<input type="text" name="led">
<input type="submit" value="OK">
<br />

</form>
</body>
</html>