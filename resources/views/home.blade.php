@extends('layouts.main')

@section('container')
    <section id="home" class="pt-36">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Halo Semua 👋, Saya <span
                            class="block font-bold
                    text-dark
                        text-4xl mt-1 lg:text-5xl">Muhammad
                            Fatahillah</span></h1>
                    <h2 class="font-medium text-secondary text-lg
                mb-12">Game Programmer | <span
                            class="text-dark">Web Programmer</span></h2>
                    <a href="/contact"
                        class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full
                hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Hubungi
                        Saya</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-0 lg:right-0">
                        <img src="{{ asset('img/profile/art-profile.png') }}" alt="Fatahillah" class="max-w-full mx-auto">
                        <span
                            class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 translate-y-20
                    md:scale-125">
                            <svg width="800" height="700" class="fill-inherit" viewBox="0 0 200 200"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#0ea5e9"
                                    d="M28.4,-40.4C41.2,-41.8,59.1,-43.1,65.4,-36.4C71.7,-29.7,66.3,-14.8,58.2,-4.7C50.1,5.5,39.4,11,37.4,25.2C35.4,39.3,42.2,62.1,37.5,71.3C32.7,80.6,16.3,76.2,2.7,71.6C-11,67,-22,62.1,-29.8,54.6C-37.7,47.2,-42.4,37.2,-42.9,27.6C-43.4,18.1,-39.7,9.1,-36.9,1.7C-34,-5.7,-31.9,-11.5,-31.3,-20.8C-30.6,-30.1,-31.4,-42.9,-26.5,-46.1C-21.5,-49.3,-10.7,-42.8,-1.5,-40.2C7.8,-37.6,15.6,-39,28.4,-40.4Z"
                                    transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
