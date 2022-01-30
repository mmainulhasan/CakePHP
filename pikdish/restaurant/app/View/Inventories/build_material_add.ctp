<style>
    .form-control{
        width:100%;
    }
</style>
<div class="right_col" role="main">
  <div class="page-title">
    <div class="title_left">
      <h3>Add New Build of Material</h3>
    </div>
    <div class="title_right">
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel"> <?php echo $this->Session->flash(); ?>
        <div class="x_content"> <br />
          <?php echo $this->Form->create('BuildMaterialH',array('class'=>'form-horizontal form-label-left') ); ?>
           <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column" >
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="item_id">Item <span class="required">*</span> </label>
                            <div class="col-md-7 col-sm-6 col-xs-12"><select autofocus='autofocus' name="data[BuildMaterialH][item_rate_id]" id="ItemsRatePortionId" class="form-control selectpicker show-menu-arrow" data-live-search="true" title="Select Items" data-done-button="true" data-selected-text-format="count > 3" required>
						  <?php for($i=0;$i<count($item);$i++){ ?>
                              <option style="font-size:14px" value="<?php echo $item[$i]['ItemsRate']['id']?>" data-subtext="(<?php echo $item[$i]['Portion']['portion_name']?>)"><?php echo $item[$i]['Item']['item_name']?></option>
                          <?php }?>
                       </select></div>
                        </div>
                    </div>
                <div class="col-md-4" >
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="n">No of Items</label>
                            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('no_of_items', array( 'readonly'=>true,'label'=>false,'div'=>false, 'class'=>'total_item form-control '));?> </div>
                        </div>
                    </div>
                    <div class="col-md-4" >
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vch_date">Total Cost</label>
                            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('total_cost', array( 'readonly'=>true,'type'=>'text', 'label'=>false,'div'=>false, 'class'=>'form-control total_cost'));?> </div>
                        </div>
                    </div>
                <table class="table table-bordered table-hover" id="tab_logic">
                  <thead>
                    <tr  style="background:#FF9" >
                      <th width="1%" class="text-center"> S.No. </th>
					  <th class="text-center">Material*</th>
                      <th width="10%" class="text-center">Qty</th>
                      <th width="10%" class="text-center">Unit</th>
                      <th width="10%" class="text-center">Rate</th>
                      <th width="7%" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="tdr" id='addr1'>
                       <td class="sr" style="text-align:center; padding-top:12px;background:#FF9">1</td>
                       <td><select  class="form-control build_of_material" name="data[BuildMaterialL][0][material_id]" required="required">
                               <option value="">-- Select Material --</option>
                               <?php foreach($material as $key=>$list){
                                  echo '<option value="'.$list['Material']['id'].'">'.$list['Material']['name'].'</option>'; 
                               }?>
                           </select>
                       </td>
                       <td><input  class="form-control float qty" name="data[BuildMaterialL][0][qty]" placeholder="Qty"  required="required"></td>
                       <td>
                           <input class="form-control float unit_id" name="data[BuildMaterialL][0][unit_id]" type='hidden'>
                           <input  class="form-control float unit" name="data[BuildMaterialL][0][unit_name]" placeholder="Unit" readonly   required="required">
                       </td>
                       <td><input  class="form-control float rate" name="data[BuildMaterialL][0][rate]" placeholder="Rate" readonly  required="required"></td>
                       <td>
                          <div style='font-size:20px; cursor:pointer;'>
                             <a class="add_row"><i class='fa fa-plus btn_add'></i></a>
                          </div>
                       </td>
                    </tr>
                    <tr class="tdr" id='addr2'>
                       <td class="sr" style="text-align:center; padding-top:12px;background:#FF9">2</td>
                       <td><select  class="form-control build_of_material" name="data[BuildMaterialL][1][material_id]">
                               <option value="">-- Select Material --</option>
                               <?php foreach($material as $key=>$list){
                                  echo '<option value="'.$list['Material']['id'].'">'.$list['Material']['name'].'</option>'; 
                               }?>
                           </select></td>
                       <td><input  class="form-control float qty" name="data[BuildMaterialL][1][qty]"  placeholder="Qty"></td>
                       <td>
                       <input class="form-control float unit_id" name="data[BuildMaterialL][1][unit_id]" type='hidden'>
                           <input  class="form-control float unit" name="data[BuildMaterialL][1][unit_name]" placeholder="Unit" readonly >
                       </td>
                       <td><input  class="form-control float rate" name="data[BuildMaterialL][1][rate]" placeholder="Rate" readonly></td>
                       <td>
                          <div style='font-size:20px; cursor:pointer;'>
                             <a class="add_row"><i class='fa fa-plus btn_add'></i></a>&nbsp;&nbsp;<i class='fa fa-trash deleteCls'></i>
                          </div>
                       </td>
                    </tr>
                 </tbody>
                </table>
              </div>
            </div>
           </div>
          
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" id="submit" class="btn btn-success">Submit</button>
              <?php echo $this->Html->link('Cancel',array('controller'=>'inventories','action'=>'build_material'),array('class'=>'btn btn-primary')); ?>
              <button type="submit" id="submit" value="1" name="data[BuildMaterialH][is_lock]" class="btn btn-success">Lock</button>
              </div>
          </div>
          </form>
          <div>
                        <p>- Ctrl + S for Save Data</p>
                        <p>- Ctrl + C for go to list page</p>
                     
                        </div>

        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $(document).bind('keydown', function(event) {
      //19 for Mac Command+S
    if (!( String.fromCharCode(event.which).toLowerCase() == 's' && event.ctrlKey) && !(event.which == 19)) return true;
        event.preventDefault();
        $("#submit").click();
        return false;
    });
});
shortcut.add("Ctrl+C",function() {
    window.location.href= base_url+'inventories/material';
});
$('body').on('keydown', 'input, select, textarea', function(e) {
   var self = $(this),
      form = self.parents('form:eq(0)'),
      focusable, next, prev;
   if (e.shiftKey) {
      if (e.keyCode == 13) {
         focusable = form.find('input,a,select,button,textarea').filter(':visible:not([readonly]):enabled');
         prev = focusable.eq(focusable.index(this) - 1);
         if (prev.length) {
            prev.focus();
         } else {
            form.submit();
         }
      }
   } else
   if (e.keyCode == 13) {
      focusable = form.find('input,a,select,button,textarea').filter(':visible:not([readonly]):enabled');
      next = focusable.eq(focusable.index(this) + 1);
      if (next.length) {
         next.focus();
      } else {
         form.submit();
      }
      return false;
   }
});
$('#submit').click(function(){
     cal_amt();
});
var last_del = $('.sr').toArray().length + 1;

$(document).on('click','.deleteCls',function(){
    $(this).parents('tr').remove();
    cal_amt();
});
$(document).on('click','.btn_add',function(){
    tds = $('.tdr').toArray();
    l = tds.length + 1;
    str = '<tr class="tdr" id="addr'+last_del+'">'
                        +'<td class="sr" style="text-align:center; padding-top:12px;background:#FF9">'+l+'</td>'
                        +'<td><select  class="form-control build_of_material" name="data[BuildMaterialL]['+l+'][material_id]">'
                                +'<option value="">-- Select Material --</option>'
                                +'<?php foreach($material as $key=>$list){
                                   echo '<option value="'.$list['Material']['id'].'">'.$list['Material']['name'].'</option>'; 
                                }?>'
                            +'</select></td>'
                        +'<td><input class="form-control float qty" name="data[BuildMaterialL]['+l+'][qty]" placeholder="Qty"></td>'
                        +'<td><input type="hidden" class="form-control float unit_id" name="data[BuildMaterialL]['+l+'][unit_id]"><input class="form-control float unit" name="data[BuildMaterialL]['+l+'][unit_name]" placeholder="Unit" readonly ></td>'
                        +'<td><input class="form-control float rate" name="data[BuildMaterialL]['+l+'][rate]" placeholder="Rate" readonly ></td>'
                        +'<td>'
                           +'<div style="font-size:20px; cursor:pointer;">'
                              +'<a class="add_row"><i class="fa fa-plus btn_add"></i></a>&nbsp;&nbsp;<i class="fa fa-trash deleteCls"></i>'
                           +'</div>'
                        +'</td>'
                     +'</tr>';
    last_del++;
    $('#tab_logic').append(str);
});
function addRow() {
  
}
$(".add_row").click(addRow);
$('table').on('keydown','.float' ,function (e) {
	if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
		(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
		(e.keyCode >= 35 && e.keyCode <= 40)) {
			return;
		}
	if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		e.preventDefault();
	}
});
var total_item,total_amt;
$('table').on('keyup','.qty,.rate',function(){
   cal_amt();
});
function cal_amt(){
    total_item = 0;
    total_amt = 0;
   $('.tdr').each(function(){
       qty = $(this).find('.qty').val();
       rate = $(this).find('.rate').val();
       if(qty&&rate){
           total_item++;
           total_amt +=(strip(rate)*strip(qty))
       }
   });
   $('.total_item').val(strip(total_item));
   $('.total_cost').val(strip(total_amt));
}
var material = '<?php echo json_encode($material);?>';

var unit = '<?php echo json_encode($unit);?>';
$(document).on('change','.build_of_material',function(){
    var dom = $(this);
    var v = dom.val();
    if(v!=""){
        $.each(JSON.parse(material),function(a,b){
            if(b.Material.id==v){
                $.each(JSON.parse(unit),function(c,d){
                    if(c==b.Material.unit_id){
                        dom.parents('.tdr').find('input.unit_id').val(c);
                        dom.parents('.tdr').find('input.unit').val(d);
                    }
                })
                dom.parents('.tdr').find('input.rate').val(b.Material.avg_rate);
                return;
            }
        });
    }else{
        dom.parents('.tdr').find('input.rate').val('');
        dom.parents('.tdr').find('input.unit').val('');
    }
});
function strip(number) {
    if(!number){return 0;}
    number = parseFloat(number);
    return (parseFloat(number.toPrecision(6)));
}
</script>
