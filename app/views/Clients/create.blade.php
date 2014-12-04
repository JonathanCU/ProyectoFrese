@section('main')
{{Form::model(new Client, ['route'=>['Clients.store']])}}
@include('Clients/Partials/_record',['submit_text'=>'Registrar Clientes'])
{{Form::close()}}
@stop