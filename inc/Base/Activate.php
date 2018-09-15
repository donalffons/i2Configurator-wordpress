<?php
/**
 * @package  i2ConfiguratorPlugin
 */
namespace Inc\Base;

class Activate
{
	public static function activate() {
		flush_rewrite_rules();
	}
}