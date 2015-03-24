<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 13:06:23
         compiled from "/home/sta/public_html/styleguide/docroot/manager/templates/default/resource/sections/tvs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182817301154d2194f3023e2-82040064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eeea734e44fb3c38d1b39dd2a938db41e27f6fb' => 
    array (
      0 => '/home/sta/public_html/styleguide/docroot/manager/templates/default/resource/sections/tvs.tpl',
      1 => 1422371167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182817301154d2194f3023e2-82040064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/sta/public_html/styleguide/core/model/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/home/sta/public_html/styleguide/core/model/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getVariable('OnResourceTVFormPrerender')->value;?>


<input type="hidden" name="tvs" value="1" />
<div id="modx-tv-tabs" class="x-form-label-top">
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
?>
<?php if (count((isset($_smarty_tpl->tpl_vars['category']->value['tvs']) ? $_smarty_tpl->tpl_vars['category']->value['tvs'] : null))>0){?>

    <div id="modx-tv-tab<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['id']) ? $_smarty_tpl->tpl_vars['category']->value['id'] : null);?>
" class="x-tab<?php if ((isset($_smarty_tpl->tpl_vars['category']->value['hidden']) ? $_smarty_tpl->tpl_vars['category']->value['hidden'] : null)){?>-hidden<?php }?>" title="<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['category']) ? $_smarty_tpl->tpl_vars['category']->value['category'] : null);?>
">
    <?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['category']->value['tvs']) ? $_smarty_tpl->tpl_vars['category']->value['tvs'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tv']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tv']->iteration=0;
 $_smarty_tpl->tpl_vars['tv']->index=-1;
if ($_smarty_tpl->tpl_vars['tv']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
 $_smarty_tpl->tpl_vars['tv']->iteration++;
 $_smarty_tpl->tpl_vars['tv']->index++;
 $_smarty_tpl->tpl_vars['tv']->first = $_smarty_tpl->tpl_vars['tv']->index === 0;
 $_smarty_tpl->tpl_vars['tv']->last = $_smarty_tpl->tpl_vars['tv']->iteration === $_smarty_tpl->tpl_vars['tv']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tv']['first'] = $_smarty_tpl->tpl_vars['tv']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['tv']['last'] = $_smarty_tpl->tpl_vars['tv']->last;
?>
<?php if ($_smarty_tpl->getVariable('tv')->value->type!="hidden"){?>
    <div class="x-form-item x-tab-item <?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
 modx-tv<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tv']['first']){?> tv-first<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tv']['last']){?> tv-last<?php }?>" id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-tr">
        <label for="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="x-form-item-label modx-tv-label">
            <div class="modx-tv-label-title">
                <?php if ($_smarty_tpl->getVariable('showCheckbox')->value){?><input type="checkbox" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-checkbox" class="modx-tv-checkbox" value="1" /><?php }?>
                <span class="modx-tv-caption" id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-caption"><?php if ($_smarty_tpl->getVariable('tv')->value->caption){?><?php echo $_smarty_tpl->getVariable('tv')->value->caption;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
<?php }?></span>
            </div>
            <a class="modx-tv-reset" id="modx-tv-reset-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['set_to_default']) ? $_smarty_tpl->getVariable('_lang')->value['set_to_default'] : null);?>
"></a>
            <?php if ($_smarty_tpl->getVariable('tv')->value->description){?>
            <span class="modx-tv-label-description"><?php echo $_smarty_tpl->getVariable('tv')->value->description;?>
</span>
            <?php }?>
        </label>
        <?php if ($_smarty_tpl->getVariable('tv')->value->inherited){?><span class="modx-tv-inherited"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['tv_value_inherited']) ? $_smarty_tpl->getVariable('_lang')->value['tv_value_inherited'] : null);?>
</span><?php }?>
        <div class="x-form-element modx-tv-form-element">
            <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
            <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

        </div>
    </div>
    <script type="text/javascript">Ext.onReady(function() { new Ext.ToolTip({target: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-caption',html: '[[*<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
]]'});});</script>
<?php }else{ ?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

<?php }?>
    <?php }} ?>

    <div class="clear"></div>

    </div>
<?php }?>
<?php }} ?>
</div>

<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {    
    MODx.resetTV = function(id) {
        var i = Ext.get('tv'+id);
        var d = Ext.get('tvdef'+id);
        
        if (i) {
            i.dom.value = d.dom.value;
            i.dom.checked = d.dom.value ? true : false;
        }
        var c = Ext.getCmp('tv'+id);
        if (c) {
            if (c.xtype == 'checkboxgroup' || c.xtype == 'radiogroup') {
                var cbs = d.dom.value.split(',');
                for (var i=0;i<c.items.length;i++) {
                    if (c.items.items[i]) {
                        c.items.items[i].setValue(cbs.indexOf(c.items.items[i].id) != -1);
                    }
                } 
            } else {
                c.setValue(d.dom.value);
            }
        }
        var p = Ext.getCmp('modx-panel-resource');
        if (p) {
            p.markDirty();
            p.fireEvent('tv-reset',{id:id});
        }
    };

    Ext.select('.modx-tv-reset').on('click',function(e,t,o) {
        var id = t.id.split('-');
        id = id[3];
        MODx.resetTV(id);
    });
    MODx.refreshTVs = function() {
        if (MODx.unloadTVRTE) { MODx.unloadTVRTE(); }
        Ext.getCmp('modx-panel-resource-tv').refreshTVs();
    };
    <?php if ($_smarty_tpl->getVariable('tvcount')->value>0){?>
    MODx.load({
        xtype: 'modx-vtabs'
        ,applyTo: 'modx-tv-tabs'
        ,autoTabs: true
        ,border: false
        ,plain: true
        ,deferredRender: false
        ,id: 'modx-resource-vtabs'
        ,headerCfg: {
            tag: 'div'
            ,cls: 'x-tab-panel-header vertical-tabs-header'
            ,id: 'modx-resource-vtabs-header'
            ,html: MODx.config.show_tv_categories_header == true ? '<h4 id="modx-resource-vtabs-header-title">'+_('categories')+'</h4>' : ''
        }
    });
    <?php }?>

    MODx.tvCounts = <?php echo $_smarty_tpl->getVariable('tvCounts')->value;?>
;
    MODx.tvMap = <?php echo $_smarty_tpl->getVariable('tvMap')->value;?>
;
    
});    
// ]]>
</script>


<?php echo $_smarty_tpl->getVariable('OnResourceTVFormRender')->value;?>


    <div class="clear"></div>
