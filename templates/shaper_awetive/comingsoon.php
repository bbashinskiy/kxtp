<?php
/**
 * @package Helix Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2013 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
$this->helix = Helix::getInstance();

//get language and direction
$doc = JFactory::getDocument();
$app = JFactory::getApplication();
$this->language = $doc->language;

$this->helix->getDocument()->setTitle('Coming Soon');

$this->helix->header()->addCSS('comingsoon.css')->addJS('jquery.countdown.min.js');

require_once(JPATH_LIBRARIES.'/joomla/document/html/renderer/head.php');
$header_renderer = new JDocumentRendererHead($doc);
$header_contents = $header_renderer->render(null);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"  lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"  lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"  lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php echo $header_contents; ?>
</head>
<body<?php echo $this->helix->bodyClass('bg clearfix'); ?>>
	<div class="container">
		<div id="comingsoon" class="clearfix">
			<a id="logo" class="logo" href="<?php echo $this->baseurl; ?>"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></a>

			<h1 class="comingsoon-title"><?php echo $this->helix->Param('comingsoon_title'); ?></h1>

			<div id="comingsoon-countdown" class="comingsoon-countdown">
				
			</div>

			<div class="comingsoon-content">
				<?php echo $this->helix->Param('comingsoon_content'); ?>
			</div>

			<?php
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
						$output = '<div class="social-media">';
						$output .= '<ul class="social-icons">';

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
						$output .='</div>';

					echo $output;
				}
			?>
		</div>
	</div>

	<script type="text/javascript">

		jQuery(function($) {
			$('#comingsoon-countdown').countdown('<?php echo $this->helix->Param("comingsoon_year"); ?>/<?php echo $this->helix->Param("comingsoon_month"); ?>/<?php echo $this->helix->Param("comingsoon_day"); ?>', function(event) {
			    $(this).html(event.strftime('<div class="days"><span class="number">%-D</span><span class="string">%!D:<?php echo JText::_("DAY"); ?>,<?php echo JText::_("DAYS"); ?>;</span></div><div class="hours"><span class="number">%H</span><span class="string">%!H:<?php echo JText::_("HOUR"); ?>,<?php echo JText::_("HOURS"); ?>;</span></div><div class="minutes"><span class="number">%M</span><span class="string">%!M:<?php echo JText::_("MINUTE"); ?>,<?php echo JText::_("MINUTES"); ?>;</span></div><div class="seconds"><span class="number">%S</span><span class="string">%!M:<?php echo JText::_("SECOND"); ?>,<?php echo JText::_("SECONDS"); ?>;</span></div>'));
			});
		});

	</script>

</body>
</html>