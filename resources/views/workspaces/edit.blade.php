@extends('layouts.app')

@section('content')
<div class="container">
	{{ Form::model($workspace, array('route' => array('workspaces.update', $workspace->id), 'method' => 'PUT')) }}
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Edit Workspaces: {{ $workspace->name }}</div>

				<div class="card-body">
					<div class="form-group">
						{{ Form::label('name', 'Name') }}
						{{ Form::text('name', $workspace->name, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('status', 'Status') }}
						{{ Form::select('status', ['0' => 'InActive', '1' => 'Active'], $workspace->status, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Add User</div>

				<div class="card-body">

					<div class="form-group">
						{{ Form::label('role_id', 'Role') }}
						{{ Form::select('role_id', $roles, null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('user_id', 'User') }}
						{{ Form::select('user_id', $users, null, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Add Source</div>

				<div class="card-body">

					@foreach ($sources as $source)
					<div class="form-check">
						@if (in_array($source->id, $workspace->sources->pluck('id')->toArray()))
						{{ Form::checkbox('source_id[]', $source->id, true, array('class' => 'form-check-input', 'id' => 'source_id_' .  $source->id)) }}
						@else
						{{ Form::checkbox('source_id[]', $source->id, false, array('class' => 'form-check-input', 'id' => 'source_id_' .  $source->id)) }}
						@endif
						{{ Form::label('source_id_' .  $source->id, $source->name, array('class' => 'form-check-label')) }}
					</div>
					@endforeach

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}
				</div>
			</div>
		</div>
	</div>
	{{ Form::close() }}
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">List Users</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Role</th>
							<th scope="col">Operations</th>
						</thead>
						<tbody>
							@foreach ($workspace->users as $user)
							<tr>
								<th scope="row">{{ $user->id }}</th>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->role($workspace->id)->name }}</td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['workspaces.user', $workspace->id, $user->id] ]) !!}
									{!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) !!}
									{!! Form::close() !!}
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