<?php

namespace App\tags\ol;

use App\ha\HtmlArmor;

class Ol extends HtmlArmor {

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
        $this->setTag("ol");
        $this->setAtributos($this->Atributos());
        $this->setContenido($this->Contenido());
        return $this->build();
    }

}