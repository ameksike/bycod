<?php
/**
 *
 * @framework: Ksike
 * @package: out
 * @subpackage: driver
 * @version: 0.1

 * @description: ConfigDriverJSON es una libreria para el trabajo con ...
 * @authors: ing. Antonio Membrides Espinosa
 * @making-Date: 15/06/2010
 * @update-Date: 20/12/2010
 * @license: GPL v2
 *
 */
class OutDriverJSON extends OutDriver
{
	public function getOut($data)
	{
		//$this->buildHead("txt/json");
		return !is_string($data) ? json_encode($data) : $data;
	}
}