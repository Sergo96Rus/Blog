@extends('layouts.layout')

@section('content') 
	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="big-blog-item">
						<!--<img src="{{ asset('storage/'. $news->picture) }}" alt="#" class="blog-thumbnail"> -->
                        <br>
                        <br>
                        <br>
                        <br>
						<div class="blog-content text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>{{ $news->heading     }}</h3>
							<p>{{ $news->post }}</p>
						</div>
					</div>
                    @foreach($comments as $key => $comment)
                    <div>
                        <h4 style="color:white;">{{ $comment->login}}</h4>
                        <p>{{ $comment->comment}}</p>
                    </div>
                    <hr>
                    <br>
                    @endforeach
                    
                    <form class="needs-validation" novalidate="" method="POST" action="{{ route('news.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="description"><span class="text-muted">Комментарий</span></label>
                        <textarea name="comments" type="text" class="form-control" id="comments" placeholder="Коментарий">{{ old('comment') }}</textarea>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Добавить комментарий</button>
                </form>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->


@endsection
