@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Edit Target: {{ $target->name }}</div>

				<div class="card-body">
				{{ Form::model($target, array('route' => array('settings.targets.update', $target->id), 'method' => 'PUT')) }}
					<div class="form-group">
						{{ Form::label('name', 'Name') }}
						{{ Form::text('name', $target->name, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('url', 'Url') }}
						{{ Form::text('url', $target->url, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('username', 'Username') }}
						{{ Form::text('username', $target->user ? $target->user->username : null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('password', 'Password') }}
						{{ Form::text('password', $target->user ? $target->user->password : null, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection