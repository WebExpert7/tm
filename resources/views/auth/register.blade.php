@extends('layouts.app')

@section('content')
{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  --}}


<div class="single-widget-container">
    <section class="widget login-widget">
        <header class="text-align-center">
            <h4>Register to your account</h4>
        </header>
        <div class="body">
            <form class="no-margin" method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                <fieldset>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="email" >Name</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input id="name" type="name" class="form-control input-lg input-transparent"
                                   placeholder="Your Name" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                        <div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" >Email</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user"></i>
                            </span>
                            <input id="email" type="email" class="form-control input-lg input-transparent"
                                   placeholder="Your Email" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="password" >Password</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input id="password" type="password" class="form-control input-lg input-transparent" name="password"
                                   placeholder="Your Password" required>
                        </div>
                        <div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" >Confirm Password</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                            </span>
                            <input id="password-confirm" type="password" class="form-control input-lg input-transparent" name="password_confirmation"
                                   placeholder="Confirm Password" required>
                        </div>
                    </div>
                </fieldset>
                <div class="form-actions">
                    <button type="submit" class="btn btn-block btn-lg btn-info">
                        {{--  <span class="small-circle"><i class="fa fa-caret-right"></i></span>  --}}
                        <small>Register</small>
                    </button>
                </br>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
