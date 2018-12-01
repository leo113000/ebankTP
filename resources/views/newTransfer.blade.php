@extends('layouts.napp')
@section('content')
<div class="row">
	<div class="col">
		<h3 class="grey-text">Nueva Transferencia</h3>
	</div>
	<form method="POST" action="{{route ('sendTransfer')}}">
		@csrf
		<div class="input-field">
			<select name="sender_account_number">
				<option value="" disabled selected>Seleccione su cuenta</option>
				@Foreach($accounts as $account)
				<option value="{{$account->account_number}}">Cuenta {{$account->account_number}} ${{$account->balance}}</option>
				@endforeach
			</select>
		</div>
		<div class="input-field">
			<input type="number" name="ammount" id="ammount" class="validate">
			<label for="ammount">Monto</label>
		</div>
		<div class="input-field">
			<input type="number" name="cbudestino" id="cbu">
			<label for="cbu">CBU destino</label>
		</div>
		<div>	
			<input type="submit" class="waves-effect waves-light btn-large red accent-4" name="">
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
    	$('select').material_select();
  	});
</script>
@stop
