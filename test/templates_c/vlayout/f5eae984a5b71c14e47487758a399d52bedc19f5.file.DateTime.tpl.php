<?php /* Smarty version Smarty-3.1.7, created on 2017-05-18 13:31:20
         compiled from "/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Calendar/uitypes/DateTime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60313129358f5d409012d41-36270256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5eae984a5b71c14e47487758a399d52bedc19f5' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerd/includes/runtime/../../layouts/vlayout/modules/Calendar/uitypes/DateTime.tpl',
      1 => 1493262807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60313129358f5d409012d41-36270256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58f5d40905e49',
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'MODULE_MODEL' => 0,
    'DATE_TIME_VALUE' => 0,
    'TIME_FIELD' => 0,
    'DATE_TIME_COMPONENTS' => 0,
    'DATE_TIME_CONVERTED_VALUE' => 0,
    'DATE_FIELD' => 0,
    'MODULE' => 0,
    'BLOCK_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f5d40905e49')) {function content_58f5d40905e49($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='date_start'){?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule(), null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_start'), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()=='due_date'){?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value, null, 0);?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable(false, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['DATE_TIME_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['TIME_FIELD']->value)){?><?php $_smarty_tpl->tpl_vars['TIME_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1]), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['TIME_FIELD']->value){?><?php $_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE'] = new Smarty_variable(DateTimeField::convertToUserTimeZone($_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value)->format('Y-m-d H:i:s'), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS'] = new Smarty_variable(explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['DATE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['DATE_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[0]), null, 0);?><?php }?><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/Date.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['DATE_FIELD']->value), 0);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['TIME_FIELD']->value)){?><div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/Time.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value), 0);?>
</div><?php }?><?php }} ?>