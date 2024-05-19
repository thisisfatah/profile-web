@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1>Welcome</h1>

        <form method="POST" action="/dashboard/projects/{{ $post->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="w-full px-4 mb-8">
                <label for="title" class="text-base font-bold text-primary">title</label>
                <input type="text" id="title" name="title"
                    class="w-full bg-slate-200 text-dark p-3 rounded-md 
        focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"
                    value="{{ old('title', $post->title) }}">
            </div>

            <div class="w-full px-4 mb-8">
                <label for="image">Post Image</label>
                <input type="file" id="image" name="image">
            </div>

            <div class="w-full px-4 mb-8">
                <input id="excerpt" value="{{ old('excerpt', $post->excerpt) }}" type="hidden" name="excerpt">
                <trix-editor input="excerpt"></trix-editor>
            </div>

            <div class="w-full px-4">
                <button
                    class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full
        w-full hover:shadow-lg hover:opacity-80 transition duration-500">Kirim</button>
            </div>
        </form>
    </div>
@endsection
