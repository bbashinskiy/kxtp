<?php 
	// no direct access
	defined('_JEXEC') or die('Restricted access');
	$i = 0;
	$j = 0;
?>

<div class="sptab awetive-layout tabbable tabs-left">

	<ul class="nav nav-tabs">
		<?php foreach ($list as $item) : ?>
			<li class="<?php echo ($i==0)? 'active': ''; ?>">
				<a href="#sptab-<?php echo $i; ?>" data-toggle="tab"><?php echo $item['title']; ?></a>
			</li>
		<?php $i++; endforeach; ?>
	</ul>

	<div class="tab-content">
		<?php foreach ($list as $item) : ?>
			<div class="tab-pane fade<?php echo ($j==0)? ' in active': ''; ?>" id="sptab-<?php echo $j; ?>">

				<div class="tab-content-warpper clearfix">

					<?php 
						preg_match("/<img[^>]+\>/i", $item['content'], $matches);
						if (isset($matches[0])) {
							?>
								<div class="img-wrapper">
									<?php echo $matches[0]; ?>
								</div>
							<?php
						}	
					?>

					<div class="tab-item-content">
						<?php echo preg_replace("/<img[^>]+\>/i", "", $item['content']); ?>
					</div>
				</div>
			</div>
		<?php $j++; endforeach; ?>
	</div>
</div>

