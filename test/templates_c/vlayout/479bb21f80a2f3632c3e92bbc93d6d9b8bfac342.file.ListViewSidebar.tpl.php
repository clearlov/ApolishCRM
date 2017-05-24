<?php /* Smarty version Smarty-3.1.7, created on 2017-04-27 11:41:41
         compiled from "/usr/local/var/www/htdocs/crm/vtigerdt/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24111085659016875afef92-43945948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '479bb21f80a2f3632c3e92bbc93d6d9b8bfac342' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerdt/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewSidebar.tpl',
      1 => 1493262808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24111085659016875afef92-43945948',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59016875b0604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59016875b0604')) {function content_59016875b0604($_smarty_tpl) {?>
<div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>