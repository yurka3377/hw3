<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use App\FortuneGame;

$fortune = new FortuneGame();
echo $fortune->message()."\n";
