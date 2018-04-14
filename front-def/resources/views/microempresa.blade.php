@extends('layouts.master-sidebarless')

@section('style')
{{ Html::style('css/microempresa.css') }}
@section('style')

@section('content')

<h1 class="titulo">Microempresas</h1>

<div class="def">
	<h2 class="subtitulo">¿Qué es una Microempresa?</h2>
	<br />
	<p>Una microempresa básicamente es de tamaño pequeño, las cuales no solo están compuestas por pocos empleados, sino también no demandan una gran inversión para funcionar y ocupan un lugar pequeño en el mercado. Se clasifican en: </p>

	<br/ >
	
		<ol id="lista3">
		    <li>Según propiedad de capital:</li>
				<ol>
		          <li>Familiares.</li>
		          <li>Asociativas.</li>
				  <li>Unipersonales.</li>
		       </ol>
		    <li>Según actividad:</li>
				<ol>
		          <li>Productivas.</li>
		          <li>Comerciales.</li>
				  <li>Función Única.</li>
				  <li>Dos funciones.</li>
				  <li>Función Múltiple.</li>
		       </ol>
		    <li>Según población:</li>
				<ol>
		          <li>Subsistencia.</li>
		          <li>Acumulación simple.</li>
				  <li>Acumulación ampliada.</li>
		       </ol>
		    <li>Novedad de producción:</li>
		       <ol>
		          <li>Por copia.</li>
		          <li>Innovadora.</li>
		       </ol>
		    </li>
		</ol>
	</p>
</div>





@endsection
