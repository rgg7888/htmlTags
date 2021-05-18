<?php

use PHPUnit\Framework\TestCase;
use App\tags\div\Div;

class DivTest extends TestCase {

    public function test_div_tag () {

        $div = new Div("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<div class=\"#\">hello</div>", $div->add());

    }

}