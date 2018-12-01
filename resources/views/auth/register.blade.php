@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 5%">
        <div class="card col s12 l8 offset-l2 z-depth-5">
            <div class="card-content">
                <div class="card-title center">{{ __('Ingrese sus datos') }}</div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="row">
                                <div class="input-field col s6">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('name') }}" required autofocus>
                                    
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-field col s6">
                                  <input id="last_name" name="last_name" type="text" class="validate">
                                  <label for="last_name">Apellido/s</label>
                                </div>
                            </div>

                            <div class="row">

                             <div class="input-field col s6">
                               <input id="dni" name="dni" zclass="validate" type="text">
                               <label for="dni">Dni</label>
                             </div>

                                <div class="input-field col s6">
                                 <input id="telephone" name="telephone" class="validate" type="text">
                                 <label for="telephone">Teléfono</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                  <input id="birth_date" name="birth_date" type="text" class="datepicker">
                                  <label for="birthdate">Fecha de nacimiento</label>
                                </div>          
                               
                               <div class="input-field col s6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                    <label for="email">E-mail</label>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                               </div>          
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                  <input id="username" name="username" type="text" class="validate">
                                  <label for="username">Nombre de usuario</label>
                                 </div>            
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            
                                    <label for="password">Contraseña</label>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                 </div>          
                               
                                <div class="input-field col s6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  <label for="confirm-password">Confirmar contraseña</label>
                                 </div>          
                            </div>
                    </div>
            
                <div class="card-action right-align">
                    <button type="submit" class="red accent-4 btn waves-effect waves-light right-align">
                                    {{ __('Register') }}
                    </button>
                </div>                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.datepicker').pickadate({
                selectMonths: true,
                selectYears: 15,
                closeOnSelect: true
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#submit').click(function() {
            if(!isNaN($('#dni').val())){
                if ($('#dni').val().length < 6 || $('#dni').val().length > 9) {
                    $('#dni').css('border-color','#FF0000');
                      alert('DNI invalido');
                      return false;
                }
                else if (isNaN($('#telephone').val())) {
                  alert ('Telefono invalido: ingrese solo numeros');
                  return false;
                }
            }
            else {
                alert('Ingrese solo numeros');
                return false;
            }
            });
        })
    </script>
@stop