<?php
    class Autoloader {
        public static function register(){
            spl_autoload_register(function ($classname){
                $fileExist =  $classname.".php";

                if(file_exists($fileExist)){
                    require $fileExist;
                }else {
                    echo "no file";
                }
            });
        }
    }