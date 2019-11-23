@extends('layouts.admin-app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-4">
			    <div class="nav flex-column nav-pills">
			      <a class="nav-link" href="{{ url('/admin/user-list') }}">User List</a>
			    </div>
    	</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin</div>
            </div>
        </div>
    </div>
</div>

@endsection