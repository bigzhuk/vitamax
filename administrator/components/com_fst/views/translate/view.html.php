<?php
/**
 * @package Freestyle Joomla
 * @author Freestyle Joomla
 * @copyright (C) 2013 Freestyle Joomla
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined('_JEXEC') or die;

jimport( 'joomla.application.component.view' );
require_once (JPATH_SITE.DS.'administrator'.DS.'components'.DS.'com_fst'.DS.'settings.php');


class FstsViewTranslate extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->data = json_decode(JRequest::getVar('data'), true);
		$this->langs = JLanguage::getKnownLanguages();
		
		parent::display($tpl);	
	}
}