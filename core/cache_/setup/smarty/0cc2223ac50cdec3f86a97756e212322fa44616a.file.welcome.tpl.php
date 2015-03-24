<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 12:58:33
         compiled from "/home/sta/public_html/styleguide/docroot/setup/templates/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207548150454d21779e1e146-89384677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc2223ac50cdec3f86a97756e212322fa44616a' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/setup/templates/welcome.tpl',
      1 => 1422943996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207548150454d21779e1e146-89384677',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript" src="assets/js/sections/welcome.js"></script>
<form id="welcome" action="?action=welcome" method="post">
<div>
    <h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['welcome']) ? $_smarty_tpl->getVariable('_lang')->value['welcome'] : null);?>
</h2>
    <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['welcome_message']) ? $_smarty_tpl->getVariable('_lang')->value['welcome_message'] : null);?>

    <br />
</div>

<?php if (@MODX_SETUP_KEY!='@traditional@'){?>
<p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['config_key_change']) ? $_smarty_tpl->getVariable('_lang')->value['config_key_change'] : null);?>
</p>

<div id="cck-div">
    <h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['config_key']) ? $_smarty_tpl->getVariable('_lang')->value['config_key'] : null);?>
</h3>
    <p><small><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['config_key_override']) ? $_smarty_tpl->getVariable('_lang')->value['config_key_override'] : null);?>
</small></p>
    <div class="labelHolder">
        <label for="config_key"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['config_key']) ? $_smarty_tpl->getVariable('_lang')->value['config_key'] : null);?>
</label>
        <input type="text" name="config_key" id="config_key" value="<?php echo $_smarty_tpl->getVariable('config_key')->value;?>
" style="width:250px" />
        <br />
        <?php if ($_smarty_tpl->getVariable('writableError')->value){?>
        <span class="field_error"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['config_not_writable_err']) ? $_smarty_tpl->getVariable('_lang')->value['config_not_writable_err'] : null);?>
</span>
        <?php }?>
    </div>
</div>
<?php }?>
<div class="setup_navbar">
    <input type="submit" name="proceed" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['next']) ? $_smarty_tpl->getVariable('_lang')->value['next'] : null);?>
" autofocus="autofocus" />
</div>
</form>
