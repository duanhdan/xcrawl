@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Edit Workspaces: {{ $workspace->name }}</div>

				<div class="card-body">
					{{ Form::model($workspace, array('route' => array('workspaces.update', $workspace->id), 'method' => 'PUT')) }}

					<div class="form-group">
						{{ Form::label('name', 'Name') }}
						{{ Form::text('name', $workspace->name, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('status', 'Status') }}
						{{ Form::select('status', ['0' => 'InActive', '1' => 'Active'], $workspace->status, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
