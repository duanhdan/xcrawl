@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Edit Source: {{ $source->name }}</div>

				<div class="card-body">
				{{ Form::model($source, array('route' => array('sources.update', $source->id), 'method' => 'PUT')) }}
					<div class="form-group">
						{{ Form::label('name', 'Name') }}
						{{ Form::text('name', $source->name, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('url', 'Url') }}
						{{ Form::text('url', $source->url, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('status', 'Status') }}
						{{ Form::select('status', ['0' => 'InActive', '1' => 'Active'], $source->status, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection