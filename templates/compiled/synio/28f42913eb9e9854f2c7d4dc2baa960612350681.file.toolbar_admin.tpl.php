<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:04:30
         compiled from "Z:\home\livestreet\www/templates/skin/synio\toolbar_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2500751ac783e5e14c3-43109096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28f42913eb9e9854f2c7d4dc2baa960612350681' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\toolbar_admin.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2500751ac783e5e14c3-43109096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oUserCurrent' => 0,
    'aLang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac783e62bb94_23299794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac783e62bb94_23299794')) {function content_51ac783e62bb94_23299794($_smarty_tpl) {?><?php if (!is_callable('smarty_function_router')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.router.php';
?><?php if ($_smarty_tpl->tpl_vars['oUserCurrent']->value&&$_smarty_tpl->tpl_vars['oUserCurrent']->value->isAdministrator()){?>
<section class="toolbar-admin">
	<a href="<?php echo smarty_function_router(array('page'=>'admin'),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['aLang']->value['admin_title'];?>
">
		<i></i>
	</a>
</section>
<?php }?><?php }} ?>