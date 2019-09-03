@extends('main')

@section('title', '| Movimiento')
 
@section('content')
  <div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <!-- Default box -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Editar Movimiento</h3>
          
          </div>
          <div class="box-body">
            
            {!! Form::model($invoice,['route'=>['invoices.update',$invoice->id], 'method'=>'PATCH', 'files'=>true])!!}

              {{ Form::label('code', 'Codigo:') }}
              {!! Form::text('code',$invoice->code, ['class'=>'form-control'])!!}
              
              {{ Form::label('date', 'Codigo:') }}
              {!! Form::text('date',$invoice->date, ['class'=>'form-control'])!!}
              <p></p>
              {!! Form::file('image')!!}
        
              
              {{ Form::label('desscription', 'Descripción:') }}
              {!! Form::text('description',$invoice->description, ['class'=>'form-control'])!!}
              
              {{ Form::label('total', 'Monto:') }}
              {!! Form::number('total',$invoice->total, ['class'=>'form-control','step'=>'any'])!!}
            

              
              {!! Form::label('type','Tipo:')!!}
              {!! Form::select('type',['ingreso'=>'ingreso','egreso'=>'egreso'],$invoice->type, ['class'=>'form-control'])!!} 
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