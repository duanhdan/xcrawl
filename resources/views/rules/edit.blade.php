@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Edit Rule: {{ $rule->name }}</div>

				<div class="card-body">
				{{ Form::model($rule, array('route' => array('rules.update', $rule->id), 'method' => 'PUT')) }}
					<div class="form-group">
						{{ Form::label('source', 'Source (Can\'t modify)') }}
						{{ Form::text('source', $rule->source->name, array('class' => 'form-control', 'readOnly' => 'readOnly')) }}
					</div>

					<div class="form-group">
						{{ Form::label('source_category', 'From Category (Can\'t modify)') }}
						{{ Form::text('source_category', $rule->source_category->name, array('class' => 'form-control', 'readOnly' => 'readOnly')) }}
					</div>

					<div class="form-group">
						{{ Form::label('target_id', 'Target') }}
						{{ Form::select('target_id', $targets, $rule->target_id, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('target_category_id', 'To Category') }}
						{{ Form::select('target_category_id', $rule->target->categories->pluck('name', 'id'), null, array('class' => 'form-control')) }}
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

					<div class="form-group form-check">
						{{ Form::checkbox('update_post', null, false, array('class' => 'form-check-input', 'id' => 'update_post')) }}
						{{ Form::label('update_post', 'Update all pending posts?', array('class' => 'form-check-label')) }}
					</div>

					{{ Form::submit('Update', array('class' => 'btn btn-primary btn-sm')) }}

					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection