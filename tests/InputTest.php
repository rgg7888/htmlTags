<?php

use PHPUnit\Framework\TestCase;
use App\tags\input\Input;

class InputTest extends TestCase {

    public function test_input_tag () {

        $input = new Input([
            'type' => 'text',
            'value' => '#'
        ]);

        $this->assertEquals("<input type=\"text\" value=\"#\"/>", $input->add());

    }

}