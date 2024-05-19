@extends('dashboard.layouts.main')

@section('container')
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <a href="/dashboard/projects/create" class="bg-sky-500 mb-3 rounded-lg text-center">Create new project</a>
                    <table class="min-w-full">
                        <thead class="bg-gray-200 border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Title
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $loop->iteration }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $post->title }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href="/dashboard/projects/{{ $post->id }}"
                                            class="bg-primary rounded-sm text-center">Read</a>
                                        <a href="/dashboard/projects/{{ $post->id }}/edit"
                                            class="bg-yellow-500 rounded-sm text-center">Edit</a>

                                        <form action="/dashboard/projects/{{ $post->id }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button class="bg-red-500 rounded-sm text-center"
                                                onclick="return confirm('Are you sure?')">Del</button>

                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
