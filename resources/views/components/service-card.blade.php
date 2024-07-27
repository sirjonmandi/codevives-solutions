@props(['url','title','price'])
<div class="h-56 w-80 md:w-full bg-gray-200 flex justify-center items-center flex-col shadow-lg bg-center bg-no-repeat text-white" style="background-image: url({{asset('./assets/w-1-jlsjY5oj.png')}});">
    <h1 class="capitalize text-3xl">{{$title}}</h1>
    <h2 class="capitalize text-2xl">$ {{$price}}</h2>
</div>
