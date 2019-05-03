@extends('layouts.app')

@section('content')
	{{-- ROLES TABLE --}}
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto">
			<div class="card">
				{{-- TABLE TITLE --}}
				<div class="card-header">
					<h4 class="card-title pull-left">Roles <small class="sm-text-jb">({{ $roles->count() }})</small></h4>
					<a href="{{ route('roles.create') }}" class="create-btn btn btn-danger btn-just-icon pull-right">
						<i class="fa fa-plus"></i>
					</a>
				</div>
				{{-- TABLE --}}
				<div class="card-body">
					<div class="table-responsive">
						<table class="table" id="clickable-table">
							<thead class="text-primary">
								<tr>
									<th>Name</th>
								</tr>
							</thead>
							<tbody>
								{{-- BRING IN AND LOOP THROUGH CATEGORIES FROM DATABASE --}}
								@foreach($roles as $role)
									<tr data-id="{{$role->id}}" data-location="{{ route('roles.edit', $role) }}">
										<td class="text-capitalize">{{ $role->name }}</td>
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
