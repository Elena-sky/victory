@extends('auth.header')

@section('auth')


    <section class="login-section">
        <div class="container col-md-12">

            <!-- image and text -->
            @include('auth.logo')
            <!-- End image and text -->


            <!-- register form -->
            <div class="row login-row">
                <div class="col-md-6 offset-md-3 login-row__form">

                    <div class="col-md-10 offset-md-1 text-center">
                        <form class="text-center" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <!-- account detail -->
                            <h3 class="register-title">account details</h3>
                            <div class="col-md-12">
                                <input type="text" class="login-form__input" name="company" placeholder="Company/Name *">
                                <input type="text" class="login-form__input" name="address1" placeholder="Adress 1 *">
                                <input type="text" class="login-form__input" name="address2" placeholder="Adress 2 *">
                                <input type="text" class="login-form__input" name="city" placeholder="City *">
                                <input type="text" class="login-form__input" name="country" placeholder="Country *">
                                <input type="text" class="login-form__input" name="region" placeholder="Region/State *">
                                <input type="text" class="login-form__input" name="zip" placeholder="ZIP *">
                                <input type="text" class="login-form__input" name="phone" placeholder="Phone *">
                            </div>
                            <!-- End account detail -->


                            <!-- user detail -->
                            <h3 class="register-title">user details</h3>

                            <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="login-form__input" name="name" placeholder="Name *" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="login-form__email" name="email" placeholder="Email *" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="login-form__input" name="password" placeholder="Password *" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-12 form-group">
                                <input id="password-confirm" type="password" class="login-form__input" placeholder="Confirm password *"
                                       name="password_confirmation" required>
                            </div>
                            <!-- End user detail -->

                            <!-- additional questions -->
                            <h3 class="register-title">additional questions</h3>
                            <div class="col-md-12">
                                <input type="text" class="login-form__input" name="skype"
                                       placeholder="Skype is required. What's username? *">

                                <input type="text" class="login-form__input" name="traffic"
                                       placeholder="Please state your sources of trafic *">

                                <input type="text" class="login-form__input" name="incentivised"
                                       placeholder="Is your trafic incentivised/non-incenrivised? Both? *">

                                <input type="text" class="login-form__input" name="site"
                                       placeholder="What's your company website URL? *">

                                <textarea rows="4" class="login-form__input login-form__textarea"
                                          placeholder="Please provide us with more information about apps you would like to promote (preveiw UPLs,payouts, GEOs) *"></textarea>
                            </div>

                            <!-- End additional questions -->

                            <label class="cont">
                                <h5>I agree to <span class="reg-agree">Terms & Conditions</span></h5>
                                    <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>

                            </label>

                            <input class="login-form__submit btn" type="submit" value="SIGN UP"/>

                            <h5>Already have an account?</h5>

                        </form>

                        <a href="{{route('login')}}">
                            <button type="button"  class="btn login-form__login">LOGIN</button>
                        </a>
                    </div>
                </div>


            </div>
            <!-- End login form -->

        </div>
    </section>

@endsection

