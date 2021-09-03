<?php
/**
 * Created by IntelliJ IDEA.
 * User: MOUSTOIFA
 * Date: 9/26/2018
 * Time: 8:31 AM
 */

define('WWW_ROOT',  dirname(dirname(__FILE__)));
$directory = basename(WWW_ROOT);
$url = explode($directory, $_SERVER['SCRIPT_NAME']);
if (count($url) == 1){
    define('WEBROOT', '/');
    define('upload', '/upload/');
    define('Partials', '/Partials/');
    define('css', '/assets/css/');
    define('js', '/assets/js/');
    define('img', '/assets/img/');
    define('fonts', '/assets/fonts/');
}else{
    define('WEBROOT', $url[0] . $directory . '/');
    define('upload', $url[0] . $directory . '/upload/');
    define('Partials', $url[0] . $directory . '/Partials/');
    define('css', $url[0] . $directory . '/assets/css/');
    define('js', $url[0] . $directory . '/assets/js/');
    define('img', $url[0] . $directory . '/assets/img/');
    define('fonts', $url[0] . $directory . '/assets/fonts/');
}


?>