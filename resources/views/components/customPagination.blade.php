@if ($paginator->hasPages())
    
    @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a href="page-link"><span>Anterior</span></a>
        </li>
            
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
            </li>
        @endif

        @foreach ($elements as $element)
            
            @foreach ($element as $page => $url)

                @if ($page == $paginator->currentPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">{{ $page }}</a>
                    </li>

                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            
            @endforeach
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Proxima</a>
            </li>
        @else
            <li class="page-item disabled"><a class="page-link"><span>Proxima</span></a></li> 
        @endif
@endif