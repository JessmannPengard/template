@props(['href' => '#'])

<li>
    <a href="{{ $href }}"
        class="flex justify-center text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            {{ $slot }}
        </svg>
    </a>
</li>
