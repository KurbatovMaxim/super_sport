<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:10
         compiled from "Z:\home\livestreet\www/templates/skin/synio\actions\ActionSearch\opensearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2792351ac7afae02e60-46470251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6849b7f26e401f503c5122998f65548cd7e9704' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\actions\\ActionSearch\\opensearch.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2792351ac7afae02e60-46470251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sHtmlTitle' => 0,
    'sAdminMail' => 0,
    'sHtmlDescription' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7afaf23780_51565167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7afaf23780_51565167')) {function content_51ac7afaf23780_51565167($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cfg')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.cfg.php';
if (!is_callable('smarty_function_router')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.router.php';
?><OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/"> 
	<ShortName><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
</ShortName> 
	<Description><?php echo $_smarty_tpl->tpl_vars['sHtmlTitle']->value;?>
</Description> 
	<Contact><?php echo $_smarty_tpl->tpl_vars['sAdminMail']->value;?>
</Contact> 
	<Url type="text/html" template="<?php echo smarty_function_router(array('page'=>'search'),$_smarty_tpl);?>
topics/?q={searchTerms}" /> 
	<LongName><?php echo $_smarty_tpl->tpl_vars['sHtmlDescription']->value;?>
</LongName> 
	<Image height="64" width="64" type="image/png"><?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/logo.png</Image> 
	<Image height="16" width="16" type="image/vnd.microsoft.icon"><?php echo smarty_function_cfg(array('name'=>'path.static.skin'),$_smarty_tpl);?>
/images/favicon.ico</Image> 
	<Developer><?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
 (<?php echo smarty_function_cfg(array('name'=>'path.root.web'),$_smarty_tpl);?>
)</Developer> 
	<Attribution> 
		© «<?php echo smarty_function_cfg(array('name'=>'view.name'),$_smarty_tpl);?>
»
	</Attribution> 
	<SyndicationRight>open</SyndicationRight> 
	<AdultContent>false</AdultContent> 
	<Language>ru-ru</Language> 
	<OutputEncoding>UTF-8</OutputEncoding> 
	<InputEncoding>UTF-8</InputEncoding> 
</OpenSearchDescription><?php }} ?>