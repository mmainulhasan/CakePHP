<style>
 .error
	   {
		   padding-left:10px;
		   color:red
	   }
	   input
	   {
		   padding:5 5 5 5;
		   border-radius: 4px !important;
		   width:100% !important;
		   height:25px !important


	   }
	   textarea
	   {
		   width:100% !important;
	   }
	   input[type=radio]{width:15% !important;
	   margin:0px !important}

	   input[type=checkbox]{width:15% !important;
	   margin:0px !important}
	   .tmp:focus
	   {
		       border: 1px solid #ccc !important;

	   }

</style>
<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Add New Items</h3>
    </div>
    <div class="title_right">
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel"> <?php echo $this->Session->flash(); ?>
        <div class="x_content"> <br />

          <?php echo $this->Form->create('Item',array('url'=>'add','method'=>'post','name'=>'editForm','class'=>'form-horizontal form-label-left') );

		  ?>

           <div class="container">
            <div class="row clearfix">

                <table class="table table-bordered table-hover" id="tab_logic">
				   <thead>
                    <tr class="addr1" style="background:#FF9" >
                      <th width="1%" class="text-center"> S.No. </th>
					  <th width="15%" class="text-center">Item Name*</th>
                      <th width="10%" class="text-center">Food Type*</th>
                      <th width="20%" class="text-center">Ingredients</th>
                      <th width="13%" class="text-center">Preparation Time(minutes)*</th>
                      <th width="1%" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr  class="tdr addr1">
                        <td style="text-align:center;vertical-align:middle;font-weight:bold ;background:#FF9" class="sr" rowspan="3" >1</td>
                        <td>
                          <input type="hidden" name="data[0][Item][category_id]" value="<?=$this->Session->read('cat_id')?>" />
                          <input type="hidden" name="data[0][Item][restuarant_id]" value="<?=$this->Session->read('restro_id')?>" />
                          <input name="data[0][Item][item_name]" required="required" class="form-control col-md-7 col-xs-12" autofocus="autofocus" placeholder="Item Name" >
                        </td>
                        <td>
                            <label class="" for="first-name">Veg </label><input  type="radio" name="data[0][ItemsRate][food_type_id]" value="0" checked="checked" /><label  class="" for="first-name">Non-Veg </label><input  type="radio" value="1" name="data[0][ItemsRate][food_type_id]" required/>
                        </td>
                        <td>
                            <textarea name="data[0][Item][ingredients]"   class="form-control col-md-7 col-xs-12"  placeholder="Ingredients"></textarea>
                        </td>
                        <td>
                            <input name="data[0][Item][preparation_time]"  class="form-control col-md-7 col-xs-12"  placeholder="Preparation Time"   min=1 type="number" required >
                         </td>
                         <td>
                              <div style='font-size:20px; cursor:pointer;'><a class="add_row" ><i class='fa fa-plus'></i></a></div>
                         </td>
                    </tr>
                    <tr class="addr1">
                       <!--<th width="12%" class="text-center">
                           <label>GST Applicable? </label>
                           <input type="checkbox" name="data[0][Item][gst_applicability]" value="1" style="width:15%"
                           onchange="if(this.checked){$('#_gst_0').attr('disabled',false).focus();}else{$('#_gst_0').attr('disabled',true).val('');}" tabindex="1" />
                       </th> -->
                       <th class="text-center">
                           <label>Discount Available? </label>
                           <input type="checkbox" name="data[0][Item][discount_applicability]" value="1" style="width:15%"
                           onchange= "if(this.checked){$('#_discount_0').attr('disabled',false).focus();$('._dis_radio_0_1').attr('disabled',false);}
                           else{$('#_discount_0').attr('disabled',true).val('');$('._dis_radio_0_1').attr('disabled',true);}" tabindex="2" />
                       </th>
                       <th class="" colspan="2" style="padding:0px;">
                         <table style="width:100%" class="table-hover text-center" >
                           <tr>
                             <td style="width:66%">
                                Rate*<br />
                            <label>Portions Wise ?</label>
                            <input  name="data[0][rate_type]" value="0" type="radio" checked="checked"  onchange="
                            if(this.checked)
                            {
                              $('#portion_div_0').css('display','block');
                              $('#ItemsRatePortionId_0').attr('required',true);
                              $('#_rate_0').css('display','none').attr({'disabled':true,'required':false}).val(null);
                            }
                            " />
                            <label>Single Plate </label>
                            <input type="radio" name="data[0][rate_type]"  value="1" onchange="
                            if(this.checked)
                            {
                              $('#portion_div_0').css('display','none');
                              $('#ItemsRatePortionId_0').attr('required',false);
                              $('#ItemsRatePortionId_0' ).selectpicker('deselectAll');
                              $('#ItemsRatePortionId_0').selectpicker('refresh');
                              $('#rate_table_0').html('');
                              $('#_rate_0').css('display','block').attr({'disabled':false,'required':true}).focus();

                            }" />
                             </td>
                             <td style="width:34%; border-left:1px solid #ddd; height:75px; padding:0px 2px 0px 2px">Addons <br />
                             <select name="data[0][ItemExtras][extras_id][]" id="ItemExtrasExtrasId_0" class="form-control selectpicker show-menu-arrow "  data-live-search="true" data-live-search-style="begins" title="Select Food Addons" multiple="multiple"  data-done-button="true" data-actions-box="true"  data-selected-text-format="count > 1" >
           						<?PHP	   for($i=0;$i<count($extras);$i++)  {  ?>
              						<option value="<?=$extras[$i]['Extras']['id']?>"><?=$extras[$i]['Extras']['name']?></option>
		  						<? }?>
           				</select>

                             </td>
                           </tr>
                         </table>

                       </th>


                       <th class="" colspan="2" style="padding:0px;">
                       	<table style="width:100%" class="table-hover text-center" >
                       		<tr>
                       			<td>
                       				<br />
                       				VAT Applicable
                       				<br />
                       				<label>Yes </label>
                       				<input name="data[0][Item][is_vat]" value="1" type="radio" onchange="
	                       				if(this.checked)
	                       				{
	                       					$('#vat_tax_0').val('<?php echo (isset($masterTaxes[$defaultTax])) ? $masterTaxes[$defaultTax] : '0.00'; ?>');
	                       					$('#vat_tax_list_0').val('<?php echo $defaultTax ?>');
	                       					$('#vat_div_0').css('display','block');
	                       					$('#vat_tax_list_0').attr('required', true);
	                       				}" />
                       				<label>No </label>
                       				<input type="radio" name="data[0][Item][is_vat]" value="0" checked="checked" onchange="
	                       				if(this.checked)
	                       				{
	                       					$('#vat_div_0').css('display', 'none');
	                       					$('#vat_tax_list_0').attr('required', false);
	                       					$('#vat_tax_0').val('0.00');
	                       				}" />
                       			</td>
                       		</tr>
                       	</table>

                       </th>

                    </tr>
                    <tr class="addr1">
                       <!--<td>
                            <input id="_gst_0" name="data[0][Item][gst_precentage]" required="required" class="form-control col-md-7 col-xs-12"  placeholder="GST Precentage" disabled="disabled"   step="0.01" type="number" min=0 >
                      </td> -->
                      <td>
                          <input id="_discount_0" name="data[0][Item][discount]" required="required" class="form-control col-md-7 col-xs-12"  placeholder="Discount Value" disabled="disabled" step="0.01" type="number" tabindex="3" min="0" >
                          <br /><br /><label>Discount Type </label><br />
                          <label>%</label>
                          <input class="_dis_radio_0_1"  type="radio" name="data[0][Item][discount_type]" value="0" checked="checked" disabled="disabled"
                          onchange="
                            if(this.checked)
                            {
                              $('#_discount_0').attr('step','0.01');

                            }"   /><span> </span>
                          <img src="<?=$imgpath?>rupess.png" />
                          <input class="_dis_radio_0_1"  type="radio" value="1" name="data[0][Item][discount_type]" disabled="disabled" required onchange="
                            if(this.checked)
                            {
                              $('#_discount_0').attr('step','1');

                            }"/>

                      </td>
                      <td colspan="2"  >
                      	<div id="portion_div_0">
                      		<select name="data[0][ItemsRate][portion_id][]" id="ItemsRatePortionId_0" class="form-control col-md-7 col-xs-12 selectpicker show-menu-arrow " required data-live-search="true" data-live-search-style="begins" title="Select Food porstion" multiple="multiple"  data-done-button="true" data-actions-box="true" onchange="get_portions(0)" data-selected-text-format="count > 4">
                      			<?PHP	   for($i=0;$i<count($portions);$i++)  {  ?>
                      			<option value="<?=$portions[$i]['Portions']['id']?>"><?=$portions[$i]['Portions']['portion_name']?></option>
                      			<? }?>
                      		</select><br />
                      		<table  class="table table-bordered table-hover "  id="rate_table_0" style="width:100%;"></table>
                      	</div>
                      	<input id="_rate_0" name="data[0][ItemsRate][rate]" required="required" class="form-control col-md-7 col-xs-12"  placeholder="Rate" disabled="disabled" style="display:none;width:45% !important" type="number" min="1" ><input type="hidden" name="data[0][ItemsRate][portion_id]" value="<?=$default_portion?>" />

                      </td>


                      <td colspan="2">
                      	<div id="vat_div_0" style="display:none;">
                      		<label style="width:60px;float:left;">VAT Tax</label>

                        	<input type="hidden" id="vat_tax_0" name="data[0][Item][vat_tax]" value="0.00" />

													<select class="form-control" name="data[0][Item][tax_master_id]" id="vat_tax_list_0" data-id="0" onchange="setVatValue(this)">
														<?php foreach($masterTaxes as $mtKey => &$mtValue): ?>
															<option value="<?php echo $mtKey ?>" <?php if($mtKey == $defaultTax) echo 'selected="selected"' ?>><?php echo $mtValue ?></option>
														<?php endforeach ?>
													</select>
                        </div>
                      </td>

                    </tr>

                  </tbody>
                </table>

            </div>
           </div>

          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" id="submit" class="btn btn-success">Submit</button>
              <a href="<?php echo $path ?>items" class="btn btn-primary">Cancel</a> </div>
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

<!-- /page content -->
<script>
$('body').on('keydown', 'input, select, textarea', function(e) {
var self = $(this)
  , form = self.parents('form:eq(0)')
  , focusable
  , next
  , prev
  ;

if (e.shiftKey) {
 if (e.keyCode == 13) {
     focusable =   form.find('input,a,select,button,textarea').filter(':visible:not([readonly]):enabled');
     prev = focusable.eq(focusable.index(this)-1);

     if (prev.length) {
        prev.focus();
     } else {
        form.submit();
    }
  }
}
  else
if (e.keyCode == 13) {
    focusable = form.find('input,a,select,button,textarea').filter(':visible:not([readonly]):enabled');
    next = focusable.eq(focusable.index(this)+1);
    if (next.length) {
        next.focus();
    } else {
        form.submit();
    }
    return false;
}
});
$(document).ready(function(){

    $(document).bind('keydown', function(event) {
      //19 for Mac Command+S
     if (!( String.fromCharCode(event.which).toLowerCase() == 's' && event.ctrlKey) && !(event.which == 19)) return true;

      event.preventDefault();
      console.log("Ctrl-s pressed");
$("#submit").click();
      return false;

   });


//$('#ItemsRatePortionId').on('change',get_portions );





});


shortcut.add("Ctrl+C",function() {
	window.location.href='<?php echo $path ?>items';

});
shortcut.add("Ctrl+A",function() {
	addRow();

});

function get_portions(j)
{

		label_arr = new  Array();
		val_arr = new  Array();

		k = 0;
	    $("#rate_table_"+j+" td").each(function()
		{

			label_arr.push($(this).find("label").html());
			val_arr[label_arr[k]]=$(this).find("input").val();

			k++;
		});


	    var str = "<tr>"; i=0;
        $( "#ItemsRatePortionId_"+j+" option:selected" ).each(function() {
			if(i!=0 && i%2==0) str+= "</tr><tr>" ;
			if($.inArray($(this).text(),label_arr) == -1)
			{
            str+='<td><label>'+$( this ).text()+'</label><input type="number" name="data['+j+']['+(i+1)+'][ItemsRate][rate]" value=""  required placeholder="Rate" class="form-control col-md-7 col-xs-12 tmp" /><input type="hidden" name="data['+j+']['+(i+1)+'][ItemsRate][portion_id]" value="'+$( this ).val()+'" /></td>';
			}
			else
			{
			str+='<td><label>'+$( this ).text()+'</label><input type="number" name="data['+j+']['+(i+1)+'][ItemsRate][rate]" value="'+val_arr[$( this ).text()]+'"  required placeholder="Rate" class="form-control col-md-7 col-xs-12 tmp" /><input type="hidden" name="data['+j+']['+(i+1)+'][ItemsRate][portion_id]" value="'+$( this ).val()+'" /></td>';

			}
		    i++;
		   });
		str+="</tr>"
		$("#rate_table_"+j).html(str);

		td_arr= null;
		label_arr =null;
}

last_del = $('.sr').toArray().length + 1;
function DeleteRow(row)
{

	//$('#addr'+row).remove();
	$('.addr'+row).remove();
	last_del++
	tds = $('.sr').toArray();
	for(i=0;i<tds.length;i++)
	{
		tds[i].innerHTML = i+1;
	}

}
function addRow()
{

	tds = $('.tdr').toArray();
	l = tds.length+1 ;


	  str = '<tr class="addr'+last_del+'" style="background:#FF9" ><th width="1%" class="text-center sr" style="text-align:center;vertical-align:middle;font-weight:bold" rowspan="4">'+l+'</th><th width="15%" class="text-center">Item Name*</th><th width="10%" class="text-center">Food Type*</th><th width="20%" class="text-center">Ingredients</th><th width="13%" class="text-center">Preparation Time(minutes)*</th><th width="1%" class="text-center">Action</th></tr> <tr  class="tdr addr'+last_del+'"><td><input type="hidden" name="data['+last_del+'][Item][category_id]" value="<?=$this->Session->read('cat_id')?>" /><input type="hidden" name="data['+last_del+'][Item][restuarant_id]" value="<?=$this->Session->read('restro_id')?>" /><input name="data['+last_del+'][Item][item_name]" required="required" class="form-control col-md-7 col-xs-12" autofocus="autofocus" placeholder="Item Name" ></td><td><label class="" for="first-name">Veg </label><input  type="radio" name="data['+last_del+'][ItemsRate][food_type_id]" value="0" checked="checked" /><label  class="" for="first-name">Non-Veg </label><input  type="radio" value="1" name="data['+last_del+'][ItemsRate][food_type_id]" required/></td><td><textarea name="data['+last_del+'][Item][ingredients]"   class="form-control col-md-7 col-xs-12"  placeholder="Ingredients"></textarea></td><td><input name="data['+last_del+'][Item][preparation_time]"  class="form-control col-md-7 col-xs-12"  placeholder="Preparation Time"   min=1 type="number" required ></td><td><div style="font-size:20px; cursor:pointer;"><a onclick="addRow()" ><i class="fa fa-plus"></i></a>&nbsp;&nbsp;<i onclick="DeleteRow('+last_del+')" class="fa fa-trash deleteCls" ></i></a></div></td></tr> <tr class="addr'+last_del+'"><th width="12%" class="text-center"><label>Discount Available? </label><input type="checkbox" name="data['+last_del+'][Item][discount_applicability]" value="1" style="width:15%" onchange= "if(this.checked){$(\'#_discount_'+last_del+'\').attr(\'disabled\',false).focus();$(\'._dis_radio_'+last_del+'_1\').attr(\'disabled\',false);} else{$(\'#_discount_'+last_del+'\').attr(\'disabled\',true).val(\'\');$(\'._dis_radio_'+last_del+'_1\').attr(\'disabled\',true);}" tabindex="2" /></th><th width="13%" class="text-center" colspan="2" style="padding:0px"><table style="width:100%" class="table-hover" ><tr><td style="width:66%">Rate*<br /><label>Portions Wise ?</label><input  name="data['+last_del+'][rate_type]" value="0" type="radio" checked="checked"  onchange="if(this.checked){$(\'#portion_div_'+last_del+'\').css(\'display\',\'block\');$(\'#ItemsRatePortionId_'+last_del+'\').attr(\'required\',true);$(\'#_rate_'+last_del+'\').css(\'display\',\'none\').attr({\'disabled\':true,\'required\':false}).val(null);}" /><label>Single Plate </label><input type="radio" name="data['+last_del+'][rate_type]"  value="1" onchange="if(this.checked){ $(\'#portion_div_'+last_del+'\').css(\'display\',\'none\');$(\'#ItemsRatePortionId_'+last_del+'\').attr(\'required\',false);$(\'#ItemsRatePortionId_'+last_del+'\' ).selectpicker(\'deselectAll\'); $(\'#ItemsRatePortionId_0\').selectpicker(\'refresh\'); $(\'#rate_table_'+last_del+'\').html(\'\');$(\'#_rate_'+last_del+'\').css(\'display\',\'block\').attr({\'disabled\':false,\'required\':true}).focus();}" /></td><td style="width:34%; border-left:1px solid #ddd; height:75px; padding:0px 2px 0px 2px">Addons <br /><select name="data['+last_del+'][ItemExtras][extras_id][]" id="ItemExtrasExtrasId_'+last_del+'" class="form-control selectpicker show-menu-arrow "  data-live-search="true" data-live-search-style="begins" title="Select Food Addons" multiple="multiple"  data-done-button="true" data-actions-box="true" data-selected-text-format="count > 1" ><?PHP  for($i=0;$i<count($extras);$i++)  {  ?><option value="<?=$extras[$i]['Extras']['id']?>"><?=$extras[$i]['Extras']['name']?></option><? }?></select></td></tr></table></th>';

	  str = str + '<th class="" colspan="2" style="padding:0px;"><table style="width:100%" class="table-hover text-center" ><tr><td><br />VAT Applicable<br /><label>Yes </label><input name="data['+last_del+'][Item][is_vat]" value="1" type="radio" onchange="if(this.checked) { $(\'#vat_tax_'+last_del+'\').val(\'<?php echo (isset($masterTaxes[$defaultTax])) ? $masterTaxes[$defaultTax] : '0.00'; ?>\'); $(\'#vat_tax_list_'+last_del+'\').val(\'<?php echo $defaultTax ?>\'); $(\'#vat_div_'+last_del+'\').css(\'display\',\'block\'); $(\'#vat_tax_list_'+last_del+'\').attr(\'required\', true); }" /><label>No </label><input type="radio" name="data['+last_del+'][Item][is_vat]" value="0" checked="checked" onchange="if(this.checked) { $(\'#vat_div_'+last_del+'\').css(\'display\', \'none\');$(\'#vat_tax_list_'+last_del+'\').attr(\'required\', false);$(\'#vat_tax_'+last_del+'\').val(\'0.00\'); }" /></td></tr></table></th>';

	  str = str + '</tr><tr class="addr'+last_del+'"><td><input id="_discount_'+last_del+'" name="data['+last_del+'][Item][discount]" required="required" class="form-control col-md-7 col-xs-12"  placeholder="Discount Value" disabled="disabled" step="0.01" type="number" tabindex="3" min="0" ><br /><label>Discount Type </label><br /><label>%</label><input class="_dis_radio_'+last_del+'_1"  type="radio" name="data['+last_del+'][Item][discount_type]" value="0" checked="checked" disabled="disabled" onchange="if(this.checked){$(\'#_discount_'+last_del+'\').attr(\'step\',\'0.01\');}"   /><span></span><img src="<?=$imgpath?>rupess.png" /><input class="_dis_radio_'+last_del+'_1"  type="radio" value="1" name="data['+last_del+'][Item][discount_type]" disabled="disabled" required onchange="if(this.checked) {$(\'#_discount_'+last_del+'\').attr(\'step\',\'1\');}"/></td><td colspan="2"><div id="portion_div_'+last_del+'"> <select name="data['+last_del+'][ItemsRate][portion_id][]" id="ItemsRatePortionId_'+last_del+'" class="form-control col-md-7 col-xs-12  selectpicker show-menu-arrow"  required data-live-search="true" data-live-search-style="begins" title="Select Food porstion" multiple="multiple"  style="height:20px" data-done-button="true" data-actions-box="true" onchange="get_portions('+last_del+')" data-selected-text-format="count > 4" ><?PHP for($i=0;$i<count($portions);$i++)  {  ?> <option value="<?=$portions[$i]['Portions']['id']?>"><?=$portions[$i]['Portions']['portion_name']?></option> <? }?> </select> <br /> <table  class="table table-bordered table-hover " id="rate_table_'+last_del+'" style="width:100%;"></table> </div> <input id="_rate_'+last_del+'" name="data['+last_del+'][ItemsRate][rate]" required="required" class="form-control col-md-7 col-xs-12"  placeholder="Rate" disabled="disabled" style="display:none;width:45% !important" type="number" min="1" ><input type="hidden" name="data['+last_del+'][ItemsRate][portion_id]" value="<?=$default_portion?>" /></td>';

	  str = str + '<td colspan="2"><div id="vat_div_'+last_del+'" style="display:none;"><label style="width:60px;float:left;">VAT Tax</label><input type="hidden" id="vat_tax_'+last_del+'" name="data['+last_del+'][Item][vat_tax]" value="0.00" /><select class="form-control" name="data['+last_del+'][Item][tax_master_id]" id="vat_tax_list_'+last_del+'" data-id="'+last_del+'" onchange="setVatValue(this)">';

		<?php foreach($masterTaxes as $mtKey => &$mtValue): ?>
			str = str + '<option value="<?php echo $mtKey ?>" <?php if($mtKey == $defaultTax) echo 'selected="selected"' ?>><?php echo $mtValue ?></option>';
		<?php endforeach ?>

	  str = str + '</select></div></td>';

	  str = str + '</tr>';


    //&nbsp;&nbsp;<i onclick="DeleteRow('+last_del+')" class="fa fa-trash deleteCls" ></i></a>

	$('#tab_logic').append(str);
	$('#ItemsRatePortionId_'+last_del).selectpicker('refresh');
	$('#ItemExtrasExtrasId_'+last_del).selectpicker('refresh');
	last_del++;

}
$(".add_row").click(addRow);

function setVatValue(el)
{
	var id = $(el).data("id");
	var vat = el.options[el.selectedIndex].text;
	$('#vat_tax_' + id).val(vat);
}


</script>