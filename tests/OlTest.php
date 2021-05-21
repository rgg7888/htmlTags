<?php

use PHPUnit\Framework\TestCase;
use App\tags\ol\Ol;

class OlTest extends TestCase {

    public function test_ol_tag () {

        $ol = new Ol("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<ol class=\"#\">hello</ol>", $ol->add());

    }

}