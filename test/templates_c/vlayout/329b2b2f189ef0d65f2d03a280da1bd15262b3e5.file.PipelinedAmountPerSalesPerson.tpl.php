<?php /* Smarty version Smarty-3.1.7, created on 2017-05-05 09:38:11
         compiled from "/usr/local/var/www/htdocs/crm/vtigerdt/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/PipelinedAmountPerSalesPerson.tpl" */ ?>
<?php /*%%SmartyHeaderCode:929797125590bd783cc65c2-42867228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329b2b2f189ef0d65f2d03a280da1bd15262b3e5' => 
    array (
      0 => '/usr/local/var/www/htdocs/crm/vtigerdt/includes/runtime/../../layouts/vlayout/modules/Potentials/dashboards/PipelinedAmountPerSalesPerson.tpl',
      1 => 1493262807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '929797125590bd783cc65c2-42867228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_590bd783d1d92',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590bd783d1d92')) {function content_590bd783d1d92($_smarty_tpl) {?>

<div class="dashboardWidgetHeader">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div class="dashboardWidgetContent">
	<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashBoardWidgetContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>



	<script type="text/javascript">
		Vtiger_MultiBarchat_Widget_Js('Vtiger_Pipelinedamountpersalesperson_Widget_Js',{},{
			getCharRelatedData : function() {
				var container = this.getContainer();
				var data = container.find('.widgetData').val();
				data = JSON.parse(data);
				var users = new Array();
				var stages = new Array();
				var count = new Array();
				for(var i=0; i<data.length ;i++) {
					if($.inArray(data[i].last_name, users) == -1) {
						users.push(data[i].last_name);
					}
					if($.inArray(data[i].sales_stage, stages) == -1) {
						stages.push(data[i].sales_stage);
					}
				}
				var allLinks = new Array();
				for(j in stages) {
					var salesStageCount = new Array();
                    var links = new Array();
					for(i in users) {
						var salesCount = 0;
						for(var k in data) {
							var userData = data[k];
							if(userData.sales_stage == stages[j] && userData.last_name == users[i]) {
								salesCount = parseInt(userData.amount);
                                link = userData.links
								break;
							}
						}
                        links.push(link);
						salesStageCount.push(salesCount);
					}
                    allLinks.push(links);
					count.push(salesStageCount);
				}
				return {
					'data' : count,
					'ticks' : users,
					'labels' : stages,
                    'links' : allLinks
				}
			}
		});
	</script>
<?php }} ?>