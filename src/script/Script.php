<?php

namespace App\tags\script;

use App\ha\HtmlArmor;

class Script extends HtmlArmor {

    private array $atributos;
    private $content;

    public function __construct($content , array $atributos) {
        $this->atributos = $atributos;
        $this->content = $content;
    }

    public function Atributos() {
        return $this->atributos;
    }

    public function Contenido() {
        return $this->content;
    }

    public function add () {
        $this->setType("normal");
        $this->setTag("script");
        $this->setAtributos($this->Atributos());
        $this->setContenido($this->Contenido());
        return $this->build();
    }

}