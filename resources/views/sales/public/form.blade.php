

		 {!! Form::open(array('url'=>'sales', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Sales</legend>
				{!! Form::hidden('ID', $row['ID']) !!}					
									  <div class="form-group row  " >
										<label for="CS User" class=" control-label col-md-4 "> CS User </label>
										<div class="col-md-8">
										  <input  type='text' name='CS_User' id='CS_User' value='{{ $row['CS_User'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="DateOfBooking" class=" control-label col-md-4 "> DateOfBooking </label>
										<div class="col-md-8">
										  <input  type='text' name='DateOfBooking' id='DateOfBooking' value='{{ $row['DateOfBooking'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="BookingNo" class=" control-label col-md-4 "> BookingNo </label>
										<div class="col-md-8">
										  <input  type='text' name='BookingNo' id='BookingNo' value='{{ $row['BookingNo'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="POL" class=" control-label col-md-4 "> POL </label>
										<div class="col-md-8">
										  <input  type='text' name='POL' id='POL' value='{{ $row['POL'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="POD" class=" control-label col-md-4 "> POD </label>
										<div class="col-md-8">
										  <input  type='text' name='POD' id='POD' value='{{ $row['POD'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="ETD" class=" control-label col-md-4 "> ETD </label>
										<div class="col-md-8">
										  <input  type='text' name='ETD' id='ETD' value='{{ $row['ETD'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="VesselName" class=" control-label col-md-4 "> VesselName </label>
										<div class="col-md-8">
										  <input  type='text' name='VesselName' id='VesselName' value='{{ $row['VesselName'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="ContainerCount" class=" control-label col-md-4 "> ContainerCount </label>
										<div class="col-md-8">
										  <input  type='text' name='ContainerCount' id='ContainerCount' value='{{ $row['ContainerCount'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="ContainerType" class=" control-label col-md-4 "> ContainerType </label>
										<div class="col-md-8">
										  <input  type='text' name='ContainerType' id='ContainerType' value='{{ $row['ContainerType'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="CustomerName" class=" control-label col-md-4 "> CustomerName </label>
										<div class="col-md-8">
										  <input  type='text' name='CustomerName' id='CustomerName' value='{{ $row['CustomerName'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="SalesPerson" class=" control-label col-md-4 "> SalesPerson </label>
										<div class="col-md-8">
										  <input  type='text' name='SalesPerson' id='SalesPerson' value='{{ $row['SalesPerson'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="NVO SL" class=" control-label col-md-4 "> NVO SL </label>
										<div class="col-md-8">
										  <input  type='text' name='NVO_SL' id='NVO_SL' value='{{ $row['NVO_SL'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="BookingValidTill" class=" control-label col-md-4 "> BookingValidTill </label>
										<div class="col-md-8">
										  <input  type='text' name='BookingValidTill' id='BookingValidTill' value='{{ $row['BookingValidTill'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="EmptyPickedupDate" class=" control-label col-md-4 "> EmptyPickedupDate </label>
										<div class="col-md-8">
										  <input  type='text' name='EmptyPickedupDate' id='EmptyPickedupDate' value='{{ $row['EmptyPickedupDate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="SI CutOffDate" class=" control-label col-md-4 "> SI CutOffDate </label>
										<div class="col-md-8">
										  <input  type='text' name='SI_CutOffDate' id='SI_CutOffDate' value='{{ $row['SI_CutOffDate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Doc CutOffDate" class=" control-label col-md-4 "> Doc CutOffDate </label>
										<div class="col-md-8">
										  <input  type='text' name='Doc_CutOffDate' id='Doc_CutOffDate' value='{{ $row['Doc_CutOffDate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="GateOpenDate" class=" control-label col-md-4 "> GateOpenDate </label>
										<div class="col-md-8">
										  <input  type='text' name='GateOpenDate' id='GateOpenDate' value='{{ $row['GateOpenDate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="GateClosingDate" class=" control-label col-md-4 "> GateClosingDate </label>
										<div class="col-md-8">
										  <input  type='text' name='GateClosingDate' id='GateClosingDate' value='{{ $row['GateClosingDate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="GateInDate" class=" control-label col-md-4 "> GateInDate </label>
										<div class="col-md-8">
										  <input  type='text' name='GateInDate' id='GateInDate' value='{{ $row['GateInDate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Remarks" class=" control-label col-md-4 "> Remarks </label>
										<div class="col-md-8">
										  <textarea name='Remarks' rows='5' id='Remarks' class='form-control form-control-sm '  
				           >{{ $row['Remarks'] }}</textarea> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Department" class=" control-label col-md-4 "> Department </label>
										<div class="col-md-8">
										  <input  type='text' name='Department' id='Department' value='{{ $row['Department'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="InvoiceReceivedDate" class=" control-label col-md-4 "> InvoiceReceivedDate </label>
										<div class="col-md-8">
										  
					{!! Form::text('InvoiceReceivedDate', $row['InvoiceReceivedDate'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="InvoiceSentDate" class=" control-label col-md-4 "> InvoiceSentDate </label>
										<div class="col-md-8">
										  
					{!! Form::text('InvoiceSentDate', $row['InvoiceSentDate'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="InvoiceAging" class=" control-label col-md-4 "> InvoiceAging </label>
										<div class="col-md-8">
										  <input  type='text' name='InvoiceAging' id='InvoiceAging' value='{{ $row['InvoiceAging'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="PaymentDate" class=" control-label col-md-4 "> PaymentDate </label>
										<div class="col-md-8">
										  
					{!! Form::text('PaymentDate', $row['PaymentDate'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="BLstatus" class=" control-label col-md-4 "> BLstatus </label>
										<div class="col-md-8">
										  <input  type='text' name='BLstatus' id='BLstatus' value='{{ $row['BLstatus'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="BLSentdate" class=" control-label col-md-4 "> BLSentdate </label>
										<div class="col-md-8">
										  
					{!! Form::text('BLSentdate', $row['BLSentdate'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="BLaging" class=" control-label col-md-4 "> BLaging </label>
										<div class="col-md-8">
										  <input  type='text' name='BLaging' id='BLaging' value='{{ $row['BLaging'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="DraftStatus" class=" control-label col-md-4 "> DraftStatus </label>
										<div class="col-md-8">
										  <input  type='text' name='DraftStatus' id='DraftStatus' value='{{ $row['DraftStatus'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="ContainerStatus" class=" control-label col-md-4 "> ContainerStatus </label>
										<div class="col-md-8">
										  <input  type='text' name='ContainerStatus' id='ContainerStatus' value='{{ $row['ContainerStatus'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="RatesValidTill" class=" control-label col-md-4 "> RatesValidTill </label>
										<div class="col-md-8">
										  
					{!! Form::text('RatesValidTill', $row['RatesValidTill'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Stage" class=" control-label col-md-4 "> Stage </label>
										<div class="col-md-8">
										  <input  type='text' name='stage' id='stage' value='{{ $row['stage'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 "> Status </label>
										<div class="col-md-8">
										  <input  type='text' name='status' id='status' value='{{ $row['status'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Commodity" class=" control-label col-md-4 "> Commodity </label>
										<div class="col-md-8">
										  <input  type='text' name='commodity' id='commodity' value='{{ $row['commodity'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Customer Email" class=" control-label col-md-4 "> Customer Email </label>
										<div class="col-md-8">
										  <input  type='text' name='customer_email' id='customer_email' value='{{ $row['customer_email'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Customer Address" class=" control-label col-md-4 "> Customer Address </label>
										<div class="col-md-8">
										  <input  type='text' name='customer_address' id='customer_address' value='{{ $row['customer_address'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="TypeOfOnboarding" class=" control-label col-md-4 "> TypeOfOnboarding </label>
										<div class="col-md-8">
										  <input  type='text' name='TypeOfOnboarding' id='TypeOfOnboarding' value='{{ $row['TypeOfOnboarding'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="MobileNumber" class=" control-label col-md-4 "> MobileNumber </label>
										<div class="col-md-8">
										  <input  type='text' name='MobileNumber' id='MobileNumber' value='{{ $row['MobileNumber'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="ShippingLineName" class=" control-label col-md-4 "> ShippingLineName </label>
										<div class="col-md-8">
										  <input  type='text' name='ShippingLineName' id='ShippingLineName' value='{{ $row['ShippingLineName'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="BuyRate" class=" control-label col-md-4 "> BuyRate </label>
										<div class="col-md-8">
										  <input  type='text' name='BuyRate' id='BuyRate' value='{{ $row['BuyRate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="SellRate" class=" control-label col-md-4 "> SellRate </label>
										<div class="col-md-8">
										  <input  type='text' name='SellRate' id='SellRate' value='{{ $row['SellRate'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Comments" class=" control-label col-md-4 "> Comments </label>
										<div class="col-md-8">
										  <textarea name='Comments' rows='5' id='Comments' class='form-control form-control-sm '  
				           >{{ $row['Comments'] }}</textarea> 
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
										<label for="HedgeID" class=" control-label col-md-4 "> HedgeID </label>
										<div class="col-md-8">
										  <input  type='text' name='HedgeID' id='HedgeID' value='{{ $row['HedgeID'] }}' 
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
