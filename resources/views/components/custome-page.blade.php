<!-- resources/views/vendor/pagination/custom.blade.php -->
<div class="pagination-area pb-45 text-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            @if ($paginator->onFirstPage())
                                <li class="page-item">
                                    <li class="page-item">
                                        {{-- <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a> --}}
                                        <a class="page-link" href="#"><span
                                            class="flaticon-arrow roted"></span></a>
                                    </li>
                                </li>
                            @else
                            <li class="page-item">
                                {{-- <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a> --}}
                                <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><span
                                    class="flaticon-arrow roted"></span></a>
                            </li>
                            @endif

                            @foreach ($elements as $element)
                                @if (is_string($element))
                                    <li class="page-item disabled">
                                        <span class="page-link">{{ $element }}</span>
                                    </li>
                                @endif

                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage())
                                            <li class="page-item active">
                                                <span class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item">
                                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if ($paginator->hasMorePages())
                                <li class="page-item">
                                    {{-- <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"> &raquo;</a> --}}
                                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}"><span
                                        class="flaticon-arrow right"></span></a>
                                </li>
                            @else
                            <li class="page-item">
                                {{-- <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"> &raquo;</a> --}}
                                <a class="page-link" href="#"><span
                                    class="flaticon-arrow right"></span></a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
