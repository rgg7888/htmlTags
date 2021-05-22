<?php

use PHPUnit\Framework\TestCase;
use App\tags\p\P;

class PTest extends TestCase {

    public function test_p_tag () {

        $p = new P("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<p class=\"#\">hello</p>", $p->add());

    }

}