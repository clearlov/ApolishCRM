<?php /* Smarty version Smarty-3.1.7, created on 2017-05-20 09:21:45
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1067384834591f9a29dd8b90-93318098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '910cc313a2675e619bf49797ae3c372914197e6a' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step2.tpl',
      1 => 1493262807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1067384834591f9a29dd8b90-93318098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SUPPORTED_FILE_TYPES' => 0,
    '_FILE_TYPE' => 0,
    'SUPPORTED_FILE_ENCODING' => 0,
    '_FILE_ENCODING' => 0,
    '_FILE_ENCODING_LABEL' => 0,
    'SUPPORTED_DELIMITERS' => 0,
    '_DELIMITER' => 0,
    '_DELIMITER_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_591f9a29e09e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591f9a29e09e3')) {function content_591f9a29e09e3($_smarty_tpl) {?>

<table width="100%" cellspacing="0" cellpadding="2">
	<tr>
		<td><strong><?php echo vtranslate('LBL_IMPORT_STEP_2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
		<td class="big"><?php echo vtranslate('LBL_IMPORT_STEP_2_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
		<td>&nbsp;</td>
	</tr>
	<tr id="file_type_container">
		<td>&nbsp;</td>
		<td><span><?php echo vtranslate('LBL_FILE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></td>
		<td>
			<select name="type" id="type" onchange="ImportJs.handleFileTypeChange();">
				<?php  $_smarty_tpl->tpl_vars['_FILE_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FILE_TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_FILE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FILE_TYPE']->key => $_smarty_tpl->tpl_vars['_FILE_TYPE']->value){
$_smarty_tpl->tpl_vars['_FILE_TYPE']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_FILE_TYPE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FILE_TYPE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr id="file_encoding_container">
		<td>&nbsp;</td>
		<td><span><?php echo vtranslate('LBL_CHARACTER_ENCODING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></td>
		<td>
			<select name="file_encoding" id="file_encoding">
				<?php  $_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['_FILE_ENCODING'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_FILE_ENCODING']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->key => $_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->value){
$_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['_FILE_ENCODING']->value = $_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_FILE_ENCODING']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr id="delimiter_container">
		<td>&nbsp;</td>
		<td><span><?php echo vtranslate('LBL_DELIMITER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></td>
		<td>
			<select name="delimiter" id="delimiter">
				<?php  $_smarty_tpl->tpl_vars['_DELIMITER_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['_DELIMITER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_DELIMITERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->key => $_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->value){
$_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['_DELIMITER']->value = $_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['_DELIMITER']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr id="has_header_container">
		<td>&nbsp;</td>
		<td><span><?php echo vtranslate('LBL_HAS_HEADER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></td>
		<td><input type="checkbox" id="has_header" name="has_header" checked /></td>
	</tr>
</table><?php }} ?>