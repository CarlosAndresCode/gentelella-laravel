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
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger"/>
            </div>
            <div>
                <input type="password"
                       class="form-control"
                       placeholder="Password"
                       required
                       name="password"
                       :value="__('Password')"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger"/>

            </div>
            <div>
                <button type="submit" class="btn btn-default submit">{{ __('Log in') }}</button>
                @if (!Route::has('password.request'))
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
            </div>
        </form>
    </section>
</div>
