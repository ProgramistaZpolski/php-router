<?php
class Router
{
    public function Route(String $url = "/", $html = "<h1>Hello World!</h1><i>Powered by php-router</i>")
    {
        if ($url == $_SERVER["REQUEST_URI"]) {
            echo $html;
        }
    }
}
