<?php

declare(strict_types=1);

namespace App;

use Nette\Bootstrap\Configurator;


class Bootstrap
{
	public static function boot(): Configurator
	{
		$configurator = new Configurator;

		$configurator->setDebugMode('192.168.32.242'); // enable for your remote IP  '94.113.255.162'
		$configurator->enableTracy(__DIR__ . '/../log');

		$configurator->setTimeZone('Europe/Prague');
		$configurator->setTempDirectory(__DIR__ . '/../temp');

		$configurator->createRobotLoader()
			->addDirectory(__DIR__)
			->register();

		$configurator->addConfig(__DIR__ . '/config/common.neon');
		$configurator->addConfig(__DIR__ . '/config/config_local.neon');
		if (file_exists(__DIR__ . '/config/local.neon')) { // Settings for run on lovalhost - testing
			$configurator->addConfig(__DIR__ . '/config/local.neon');
		}

		return $configurator;
	}
}
