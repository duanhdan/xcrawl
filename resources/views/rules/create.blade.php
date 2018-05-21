@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Add Rule</div>

				<div class="card-body">
					{{ Form::open(array('route' => array('rules.store'), 'method' => 'POST')) }}

					<div class="form-group">
						{{ Form::label('source_id', 'Source') }}
						{{ Form::select('source_id', $sources, 'Select source...', array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('source_category_id', 'From Category') }}
						{{ Form::select('source_category_id', [], null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('target_id', 'Target') }}
						{{ Form::select('target_id', $targets, null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('target_category_id', 'To Category') }}
						{{ Form::select('target_category_id', [], null, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('post_status', 'Post Status') }}
						{{ Form::select('post_status', ['draft' => 'Draft', 'publish' => 'Publish'], null, array('class' => 'form-control')) }}
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('slug_prefix', 'Url Prefix') }}
								{{ Form::text('slug_prefix', null, array('class' => 'form-control')) }}
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('slug_suffix', 'Url Suffix') }}
								{{ Form::text('slug_suffix', null, array('class' => 'form-control')) }}
							</div>
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('status', 'Status') }}
						{{ Form::select('status', ['0' => 'InActive', '1' => 'Active'], null, array('class' => 'form-control')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
