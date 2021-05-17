<?php

namespace App\tags\link;

use App\ha\HtmlArmor;

class Link extends HtmlArmor {

    private array $atributos;

    public function __construct(array $atributos) {
        $this->atributos = $atributos;
    }

    public function Atributos() {
        return $this->atributos;
    }

    public function add () {
        $this->setType("auto");
        $this->setTag("link");
        $this->setAtributos($this->Atributos());
        return $this->build();
    }

}