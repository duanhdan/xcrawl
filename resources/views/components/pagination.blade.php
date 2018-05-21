@if ($paginator->hasPages())
	<ul class="pagination pagination-sm justify-content-end">
		<li class="disabled page-item"><span class="page-link">Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span></li>
		{{-- Previous Page Link --}}
		@if ($paginator->onFirstPage())
			<li class="disabled page-item"><span class="page-link">First</span></li>
			<li class="disabled page-item"><span class="page-link">&laquo;</span></li>
		@else
			<li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}">First</a></li>
			<li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
		@endif

		{{-- Pagination Elements --}}
		@foreach ($elements as $element)

			{{-- Array Of Links --}}
			@if (is_array($element))
				@foreach ($element as $page => $url)
					@if ($page == $paginator->currentPage())
						<li class="active page-item"><span class="page-link">{{ $page }}</span></li>
					@elseif ($page < $paginator->currentPage() - 3)
						{{-- Donothing --}}
					@elseif ($page == $paginator->currentPage() - 3)
						<li class="disabled page-item"><span class="page-link">...</span></li>
					@elseif ($page == $paginator->currentPage() + 3)
						<li class="disabled page-item"><span class="page-link">...</span></li>
					@elseif ($page > $paginator->currentPage() + 3)
						{{-- Donothing --}}
					@else
						<li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
					@endif
				@endforeach
			@endif
		@endforeach

		{{-- Next Page Link --}}
		@if ($paginator->hasMorePages())
			<li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
			<li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">Last</a></li>
		@else
			<li class="disabled page-item"><span class="page-link">&raquo;</span></li>
			<li class="disabled page-item"><span class="page-link">Last</span></li>
		@endif
	</ul>
@endif