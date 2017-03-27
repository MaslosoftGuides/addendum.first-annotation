<?php

require 'bootstrap.php';

use Maslosoft\Addendum\Collections\Meta;
use Maslosoft\Guides\Addendum\Models\Instrument;

$meta = Meta::create(Instrument::class)->type();

echo $meta->kind . PHP_EOL;
