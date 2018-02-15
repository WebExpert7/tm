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


<div class="login-container">
        
    <div class="login-header login-caret">
        <div class="login-content">
            
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo@2x.png') }}" width="120" alt="" />
            </a>
            
            <p class="description">Create an account, it's free and takes few moments only!</p>
            
            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator">
                <h3>43%</h3>
                <span>Registering in...</span>
            </div>
        </div>
        
    </div>
    
    <div class="login-progressbar">
        <div></div>
    </div>
    <div class="login-form">
        <div class="login-content">
            <form role="form" id="form_login"
                method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-user"></i>
                            </div>
                            
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" autocomplete="off"/ required>
                        </div>
                        @if ($errors->has('name'))
                            <div>
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            </div>                                
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-mail"></i>
                            </div>
                            
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" autocomplete="off"/ required>
                        </div>
                        @if ($errors->has('email'))
                            <div>
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            </div>                                
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-key"></i>
                            </div>
                            <input id="password" type="password" class="form-control"
                                    placeholder="Your Password" name="password" autocomplete="off" required>
                        </div>
                        @if ($errors->has('password'))
                        <div>
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-keyboard"></i>
                            </div>
                            <input id="password-confirm" type="password" class="form-control"
                                    placeholder="Confirm Password" name="password_confirmation" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" >Affiliate link</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-link"></i>
                            </div>
                            <input id="referral_link" name="" type="text" readonly="readonly"  class="form-control"
                                    value="{{url('/register/'.'ref')}}">
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                        <div class="captcha">
                            {!! app('captcha')->display() !!}

                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" id="referral_link_hidden" name="affiliate_id">
                    @if( ! empty($referred_by))
                        <input type="hidden" name="referred_by" value={{ $referred_by }}>
                    @else
                    <input type="hidden" name="referred_by" value="">
                    @endif
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-login">
                            <i class="entypo-right-open-mini"></i>
                            Register
                        </button>
                    </div>
            </form>
            <div class="login-bottom-links">
            
                <a href="{{ route('login') }}" class="link">
                    <i class="entypo-lock"></i>
                    Return to Login Page
                </a>
                
                <br />
                
                <a href="#">Tradeum</a>  - <a href="#">Privacy Policy</a>
                
            </div>
        </div>
    </div>

</div>
@endsection
