<?php

namespace Anabelle;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RecursiveRegexIterator;
use RegexIterator;

/**
 * Class DirectoryLoader
 * utility to load a full directory's files
 * @package IAAF
 */
class DirectoryLoader
{

	public static function loadSequence($dirs) {
		foreach ($dirs as $dir) {
			self::load($dir);
		}
	}

	public static function load($root = __DIR__, $dir, $filePattern = '/.*\.php$/') {
		$dir_iterator = new RecursiveDirectoryIterator($root . '/' . $dir);
		self::loadFiles(
			new RecursiveIteratorIterator(
				$dir_iterator, RecursiveIteratorIterator::SELF_FIRST
			),
			$filePattern
		);
	}

	public static function loadFiles($iterator, $filePattern) {
		$files = new RegexIterator($iterator, $filePattern, RecursiveRegexIterator::GET_MATCH);
		foreach ($files as $file) {
			//load all php EXCEPT for those beginning with __ which are excluded for files that need to be imported separately
			include_once($file[0]);
		}
	}
}