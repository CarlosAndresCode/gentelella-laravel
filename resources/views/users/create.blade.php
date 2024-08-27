<x-layouts.app title-page="Users">
    <div class="">
        <x-partials.page-title title="Create new User"></x-partials.page-title>

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel shadow-lg">
                    <div class="x_title">
                        <h2>Form</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form method="POST" action="{{ route('users.post') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="full-name">Full Name</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="full-name" required="required" class="form-control" name="name" value="{{ old('name') }}">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="email" name="email" required="required" class="form-control" value="{{ old('email') }}">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="password" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="password" class="form-control" type="password" name="password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="password_confirmation" class="col-form-label col-md-3 col-sm-3 label-align">Password</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="password" class="form-control" type="password" name="password_confirmation">
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <x-partials.button-form url="users.index"></x-partials.button-form>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
