<?php
/**
 * @version		$Id: item_comments_form.php 1992 2013-07-04 16:36:38Z lefteris.kavadas $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2013 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;
$document = & JFactory::getDocument();
$lang = $document->language;
if ($lang == "en-gb") {
	$LEAVE_A_COMMENT = "Leave a comment";
	$NAME = "Name";
	$ENTER_YOUR_NAME = "enter your name...";
	$EMAIL = "Email";
	$ENTER_YOUR_EMAIL_ADDRESS = "enter your email address...";
	$MESSAGE = "Message";
	$ENTER_YOUR_MESSAGE_HERE = "enter your message here...";
	$SUBMIT_COMMENT = "Submit Comment";
} else if ($lang == "ru-ru") {
	$LEAVE_A_COMMENT = "Оставте свой комментарий";
	$NAME = "Имя";
	$ENTER_YOUR_NAME = "введите ваше имя...";
	$EMAIL = "Почта";
	$ENTER_YOUR_EMAIL_ADDRESS = "введите ваш email...";
	$MESSAGE = "комментарий";
	$ENTER_YOUR_MESSAGE_HERE = "введите ваш комментарий здесь...";
	$SUBMIT_COMMENT = "Добавить комментарий";
} else if ($lang == "uk-ua") {
	$LEAVE_A_COMMENT = "Залиште свій коментар";
	$NAME = "Ім’я";
	$ENTER_YOUR_NAME = "введіть свое ім’я...";
	$EMAIL = "Пошта";
	$ENTER_YOUR_EMAIL_ADDRESS = "введіть ваш email...";
	$MESSAGE = "коментар";
	$ENTER_YOUR_MESSAGE_HERE = "введіть ваш коментар тут...";
	$SUBMIT_COMMENT = "Додати коментар";
}
?>

<h3><?php echo $LEAVE_A_COMMENT ?></h3>

<?php if($this->params->get('commentsFormNotes')): ?>
<p class="itemCommentsFormNotes">
	<?php if($this->params->get('commentsFormNotesText')): ?>
	<?php echo nl2br($this->params->get('commentsFormNotesText')); ?>
	<?php else: ?>
	<?php endif; ?>
</p>
<?php endif; ?>

<form action="<?php echo JURI::root(true); ?>/index.php" method="post" id="comment-form" class="form-validate">
	
	<div class="row-fluid">
		<div class="span4">
			<label class="formName" for="userName"><?php echo $NAME ?> *</label>
			<input class="input-block-level" type="text" name="userName" id="userName" value="<?php echo $ENTER_YOUR_NAME ?>" onblur="if(this.value=='') this.value='<?php echo $ENTER_YOUR_NAME ?>';" onfocus="if(this.value=='<?php echo $ENTER_YOUR_NAME ?>') this.value='';" />
		</div>
		<div class="span4">
			<label class="formEmail" for="commentEmail"><?php echo $EMAIL ?> *</label>
			<input class="input-block-level" type="text" name="commentEmail" id="commentEmail" value="<?php echo $ENTER_YOUR_EMAIL_ADDRESS ?>" onblur="if(this.value=='') this.value='<?php echo $ENTER_YOUR_EMAIL_ADDRESS ?>';" onfocus="if(this.value=='<?php echo $ENTER_YOUR_EMAIL_ADDRESS ?>') this.value='';" />
	</div>
	<div class="row-fluid">
		<div class="span12">
			<label class="formComment" for="commentText"><?php echo $MESSAGE ?> *</label>
			<textarea rows="9" cols="10" class="input-block-level" onblur="if(this.value=='') this.value='<?php echo $ENTER_YOUR_MESSAGE_HERE ?>';" onfocus="if(this.value=='<?php echo $ENTER_YOUR_MESSAGE_HERE ?>') this.value='';" name="commentText" id="commentText"><?php echo $ENTER_YOUR_MESSAGE_HERE ?></textarea>
		</div>		
	</div>
		
	<?php if($this->params->get('recaptcha') && ($this->user->guest || $this->params->get('recaptchaForRegistered', 1))): ?>
	<label class="formRecaptcha"><?php echo JText::_('K2_ENTER_THE_TWO_WORDS_YOU_SEE_BELOW'); ?></label>
	<div id="recaptcha"></div>
	<?php endif; ?>

	<input type="submit" class="btn btn-primary" id="submitCommentButton" value="<?php echo $SUBMIT_COMMENT ?>" />

	<span id="formLog"></span>

	<input type="hidden" name="option" value="com_k2" />
	<input type="hidden" name="view" value="item" />
	<input type="hidden" name="task" value="comment" />
	<input type="hidden" name="itemID" value="<?php echo JRequest::getInt('id'); ?>" />
	<?php echo JHTML::_('form.token'); ?>
</form>
