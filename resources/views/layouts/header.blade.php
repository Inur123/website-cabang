<nav id="popup"
class="flex items-center justify-between px-6 py-4 border-b dark:border-gray-700 sticky top-0 z-10 bg-white dark:bg-gray-800">
<div class="flex items-center space-x-2">
    <!-- Logo tampil di mobile dan desktop -->
    <a href="/">
        <div class="p-2 rounded-lg">
          <img src="{{ asset('template/images/logo-2.svg') }}" alt="" class="w-10 h-10 filter invert dark:invert-0">
        </div>
      </a>

    <!-- Teks hanya tampil di desktop -->
    <a href="/">
        <span class="text-xl font-bold hidden md:block">Ipnu Ippnu</span>
      </a>
</div>
<!-- Menu Links (hidden on mobile, shown on larger screens) -->
<div id="menu"
    class="hidden md:flex flex-col md:flex-row md:space-x-8 absolute md:static top-16 left-0 w-full bg-white dark:bg-gray-800 md:w-auto md:bg-transparent shadow-md md:shadow-none">
    <a href="/" class="{{ request()->is('/') ? 'text-blue-600 dark:text-blue-400 font-bold' : 'text-gray-600 dark:text-gray-300' }} block p-4 md:p-0">Home</a>
    <a href="/blog" class="{{ request()->is('blog*') ? 'text-blue-600 dark:text-blue-400 font-bold' : 'text-gray-600 dark:text-gray-300' }} block p-4 md:p-0">Blog</a>
    {{-- <a href="detail-blog.html" class="block text-gray-600 dark:text-gray-300 p-4 md:p-0 flex items-center">
        Pages
        <i class="fas fa-arrow-right ml-1"></i>
    </a> --}}

</div>

<div class="flex gap-3">
    <div class="flex items-center space-x-4">
        <!-- Dark Mode Toggle Button -->
        <button id="darkModeToggle" onclick="toggleDarkMode()"
            class="p-2 rounded-full bg-gray-100 dark:bg-gray-800">
            <span class="sr-only">Toggle theme</span>
            <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg>
            <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg>
        </button>
    </div>
    <div class="md:hidden flex items-center">
        <button id="menuToggle" onclick="toggleMenu()" class="text-gray-600 dark:text-gray-300">
            <svg id="hamburgerIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
</nav>
