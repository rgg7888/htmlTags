<?php

use PHPUnit\Framework\TestCase;
use App\tags\li\Li;

class LiTest extends TestCase {

    public function test_li_tag () {

        $li = new Li("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<li class=\"#\">hello</li>", $li->add());

    }

}