@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="col-sm-8 mx-auto">
            <h1>Login</h1>
            <p>
                Please use the form below to log into the {{ config('app.name', 'Knowledgebase') }}
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Log into your {{ config('app.name', 'Knowledgebase') }}
                                    <i class="fa fa-fw fa-lock"></i>
                                </button>

                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
