@extends('layouts.napp')

@section('content')
<?php
    if($accounts->account_type_id == 1){
        $accounts->account_type_id = "C. Ahorro en";
    }else{
        $accounts->account_type_id = "Cta. Cta en";
    }
    if($accounts->account_currency_type_id == 1){
        $accounts->account_currency_type_id = "pesos";
    }else{
        $accounts->account_currency_type_id = "dolares";
    }
?>
<div class="row">
    <div class="row">
        <a href="{{ route('accounts') }}" class="valign-wrapper">
            <i class="material-icons small">chevron_left</i>
            <span>Volver</span>
        </a>
    </div>
    <h3 class="grey-text text-lighten-1">Tus Movimientos</h2>
    <div class="card z-depth-5">
        <div class="card-content red lighten-4">
            <span class="card-title">Saldo: {{$accounts->balance}} </span>
            <div class="row">
                <div class="col right">
                    <a href="#modal1" class="modal-trigger waves-effect waves-light btn red accent-4">Ver detalle cuenta</a>
                </div>
            </div>
            <div class="row">
                <table>
                    <thead>
                        <th>Fecha</th>
                        <th>Movimiento</th>
                        <th>Saldo</th>
                    </thead>
                    <tbody>
                        @Foreach($accounts->user_id as $movement)
                        <tr>
                            <td>{{$movement->created_at}}</td>
                            <td>{{$movement->description}}</td>
                            <td>$ {{$movement->value}}</td>
                        </tr>
                        @endForeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!------- Modal Structure ---------> 
<div class="modal" id="modal1">
    <div class="modal-content">
        <div class="row">
            <h3>Datos Bancarios</h3>
        </div>
        <div class="row">
            Tipo de cuenta: {{$accounts->account_type_id}} {{$accounts->account_currency_type_id}}         
        </div>
        <div class="row">
           CBU: {{$accounts->CBU}}
        </div>
        <div class="row">
            Numero de cuenta: {{$accounts->account_number}}
        </div>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close btn-flat">Cerrar</a>
    </div>
</div>
<!------ End Modal ----->
<script>
    $(document).ready(function(){
        $('.modal').modal();
    });
</script>
@stop