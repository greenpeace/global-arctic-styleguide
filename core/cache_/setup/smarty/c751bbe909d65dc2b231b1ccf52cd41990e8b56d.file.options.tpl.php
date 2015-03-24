<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 12:58:40
         compiled from "/home/sta/public_html/styleguide/docroot/setup/templates/options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165205544454d2178082f2c8-00612027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c751bbe909d65dc2b231b1ccf52cd41990e8b56d' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/setup/templates/options.tpl',
      1 => 1422943994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165205544454d2178082f2c8-00612027',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<form id="options" action="?action=options" method="post">
<h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_title']) ? $_smarty_tpl->getVariable('_lang')->value['options_title'] : null);?>
</h2>

<hr />

<table class="options">
<tbody>
<tr>
    <th style="width: 43%;">
        <img src="assets/images/im_new_inst.gif" width="32" height="32" alt="" />

        <label>
            <input type="radio" name="installmode" id="installmode0" value="0" <?php if ($_smarty_tpl->getVariable('installmode')->value==0){?> checked="checked" autofocus="autofocus"<?php }?> />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_new_installation']) ? $_smarty_tpl->getVariable('_lang')->value['options_new_installation'] : null);?>

        </label>
    </th>
    <td>
        <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_install_new_copy']) ? $_smarty_tpl->getVariable('_lang')->value['options_install_new_copy'] : null);?>
 <?php echo $_smarty_tpl->getVariable('app_name')->value;?>
 -
        <strong><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_install_new_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_install_new_note'] : null);?>
</strong>
    </td>
</tr>
<tr>
    <th>
        <img src="assets/images/im_inst_upgrade.gif" width="32" height="32" alt=""/>

        <label>
            <input type="radio" name="installmode" id="installmode1" value="1"<?php if ($_smarty_tpl->getVariable('installmode')->value<1){?> disabled="disabled"<?php }?><?php if ($_smarty_tpl->getVariable('installmode')->value==1){?> checked="checked" autofocus="autofocus"<?php }?> />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_upgrade_existing']) ? $_smarty_tpl->getVariable('_lang')->value['options_upgrade_existing'] : null);?>

        </label>
    </th>
    <td><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_upgrade_existing_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_upgrade_existing_note'] : null);?>
</td>
</tr>
<?php if ($_smarty_tpl->getVariable('installmode')->value>0){?>
<tr>
    <th>&nbsp;</th>
    <td style="background: #fffdbb; padding:0 1em; border:2px solid #CBD499">
        <h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_important_upgrade']) ? $_smarty_tpl->getVariable('_lang')->value['options_important_upgrade'] : null);?>
</h3>
        <p><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_important_upgrade_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_important_upgrade_note'] : null);?>
</p>
    </td>
</tr>
<?php }?>
<tr>
    <th>
        <img src="assets/images/im_inst_upgrade.gif" width="32" height="32" alt="" />
        <label>
            <input type="radio" name="installmode" id="installmode3" value="3"<?php if ($_smarty_tpl->getVariable('installmode')->value<1){?> disabled="disabled"<?php }?><?php if ($_smarty_tpl->getVariable('installmode')->value==3){?> checked="checked" autofocus="autofocus"<?php }?> />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_upgrade_advanced']) ? $_smarty_tpl->getVariable('_lang')->value['options_upgrade_advanced'] : null);?>

        </label>
    </th>
    <td><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_upgrade_advanced_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_upgrade_advanced_note'] : null);?>
</td>
</tr>
</tbody>
</table>

<?php if ($_smarty_tpl->getVariable('installmode')->value==0){?>
<hr />
<h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['advanced_options']) ? $_smarty_tpl->getVariable('_lang')->value['advanced_options'] : null);?>
</h3>

<table class="options">
<tbody>
<tr>
    <th style="padding-top: 1em;">
        <label>
            <input type="text" name="new_folder_permissions" id="new_folder_permissions" value="<?php echo $_smarty_tpl->getVariable('new_folder_permissions')->value;?>
" size="5" maxlength="4" />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_new_folder_permissions']) ? $_smarty_tpl->getVariable('_lang')->value['options_new_folder_permissions'] : null);?>

        </label>
    </th>
    <td style="padding-top: 1em;"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_new_folder_permissions_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_new_folder_permissions_note'] : null);?>
</td>
</tr>
<tr>
    <th style="padding-top: 2em;">
        <label>
            <input type="text" name="new_file_permissions" id="new_file_permissions" value="<?php echo $_smarty_tpl->getVariable('new_file_permissions')->value;?>
" size="5" maxlength="4" />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_new_file_permissions']) ? $_smarty_tpl->getVariable('_lang')->value['options_new_file_permissions'] : null);?>

        </label>
    </th>
    <td style="padding-top: 2em;"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_new_file_permissions_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_new_file_permissions_note'] : null);?>
</td>
</tr>
</tbody>
</table>
<?php }?>
<?php if (@MODX_SETUP_KEY=='@traditional@'&&$_smarty_tpl->getVariable('unpacked')->value==1&&$_smarty_tpl->getVariable('files_exist')->value==1){?>
<input type="hidden" name="unpacked" id="unpacked" value="1" />
<?php }else{ ?>
<?php if ($_smarty_tpl->getVariable('installmode')->value!=0){?>
<hr />
<h3><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['advanced_options']) ? $_smarty_tpl->getVariable('_lang')->value['advanced_options'] : null);?>
</h3>
<?php }?>
<table class="options">
<tbody>
<tr>
    <th style="padding-top: 2em;">
        <label>
            <input type="checkbox" name="unpacked" id="unpacked" value="1"<?php if ($_smarty_tpl->getVariable('unpacked')->value==0){?> disabled="disabled"<?php }?><?php if ($_smarty_tpl->getVariable('unpacked')->value==1){?> checked="checked"<?php }?> />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_core_unpacked']) ? $_smarty_tpl->getVariable('_lang')->value['options_core_unpacked'] : null);?>

        </label>
    </th>
    <td style="padding-top: 2em;"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_core_unpacked_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_core_unpacked_note'] : null);?>
</td>
</tr>
<tr>
    <th>
        <label>
            <input type="checkbox" name="inplace" id="inplace" value="1"<?php if ($_smarty_tpl->getVariable('files_exist')->value==0){?> disabled="disabled"<?php }?><?php if ($_smarty_tpl->getVariable('files_exist')->value==1){?> checked="checked"<?php }?> />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_core_inplace']) ? $_smarty_tpl->getVariable('_lang')->value['options_core_inplace'] : null);?>

        </label>
    </th>
    <td><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_core_inplace_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_core_inplace_note'] : null);?>
</td>
</tr>
<tr>
    <th>
        <label>
            <input type="checkbox" name="nocompress" id="nocompress" value="1" />
            <?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_nocompress']) ? $_smarty_tpl->getVariable('_lang')->value['options_nocompress'] : null);?>

        </label>
    </th>
    <td><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['options_nocompress_note']) ? $_smarty_tpl->getVariable('_lang')->value['options_nocompress_note'] : null);?>
</td>
</tr>
</tbody>
</table>
<br />
<?php }?>


<div class="setup_navbar">
    <input type="submit" name="proceed" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['next']) ? $_smarty_tpl->getVariable('_lang')->value['next'] : null);?>
" />
    <input type="button" onclick="MODx.go('welcome');" value="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['back']) ? $_smarty_tpl->getVariable('_lang')->value['back'] : null);?>
" />
</div>
</form>
