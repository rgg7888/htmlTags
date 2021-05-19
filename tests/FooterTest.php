<?php

use PHPUnit\Framework\TestCase;
use App\tags\footer\Footer;

class FooterTest extends TestCase {

    public function test_footer_tag () {

        $footer = new Footer("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<footer class=\"#\">hello</footer>", $footer->add());

    }

}