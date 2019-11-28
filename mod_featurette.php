<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_featurette
 *
 * @copyright   Copyright (C) NPEU 2019.
 * @license     MIT License; see LICENSE.md
 */

defined('_JEXEC') or die;

// Include the featurette functions only once
JLoader::register('ModFeaturetteHelper', __DIR__ . '/helper.php');

#$thing = trim($params->get('thing'));

#$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

require JModuleHelper::getLayoutPath('mod_featurette', $params->get('layout', 'default'));