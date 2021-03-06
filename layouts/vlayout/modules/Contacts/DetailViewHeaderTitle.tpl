{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/
-->*}
{strip}
	<span class="span2">
		{foreach key=ITER item=IMAGE_INFO from=$IMAGE_DETAILS}
			{if !empty($IMAGE_INFO.path)}
				<img src="{$IMAGE_INFO.path}_{$IMAGE_INFO.orgname}" alt="{$IMAGE_INFO.orgname}" title="{$IMAGE_INFO.orgname}" width="65" height="80" align="left"><br>
			{else}
				<img src="{vimage_path('summary_Contact.png')}" class="summaryImg"/>
			{/if}
		{/foreach}
        <img src="{vimage_path('summary_Contact.png')}" class="summaryImg"/>
	</span>
	<span class="span8 margin0px">
		<span class="row-fluid">
			<h4 class="recordLabel pushDown" title="{$RECORD->get('lastname')}"> &nbsp;
                 <span >{$RECORD->get('lastname')}</span>
			</h4>
		</span>
	</span>
{/strip}