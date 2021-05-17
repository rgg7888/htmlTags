<?php

use PHPUnit\Framework\TestCase;
use App\tags\script\Script;

class ScriptTest extends TestCase {

    public function test_script_tag () {

        $script = new Script([
            "alert('hi')"
        ],[
            'src' => '#'
        ]);

        $this->assertEquals("<script src=\"#\">alert('hi')</script>", $script->add());

    }

}