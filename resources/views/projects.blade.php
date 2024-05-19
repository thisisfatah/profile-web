@extends('layouts.main')

@section('container')
    <section class="pt-36 pb-16 bg-slate-100">
        <div class="container">
            <div class="w-full p-4">
                <div class="max-w-xl mx-auto text-center">
                    <h4 class="font-semibold text-lg text-primary">Portofolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
                    <p class="font-medium text-md text-secondary md:text-lg">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Voluptatem similique numquam quisquam
                        placeat sequi ad, sapiente repellat sed autem. Ducimus!</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <div class="mb-12 p-4 md:w-1/2">
                            <div class="rounded-md shadow-md overflow-hidden">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Landing page" width="w-full">
                            </div>
                            <h3 class="font-semibold text-xl text-dark mt-5 mb-3">{{ $post->title }}</h3>
                            <div class="font-medium text-base text-secondary">
                                {!! $post->excerpt !!}
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
