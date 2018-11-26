<?php
    /**
    * @author    JoomShaper http://www.joomshaper.com
    * @copyright Copyright (C) 2010 - 2013 JoomShaper
    * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
    */

    // no direct access
    defined('_JEXEC') or die('Restricted access');
    
    $layout                 = $params->get('layout', 'default');
    $moduleclass_sfx        = $params->get('moduleclass_sfx');

    $data = array();
    //Feature 1
    if( $params->get('title1') ){
        $data[0][ 'icon' ]              = $params->get('icon1');
        $data[0][ 'title' ]             = $params->get('title1');
        $data[0][ 'desc' ]              = $params->get('desc1');
        $data[0][ 'class' ]             = $params->get('class1');
    }

    //Feature 2
    if( $params->get('title2') ){
        $data[1][ 'icon' ]              = $params->get('icon2');
        $data[1][ 'title' ]             = $params->get('title2');
        $data[1][ 'desc' ]              = $params->get('desc2');
        $data[1][ 'class' ]             = $params->get('class2');
    }

    //Feature 3
    if( $params->get('title3') ){
        $data[2][ 'icon' ]              = $params->get('icon3');
        $data[2][ 'title' ]             = $params->get('title3');
        $data[2][ 'desc' ]              = $params->get('desc3');
        $data[2][ 'class' ]             = $params->get('class3');
    }

    //Feature 4
    if( $params->get('title4') ){
        $data[3][ 'icon' ]              = $params->get('icon4');
        $data[3][ 'title' ]             = $params->get('title4');
        $data[3][ 'desc' ]              = $params->get('desc4');
        $data[3][ 'class' ]             = $params->get('class4');
    }

    require(JModuleHelper::getLayoutPath('mod_sp_features', $layout) );