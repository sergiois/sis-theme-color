<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.SISThemeColor
 *
 * @copyright	Copyright © 2018 SergioIglesiasNET - All rights reserved.
 * @license		GNU General Public License v2.0
 * @author 		Sergio Iglesias (@sergiois)
 */

defined('_JEXEC') or die;

class PlgSystemSisthemeColor extends JPlugin
{
	public function onBeforeCompileHead()
	{
		if (JFactory::getApplication()->isClient('administrator'))
		{
			return true;
		}
		
		$doc = JFactory::getDocument();
		$doc->addCustomTag( '<meta name="theme-color" content="'.$this->params->get('themecolor', '#ffffff').'"/>' );
	}
}
