@extends('main')

@section('title', '| Contacto')

@section('content')
        <div class="row">
            <div class="col-md-10">
                <h1>Contactenos</h1>
                <hr>
                <form action="{{ url('contact') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="subject">Asunto:</label>
                        <input id="subject" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label name="message">Mensaje:</label>
                        <textarea id="message" name="message" class="form-control">Escriba su mensaje aqui...</textarea>
                    </div>

                    <input type="submit" value="Enviar Mensaje" class="btn btn-success">
                </form>
            </div>
        </div>
@endsection