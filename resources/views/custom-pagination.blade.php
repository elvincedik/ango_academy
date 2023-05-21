<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="pagination-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Page {{ $blogs->currentPage() }} of {{ $blogs->lastPage() }}
    </button>
    <div class="dropdown-menu" aria-labelledby="pagination-dropdown">
      @if ($blogs->currentPage() > 1)
        <a class="dropdown-item" href="{{ $blogs->previousPageUrl() }}">Previous</a>
      @endif
  
      @foreach ($blogs->getUrlRange(max($blogs->currentPage() - 2, 1), min($blogs->currentPage() + 2, $blogs->lastPage())) as $page => $url)
        <a class="dropdown-item{{ $page == $blogs->currentPage() ? ' active' : '' }}" href="{{ $url }}">{{ $page }}</a>
      @endforeach
  
      @if ($blogs->currentPage() < $blogs->lastPage())
        <a class="dropdown-item" href="{{ $blogs->nextPageUrl() }}">Next</a>
      @endif
    </div>
  </div>