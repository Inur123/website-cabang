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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
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

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
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

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
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
    <h2 class="text-4xl font-semibold text-gray-900  dark:text-white">Tentang Kami</h2>
</div>
<div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between py-12 px-8 container mx-auto">
    <!-- Bagian Kiri (Logo) -->
    <div class="flex-shrink-0 lg:ml-40" data-aos="fade-right">
        <img src="{{ asset('template/images/logo-ipnu.png') }}" alt="Ipnu Logo" class="w-60 h-auto" />
    </div>

    <!-- Bagian Kanan (Teks) -->
    <div class="mt-8 lg:mt-0 lg:ml-12 max-w-lg text-center lg:text-left">

        <h1 class="text-3xl font-bold mb-4" data-aos="fade-left">
            IPNU, Ikatan Pelajar Nahdlatul Ulama
        </h1>
        <p class="text-gray-600 leading-relaxed mb-6 text-justify" data-aos="fade-left">
            Ikatan Pelajar Nahdlatul Ulama (IPNU) adalah organisasi yang dibentuk untuk menampung potensi dan aspirasi
            pelajar di Indonesia. Didirikan pada 24 Maret 1954, IPNU memiliki tujuan untuk memajukan pendidikan,
            menciptakan generasi penerus yang berakhlak mulia, dan menjaga serta memperkuat nilai-nilai Islam
            Ahlussunnah wal Jamaah. Organisasi ini merupakan bagian dari Nahdlatul Ulama (NU) dan berperan sebagai wadah
            untuk pengembangan pendidikan, sosial, budaya, dan keagamaan bagi para pelajar, khususnya di Indonesia. IPNU
            mengedepankan konsep Islam yang moderat, inklusif, serta mengedukasi pelajar untuk dapat menjadi pribadi
            yang berkarakter dan bermanfaat bagi bangsa dan negara.
        </p>
        <a href="#"
            class="inline-block px-6 py-2 text-gray-700 bg-white rounded-lg shadow border border-gray-300 transition hover:border-blue-500" data-aos="fade-left">
            Detail
        </a>
    </div>
</div>
<div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between py-12 px-8 container mx-auto">
    <!-- Bagian Kiri (Teks) -->
    <div class="mt-8 lg:mt-0 lg:ml-12 max-w-lg text-center lg:text-left">
        <div class="flex justify-center sm:hidden sm:flex-shrink-0 sm:mx-auto" data-aos="fade-left">
            <img src="{{ asset('template/images/logo-ippnu.png') }}" alt="Ipnu Logo" class="w-60 h-auto" />
        </div>
        <h1 class="text-3xl font-bold mb-4" data-aos="fade-right">
            IPPNU, Ikatan Pelajar Putri Nahdlatul Ulama
        </h1>
        <p class="text-gray-600 leading-relaxed mb-6 text-justify" data-aos="fade-right">
            Ikatan Pelajar Putri Nahdlatul Ulama (IPPNU) adalah organisasi yang dibentuk sebagai wadah bagi pelajar putri di Indonesia untuk mengembangkan potensi diri dalam berbagai aspek kehidupan, termasuk pendidikan, sosial, budaya, dan keagamaan. IPPNU didirikan pada 29 Maret 1975 dan merupakan bagian dari Nahdlatul Ulama (NU). Organisasi ini bertujuan untuk membentuk generasi pelajar putri yang berakhlak mulia, cerdas, mandiri, dan memiliki kesadaran tinggi terhadap pentingnya nilai-nilai Islam Ahlussunnah wal Jamaah. IPPNU berfokus pada pemberdayaan perempuan dengan menanamkan pendidikan karakter, keterampilan, serta membangun kesadaran sosial yang bermanfaat bagi masyarakat dan negara. IPPNU juga berperan dalam memperjuangkan hak-hak perempuan dan mewujudkan kesetaraan gender dalam berbagai bidang.
        </p>
        <a href="#"
            class="inline-block px-6 py-2 text-gray-700 bg-white rounded-lg shadow border border-gray-300 transition hover:border-blue-500" data-aos="fade-right">
            Detail
        </a>
    </div>
     <!-- Bagian Kanan (Logo) -->
    <div class="flex-shrink-0 lg:mr-40"data-aos="fade-left" >
        <img src="{{ asset('template/images/logo-ippnu.png') }}" alt="Ipnu Logo" class="w-60 h-auto" />
    </div>
</div>

<div class="container mx-auto text-center mb-6" data-aos="fade-up">
    <h2 class="text-2xl font-semibold text-gray-900  dark:text-white">Kegiatan</h2>
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
</div>
<section class=" dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white"
            data-aos="fade-down">KETUA</h1>

        <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300" data-aos="fade-down">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error
            alias, adipisci rem similique, at omnis eligendi optio eos harum.
        </p>

        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
            <div class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl dark:border-gray-700 dark:hover:border-blue-200 hover:border-blue-500"
                data-aos="fade-right">
                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="">

                    <div class="mt-4 sm:mx-4 sm:mt-0">
                        <h1
                            class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">
                            arthur melo</h1>

                        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">design
                            director</p>
                    </div>
                </div>

                <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere
                    numquam est.</p>

                <div class="flex mt-4 -mx-2">
                    <a href="#"
                        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
                        aria-label="Reddit">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
                        aria-label="Facebook">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
                        aria-label="Github">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="px-12 py-8 transition-colors duration-300 transform border cursor-pointer rounded-xl dark:border-gray-700 dark:hover:border-blue-200 hover:border-blue-500"
                data-aos="fade-left">
                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300"
                        src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                        alt="">

                    <div class="mt-4 sm:mx-4 sm:mt-0">
                        <h1
                            class="text-xl font-semibold text-gray-700 capitalize md:text-2xl dark:text-white group-hover:text-white">
                            arthur melo</h1>

                        <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">design
                            director</p>
                    </div>
                </div>

                <p class="mt-4 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere
                    numquam est.</p>

                <div class="flex mt-4 -mx-2">
                    <a href="#"
                        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
                        aria-label="Reddit">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
                        aria-label="Facebook">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                            </path>
                        </svg>
                    </a>

                    <a href="#"
                        class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white"
                        aria-label="Github">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mx-auto px-6 py-12">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold">Most Popular Posts</h1>
        <a href="/blog" class="text-blue-500 hover:underline">Lihat Lainnya</a>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($popularPosts as $popularPost)
      <!-- Blog Post 1 -->
      <article class="bg-white rounded-lg overflow-hidden shadow-lg dark:bg-gray-900 dark:text-gray-100 border dark:border-gray-700  hover:border-blue-500 dark:hover:border-gray-300 ">
        {{-- <a href="{{ route('blog.show', $post->slug) }}"> --}}
          <div class="relative h-48">
            <img src="{{ asset('storage/' . $popularPost->thumbnail) }}" alt="Phoenix illustration" class="object-cover w-full h-full">
            <!-- Kategori di pojok kanan atas -->
            <div class="absolute top-1 right-1 bg-green-500 text-white text-xs px-2 py-1 rounded-lg">
              <span>{{ $popularPost->category->name }}</span>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-4 text-sm text-gray-600 mb-3">
              <div class="flex items-center gap-1">

                <span>{{ $popularPost->user->name }}</span>

              </div>
              <div class="flex items-center gap-1">

                <span>{{ $popularPost->published_at->format('d M Y') }}</span>
              </div>
            </div>
            <h2 class="text-xl font-bold mb-2">  {{ \Illuminate\Support\Str::limit($popularPost->title, 45, '...') }}</h2>
            {{-- <p class="text-gray-600">{!! $post->excerpt !!}</p> --}}
          </div>
        </a>
      </article>
      @endforeach
    </div>
</div>

@include('layouts.footer')
