@props(['href' => '#', 'active' => false])

<li class="relative group">
    <a href="{{ $href }}" class="relative flex items-center justify-center {{ $active ? 'active' : '' }}">
        <svg class="w-5 h-5 text-white transition duration-75 group-hover:text-green-500 dark:group-hover:text-white {{ $active ? 'text-green-800 dark:text-white' : 'text-white' }} z-10"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            {{ $slot }}
        </svg>
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-0">
            <div
                class="w-0 h-0 transition-all duration-200 bg-white dark:bg-green-500 rotate-45 rounded-md group-hover:w-8 group-hover:h-8 {{ $active ? 'w-8 h-8' : '' }}">
            </div>
        </div>
    </a>
</li>
