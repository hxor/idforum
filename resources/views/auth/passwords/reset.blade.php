@extends('layouts.app')

@section('title')
    Reset Password
@endsection

@section('content')
<!--================================
            START CONTENT AREA
=================================-->
<section class="pass_recover_area section--padding">
    <div class="container">
        <div class="row" style="padding-bottom: 500px;">
            <div class="col-lg-6 offset-lg-3">
                <form method="POST" action="{{ route('password.update') }}">
                    <div class="cardify recover_pass">
                        <div class="login--header">
                            <p>Please enter the email address for your account and create new password.</p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label for="email_ad">{{ __('E-Mail Address') }}</label>
                                <input id="email_ad" name="email" type="text" class="text_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="Enter your email address" value="{{ $email ?? old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" name="password" type="password" class="text_field form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        placeholder="Enter your password..." required>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="con_pass">{{ __('Confirm Password') }}</label>
                                <input id="con_pass" name="password_confirmation" type="password" class="text_field" placeholder="Confirm password" required>
                            </div>

                            <button class="btn btn--md register_btn btn-primary" type="submit">Reset Password
                            </button>
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
        END CONTENT AREA
=================================-->
@endsection
