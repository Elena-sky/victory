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

                 <!-- account detail -->
                    <h3>account details</h3>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="company" placeholder="Company/Name *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="address1" placeholder="Adress 1 *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="address2" placeholder="Adress 2 *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="city" placeholder="City *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="country" placeholder="Country *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="region" placeholder="Region/State *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="zip" placeholder="ZIP *">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="login-form__input" name="phone" placeholder="Phone *">
                        </div>



                    <!-- End account detail -->


            <!-- user detail -->

                        <h3>user details</h3>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input type="text" class="login-form__input" name="name" placeholder="Name *" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="email" type="email" class="login-form__email" name="email" placeholder="Email *" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password" type="password" class="login-form__input" name="password" placeholder="Password *" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="login-form__input" placeholder="Confirm password *"
                                       name="password_confirmation" required>
                            </div>
                        </div>
            <!-- End user detail -->



            <!-- additional questions -->

                        <h3>additional questions</h3>

                            <div class="col-md-6">
                                <input type="text" class="login-form__input" name="skype"
                                       placeholder="Skype is required. What's username? *">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="login-form__input" name="traffic"
                                       placeholder="Please state your sources of trafic *">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="login-form__input" name="incentivised"
                                       placeholder="Is your trafic incentivised/non-incenrivised? Both? *">
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="login-form__input" name="site"
                                       placeholder="What's your company website URL? *">
                            </div>

                            <div class="col-md-6">
                                <textarea rows="4" class="login-form__input login-form__textarea"
                                          placeholder="Please provide us with more information about apps you would
                                          like to promote (preveiw UPLs,payouts, GEOs) *"></textarea>

                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree"> I agree to Terms & Conditions
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- End additional questions -->

                            <input class="offset-md-5 login-form__submit btn" type="submit" value="SIGN UP"/>
                    </form>

                    <div class="col-md-6 col-md-offset-4">
                        <span>Already have an account?</span>
                    </div>

                    <a href="{{route('login')}}">
                        <button type="button"  class="btn login-form__login">LOGIN</button>
                    </a>
                </div>


            </div>
            <!-- End login form -->

        </div>
    </section>

@endsection

