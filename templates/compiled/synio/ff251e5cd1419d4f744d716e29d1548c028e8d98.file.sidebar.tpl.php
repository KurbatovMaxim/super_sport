<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:09
         compiled from "Z:\home\livestreet\www/templates/skin/synio\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2601151ac7af9678263-72070989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff251e5cd1419d4f744d716e29d1548c028e8d98' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\sidebar.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601151ac7af9678263-72070989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarPosition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7af96a3fd8_20260739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7af96a3fd8_20260739')) {function content_51ac7af96a3fd8_20260739($_smarty_tpl) {?><aside id="sidebar" <?php if ($_smarty_tpl->tpl_vars['sidebarPosition']->value=='left'){?>class="sidebar-profile"<?php }?>>
	<?php echo $_smarty_tpl->getSubTemplate ('blocks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('group'=>'right'), 0);?>

</aside><?php }} ?>