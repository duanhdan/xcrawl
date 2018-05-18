@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">List Workspaces</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Status</th>
							<th scope="col">Operations</th>
						</thead>
						<tbody>
							@foreach ($workspaces as $workspace)
							<tr>
								<th scope="row">{{ $workspace->id }}</th>
								<td>{{ $workspace->name }}</td>
								<td>{{ ($workspace->status == 1) ? 'Active' : 'InActive' }}</td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['workspaces.destroy', $workspace->id] ]) !!}
									<a href="{{ route('workspaces.edit', $workspace->id) }}" class="btn btn-success btn-sm" role="button">Edit</a>
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
