<?php /* Smarty version Smarty-3.1.7, created on 2017-04-18 07:41:10
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/PriceBooks/ListPriceUpdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22084996058f5c31622c7a4-06091193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a89aa6a399fe87f289091cf3e8d63b1e6e98b9c' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/PriceBooks/ListPriceUpdate.tpl',
      1 => 1492156652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22084996058f5c31622c7a4-06091193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PRICEBOOK_ID' => 0,
    'REL_ID' => 0,
    'CURRENT_PRICE' => 0,
    'USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f5c31626faa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f5c31626faa')) {function content_58f5c31626faa($_smarty_tpl) {?>
<div id="listPriceUpdateContainer"><div class="modal-header"><button data-dismiss="modal" class="pull-right"><i class="icon-remove alignMiddle"></i></button><h3><?php echo vtranslate('LBL_EDIT_LIST_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal" id="listPriceUpdate" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="RelationAjax" /><input type="hidden" name="src_record" value="<?php echo $_smarty_tpl->tpl_vars['PRICEBOOK_ID']->value;?>
" /><input type="hidden" name="relid" value="<?php echo $_smarty_tpl->tpl_vars['REL_ID']->value;?>
" /><div class="modal-body"><div><span><strong><?php echo vtranslate('LBL_EDIT_LIST_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span>&nbsp;:&nbsp;<input type="text" name="currentPrice" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PRICE']->value;?>
" data-validation-engine="validate[required,funcCall[Vtiger_Currency_Validator_Js.invokeValidation]]"data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
' data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
' /></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>	<?php }} ?>