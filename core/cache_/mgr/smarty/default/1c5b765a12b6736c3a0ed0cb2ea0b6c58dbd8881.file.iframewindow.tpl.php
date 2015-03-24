<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 13:06:22
         compiled from "/home/sta/public_html/styleguide/core/components/migx/templates/mgr/iframewindow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144953342454d2194e144e10-29098761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c5b765a12b6736c3a0ed0cb2ea0b6c58dbd8881' => 
    array (
      0 => '/home/sta/public_html/styleguide/core/components/migx/templates/mgr/iframewindow.tpl',
      1 => 1422368590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144953342454d2194e144e10-29098761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


MODx.window.MigxIframe = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('migx.preview')
        ,id: 'modx-window-migx-iframe-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
        ,width: '1050'
        ,height: '600'
		,closeAction: 'hide'
        ,shadow: true
        ,resizable: true
        ,collapsible: true
        ,maximizable: true
        ,autoScroll: true
        ,forceLayout: true
        ,boxMaxHeight: '900'
        ,items: [
           {
            xtype: 'form'
            ,id:'migx_iframewin_form_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            ,target: 'iframewin_iframe_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            ,standardSubmit: true
            ,url: config.src
            ,items:[{
                xtype:'hidden'
                ,name:'migx_outputvalue'
                ,id:'migx_iframewin_json_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'HTTP_MODAUTH'
                ,value:'<?php echo $_smarty_tpl->getVariable('auth')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'configs'
                ,value:'<?php echo $_smarty_tpl->getVariable('configs')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'actionx' //fix for firefox - issue with form-action
                ,value:'mgr/migxdb/process'
            },{
                xtype:'hidden'
                ,name:'processaction'
                ,value:'migxiframe'
            },{
                xtype:'hidden'
                ,name:'resource_id'
                ,value: config.resource_id
            },{
                xtype:'hidden'
                ,name:'co_id'
                ,value: config.co_id
                ,id: 'migx_iframewin_co_id_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'store_params'
                ,value: config.storeParams || ''
                ,id: 'migx_iframewin_store_params_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'iframeTpl'
                ,value: config.iframeTpl
                ,id: 'migx_iframewin_iframeTpl_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'object_id'
                ,value: config.object_id
                ,id: 'migx_iframewin_object_id_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            },{
                xtype:'hidden'
                ,name:'tv_name'
                ,value: '<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
'
            }
            
            ]
        },
        
        {
            xtype: 'container'
            ,layout: 'anchor'
            ,width:'98%'
            , height:'98%'            
            ,anchorSize: {width:'98%', height:'98%'}
            ,autoEl: {
            tag: 'iframe'
            ,name: 'iframewin_iframe_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
'
            ,src: config.src
            }
         }]
        //,saveBtnText: _('done')
        
        ,buttons: [{
            text: config.cancelBtnText || _('close')
            ,scope: this
            ,handler: function() { this.closeWindow(); }
        }]
        ,action: 'u'
		,record_json: ''
        ,keys: [{
            key: Ext.EventObject.ENTER
            ,fn: this.submit
            ,scope: this
        }]		
    });
    MODx.window.MigxIframe.superclass.constructor.call(this,config);
    this.options = config;
    this.config = config;

    //this.on('show',this.onShow,this);
    this.addEvents({
        success: true
        ,failure: true
		//,hide:true
		//,show:true
    });
    //this.renderIframe();	
};
Ext.extend(MODx.window.MigxIframe,Ext.Window,{

    closeWindow: function() {
        this.grid.refresh();
        this.hide();
		
    }
    ,
    renderIframe: function() {
		this.add(this.iframe);
    }
    ,onShow: function() {
     var input = Ext.getCmp('migx_iframewin_json_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
');
     input.setValue(this.json);
     input.getEl().dom.name = this.jsonvarkey;
     var formpanel = Ext.getCmp('migx_iframewin_form_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
');
     var form = formpanel.getForm();
     form.getEl().dom.action=this.src;
     form.getEl().dom.target='iframewin_iframe_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
';
     form.submit();  
    }

});
Ext.reg('modx-window-mi-iframe-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
',MODx.window.MigxIframe);

