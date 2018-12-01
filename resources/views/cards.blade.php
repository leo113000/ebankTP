@extends('layouts.napp') 
<?php 
	foreach ($card as $key => $value) {
		if($value->card_type_id == 1){
			$value->card_type_id = "Credito";
		}else{
			$value->card_type_id = "Debito";
		}
	}
?>
@section('content')
    <div class="row">
    	<h2 class="grey-text text-lighten-1">Seleccione tarjeta</h2>
    	<div>
			<div>
				<div class="row">				 
	               	<table>
	                    <thead>
	                    	<th>Tipo de tarjeta</th>
	                        <th>Numero</th>
	                        <th>Limite</th>
	                        <th>Fecha de cierre</th>
	                    </thead>
	                    <tbody>
	                        @Foreach($card as $cards)
	                        <tr>
	                        	<td class="valign-wrapper"><img src="/images/amexlogo.png" style="width: 60px;height: 50px">{{$cards->card_type_id}}</td>
	                            <td>{{$cards->number}}</td>
	                            <td>{{$cards->limit}}</td>
	                            <td>21/06/2018</td>
	                        </tr>
	                        @endForeach                       
	                    </tbody>
	                </table>
            	</div>		
			</div>    		
	    </div>
	</div>
@stop