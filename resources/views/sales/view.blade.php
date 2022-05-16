@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">

		<div class="toolbar-nav">
			<div class="row">
				<div class="col-md-6 ">
					<div class="btn-group">
						<a href="{{ url('sales?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('sales/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('sales/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('sales/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
					</div>			
				</div>	

				
				
			</div>
		</div>
	
		<div class="table-responsive">
			<table class="table  table-bordered " >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ID', (isset($fields['ID']['language'])? $fields['ID']['language'] : array())) }}</td>
						<td>{{ $row->ID}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('CS User', (isset($fields['CS_User']['language'])? $fields['CS_User']['language'] : array())) }}</td>
						<td>{{ $row->CS_User}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DateOfBooking', (isset($fields['DateOfBooking']['language'])? $fields['DateOfBooking']['language'] : array())) }}</td>
						<td>{{ $row->DateOfBooking}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('BookingNo', (isset($fields['BookingNo']['language'])? $fields['BookingNo']['language'] : array())) }}</td>
						<td>{{ $row->BookingNo}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('POL', (isset($fields['POL']['language'])? $fields['POL']['language'] : array())) }}</td>
						<td>{{ $row->POL}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('POD', (isset($fields['POD']['language'])? $fields['POD']['language'] : array())) }}</td>
						<td>{{ $row->POD}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ETD', (isset($fields['ETD']['language'])? $fields['ETD']['language'] : array())) }}</td>
						<td>{{ $row->ETD}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('VesselName', (isset($fields['VesselName']['language'])? $fields['VesselName']['language'] : array())) }}</td>
						<td>{{ $row->VesselName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ContainerCount', (isset($fields['ContainerCount']['language'])? $fields['ContainerCount']['language'] : array())) }}</td>
						<td>{{ $row->ContainerCount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ContainerType', (isset($fields['ContainerType']['language'])? $fields['ContainerType']['language'] : array())) }}</td>
						<td>{{ $row->ContainerType}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('CustomerName', (isset($fields['CustomerName']['language'])? $fields['CustomerName']['language'] : array())) }}</td>
						<td>{{ $row->CustomerName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('SalesPerson', (isset($fields['SalesPerson']['language'])? $fields['SalesPerson']['language'] : array())) }}</td>
						<td>{{ $row->SalesPerson}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('NVO SL', (isset($fields['NVO_SL']['language'])? $fields['NVO_SL']['language'] : array())) }}</td>
						<td>{{ $row->NVO_SL}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('BookingValidTill', (isset($fields['BookingValidTill']['language'])? $fields['BookingValidTill']['language'] : array())) }}</td>
						<td>{{ $row->BookingValidTill}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('EmptyPickedupDate', (isset($fields['EmptyPickedupDate']['language'])? $fields['EmptyPickedupDate']['language'] : array())) }}</td>
						<td>{{ $row->EmptyPickedupDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('SI CutOffDate', (isset($fields['SI_CutOffDate']['language'])? $fields['SI_CutOffDate']['language'] : array())) }}</td>
						<td>{{ $row->SI_CutOffDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Doc CutOffDate', (isset($fields['Doc_CutOffDate']['language'])? $fields['Doc_CutOffDate']['language'] : array())) }}</td>
						<td>{{ $row->Doc_CutOffDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('GateOpenDate', (isset($fields['GateOpenDate']['language'])? $fields['GateOpenDate']['language'] : array())) }}</td>
						<td>{{ $row->GateOpenDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('GateClosingDate', (isset($fields['GateClosingDate']['language'])? $fields['GateClosingDate']['language'] : array())) }}</td>
						<td>{{ $row->GateClosingDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('GateInDate', (isset($fields['GateInDate']['language'])? $fields['GateInDate']['language'] : array())) }}</td>
						<td>{{ $row->GateInDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Remarks', (isset($fields['Remarks']['language'])? $fields['Remarks']['language'] : array())) }}</td>
						<td>{{ $row->Remarks}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Department', (isset($fields['Department']['language'])? $fields['Department']['language'] : array())) }}</td>
						<td>{{ $row->Department}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('InvoiceReceivedDate', (isset($fields['InvoiceReceivedDate']['language'])? $fields['InvoiceReceivedDate']['language'] : array())) }}</td>
						<td>{{ $row->InvoiceReceivedDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('InvoiceSentDate', (isset($fields['InvoiceSentDate']['language'])? $fields['InvoiceSentDate']['language'] : array())) }}</td>
						<td>{{ $row->InvoiceSentDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('InvoiceAging', (isset($fields['InvoiceAging']['language'])? $fields['InvoiceAging']['language'] : array())) }}</td>
						<td>{{ $row->InvoiceAging}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('PaymentDate', (isset($fields['PaymentDate']['language'])? $fields['PaymentDate']['language'] : array())) }}</td>
						<td>{{ $row->PaymentDate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('BLstatus', (isset($fields['BLstatus']['language'])? $fields['BLstatus']['language'] : array())) }}</td>
						<td>{{ $row->BLstatus}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('BLSentdate', (isset($fields['BLSentdate']['language'])? $fields['BLSentdate']['language'] : array())) }}</td>
						<td>{{ $row->BLSentdate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('BLaging', (isset($fields['BLaging']['language'])? $fields['BLaging']['language'] : array())) }}</td>
						<td>{{ $row->BLaging}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('DraftStatus', (isset($fields['DraftStatus']['language'])? $fields['DraftStatus']['language'] : array())) }}</td>
						<td>{{ $row->DraftStatus}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ContainerStatus', (isset($fields['ContainerStatus']['language'])? $fields['ContainerStatus']['language'] : array())) }}</td>
						<td>{{ $row->ContainerStatus}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('RatesValidTill', (isset($fields['RatesValidTill']['language'])? $fields['RatesValidTill']['language'] : array())) }}</td>
						<td>{{ $row->RatesValidTill}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Stage', (isset($fields['stage']['language'])? $fields['stage']['language'] : array())) }}</td>
						<td>{{ $row->stage}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Commodity', (isset($fields['commodity']['language'])? $fields['commodity']['language'] : array())) }}</td>
						<td>{{ $row->commodity}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Customer Email', (isset($fields['customer_email']['language'])? $fields['customer_email']['language'] : array())) }}</td>
						<td>{{ $row->customer_email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Customer Address', (isset($fields['customer_address']['language'])? $fields['customer_address']['language'] : array())) }}</td>
						<td>{{ $row->customer_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('TypeOfOnboarding', (isset($fields['TypeOfOnboarding']['language'])? $fields['TypeOfOnboarding']['language'] : array())) }}</td>
						<td>{{ $row->TypeOfOnboarding}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('MobileNumber', (isset($fields['MobileNumber']['language'])? $fields['MobileNumber']['language'] : array())) }}</td>
						<td>{{ $row->MobileNumber}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ShippingLineName', (isset($fields['ShippingLineName']['language'])? $fields['ShippingLineName']['language'] : array())) }}</td>
						<td>{{ $row->ShippingLineName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('BuyRate', (isset($fields['BuyRate']['language'])? $fields['BuyRate']['language'] : array())) }}</td>
						<td>{{ $row->BuyRate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('SellRate', (isset($fields['SellRate']['language'])? $fields['SellRate']['language'] : array())) }}</td>
						<td>{{ $row->SellRate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Comments', (isset($fields['Comments']['language'])? $fields['Comments']['language'] : array())) }}</td>
						<td>{{ $row->Comments}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Modified At', (isset($fields['modified_at']['language'])? $fields['modified_at']['language'] : array())) }}</td>
						<td>{{ $row->modified_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created By', (isset($fields['created_by']['language'])? $fields['created_by']['language'] : array())) }}</td>
						<td>{{ $row->created_by}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('HedgeID', (isset($fields['HedgeID']['language'])? $fields['HedgeID']['language'] : array())) }}</td>
						<td>{{ $row->HedgeID}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
