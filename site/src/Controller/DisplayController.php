<?php

namespace Teftele\Component\Teftelebudget\Site\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Factory;

/**
 * @package     Joomla.Site
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2020 John Smith. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE
 */

/**
 * HelloWorld Component Controller
 * @since  0.0.2
 */
class DisplayController extends BaseController {

    public function display($cachable = false, $urlparams = array()) {
        $document = Factory::getDocument();
        $viewName = $this->input->getCmd('view', 'index');
        // Load INDEX if value is empty OR parameter is undefined
        if (!$viewName){
          $viewName = 'index';
        } else {
          if (($viewName == 'index') ||
          ($viewName == 'accmanager') ||
          ($viewName == 'accounts') ||
          ($viewName == 'groupmanager') ||
          ($viewName == 'reports') ||
          ($viewName == 'settings') ||
          ($viewName == 'empty')){
            $viewName = $this->input->getCmd('view', 'index');
          } else {
            $viewName = 'index';
          };
        };

        $viewFormat = $document->getType();
      
        $view = $this->getView($viewName, $viewFormat);

        $view->document = $document;
        $view->display();
    }

}