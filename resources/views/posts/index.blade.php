@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<span>List Posts with: </span>
					<a href="{{ route('posts.index') }}" class="btn @if ($status == 'all') btn-primary @else btn-link @endif">All</a>
					<a href="{{ route('posts.index', ['is' => 'pending']) }}" class="btn @if ($status == 'pending') btn-warning @else btn-link @endif">Pending</a>
					<a href="{{ route('posts.index', ['is' => 'awaiting']) }}" class="btn @if ($status == 'awaiting') btn-info @else btn-link @endif">Awaiting</a>
					<a href="{{ route('posts.index', ['is' => 'processing']) }}" class="btn @if ($status == 'processing') btn-primary @else btn-link @endif">Processing</a>
					<a href="{{ route('posts.index', ['is' => 'processed']) }}" class="btn @if ($status == 'processed') btn-success @else btn-link @endif">Processed</a>
					<a href="{{ route('posts.index', ['is' => 'failed']) }}" class="btn @if ($status == 'failed') btn-danger @else btn-link @endif">Failed</a>
				</div>

				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th colspan="9">{!! $posts->appends(['is' => $status])->links('components.pagination') !!}</th>
							</tr>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Category</th>
								<th scope="col">Target</th>
								<th scope="col">PostBy</th>
								<th scope="col">Status</th>
								<th scope="col">Created At</th>
								<th scope="col">Modified At</th>
								<th scope="col">Operations</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($posts as $post)
								<tr>
									<th scope="row">{{ $post->id }}</th>
									<td>{{ $post->title }}</td>
									<td>{{ $post->category->name }}</td>
									<td>{{ $post->target->name }}</td>
									<td>{{ $post->user->name }} - {{ $post->user->email }}</td>
									<td>
										<span class="badge {{ $post->badge() }}">{{ $post->status() }}</span>
										@if (! $post->rule_id)
										<span class="badge badge-secondary">Wrote</span>
										@endif
									</td>
									<td>{{ $post->created_at }}</td>
									<td>{{ $post->updated_at }}</td>
									<td>
										@if ((Auth::user()->state->role->name == 'Manager' || Auth::id() == 1) && $post->status == 0)
										<a href="{{ route('posts.approve', $post->id) }}" class="btn btn-info btn-sm">Approve</a>
										@endif
									</td>
								</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td><th colspan="9">{!! $posts->appends(['is' => $status])->links('components.pagination') !!}</th></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
