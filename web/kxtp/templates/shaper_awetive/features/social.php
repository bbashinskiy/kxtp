<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2013 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');
 
class HelixFeatureSocial {

	private $helix;
    public $beforeModule=true;

	public function __construct($helix){
		$this->helix = $helix;
	}

	public function Position(){
		return $this->helix->Param('social_position');
	}

	public function onPosition(){
		if(	$this->helix->Param('facebook') ||
			$this->helix->Param('twitter') ||
			$this->helix->Param('googleplus') ||
			$this->helix->Param('pinterest') ||
			$this->helix->Param('linkedin') ||
			$this->helix->Param('dribbble') ||
			$this->helix->Param('youtube') ||
			$this->helix->Param('vimeo') ||
			$this->helix->Param('skype') ||
			$this->helix->Param('flickr') ){
				$output = '<ul class="social-icons">';

				if($this->helix->Param('facebook')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('facebook') . '"><i class="icon-facebook"></i></a></li>';
				}

				if($this->helix->Param('twitter')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('twitter') . '"><i class="icon-twitter"></i></a></li>';
				}

				if($this->helix->Param('googleplus')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('googleplus') . '"><i class="icon-google-plus"></i></a></li>';
				}

				if($this->helix->Param('pinterest')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('pinterest') . '"><i class="icon-pinterest"></i></a></li>';
				}

				if($this->helix->Param('linkedin')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('linkedin') . '"><i class="icon-linkedin"></i></a></li>';
				}

				if($this->helix->Param('dribbble')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('dribbble') . '"><i class="icon-dribbble"></i></a></li>';
				}

				if($this->helix->Param('youtube')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('youtube') . '"><i class="icon-youtube"></i></a></li>';
				}

				if($this->helix->Param('flickr')){
					$output .= '<li><a target="_blank" href="' . $this->helix->Param('flickr') . '"><i class="icon-flickr"></i></a></li>';
				}

				$output .='</ul>';

				return $output;
			}

			return false;
	}    
}