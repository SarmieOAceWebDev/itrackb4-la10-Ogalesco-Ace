<nav class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4 pb-3 border-bottom">
    <div class="d-flex flex-wrap gap-2">
        <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subjects</a>
        <a href="{{ route('subjects.index') }}" class="btn btn-outline-primary">All Subjects</a>
        <a href="{{ route('subjects.index', ['code' => 'ITRACKB4']) }}" class="btn btn-outline-primary">ITRACKB4</a>
    </div>

    @if (request()->routeIs('subjects.index'))
        <a href="{{ route('subjects.create') }}" class="btn btn-success ms-auto">Add New Subject</a>
    @endif
</nav>