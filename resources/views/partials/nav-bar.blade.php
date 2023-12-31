<div class="p-6 rounded-lg bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex">
    <div class="flex gap-6 mt-6 text-xl font-semibold text-gray-900 dark:text-white">
        {{--$routes derived from NavBarComposer--}}
        @foreach($routes as $route)
            <a href="{{route($route)}}" class="{{request()->routeIs($route) ? 'underline disabled-link':'motion-safe:hover:scale-[1.10]'}}">
                {{$route}}
            </a>
        @endforeach
    </div>
</div>

