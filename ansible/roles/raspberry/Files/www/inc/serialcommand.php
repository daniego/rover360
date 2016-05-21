<?php
$logfile = "/var/log/nginx/nginx80.serial.log";
$fpf =fopen($logfile, "w");
//$post = print_r($_POST);
//print_r($_POST);
$post = $_POST['button'];
			//fwrite($fpf, $post); /* this is the number that it will write */
			fclose($fpf);
			
$arr = array('button' => $post,);
echo json_encode($arr);


$comPort = "/dev/ttyUSB0"; /*change to correct com port */
exec('stty -F /dev/ttyUSB0 9600 raw');
if (isset($_POST["button"])) {
	echo "inside if";
	$rcmd = $_POST["button"];
	switch ($rcmd) {
		case "Forward":
		echo "Forward";
    		$fp =fopen($comPort, "w");
			fwrite($fp, 1); /* this is the number that it will write */
			fclose($fp);
			break;
		case "Back":
    	    $fp =fopen($comPort, "w");
			fwrite($fp, 2); /* this is the number that it will write */
			fclose($fp);
			break;
		case "Left":
    	    $fp =fopen($comPort, "w");
			fwrite($fp, 3); /* this is the number that it will write */
			fclose($fp);
			break;
		case "Right":
    	    $fp =fopen($comPort, "w");
			fwrite($fp, 4); /* this is the number that it will write */
			fclose($fp);
			break;
    	 case "Stop":
        	$fp =fopen($comPort, "w");
			fwrite($fp, 5); /* this is the number that it will write */
			fclose($fp);
			break;
			
	     case "Slow":
    	    $fp =fopen($comPort, "w");
			fwrite($fp, 2); /* this is the number that it will write */
			fclose($fp);
			break;
		case "Medium":
    	    $fp =fopen($comPort, "w");
			fwrite($fp, 3); /* this is the number that it will write */
			fclose($fp);
			break;
		case "Fast":
    	    $fp =fopen($comPort, "w");
  			fwrite($fp, 4); /* this is the number that it will write */
			fclose($fp);
  			break;
		
		
		
			
		default:
  			die('Crap, something went wrong. The page just puked.');
	}
}
?>