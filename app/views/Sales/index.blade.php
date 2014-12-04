@section('main')
	<h2>Ventas</h2>
	@if ( !$Sales->count() )
		Aún no se ha almacenado registros
	@else
		<ul>
			@foreach( $Sales as $product )
			 <li>
				<!--<a href="{{ route('products.show', $product->id) }}">-->
				<strong>{{ $product-> cantidad_kg }}</strong></a>
				<p>{{ $product-> precio_producto }}</p>
				<p>{{ $product-> id_user }}</p>
				<p>{{ $product-> id_client }}</p>
				</li>
			@endforeach
		</ul>
	@endif
@stop