@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">List Rules</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<th scope="col">#</th>
							<th scope="col">Source</th>
							<th scope="col">From Category</th>
							<th scope="col">Target</th>
							<th scope="col">To Category</th>
							<th scope="col">Post Status</th>
							<th scope="col">Status</th>
							<th scope="col">Operation</th>
						</thead>
						<tbody>
						@foreach ($rules as $rule)
							<tr>
								<td scope="row">{{ $rule->id }}</td>
								<td>{{ $rule->source->name }}</td>
								<td>{{ $rule->source_category->name }}</td>
								<td>{{ $rule->target->name }}</td>
								<td>{{ $rule->target_category->name }}</td>
								<td>{{ $rule->post_status }}</td>
								<td>{{ $rule->status }}</td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['sources.destroy', $source->id] ]) !!}
									<a href="{{ route('rules.edit', $rule->id) }}" class="btn btn-info" role="button">Edit</a>
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
