<?php
/**
 *
 * @framework: Ksike
 * @package: IOC
 * @subpackage: driver
 * @version: 0.1

 * @escription: IOC es una libreria que implementa la publicacion de archivos
 * @authors: ing. Antonio Membrides Espinosa
 * @making Date: 22/08/2011
 * @update Date: 24/08/2011
 * @license: GPL v3
 *
 */
namespace Ksike\ksl\package\ioc\driver;
use Ksike\ksl\base\helpers\Loader;
use Ksike\ksl\base\patterns\Factory;
use Ksike\ksl\package\ioc\base\IOCDriver;
class IocDriverOBJECT extends IOCDriver
{
	public function factory($option)
	{
		if(!isset($option["obj"])){
			$params = (isset($option["params"])) ? $option["params"] : false;
			$path = $option["path"].$option["file"];
			Loader::required($path, $option["point"], "file");
			$option["obj"] = Factory::build($option["name"], $params );
		}return $option["obj"];
	}
}
