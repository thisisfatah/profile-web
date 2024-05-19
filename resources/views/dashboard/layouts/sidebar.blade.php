<div id="sidebar"
    class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out"
    x-show="sidenav" @click.away="sidenav = false">
    <div class="space-y-6 md:space-y-10 mt-10">
        <h1 class="font-bold text-4xl text-center md:hidden">
            D<span class="text-teal-600">.</span>
        </h1>
        <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
            Dashboard<span class="text-teal-600">.</span>
        </h1>
        <div id="profile" class="space-y-3">
            <img src="https://images.unsplash.com/photo-1628157588553-5eeea00af15c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
                alt="Avatar user" class="w-10 md:w-16 rounded-full mx-auto" />
            <div>
                <h2 class="font-medium text-xs md:text-sm text-center text-primary">
                    {{ auth()->user()->name }}
                </h2>
                <p class="text-xs text-gray-500 text-center">Administrator</p>
            </div>
        </div>
        <div id="menu" class="flex flex-col space-y-2">
            <a href="/dashboard/projects"
                class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-primary hover:text-white 
                hover:text-base rounded-md transition duration-150 ease-in-out
                {{ Request::is('dashboard/projects*') ? 'bg-primary' : '' }}">
                <span class="">My Porto</span>
            </a>
            <a href="/dashboard/posts"
                class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-primary hover:text-white 
                hover:scale-105 rounded-md transition duration-150 ease-in-out
                {{ Request::is('dashboard/posts*') ? 'bg-primary' : '' }}">
                <span class="">My Posts</span>
            </a>
            <a href="/dashboard/categories"
                class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-primary hover:text-white 
                hover:scale-105 rounded-md transition duration-150 ease-in-out
                {{ Request::is('dashboard/categories*') ? 'bg-primary' : '' }}">
                <span class="">My Categories</span>
            </a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit"
                    class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-primary hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out">
                    <span class="">Logout</span>
                </button>
            </form>
        </div>
    </div>
</div>
