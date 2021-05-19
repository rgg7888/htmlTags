<?php

use PHPUnit\Framework\TestCase;
use App\tags\h4\H4;

class H4Test extends TestCase {

    public function test_h4_tag () {

        $h4 = new H4("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<h4 class=\"#\">hello</h4>", $h4->add());

    }

}