@extends('layouts.master')
@section('title')
    {{ trans('user::auth.register') }} | @parent
@stop

@section('content')
    <section id="main" class="container">
        <header>
            <h2>{{ trans('user::auth.register') }}</h2>
        </header>
        <div class="box">
            @include('flash::message')
            {!! Form::open(['route' => 'register.post']) !!}
            <div class="row uniform 50%">
                <div class="12u">
                    <div class="form-group{{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                        {!! Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => trans('user::auth.email')]) !!}
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <div class="form-group{{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => trans('user::auth.password')]) !!}
                        {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => trans('user::auth.password confirmation')]) !!}
                        {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="row uniform 50%">
                <div class="12u">
                    <input type="submit" class="btn btn-info btn-block" value="{{ trans('user::auth.register me')}}" />
                    <p>
                        <a href="{{ URL::route('login') }}" class="text-center">{{ trans('user::auth.I already have a membership') }}</a>
                    </p>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </section>
@stop
