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
                <div class="card-header">
                	<table class="table table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">Teacher Code</th>
					      <th scope="col">Teacher Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>

					  	@foreach($users as $user)
					    <tr>
					      <th scope="row">{{ $user->teacher_code }}</th>
					      <td>{{ $user->name }}</td>
					      <td>{{ $user->email }}</td>
					      <td>{{ $user->status }}</td>
					      <td>
						      	<form class="form-inline" action="{{ route('user.list.update', $user->id) }}" method="post">
	                                @csrf
	                                <input type="hidden" name="status" />
	                                <button type="submit" class="btn btn-success">Active</button>
	                             </form>
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

@endsection