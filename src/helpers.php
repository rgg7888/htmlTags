<?php

if(!function_exists('title')) {
    function title(string $titulo) {
        $title = new App\tags\title\Title($titulo);
        return $title->add();
    }
}