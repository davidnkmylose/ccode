<?php
    
    $file = fopen('a.data' , 'a');
    flock( $file , LOCK_EX );
    fwrite( $file , 'in bbbbbb == '.microtime()."\n");
    flock( $file , LOCK_UN );
    fclose( $file );
?>
