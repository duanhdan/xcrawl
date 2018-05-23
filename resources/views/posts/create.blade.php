@extends('layouts.app')

@section('content')
{{ Form::open(array('route' => array('posts.store'), 'method' => 'POST')) }}
{{ Form::hidden('workspace_id', Auth::user()->state->workspace_id) }}
{{ Form::hidden('link_id', $link->id) }}
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Add Post</div>

				<div class="card-body">

					<div class="form-group">
						{{ Form::label('title', 'Title') }}
						{{ Form::text('title', $link->title, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('slug', 'Url') }}
						{{ Form::text('slug', str_slug($link->title), array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('description', 'Description') }}
						{{ Form::text('description', $post_description, array('class' => 'form-control')) }}
					</div>

					<div class="form-group">
						{{ Form::label('tags', 'Tags') }}
						{{ Form::text('tags', $post_tags, array('class' => 'form-control')) }}
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('source_id', 'Source') }}
								{{ Form::text('source_id', $link->source->name, array('class' => 'form-control', 'readOnly' => 'readOnly')) }}
							</div>

							<div class="form-group">
								{{ Form::label('source_category_id', 'From Category') }}
								{{ Form::text('source_category_id', $link->category->name, array('class' => 'form-control', 'readOnly' => 'readOnly')) }}
							</div>

							<div class="form-group">
								{{ Form::label('post_status', 'Post Status') }}
								{{ Form::select('post_status', ['draft' => 'Draft', 'publish' => 'Publish'], null, array('class' => 'form-control')) }}
							</div>

							{{ Form::submit('Create', array('class' => 'btn btn-primary btn-sm')) }}
						</div>
						<div class="col-md-6">
							<div class="form-group">
								{{ Form::label('target_id', 'Target') }}
								{{ Form::select('target_id', $targets, null, array('class' => 'form-control')) }}
							</div>

							<div class="form-group">
								{{ Form::label('target_category_id', 'To Category') }}
								{{ Form::select('target_category_id', [], null, array('class' => 'form-control')) }}
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">Custom Image</div>

				<div class="card-body">
					<div class="form-group">
						{{ Form::label('current_image', 'Current Image') }}
						<img src="{{ $post_image }}" style="max-width: 100%">
						{{ Form::hidden('image', $post_image) }}
					</div>
					<div class="form-group">
						{{ Form::label('image', 'New Image') }}
						//
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
{{ Form::close() }}
@endsection
