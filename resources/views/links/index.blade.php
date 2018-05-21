@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">List links</div>

				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th colspan="8">{!! $links->links('components.pagination') !!}</th>
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
								<td>{{ $link->status ? 'Processed' : 'Pending' }}</td>
								<td>
									<!-- <a href="{{ route('links.post', $link->id) }}" class="btn btn-info btn-sm" role="button">Select</a> -->
								</td>
							</tr>
						@endforeach
						</tbody>
						<tfoot>
							<tr>
								<td><th colspan="8">{!! $links->links('components.pagination') !!}</th></td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
