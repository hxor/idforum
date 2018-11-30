@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="login_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="POST" action="{{ route('login') }}">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <p>You can sign in with your username</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                @csrf
                                <div class="form-group">
                                    <label for="user_name">E-Mail/Username</label>
                                    <input name="email" id="user_name" type="text" class="text_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your username..." value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input name="password" id="pass" type="password" class="text_field form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password..." required>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input name="remember" type="checkbox" id="ch2" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn--md btn-primary" type="submit">Login Now</button>

                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <a href="{{ route('password.request') }}">username</a> or
                                        <a href="{{ route('password.request') }}">password</a>?</p>
                                    <p class="signup">Don't have an
                                        <a href="{{ route('register') }}">account</a>?</p>
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
            END LOGIN AREA
    =================================-->
@endsection
