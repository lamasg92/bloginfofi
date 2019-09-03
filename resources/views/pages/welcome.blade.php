@extends('main')

@section('title', '| Principal')

@section('content')

<div class="row">
      <div class="col-md-8">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel"  >
    <!-- Indicators -->
    <ol class="carousel-indicators">
       <input type="hidden" value="{{$cant=0}}"> 
        @foreach($posts as $post) 
          @if($cant==0)
          <li data-target="#myCarousel" data-slide-to="{{$cant}}" class="active"></li>
          @else
          <li data-target="#myCarousel" data-slide-to="{{$cant=$cant+1}}"></li>
          @endif
         @endforeach
    </ol>
    <input type="hidden" value="{{$p=0}}">
      <div class="carousel-inner">

                @foreach($posts as $post) 
                      @if ($p==0)
                       <div class="item active text-center">
                        <input type="hidden" value="{{$p=1}}">
                      @else
                        <div class="item text-center">
                      @endif
                        
                      @if(!empty($post->image))
          <img src="{{asset('/images/post/' . $post->image)}}" width=100% height=100% />
                      <div class="carousel-caption">
                        
                        <a href="{{ url('blog/'.$post->slug) }}"><h2><b style="color:#FFFFFF";>{{ $post->title }}</b></h2></a>
                      </div>
                      @endif
                </div>
                @endforeach
    </div>
                <!-- Controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
              </a>
    </div>
        
    </div>

    <div class="col-md-3 col-md-offset-1">
                <aside id="secondary" class="widget-area" role="complementary">
    <section id="fbw_id-2" class="widget widget_fbw_id"><h2 class="widget-title">Fuerza Integral Facebook</h2>
    <div class="fb-page" data-href="https://www.facebook.com/FuerzaIntegral/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/FuerzaIntegral/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/FuerzaIntegral/">FuerzaIntegral</a></blockquote></div></section>        <!-- A WordPress plugin developed by Milap Patel -->
    </aside>
  </div>
</div>
<!--=============seccion noticias varias===============-->
<hr>
<div class="row">
<div class="col-md-10 col-md-offset-2">
  <h2>Noticias</h2>
@foreach ($noticias as $post)
  <div class="row">
    <div class="col-md-9 col-sm-6 col-xs-10 col-md-offset-1">
      
      <div class="row">
          <div class="col-md-3 text-center">  
             @if(!empty($post->image))
                <img src="{{asset('/images/post/' . $post->image)}}" width=100% height=100% />
              @endif
           </div>
                 
          <div class="col-md-9 col-sm-6 col-xs-10">
            <h3>{{ $post->title }}</h3> 
              <p>{{ substr(strip_tags($post->body), 0, 150) }}{{ strlen(strip_tags($post->body)) > 150 ? '...' : "" }}</p>

              <a href="{{ url('blog/'.$post->slug) }}" >Leer más...</a>
          </div>
      </div>
      <hr>
    </div>
  </div>              
     
  @endforeach
</div>
</div>
@stop
@section('scripts')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection