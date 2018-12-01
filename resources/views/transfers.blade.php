@extends('layouts.napp')
@section('content')
<div class="row">
      <ul class="tabs">
        <li class="tab col s6 m6 l5"><a class="active" href="#test1">Realizadas</a></li>
        <li class="tab col s6 m6 l5	"><a href="#test2">Pendientes</a></li>
      </ul>
</div>
	<!-- Tab Realizadas -->
<div id="test1" class="col s12 m12 l10">
	<table class="striped">
		<thead>
			<tr>
				<th class="center-align">Fecha</th>
				<th class="center-align">Cta. origen</th>
				<th class="center-align">CBU destino</th>
				<th class="center-align">Importe</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($transfers))
				@Foreach($transfers as $transfer)
					@if($transfer->transfer_status_id == 1)
						<tr>
						<td class="center-align">{{$transfer->created_at}}</td>
						<td class="center-align">{{$transfer->sender_account_id}}</td>
						<td class="center-align">{{$transfer->CBU}}</td>
						<td class="center-align">$ -{{$transfer->value}}</td>
					</tr>
					@endif
				@endforeach
			@else
				<tr>
					<td></td>
					<td>No tiene movimientos</td>
					<td></td>
				</tr>
			@endif
		</tbody>		
	</table>
</div>
	<!-- Tab pendientes ------>
<div class="col s12 m12 l10" id="test2">
	<table class = "striped">
		<thead>
			<tr>
				<th class="center-align">Fecha</th>
				<th class="center-align">Cta. origen</th>
				<th class="center-align">CBU destino</th>
				<th class="center-align">Importe</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($transfers))
				@Foreach($transfers as $transfer)
				@if($transfer->transfer_status_id == 2)
					<tr>
						<td class="center-align">{{$transfer->created_at}}</td>
						<td class="center-align">{{$transfer->sender_account_id}}</td>
						<td class="center-align">{{$transfer->CBU}}</td>
						<td class="center-align">$ -{{$transfer->value}}</td>
					</tr>
				@endif
				@endforeach
			@else
				<tr>
					<td></td>
					<td>No tiene movimientos</td>
					<td></td>
				</tr>
			@endif
		</tbody>
	</table>
</div>
<div class="fixed-action-btn">
  	<a class="btn-floating btn-large waves-effect waves-light red" href="{{ route ('newTransfer')}}"><i class="material-icons">add</i></a>
</div>
<script>
	$(document).ready(function(){
    	$('.tabs').tabs();
  	});
	$(document).ready(function(){
    	$('.fixed-action-btn').floatingActionButton();
  	});
</script>
@stop