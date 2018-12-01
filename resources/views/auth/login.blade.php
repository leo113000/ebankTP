@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" style="margin-top: 5%">
        <div class="card col s12 l8 offset-l2  z-depth-5">
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="card-content">
                   
                    <span class="card-title center">Ingrese sus datos</span>
                    
                    <div class="row">
                        <div class="input-field col s12">
                            <label for="dni ">DNI</label>
                            <input style=""type="text" name="dni" pattern="[0-9]{}" class=" validate" id="dni">
                            <span class="helper-text" data-error="wrong" data-success="right"></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" pattern="[0-9]{}" maxlength="4" class="validate" id="pass">
                        </div>
                    </div>
                </div>
                <div class="card-action row">
                    <div class="col l5 m4 s4">
                        <a href="{{ route('register') }}" class="red accent-4 btn waves-effect waves-light left-align">¿No tienes usuario?</a>
                    </div>
                    <div class="col l3 offset-l1">
                        <input type="reset" id="reset" class="btn-flat waves-effect grey-text right-align">
                    </div>
                    <div class="col l2">
                        <button type="submit" class="red accent-4 btn waves-effect waves-light right-align" id="submit">
                                {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#submit').click(function() {
        if(!isNaN($('#dni').val())){
            if ($('#dni').val().length < 7 || $('#dni').val().length > 8) {
                $('#dni').css('border-color','#FF0000');
                Materialize.toast('DNI invalido',3000,'red');
                return false;
            }
        }
        else {
            Materialize.toast('Ingrese solo numeros',3000,'red');
            //alert('Ingrese solo numeros');
            return false;
        }
        });
    });
</script>
@stop