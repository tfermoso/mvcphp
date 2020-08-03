<?php

class Url{
public static function getUrl(){
    $url=$_SERVER["REQUEST_URI"];
return "http://localhost/".explode("/",$url)[1]."/";
}
}

?>