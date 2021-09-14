<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2020 John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView;

 // No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<h2><?= Text::_('COM_TEFTELEBUDGET_MSG_HELLO_SETTINGS') ?></h2>
<a href="index.php?option=com_teftelebudget&view=accmanager"><button class="button btn-primary">Acccount Manager</button></a>
<a href="index.php?option=com_teftelebudget&view=accounts"><button class="button btn-primary">Accounts</button></a>
<a href="index.php?option=com_teftelebudget&view=index"><button class="button btn-primary">Index</button></a>
<a href="index.php?option=com_teftelebudget"><button class="button btn-primary">Empty string</button></a>
<a href="index.php?option=com_teftelebudget&view=groupmanager"><button class="button btn-primary">Groupmanager</button></a>
<a href="index.php?option=com_teftelebudget&view=reports"><button class="button btn-primary">Reports</button></a>
<a href="index.php?option=com_teftelebudget&view=settings"><button class="button btn-primary">Settings</button></a>