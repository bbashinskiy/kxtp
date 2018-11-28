<?php
/**
 * @subpackage	mod_sp_team
 * @copyright	Copyright (C) 2010 - 2013 JoomShaper. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$count 		= count($data);

?>

<div id="sp-team<?php echo $module->id; ?>" class="sp-team <?php echo $params->get('moduleclass_sfx') ?>">
    <div class="row-fluid">
    	<?php foreach ($data as $key => $value):  ?>
       		<div class="span<?php echo round(12/$count); ?> <?php echo ($key==$count-1) ? 'last-child': ''; ?> ">
                <div class="sp-member<?php echo ($key==$count-1) ? ' last-child': ''; ?>">
                    <div class="image-wrapper">
                        <img class="img-thumbnail img-circle" src="<?php echo $value['img'] ?>" alt="" >
                          <?php 
                          if( (isset( $value['facebook']) && ($value['facebook'] !=''))
                          || (isset( $value['twitter']) && ($value['twitter'] !=''))
                          || (isset( $value['googleplus']) && ($value['googleplus'] !=''))
                          || (isset( $value['pinterest']) && ($value['pinterest'] !=''))
                          || (isset( $value['linkedin']) && ($value['linkedin'] !='')) ): ?>
                          <div class="social-icons">
                              <?php if($value['facebook'] !=''): ?>
                                <a target="_blank" href="<?php echo $value['facebook']; ?>" ><i class="icon-facebook"></i></a>
                              <?php endif; ?>
                              <?php if($value['twitter'] !=''): ?>
                                <a target="_blank" href="<?php echo $value['twitter']; ?>" ><i class="icon-twitter"></i></a>
                              <?php endif; ?>
                              <?php if($value['googleplus'] !=''): ?>
                                <a target="_blank" href="<?php echo $value['googleplus']; ?>" ><i class="icon-google-plus"></i></a>
                              <?php endif; ?>
                              <?php if($value['pinterest'] !=''): ?>
                                <a target="_blank" href="<?php echo $value['pinterest']; ?>" ><i class="icon-pinterest"></i></a>
                              <?php endif; ?>
                              <?php if($value['linkedin'] !=''): ?>
                                <a target="_blank" href="<?php echo $value['linkedin']; ?>" ><i class="icon-linkedin"></i></a>
                              <?php endif; ?>
                          </div><!--/.social-icons-->

                    </div>
                    <div class="clr"></div>

                    <?php if( isset($value['name']) && ($value['name'] !='') ): ?>
                      <h3 class"sp-team-name"><?php echo $value['name']; ?></h3>
                    <?php endif; ?>
                    
                    <?php if( isset($value['desg']) && ($value['desg'] !='') ): ?>
                      <p class="sp-designation"><?php echo $value['desg']; ?></p>
                    <?php endif; ?>
                    
                    <?php if( isset($value['desc']) && ($value['desc'] !='') ): ?>
                      <p class="sp-description"><?php echo $value['desc']; ?></p>
                    <?php endif; ?>


                  <?php endif; ?>
                </div><!--/.member-->
            </div><!--/.span-->
    	<?php endforeach; ?>
    </div><!--/.row-fluid-->
</div>