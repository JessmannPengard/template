@props(['href' => '#', 'active' => false, 'icon' => null, 'title' => null])

<li
    {{ $attributes->class([
        'sidebar-item list-none',
        'text-gray-300 dark:text-gray-400 hover:text-green-500 hover:bg-white dark:hover:bg-gray-600',
        'bg-white text-green-500 dark:bg-gray-600 dark:text-white' => $active,
    ]) }}>

    <a href="{{ $href }}" class="sidebar-link flex flex-col items-center py-2 text-sm focus:outline-none">
        {{-- Icono (opcional) --}}
        @if ($icon)
            <span class="sidebar-icon">
                @svg($icon)
            </span>
        @endif

        {{-- Título (opcional) --}}
        @if ($title)
            <span class="sidebar-title">
                {{ $title }}
            </span>
        @endif
    </a>
</li>
