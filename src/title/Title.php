<?php

namespace App\tags\title;

use App\ha\HtmlArmor;

class Title extends HtmlArmor {

    private string $title;

    public function __construct(string $title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function add() {
        $this->setType("normal");
        $this->setTag("title");
        $this->setContenido($this->getTitle());
        $this->setAtributos([]);
        return $this->build();
    }

}