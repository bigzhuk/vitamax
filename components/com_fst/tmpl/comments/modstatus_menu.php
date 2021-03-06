<?php
/**
 * @package Freestyle Joomla
 * @author Freestyle Joomla
 * @copyright (C) 2013 Freestyle Joomla
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined('_JEXEC') or die;
?>
<?php if (empty($this->_moderatecounts)) $this->_moderatecounts = array(); 
	if (count($this->_moderatecounts) > 0)
		foreach ($this->_moderatecounts as $ident => $count) : ?>
			<div class="fst_menu_support_item">
				<a href="<?php echo FSTRoute::_( 'index.php?option=com_fst&view=admin&layout=moderate&ident=' . $ident ); ?>">
					<?php echo $this->handlers[$ident]->GetDesc(); ?> (<?php echo $count['count']; ?>)
				</a>
			</div>
<?php endforeach; ?>
<?php if (count($this->_moderatecounts) == 0): ?>
			<div class="fst_menu_support_item">
				<?php echo JText::_("NO_COMMENTS_FOR_MOD"); ?>
			</div>
<?php endif; ?>
