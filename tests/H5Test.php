<?php

use PHPUnit\Framework\TestCase;
use App\tags\h5\H5;

class H5Test extends TestCase {

    public function test_h5_tag () {

        $h5 = new H5("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<h5 class=\"#\">hello</h5>", $h5->add());

    }

}