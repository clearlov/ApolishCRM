<?php /* Smarty version Smarty-3.1.7, created on 2017-05-18 13:31:12
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewTypes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163702372558f08642c43ac0-83958627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d7319f327434564fb5073f317c51677a934d6a8' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Calendar/CalendarViewTypes.tpl',
      1 => 1493262807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163702372558f08642c43ac0-83958627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f08642cbcf6',
  'variables' => 
  array (
    'MODULE' => 0,
    'VIEWTYPES' => 0,
    'VIEWINFO' => 0,
    'INVISIBLE_CALENDAR_VIEWS_EXISTS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f08642cbcf6')) {function content_58f08642cbcf6($_smarty_tpl) {?>
<div name='calendarViewTypes'><div id="calendarview-feeds" style="margin-left:10px;"><!--Adding or Editing calendar views in My Calendar--><div class="modal addViewsToCalendar hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_ADD_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><div class="modal-body"><form class="form-horizontal"><input type="hidden" class="selectedUser" value="" /><input type="hidden" class="selectedUserColor" value="" /><input type="hidden" class="selectedViewModule" value="" /><input type="hidden" class="userCalendarMode" value="" /><div class="control-group addCalendarViewsList"><label class="control-label"><?php echo vtranslate('LBL_SELECT_ACTIVITY_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><select class="select2" name="usersCalendarList" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['VIEWINFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWINFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['VIEWTYPES']->value['invisible']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWINFO']->key => $_smarty_tpl->tpl_vars['VIEWINFO']->value){
$_smarty_tpl->tpl_vars['VIEWINFO']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldname'];?>
" data-viewmodule="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['module'];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldlabel'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
</option><?php } ?></select></div></div><div class="control-group editCalendarViewsList"><label class="control-label"><?php echo vtranslate('LBL_EDITING_CALENDAR_VIEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><select class="select2" name="editingUsersList" style="min-width: 250px;"><?php  $_smarty_tpl->tpl_vars['VIEWINFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWINFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['VIEWTYPES']->value['visible']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWINFO']->key => $_smarty_tpl->tpl_vars['VIEWINFO']->value){
$_smarty_tpl->tpl_vars['VIEWINFO']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldname'];?>
" data-viewmodule="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['module'];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldlabel'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
</option><?php } ?></select></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_SELECT_CALENDAR_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><p class="calendarColorPicker"></p></div></div></form></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!--Adding or Editing calendar views in Shared Calendar--><div class="labelModal hide"><label class="checkbox addedCalendars" style="text-shadow: none"><input type="checkbox" />&nbsp;<span class="label" style="text-shadow: none"></span>&nbsp;<i class="icon-pencil editCalendarColor cursorPointer actionImage" title="<?php echo vtranslate('LBL_EDIT_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<i class="icon-trash cursorPointer actionImage deleteCalendarView" title="<?php echo vtranslate('LBL_DELETE_CALENDAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></label></div><?php  $_smarty_tpl->tpl_vars['VIEWINFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWINFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['VIEWTYPES']->value['visible']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWINFO']->key => $_smarty_tpl->tpl_vars['VIEWINFO']->value){
$_smarty_tpl->tpl_vars['VIEWINFO']->_loop = true;
?><label class="checkbox addedCalendars"><input type="checkbox" data-calendar-sourcekey="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldname'];?>
" data-calendar-feed="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['module'];?>
" data-calendar-feed-color="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['color'];?>
"data-calendar-fieldname="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldname'];?>
" data-calendar-fieldlabel="<?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldlabel'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
">&nbsp;<span class="label" style="text-shadow: none; background-color: <?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['color'];?>
;"><?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldlabel'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
</span>&nbsp;<i class="icon-pencil editCalendarColor cursorPointer actionImage" title="<?php echo vtranslate('LBL_EDIT_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<i class="icon-trash cursorPointer actionImage deleteCalendarView" title="<?php echo vtranslate('LBL_DELETE_CALENDAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></label><?php } ?><?php $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS'] = new Smarty_variable('false', null, 0);?><?php if ($_smarty_tpl->tpl_vars['VIEWTYPES']->value['invisible']){?><?php $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS'] = new Smarty_variable('true', null, 0);?><?php }?><input type="hidden" class="invisibleCalendarViews" value="<?php echo $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS']->value;?>
" /></div></div>

<script type="text/javascript">
jQuery(document).ready(function() {
	Calendar_CalendarView_Js.initiateCalendarFeeds();
});
</script><?php }} ?>