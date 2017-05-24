<?php /* Smarty version Smarty-3.1.7, created on 2017-05-24 15:23:21
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/KeyMetricsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:317022063592534e996cd84-86053425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126372c8803a42754d4526d841cebfcd5c023207' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/KeyMetricsContents.tpl',
      1 => 1493262808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317022063592534e996cd84-86053425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'KEYMETRICS' => 0,
    'KEYMETRIC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_592534e9985d8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592534e9985d8')) {function content_592534e9985d8($_smarty_tpl) {?>
<div style='padding:5px'><?php  $_smarty_tpl->tpl_vars['KEYMETRIC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['KEYMETRIC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['KEYMETRICS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['KEYMETRIC']->key => $_smarty_tpl->tpl_vars['KEYMETRIC']->value){
$_smarty_tpl->tpl_vars['KEYMETRIC']->_loop = true;
?><div style='padding:5px'><span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['count'];?>
</span><a href="?module=<?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['module'];?>
&view=List&viewname=<?php echo $_smarty_tpl->tpl_vars['KEYMETRIC']->value['id'];?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['KEYMETRIC']->value['name'],$_smarty_tpl->tpl_vars['KEYMETRIC']->value['module']);?>
</a></div><?php } ?></div>
<?php }} ?>