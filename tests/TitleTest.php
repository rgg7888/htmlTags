<?php

use PHPUnit\Framework\TestCase;
use App\tags\title\Title;

class TitleTest extends TestCase {

    public function test_title_tag () {

        $title = new Title("Html-Armor");

        $this->assertEquals("<title>Html-Armor</title>", $title->add());

    }

}