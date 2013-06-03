<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:04:30
         compiled from "Z:\home\livestreet\www/templates/skin/synio\nav_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185851ac783e1018a3-34615837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b78ceeffda1a0744b639967e61b0b8a3a4039c42' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\nav_content.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185851ac783e1018a3-34615837',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac783e128420_26409156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac783e128420_26409156')) {function content_51ac783e128420_26409156($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['menu_content']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate ("menu.".($_smarty_tpl->tpl_vars['menu_content']->value).".content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>