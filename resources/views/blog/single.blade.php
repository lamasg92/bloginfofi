@extends('main')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('ogImage')
    {{asset('/images/post/' . $post->image)}}
@stop
@section('title', "| $titleTag")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@if(!empty($post->image))
				<img src="{{asset('/images/post/' . $post->image)}}" width=80% height=60% rel="image_src" >
				
			@endif
			<h1>{{ $post->title }}</h1>
			<p>{!! $post->body !!}</p>
			<hr>
			<p>Subido en: {{ $post->category->name }}</p>
			<div>
			<div class="fb-share-button" data-href="{{url('blog/'.$post->slug)}}" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url('blog/'.$post->slug)}}%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span>  {{ $post->comments()->count() }} Commentarios</h3>
			@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{ 'https://www.gravatar.com/avatar/'. md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->name }}</h4>
							<p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
						</div>

					</div>

					<div class="comment-content">
						{{ $comment->comment }}
					</div>

				</div>
			@endforeach
		</div>
	</div>

	<div class="row">
		<div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
			{{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

				<div class="row">
					<div class="col-md-6">
						{{ Form::label('name', "Nombre:") }}
						{{ Form::text('name', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-6">
						{{ Form::label('email', 'Email:') }}
						{{ Form::text('email', null, ['class' => 'form-control']) }}
					</div>

					<div class="col-md-12">
						{{ Form::label('comment', "Comentario:") }}
						{{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

						{{ Form::submit('Agregar Comentario', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
					</div>
				</div>

			{{ Form::close() }}
			
		</div>
	</div>

@endsection
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
