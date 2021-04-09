<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    @livewireStyles

</head>

<body>
<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-3 mx-auto">
        <div class="md:flex md:items-center md:justify-between">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700">
                    <a class="text-xl font-bold text-gray-800 dark:text-white md:text-2xl hover:text-gray-700 dark:hover:text-gray-300"
                       href="{{ route('home') }}">Shop</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd"
                                  d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="flex-1 md:flex md:items-center md:justify-between">
                <div class="flex flex-col -mx-4 md:flex-row md:items-center md:mx-8">
                    <a href="#"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Ưu
                        đãi</a>
                    <a href="{{ route('service') }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Dịch
                        vụ</a>
                    <a href="{{ route('shop') }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Store</a>
                    <a href="{{ '/blog' }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Blog</a>
                    <a href="{{ '/member' }}"
                       class="px-2 py-1 mx-2 mt-2 text-sm font-medium text-gray-700 transition-colors duration-200 transform rounded-md md:mt-0 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-700">Member</a>

                </div>

                <div class="flex items-center mt-4 md:mt-0">
                    <div x-data="{ show: false }" @click.away="show = false" class="mb-2">
                        <button @click="show = ! show" type="button"
                                class="flex bg-blue-600 text-gray-200 rounded-lg px-6 py-3 focus:outline-none focus:border-white text-sm">
                            <span class="pr-2">Đăng nhập</span>
                            <svg class="fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" height="24"
                                 viewBox="0 0 24 24" width="24">
                                <path d="M7 10l5 5 5-5z" />
                                <path d="M0 0h24v24H0z" fill="none" />
                            </svg>
                        </button>
                        <div x-show="show" class="absolute bg-gray-100 z-10 shadow-md" style="min-width:10rem">

                            <!-- component -->
                            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                                <div class="mb-4">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                                        Username
                                    </label>
                                    <input
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker"
                                        id="username" type="text" placeholder="Username">
                                </div>
                                <div class="mb-6">
                                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                                        Password
                                    </label>
                                    <input
                                        class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3"
                                        id="password" type="password" placeholder="******************">
                                    <p class="text-red text-xs italic">Please choose a password.</p>
                                </div>
                                <div class=" items-center justify-between">
                                    <div class="border border-indigo-600 hover:bg-blue-500">
                                        <button
                                            class="bg-blue font-bold py-2 px-4 rounded"
                                            type="button">
                                            Sign In
                                        </button>
                                    </div>

                                    <div class="flex justify-between py-4">
                                        <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker"
                                           href="#">
                                            Sign Up
                                        </a>
                                        <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker"
                                           href="#">
                                            Forgot Password?
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>

{{-- @yield('content') --}}
<div class="container px-6 py-3 mx-auto">
    {{ $slot  }}

</div>
<footer class="text-white text-1xl bg-black">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap md:text-left text-center order-first">

            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium  tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class=" hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                        <a class=" hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                        <a class=" hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                        <a class=" hover:text-gray-800">Fourth Link</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium  tracking-widest text-sm mb-3">CATEGORIES</h2>
                <nav class="list-none mb-10">
                    <li>
                        <a class=" hover:text-gray-800">First Link</a>
                    </li>
                    <li>
                        <a class=" hover:text-gray-800">Second Link</a>
                    </li>
                    <li>
                        <a class=" hover:text-gray-800">Third Link</a>
                    </li>
                    <li>
                        <a class=" hover:text-gray-800">Fourth Link</a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                <h2 class="title-font font-medium tracking-widest text-sm mb-3">SUBSCRIBE</h2>
                <div
                    class="flex xl:flex-nowrap md:flex-nowrap lg:flex-wrap flex-wrap justify-center items-end md:justify-start">
                    <div class="relative w-40 sm:w-auto xl:mr-4 lg:mr-0 sm:mr-4 mr-2">
                        <label for="footer-field" class="leading-7 text-sm ">Placeholder</label>
                        <input type="text" id="footer-field" name="footer-field"
                               class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <button
                        class="lg:mt-2 xl:mt-0 flex-shrink-0 inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                </div>
                <p class="text-sm mt-2 md:text-left text-center">Bitters chicharrones fanny pack
                    <br class="lg:block hidden">waistcoat green juice
                </p>
            </div>
        </div>
    </div>
    <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                     stroke-linejoin="round" stroke-width="2"
                     class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
            </a>
            <p class="text-sm sm:ml-6 sm:mt-0 mt-4">© 2020 Tailblocks —
                <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                   target="_blank">@knyttneve</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 ">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                  d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
        </div>
    </div>
</footer>
<script src="{{ 'https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js' }}"></script>
<script src="{{ 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js' }}" defer></script>
@livewireScripts

</body>

</html>
