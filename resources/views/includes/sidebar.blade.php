<div>
    <ul class="side-nav fixed" >
        <div class="row"></div>
        <div class="row">
            <li class="bold"><a href="{{ route('home') }}">Inicio</a></li>
        </div>
        <div class="row">
            <li><a href="{{ route('accounts') }}">Cuentas</a></li>
            <li><a href="{{ route('cards') }}">Tarjetas</a></li>
        </div>
        <div class="row">
            <li><a href="{{ route('payment') }}">Pago de servicios</a></li>
            <li><a href="{{ route('transfers') }}">Transferencias</a></li>
            <li><a href="{{ route('investments') }}">Inversiones</a></li>
            <li><a href="{{ route('loans') }}">Prestamos</a></li>
        </div>
        <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
        <li><a href="{{ url('/logout') }}">Cerrar Sesion</a></li>
    </ul>  
</div>    
<ul class="side-nav" id="nav-mobile">
    <div class="row"></div>
    <div class="row">
        <li class="bold"><a href="index.php">Inicio</a></li>
    </div>
    <div class="row">
        <li><a href="{{ route('accounts') }}">Cuentas</a></li>
        <li><a href="{{ route('cards') }}">Tarjetas</a></li>
    </div>
    <div class="row">
        <li><a href="{{ route('payment') }}">Pago de servicios</a></li>
        <li><a href="{{ route('transfers') }}">Transferencias</a></li>
        <li><a href="{{ route('investments') }}">Inversiones</a></li>
        <li><a href="{{ route('loans') }}">Prestamos</a></li>
    </div>
    <li><a href="{{ route('profile.edit') }}">Perfil</a></li>
    <li><a href="{{ url('/logout') }}">Cerrar Sesion</a></li>
</ul>