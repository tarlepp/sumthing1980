<?php

use RobotsTxtParser\RobotsTxtParser;

require __DIR__ . '/vendor/autoload.php';

$c = 'robots.txt content';

$parser = new RobotsTxtParser($c);

var_dump($parser->getContent());
