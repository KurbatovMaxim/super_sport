<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:16:09
         compiled from "Z:\home\livestreet\www/templates/skin/synio\actions\ActionIndex\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2882151ac7af941a392-08999962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043b535d6ecf22de359eb8baf2fd45da217e0f29' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\actions\\ActionIndex\\index.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2882151ac7af941a392-08999962',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac7af949f3f1_81717408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac7af949f3f1_81717408')) {function content_51ac7af949f3f1_81717408($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('menu'=>'blog','menu_content'=>'blog'), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('topic_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>