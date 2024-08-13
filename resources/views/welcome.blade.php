<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codehives solutions</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/index-9K5_d7ea.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white">
    @if (session()->has('success'))
        <div class="top-16 p-10 fixed z-50 w-full" x-data="{ modal: true }">
            <div x-show="modal"
                class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-green-100 bg-green-600 bg-opacity-70 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
                <div class="flex items-center">
                    <span class="capitalize">{{ session()->get('success') }}</span>
                </div>
                <button @click="modal = false "><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg></button>
            </div>
        </div>
    @elseif (session()->has('fail'))
        <div class="top-16 p-10 fixed z-50 w-full" x-data="{ modal: true }">
            <div x-show="modal"
                class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-green-100 bg-green-600 bg-opacity-70 rounded-lg shadow-md focus:outline-none focus:shadow-outline-green">
                <div class="flex items-center">
                    <span class="capitalize">{{ session()->get('fail') }}</span>
                </div>
                <button @click="modal = false "><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        role="img" aria-hidden="true">
                        <path
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg></button>
            </div>
        </div>
    @endif
    <header class="fixed w-full z-10 p-5 bg-[#1211119e] shadow">
        <nav class="container m-auto md:flex md:justify-between md:items-center text-white">
            <div class="flex justify-between items-center">
                <a class="capitalize text-2xl font-semibold border-l-4 border-sky-500 pl-3 hover:text-sky-400"
                    href="#">{{ $data->site_name }}</a>
                <span class="text-3xl cursor-pointer md:hidden block">
                    <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
                </span>
            </div>
            <ul
                class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#1211119e] md:bg-transparent  w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                <li class="mx-4 my-6 md:my-0"><a class="text-xl text-sky-400 hover:text-sky-400 duration-500"
                        href="#home">Home</a></li>
                <li class="mx-4 my-6 md:my-0"><a class="text-xl hover:text-sky-400 duration-500" href="#about-us">About
                        Us</a></li>
                <li class="mx-4 my-6 md:my-0"><a class="text-xl hover:text-sky-400 duration-500"
                        href="#services">Services</a></li>
                <li class="mx-4 my-6 md:my-0"><a class="text-xl hover:text-sky-400 duration-500"
                        href="#products">Products</a></li>
                <li class="mx-4 my-6 md:my-0"><a class="text-xl hover:text-sky-400 duration-500"
                        href="#contact-us">Contact Us</a></li>
                <a href="#name"><button
                        class="bg-sky-400 text-white font-sans duration-500 px-6 py-2 mx-4 hover:bg-sky-500 rounded">Book
                        Now</button>
                </a>
            </ul>
        </nav>
    </header>


    <section id="home" class="h-full">
        <div class="h-full w-full absolute  bg-[#1211119e]">
            <div class="h-full w-full flex justify-center items-center  text-white">
                <div class="container m-auto">
                    <h1 class="text-4xl capitalize text-center">welcome to <span
                            class="text-sky-500">{{ $data->site_name }}</span>.</h1>
                    <h1 class="text-4xl capitalize text-center">{{ $data->hero_text }}</h1>
                    <br />
                    <p class="hidden md:block text-center m-auto text-lg w-3/4">{{ $data->subhero_text }}</p>
                    {{-- <br>
                    <div class="text-center">
                        <a href="#"><button
                                class="capitalize py-2 px-5 rounded-full text-xl border-2 hover:bg-sky-500 transition-all duration-75">book now</button></a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="w-full h-full relative -z-10  bg-cover bg-center bg-no-repeat bg-fixed overflow-hidden"
            style="background-image: url('{{ asset("storage/$data->hero_img") }}')">
        </div>
    </section>
    <section id="about-us" class="h-auto md:h-full pb-8 md:overflow-hidden">
        <h1 class="uppercase text-3xl font-semibold text-center text-sky-500 pt-8">-{{ $data->portfolio_title }}-</h1>
        <p class="text-center text-[#575a7b]">{{ $data->portfolio_subtext }}</p>

        <div class="md:pt-10 xl:mt-16 flex flex-col md:flex-row gap-16 justify-center">
            <div class="h-[484px] w-96 flex justify-center items-center md:block  bg-cover bg-center"
                style="background-image: url('{{ asset("storage/$data->portfolio_img") }}');">
            </div>
            <div class="text p-4 md:w-1/2 lg:w-1/3">
                <h1 class="uppercase text-3xl font-semibold  text-sky-500 pt-8">-who we are ?-</h1>
                <br />
                <p class="text-start line-clamp-6 text-[#575a7b]">{{ $data->who_we_are }}</p>

            </div>
        </div>
    </section>

    <section id="services" class="h-auto p-4">
        <div class="container m-auto">
            <div class="">
                <h1 class="uppercase text-3xl font-semibold text-center text-sky-500 pt-8">-{{ $data->service_title }}-
                </h1>
                <p class="text-center text-[#575a7b]">{{ $data->service_subtext }}</p>
            </div>
            <div class="flex flex-col md:flex-row gap-8 justify-center items-center mt-8">
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32  hover:bg-sky-500 rounded-full  flex justify-center items-center ">
                        <img class="w-16" src="{{ asset('assets/megaphone-oIQ9T5oS.png') }}" alt="">
                    </div>
                    <h3 class="capitalize font-semibold">certificate training</h3>
                </div>
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32  hover:bg-sky-500 rounded-full flex justify-center items-center">
                        <img class="w-16" src="{{ asset('assets/web-development-E-W1el60.png') }}" alt="">
                    </div>
                    <h3 class="capitalize font-semibold">Web Development</h3>
                </div>
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32  hover:bg-sky-500 rounded-full flex justify-center items-center">
                        <img class="w-16" src="{{ asset('assets/startup-B_Dra6O1.png') }}" alt="">
                    </div>
                    <h3 class="capitalize font-semibold">Deployment</h3>
                </div>
                <div class="flex flex-col items-center">
                    <div class="h-32 w-32  hover:bg-sky-500 rounded-full flex justify-center items-center">
                        <img class="w-16" src="{{ asset('assets/web-maintenance-pArzRB21.png') }}" alt="">
                    </div>
                    <h3 class="capitalize font-semibold">maintainence</h3>
                </div>
            </div>
            <div class="w-full pt-8 mt-8 h-auto grid justify-items-center gap-4 md:grid-cols-2 lg:grid-cols-3">
                <div
                    class="card group w-full max-w-96 min-h-64 h-full py-[2em] px-[1.5em] bg-card bg-card-size bg-card-position rounded shadow-card cursor-pointer duration-300 hover:bg-card-hover text-center hover:text-white">
                    <p class="text-xl text-center font-bold text-blue-600 duration-500">Basic</p>
                    <p class="text-center py-8">
                        <span class="text-4xl font-bold text-gray-700 group-hover:text-white duration-500">
                            $<span>19</span>
                        </span>
                        <span class="text-xs font-bold text-gray-500 group-hover:text-white duration-500 line-through">
                            $<span>49</span>
                        </span>
                    </p>
                    <ul class="border-t border-gray-300 py-8 space-y-6">
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Free Setup
                                Guidance</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Email
                                Support</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">User
                                Management</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Reports</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Unlimited Users</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Data Export</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Automated Workflows</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">API Access</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#"
                            class="bg-blue-600 border hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                            title="Purchase">Purchase</a>
                    </div>
                </div>
                <div
                    class="card group w-full max-w-96 min-h-64 h-full py-[2em] px-[1.5em] bg-card bg-card-size bg-card-position rounded shadow-card cursor-pointer duration-300 hover:bg-card-hover text-center hover:text-white">
                    <p class="text-xl text-center font-bold text-blue-600 duration-500">Proffesnal</p>
                    <p class="text-center py-8">
                        <span class="text-4xl font-bold text-gray-700 group-hover:text-white duration-500">
                            $<span>19</span>
                        </span>
                        <span class="text-xs font-bold text-gray-500 group-hover:text-white duration-500 line-through">
                            $<span>49</span>
                        </span>
                    </p>
                    <ul class="border-t border-gray-300 py-8 space-y-6">
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Free Setup
                                Guidance</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Email
                                Support</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">User
                                Management</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Reports</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Unlimited Users</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Data Export</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Automated Workflows</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">API Access</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#"
                            class="bg-blue-600 border hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                            title="Purchase">Purchase</a>
                    </div>
                </div>
                <div
                    class="card group w-full max-w-96 min-h-64 h-full py-[2em] px-[1.5em] bg-card bg-card-size bg-card-position rounded shadow-card cursor-pointer duration-300 hover:bg-card-hover text-center hover:text-white">
                    <p class="text-xl text-center font-bold text-blue-600 duration-500">Bussness</p>
                    <p class="text-center py-8">
                        <span class="text-4xl font-bold text-gray-700 group-hover:text-white duration-500">
                            $<span>19</span>
                        </span>
                        <span class="text-xs font-bold text-gray-500 group-hover:text-white duration-500 line-through">
                            $<span>49</span>
                        </span>
                    </p>
                    <ul class="border-t border-gray-300 py-8 space-y-6">
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Free Setup
                                Guidance</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Email
                                Support</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">User
                                Management</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-blue-600 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-600 capitalize group-hover:text-white duration-500">Reports</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Unlimited Users</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Data Export</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">Automated Workflows</span>
                        </li>
                        <li class="flex items-center space-x-2 px-8">
                            <span class="bg-gray-300 rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-white"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="text-gray-400 capitalize group-hover:text-white duration-500">API Access</span>
                        </li>
                    </ul>
                    <div class="flex items-center justify-center mt-6">
                        <a href="#"
                            class="bg-blue-600 border hover:bg-blue-700 px-8 py-2 text-sm text-gray-200 uppercase rounded font-bold transition duration-150"
                            title="Purchase">Purchase</a>
                    </div>
                </div>
            </div>
            {{-- @foreach ($services as $service)
                <div class="card  w-full min-h-64 h-full py-[2em] px-[1.5em] bg-card bg-card-size bg-card-position rounded shadow-card cursor-pointer duration-300 hover:bg-card-hover text-center hover:text-white">
                    <div class="icon  bg-cover bg-center relative m-auto text-[30px] h-[2.5em] w-[2.5em] rounded-full grid place-items-center duration-300 " style="background-image: url('{{asset("storage/$service->cover_img")}}');">
                    </div>
                    <h3 class="text-xl font-semibold capitalize">{{$service->name}}</h3>
                    <p class="text-sm">
                      {{$service->desc}}
                    </p>
                </div>
                @endforeach --}}
        </div>
    </section>

    <section class="mt-8 lg:mt-4 h-3/4 w-full md:h-1/4">
        <div class="h-3/4 md:h-1/4 w-full absolute  bg-[#1211119e]">
            <div class="text-white h-full w-full md:flex md:justify-evenly md:items-center">
                <div class="h-1/3 w-full flex justify-center items-center flex-col">
                    <h2 class="text-3xl lg:text-5xl">{{ $data->projects_delivered }}+</h2>
                    <h4 class="text-xl lg:text-2xl capitalize">projects delivered</h4>
                </div>
                <div class="h-1/3 w-full flex justify-center items-center flex-col">
                    <h2 class="text-3xl lg:text-5xl">{{ $data->satisfied_customers }}+</h2>
                    <h4 class="text-xl lg:text-2xl capitalize">satisfied customers</h4>
                </div>
                <div class="h-1/3 w-full flex justify-center items-center flex-col">
                    <h2 class="text-3xl lg:text-5xl">{{ $data->year_of_exp }}+</h2>
                    <h4 class="text-xl lg:text-2xl capitalize">years of expreance</h4>
                </div>
            </div>
        </div>
        <div class="w-full h-full relative -z-10 bg-cover bg-center bg-no-repeat bg-fixed"
            style="background-image: url('{{ asset("storage/$data->hero_img") }}')">
        </div>
    </section>
    <section id="products" class="h-auto p-4">
        <div class="container h-auto lg:h-full w-full m-auto">
          <div class="">
              <h1 class="uppercase text-3xl font-semibold text-center text-sky-500 pt-8">-{{$data->product_title}}-</h1>
              <p class="text-center text-[#575a7b]">{{$data->product_subtext}}</p>
          </div>
        </div>
        <div class="mt-4 flex  items-center justify-center">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($services as $service)
            <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                <div class="h-96 w-72">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="{{asset("storage/$service->cover_img")}}" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                    <h1 class=" text-3xl font-bold text-white">{{$service->name}}</h1>
                    <p class="mb-3 text-lg text-white line-clamp-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">{{$service->desc}}.</p>
                    <button class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">$ {{$service->price}}</button>
                </div>
            </div>
            @endforeach
        </div>
      </div>
      </section>

    <section id="contact-us" class="h-auto w-full">
        <div class="container h-auto lg:h-full w-full m-auto">
            <div class="">
                <h1 class="uppercase text-3xl font-semibold text-center text-sky-500 pt-8">
                    -{{ $data->careers_title }}-</h1>
                <p class="text-center text-[#575a7b]">{{ $data->careers_subtext }}</p>
            </div>
            <div class="h-full w-full md:flex md:justify-evenly md:items-center p-4">
                <div class="hidden  w-[70em] h-96 md:flex justify-center items-center  bg-cover bg-center"
                    style="background-image: url('{{ asset("storage/$data->career_img") }}');">
                </div>
                <div class="h-auto w-full flex justify-evenly items-center">
                    <form action="{{ route('addAppointment') }}" class="mt-4 w-full md:w-auto flex flex-col"
                        method="post">
                        @csrf
                        <label for="name" class="capitalize text-xl mt-2">full name</label>
                        <input class="w-full md:w-96 h-10 p-4 capitalize border-none  bg-gray-200" type="text"
                            id="name" name="name" placeholder="enter your name">
                        <x-input-error :messages="$errors->get('name')" />

                        <label for="email" class="capitalize text-xl mt-2">Email</label>
                        <input class="w-full md:w-96 h-10 p-4 capitalize border-none bg-gray-200" type="text"
                            id="email" name="email" placeholder="example@example.com">
                        <x-input-error :messages="$errors->get('email')" />

                        <label for="contact" class="capitalize text-xl mt-2">contact no</label>
                        <input class="w-full md:w-96 h-10 p-4 capitalize border-none bg-gray-200" type="tel"
                            id="contact" name="contact" placeholder="9874561230">
                        <x-input-error :messages="$errors->get('contact')" />

                        <label for="service" class="capitalize text-xl mt-2">select service</label>
                        <select name="service_name" class="w-full md:w-96 h-10  capitalize border-none bg-gray-200"
                            id="service">
                            <option value="" selected>select option</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->name }}">{{ $service->name }}</option>
                            @endforeach
                            <option value="other">other</option>
                        </select>
                        <x-input-error :messages="$errors->get('service_name')" />


                        <label for="desc" class="capitalize text-xl mt-2 ">Decription</label>
                        <textarea class="w-full md:w-96 h-28 p-4 capitalize border-none bg-gray-200" name="desc" id="desc"
                            minlength="50" spellcheck="true"></textarea>
                        <x-input-error :messages="$errors->get('desc')" />

                        <button
                            class="mt-4 p-2 px-8 capitalize rounded duration-500 font-semibold text-white bg-sky-400 hover:bg-sky-500">submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4 h-auto bg-slate-900 overflow-hidden">
        <div class="container m-auto h-full flex flex-col gap-8  sm:gap-4 xl:gap-8 p-4">
            <div class="logo text-white">
                <h1 class="capitalize text-2xl xl:text-3xl border-l-4 border-sky-500 pl-3">{{ $data->site_name }}</h1>
            </div>
            <div class=" h-full flex flex-col md:flex-row gap-8 items-baseline justify-between px-4">
                <div class="text-white lg:w-1/4">
                    <h1 class="text-xl capitalize">Contact us</h1>
                    <h2 class="text-lg capitalize">address : {{ $data->address }}</h2>
                    <h2 class="text-lg capitalize">mobile : +91 {{ $data->mobile }}</h2>
                    <h2 class="text-lg ">Email : {{ $data->email }}</h2>
                </div>
                <div class="text-white   lg:w-1/3">
                    <h1 class="text-xl capitalize">information</h1>
                    <p class="line-clamp-5 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
                        totam eum exercitationem porro,
                        illo beatae accusamus molestiae deserunt sunt qui, dolorem ipsa numquam ratione ab ex. Provident
                        repellendus magni molestias.</p>
                </div>

                <form action="{{ route('newsubs') }}" method="post" class=" flex flex-col gap-2  lg:w-1/4">
                    @csrf
                    <label for="subscriber" class="text-white capitalize">get leatest informations</label>
                    <input type="text" id="subscriber" name="subscriber" class="h-8 p-3 "
                        placeholder="example@example.com">
                    <button
                        class="p-2 w-1/2 capitalize  rounded duration-500 font-semibold text-white bg-sky-400 hover:bg-sky-500">subscribe</button>
                </form>

            </div>
            <div class="flex justify-center border-t-2 p-4 container m-auto">
                <p class="text-sm text-white text-center">© All copywrites are reserved by {{ $data->site_name }}.</p>
            </div>
        </div>
    </section>


    <script>
        function Menu(e) {
            let list = document.querySelector('ul');

            e.name === "menu" ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e
                .name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-0'))
        }

        let sections = document.querySelectorAll('section');
        let navLinks = document.querySelectorAll('header nav ul li a');

        window.onscroll = () => {
            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 150;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navLinks.forEach(links => {
                        links.classList.remove('text-sky-400');
                        document.querySelector('header nav a[href*=' + id + ']').classList.add(
                            'text-sky-400');
                    });
                };
            });
        };
    </script>
</body>

</html>
