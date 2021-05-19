<?php

use PHPUnit\Framework\TestCase;
use App\tags\h3\H3;

class H3Test extends TestCase {

    public function test_h3_tag () {

        $h3 = new H3("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<h3 class=\"#\">hello</h3>", $h3->add());

    }

}