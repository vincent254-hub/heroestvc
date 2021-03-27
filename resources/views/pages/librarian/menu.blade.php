{{--Books--}}
<li class="nav-item">
    <a href="{{ route('settings') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['settings',]) ? 'active' : '' }}"><i class="icon-gear"></i> <span>Library</span></a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link "><i class="icon-books"></i> Books</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link "><i class="icon-books"></i>Create Books</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link "><i class="icon-books"></i>Check in Books</a>
</li>
