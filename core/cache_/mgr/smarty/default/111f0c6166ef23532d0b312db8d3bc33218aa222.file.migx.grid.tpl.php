<?php /* Smarty version Smarty-3.0.4, created on 2015-02-04 13:06:22
         compiled from "/home/sta/public_html/styleguide/core/components/migx/templates//mgr/grids/migx.grid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87501622054d2194e342b54-03819143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '111f0c6166ef23532d0b312db8d3bc33218aa222' => 
    array (
      0 => '/home/sta/public_html/styleguide/core/components/migx/templates//mgr/grids/migx.grid.tpl',
      1 => 1422369005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87501622054d2194e342b54-03819143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

MODx.grid.multiTVgrid = function(config) {
    config = config || {};
    //var cols=[this.sm];
    var cols=[];
    // add empty pathconfig (source) to array to match number of col in renderimage
    var renderer = null;
    //var editor = null;
	for(i = 0; i <  config.columns.length; i++) {
        renderer = config.columns[i]['renderer'];
        if (typeof renderer != 'undefined'){
            config.columns[i]['renderer'] = {fn:eval(renderer),scope:this};
        }
        editor = config.columns[i]['editor'];
        if (typeof editor != 'undefined'){
            editor = editor.replace('this.','');
            if (this[editor]){
                config.columns[i]['editor'] = this[editor](config.columns[i]);
            }
        } 
        cols.push(config.columns[i]);
    }
    
    config.columns=cols;    
        
	Ext.applyIf(config,{
	autoHeight: true,
    collapsible: true,
	resizable: true,
    store: 	new Ext.data.JsonStore({
        fields : config.fields
    }), // define the data store in a separate variable		
    loadMask: true,
    ddGroup:'<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_gridDD',
    enableDragDrop: true, // enable drag and drop of grid rows
	viewConfig: {
        emptyText: 'No items found',
        sm: new Ext.grid.RowSelectionModel({
            singleSelect:true
            }),
        forceFit: true,
		autoFill: true
    }, 
	columns: config.columns, // define grid columns in a separate variable
    listeners: {
        "render": {
            scope: this,
            fn: function(grid) {
            
            //Special Handling of Keystrokes within cell-editor, needs more improvements    
            var sm=grid.getSelectionModel();
                
            sm.onEditorKey = function(n, l) {
        var d = l.getKey(),
            h, i = this.grid,
            p = i.lastEdit,
            j = i.activeEditor,
            b = l.shiftKey,
            o, p, a, m;
        if (d == l.TAB) {
            l.stopEvent();
            if (j){
                j.completeEdit();
            if (b) {
                h = i.walkCells(j.row, j.col - 1, -1, this.acceptsNav, this)
            } else {
                h = i.walkCells(j.row, j.col + 1, 1, this.acceptsNav, this)
            }            
            }

        } else {
            if (d == l.ENTER) {
                if (this.moveEditorOnEnter !== false) {
                    if (b) {
                        h = i.walkCells(p.row - 1, p.col, -1, this.acceptsNav, this)
                    } else {
                        h = i.walkCells(p.row + 1, p.col, 1, this.acceptsNav, this)
                    }
                }
            }
        }
        if (h) {
            a = h[0];
            m = h[1];
            
            if (i.isEditor && i.editing) {
                o = i.activeEditor;
                if (o && o.field.triggerBlur) {
                    //console.log(o.field);
                }
            }
            this.onEditorSelect(a, p.row);
            i.startEditing(a, m)
        }
    };

            // Enable sorting Rows via Drag & Drop
            // this drop target listens for a row drop
            //  and handles rearranging the rows

              var ddrow = new Ext.dd.DropTarget(grid.container, {
                  ddGroup : '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
_gridDD',
                  copy:false,
                  notifyDrop : function(dd, e, data){
                      var ds = grid.store;

                      // NOTE:
                      // you may need to make an ajax call here
                      // to send the new order
                      // and then reload the store


                      // alternatively, you can handle the changes
                      // in the order of the row as demonstrated below

                        // ***************************************

                        var sm = grid.getSelectionModel();
                        var rows = sm.getSelections();
                        if(dd.getDragData(e)) {
                            var cindex=dd.getDragData(e).rowIndex;
                            if(typeof(cindex) != "undefined") {
                                for(i = 0; i <  rows.length; i++) {
                                ds.remove(ds.getById(rows[i].id));
                                }
     							ds.insert(cindex,data.selections);
                                sm.clearSelections();
                             }
                             MODx.fireResourceFormChange();
                         }
						grid.collectItems();
                        grid.getView().refresh();

 
                        // ************************************
                      }
                   }) 
		
		this.setWidth('99%');
        
		//this.syncSize();
                   // load the grid store
                  //  after the grid has been rendered
                  //store.load();
       }
   }
}

		,tbar: [
        <?php if ((isset($_smarty_tpl->getVariable('customconfigs')->value['disable_add_item']) ? $_smarty_tpl->getVariable('customconfigs')->value['disable_add_item'] : null)!='1'){?>
        {
            text: '[[%migx.add]]',
			handler: this.addItem
        }
        <?php }?>        
        <?php if ((isset($_smarty_tpl->getVariable('properties')->value['previewurl']) ? $_smarty_tpl->getVariable('properties')->value['previewurl'] : null)!=''){?>
        
        <?php if ((isset($_smarty_tpl->getVariable('customconfigs')->value['disable_add_item']) ? $_smarty_tpl->getVariable('customconfigs')->value['disable_add_item'] : null)!='1'){?>
        ,
        <?php }?>
                
        {
            text: '[[%migx.preview]]',
			handler: this.preview
        }
        <?php }?>
        
        <?php if ((isset($_smarty_tpl->getVariable('customconfigs')->value['tbar']) ? $_smarty_tpl->getVariable('customconfigs')->value['tbar'] : null)!=''){?>
        <?php if ((isset($_smarty_tpl->getVariable('customconfigs')->value['disable_add_item']) ? $_smarty_tpl->getVariable('customconfigs')->value['disable_add_item'] : null)!='1'){?>
        ,
        <?php }?>        
        <?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['tbar']) ? $_smarty_tpl->getVariable('customconfigs')->value['tbar'] : null);?>

        <?php }?>
        ]        
		,viewConfig: {
            forceFit:true
        }
    });
	
    MODx.grid.multiTVgrid.superclass.constructor.call(this,config)
    this._makeTemplates();
    this.getStore().pathconfigs=config.pathconfigs;
    
	this.loadData();
    this.on('click', this.onClick, this);  
};
Ext.extend(MODx.grid.multiTVgrid,MODx.grid.LocalGrid,{
    _renderUrl: function(v,md,rec) {
        return '<a href="'+v+'" target="_blank">'+rec.data.pagetitle+'</a>';
    }
    ,_makeTemplates: function() {
        this.tplRowActions = new Ext.XTemplate('<tpl for="."><div class="migx-actions-column">'
										    +'<h3 class="main-column">{column_value}</h3>'
												+'<tpl if="column_actions">'
													+'<ul class="actions">'
                                                        +'<tpl for="column_actions">'
                                                            +'<tpl if="typeof (className) != '+"'undefined'"+'">'   
														    +'<li><a href="#" class="controlBtn {className} {handler}">{text}</a></li>'
                                                          +'</tpl>'
													    +'</tpl>'
                                                    +'</ul>'
												+'</tpl>'
											+'</div></tpl>',{
			compiled: true
		});
    }    
    ,renderFirst : function(val, md, rec, row, col, s){
		val = val.split(':');
        return val[0];
        
        /*
        var max = 100;
        var count = val.length;
		if (count>max){
            return(val.substring(0, max));
		}
        */        
		return val;
	}        
    ,renderLimited : function(val, md, rec, row, col, s){
		var max = 100;
        var count = val.length;
		if (count>max){
            return(val.substring(0, max));
		}        
		return val;
	}    
    ,renderPreview : function(val,md,rec){
		return val;
	}
    <?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['gridfunctions']) ? $_smarty_tpl->getVariable('customconfigs')->value['gridfunctions'] : null);?>

    
	,loadData: function(){
	    var items_string = Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value;
        var items = [];
        var item = {};
        try {
            items = Ext.util.JSON.decode(items_string);
        }
        catch (e){
        }
        
        if (items.length == 0){
            Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value = '';     
        }
                
        this.autoinc = 0;
        for(i = 0; i <  items.length; i++) {
 		    item = items[i];
            if (item.MIGX_id){
                if (parseInt(item.MIGX_id)  > this.autoinc){
                    this.autoinc = item.MIGX_id;
                }
            }else{
                item.MIGX_id = this.autoinc +1 ;
                this.autoinc = item.MIGX_id;                 
            }	
           items[i] = item;  
        } 
        
		this.getStore().sortInfo = null;
		this.getStore().loadData(items);
        
        
			
		this.syncSize();
        this.setWidth('100%');
    }
    
    ,getSelectedAsList: function() {
        var sels = this.getSelectionModel().getSelections();
        if (sels.length <= 0) return false;

        var cs = '';
        for (var i=0;i<sels.length;i++) {
            cs += ','+sels[i].data.id;
        }
        cs = Ext.util.Format.substr(cs,1,cs.length-1);
        return cs;
    }
	,addItem: function(btn,e) {
	    var maxRecords =  parseInt('<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['maxRecords']) ? $_smarty_tpl->getVariable('customconfigs')->value['maxRecords'] : null);?>
');
        var add_items_directly = '<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['add_items_directly']) ? $_smarty_tpl->getVariable('customconfigs')->value['add_items_directly'] : null);?>
';
        var s=this.getStore();
        if(maxRecords != 0 && s.getCount() >= maxRecords){
            alert ('[[%migx.max_records_alert]]');
            return;            
        }
        if (add_items_directly == '1'){
            this.addNewItem();    
        }else{
            this.loadWin(btn,e,s.getCount(),'a');    
        }
	}
    ,addNewItem: function(item){
            if (item){
                var item = item;
                var items = [];
                items.push(item);
            }else{
                var items=Ext.util.JSON.decode('<?php echo $_smarty_tpl->getVariable('newitem')->value;?>
');
                var item = items[0];
            }
            var s = this.getStore();
            var addNewItemAt = '<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['addNewItemAt']) ? $_smarty_tpl->getVariable('customconfigs')->value['addNewItemAt'] : null);?>
';
            
	        this.autoinc = parseInt(this.autoinc) +1; 
            s.loadData(items,true);
            idx=s.getCount()-1;
            var rec = s.getAt(idx);
            rec.set('MIGX_id',this.autoinc);
            item['MIGX_id'] = this.autoinc;
            rec.json = item;
          
            if (addNewItemAt == 'top'){
                s.insert(0,rec);
            }
            this.getView().refresh();
            
            var call_collectmigxitems = this.call_collectmigxitems;
            this.call_collectmigxitems=true;
            this.collectItems(); 
            this.call_collectmigxitems = call_collectmigxitems;       
    }    
	,preview: function(btn,e) {
		var s=this.getStore();
		this.loadPreviewWin(btn,e,s.getCount(),'a');
	}    	
	,remove: function() {
        var _this=this;
		Ext.Msg.confirm(_('warning') || '','[[%migx.remove_confirm]]' || '',function(e) {
            if (e == 'yes') {
				
        var sels = _this.getSelectionModel().getSelections();
        if (sels.length <= 0) return false;
        for (var i=0;i<sels.length;i++) {
            var id = sels[i].id;
            var index = _this.getStore().findBy(function(record){if(record.id == id){return true;}});
            _this.getStore().removeAt(index);   
        }                
                
                _this.getView().refresh();
		        _this.collectItems();
                MODx.fireResourceFormChange();	
                }
            }),this;		
	}
	,refresh: function() {
        return;
    }       
	,update: function(btn,e) {
      this.loadWin(btn,e,this.menu.recordIndex,'u');
    }
	,duplicate: function(btn,e) {
	    var add_items_directly = '<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['add_items_directly']) ? $_smarty_tpl->getVariable('customconfigs')->value['add_items_directly'] : null);?>
';
        if (add_items_directly == '1'){
            var s=this.getStore();
            var rec = s.getAt(this.menu.recordIndex);
            this.addNewItem(rec.json);    
        }else{
            this.loadWin(btn,e,this.menu.recordIndex,'d'); 
        }       
       
      
    } 

	,loadFromSource: function(btn,e) {
        MODx.Ajax.request({
            url: MODx.config.assets_url+'components/migx/connector.php'
            ,params: {
                action: 'mgr/loadfromsource'
                ,resource_id: '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
'
				,co_id: '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
'
                ,tv_name: '<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
'
                ,items: Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value 
            }
            ,listeners: {
                'success': {fn:function(res){
                    if (res.message==''){
                        var items = res.object;
                        var item = null;
                        Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value = Ext.util.JSON.encode(items);
                        this.autoinc = 0;
                        for(i = 0; i <  items.length; i++) {
 		                    item = items[i];
                            if (item.MIGX_id){
                                
                                if (parseInt(item.MIGX_id)  > this.autoinc){
                                    this.autoinc = item.MIGX_id;
                                }
                            }else{
                                item.MIGX_id = this.autoinc +1 ;
                                this.autoinc = item.MIGX_id;                 
                            }	
                            items[i] = item;  
                        } 
                        
		                this.getStore().sortInfo = null;
		                this.getStore().loadData(items);
                        var call_collectmigxitems = this.call_collectmigxitems;
                        this.call_collectmigxitems=true;
                        this.collectItems(); 
                        this.call_collectmigxitems = call_collectmigxitems;                                             
                    }
                    
                },scope:this}
            }
        });          
	}      
	,loadWin: function(btn,e,index,action) {
	    var resource_id = '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
';
        var co_id = '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
';
        var object_id = '<?php echo (isset($_smarty_tpl->getVariable('request')->value['object_id']) ? $_smarty_tpl->getVariable('request')->value['object_id'] : null);?>
';
        var input_prefix = Ext.id(null,'inp_');
        <?php if ((isset($_smarty_tpl->getVariable('properties')->value['autoResourceFolders']) ? $_smarty_tpl->getVariable('properties')->value['autoResourceFolders'] : null)=='true'){?>
        if (resource_id == 0){
            alert ('[[%migx.save_resource]]');
            return;
        }
        <?php }?>        
       
        if (action == 'a'){
           var json='<?php echo $_smarty_tpl->getVariable('newitem')->value;?>
';
           var data=Ext.util.JSON.decode(json);
        }else{
		   var s = this.getStore();
           var rec = s.getAt(index)            
           var data = rec.data;
           var json = Ext.util.JSON.encode(rec.json);
           
        }
        
        var isnew = (action == 'u') ? '0':'1';
        var isduplicate = (action == 'd') ? '1':'0';
		
        var win_xtype = 'modx-window-tv-item-update-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
';
		if (this.windows[win_xtype]){
			this.windows[win_xtype].fp.autoLoad.params.tv_id='<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
';
			this.windows[win_xtype].fp.autoLoad.params.resource_id=resource_id;
            this.windows[win_xtype].fp.autoLoad.params.co_id=co_id;
            this.windows[win_xtype].fp.autoLoad.params.object_id=object_id;
            this.windows[win_xtype].fp.autoLoad.params.input_prefix=input_prefix;
            this.windows[win_xtype].fp.autoLoad.params.tv_name='<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
';
            this.windows[win_xtype].fp.autoLoad.params.configs='<?php echo (isset($_smarty_tpl->getVariable('properties')->value['configs']) ? $_smarty_tpl->getVariable('properties')->value['configs'] : null);?>
';
		    this.windows[win_xtype].fp.autoLoad.params.itemid=index;
            this.windows[win_xtype].fp.autoLoad.params.record_json=json;
            this.windows[win_xtype].fp.autoLoad.params.autoinc=this.autoinc;
            this.windows[win_xtype].fp.autoLoad.params.isnew=isnew;
            this.windows[win_xtype].fp.autoLoad.params.isduplicate=isduplicate;
			this.windows[win_xtype].grid=this;
            this.windows[win_xtype].action=action;
		}
		this.loadWindow(btn,e,{
            xtype: win_xtype
            ,record: data
			,grid: this
            ,action: action
			,baseParams : {
				record_json:json,
			    action: 'mgr/fields',
				tv_id: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
',
				tv_name: '<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
',
                configs: '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['configs']) ? $_smarty_tpl->getVariable('properties')->value['configs'] : null);?>
',
				'class_key': 'modDocument',
                'wctx':'<?php echo $_smarty_tpl->getVariable('myctx')->value;?>
',
				itemid : index,
                autoinc : this.autoinc,
                isnew : isnew,
                isduplicate : isduplicate,
                resource_id : resource_id,
                object_id: object_id,
                co_id : co_id,
                input_prefix: input_prefix
			}
        });
    }
	,loadPreviewWin: function(btn,e,index,action) {
        var items = Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value;
        var jsonvarkey = '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['jsonvarkey']) ? $_smarty_tpl->getVariable('properties')->value['jsonvarkey'] : null);?>
';
        if (jsonvarkey == ''){
            jsonvarkey = 'migx_outputvalue';
        }
        var win_xtype = 'modx-window-mi-preview';
		if (this.windows[win_xtype]){
			//this.windows[win_xtype].fp.autoLoad.params.tv_id='<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
';
			//this.windows[win_xtype].fp.autoLoad.params.tv_name='<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
';
		    //this.windows[win_xtype].fp.autoLoad.params.itemid=index;
            //this.windows[win_xtype].fp.autoLoad.params.record_json=json;
            this.windows[win_xtype].src='<?php echo (isset($_smarty_tpl->getVariable('properties')->value['previewurl']) ? $_smarty_tpl->getVariable('properties')->value['previewurl'] : null);?>
';
			this.windows[win_xtype].json=items;
            this.windows[win_xtype].jsonvarkey=jsonvarkey;
            this.windows[win_xtype].action=action;
		}
		this.loadWindow(btn,e,{
            xtype: win_xtype
            ,src: '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['previewurl']) ? $_smarty_tpl->getVariable('properties')->value['previewurl'] : null);?>
'
            ,jsonvarkey:jsonvarkey
            ,json: items
			,grid: this
            ,action: action
        });
    }
	,loadIframeWin: function(btn,e,tpl) {
        var resource_id = '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
';
        var co_id = '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
';
        var object_id = '<?php echo (isset($_smarty_tpl->getVariable('request')->value['object_id']) ? $_smarty_tpl->getVariable('request')->value['object_id'] : null);?>
';
        var url = MODx.config.assets_url+'components/migx/connector.php';
        var items = Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value;
        var jsonvarkey = '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['jsonvarkey']) ? $_smarty_tpl->getVariable('properties')->value['jsonvarkey'] : null);?>
';
        if (jsonvarkey == ''){
            jsonvarkey = 'migx_outputvalue';
        }
        var win_xtype = 'modx-window-mi-iframe-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
';
        var object_id_field = null;
    	if (this.windows[win_xtype]){
			//this.windows[win_xtype].fp.autoLoad.params.tv_id='<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
';
			//this.windows[win_xtype].fp.autoLoad.params.tv_name='<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
';
		    //this.windows[win_xtype].fp.autoLoad.params.itemid=index;
            //this.windows[win_xtype].fp.autoLoad.params.record_json=json;
            this.windows[win_xtype].src = url;
			this.windows[win_xtype].json=items;
            this.windows[win_xtype].jsonvarkey=jsonvarkey;
            //this.windows[win_xtype].action=action;
            this.windows[win_xtype].resource_id=resource_id;
            this.windows[win_xtype].co_id=co_id;
            this.windows[win_xtype].object_id = object_id;
            object_id_field = Ext.get('migx_iframewin_object_id_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
');
            object_id_field.dom.value = object_id;            
            iframeTpl_field = Ext.get('migx_iframewin_iframeTpl_<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
');
            iframeTpl_field.dom.value = tpl;            
		}
		this.loadWindow(btn,e,{
            xtype: win_xtype
            ,src: url
            ,jsonvarkey:jsonvarkey
            ,json: items
			,grid: this
            //,action: action
            ,resource_id: resource_id
            ,object_id: object_id
            ,co_id: co_id
            ,title: '<?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['iframeWindowTitle']) ? $_smarty_tpl->getVariable('customconfigs')->value['iframeWindowTitle'] : null);?>
'
            ,iframeTpl: tpl
        });
    } 
    ,moveToTop: function() {
        var s=this.getStore();
        var rec = s.getAt(this.menu.recordIndex);
        
        var sels = this.getSelectionModel().getSelections();
        if (sels.length <= 0) return false;
        for (var i=0;i<sels.length;i++) {
            s.insert(i,sels[i]);
        }         
        this.getView().refresh();
		this.collectItems();
        MODx.fireResourceFormChange();        
    }
    ,moveToBottom: function() {
        var s=this.getStore();
        var rec = s.getAt(this.menu.recordIndex);        
        idx=s.getCount()-1;
        var sels = this.getSelectionModel().getSelections();
        if (sels.length <= 0) return false;
        for (var i=0;i<sels.length;i++) {
            s.insert(idx,sels[i]);
        }          
        this.getView().refresh();
		this.collectItems();
        MODx.fireResourceFormChange();           
    }         	    
    ,getMenu: function() {
		var n = this.menu.record; 
        var m = [];
        m.push({
            text: '[[%migx.edit]]'
            ,handler: this.update
        });
        m.push({
            text: '[[%migx.duplicate]]'
            ,handler: this.duplicate
        });        
        m.push('-');
        m.push({
            text: '[[%migx.remove]]'
            ,handler: this.remove
        });
        m.push('-');
        m.push({
            text: '[[%migx.move_to_top]]'
            ,handler: this.moveToTop
        }); 
        m.push({
            text: '[[%migx.move_to_bottom]]'
            ,handler: this.moveToBottom
        });                   
		return m;
    }
    ,renderRowActions:function(v,md,rec) {
        var n = rec.data;
        var m = [];	   
        <?php echo (isset($_smarty_tpl->getVariable('customconfigs')->value['gridcolumnbuttons']) ? $_smarty_tpl->getVariable('customconfigs')->value['gridcolumnbuttons'] : null);?>
 
        rec.data.column_actions = m;
        rec.data.column_value = v;
        return this.tplRowActions.apply(rec.data);
	} 
    ,setSelectedRecords:function(){
        this.selected_records = this.getSelectionModel().getSelections();    
    }        
	,updateSelected: function(column,value,stopRefresh){
        var col = null;	 
        var rec = null;        
        if (column && column.dataIndex){
            col = column.dataIndex;
 		    var records = this.selected_records;
            if (records){
                for(i = 0; i < records.length; i++) {
                rec = records[i];
                    rec.json[col] = value;
                    rec.set(col,value);           
                }            
            }
         }
         if (stopRefresh){
            
         }else{
             this.getView().refresh();
             this.collectItems();            
         }

         MODx.fireResourceFormChange();   
	}
    
    ,collectItems: function(){
		var items=[];
		// read jsons from grid-store-items 

        var griddata=this.store.data;
		for(i = 0; i <  griddata.length; i++) {
 			items.push(griddata.items[i].json);
        }

        if (this.call_collectmigxitems){
        items = Ext.util.JSON.encode(items); 
        MODx.Ajax.request({
            url: MODx.config.assets_url+'components/migx/connector.php'
            ,params: {
                action: 'mgr/migxdb/process'
                ,processaction: 'collectmigxitems'
                ,resource_id: '<?php echo (isset($_smarty_tpl->getVariable('resource')->value['id']) ? $_smarty_tpl->getVariable('resource')->value['id'] : null);?>
'
				,co_id: '<?php echo $_smarty_tpl->getVariable('connected_object_id')->value;?>
'
                ,tv_name: '<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
'
                ,items: items 
                ,configs: '<?php echo (isset($_smarty_tpl->getVariable('properties')->value['configs']) ? $_smarty_tpl->getVariable('properties')->value['configs'] : null);?>
'      
                
            }
            ,listeners: {
                'success': {fn:function(res){
                    if (res.message==''){
                        var items = res.object;
                        var item = null;
                        Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value = Ext.util.JSON.encode(items);
                        this.autoinc = 0;
                        for(i = 0; i <  items.length; i++) {
 		                    item = items[i];
                            if (item.MIGX_id){
                                if (parseInt(item.MIGX_id)  > this.autoinc){
                                    this.autoinc = item.MIGX_id;
                                }
                            }else{
                                item.MIGX_id = this.autoinc +1 ;
                                this.autoinc = item.MIGX_id;                 
                            }	
                            items[i] = item;  
                        } 
        
		                this.getStore().sortInfo = null;
		                this.getStore().loadData(items);                                                    
                    }
                    
                },scope:this}
            }
        });            
        }else{
        if (items.length >0){
           Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value = Ext.util.JSON.encode(items); 
        }
        else{
           Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom.value = '';  
        }            
        }
    	return;						 
    }
	,onClick: function(e){
		
        var t = e.getTarget();
        var elm = t.className.split(' ')[0];
        if(elm == 'controlBtn') {
            var handler = t.className.split(' ')[2];
            var col = t.className.split(' ')[3];
            var record = this.getSelectionModel().getSelected();
            var migxid = record.data.MIGX_id;
            if (migxid){
                this.menu.recordIndex = record.store.find('MIGX_id',migxid);        
            }
            this.menu.record = record;
            var fn = eval(handler);
            fn = fn.createDelegate(this);
            fn(null,e,col);
            e.stopEvent();
 		}
	}       
});
Ext.reg('modx-grid-multitvgrid-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
',MODx.grid.multiTVgrid);
