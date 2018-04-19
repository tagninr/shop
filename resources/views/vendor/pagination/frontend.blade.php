@if ($paginator->hasPages())
    <div class="toolbar-bottom">
        <div class="pagination">
            <ul>
                @if ($paginator->onFirstPage())
                    <li class="prev" style="cursor: default; pointer-events: none;">
                        <a href="#"><i class="fa fa-long-arrow-left"></i>
                            Previous
                        </a>
                    </li>
                @else
                    <li class="prev">
                        <a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-long-arrow-left"></i>
                            Previous
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))
                        <li><span>{{ $element }}</span></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><span class="current">{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="next"><a href="{{ $paginator->nextPageUrl() }}">Next <i
                                    class="fa fa-long-arrow-right"></i></a>
                    </li>
                @else
                    <li class="next" style="cursor: default; pointer-events: none;">
                        <a href="">Next <i class="fa fa-long-arrow-right"></i></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif