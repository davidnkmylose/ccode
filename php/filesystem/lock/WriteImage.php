<?php

    function writeImageList($list){
        foreach( $list as $index => $url){
            $image = loadImage($url);    
            $filename = "data/$index.jpg";
            $fb = fopen($filename , 'wb');
            fwrite($fb , $image);
            fclose($fb);
            echo $url." ===== end ;\n";
        }
    }

    function loadImage( $url ){
        $option = array(
            "http" => array(
                'method' => 'GET',
                'timeout' => 30,
                'header' => "Accept-language: en\r\n"."Cookie: foo=bar\r\n"
            )    
        );
        $context = stream_context_create($option);
        $image = file_get_contents($url.".jpg", false ,  $context);
        if( $image == false ){
            echo ' false sleep 5'."\n";
            sleep(5);
            return loadImage($url);
        }
        return $image;
    }

    $data = file_get_contents("aa");
    $list = explode('\t', $data);
    var_dump($list);
    writeImageList($list);
