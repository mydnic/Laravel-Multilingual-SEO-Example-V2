@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-8">
            <h1>@lang('pages.about.title')</h1>

            <div class="card">
                <div class="card-body">
                    @lang('pages.about.content')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
