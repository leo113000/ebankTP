@extends('layouts.napp') 

@section('content')
<?php
	foreach ($accounts as $account => $value) {
		if($value->account_type_id == 1){
			$value->account_type_id = "C. Ahorro en";
		}else{
			$value->account_type_id = "Cta. Cta en";
		}
		if($value->account_currency_type_id == 1){
			$value->account_currency_type_id = "pesos";
		}else{
			$value->account_currency_type_id = "dolares";
		}
	}
?>
    <div class="row">
    	<h2 class="grey-text text-lighten-1">Seleccione cuenta</h2>
    	<div>
			<div class="">
				<div class="row">
					<table>
	                    <thead>
	                        <th>Tipo</th>
	                        <th>Numero</th>
	                        <th>CBU</th>
	                        <th>Balance</th>
	                        <th>Ver detalle</th>
	                    </thead>
	                    <tbody>
	                        @Foreach($accounts as $account)
	                        <tr>
	                            <td>{{$account->account_type_id}} {{$account->account_currency_type_id}}</td>
	                            <td>{{$account->account_number}}</td>
	                            <td>{{$account->CBU}}</td>
	                            <td>${{$account->balance}}</td>
	                            <td><a href="{{route ('account',['number'=>$account->account_number])}}" class="waves-effect waves-light btn-large red accent-4"><i class="material-icons">assignment</i> </a></td>
	                        </tr>
	                        @endForeach                        
	                    </tbody>
	                </table>				
				</div>
			</div>    		
	    </div>
	</div>
@stop