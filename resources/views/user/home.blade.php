@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are User!') }}
                    <h1>Ejemplo</h1>
                    <a id="stackoverflow" href="https://es.stackoverflow.com/">stackoverflow</a>
                    <h1 id="contador"></h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- css -->
@section('css')
@endsection

<!-- js -->
@section('js')
<script>
// una vez que termine de cargar el dom
$(document).ready(function() {
  // selector del link
  var a = $('#stackoverflow');

  // evento click del link
  // también se puede usar a.click(function(e) {})
  a.on('click', function(e) {
    // esto es sólo un ejemplo de cómo pasar parámetros
    var id_row = 1;

    // método ajax para contar el click
    $.ajax({
      url: 'contador.php',
      type: 'POST',
      data: {id: id_row},
      // en caso de éxito de la petición
      success: function(data) {
        console.log(data);
      }
    })
  })
});
</script>
@endsection