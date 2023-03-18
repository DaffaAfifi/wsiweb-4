@extends('../layouts.mainlayout')

@section('title', 'About')

@section('navbar')
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="https://source.unsplash.com/1000x600?gun" class="h-6 mr-3 sm:h-9" alt="Daffa Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Daffa Shelby Company.</span>
        </a>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
            <a href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
            </li>
            <li>
            <a href="/about" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">About</a>
            </li>
            <li>
            <a href="/blog" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Blog</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
@endsection

@section('content')
    <div class="mt-10 mx-auto w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10 pt-10">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="<?php echo asset("storage/images/me.jpeg")?>" alt="Daffa Image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Daffa Afifi Syahrony</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">E41210089</span>
        </div>
    </div>
@endsection