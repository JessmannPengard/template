<aside id="sidebar" {{ $attributes->merge(['class' => 'fixed top-0 left-0 z-40 w-16 h-screen transition-transform -translate-x-full sm:translate-x-0 h-full flex flex-col justify-between py-1 overflow-y-auto bg-green-800 dark:bg-zinc-950']) }}>
    <div class="sidebar-header flex flex-col justify-center py-3">
        {{ $header ?? '' }}
    </div>

    <nav class="sidebar-content space-y-8 font-medium">
        {{ $slot }}
    </nav>

    <div class="sidebar-footer flex flex-col justify-center py-3">
        {{ $footer ?? '' }}
    </div>
</aside>
