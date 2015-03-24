<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 13:06:22
         compiled from "/home/sta/public_html/styleguide/core/components/migx/elements/tv/migx.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3621481954d2194e805731-22188822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0056e51ce29be67b635a9c15ce2c6db9a4efca28' => 
    array (
      0 => '/home/sta/public_html/styleguide/core/components/migx/elements/tv/migx.tpl',
      1 => 1422368526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3621481954d2194e805731-22188822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/sta/public_html/styleguide/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" class="textfield" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv_value')->value);?>
"<?php echo $_smarty_tpl->getVariable('style')->value;?>
 tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
" />
<div id="tvpanel<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" style="width:650px">
</div>
<div id="tvpanel2<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
">
</div>
<br/>

<script type="text/javascript">
    // <![CDATA[
    <?php echo $_smarty_tpl->getVariable('grid')->value;?>

    


MODx.window.UpdateTvItem = function(config) {
    config = config || {};
    
    Ext.applyIf(config,{
        title:'MIGX'
        ,id: 'modx-window-mi-grid-update-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
' 
        ,width: '1000'
		,closeAction: 'hide'
        ,shadow: false
        ,resizable: true
        ,collapsible: true
        ,maximizable: true
        ,allowDrop: true
        ,height: '600'
        //,saveBtnText: _('done')
        ,forceLayout: true
        ,boxMaxHeight: '700'
        ,autoScroll: true
        ,buttons: [{
            text: config.cancelBtnText || _('cancel')
            ,scope: this
            ,handler: this.cancel
        },{
            text: config.saveBtnText || _('done')
            ,scope: this
            ,handler: this.submit
        }]
        ,record: {}
		,grid: null
        ,action: 'u'
		,record_json: ''
        /*
        ,keys: [{
            key: Ext.EventObject.ENTER
            ,fn: this.submit
            ,scope: this
        }]
        */		
        ,fields: []
    });
    MODx.window.UpdateTvItem.superclass.constructor.call(this,config);
    this.options = config;
    this.config = config;

    //this.on('show',this.onShow,this);
    this.on('hide',this.onHideWindow,this);
    this.addEvents({
        success: true
        ,failure: true
        ,beforeSubmit: true
		,hide:true
		//,show:true
    });
    this._loadForm();	
};
Ext.extend(MODx.window.UpdateTvItem,Ext.Window,{
    cancel: function(){

        this.hide();
    },         
    onHideWindow: function(){
   
        var v = this.fp.getForm().getValues();
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onHide) != 'undefined'){
                    field.onHide();
                }                  
            }
        }

    },      
    submit: function() {
        var v = this.fp.getForm().getValues();
        var object_id = this.baseParams.object_id;
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var item = {};
        var tvid = ''; 
        var addNewItemAt = '';
        //we run onBeforeSubmit on each field, if this function exists. For example for richtext-fields.       
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onBeforeSubmit) != 'undefined'){
                    field.onBeforeSubmit();
                }                         
            }
        }	
        
        v = this.fp.getForm().getValues();
        fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);        

        if (this.fp.getForm().isValid()) {
            var s = this.grid.getStore();
            if (this.action == 'd'){
                MODx.fireResourceFormChange();     
            }
            if (this.action == 'u'){
                var idx = this.baseParams.itemid; 
            }else{
                /*append record*/
                var addNewItemAt = '<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['addNewItemAt']) ? $_smarty_tpl->getVariable('customconfigs')->value['addNewItemAt'] : null);?>
';

                
                var items=Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('newitem')->value;?>
');
		        s.loadData(items,true);
                
                idx=s.getCount()-1;
                this.grid.autoinc = v['tvmigxid'];               
            }
            
            var rec = s.getAt(idx);

            if (fields.length>0){
                for (var i = 0; i < fields.length; i++) {
                    tvid = (fields[i].tv_id);
                    if (v['tv'+tvid+'_prefix']) v['tv'+tvid]=v['tv'+tvid+'_prefix']+v['tv'+tvid];//url-TV support
                    item[fields[i].field]=v['tv'+tvid+'[]'] || v['tv'+tvid] || '';							
                    //set defined record-fields to its new value
                    rec.set(fields[i].field,item[fields[i].field])
                }
                //we store the item.values to rec.json because perhaps sometimes we can have different fields for each record
                rec.json=item;
            }
            
            if (addNewItemAt == 'top'){
                s.insert(0,rec);
            }
            					
            this.grid.getView().refresh();
            this.grid.collectItems();
            //this.onDirty();
			
            if (this.fireEvent('success',v)) {
                this.fp.getForm().reset();
                this.hide();
                return true;
            }
        }
        return false;
    },
    _loadForm: function() {
        //if (this.checkIfLoaded(this.config.record || null)) { return false; }
        this.fp = this.createForm({
            url: this.config.url
            ,baseParams: this.config.baseParams || { action: this.config.action || '' }
            //,items: this.config.fields || []
        });
		//console.log('renderForm');
        this.add(this.fp);
    }	
    ,createForm: function(config){
        config = config || {};
        Ext.applyIf(config,{
            labelAlign: this.config.labelAlign || 'right'
            ,labelWidth: this.config.labelWidth || 100
            ,frame: this.config.formFrame || true
            ,popwindow : this
			,border: false
            ,bodyBorder: false
            ,errorReader: MODx.util.JSONReader
            ,url: this.config.url
            ,baseParams: this.config.baseParams || {}
            ,fileUpload: this.config.fileUpload || false
        });
        return new MODx.panel.MiGridUpdate<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
(config);
    }
    ,switchForm: function() {
        var v = this.fp.getForm().getValues();
        //console.log(v);
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var item = {};
        var tvs = {};        
        var tvid = '';
        var field;
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onBeforeSubmit) != 'undefined'){
                    field.onBeforeSubmit();
                }                         
            }
        }	        
        v = this.fp.getForm().getValues();
        fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);            
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                tvid = (fields[i].tv_id);
                tvs['tv'+tvid] = true;
                item[fields[i].field]=v['tv'+tvid+'[]'] || v['tv'+tvid] || '';
                field = Ext.get('tv'+tvid);  
                if (field && typeof(field.onHide) != 'undefined'){
                    field.onHide();
                    field.remove();
                }                   							
            }
        }

        //console.log(item);			        
        this.fp.autoLoad.params.record_json=Ext.util.JSON.encode(item);
        this.fp.doAutoLoad();        
    }
    
    ,onShow: function() {
        //console.log('onshow');
        if (this.fp.isloading) return;
        this.fp.isloading=true;
        this.fp.autoLoad.params.record_json=this.baseParams.record_json;
        this.fp.doAutoLoad();
    }

});
Ext.reg('modx-window-tv-item-update-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
',MODx.window.UpdateTvItem);

MODx.panel.MiGridUpdate<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
 = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'xdbedit-panel-object-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
		,title: ''
        ,url: config.url
        ,baseParams: config.baseParams	
        ,class_key: ''
        ,bodyStyle: 'padding: 15px;'
        //,autoSize: true
        ,autoLoad: this.autoload(config)
        ,width: '950'
        ,listeners: {
            //'beforeSubmit': {fn:this.beforeSubmit,scope:this},
            //'success': {fn:this.success,scope:this}
			'load': {fn:this.load,scope:this}
        }		
    });
 	MODx.panel.MiGridUpdate<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
.superclass.constructor.call(this,config);
	
	//this.addEvents({ load: true });
};
Ext.extend(MODx.panel.MiGridUpdate<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
,MODx.FormPanel,{
    autoload: function(config) {
		this.isloading=true;
		var a = {
            url: MODx.config.assets_url+'components/migx/connector.php'
            //url: config.url
			,method: 'POST'
            ,params: config.baseParams
            ,scripts: true
            ,callback: function() {
				this.isloading=false;
				this.isloaded=true;
				this.fireEvent('load');
                //MODx.fireEvent('ready');
            }
            ,scope: this
        };
        return a;        	
    },scope: this
    
    ,
    setup: function() {

    }
    ,beforeSubmit: function(o) {
        //tinyMCE.triggerSave(); 
    }
	 ,load: function() {

        var v = this.getForm().getValues();
        //console.log(v);
        var fields = Ext.util.JSON.decode(v['mulititems_grid_item_fields']);
        var item = {};
        var tvs = {};        
        var tvid = '';
        var field = null;
        if (fields.length>0){
            for (var i = 0; i < fields.length; i++) {
                
                tvid = (fields[i].tv_id);
                field = Ext.get('tv'+tvid);
                if (field && typeof(field.onLoad) != 'undefined'){
                    field.onLoad();
                }                
			
            }
        } 
        
        //this.popwindow.width='1000px';
		//this.width='1000px';
		//this.syncSize();
		//this.popwindow.syncSize();
		return '';
	 }
});
Ext.reg('xdbedit-panel-object',MODx.panel.MiGridUpdate<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
);


<?php echo $_smarty_tpl->getVariable('iframewindow')->value;?>



/*
Ext.ux.IFrameComponent = Ext.extend(Ext.BoxComponent, {
     onRender : function(ct, position){
          this.el = ct.createChild({tag: 'iframe', id: 'iframe-'+ this.id, frameBorder: 0, src: this.url});
     }
});
*/
/*
var MiPreviewPanel = new Ext.Panel({
     id: 'MiPreviewPanel',
     title: 'MIGX - Preview',
     closable:true,
     // layout to fit child component
     layout:'fit', 
     // add iframe as the child component
     items: [ new Ext.ux.IFrameComponent({ id: id, url: 'http://www.gitrevo.webcmsolutions.de/manager' }) ]
});
*/
/*
Ext.ux.IFrameComponent = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        layout:'fit'
        ,id: 'modx-iframe-mi-preview'
        ,url: 'http://www.gitrevo.webcmsolutions.de/preview1.html' 
    });
    Ext.ux.IFrameComponent.superclass.constructor.call(this,config);
};
Ext.extend(Ext.ux.IFrameComponent,Ext.BoxComponent,{
     onRender : function(ct, position){
          this.el = ct.createChild({tag: 'iframe', id: 'iframe-'+ this.id, frameBorder: 0, src: this.url});
     }
});
Ext.reg('modx-iframe-mi-preview',Ext.ux.IFrameComponent);
*/     

MODx.window.MiPreview = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('migx.preview')
        ,id: 'modx-window-mi-preview'
        ,width: '1050'
        ,height: '700'
		,closeAction: 'hide'
        ,shadow: true
        ,resizable: true
        ,collapsible: true
        ,maximizable: true
        ,autoScroll: true
        ,items: [
           {
            xtype: 'form'
            ,id:'migx_preview_form'
            ,target: 'preview_iframe'
            ,standardSubmit: true
            ,url: config.src
            ,items:[{
                xtype:'hidden'
                ,name:'migx_outputvalue'
                ,id:'migx_preview_json'
            }
            
            ]
        },
        
        {
            xtype: 'container'
            ,width: '980'
            ,height: '620'
            ,autoEl: {
            tag: 'iframe'
            ,name: 'migx_preview_iframe'
            ,src: config.src
            }
         }]
        //,saveBtnText: _('done')
        ,forceLayout: true
        ,buttons: [{
            text: config.cancelBtnText || _('close')
            ,scope: this
            ,handler: function() { this.hide(); }
        }]
        ,action: 'u'
		,record_json: ''
        ,keys: [{
            key: Ext.EventObject.ENTER
            ,fn: this.submit
            ,scope: this
        }]		
    });
    MODx.window.MiPreview.superclass.constructor.call(this,config);
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
Ext.extend(MODx.window.MiPreview,Ext.Window,{

    renderIframe: function() {
		this.add(this.iframe);
		
    }
    ,onShow: function() {
     var input = Ext.getCmp('migx_preview_json');
     input.setValue(this.json);
     input.getEl().dom.name = this.jsonvarkey;
     var formpanel = Ext.getCmp('migx_preview_form');
     var form = Ext.getCmp('migx_preview_form').getForm();
     form.getEl().dom.action=this.src;
     form.getEl().dom.target='migx_preview_iframe';
     form.submit();  
    }

});
Ext.reg('modx-window-mi-preview',MODx.window.MiPreview);

Ext.onReady(function() {
var lang = '<?php echo $_smarty_tpl->getVariable('migx_lang')->value;?>
';
  for (var name in lang) {
    MODx.lang[name] = lang[name];
  }

        MODx.load({
            xtype: 'modx-grid-multitvgrid-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,renderTo: 'tvpanel<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
            ,cls:'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_items'
            ,id:'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_items'
			,columns:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('columns')->value;?>
')
            ,configs: '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['configs']) ? $_smarty_tpl->getVariable('properties')->value['configs'] : null);?>
'
			,pathconfigs:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('pathconfigs')->value;?>
')
            ,fields:Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('fields')->value;?>
')
            ,wctx: '<?php echo $_smarty_tpl->getVariable('myctx')->value;?>
'
            ,tv_type: '<?php echo $_smarty_tpl->getVariable('tv_type')->value;?>
'
            ,url: MODx.config.assets_url+'components/migx/connector.php'
            ,width: '97%'			
        });
  
});





</script>