<div class="animate form login_form">
    <section class="login_content">
        {{--                    <x-auth-session-status class="mb-4" :status="session('status')" />--}}
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login Form</h1>
            <div>
                <input type="email"
                       class="form-control"
                       placeholder="Email"
                       required
                       name="email"
                       :value="old('email')"/>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            <div>
                <input type="password"
                       class="form-control"
                       placeholder="Password"
                       required
                       name="password"
                       :value="__('Password')"/>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
            <div>
                <button type="submit" class="btn btn-default submit">{{ __('Log in') }}</button>
                @if (Route::has('password.request'))
                    <a class="reset_pass"
                       href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>

                <div>
                    <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and
                        Terms</p>
                </div>
            </div>
        </form>
    </section>
</div>
