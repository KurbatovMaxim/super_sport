<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:13
         compiled from "Z:\home\livestreet\www/templates/skin/synio\actions\ActionBlog\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671351ac7afd587cf1-40113910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b176faa8bede42d62356e0cc3cb2d7a829a91e94' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\actions\\ActionBlog\\index.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671351ac7afd587cf1-40113910',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7afd607083_92332388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7afd607083_92332388')) {function content_51ac7afd607083_92332388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>