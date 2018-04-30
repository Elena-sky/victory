<div class="row login-row">
    <div class="col-md-6 offset-md-3 login-block">
        <img class="login-block__img" src="{{asset('img/logo.svg')}}"  alt="">
        @if(Route::current()->getName() === "login")
            <h1 class="login-block__title">welcome</h1>
        @else
            <h1 class="login-block__title">sign up</h1>
        @endif
    </div>
</div>