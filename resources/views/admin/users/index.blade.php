@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Users <small class="sm-text-jb">({{ $users->count() }})</small></h4>
					<a href="users/create" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				{{-- USERS TABLE --}}
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="clickable-table">
							<thead class="text-primary">
								<tr>
									<th>Name</th>
									<th class="d-none d-sm-block td-min-height">Email</th>
									<th>Role</th>
									<th class="d-none d-sm-block td-min-height">Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
									<tr data-id="{{$user->id}}" data-location="/admin/users/{{$user->id}}/edit">
										<td class="text-capitalize">{{ $user->name }}</td>
										<td class="d-none d-sm-block td-min-height">{{ $user->email }}</td>
										<td class="text-capitalize ">{{ $user->role->name }}</td>
										<td class="d-none d-sm-block td-min-height">{{ $user->is_active == 1 ? 'Active' : 'Disabled' }}</td>
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
