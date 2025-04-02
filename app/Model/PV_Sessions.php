<?php

namespace App\Model;

/**
 * Model, ktory sa stara o tabulku sessions
 * 
 * Posledna zmena 22.08.2023
 * 
 * @author     Ing. Peter VOJTECH ml. <petak23@gmail.com>
 * @copyright  Copyright (c) 2021 - 2023 Ing. Peter VOJTECH ml.
 * @license
 * @link       http://petak23.echo-msz.eu
 * @version    1.0.2
 */
class PV_Sessions extends Table
{

	/** @var string */
	protected $tableName = 'sessions';

	public function deleteSession(int $id): void
	{
		$this->findBy(["device_id" => $id])->delete();
	}
}
