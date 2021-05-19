<?php

use PHPUnit\Framework\TestCase;
use App\tags\h1\H1;

class H1Test extends TestCase {

    public function test_h1_tag () {

        $h1 = new H1("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<h1 class=\"#\">hello</h1>", $h1->add());

    }

}