<x-layouts.app title-page="Users">
    <div class="">
        <x-partials.page-title title="Users"></x-partials.page-title>

        @if (session('status-user') === 'user-created' || session('status-user') === 'user-updated')
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <strong>{{ __('Saved...') }}</strong>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel shadow-lg">
                    <div class="x_title">
                        <h2>List</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                                <a href="{{ route('users.create') }}" class=""><i class="fa fa-user-plus"></i></a>
                            </li>
                            <li>
                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row col-md-6">
                        <x-partials.search url="users.search"></x-partials.search>
                    </div>
                    <div class="x_content">
                        <table id="datatable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}"
                                               class="btn btn-primary btn-sm"
                                                ><i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
