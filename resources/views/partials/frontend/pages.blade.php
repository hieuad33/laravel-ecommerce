@forelse($pages_menu as $page)
    <li class="">
        <a  href="{{ route('page.show', $page->slug) }}">{{ $page->title }}</a>
    </li>
@empty
@endforelse
