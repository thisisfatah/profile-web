@extends('layouts.main')

@section('container')
    <section id="contact" class="pt-36 pb-32">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Kami</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptate praesentium repellendus commodi aspernatur?
                    </p>
                </div>
            </div>

            @if (session()->has('success'))
                <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
                    <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                        <div class="text-green-500" dark:text-gray-500>
                            <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div class="text-sm font-medium ml-3">Success!.</div>
                    </div>
                    <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('success') }}</div>
                    <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </div>
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST">
                @csrf
                <div class="w-full lg:w-2/3 lg:mx-auto">

                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base font-bold text-primary">Nama</label>
                        <input type="text" id="name" name="name"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md 
                focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="email" class="text-base font-bold text-primary">Email</label>
                        <input type="text" id="email" name="email"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md 
                focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                    </div>

                    <div class="w-full px-4 mb-8">
                        <label for="message" class="text-base font-bold text-primary">Pesan</label>
                        <textarea type="text" id="message" name="message"
                            class="w-full bg-slate-200 text-dark p-3 rounded-md 
                focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"></textarea>
                @error('message')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                    </div>

                    <div class="w-full px-4">
                        <button
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full
                w-full hover:shadow-lg hover:opacity-80 transition duration-500">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
