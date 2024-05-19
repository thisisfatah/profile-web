@extends('dashboard.layouts.main')

@section('container')
    <section>
        <div class="container">
            <h2 class="text-xl text-primary font-bold">{{ $post->title }}</h2>
            <a href="/dashboard/posts/" class="bg-green-500 rounded-sm text-center">Back</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bg-yellow-500 rounded-sm text-center">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                @method('delete')
                @csrf
                <button class="bg-red-500 rounded-sm text-center" onclick="return confirm('Are you sure?')">Delete</button>
            </form>

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

        </div>
    </section>
@endsection
