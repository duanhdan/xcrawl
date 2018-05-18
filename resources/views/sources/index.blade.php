@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">List Sources</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Url</th>
							<th scope="col">Status</th>
							<th scope="col">Operations</th>
						</thead>
						<tbody>
							@foreach ($sources as $source)
							<tr>
								<th scope="row">{{ $source->id }}</th>
								<td>{{ $source->name }}</td>
								<td>{{ $source->url }}</td>
								<td>{{ ($source->status == 1) ? 'Active' : 'InActive' }}</td>
								<td>
									{!! Form::open(['method' => 'DELETE', 'route' => ['sources.destroy', $source->id] ]) !!}
									<a href="{{ route('sources.edit', $source->id) }}" class="btn btn-success btn-sm" role="button">Edit</a>
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
