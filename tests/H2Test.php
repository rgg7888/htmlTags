<?php

use PHPUnit\Framework\TestCase;
use App\tags\h2\H2;

class H2Test extends TestCase {

    public function test_h2_tag () {

        $h2 = new H2("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<h2 class=\"#\">hello</h2>", $h2->add());

    }

}