<?php
namespace LIB;
class lib_tinymce extends \LIB\lib_js{
    public static function get_class(){
        return self::class;}
    public static function js_path(){
        return \SYSTEM\WEBPATH(new \SYSTEM\PLIB(),'/tinymce/lib/tinymce.min.js');}
    public static function version(){
        return '4.1.10 (2015-05-05)';}
}
