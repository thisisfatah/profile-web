@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1>Welcome</h1>

        <form method="POST" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="w-full px-4 mb-8">
                <label for="title" class="text-base font-bold text-primary">title</label>
                <input type="text" id="title" name="title"
                    class="w-full bg-slate-200 text-dark p-3 rounded-md 
        focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>

            <div class="w-full px-4 mb-8">
                <label for="slug" class="text-base font-bold text-primary">slug</label>
                <input type="text" id="slug" name="slug"
                    class="w-full bg-slate-200 text-dark p-3 rounded-md 
        focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>

            <div class="w-full px-4 mb-8">
                <label for="category" class="text-base font-bold text-primary">Category</label>
                <select name="category_id" id="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="w-full px-4 mb-8">
                <label for="image">Post Image</label>
                <input type="file" id="image" name="image">
            </div>

            <div class="w-full px-4 mb-8">
                <input id="body" value="" type="hidden" name="body">
                <trix-editor input="body"></trix-editor>
            </div>

            <div class="w-full px-4">
                <button
                    class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full
        w-full hover:shadow-lg hover:opacity-80 transition duration-500">Kirim</button>
            </div>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' +
                title.value).then(response => response.json()).then(data => slug.value = data
                .slug);
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        const image = document.querySelector('#image');
    </script>
@endsection
