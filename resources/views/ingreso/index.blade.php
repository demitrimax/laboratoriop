@extends('ingreso.layout')

@section('titulo-pagina','Menu de Ingreso')
@section('ingreso','class=active')
@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Datos Generales</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <li class="list-group-item">
            <div class="form-group">
              <label for="medico">Médico MVZ</label>
              <select class="form-control" id="medico">
                @foreach( $medicos as $medico )
                <option value="{{ $medico->id }}">{{$medico->nombre}}</option>
                @endforeach
              </select>
              <label for="DatosMedico">Correo Electrónico y Teléfono </label>
              <input type="text" class="form-control" id="DatosMedico" disabled>
            </div>
          </li>
            <li class="list-group-item">
              <div class="form-group">
                <label for="cliente">Cliente</label>
                <select class="form-control" id="cliente">
                  @foreach( $clientes as $cliente )
                  <option>{{$cliente->nombre}}</option>
                  @endforeach
                </select>
                <label for="DatosCliente">Correo Electrónico y Teléfono </label>
                <input type="text" class="form-control" id="DatosCliente" disabled>
                <div class="form-group">
                  <label for="direccionRancho" class="col-sm-1 control-label">Rancho:</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" id="direccionRancho" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="municipio" class="col-sm-1 control-label">Municipio:</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" id="municipio" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label for="estado" class="col-sm-1 control-label">Estado:</label>
                  <div class="col-sm-11">
                    <input type="text" class="form-control" id="estado" disabled>
                  </div>
                </div>

            </div>
          </li>
          <!-- /.box-body -->


        </form>
      </div>
      <!-- /.box -->


    </div>

  </div>
  <!-- /.row -->
</section>
@stop
@section('scripts')
  <script>
    $(document).ready(function(){
      var idmed = $('medico').value
      var ruta = "/ingreso/medicosMVZ/"+idmed
      console.log(ruta);
    });
  </script>
@endsection
