<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

SpAddonsConfig::addonConfig(
	array(
		'type'=>'general', 
		'addon_name'=>'sp_progress_bar',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_DESC'),
		'attr'=>array(

			'admin_label'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
				'std'=> ''
				),

			'type'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_TYPE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_TYPE_DESC'),
				'values'=>array(
					'sppb-progress-bar-primary'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
					'sppb-progress-bar-success'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
					'sppb-progress-bar-info'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
					'sppb-progress-bar-warning'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
					'sppb-progress-bar-danger'=>JText::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
					),
				'std'=>'sppb-progress-bar-primary',
				),
			'progress'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_PROGRESS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_PROGRESS_DESC'),
				'std'=>'50',
				),
			'text'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_TEXT'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_TEXT_DESC'),
				'std'=>'',
				),
			'stripped'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_STRIPPED'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_STRIPPED_DESC'),
				'values'=>array(
					''=>JText::_('JNO'),
					'sppb-progress-bar-striped'=>JText::_('JYES'),
					),
				),
			'active'=>array(
				'type'=>'select', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_ACTIVE'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_PROGRESS_BAR_ACTIVE_DESC'),
				'values'=>array(
					''=>JText::_('JNO'),
					'active'=>JText::_('JYES'),
					),
				),
			'class'=>array(
				'type'=>'text', 
				'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
				'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
				'std'=> ''
				),
			) 
		)
	);
