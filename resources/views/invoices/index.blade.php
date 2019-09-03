@extends('main')

@section('title', '| Movimientos')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>Listado de Movimientos</h1>
    </div>

    <div class="col-md-3">
      <a href="{{ route('invoices.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Cargar movimiento</a>
    </div>
    <div class="col-md-12">
      <hr>
    </div>
  </div> <!-- end of .row -->

  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
             <th>Fecha</th>
             <th>Codigo</th>
             <th>Descripción</th>
             <th>Tipo</th>
             <th>Total</th>
             <th>Foto</th>
             <th>Opciones</th>    
        </thead>

        <tbody>
          
          @foreach ($invoices as $invoice)
            <tr>
            <td>{{ date('M j, Y', strtotime($invoice->date)) }}</td>
            <td>{{$invoice->code}}</td>
            <td>{{$invoice->description}}</td>
            <td>{{$invoice->type}}</td>
            <td>{{$invoice->total}}</td>

            <td> 
            @if($invoice->extension!=null)
                    <a data-toggle="modal" data-target="#favoritesModalCarruselImage{{$invoice->id}}">
                    <img src="{{asset('images/invoices/'.$invoice->extension)}}" width="40" height="40" >
                    </a> 
                    @include('invoices.imagePopUp')
            @endif
            </td>
            <td>             
                <a href="{{route('invoices.edit',$invoice->id)}}"  >
                        <button type="submit" class="btn btn-warning">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
                        </button>
                </a>
            </td>

            <td></td>
        </tr>
          @endforeach
        </tbody>
      </table>

      <div class="text-center">
      </div>
    </div>
  </div>

@stop


