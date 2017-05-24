<?php /* Smarty version Smarty-3.1.7, created on 2017-05-17 22:29:13
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141466433158f0865fbc0689-39031852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120ab9129375c6865ec6e9c1e044f771f5ce1a31' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Settings/Vtiger/Index.tpl',
      1 => 1493262807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141466433158f0865fbc0689-39031852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f0865fbed56',
  'variables' => 
  array (
    'MODULE' => 0,
    'USERS_COUNT' => 0,
    'ACTIVE_WORKFLOWS' => 0,
    'ACTIVE_MODULES' => 0,
    'SETTINGS_SHORTCUTS' => 0,
    'SPAN_COUNT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f0865fbed56')) {function content_58f0865fbed56($_smarty_tpl) {?>
<div class="container-fluid settingsIndexPage"><div class="widget_header row-fluid"><h3><?php echo vtranslate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><hr><div class="row-fluid"><span class="span4 settingsSummary"><a href="index.php?module=Users&parent=Settings&view=List"><h2 style="font-size: 44px" class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['USERS_COUNT']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span><span class="span4 settingsSummary"><a href="index.php?module=Workflows&parent=Settings&view=List"><h2 style="font-size: 44px" class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_WORKFLOWS']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_WORKFLOWS_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span><span class="span4 settingsSummary"><a href="index.php?module=ModuleManager&parent=Settings&view=List"><h2 style="font-size: 44px" class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value;?>
</h2><p class="summaryText" style="margin-top:20px;"><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></span></div><br><br><h3><?php echo vtranslate('LBL_SETTINGS_SHORTCUTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><hr><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable(1, null, 0);?><div class="row-fluid"><div class="span1">&nbsp;</div><div id="settingsShortCutsContainer" class="span11"><div  class="row-fluid"><?php  $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->key => $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value){
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->_loop = true;
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->iteration++;
 $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->last = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->iteration === $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['shortcuts']['last'] = $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->last;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php if ($_smarty_tpl->tpl_vars['SPAN_COUNT']->value==3){?></div><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable(1, null, 0);?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['shortcuts']['last']){?><div class="row-fluid"><?php }?><?php continue 1?><?php }?><?php $_smarty_tpl->tpl_vars['SPAN_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['SPAN_COUNT']->value+1, null, 0);?><?php } ?></div></div></div>
<?php }} ?>