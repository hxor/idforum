@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
<!--================================
        START REGISTER AREA
=================================-->
<section class="login_area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="cardify login">
                        <div class="login--header">
                            <h3>Create Your Account</h3>
                            <p>Please fill the following fields with appropriate information to register a IDForum account.
                            </p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            <div class="form-group">
                                <label for="urname">{{ __('Name') }}</label>
                                <input id="urname" name="name" type="text" class="text_field form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter your Name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" class="text_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your email address" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="user_name">{{ __('Username') }}</label>
                                <input name="username" id="user_name" type="text" class="text_field form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" placeholder="Enter your username..." value="{{ old('username') }}" required>
                                @if ($errors->has('username'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input name="password" id="password" type="password" class="text_field form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password..." required>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="con_pass">{{ __('Confirm Password') }}</label>
                                <input name="password_confirmation" id="con_pass" type="password" class="text_field form-control" placeholder="Confirm password" required>
                            </div>

                            <button class="btn btn--md register_btn btn-primary" type="submit">Register Now</button>

                            <div class="login_assist">
                                <p>Already have an account?
                                    <a href="{{ route('login') }}">Login</a>
                                </p>
                            </div>
                        </div>
                        <!-- end .login--form -->
                    </div>
                    <!-- end .cardify -->
                </form>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>
<!--================================
        END REGISTER AREA
=================================-->
@endsection
