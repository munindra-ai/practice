@if ((count($menu->children) > 0) AND ($menu->parent_id > 0))
<li class="nav-item dropdown" style="margin: 10px">
    <a href="{{ url($menu->slug) }}" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
        {{ $menu->side_menu_title }}
        @if(count($menu->children) > 0) 
        <i class="fa fa-caret-down"></i>
        @endif
    </a>
    @else
<li class="nav-item @if($menu->parent_id === 0 && count($menu->children) > 0) dropdown @endif">
    <a href="{{ url($menu->slug) }}" class="nav-link dropdown-toggle" data-toggle="dropdown">
        {{ $menu->side_menu_title }} 
        @if(count($menu->children) > 0) 
            <i class="fa fa-caret-down"></i>
        @endif
    </a>
    @endif
    @if (count($menu->children) > 0)
    <ul class="@if($menu->parent_id !== 0 && (count($menu->children) > 0)) submenu @endif dropdown-menu" aria-labelledby="dropdownBtn">
        @foreach($menu->children as $menu)
        @include('threelevelmenu.submenu', $menu)
        @endforeach
    </ul>
    @endif
</li>