@extends('dashboard.layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-1">
                    <a class="btn btn-primary" href="{{ route('dashboard.posts.index') }}"><i
                                class="fa fa-arrow-circle-left"></i></a>
                </div>
                <div class="col-xs-9">
                    <h1>{{ trans('post.heading.create') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="card">
                <div class="card-block">

                    <form method="post" action="{{ route('dashboard.posts.store') }}">

                        {{ csrf_field() }}
                        <fieldset class="form-group @if($errors->has('title')) has-warning @endif">
                            <label for="title">{{ trans('posts.title.label') }}</label>
                            <input type="text" class="form-control form-control-warning" name="title" value="{{ old('title') }}">
                            @if($errors->has('title'))
                                <div class="c-input__error">
                                    <ul class="list-unstyled">
                                        @foreach($errors->get('title') as $msg)
                                            <li class="text-warning">{{ $msg }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </fieldset>

                        <div class="text-xs-right">
                            <button class="btn btn-success">{{ trans('gui.submit') }}</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection