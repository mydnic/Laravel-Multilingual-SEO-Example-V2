@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <h1>@lang('posts.edit.title')</h1>

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('posts.update', $post) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label for="title">@lang('posts.attributes.title')</label>
                            <input name="title"
                                type="text"
                                class="form-control"
                                id="title"
                                placeholder="{{ __('posts.title_placeholder') }}"
                                value="{{ $post->title }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="content">@lang('posts.attributes.content')</label>
                            <textarea name="content"
                                class="form-control"
                                id="content"
                                placeholder="{{ __('posts.content_placeholder') }}" required>{{ $post->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('posts.edit.submit')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
