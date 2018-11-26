<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_sp_testimonial
 * @copyright	Copyright (C) 2010 - 2013 JoomShaper. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$count = count($data);
?>

<div class="sp-testimonial-wrapper <?php echo $params->get('moduleclass_sfx'); ?>" id="sp-testimonial">
<?php if( $count>0 ) { ?>

	<div class="mod-sp-testimonial" id="mod-sp-testimonial">
		<?php foreach ($data as $key => $value) { ?>
		
		<div class="media">
			<?php if(isset($value['avatar']) && ($value['avatar']) != '') { ?>
				<div class="pull-left">
					<img src="<?php echo $value['avatar']; ?>" alt="" width="64" />
				</div>
			<?php } ?>
			<div class="media-body">
				<?php if(isset($value['testimonial']) && ($value['testimonial']) != '') { ?>
					<p><?php echo $value['testimonial']; ?></p>
				<?php } ?>
				

				<?php if(isset($value['name']) && ($value['name']) != '') { ?>
					<h3><?php echo $value['name']; ?> <small><?php echo $value['designation']; ?></small></h3>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
	</div>

	

<?php } else {?>
	<p class="alert alert-error">No testimonial found!! Please add some testimonials</p>
<?php } ?>
</div>