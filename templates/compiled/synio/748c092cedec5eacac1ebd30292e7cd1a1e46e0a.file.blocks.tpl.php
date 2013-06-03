<?php /* Smarty version Smarty-3.1.8, created on 2013-06-03 15:04:30
         compiled from "Z:\home\livestreet\www/templates/skin/synio\blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2190251ac783e4e6b40-57259590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748c092cedec5eacac1ebd30292e7cd1a1e46e0a' => 
    array (
      0 => 'Z:\\home\\livestreet\\www/templates/skin/synio\\blocks.tpl',
      1 => 1363886168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2190251ac783e4e6b40-57259590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
    'aBlocksLoad' => 0,
    'aBlock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51ac783e5c6ef1_83141666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ac783e5c6ef1_83141666')) {function content_51ac783e5c6ef1_83141666($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_blocks')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\function.get_blocks.php';
if (!is_callable('smarty_insert_block')) include 'Z:\\home\\livestreet\\www/engine/modules/viewer/plugs\\insert.block.php';
?><?php echo smarty_function_get_blocks(array('assign'=>'aBlocksLoad'),$_smarty_tpl);?>


<?php if (isset($_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value])){?>
	<?php  $_smarty_tpl->tpl_vars['aBlock'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aBlock']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aBlocksLoad']->value[$_smarty_tpl->tpl_vars['group']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aBlock']->key => $_smarty_tpl->tpl_vars['aBlock']->value){
$_smarty_tpl->tpl_vars['aBlock']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='block'){?>
			<?php echo smarty_insert_block(array('block' => $_smarty_tpl->tpl_vars['aBlock']->value['name'], 'params' => $_smarty_tpl->tpl_vars['aBlock']->value['params']),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['aBlock']->value['type']=='template'){?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['aBlock']->value['name'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('params'=>$_smarty_tpl->tpl_vars['aBlock']->value['params']), 0);?>

		<?php }?>
	<?php } ?>
<?php }?><?php }} ?>