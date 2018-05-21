@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">List Posts</div>

				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<th scope="col">#</th>
							<th scope="col">Title</th>
							<th scope="col">Category</th>
							<th scope="col">Target</th>
							<th scope="col">PostBy</th>
							<th scope="col">Status</th>
							<th scope="col">Created At</th>
							<th scope="col">Modified At</th>
							<th scope="col">Operations</th>
						</thead>
						<tbody>
							@foreach ($posts as $post)
								<tr>
									<th scope="row">{{ $post->id }}</th>
									<td>{{ $post->title }}</td>
									<td>{{ $post->category->name }}</td>
									<td>{{ $post->target->name }}</td>
									<td>{{ $post->user->name }} - {{ $post->user->email }}</td>
									<td>{{ $post->status == 0 ? 'Pending' : ($post->status == 1 ? 'Processed' : 'Failed') }}</td>
									<td>{{ $post->created_at }}</td>
									<td>{{ $post->updated_at }}</td>
									<td>
										//
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
