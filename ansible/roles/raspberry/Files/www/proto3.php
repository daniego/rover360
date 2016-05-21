<?php
        exec('stty -F /dev/ttyUSB0 9600 raw');

        $fd=dio_open('/dev/ttyUSB0',O_RDWR | O_NOCTTY | O_NDELAY);
        dio_fcntl($fd,F_SETFL,0);

        dio_write($fd,"\x41",1);  // write 0x41 or 'A' to /dev/ttyS0
        
        // Replace result_length with your expected command result length
        for ($i=0;$i < result_length;$i++) {
               $result .=dio_read($fd, 1);
        }
        echo $result;
?>