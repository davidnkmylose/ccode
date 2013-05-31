<?php

class Dir_Helper{
    
    private $path = '/home/caopuwei/websit';
    
    public function __construct(){
    
    }

    public function isDir(){
        echo "run test \n";
        var_dump(is_dir($this->path));
    }

    public function openDir( $path ){
        $dh = opendir($path);
        if( $dh != false ){
            while( ( $filename = readdir($dh)) != false ){
                if( '.' == $filename || '..' == $filename ){
                    continue;
                }
                $file = $path.'/'.$filename;
                if( false == is_dir($file) ){
                    echo "filename : ". $filename."\n";
                }else {
                    $this->openDir($file);    
                }
            } 
            closedir($dh);
        }
    }

    public function getFileType( $file ){
        echo filetype($file);
    }
}

$dirHandler = new Dir_Helper();
$dirHandler->openDir("/home/caopuwei/websit/");
