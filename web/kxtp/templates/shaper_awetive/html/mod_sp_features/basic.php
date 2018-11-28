<?php
    /**
    * @author    JoomShaper http://www.joomshaper.com
    * @copyright Copyright (C) 2010 - 2013 JoomShaper
    * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
    */

	// no direct access
    defined('_JEXEC') or die;
    ?>

    <div class="sp-features sp-basic <?php echo $moduleclass_sfx;?>">
        <div class="row-fluid">
            <?php foreach ($data as $key => $value): ?>
                <?php
                    $class = '';
                    if( isset($value['class']) && ($value['class'] !='') ){
                        $class = $value['class'];
                    }
                ?>
                <div class="span<?php echo round(12/count($data)); ?> <?php echo $class; ?>">
                    <div class="sp-feature media">
                        <div class="pull-left">
                            <i class="<?php echo $value['icon']; ?>"></i>
                        </div>
                        <div class="media-body">
                            <?php if( isset($value['title']) && ($value['title'] !='') ): ?>
                                <h3><?php echo $value['title']; ?></h3>
                            <?php endif; ?>
                            <?php if( isset($value['desc']) && ($value['desc'] !='') ): ?>
                                <p><?php echo $value['desc']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div><!--/.sp-feature-->
                </div>
            <?php endforeach; ?>
        </div><!--/.row-fluid-->
    </div><!--/.sp-features-->