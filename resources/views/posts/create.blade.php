@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <h1>@lang('posts.create.title')</h1>

            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('posts.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">@lang('posts.attributes.title')</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="{{ __('posts.title_placeholder') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">@lang('posts.attributes.content')</label>
                            <textarea name="content" type="password" class="form-control" id="content" placeholder="{{ __('posts.content_placeholder') }}" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('posts.create.submit')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
