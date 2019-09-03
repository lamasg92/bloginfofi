@extends('main')

@section('title', '| Movimiento')
 
@section('content')
  <div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Nuevo Movimiento</h3>
          
          </div>
          <div class="box-body">
            
          {!! Form::open(['route'=>'invoices.store', 'method'=>'POST', 'files'=>true])!!}
              {{ Form::label('code', 'Codigo:') }}
              {!! Form::text('code',null, ['class'=>'form-control'])!!}
              
              <label for="date">Fecha:</label>
              <input class="form-control" name="date" type="date" id="date">
              <p></p>
              {!! Form::file('image')!!}
        
              
              {{ Form::label('desscription', 'Descripción:') }}
              {!! Form::text('description',null, ['class'=>'form-control'])!!}
              
              {{ Form::label('total', 'Monto:') }}
              {!! Form::number('total',null, ['class'=>'form-control','step'=>'any'])!!}
            

              
              {!! Form::label('type','Tipo:')!!}
              {!! Form::select('type', ['ingreso'=>'ingreso','egreso'=>'egreso'],null,['class'=>'form-control'])!!} 
              <p></p>
              {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    
              {!! Form::close() !!}

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>
    </div>
  </div>
@endsection

