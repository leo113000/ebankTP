@extends('layouts.napp') 

@section('content')
<div>
    <h3 class="light">Perfil</h3>
    <div class="row">
        <form method = "POST" action= {{route('profile.update')}}>
            @csrf
            <div class="row">
                <h4 class="grey-text">Datos personales</h4>
                <div class="input-field col l4 m6 s12">
                    <input id="name" type="text" class="validate" disabled="" value={{$name}}>
                    <label for="name">Nombre/s</label>
                </div>
                <div class="input-field col l4 m6 s12">
                    <input id="last_name" type="text" class="validate" disabled="" value={{$last_name}}>
                    <label for="last_name">Apellido/s</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l4 m6 s12">
                    <input maxlength="8" minlength="7" id="dni" pattern="[0-9]" type="text" class="validate" disabled="" value={{$dni}}>
                    <label for="dni">Dni</label>
                </div>
            </div>
            <div class="row">
                <h4 class="grey-text">Datos de contacto</h4>
                <div class="input-field col l4 m6 s12">
                    <input type="email" name="email" id="email" class="validate" value={{$email}}>
                    <label for="email">Email</label>
                </div>
                <div class="input-field col l4 m6 s12">
                    <input type="number" name="telephone" id="phone" class="validate" value={{$telephone}}>
                    <label>Telefono de contacto</label>
                </div>
            </div>
            <div class="row">
                <h4 class="grey-text">Datos HomeBanking</h4>
                <div class="input-field col l4 m6 s12">
                    <input type="text" name="username" id="username" class="validate" value={{$username}}>
                    <label for="username">Usuario</label>
                </div>
                <!-- no
                <div class="input-field col l4 m6 s12">
                    <input maxlength="4" minlength="4" id="pass" type="password" class="validate">
                    <label for="pass">Contraseña</label>
                </div> -->
            </div>
            <button class="btn waves-effect waves-light red accent-4" type="submit" id="submit" name="action">Aceptar</button>
        </form>
    </div>
</div>
@stop