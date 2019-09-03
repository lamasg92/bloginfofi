@extends('main')

@section('title', '| Noticias')

@section('content')

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2>{{ $post->title }}</h2>
			<h5>Publicado: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
			<div class="row">
                <div class="col-md-3 text-center">	
                   @if(!empty($post->image))
                      <img src="{{asset('/images/post/' . $post->image)}}" width=100% height=100% />
                    @endif
                 </div>
                  
                 <div class="col-md-8">
					<p>{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? '...' : "" }}</p>

					<a href="{{ url('blog/'.$post->slug) }}" >Leer más...</a>
            	 </div>
           </div>
			<hr>
		</div>
	</div>              
     
	@endforeach

	<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
		</div>
	</div>


@endsection
