<?php

use PHPUnit\Framework\TestCase;
use App\tags\nav\Nav;

class NavTest extends TestCase {

    public function test_nav_tag () {

        $nav = new Nav("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<nav class=\"#\">hello</nav>", $nav->add());

    }

}