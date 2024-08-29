<form action="{{ route($url) }}" method="POST">
    @csrf
    <div class="input-group">
        <input type="search" class="form-control" placeholder="Search..." name="search">
        <span class="input-group-btn">
            <button type="button" class="btn btn-primary ml-1"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>
