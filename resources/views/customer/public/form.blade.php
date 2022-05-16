

		 {!! Form::open(array('url'=>'customer', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Customers</legend>
				{!! Form::hidden('ID', $row['ID']) !!}					
									  <div class="form-group row  " >
										<label for="Name" class=" control-label col-md-4 "> Name </label>
										<div class="col-md-8">
										  <input  type='text' name='name' id='name' value='{{ $row['name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Email" class=" control-label col-md-4 "> Email </label>
										<div class="col-md-8">
										  <input  type='text' name='email' id='email' value='{{ $row['email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Phone" class=" control-label col-md-4 "> Phone </label>
										<div class="col-md-8">
										  <input  type='text' name='phone' id='phone' value='{{ $row['phone'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Contact Person" class=" control-label col-md-4 "> Contact Person </label>
										<div class="col-md-8">
										  <input  type='text' name='contact_person' id='contact_person' value='{{ $row['contact_person'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipper Forwarder" class=" control-label col-md-4 "> Shipper Forwarder </label>
										<div class="col-md-8">
										  <input  type='text' name='shipper_forwarder' id='shipper_forwarder' value='{{ $row['shipper_forwarder'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Shipper Name" class=" control-label col-md-4 "> Shipper Name </label>
										<div class="col-md-8">
										  <input  type='text' name='shipper_name' id='shipper_name' value='{{ $row['shipper_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Kyc" class=" control-label col-md-4 "> Kyc </label>
										<div class="col-md-8">
										  <input  type='text' name='kyc' id='kyc' value='{{ $row['kyc'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Gst Certificate" class=" control-label col-md-4 "> Gst Certificate </label>
										<div class="col-md-8">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="gst_certificate" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="gst_certificate-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["gst_certificate"],"") !!}
						</div>
					 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Pan Card" class=" control-label col-md-4 "> Pan Card </label>
										<div class="col-md-8">
										  <input  type='text' name='pan_card' id='pan_card' value='{{ $row['pan_card'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Comments" class=" control-label col-md-4 "> Comments </label>
										<div class="col-md-8">
										  <input  type='text' name='comments' id='comments' value='{{ $row['comments'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Created At" class=" control-label col-md-4 "> Created At </label>
										<div class="col-md-8">
										  <input  type='text' name='created_at' id='created_at' value='{{ $row['created_at'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Modified At" class=" control-label col-md-4 "> Modified At </label>
										<div class="col-md-8">
										  <input  type='text' name='modified_at' id='modified_at' value='{{ $row['modified_at'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Created By" class=" control-label col-md-4 "> Created By </label>
										<div class="col-md-8">
										  <input  type='text' name='created_by' id='created_by' value='{{ $row['created_by'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Modified By" class=" control-label col-md-4 "> Modified By </label>
										<div class="col-md-8">
										  <input  type='text' name='modified_by' id='modified_by' value='{{ $row['modified_by'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> </fieldset></div>

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
