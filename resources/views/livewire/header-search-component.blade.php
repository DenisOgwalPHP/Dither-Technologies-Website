<div class="widget-search">
    <form action="{{ route('project.search') }}">
        <input
            type="text"
            name="search"
            placeholder="Search Here"
            value="{{ $search }}"
        />
        <button type="submit">
            <i class="bi bi-search"></i>
        </button>
    </form>
</div>
