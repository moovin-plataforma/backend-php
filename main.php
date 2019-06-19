<?php

require_once __DIR__ . '/vendor/autoload.php';

use Moovin\Job\Backend;

$exemplo = new Backend\Exemplo;

echo $exemplo->exemplo();