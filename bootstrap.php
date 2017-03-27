<?php

use Maslosoft\Addendum\Addendum;
use Maslosoft\EmbeDi\Adapters\ArrayAdapter;
use Maslosoft\EmbeDi\EmbeDi;
use Maslosoft\Guides\Addendum\Annotations\KindAnnotation;

require __DIR__ . '/vendor/autoload.php';

$config = [
	'addendum' => [
		// Addendum main class
		'class' => Addendum::class,
		// Check for modifications
		'checkMTime' => true,
		// Namespaces of our annotations
		'namespaces' => [
			KindAnnotation::Ns
		]
	]
];
EmbeDi::fly()->addAdapter(new ArrayAdapter($config));
