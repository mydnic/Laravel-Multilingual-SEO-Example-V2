@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-8">
            <h1>@lang('posts.list.title')</h1>

            @foreach($posts as $post)
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('posts.show', $post->slug) }}">
                            {{ $post->title }}
                        </a>
                    </div>
                    <div class="card-body">
                        {!! $post->content !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
