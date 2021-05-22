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

if(!function_exists('input')) {
    function input(array $atributos) {
        $input = new App\tags\input\Input($atributos);
        return $input->add();
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

if(!function_exists('ol')) {
    function ol($content = null,array $atributos = []) {
        $ol = new App\tags\ol\Ol($content,$atributos);
        return $ol->add();
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

if(!function_exists('p')) {
    function p($content = null,array $atributos = []) {
        $p = new App\tags\p\P($content,$atributos);
        return $p->add();
    }
}

if(!function_exists('section')) {
    function section($content = null,array $atributos = []) {
        $section = new App\tags\section\Section($content,$atributos);
        return $section->add();
    }
}

if(!function_exists('h1')) {
    function h1($content = null,array $atributos = []) {
        $h1 = new App\tags\h1\H1($content,$atributos);
        return $h1->add();
    }
}

if(!function_exists('h2')) {
    function h2($content = null,array $atributos = []) {
        $h2 = new App\tags\h2\H2($content,$atributos);
        return $h2->add();
    }
}

if(!function_exists('h3')) {
    function h3($content = null,array $atributos = []) {
        $h3 = new App\tags\h3\H3($content,$atributos);
        return $h3->add();
    }
}

if(!function_exists('h4')) {
    function h4($content = null,array $atributos = []) {
        $h4 = new App\tags\h4\H4($content,$atributos);
        return $h4->add();
    }
}

if(!function_exists('h5')) {
    function h5($content = null,array $atributos = []) {
        $h5 = new App\tags\h5\H5($content,$atributos);
        return $h5->add();
    }
}

if(!function_exists('h6')) {
    function h6($content = null,array $atributos = []) {
        $h6 = new App\tags\h6\H6($content,$atributos);
        return $h6->add();
    }
}

if(!function_exists('form')) {
    function form($content = null,array $atributos = []) {
        $form = new App\tags\form\Form($content,$atributos);
        return $form->add();
    }
}

if(!function_exists('label')) {
    function label($content = null,array $atributos = []) {
        $label = new App\tags\label\Label($content,$atributos);
        return $label->add();
    }
}