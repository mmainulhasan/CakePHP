<?php $this->assign('title', 'Restaurant ');?>
<?php echo $this->Html->script(array('/js/shortcut/shortcut.js'));?>

<style>
.sidebar-footer{ min-height:60px !important }
.error {  padding-left:10px;  color:red  }
 input {  padding:5 5 5 5;  border-radius: 4px !important;  width:42% !important;}
input[type=radio]{padding-top:5px;border-radius: 4px !important;width:5% !important;}
	   input[type=checkbox]
	   {

		   width:5% !important;
		  height:20px;
		  padding-left:2px;

	   }
	    .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

	   .bs-searchbox input
	    {
		    width:100% !important;
		}



</style>
<div class="right_col" role="main">
<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Add New <?=$title;?></h3>
    </div>
    <div class="title_right">
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel"> <?php echo $this->Session->flash(); ?>

      <?php echo $this->Form->create('User',array('url' => 'add','method'=>'post','name'=>'addForm','class'=>'form-horizontal form-label-left',"enctype"=>"multipart/form-data") );
		  echo $this->Form->hidden('User.user_type',array("value"=>$user_type));?>

      <ul>
		<li><a href="#tabs-1" >Owner Details</a></li>
		<li><a href="#tabs-2" >Restaurant Details</a></li>
        <li><a href="#tabs-3">Restaurant Location</a></li>
	  </ul>

          <div class="x_content" id="tabs-1"> <br />


         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.username', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false,'autofocus'=>true, 'div' => false,'type'=>'email','placeholder'=>'Username','pattern'=>'[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?'));?>
    <label id="customer-error" class="error control-label col-md-3 col-sm-3 col-xs-12" style="width:100%; text-align:left; float:left; display:none"></label>           </div>
          </div>
		   <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.password', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'placeholder'=>'Password','pattern'=>'^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$','title'=>"Password must be between 7 to 15 characters contain at least one numeric digit and a special character"));?></div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Xerox Password <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('confirm_password', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'password','placeholder'=>'Xerox Password','pattern'=>'^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$'));?></div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span> </label>
            <div class="col-md-6 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.name', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Onwer Name','pattern'=>"^[A-z ]{2,}$",'title'=>'Digit or Special Characters are not allow'));?> </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.email', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false,'readonly'=>true, 'div' => false,'type'=>'email','placeholder'=>'Email','pattern'=>'[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?'));?>
</div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.mobile_no', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Mobile No.[xxxxxxxxxx]','pattern'=>"[789]\d{9}",
			"onchange"=>"check_mobile('UserMobileNo','mobile-error')","onkeyup"=>"check_mobile('UserMobileNo','mobile-error')"));?>
    <label id="mobile-error" class="error control-label col-md-3 col-sm-3 col-xs-12" style="width:100%; text-align:left; float:left; display:none"></label>           </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Gender">Gender <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12" style="padding-top:8px"> <input required="required"  type="radio" name="data[User][gender]" value="0" checked="checked" />Male<input type="radio" value="1" name="data[User][gender]" required/>Female </div>
          </div>
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date Of Birth <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.dob', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Date of birth'));?> </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Marriage Anniversary <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.anniversary_date', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Anniversary Date'));?> </div>
          </div>
          <div class="form-group">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Food Type <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12" style="padding-top:8px"> <input    type="radio" name="data[User][food_type_id]" value="0" checked="checked" /><img src='<?=$imgpath?>/green.jpg' title="Veg" width='24'  /> Veg <input  type="radio" value="1" name="data[User][food_type_id]" required/><img src='<?=$imgpath?>/red.jpg' width='26' title="Non-Veg"  />Non-Veg</div>
          </div>
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Country<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.country_id', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','label' => false,'onchange'=>'change_country("UserCountryId","UserStateId")',  'div' => false,"data-live-search"=>"true", "data-live-search-style"=>"begins", "title"=>"Select Country"));?> </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.state_id', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','label' => false, 'div' => false,"data-live-search"=>"true", "data-live-search-style"=>"begins", "title"=>"Select State",'onchange'=>'change_state("UserStateId","UserCityId")'));?> </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.city_id', array('required'=>'true', 'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','label' => false, 'div' => false,"data-live-search"=>"true", "data-live-search-style"=>"begins", "title"=>"Select City"));?> </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php
			$options=array(
			 "1"=>'Active',
			 "0"=>'Inactive'
			);
			echo $this->Form->input('User.status', array('options'=>$options,'required'=>'true','label' => false, 'div' => false,'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','title'=>'Select Status'));?> </div>
          </div>
		   <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Upload Pic <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('User.user_pic', array('type'=>'file', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'class' => 'form-control col-md-7 col-xs-12',));?> </div>

          </div>
     <div style=" float:right"><a href="javascript:void(0)" onclick="tab1()" class="btn btn-primary">Next</a> </div>
          </div> <!-- $( '.x_panel' ).tabs( 'option', 'active', 1 ); -->
          <div class="x_content" id="tabs-2">
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Restaurant Name<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.restaurant_name', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'placeholder'=>'Restaurant Name','maxlength'=>50));?>
   </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tag Line <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.tag_line', array( 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Tag line'));?> </div>
          </div>
		  <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Contact Person <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.contact_person', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Contact Person Name','pattern'=>"^[A-z ]{2,}$",'title'=>'Digit or Special Characters are not allow'));?> </div>
          </div>
           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone No. <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.contact_no', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Phone No.[+xx-(STD code)(Phone No.)]','pattern'=>"(?:(?:\\+|0{0,2})91(\\s*[\\- ]\\s*)?|[0 ]?)?[789]\\d{9}|(\\d[ -]?){10,}\\d"));?>            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Website Url <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.website_url', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'url','placeholder'=>'Wesite Url'));?>
			</div>
  		</div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
            <div class="col-md-7 col-sm-6 col-xs-12"><input type="checkbox" id="mobile" value="1" /><label  class="control-label ">Same as Owner.</label></div>
         </div>
         <script>
		     $('#mobile').change(function(event)
			 {
				 if($(this).is(':checked'))
				 {
					 val=$( "#UserMobileNo" ).val();
					 pattern=/^[789]\d{9}$/;
					 if(val!=="" && pattern.test(val))
			       	 {
							 $( "#RestaurantMobileNo" ).attr({'readonly':true}).val(val);
							 $("#mobile-error1").css({'display':'none','color':'green'}). html("");
							 document.getElementById("RestaurantMobileNo").setCustomValidity("");
					 }else
					 {
						      $( "#dialog-alert" ).dialog({
											height:90,
											model:false,
											resizable:false

											}
										).html("<span style='color:red'>Owner mobile no. is not specified !</span>");
							 $(this).attr('checked',false);
							 setTimeout(function(){$('#dialog-alert').dialog('close'); }, 2000);
						     $( "#RestaurantMobileNo" ).attr({'readonly':false}).val(null);
					 }
				 }else
				 {
					 $( "#RestaurantMobileNo" ).attr({'readonly':false}).val(null);
				 }

			 });
		 </script>
        <div class="form-group">

            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mobile <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.mobile_no', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Mobile No.[xxxxxxxxxx]','pattern'=>"[789]\d{9}",
			"onchange"=>"check_mobile('RestaurantMobileNo','mobile-error1')","onkeyup"=>"check_mobile('RestaurantMobileNo','mobile-error1')"));?>

    <label id="mobile-error1" class="error control-label col-md-3 col-sm-3 col-xs-12" style="width:100%; text-align:left; float:left; display:none"></label>           </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
            <div class="col-md-7 col-sm-6 col-xs-12"><input type="checkbox" id="email" /><label  class="control-label ">Same as Owner.</label></div>
         </div>
          <script>
		     $('#email').change(function(event)
			 {
				 if($(this).is(':checked'))
				 {
					 val=$( "#UserEmail" ).val();
					 pattern=/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/;
					 if(val!=="" && pattern.test(val))
			       	 {
							 $( "#RestaurantEmail" ).attr({'readonly':true}).val(val);
							 $("#customer-error1").css({'display':'none','color':'green'}). html("");
							 document.getElementById("RestaurantEmail").setCustomValidity("");

					 }else
					 {
						      $( "#dialog-alert" ).dialog({
											height:90,
											model:false,
											resizable:false

											}
										).html("<span style='color:red'>Owner email id is not specified !</span>");
							 $(this).attr('checked',false);
							 setTimeout(function(){$('#dialog-alert').dialog('close'); }, 3000);
						     $( "#RestaurantEmail" ).attr({'readonly':false}).val(null);
							 $("#customer-error1").css({'display':'none','color':'green'}). html("");

					 }
				 }else
				 {
					 $( "#RestaurantEmail" ).attr({'readonly':false}).val(null);
				 }

			 });
		 </script>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.email', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'email','placeholder'=>'Email','pattern'=>'[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?'));?>
            <label id="customer-error1" class="error control-label col-md-3 col-sm-3 col-xs-12" style="width:100%; text-align:left; float:left; display:none"></label>
            </div>
          </div>
        <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tin No. <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.tin_no', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Tin No.','maxlength'=>"30"));?>
             </div>
        </div>
         <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service Tax No. <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.service_tax_no', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Service Tax No.'));?>
             </div>
        </div>
        <div class="form-group">
             <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service Charges <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.service_charges', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'number',"min"=>"0","max"=>"20","step"=>"0.1",'placeholder'=>'Service Charges.'));?>
             </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.address', array('type' => 'textarea','style' => 'width: 400px; height: 70px;','required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'placeholder'=>'Address'));?> </div>
            </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Country<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.country_id', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','onchange'=>'change_country("RestaurantCountryId","RestaurantStateId")','label' => false,  'div' => false,"data-live-search"=>"true", "data-live-search-style"=>"begins", "title"=>"Select Country"));?> </div>
          </div>
         <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">State<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.state_id', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','label' => false, 'div' => false,"data-live-search"=>"true",'onchange'=>'change_state("RestaurantStateId","RestaurantCityId")', "data-live-search-style"=>"begins", "title"=>"Select State"));?> </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.city_id', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','label' => false, 'div' => false,"data-live-search"=>"true", "data-live-search-style"=>"begins", "title"=>"Select City"));?> </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opening Days <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php
			$options=array(
			 "0"=>'Monday',
			 "1"=>'Tuesday',
			 "2"=>'Wednesday',
			 "3"=>'Thursday',
			 "4"=>'Friday',
			 "5"=>'Saturday',
			 "6"=>'Sunday',
			);
			echo $this->Form->input('Restaurant.opening_days', array('options'=>$options,'required'=>'false','label' => false, 'div' => false,'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','title'=>'Select Days',"multiple"=>true,"data-done-button"=>"true", "data-actions-box"=>"true"));?> </div>
          </div>
          <div class="form-group form-inline">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Opening Time<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php
				echo $this->Form->input('Restaurant.open_time', array('required'=>'false','label' => false, 'div' => false,'class' => 'form-control','placeholder'=>'Opening Time',"type"=>"time","value"=>"09:00AM"));?> </div>
          </div>
          <div class="form-group form-inline">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Closing Time<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php
				echo $this->Form->input('Restaurant.close_time', array('required'=>'false','label' => false, 'div' => false,'class' => 'form-control','placeholder'=>'Closing Time',"type"=>"time","value"=>"23:00 PM"));?> </div>
          </div>

           <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Restaurant Type <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php
			$options=array(
			 "0"=>'Restaurants',
			 "1"=>'Cafe'
			);
			echo $this->Form->input('Restaurant.restaurant_type', array('options'=>$options,'required'=>'false','label' => false, 'div' => false,'class' => 'form-control col-md-7 col-xs-12 selectpicker show-menu-arrow','title'=>'Select Type'));?> </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Food Type <span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12" style="padding-top:8px">
            	<input type="radio" name="data[Restaurant][food_type_id]" value="0" checked="checked" />
            	<img src='<?=$imgpath?>/green.jpg' title="Veg" width='24'/> Veg
            	<input type="radio" value="1" name="data[Restaurant][food_type_id]" required />
            	<img src='<?=$imgpath?>/red.jpg' width='26' title="Non-Veg" />Non-Veg
            	<input type="radio" name="data[Restaurant][food_type_id]" value="2" />
            	<img src='<?=$imgpath?>/green.jpg' title="Both" width='24'/> Both
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Home Delivery<span class="required">*</span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12" style="padding-top:8px"> <input  type="radio" name="data[Restaurant][home_delivery_available]" value="0" checked="checked" />Yes<input type="radio" value="1" name="data[Restaurant][home_delivery_available]" required/>No</div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Order Cancellation Available?<span class="required">*</span> </label>
              <div class="col-md-7 col-sm-6 col-xs-12" style="padding-top:8px"> <input  type="radio"  name="cancel_available" value="0" checked="checked" />No<input type="radio" value="1" name="cancel_available" required/>Yes</div>
            </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cancel Time(minutes) <span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.auto_cancel_time', array('required'=>'false','disabled'=>true, 'class' => 'form-control col-md-7 col-xs-12','label' => false,"value"=>"", 'div' => false,'type'=>'number', 'min'=>3,'max'=>15));?>
</div>
          </div>

		   <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Restaurant Image<span class="required"></span> </label>
            <div class="col-md-7 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.logo_path', array('type'=>'file', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'placeholder'=>'Restaurant Image','class' => 'form-control col-md-7 col-xs-12',));?> </div>
            </div>

 <div style=" float:left"><a href="javascript:void(0)" onclick="tab2(1,2,0)" class="btn btn-primary">Back</a> </div>
 <div style=" float:right"><a href="javascript:void(0)" onclick="tab2(0,1,2)" class="btn btn-primary">Next</a> </div>

           </div>
          <div class="x_content" id="tabs-3">





          <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <span class="required"></span> </label>

            <div id="map" class="col-md-10 col-sm-10 col-xs-12" style=" width:100%; height:500px; margin-top:10px; margin-bottom:10px; border:1px "></div>
            <input id="locationTextField" type="text" class="form-control col-md-7 col-xs-12 controls "  >
            </div>

       <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location <span class="required">*</span> </label>
            <div class="col-md-6 col-sm-6 col-xs-12"> <?php echo $this->Form->input('Restaurant.restaurant_lat', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Latitude','readonly'=>'false','onkeyup'=>"this.value=''",'style'=>'margin-right:5px'));?>

			<?php echo  $this->Form->input('Restaurant.restaurant_lng', array('required'=>'false', 'class' => 'form-control col-md-7 col-xs-12','label' => false, 'div' => false,'type'=>'text','placeholder'=>'Longitude','readonly'=>'false','onkeyup'=>"this.value=''"));?> </div>


          </div>


          <div class="form-group">
          <a href="javascript:void(0)" onclick="tab3()" class="btn btn-primary" style="float:left">Back</a>
            <div class="col-md-7 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" id="submit" class="btn btn-success">Submit</button>
              <a href="<?php echo $path ?>restaurants" class="btn btn-primary">Cancel</a> </div>
          </div>

          <div>
            <p>- Ctrl + S for Save Data</p>
            <p>- Ctrl + C for go to list page</p>
          </div>


         </div>

        </div>

        </form>
      </div>
    </div>
  </div>

</div>

<!-- /page content -->
<script>
$(function() {
		$( ".x_panel" ).tabs
		({
			collapsible: true,
			active:2,

		});
	});

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
      if($( ".x_panel" ).tabs( "option", "active") == 2)
	  {
       event.preventDefault();
       console.log("Ctrl-s pressed");
	   $("#submit").click();
	  }
       return false;

   });



});
shortcut.add("Ctrl+C",function() {
	window.location.href='<?php echo $path ?>restaurants';
	//$( ".x_panel" ).tabs( "option", "active", 1 );

});
shortcut.add("Ctrl+b",function() {
	tab = $( ".x_panel" ).tabs( "option", "active");
	if(tab == 1)
	{ 	  tab2(1,2,0);
	}
	else if (tab == 2)
	{
		tab3()
	}});

shortcut.add("Ctrl+f",function(event) {
	tab = $( ".x_panel" ).tabs( "option", "active");
	    if(tab == 0)
		{ 	  tab1();  }
		 else if (tab == 1)
	       {	tab2(0,1,2)	}


	});


function change_country(country,state){
	id=$( "#"+country ).val()
	jQuery.ajax({

                                    async: true,
                                    cache: false,
                                    dataType: 'text',
                                    url: '<?php echo $path;?>/Users/getState/' + id,
                                    success: function(response)
									{
										$("#"+state).html(response)
										$("#"+state).selectpicker('refresh');
										return false;
									}
				});
}

function change_state(state,city){
	id=$( "#"+state ).val()
	jQuery.ajax({

                                    async: true,
                                    cache: false,
                                    dataType: 'text',
                                    url: '<?php echo $path;?>/Users/getCity/' + id,
                                    success: function(response)
									{
										$("#"+city).html(response)
										$("#"+city).selectpicker('refresh');
										return false;
									}
				});
}


function check_username(){
	id=$( "#UserUsername" ).val()
	if(id!=="")
	{

	pattern=/^[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?$/;

	if(pattern.test(id)){
	jQuery.ajax({

                                    async: true,
                                    cache: false,
                                    dataType: 'json',
                                    url: '<?php echo $path;?>/Users/checkUser/' + id,
                                    success: function(response)
									{
									   if(response.status=="error")
									   {
									    $("#customer-error")
									      .css({'display':'block','color':'red'})
										  . html(response.message)
										  document.getElementById("UserUsername").setCustomValidity("Please Specified different Username !");
										  $('#UserEmail').val("");
										  if($('#email').is(':checked'))
										  {
											  $( "#RestaurantEmail" ).attr({'readonly':true}).val("");
										  }
									   }
									   else
									   {
										   $("#customer-error")
									      .css({'display':'block','color':'green'})
										  . html(response.message)
										  document.getElementById("UserUsername").setCustomValidity("");
										  $('#UserEmail').val(id);
										  if($('#email').is(':checked'))
										  {
											  $( "#RestaurantEmail" ).attr({'readonly':true}).val(id);
										  }
									   }
										return false;
									}
				});
         }
		 else
		 {
			                               $("#customer-error")
									      .css({'display':'none','color':'red'})
										  . html("")
										  document.getElementById("UserUsername").setCustomValidity("");
										  $('#UserEmail').val("");
										  if($('#email').is(':checked'))
										  {
											  $( "#RestaurantEmail" ).attr({'readonly':true}).val("");
										  }
		 }
     }else
	 {
		                                  $('#UserEmail').val("");
										  if($('#email').is(':checked'))
										  {
											  $( "#RestaurantEmail" ).attr({'readonly':true}).val("");
										  }
	 }

}

$( "#UserUsername" ).keyup(check_username);
$( "#UserUsername" ).change(check_username);

function check_mail(){
	id=$( "#RestaurantEmail" ).val()

	if(id!=="" && !$('#email').is(':checked'))
	{

	pattern=/^[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?$/;

	if(pattern.test(id)){
	jQuery.ajax({

                                    async: true,
                                    cache: false,
                                    dataType: 'json',
                                    url: '<?php echo $path;?>/Users/checkUser/' + id,
                                    success: function(response)
									{
									   if(response.status=="error")
									   {

									    $("#customer-error1")
									      .css({'display':'block','color':'red'})
										  . html("This email id is already used. Please specified different email id");
										  document.getElementById("RestaurantEmail").setCustomValidity("Please Specified different email id !");

									   }
									   else
									   {
										   $("#customer-error1")
									      .css({'display':'block','color':'green'})
										  . html("This email id is available");

										  document.getElementById("RestaurantEmail").setCustomValidity("");

									   }
										return false;
									}
				});
         }
		 else
		 {
			                               $("#customer-error1")
									      .css({'display':'none','color':'red'})
										  . html("")
										  document.getElementById("RestaurantEmail").setCustomValidity("");

		 }
     }else
	 {

		                                  $("#customer-error1")
									      .css({'display':'block','color':'green'})
										  . html("");

										  document.getElementById("RestaurantEmail").setCustomValidity("");
	 }

}

$( "#RestaurantEmail" ).keyup(check_mail);
$( "#RestaurantEmail" ).change(check_mail);

function check_mobile(mobile_id,error_label){
	val=$( "#"+mobile_id ).val()

	if(val!=="")
	{

	pattern=/^[789]\d{9}$/;

	if(pattern.test(val)){
	jQuery.ajax({

                                    async: true,
                                    cache: false,
                                    dataType: 'json',
                                    url: '<?php echo $path;?>/Users/checkmobile/' + val,
                                    success: function(response)
									{
									   if(response.status=="error")
									   {
									      $("#"+error_label)
									      .css({'display':'block','color':'red'})
										  . html(response.message)
										  document.getElementById(mobile_id).setCustomValidity("Please Specified different mobile no !");
										  if($('#mobile').is(':checked'))
										  {
											  $( "#RestaurantMobileNo" ).attr({'readonly':true}).val("");
										  }
									   }
									   else
									   {
										   $("#"+error_label)
									      .css({'display':'block','color':'green'})
										  . html(response.message)
										  document.getElementById(mobile_id).setCustomValidity("");
										  if($('#mobile').is(':checked'))
										  {
											  $( "#RestaurantMobileNo" ).attr({'readonly':true}).val(val);
										  }
									   }
										return false;
									}
				});
         }
		 else
		 {
			                               $("#"+error_label)
									      .css({'display':'none','color':'red'})
										  . html("")
										  document.getElementById(mobile_id).setCustomValidity("");
		 }
     }

}

var password = document.getElementById("UserPassword");
var confirm_password = document.getElementById("UserConfirmPassword");

function validatePassword(){

  if(password.value != confirm_password.value)
   {
     confirm_password.setCustomValidity("Password don't match");
   }
   else
   {
	   confirm_password.setCustomValidity("");
   }
   return true;
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$("input[type=radio][name=cancel_available]").on('change', function() {
     switch($(this).val()) {
         case '0':
		            $('#RestaurantAutoCancelTime').attr({
						'disabled':true,
						'required':false
						}).val(null);

                      break;
         case '1':
                      el =  $('#RestaurantAutoCancelTime').attr({
						'disabled':false,
						'required':true
						});

             break;
     }
});

$( "#UserCountryId" ).val(<?=$settings['Setting']['default_country']?>)
$( "#RestaurantCountryId" ).val(<?=$settings['Setting']['default_country']?>)
change_country("UserCountryId","UserStateId");
change_country("RestaurantCountryId","RestaurantStateId");


jQuery(function($){
   $("#UserAnniversaryDate").mask("99-99-9999",{placeholder:"dd-mm-yyyy"});
    $("#UserDob").mask("99-99-9999",{placeholder:"dd-mm-yyyy"});
  });

  function myMap()
 {
  var mapCanvas = document.getElementById("map");
  var mapOptions =
  {
    center: new google.maps.LatLng(27.0238,74.2179),
    zoom: 7,

  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker(
  {
    map: map,
	draggable:true
  });

  var infowindow = new google.maps.InfoWindow();
  google.maps.event.addListener(map, 'click', function(event)
   {
    placeMarker(map, event.latLng,marker,infowindow);
   });

   	  var input = document.getElementById('locationTextField');
	   map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      var autocomplete = new google.maps.places.Autocomplete(input);
	     autocomplete.bindTo('bounds', map);
         autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          /*marker.setIcon(({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          })); */

          marker.setPosition(place.geometry.location);
          marker.setVisible(true);
           $('#RestaurantRestaurantLat').val(place.geometry.location.lat()).attr('readonly',true);
           $('#RestaurantRestaurantLng').val(place.geometry.location.lng()).attr('readonly',true);
          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });



     // $( ".x_panel" ).tabs( "option", "active", 0 );
  }

function change_marker(event,infowindow)
{
	$('#RestaurantRestaurantLat').val(event.latLng.lat());
    $('#RestaurantRestaurantLng').val(event.latLng.lng());
	infowindow.setContent('Latitude: ' + event.latLng.lat() + '<br>Longitude: ' + event.latLng.lng());
	return

}


function placeMarker(map, location,marker,infowindow)
{
   marker.setPosition(location);
   $('#RestaurantRestaurantLat').val(location.lat()).attr('readonly',true);
   $('#RestaurantRestaurantLng').val(location.lng()).attr('readonly',true);
   infowindow.setContent('Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng());
   marker.addListener('drag', function(event){change_marker(event,infowindow)});
   marker.addListener('dragend', function(event){change_marker(event,infowindow)});
   infowindow.open(map,marker)

}

function tab1()
{
   username = document.getElementById('UserUsername');
   password = document.getElementById('UserPassword');
   confirm_password = document.getElementById('UserConfirmPassword');
   cname = document.getElementById('UserName');
   email = document.getElementById('UserEmail');
   mobile = document.getElementById('UserMobileNo');
   dob = document.getElementById('UserDob');
   country = document.getElementById('UserCountryId');
   state = document.getElementById('UserStateId');
   city = document.getElementById('UserCityId');
   cstatus = document.getElementById('UserStatus');



		if(!username.validity.valid || !password.validity.valid || !confirm_password.validity.valid || !cname.validity.valid  ||  !email.validity.valid || !mobile.validity.valid || !dob.validity.valid || !country.validity.valid || !state.validity.valid || !city.validity.valid  || !cstatus.validity.valid  )
		{
		    $("#submit").click();
		}
		else
		{
			$('#RestaurantRestaurantName').attr({'required':true})
			$('#RestaurantContactPerson').attr('required',true);
			$('#RestaurantContactNo').attr('required',true);
			$('#RestaurantMobileNo').attr('required',true);
			$('#RestaurantEmail').attr('required',true);
			$('#RestaurantAddress').attr('required',true);
			$('#RestaurantCountryId').attr('required',true);
			$('#RestaurantStateId').attr('required',true);
			$('#RestaurantCityId').attr('required',true);

			$( ".x_panel" ).tabs( "option", "disabled",  [0,2]  );
			$( ".x_panel" ).tabs(  "enable",  1  );
			$( ".x_panel" ).tabs( "option", "active", 1 );
			document.getElementById('RestaurantRestaurantName').focus();;

		}

}

function tab2(a,b,c)
{
        rname =     document.getElementById('RestaurantRestaurantName');
		contact_person = 	document.getElementById('RestaurantContactPerson');
		contact_name = 	document.getElementById('RestaurantContactNo');
		website = 	document.getElementById('RestaurantWebsiteUrl');
		mobile_no =	document.getElementById('RestaurantMobileNo');
		remail  = 	document.getElementById('RestaurantEmail');
		tin_no  = 	document.getElementById('RestaurantTinNo');
		sc  = 	document.getElementById('RestaurantServiceCharges');
		address =	document.getElementById('RestaurantAddress');
		country = 	document.getElementById('RestaurantCountryId');
		state =	document.getElementById('RestaurantStateId');
		city = 	document.getElementById('RestaurantCityId');
		rtype = 	document.getElementById('RestaurantRestaurantType');
		cancel_time = document.getElementById('RestaurantAutoCancelTime');
    //                $('#RestaurantAutoCancelTime').attr({



		if(!rname.validity.valid || !contact_person.validity.valid || !contact_name.validity.valid || !website.validity.valid || !remail.validity.valid || !mobile_no.validity.valid || !address.validity.valid || !tin_no.validity.valid || !sc.validity.valid || !country.validity.valid || !state.validity.valid || !city.validity.valid   ||  !cancel_time.validity.valid ||  !rtype.validity.valid)
		{
		    $("#submit").click();
		}
		else
		{

			$( ".x_panel" ).tabs( "option", "disabled",  [a,b]  );
			$( ".x_panel" ).tabs(  "enable",  c  );
			$( ".x_panel" ).tabs( "option", "active", c);
			if(c==2)
			{
			  $('#RestaurantRestaurantLat').attr('required',true);
			  $('#RestaurantRestaurantLng').attr('required',true);
			  $('#locationTextField').focus()
			}
			else
			{
				document.getElementById("UserUsername").focus();
			}
		}

}
function tab3()
{

        lat = document.getElementById('RestaurantRestaurantLat')
		lng = document.getElementById('RestaurantRestaurantLng')

		if(!lat.validity.valid || !lng.validity.valid )
		{
		    $("#submit").click();
		}
		else
		{

			$( ".x_panel" ).tabs( "option", "disabled",  [0,2]  );
			$( ".x_panel" ).tabs(  "enable",  1  );
			$( ".x_panel" ).tabs( "option", "active", 1);
			document.getElementById("RestaurantRestaurantName").focus();
		}


}

</script>
<script src="http://maps.googleapis.com/maps/api/js?key=<?=$settings['Setting']['google_mapkey']?>&amp;libraries=places&callback=myMap"></script>
<div id="dialog-alert" title="Warning" style="display:none" ></div>
<script>
setTimeout(function(){
	$( ".x_panel" ).tabs( "option", "active", 0 );
	document.getElementById("UserUsername").focus();
	$( ".x_panel" ).tabs( "option", "disabled", [ 1, 2 ] )
	}, 1500);
</script>