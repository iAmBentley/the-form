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
									<th class="text-right">Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
									<tr>
										<td class="text-capitalize">{{ $user->name }}</td>
										<td class="d-none d-sm-block td-min-height">{{ $user->email }}</td>
										<td class="text-capitalize ">{{ $user->role->name }}</td>
										<td class="text-right">
											<form method="POST" action="/admin/users/{{ $user->id }}">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}
												<input type="hidden" name="id" value="{{ $user->id }}">
												{{-- EDIT BUTTON --}}
												<a href="/admin/users/{{ $user->id }}/edit" class="btn btn-info btn-icon btn-sm " data-toggle="tooltip" title="Edit User">
													<i class="fa fa-pencil"></i>
												</a>
												{{-- DELETE BUTTON (TRIGGERS UPDATE() ON ORDERS) --}}
												<button value="{{ $user->id }}" class="delete-user btn-danger btn btn-icon btn-sm" data-toggle="tooltip" title="Delete User">
													<i class="fa fa-close"></i>
												</button>
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
