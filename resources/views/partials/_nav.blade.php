<!-- Default Bootstrap Navbar -->
        <div class="col-md-offset-1">
          <a href="{{ url('/') }}">
            <div class="site-branding">
                 <img src="{{asset('/imgpagina/cabecera.png')}}" width=20% height=30%> 
            </div>
          </a>
        </div>


<nav class="navbar" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ url('/') }}">Fuerza Integral</a>
  </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
  <li class="active"><a href="{{ url('/') }}">Inicio</a></li>
  <li class="active"><a href="{{ route('blog.trabajo') }}">Nuestro Trabajo</a></li>
  <li class="active"><a href="{{ route('blog.proyecto') }}">Proyectos</a></li>
  <li class="active"><a href="{{ route('blog.propuesta') }}">Propuestas</a></li>
  <li class="active"><a href="{{ route('blog.index') }}">Noticias</a></li>
  <!--li class="active"><a href="{{ url('/bills') }}">Cuentas</a></li-->
  <li class="active"><a href="{{ url('/about') }}">¿Quienes somos?</a></li>
  <!--li class="active"><a href="{{ url('/contact') }}">Contacto</a></li-->
    </ul>

    <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        
        <li class="dropdown">
          <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hola {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posteos</a></li>
            <!--li><a href="{{ route('invoices.index') }}">Facturas</a></li-->
            <li><a href="{{ route('categories.index') }}">Categorias</a></li>
            <li><a href="{{ route('tags.index') }}">Etiquetas</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{ route('logout') }}">Salir</a></li>
          </ul>
        </li>
        
        @else
        
          <!--a href="{{ route('login') }}" class="btn btn-default">Iniciar Sección</a-->
        
        @endif 

      </ul>
  </div>
</nav>