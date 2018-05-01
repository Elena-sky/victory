
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

                    <div class="col-md-10 offset-md-1 text-center">

                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="login-form__email" name="email" value="{{ old('email') }}" placeholder="Email *" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="login-form__name" name="password" placeholder="Password *" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <input class="login-form__submit btn" type="submit" value="LOGIN"/>
                        </form>

                        <h5>Don't have an account?</h5>

                        <a href="{{ route('register') }}">
                            <button class=" login-form__login btn">SIGN UP</button>
                        </a>
                    </div>

                </div>
            </div>
            <!-- End login form -->

        </div>
    </section>

@endsection


