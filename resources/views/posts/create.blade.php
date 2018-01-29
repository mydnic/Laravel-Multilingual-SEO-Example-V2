@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <h1>{{ trans('posts.create.title') }}</h1>

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('post.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">{{ trans('posts.attributes.title') }}</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="{{ trans('posts.create.title_placeholder') }}">
                        </div>
                        <div class="form-group">
                            <label for="content">{{ trans('posts.attributes.content') }}</label>
                            <textarea name="content" type="password" class="form-control" id="content" placeholder="{{ trans('posts.create.content_placeholder') }}"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ trans('posts.create.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
