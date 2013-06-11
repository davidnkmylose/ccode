<?php
    $fh = fopen("test.txt",'r');
    while( ($chars = fread($fh,1)) != false ){
        //$chars = str_replace("\n","换行符",$chars);
        if ( $chars == "\n"){
            echo "换行符";
        }else{
            echo $chars;
        }
    }
    fclose($fh);

