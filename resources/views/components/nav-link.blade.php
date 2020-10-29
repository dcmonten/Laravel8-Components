<a 
    class="nav-link {{ (strcmp(Route::currentRouteName(), $route) == 0) ? 'active' : '' }}"
    href="{{route($route)}}"
>
    {{$label}}
</a>