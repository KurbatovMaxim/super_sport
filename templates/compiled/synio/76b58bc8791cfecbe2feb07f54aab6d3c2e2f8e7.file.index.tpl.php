<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:14
         compiled from "Z:\home\livestreet\www/templates/skin/synio\actions\ActionPersonalBlog\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1828751ac7afeb1e740-36198305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76b58bc8791cfecbe2feb07f54aab6d3c2e2f8e7' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\actions\\ActionPersonalBlog\\index.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1828751ac7afeb1e740-36198305',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7afeba3c56_84065192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7afeba3c56_84065192')) {function content_51ac7afeba3c56_84065192($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>