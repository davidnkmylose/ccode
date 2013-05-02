<?php

    function callback( $param ){
        
        return array(
            'url '=>'http://'.$param
        );
    }

    $list = array(
        'www',
        'baidu',
        'com',
    );

    $result = array_map('callback' , $list);
    var_dump( $result );
?>
