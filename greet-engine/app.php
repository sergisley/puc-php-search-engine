<?php

require 'vendor/autoload.php';

//digite no console ">php app.php greet joão"

$console = new \Symfony\Component\Console\Application();
$console->add(new \App\GreetCommand());
$console->run();
