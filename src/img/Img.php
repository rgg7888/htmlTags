<?php

namespace App\tags\link;

use App\ha\HtmlArmor;

class Img extends HtmlArmor {

    private array $atributos;

    public function __construct(array $atributos) {
        $this->atributos = $atributos;
    }

    public function Atributos() {
        return $this->atributos;
    }

    public function add () {
        $this->setType("auto");
        $this->setTag("img");
        $this->setAtributos($this->Atributos());
        return $this->build();
    }

}