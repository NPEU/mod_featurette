<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_featurette
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;


$doc = JFactory::getDocument();

?>

<?php if ($module->showtitle): ?>
<<?php echo $params->get('header_tag'); ?>><?php echo $module->title; ?></<?php echo $params->get('header_tag'); ?>>
<?php endif; ?>
