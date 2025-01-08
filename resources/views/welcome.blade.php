@extends('layouts.app')
<!-- ===== Header Start ===== -->


    @include('layouts.header')

<div class="container mx-auto px-6 py-12 grid md:grid-cols-2 gap-12 items-center " data-aos="zoom-in">

    <div class="space-y-8">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            PC IPNU IPPNU MAGETAN
        </h1>
        <p class="text-gray-600 dark:text-gray-300 text-lg ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
            fringilla magna mauris. Nulla fermentum viverra sem eu rhoncus
            consequat varius nisi quis, posuere magna.
        </p>
        <div class="space-y-4 ">
            <div class="space-y-1">
                <div class="text-lg font-semibold">Call us (0123) 456 - 789</div>
                <div class="text-gray-600 dark:text-gray-400">
                    For any question or concern
                </div>
            </div>
        </div>
    </div>



    <!-- Image Section -->
    <!-- Image Section -->
    <div
        class="relative h-96 md:h-[400px] rounded-lg hidden sm:block animate__animated animate__fadeIn animate__delay-900ms">
        <!-- Wrapper for smooth transition -->
        <div class="relative w-full h-full">
            <img id="image-slider-1" src="{{ asset('template/images/1.png') }}" alt="IPNU  Members"
                class="object-cover w-full h-full rounded transition-opacity duration-1000 opacity-100 absolute inset-0">
            <img id="image-slider-2" src="{{ asset('template/images/2.png') }}" alt="IPPNU Members"
                class="object-cover w-full h-full rounded transition-opacity duration-1000 opacity-0 absolute inset-0">
        </div>
    </div>

</div>

<!-- Features Section -->
<div class="container mx-auto px-6 py-12 bg-white rounded-xl mb-10 dark:bg-gray-800 dark:text-gray-100 ">
    <div class="grid md:grid-cols-3 gap-8">
        <div class="flex items-start space-x-4">
            <!-- Ikon SVG -->
            <div class="bg-pink-100 dark:bg-pink-900 p-4 rounded-full" data-aos="zoom-in">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                </svg>
            </div>

            <!-- Teks Deskripsi -->
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="zoom-in">1000</h3>
                <p class="text-gray-600 dark:text-gray-400" data-aos="zoom-in">
                    Anggota IPNU IPPNU Magetan
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4">
            <div class="bg-pink-100 dark:bg-pink-900 p-4 rounded-full" data-aos="zoom-in">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="zoom-in">18</h3>
                <p class="text-gray-600 dark:text-gray-400" data-aos="zoom-in">
                    Pimpinan Anak Cabang
                </p>
            </div>
        </div>

        <div class="flex items-start space-x-4">
            <div class="bg-pink-100 dark:bg-pink-900 p-4 rounded-full" data-aos="zoom-in">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-2" data-aos="zoom-in">5</h3>
                <p class="text-gray-600 dark:text-gray-400" data-aos="zoom-in">
                    Pimpinan Komisariat
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto text-center mb-6" data-aos="fade-up">
    <h2 class="text-2xl font-semibold text-gray-900">Kegiatan</h2>
</div>
<!-- kegiatan -->
<div class="grid grid-cols-1 container mx-auto sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <article class="group" data-aos="zoom-in">
        <div class="p-2">
            <img alt="" src="{{ asset('template/images/1.png') }}"
                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
        </div>

        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                    Finding the Journey to Mordor
                </h3>
            </a>

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Recusandae dolores, possimus pariatur animi temporibus nesciunt
                praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora
                nisi culpa eius atque dignissimos. Molestias explicabo corporis
                voluptatem?
            </p>
        </div>
    </article>

    <!-- Duplicate this article block for more cards -->
    <article class="group" data-aos="zoom-in">
        <div class="p-2">
            <img alt="" src="{{ asset('template/images/1.png') }}"
                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
        </div>

        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                    Finding the Journey to Mordor
                </h3>
            </a>

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Recusandae dolores, possimus pariatur animi temporibus nesciunt
                praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora
                nisi culpa eius atque dignissimos. Molestias explicabo corporis
                voluptatem?
            </p>
        </div>
    </article>

    <article class="group" data-aos="zoom-in">
        <div class="p-2">
            <img alt="" src="{{ asset('template/images/1.png') }}"
                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
        </div>

        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                    Finding the Journey to Mordor
                </h3>
            </a>

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Recusandae dolores, possimus pariatur animi temporibus nesciunt
                praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora
                nisi culpa eius atque dignissimos. Molestias explicabo corporis
                voluptatem?
            </p>
        </div>
    </article>

    <article class="group" data-aos="zoom-in">
        <div class="p-2">
            <img alt="" src="{{ asset('template/images/1.png') }}"
                class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
        </div>

        <div class="p-4">
            <a href="#">
                <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                    Finding the Journey to Mordor
                </h3>
            </a>

            <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500 dark:text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Recusandae dolores, possimus pariatur animi temporibus nesciunt
                praesentium dolore sed nulla ipsum eveniet corporis quidem,
                mollitia itaque minus soluta, voluptates neque explicabo tempora
                nisi culpa eius atque dignissimos. Molestias explicabo corporis
                voluptatem?
            </p>
        </div>
    </article>

    <!-- Add more articles as needed -->
</div>


@include('layouts.footer')


