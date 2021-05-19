<?php

use PHPUnit\Framework\TestCase;
use App\tags\h6\H6;

class H6Test extends TestCase {

    public function test_h6_tag () {

        $h6 = new H6("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<h6 class=\"#\">hello</h6>", $h6->add());

    }

}