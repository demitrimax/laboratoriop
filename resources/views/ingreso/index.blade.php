@extends('ingreso.layout')

@section('titulo-pagina','Menu de Ingreso')

@section('content')
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-3">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Datos Generales</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="medico">Médico MVZ</label>
              <select class="form-control" id="medico">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="cliente">Cliente</label>
              <select class="form-control" id="cliente">
                <option>option 1</option>
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div>
          </div>
          <!-- /.box-body -->


        </form>
      </div>
      <!-- /.box -->


    </div>

  </div>
  <!-- /.row -->
</section>
@stop
