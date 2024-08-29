<div id="register" class="animate form registration_form">
    <section class="login_content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <div>
                <input type="text"
                       class="form-control"
                       placeholder="Name"
                       required
                       name="name"
                />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
            </div>
            <div>
                <input type="email"
                       class="form-control"
                       placeholder="Email"
                       required
                       name="email"
                />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
            </div>

            <div>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    required
                    name="password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
            </div>

            <div>
                <input
                    type="password"
                    class="form-control"
                    placeholder="Confirm password"
                    name="password_confirmation"
                    required autocomplete="new-password"
                />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
            </div>

            <div>
                <button type="submit" class="btn btn-default submit">Submit</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Already a member ?
                    <a href="#signin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
            </div>
        </form>
    </section>
</div>
