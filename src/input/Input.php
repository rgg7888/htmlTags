<?php

namespace App\tags\input;

use App\ha\HtmlArmor;

class Input extends HtmlArmor {

    private array $atributos;

    public function __construct(array $atributos) {
        $this->atributos = $atributos;
    }

    public function Atributos() {
        return $this->atributos;
    }

    public function add () {
        $this->setType("auto");
        $this->setTag("input");
        $this->setAtributos($this->Atributos());
        return $this->build();
    }

}