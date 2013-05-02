<?php
$socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
$connected = socket_connect($socket , '10.65.44.149','8080');
$in = "HEAD / http/1.1\r\n";
$in .= "HOST: localhost \r\n";
$in .= "Connection: close\r\n\r\n";
if($connected){
    socket_write($socket ,$in ,strlen($in));
    while ($out = socket_read($socket, 8192)) {
            echo $out;
    }
}else{
    echo 'connect fail;';
}
