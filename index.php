<?php

require('vendor/autoload.php');

$latte = new Latte\Engine();
$latte->setTempDirectory(sys_get_temp_dir());
$latte->render('template.latte', ['foo' => 'bar']);

