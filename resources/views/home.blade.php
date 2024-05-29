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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
