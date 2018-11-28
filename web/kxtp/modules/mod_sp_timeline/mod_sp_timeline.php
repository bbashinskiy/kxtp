<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_sp_testimonial
 * @copyright	Copyright (C) 2010 - 2013 JoomShaper. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$data = array();

//Timeline 1
if( $params->get('timeline1_time') ){
	$data[0][ 'time' ] 				= $params->get('timeline1_time');
	$data[0][ 'event' ] 			= $params->get('timeline1_event');
	$data[0][ 'thumb' ] 			= $params->get('timeline1_thumb');
}

//Timeline 2
if( $params->get('timeline2_time') ){
	$data[1][ 'time' ] 				= $params->get('timeline2_time');
	$data[1][ 'event' ] 			= $params->get('timeline2_event');
	$data[1][ 'thumb' ] 			= $params->get('timeline2_thumb');
}

//Timeline 3
if( $params->get('timeline3_time') ){
	$data[2][ 'time' ] 				= $params->get('timeline3_time');
	$data[2][ 'event' ] 			= $params->get('timeline3_event');
	$data[2][ 'thumb' ] 			= $params->get('timeline3_thumb');
}

//Timeline 4
if( $params->get('timeline4_time') ){
	$data[3][ 'time' ] 				= $params->get('timeline4_time');
	$data[3][ 'event' ] 			= $params->get('timeline4_event');
	$data[3][ 'thumb' ] 			= $params->get('timeline4_thumb');
}

//Timeline 5
if( $params->get('timeline5_time') ){
	$data[4][ 'time' ] 				= $params->get('timeline5_time');
	$data[4][ 'event' ] 			= $params->get('timeline5_event');
	$data[4][ 'thumb' ] 			= $params->get('timeline5_thumb');
}

//Timeline 6
if( $params->get('timeline6_time') ){
	$data[5][ 'time' ] 				= $params->get('timeline6_time');
	$data[5][ 'event' ] 			= $params->get('timeline6_event');
	$data[5][ 'thumb' ] 			= $params->get('timeline6_thumb');
}

//Timeline 7
if( $params->get('timeline7_time') ){
	$data[6][ 'time' ] 				= $params->get('timeline7_time');
	$data[6][ 'event' ] 			= $params->get('timeline7_event');
	$data[6][ 'thumb' ] 			= $params->get('timeline7_thumb');
}

//Timeline 8
if( $params->get('timeline8_time') ){
	$data[7][ 'time' ] 				= $params->get('timeline8_time');
	$data[7][ 'event' ] 			= $params->get('timeline8_event');
	$data[7][ 'thumb' ] 			= $params->get('timeline8_thumb');
}

//Timeline 9
if( $params->get('timeline9_time') ){
	$data[8][ 'time' ] 				= $params->get('timeline9_time');
	$data[8][ 'event' ] 			= $params->get('timeline9_event');
	$data[8][ 'thumb' ] 			= $params->get('timeline9_thumb');
}

//Timeline 10
if( $params->get('timeline10_time') ){
	$data[9][ 'time' ] 				= $params->get('timeline10_time');
	$data[9][ 'event' ] 			= $params->get('timeline10_event');
	$data[9][ 'thumb' ] 			= $params->get('timeline10_thumb');
}

//Timeline 11
if( $params->get('timeline11_time') ){
	$data[10][ 'time' ] 				= $params->get('timeline11_time');
	$data[10][ 'event' ] 			= $params->get('timeline11_event');
	$data[10][ 'thumb' ] 			= $params->get('timeline11_thumb');
}

//Timeline 12
if( $params->get('timeline12_time') ){
	$data[11][ 'time' ] 				= $params->get('timeline12_time');
	$data[11][ 'event' ] 			= $params->get('timeline12_event');
	$data[11][ 'thumb' ] 			= $params->get('timeline12_thumb');
}




require JModuleHelper::getLayoutPath('mod_sp_timeline', $params->get('layout'));