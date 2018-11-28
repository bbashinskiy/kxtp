<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_sp_timeline
 * @copyright	Copyright (C) 2010 - 2013 JoomShaper. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;
$count = count($data);

?>

<!-- Time Line -->
<?php if($count>0) { ?>
	<div class="sp-timeline clearfix">
		<div class="timeline-left clearfix">
			<?php foreach ($data as $key => $value) { ?>
				<?php if(($key%2)==0) { ?>
					<div class="timeline-item clearfix">
						<div class="timeline-content">
							<h3 class="timeline-title">
								<?php echo $value['time']; ?>
							</h3>
							<div class="timeline-text">
								<?php if($value['thumb'] !='' ) { ?>
									<img class="pull-right" src="<?php echo $value['thumb']; ?>" alt=" " />
								<?php } ?>
								
								<?php echo $value['event']; ?>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>

		<div class="timeline-right clearfix">
			<?php foreach ($data as $key => $value) { ?>
				<?php if(($key%2)==1) { ?>
					<div class="timeline-item clearfix">
						<div class="timeline-content">
							<h3 class="timeline-title">
								<?php echo $value['time']; ?>
							</h3>
							<div class="timeline-text">
								<?php if($value['thumb'] !='' ) { ?>
									<img class="pull-right" src="<?php echo $value['thumb']; ?>" alt=" " />
								<?php } ?>
								
								<?php echo $value['event']; ?>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div><!--/#sp-timeline-->
<?php } else { ?>
	<p class="alert alert-error">No item found!</p>
<?php }