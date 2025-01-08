<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="min-h-screen bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <!-- <div id="banner" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50 flex justify-center items-center">
    <div class="relative w-full h-full">

        <img src="images/banner-1.png" alt="Banner Mobile" class="  block w-full h-full object-cover md:hidden rounded-lg ">

        <img src="images/banner-2.png" alt="Banner Desktop" class="hidden md:block w-full h-full object-cover">


        <button id="closeBanner" class="absolute top-0 right-4 text-black text-4xl font-bold">
            &times;
        </button>
    </div>
  </div> -->

    <div class="">
        <!-- Navigation -->

        <!-- Hero Section -->
        @yield('content')
    </div>
    <button id="scrollToTop"
        class="fixed bottom-5 right-5 bg-blue-400 text-white p-4 text-xl rounded-lg shadow-md hidden focus:outline-none dark:bg-blue-600 dark:text-gray-200">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd"
                d="M11.47 2.47a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06l-6.22-6.22V21a.75.75 0 0 1-1.5 0V4.81l-6.22 6.22a.75.75 0 1 1-1.06-1.06l7.5-7.5Z"
                clip-rule="evenodd" />
        </svg>
    </button>
    <!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

    @yield('footer')

    <!-- kegiatan -->

    <!-- FontAwesome script (for icons) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('template/script.js') }}"></script>
    <script>
        AOS.init({
            duration: 1000,
            offset: 100,
        });
    </script>
</body>

</html>
