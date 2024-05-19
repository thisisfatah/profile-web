@extends('layouts.main')

@section('container')
    <section class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <h2 class="text-xl text-primary font-bold">{{ $post->title }}</h2>

            <p class="text-sm mb-3">in {{ $post->category->name }}</p>

            @if ($post->image)
                <div class="max-h-[350px] overflow-hidden">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Programming">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?programming" alt="Programming"
                    class="img-fluid rounded-lg mb-5">
            @endif

            <article class="pb-10">
                {!! $post->body !!}
            </article>

            <a href="/blog">Back to post</a>
        </div>
    </section>
@endsection
