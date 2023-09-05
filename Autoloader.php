<?php
    class Autoloader {
        public static function register(){
            spl_autoload_register(function ($classname){
                $filename =  $classname.".php";
                $filename = str_replace("\\","/",$filename);
                if(file_exists($filename)){
                    require $filename;
                }
            });
        }
    }