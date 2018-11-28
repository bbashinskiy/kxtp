<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_sp_team
 * @copyright	Copyright (C) 2010 - 2013 JoomShaper. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$data = array();

//Team 1
if( $params->get('team1_img') ){
	$data[0][ 'img' ] 				= $params->get('team1_img');
	$data[0][ 'name' ] 				= $params->get('team1_name');
	$data[0][ 'desg' ] 				= $params->get('team1_desg');
	$data[0][ 'desc' ] 				= $params->get('team1_desc');
	$data[0][ 'facebook' ] 			= $params->get('team1_facebook');
	$data[0][ 'twitter' ] 			= $params->get('team1_twitter');
	$data[0][ 'googleplus' ] 		= $params->get('team1_googleplus');
	$data[0][ 'pinterest' ] 		= $params->get('team1_pinterest');
	$data[0][ 'linkedin' ] 			= $params->get('team1_linkedin');
}

//Team 2
if( $params->get('team2_img') ){
	$data[1][ 'img' ] 				= $params->get('team2_img');
	$data[1][ 'name' ] 				= $params->get('team2_name');
	$data[1][ 'desg' ] 				= $params->get('team2_desg');
	$data[1][ 'desc' ] 				= $params->get('team2_desc');
	$data[1][ 'facebook' ] 			= $params->get('team2_facebook');
	$data[1][ 'twitter' ] 			= $params->get('team2_twitter');
	$data[1][ 'googleplus' ] 		= $params->get('team2_googleplus');
	$data[1][ 'pinterest' ] 		= $params->get('team2_pinterest');
	$data[1][ 'linkedin' ] 			= $params->get('team2_linkedin');
}

//Team 3
if( $params->get('team3_img') ){
	$data[2][ 'img' ] 				= $params->get('team3_img');
	$data[2][ 'name' ] 				= $params->get('team3_name');
	$data[2][ 'desg' ] 				= $params->get('team3_desg');
	$data[2][ 'desc' ] 				= $params->get('team3_desc');
	$data[2][ 'facebook' ] 			= $params->get('team3_facebook');
	$data[2][ 'twitter' ] 			= $params->get('team3_twitter');
	$data[2][ 'googleplus' ] 		= $params->get('team3_googleplus');
	$data[2][ 'pinterest' ] 		= $params->get('team3_pinterest');
	$data[2][ 'linkedin' ] 			= $params->get('team3_linkedin');
}

//Team 4
if( $params->get('team4_img') ){
	$data[3][ 'img' ] 				= $params->get('team4_img');
	$data[3][ 'name' ] 				= $params->get('team4_name');
	$data[3][ 'desg' ] 				= $params->get('team4_desg');
	$data[3][ 'desc' ] 				= $params->get('team4_desc');
	$data[3][ 'facebook' ] 			= $params->get('team4_facebook');
	$data[3][ 'twitter' ] 			= $params->get('team4_twitter');
	$data[3][ 'googleplus' ] 		= $params->get('team4_googleplus');
	$data[3][ 'pinterest' ] 		= $params->get('team4_pinterest');
	$data[3][ 'linkedin' ] 			= $params->get('team4_linkedin');
}

require JModuleHelper::getLayoutPath('mod_sp_team', $params->get('layout'));