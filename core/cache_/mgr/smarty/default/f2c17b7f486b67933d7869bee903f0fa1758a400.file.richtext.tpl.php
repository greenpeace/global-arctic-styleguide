<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 13:06:23
         compiled from "/home/sta/public_html/styleguide/docroot/manager/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161288714454d2194f223160-95521004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2c17b7f486b67933d7869bee903f0fa1758a400' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/manager/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1422371761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161288714454d2194f223160-95521004',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/sta/public_html/styleguide/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    
});
</script>