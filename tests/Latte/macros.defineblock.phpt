<?php

/**
 * Test: Nette\Latte\Engine: {define ...}
 *
 * @author     David Grudl
 */

use Nette\Latte,
	Nette\Utils\Html,
	Tester\Assert;


require __DIR__ . '/../bootstrap.php';


$latte = new Latte\Engine;

$path = __DIR__ . '/expected/' . basename(__FILE__, '.phpt');
Assert::matchFile(
	"$path.phtml",
	$latte->compile(__DIR__ . '/templates/defineblock.latte')
);
Assert::matchFile(
	"$path.html",
	$latte->renderToString(__DIR__ . '/templates/defineblock.latte')
);
