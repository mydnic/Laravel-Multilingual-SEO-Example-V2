@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ trans('posts.list.title') }}</h1>

            @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>

                    <div class="panel-body">
                        {!! $post->content !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
