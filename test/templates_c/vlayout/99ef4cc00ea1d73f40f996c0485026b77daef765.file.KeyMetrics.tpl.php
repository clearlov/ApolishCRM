<?php /* Smarty version Smarty-3.1.7, created on 2017-05-24 15:23:21
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/KeyMetrics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1315198189592534e98a97f7-04102584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ef4cc00ea1d73f40f996c0485026b77daef765' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/KeyMetrics.tpl',
      1 => 1493262808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315198189592534e98a97f7-04102584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_592534e990894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592534e990894')) {function content_592534e990894($_smarty_tpl) {?>
<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>

<div class="dashboardWidgetContent" style='padding:5px'>
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/KeyMetricsContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>