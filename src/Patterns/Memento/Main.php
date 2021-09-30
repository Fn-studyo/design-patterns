<?php

namespace Patterns\Memento;

use Package\Memento\Editor;

class Main
{

    public static function main($args): void
    {
        var $editor = new Editor();
        $editor->setContent("a");
        $editor->setContent("b");
        $editor->setContent("c");
        $editor->undo();
    }
}
Main::main(array());