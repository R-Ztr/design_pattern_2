<?php

require_once 'Text.php';

abstract class TextDecorator implements Text {
    protected Text $text;

    public function __construct(Text $text) {
        $this->text = $text;
    }

    abstract public function transform(): string;
}
