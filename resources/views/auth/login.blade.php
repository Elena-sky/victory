
@extends('auth.header')

@section('auth')

    <section class="login-section">
        <div class="container col-md-12">

            <!-- image and text -->
            @include('auth.logo')
            <!-- End image and text -->


            <!-- login form -->
            <div class="row login-row">
                <div class="col-md-6 offset-md-3 login-row__form">
                    <form  class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="offset-md-1 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="email" type="email" class="login-form__email" name="email" value="{{ old('email') }}" placeholder="Email *" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="offset-md-1 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password" type="password" class="login-form__name" name="password" placeholder="Password *" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input class="offset-md-5 login-form__submit btn" type="submit" value="LOGIN"/>
                    </form>
                    <h3>Don't have an account?</h3>

                    <a href="{{ route('register') }}">
                        <button class="register-form__submit btn">SIGN UP</button>
                    </a>
                </div>
            </div>
            <!-- End login form -->

        </div>
    </section>

@endsection


