@extends('layouts.app')

@section('title','Alcaldias | Voto Crítico')

@section('lessStyles')

@endsection

@section('content')

<main>
	<section class="container">
		<div>
			<div style="background: white;">
				@foreach($candidatos as $candidato)
					id=>{{ $candidato->id }}<br>
					@foreach(json_decode($candidato) as $candy=>$val)
						{{ $candy }}=>{{ $val }}<br> 
					@endforeach
					<hr>
				@endforeach
			</div>
			<div>
				@foreach($candidatos as $candidato)
					<!--<img src="{{ $candidato->foto }}"> <br>
					<p><span>{{ $candidato->nombre }}</span><br>
					<span>{{ $candidato->email }}</span></p-->
				@endforeach
			</div>
			<div>
				@foreach($candidatos as $candidato)
					<!--{{ $candidato->nombre }}
					{{ $candidato->tipo_propuesta }}<br>
					{{ $candidato->propuesta }}<br-->
				@endforeach
			</div>
		</div>
	</section>
</main>

@endsection

@section('styles')

@endsection