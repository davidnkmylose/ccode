<?php

class FileHelper{
    
    public static  function basename($path){
       echo basename($path,".php").PHP_EOL; 
    }

}


FileHelper::basename("/Users/davidnk/project/ccode/php/filesystem/Dir.php");

