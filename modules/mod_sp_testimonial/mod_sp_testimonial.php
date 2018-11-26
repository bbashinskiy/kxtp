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

//Testimonial 1
if( $params->get('testimonial1_name') ){
	$data[0][ 'name' ] 			= $params->get('testimonial1_name');
	$data[0][ 'designation' ] 	= $params->get('testimonial1_designation');
	$data[0][ 'testimonial' ] 	= $params->get('testimonial1_testimonial');
	$data[0][ 'logo' ] 			= $params->get('testimonial1_logo');
	$data[0][ 'avatar' ] 		= $params->get('testimonial1_avatar');
}

//Testimonial 2
if( $params->get('testimonial2_name') ){
	$data[1][ 'name' ]   		= $params->get('testimonial2_name');
	$data[1][ 'designation' ]   = $params->get('testimonial2_designation');
	$data[1][ 'testimonial' ] 	= $params->get('testimonial2_testimonial');
	$data[1][ 'logo' ] 			= $params->get('testimonial2_logo');
	$data[1][ 'avatar' ] 		= $params->get('testimonial2_avatar');
}

//Testimonial 3
if( $params->get('testimonial3_name') ){
	$data[2][ 'name' ] 			= $params->get('testimonial3_name');
    $data[2][ 'designation' ] 	= $params->get('testimonial3_designation');
    $data[2][ 'testimonial' ] 	= $params->get('testimonial3_testimonial');
    $data[2][ 'logo' ] 			= $params->get('testimonial3_logo');
    $data[2][ 'avatar' ] 		= $params->get('testimonial3_avatar');
}

//Testimonial 4
if( $params->get('testimonial4_name') ){
	$data[3][ 'name' ] 			= $params->get('testimonial4_name');
	$data[3][ 'designation' ] 	= $params->get('testimonial4_designation');
	$data[3][ 'testimonial' ] 	= $params->get('testimonial4_testimonial');
	$data[3][ 'logo' ] 			= $params->get('testimonial4_logo');
	$data[3][ 'avatar' ] 		= $params->get('testimonial4_avatar');
}

//Testimonial 5
if( $params->get('testimonial5_name') ){
	$data[4][ 'name' ] 			= $params->get('testimonial5_name');
	$data[4][ 'designation' ] 	= $params->get('testimonial5_designation');
	$data[4][ 'testimonial' ] 	= $params->get('testimonial5_testimonial');
	$data[4][ 'logo' ] 			= $params->get('testimonial5_logo');
	$data[4][ 'avatar' ] 		= $params->get('testimonial5_avatar');
}

//Testimonial 6
if( $params->get('testimonial6_name') ){
	$data[5][ 'name' ] 			= $params->get('testimonial6_name');
	$data[5][ 'designation' ] 	= $params->get('testimonial6_designation');
	$data[5][ 'testimonial' ] 	= $params->get('testimonial6_testimonial');
	$data[5][ 'logo' ] 			= $params->get('testimonial6_logo');
	$data[5][ 'avatar' ] 		= $params->get('testimonial6_avatar');
}

//Testimonial 7
if( $params->get('testimonial7_name') ){
	$data[6][ 'name' ] 			= $params->get('testimonial7_name');
	$data[6][ 'designation' ] 	= $params->get('testimonial7_designation');
	$data[6][ 'testimonial' ] 	= $params->get('testimonial7_testimonial');
	$data[6][ 'logo' ] 			= $params->get('testimonial7_logo');
	$data[6][ 'avatar' ] 		= $params->get('testimonial7_avatar');
}

//Testimonial 8
if( $params->get('testimonial8_name') ){
	$data[7][ 'name' ] 			= $params->get('testimonial8_name');
	$data[7][ 'designation' ] 	= $params->get('testimonial8_designation');
	$data[7][ 'testimonial' ] 	= $params->get('testimonial8_testimonial');
	$data[7][ 'logo' ] 			= $params->get('testimonial8_logo');
	$data[7][ 'avatar' ]	 	= $params->get('testimonial8_avatar');
}

//Testimonial 9
if( $params->get('testimonial9_name') ){
	$data[8][ 'name' ] 			= $params->get('testimonial9_name');
	$data[8][ 'designation' ] 	= $params->get('testimonial9_designation');
	$data[8][ 'testimonial' ] 	= $params->get('testimonial9_testimonial');
	$data[8][ 'logo' ] 			= $params->get('testimonial9_logo');
	$data[8][ 'avatar' ] 		= $params->get('testimonial9_avatar');
}

//Testimonial 10
if( $params->get('testimonial10_name') ){
	$data[9][ 'name' ] 			= $params->get('testimonial10_name');
	$data[9][ 'designation' ] 	= $params->get('testimonial10_designation');
	$data[9][ 'testimonial' ] 	= $params->get('testimonial10_testimonial');
	$data[9][ 'logo' ] 			= $params->get('testimonial10_logo');
	$data[9][ 'avatar' ] 		= $params->get('testimonial10_avatar');
}

//Testimonial 11
if( $params->get('testimonial11_name') ){
	$data[10][ 'name' ] 		= $params->get('testimonial11_name');
	$data[10][ 'designation' ] 	= $params->get('testimonial11_designation');
	$data[10][ 'testimonial' ] 	= $params->get('testimonial11_testimonial');
	$data[10][ 'logo' ] 		= $params->get('testimonial11_logo');
	$data[10][ 'avatar' ] 		= $params->get('testimonial11_avatar');
}

//Testimonial 12
if( $params->get('testimonial12_name') ){
	$data[11][ 'name' ] 		= $params->get('testimonial12_name');
	$data[11][ 'designation' ] 	= $params->get('testimonial12_designation');
	$data[11][ 'testimonial' ] 	= $params->get('testimonial12_testimonial');
	$data[11][ 'logo' ] 		= $params->get('testimonial12_logo');
	$data[11][ 'avatar' ] 		= $params->get('testimonial12_avatar');
}


//Testimonial 13
if( $params->get('testimonial13_name') ){
	$data[12][ 'name' ] 		= $params->get('testimonial13_name');
	$data[12][ 'designation' ] 	= $params->get('testimonial13_designation');
	$data[12][ 'testimonial' ] 	= $params->get('testimonial13_testimonial');
	$data[12][ 'logo' ] 		= $params->get('testimonial13_logo');
	$data[12][ 'avatar' ] 		= $params->get('testimonial13_avatar');
}

//Testimonial 14
if( $params->get('testimonial14_name') ){
	$data[13][ 'name' ] 		= $params->get('testimonial14_name');
	$data[13][ 'designation' ] 	= $params->get('testimonial14_designation');
	$data[13][ 'testimonial' ] 	= $params->get('testimonial14_testimonial');
	$data[13][ 'logo' ] 		= $params->get('testimonial14_logo');
	$data[13][ 'avatar' ] 		= $params->get('testimonial14_avatar');
}

//Testimonial 15
if( $params->get('testimonial15_name') ){
	$data[14][ 'name' ] 		= $params->get('testimonial15_name');
	$data[14][ 'designation' ] 	= $params->get('testimonial15_designation');
	$data[14][ 'testimonial' ] 	= $params->get('testimonial15_testimonial');
	$data[14][ 'logo' ] 		= $params->get('testimonial15_logo');
	$data[14][ 'avatar' ] 		= $params->get('testimonial15_avatar');
}

//Testimonial 16
if( $params->get('testimonial16_name') ){
	$data[15][ 'name' ] 		= $params->get('testimonial16_name');
	$data[15][ 'designation' ] 	= $params->get('testimonial16_designation');
	$data[15][ 'testimonial' ] 	= $params->get('testimonial16_testimonial');
	$data[15][ 'logo' ] 		= $params->get('testimonial16_logo');
	$data[15][ 'avatar' ] 		= $params->get('testimonial16_avatar');
}

//Testimonial 17
if( $params->get('testimonial17_name') ){
	$data[16][ 'name' ] 		= $params->get('testimonial17_name');
	$data[16][ 'designation' ] 	= $params->get('testimonial17_designation');
	$data[16][ 'testimonial' ] 	= $params->get('testimonial17_testimonial');
	$data[16][ 'logo' ] 		= $params->get('testimonial17_logo');
	$data[16][ 'avatar' ] 		= $params->get('testimonial17_avatar');
}

//Testimonial 18
if( $params->get('testimonial18_name') ){
	$data[17][ 'name' ] 		= $params->get('testimonial18_name');
	$data[17][ 'designation' ] 	= $params->get('testimonial18_designation');
	$data[17][ 'testimonial' ] 	= $params->get('testimonial18_testimonial');
	$data[17][ 'logo' ] 		= $params->get('testimonial18_logo');
	$data[17][ 'avatar' ] 		= $params->get('testimonial18_avatar');
}

//Testimonial 19
if( $params->get('testimonial19_name') ){
	$data[18][ 'name' ] 		= $params->get('testimonial19_name');
	$data[18][ 'designation' ] 	= $params->get('testimonial19_designation');
	$data[18][ 'testimonial' ] 	= $params->get('testimonial19_testimonial');
	$data[18][ 'logo' ] 		= $params->get('testimonial19_logo');
	$data[18][ 'avatar' ] 		= $params->get('testimonial19_avatar');
}

//Testimonial 20
if( $params->get('testimonial20_name') ){
	$data[19][ 'name' ] 		= $params->get('testimonial20_name');
	$data[19][ 'designation' ] 	= $params->get('testimonial20_designation');
	$data[19][ 'testimonial' ] 	= $params->get('testimonial20_testimonial');
	$data[19][ 'logo' ] 		= $params->get('testimonial20_logo');
	$data[19][ 'avatar' ] 		= $params->get('testimonial20_avatar');
}

require JModuleHelper::getLayoutPath('mod_sp_testimonial', $params->get('layout', 'default'));