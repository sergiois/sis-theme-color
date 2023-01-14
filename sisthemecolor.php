<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.SISThemeColor
 *
 * @copyright	Copyright © 2023 SergioIglesiasNET - All rights reserved.
 * @license		GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\CMSPlugin;

defined('_JEXEC') or die;

class PlgSystemSisthemeColor extends CMSPlugin
{
	public function onBeforeCompileHead()
	{
		$app = Factory::getApplication();

		if ($app->isClient('administrator') || $app->get('offline', '0'))
		{
			return;
		}
		
		$doc = Factory::getDocument();
		$doc->addCustomTag( '<meta name="theme-color" content="'.$this->params->get('themecolor', '#ffffff').'"/>' );
	}
}
