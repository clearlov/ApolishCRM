<?php /* Smarty version Smarty-3.1.7, created on 2017-05-05 11:30:44
         compiled from "/usr/local/var/www/htdocs/crm/vtigerdt/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1559899339590bf1e45d8bd0-66696729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34104f73af5110d3f65f35338953bf15a901dce5' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerdt/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1493262807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1559899339590bf1e45d8bd0-66696729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_590bf1e46003f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590bf1e46003f')) {function content_590bf1e46003f($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>