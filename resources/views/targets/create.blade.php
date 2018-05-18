@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Add Target</div>

				<div class="card-body">
					{{ Form::open(array('route' => array('targets.store'), 'method' => 'POST')) }}

					<div class="form-group">
						{{ Form::label('name', 'Name') }}
						{{ Form::text('name', null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('url', 'Url') }}
						{{ Form::text('url', null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('username', 'Username') }}
						{{ Form::text('username', null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('password', 'Password') }}
						{{ Form::text('password', null, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
