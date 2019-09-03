@extends('main')

@section('title', '| Cuentas')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>Cuentas Claras</h1>
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
        </thead>

        <tbody>
          
          @foreach ($invoices as $invoice)
            <tr>
            <td>{{ date('d M Y', strtotime($invoice->date)) }}</td>
            <td>{{$invoice->code}}</td>
            <td>{{$invoice->description}}</td>
            <td>{{$invoice->type}}</td>
            <td>{{$invoice->total}}</td>
            <td> 
            @if($invoice->extension!=null)
                    <a data-toggle="modal" data-target="#favoritesModalCarruselImage{{$invoice->id}}">
                    <img src="{{asset('images/invoices/'.$invoice->extension)}}" width="40" height="40" >
                    </a> 
                    @include('blog.imagePopUp')
            @endif
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


