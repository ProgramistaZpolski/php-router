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

$flash = new Router();

$flash->Route("/", "<h1>This is my homepage</h1>");
$flash->Route("/about", "<adress>h@h.com</adress>");
