<?php

/**
 * LICENSE:
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @categories	Games/Entertainment, Systems Administration
 * @package		Bright Game Panel V2
 * @author		warhawk3407 <warhawk3407@gmail.com> @NOSPAM
 * @copyleft	2014
 * @license		GNU General Public License version 3.0 (GPLv3)
 * @version		0.1
 * @link		http://www.bgpanel.net/
 */

if ( !class_exists('BGP_Module')) {
	trigger_error('Module_Login -> BGP_Module is missing !');
}

/**
 * Login Module
 * by Nikita Rousseau
 */

class BGP_Module_Login extends BGP_Module
{
	// Module Definition
	public $module_definition = array();

	function __construct( )	{
		// Load Plugin Manifest
		$xml = simplexml_load_string( file_get_contents( __DIR__ . '\manifest.xml' ) );
		$json = json_encode($xml);
		$this->module_definition = json_decode($json, TRUE);
	}

}