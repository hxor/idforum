@extends('layouts.app')

@section('title')
    Reset  Password
@endsection

@section('content')
<!--================================
        START CONTENT AREA
=================================-->
<section class="pass_recover_area section--padding">
    <div class="container">
        <div class="row" style="padding-bottom: 200px;">
            <div class="col-lg-6 offset-lg-3">
                <form method="POST" action="{{ route('password.email') }}">
                    <div class="cardify recover_pass">
                        <div class="login--header">
                            <p>Please enter the email address for your account. A verification code will be sent to you.
                                Once you have received the verification code, you will be able to choose a new password
                                for your account.</p>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @csrf

                            <div class="form-group">
                                <label for="email_ad">{{ __('E-Mail Address') }}</label>
                                <input id="email_ad" name="email" type="text" class="text_field form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        placeholder="Enter your email address" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <button class="btn btn--md register_btn btn-primary" type="submit">Send Recovery Email
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
