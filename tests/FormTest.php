<?php

use PHPUnit\Framework\TestCase;
use App\tags\form\Form;

class FormTest extends TestCase {

    public function test_form_tag () {

        $form = new Form("hello",[
            'class' => '#'
        ]);

        $this->assertEquals("<form class=\"#\">hello</form>", $form->add());

    }

}