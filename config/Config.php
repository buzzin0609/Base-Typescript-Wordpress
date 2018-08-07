<?php
/**
 * Created by PhpStorm.
 * User: Will Busby
 * Date: 07/08/2018
 */

namespace Anabelle;


class Config {
	public static function getConfigFile() {
		$dir = __DIR__ . '/';
		$file = 'config.prod.php';

		if (self::isLocalhost($_SERVER['REMOTE_ADDR'])) {
			$file = 'config.prod.php';
		} else if (self::isStaging($_SERVER['REQUEST_URI'])) {
			$file = 'config.staging.php';
		}

		return $dir . $file;
	}

	public static function isLocalhost($url = null) {

		$url = is_null($url) ? $_SERVER['REMOTE_ADDR'] : $url;

		return in_array($url, ['127.0.0.1', '::1']);
	}

	public static function isStaging($url) {

	}
}