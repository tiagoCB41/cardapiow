<?php
require "db_config.php";
require "./functions/get.php";
$category = get_category();
?>
<header id="header1" class="header1 invisible">
    <!-- follow me on twitter @asad_codes -->
    <div style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;" class="fixed flex flex-wrap z-20">
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between h-16 bg-gray-900 text-white w-screen">
                <div class="px-5 xl:px-12 py-2 flex w-full items-center">
                    <div class="absolute">
                        <a class="text-2xl font-bold font-heading flex justify-center items-center" href="#">
                            <img class="h-12 rounded-full" src="./assets/img/logo.jpg" alt="logo">
                            <p class="mx-4 whitespace-nowrap">Hamburgueria X</p>
                        </a>
                    </div>
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    </ul>
                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center bg-gray-900 space-x-5 items-center">
                        <a class="hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex absolute -mt-5 ml-4">
                                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                                </span>
                            </span>
                        </a>
                        <!-- Sign In / Register      -->
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 9.5H3M21 4.5H3M21 14.5H3M21 19.5H3" />
                            </svg>
                        </a>

                    </div>
                </div>
                <!-- Responsive navbar -->
                <div class="bg-gray-900 xl:hidden flex pl-3 relative">
                    <a class="xl:hidden relative  flex mr-6 items-center" href="#">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex absolute -mt-5 ml-4">
                                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                                </span>
                            </span>
                        </div>
                    </a>
                    <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </a>
                </div>
            </nav>
            <!-- Swiper -->
            <div class="bg-white max-h-16 flex">
                <div class="swiper mySwiper catalogoNav w-screen h-16 bg-white w-11/12">
                    <div class="swiper-wrapper">
                        <?php foreach ($category as $categories) { ?>
                            <div class="swiper-slide flex justify-center items-center">
                                <h6 class="font-semibold"><?php echo $categories['name'] ?></h6>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <button class="peer px-5 py-2 bg-gray-100 w-1/12 flex justify-left items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
            </button>
            <div class="hidden absolute right-24 mt-16 peer-hover:flex hover:flex w-[200px] flex-col bg-white drop-shadow-lg">
         <?php foreach ($category as $categories) { ?>
            <a class="px-5 py-3 hover:bg-gray-100"><?php echo $categories['name'] ?></a>
                        <?php } ?>
        </div>
            </div>
        </section>
    </div>
</header>


<header id="header2" class="header2 visible">
    <!-- follow me on twitter @asad_codes -->
    <div class="fixed flex flex-wrap z-20">
        <section class="relative mx-auto">
            <!-- navbar -->
            <nav class="flex justify-between bg-transparent text-white w-screen">
                <div class="px-5 xl:px-12 py-2 flex w-full items-center">
                    <div>
                        <a class="text-2xl h-12 font-bold font-heading flex justify-center items-center" href="#">

                        </a>
                    </div>
                    <!-- Nav Links -->
                    <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
                    </ul>
                    <!-- Header Icons -->
                    <div class="hidden xl:flex items-center space-x-5 items-center">
                        <a class="hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </a>
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="flex absolute -mt-5 ml-4">
                                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                                </span>
                            </span>
                        </a>
                        <!-- Sign In / Register      -->
                        <a class="flex items-center hover:text-gray-200" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 9.5H3M21 4.5H3M21 14.5H3M21 19.5H3" />
                            </svg>
                        </a>

                    </div>
                </div>
                <!-- Responsive navbar -->
                <a class="xl:hidden flex mr-6 items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="flex absolute -mt-5 ml-4">
                        <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                        </span>
                    </span>
                </a>
                <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </a>
            </nav>

        </section>
    </div>
</header>
<!-- Does this resource worth a follow? -->
<div class="fixed bottom-0 right-0 mb-4 mr-4 z-10">
    <div>
        <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
            <img class="object-cover object-center w-full h-full rounded-full" src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN=w240-h480-rw" />
        </a>
    </div>
</div>