<?php

    $html = file_get_contents("image.data");
    
    preg_match_all('/<img[^>]*? src="([^"]+\.jpg)"[^>]+?>/',$html,$list);
    foreach( $list[1] as $index => $value ){
        echo $value.'\t';
    }
