<?php

if(!function_exists('title')) {
    function title(string $titulo) {
        $title = new App\tags\title\Title($titulo);
        return $title->add();
    }
}

if(!function_exists('lnk')) {
    function lnk(array $atributos) {
        $link = new App\tags\link\Link($atributos);
        return $link->add();
    }
}

if(!function_exists('script')) {
    function script(array $atributos = [],$content = null) {
        $script = new App\tags\script\Script($content,$atributos);
        return $script->add();
    }
}

if(!function_exists('nav')) {
    function nav($content = null,array $atributos = []) {
        $nav = new App\tags\nav\Nav($content,$atributos);
        return $nav->add();
    }
}