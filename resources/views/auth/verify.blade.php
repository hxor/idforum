@extends('layouts.app')

@section('title')
    Verify User
@endsection

@section('content')
<!--================================
        START CONTENT AREA
=================================-->
<section class="pass_recover_area section--padding">
    <div class="container">
        <div class="row" style="padding-bottom: 500px;">
            <div class="col-lg-12">
                <form action="#">
                    <div class="cardify recover_pass">
                        <div class="login--header">
                            <h3>{{ __('Verify Your Email Address') }}</h3>
                        </div>
                        <!-- end .login_header -->

                        <div class="login--form">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
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
