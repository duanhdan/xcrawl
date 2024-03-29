@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">List Targets</div>

				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Url</th>
							<th scope="col">Username</th>
							<th scope="col">Operations</th>
						</thead>
						<tbody>
							@foreach ($targets as $target)
								<tr>
									<th scope="row">{{ $target->id }}</th>
									<td>{{ $target->name }}</td>
									<td>{{ $target->url }}</td>
									<td style="padding: 0;">
										<table class="table-striped" width="100%">
										@foreach ($target->users as $target_user)
											<tr>
												<td>{{ $target_user->username }} ~ {{ $target_user->user->email }}</td>
											</tr>
										@endforeach
										</table>
									</td>

									@if ($target->user->exists() && $target->user->user_id == Auth::id())
									<td>
										{!! Form::open(['method' => 'DELETE', 'route' => ['targets.destroy', $target->id] ]) !!}
										<a href="{{ route('targets.fetch', $target->id) }}" class="btn btn-primary btn-sm" role="button">Update</a>
										<a href="{{ route('targets.edit', $target->id) }}" class="btn btn-success btn-sm" role="button">Edit</a>
										{!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) !!}
										{!! Form::close() !!}
									</td>
									@else
									<td>
										{!! Form::open(['method' => 'DELETE', 'route' => ['targets.destroy', $target->id] ]) !!}
										<a href="{{ route('targets.edit', $target->id) }}" class="btn btn-success btn-sm" role="button">Edit</a>
										{!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) !!}
										{!! Form::close() !!}
									</td>
									@endif
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
