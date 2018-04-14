@extends('layouts.master-sidebarless')

@section('style')
{{ Html::style('css/index.css') }}
@endsection

@section('content')

<br />
<br />

<p class="titulo"> Bienvenido a PymeVal </p>

<br />
<br />


<p class="texto">
 Los servicios que necesitas para satisfaces tus necesidades. <br />
 Microempresas chilenas conectadas. 
</p>


<br />
<br />
<br />

<div class="sesion">
  <input type="button" value="Iniciar Sesión" class="inicio" onclick = "location='/login'"/>
</div>

<div class="sesion">
  <input type="button" value="Registrarse" class="reg" onclick = "location='/register'"/>
</div>

@endsection


