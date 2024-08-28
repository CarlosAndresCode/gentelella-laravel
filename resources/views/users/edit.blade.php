<x-layouts.app title-page="Users">
    <div class="">
        <x-partials.page-title title="Edit User"></x-partials.page-title>

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
                        <form method="POST" action="{{ route('users.update', $user) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="full-name">Full Name</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="full-name" required="required" class="form-control" name="name" value="{{ $user->name }}">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="email" id="email" name="email" required="required" class="form-control" value="{{ $user->email }}">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
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
