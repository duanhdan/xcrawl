@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<span>List links with: </span>
					<a href="{{ route('links.index') }}" class="btn @if ($status == 'all') btn-primary @else btn-link @endif">All</a>
					<a href="{{ route('links.index', ['is' => 'pending']) }}" class="btn @if ($status == 'pending') btn-warning @else btn-link @endif">Pending</a>
					<a href="{{ route('links.index', ['is' => 'wrote']) }}" class="btn @if ($status == 'wrote') btn-secondary @else btn-link @endif">Wrote</a>
					<a href="{{ route('links.index', ['is' => 'processed']) }}" class="btn @if ($status == 'processed') btn-success @else btn-link @endif">Processed</a>
					<a href="{{ route('links.index', ['is' => 'failed']) }}" class="btn @if ($status == 'failed') btn-danger @else btn-link @endif">Failed</a>
				</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th colspan="8">{!! $links->appends(['is' => $status])->links('components.pagination') !!}</th>
							</tr>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Category</th>
								<th scope="col">Source</th>
								<th scope="col">Status</th>
								<th scope="col">Operation</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($links as $link)
							<tr>
								<td scope="row">{{ $link->id }}</td>
								<td>{{ $link->title }}</td>
								<td>{{ $link->category->name }}</td>
								<td>{{ $link->source->name }}</td>
								<td><span class="badge {{ $link->badge($link->workspace(Auth::user()->state->workspace_id)->pivot->status) }}">{{ $link->status($link->workspace(Auth::user()->state->workspace_id)->pivot->status) }}</span></td>
								<td>
									@if ($link->workspace(Auth::user()->state->workspace_id)->pivot->status == 0)
									<a href="{{ route('posts.create', $link->id) }}" class="btn btn-info btn-sm" role="button">Write</a>
									@endif
								</td>
							</tr>
						@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td><th colspan="8">{!! $links->appends(['is' => $status])->links('components.pagination') !!}</th></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
