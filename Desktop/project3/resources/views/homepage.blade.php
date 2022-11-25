<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<!-- CSS only -->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.intro{
    background-repeat: no-repeat;
    background-size: cover;
    background-position: absolute;
    background-image: linear-gradient(rgb(4 9 30 / 21%), rgb(4 9 30 / 60%)), url(https://mykaleidoscope.ru/en/uploads/posts/2022-09/1663731150_1-mykaleidoscope-ru-p-food-on-a-black-background-yeda-oboi-1.jpg);
}
.container1{
  width: 60px;
  height: 60px;
  border-radius: 50px;
  background: white;
  position: relative;
  transition: 0.5s;
}
.container1 .icon{
  position: absolute;
  left: 30px;
  top: 50%;
  transform: translate(-50%, -50%);
}
.container1 .icon .search{
  font-size: 21px;
  cursor: pointer;
  color: #444;
}
.container1.active{
  width: 360px;
}
.container1 .input{
  position: relative;
  width: 300px;
  height: 60px;
  left: 60px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.container1 .input input{
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  border: black;
  font-size: 18px;
  outline: none;
}
.container1 .input clear{
  position: absolute;
  right: -25px;
  top:50%;
  transform: translate(-50%,-50%);
  cursor: pointer;
  font-size: 20px;
  color: #8888;
}
</style>
<body>
<header>

    <nav class="px-2 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="#" class="flex items-center">
              <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-10" alt="Flowbite Logo" />
              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
          </a>
          <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          
          <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul style="display: flex; align-items: center;" class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <div class="flex justify-center">
                        <div class="">
                          <div class=" input-group relative flex flex-wrap items-stretch w-full ">
                            <input class="rounded-full border-radius: 3.25rem;" type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                            <button class="rounded-full  btn inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
                              <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                </li>

              <li>
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Dashboard</a>

                @else
                @if (Route::has('register'))
                <li>
                <a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
                </li>
                @endif
                <li>
                <a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                </li>

                @endauth
                @endif
            </li>
            </ul>
    
            
          </div>
        </div>
      </nav>
    
</header>
<section class="intro" style="height: 95vh;">
    <div class="" style="padding: 5% 5% 0 5%" >
    <div id="indicators-carousel" class="relative" data-carousel="static" style="z-index: 0">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg md:h-96 max-w-full h-auto" style="height: 30rem;">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
              <h1>fsf</h1>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="carousel-caption hidden md:block absolute text-center">
                  <h5 class="text-xl">First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>  
    <div>
      <h1 class="text-white text-4xl" style=" padding: 5% 15% 5% 15%; text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero at doloribus odit, cumque nemo voluptatem saepe sed deserunt omnis ea.</h1>
    </div>
</div>
</section>

<footer class="p-4 shadow md:px-6 md:py-8 dark:bg-gray-900">
  <div class="sm:flex sm:items-center sm:justify-between">
    <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0"><img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="Flowbite Logo" />
    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span></a>
    <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
      <li>
        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
      </li>
      <li>
        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
      </li>
      <li>
        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
      </li>
      <li>
        <a href="#" class="hover:underline">Contact</a>
      </li>
    </ul>
  </div>
  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
  <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
  </span>
</footer>


<script>

</script>



</body>
</html>

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
<!-- CSS only -->
{{-- <script src="https://cdn.tailwindcss.com"></script>    <title>Document</title>
<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
</head>
<style>
.intro{
color: #fff;
}
.intro button{
padding: 0 70px 0 70px;
transition: 0.5s;
}
</style>
@extends('layouts/navigation')
@section('content') --}}
{{-- <header>
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-900">
<div class="container flex flex-wrap items-center justify-between mx-auto">

<a href="https://flowbite.com/" class="flex items-center">
<img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Logo</span>
</a>
<button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
<span class="sr-only">Open main menu</span>
<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
</button>
<div class="hidden w-full md:block md:w-auto" id="navbar-default">
<ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
<li>
<a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page">Home</a>
</li>
<li>
<a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
</li>
<li>
<a href="#" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
</li>
@if (Route::has('login'))
@auth
<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Dashboard</a>

@else
@if (Route::has('register'))
<li>
<a href="{{ route('register') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Register</a>
</li>
@endif
<li>
<a href="{{ route('login') }}" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
</li>

@endauth
@endif


</ul>
</div>
</div>
</nav>
</header> --}}
{{-- <div class="intro bg-cover bg-no-repeat bg-absolute flex justify-center items-center"
style="background-image: url(https://mykaleidoscope.ru/en/uploads/posts/2022-09/1663731150_1-mykaleidoscope-ru-p-food-on-a-black-background-yeda-oboi-1.jpg);
height: 95vh">


<div class="flex flex-col items-center text-center;" style="width: 50%;">
<h1 class="text-5xl font-normal leading-normal text-center p-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel, aspernatur?</h1>
<button class="border-2 border-red-600 hover:bg-red-600 rounded-md">
<h1 style="font-size: 32px;font-weight: 600;">More</h1>
</button>
</div>
</div>
<div class="py-12">
<div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<div class="p-6 bg-white border-b border-gray-200 bg-white-400 flex justify-center justify-items-center" style="display: flex; flex-direction: column;">

<section class="overflow-hidden text-gray-700">
<div class="container px-5 py-2 mx-auto lg:px-32">
<div class="flex flex-wrap -m-1 md:-m-2">
<div class="flex flex-wrap w-1/2">
<div class="w-1/2 p-1 md:p-2">
<a href=""><img  alt="gallery" class="block object-cover object-center w-full h-full rounded-lg
transform transition duration-500 hover:scale-105"
src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(70).webp">
</div>
<div class="w-1/2 p-1 md:p-2">
<a href=""><img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg
transform transition duration-500 hover:scale-105"
src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(72).webp"></a>
</div>
<div class="w-full p-1 md:p-2">
<a href=""><img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg
transform transition duration-500 hover:scale-105"
src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"></a>
</div>
</div>
<div class="flex flex-wrap w-1/2">
<div class="w-full p-1 md:p-2">
<a href=""><img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg
transform transition duration-500 hover:scale-105"
src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(74).webp"></a>
</div>
<div class="w-1/2 p-1 md:p-2 rounded-t-lg">
<a href=""><img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg
transform transition duration-500 hover:scale-105"
src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(75).webp"></a>
</div>
<div class="w-1/2 p-1 md:p-2 rounded-t-lg">
<a href=""><img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg
transform transition duration-500 hover:scale-105"
src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(77).webp"></a>
</div>
</div>
</div>
<div class="py-2">
<button class="bg-neutral-400 rounded-lg transform transition duration-500 hover:scale-105" style="width: 100%; height: 100px;">
<h1 style="font-size: 32px;font-weight: 600;">More</h1>
</button>
</div>
</div>
</section>
</div>
</div>
</div>

</div>

<footer class="p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
<div class="sm:flex sm:items-center sm:justify-between">
<a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
<img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="Flowbite Logo" />
<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
</a>
<ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
<li>
<a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
</li>
<li>
<a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
</li>
<li>
<a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
</li>
<li>
<a href="#" class="hover:underline">Contact</a>
</li>
</ul>
</div>
<hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
<span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
</span>
</footer>
@endsection --}}