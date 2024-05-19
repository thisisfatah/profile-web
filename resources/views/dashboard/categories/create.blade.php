@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <h1>Welcome</h1>

        <form method="POST" action="/dashboard/categories">
            @csrf
            <div class="w-full px-4 mb-8">
                <label for="name" class="text-base font-bold text-primary">name</label>
                <input type="text" id="name" name="name"
                    class="w-full bg-slate-200 text-dark p-3 rounded-md 
        focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>

            <div class="w-full px-4 mb-8">
                <label for="slug" class="text-base font-bold text-primary">slug</label>
                <input type="text" id="slug" name="slug"
                    class="w-full bg-slate-200 text-dark p-3 rounded-md 
        focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
            </div>
            <div class="w-full px-4">
                <button
                    class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full
        w-full hover:shadow-lg hover:opacity-80 transition duration-500">Kirim</button>
            </div>
        </form>
    </div>

    <script>
        const title = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' +
                title.value).then(response => response.json()).then(data => slug.value = data
                .slug);
        });
    </script>
@endsection
