@extends('layouts.main')

@section('container')
    @csrf
    <section class="pt-36 pb-32 bg-slate-100">
        <div class="container">
            <div class="flex justify-center">
                <main>
                    <h1 class="text-center">Please Login</h1>
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-10">
                            <input type="name" name="name" id="name" autofocus required>
                            <label for="name">Username</label>
                        </div>
                        <div class="mb-10">
                            <input type="password" name="password" id="password">
                            <label for="password">Password</label>
                        </div>
                        <button
                            class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full
                        hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out"
                            type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-body-secondary">&copy;</p>
                    </form>
                </main>
            </div>

        </div>
    </section>
@endsection
