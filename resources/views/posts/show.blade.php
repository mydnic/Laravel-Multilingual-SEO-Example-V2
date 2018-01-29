@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {!! $post->content !!}
                </div>
                @auth
                    <div class="card-footer text-right">
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-info btn-sm">
                            <i class="zmdi zmdi-edit"></i>
                            @lang('posts.edit.title')
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection
