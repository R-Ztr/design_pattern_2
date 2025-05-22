<?php

require_once 'PlainText.php';
require_once 'UpperCaseDecorator.php';
require_once 'LowerCaseDecorator.php';
require_once 'PrefixDecorator.php';
require_once 'SuffixDecorator.php';

$text = new PlainText("Bonjour");

$decorated = new SuffixDecorator(
    new UpperCaseDecorator(
        new PrefixDecorator($text, "[DÉBUT] ")
    ),
    " [FIN]"
);

echo $decorated->transform();
