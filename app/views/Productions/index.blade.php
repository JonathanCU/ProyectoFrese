@section('main')
	<h2>Producción</h2>
	@if ( !$Productions->count() )
		Aún no se ha almacenado registros
	@else
		<ul>
			@foreach( $Productions as $product )
			 <li>
				<!--<a href="{{ route('products.show', $product->id) }}">-->
				<strong>{{ $product-> cantidad }}</strong></a>
				<p>{{ $product->create_at }}</p>
				</li>
			@endforeach
		</ul>
	@endif
@stop