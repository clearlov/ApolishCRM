<?php /* Smarty version Smarty-3.1.7, created on 2017-04-18 06:26:59
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/PriceBooks/ProductPriceBookPopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134495286958f5b1b38baa06-15226749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edb5d2b62d86ecf46e7cc48dc346a70674b78e35' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/PriceBooks/ProductPriceBookPopup.tpl',
      1 => 1492156652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134495286958f5b1b38baa06-15226749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'PARENT_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f5b1b3910b9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f5b1b3910b9')) {function content_58f5b1b3910b9($_smarty_tpl) {?>
<div id="popupPageContainer" class="contentsDiv"><div class="paddingLeftRight10px"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('PopupSearch.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<form id="popupPage" action="javascript:void(0)"><div id="popupContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ProductPriceBookPopupContents.tpl',$_smarty_tpl->tpl_vars['PARENT_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form></div><input type="hidden" class="triggerEventName" value="<?php echo getPurifiedSmartyParameters('triggerEventName');?>
"/></div></div><?php }} ?>