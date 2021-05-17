<?php

use PHPUnit\Framework\TestCase;
use App\tags\link\Link;

class LinkTest extends TestCase {

    public function test_link_tag () {

        $link = new Link([
            'rel' => 'stylesheets',
            'href' => '#'
        ]);

        $this->assertEquals("<link rel=\"stylesheets\" href=\"#\"/>", $link->add());

    }

}