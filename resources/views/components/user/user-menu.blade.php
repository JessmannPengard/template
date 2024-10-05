<button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
    class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-green-600 dark:hover:text-green-500 md:me-0 dark:text-white"
    type="button">
    <span class="sr-only">Open user menu</span>
    <img class="w-10 h-10 me-2 rounded-full object-cover"
        src="{{ Auth::user()->profile_image ? Storage::url(Auth::user()->profile_image) : asset('img/default-profile-picture-avatar.png') }}"
        alt="Imagen del usuario">
    <span class="hidden md:block">{{ Auth::user()->name }}</span>
    <svg class="w-2.5 h-2.5 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>
</button>

<!-- Dropdown menu -->
<div id="dropdownAvatarName"
    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-zinc-950 dark:divide-gray-600">
    <div class="py-2">
        <a href="{{ route('profile.edit') }}"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Mi
            perfil</a>
    </div>
    <div class="py-2">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Cerrar
                sesión</button>
        </form>
    </div>
</div>
