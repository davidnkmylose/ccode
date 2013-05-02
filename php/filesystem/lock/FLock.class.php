<?php
    
    $file = fopen('a.data' , 'a');
    flock( $file , LOCK_EX );
    for( $i = 0 ; $i < 10 ; $i++){
        fwrite( $file , 'wwwww == '.microtime()."\n");
        sleep(1);
    }
    flock( $file , LOCK_UN );
    fclose( $file );
?>
