@extends('layouts.main')

@section('container')
    <section id="blog" class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center">
                    <h4 class="font-semibold text-lg text-primary">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Terkini</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">
                        Ini adalah blog saya sendiri
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center mt-10">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg
        mb-10">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Programming" class="w-full">
                                @else
                                    <img src="https://source.unsplash.com/360x200?programming" alt="Programming"
                                        class="w-full">
                                @endif
                                <div class="py-8 px-6">
                                    <h3>
                                        <a href="/blog/{{ $post->slug }}"
                                            class="block mb-3 font-semibold text-xl text-dark
                    hover:text-primary truncate">{{ $post->title }}</a>
                                    </h3>
                                    <p class="font-medium text-base text-secondary mb-4">{{ $post->excerpt }}</p>
                                    <a href="/blog/{{ $post->slug }}"
                                        class="font-medium text-sm text-white bg-primary
                py-2 px-4 rounded-lg hover:opacity-80">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3 class="text-5xl text-primary font-bold">Kosong Gan</h3>
                @endif
            </div>

        </div>
    </section>
@endsection
