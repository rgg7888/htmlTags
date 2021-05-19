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

if(!function_exists('div')) {
    function div($content = null,array $atributos = []) {
        $div = new App\tags\div\Div($content,$atributos);
        return $div->add();
    }
}

if(!function_exists('a')) {
    function a($content = null,array $atributos = []) {
        $a = new App\tags\a\A($content,$atributos);
        return $a->add();
    }
}

if(!function_exists('ul')) {
    function ul($content = null,array $atributos = []) {
        $ul = new App\tags\ul\Ul($content,$atributos);
        return $ul->add();
    }
}

if(!function_exists('li')) {
    function li($content = null,array $atributos = []) {
        $li = new App\tags\li\Li($content,$atributos);
        return $li->add();
    }
}

if(!function_exists('i')) {
    function i($content = null,array $atributos = []) {
        $i = new App\tags\i\I($content,$atributos);
        return $i->add();
    }
}

if(!function_exists('footer')) {
    function footer($content = null,array $atributos = []) {
        $footer = new App\tags\footer\Footer($content,$atributos);
        return $footer->add();
    }
}

if(!function_exists('section')) {
    function section($content = null,array $atributos = []) {
        $section = new App\tags\section\Section($content,$atributos);
        return $section->add();
    }
}