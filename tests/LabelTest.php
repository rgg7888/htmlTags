<?php

use PHPUnit\Framework\TestCase;
use App\tags\label\Label;

class LabelTest extends TestCase {

    public function test_label_tag () {

        $label = new Label("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<label class=\"#\">hello</label>", $label->add());

    }

}