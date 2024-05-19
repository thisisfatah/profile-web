<header class="bg-transparent absolute top-0 left-0 w-full flex items-center
    z-10">
    <div class="container">
        <div class="flex items-center justify-start
            relative">
            <div class="px-4">
                <a href="/"
                    class="font-extrabold text-2xl text-primary
                    block py-6">Fatahillah</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line transition duration-300 ease-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-out"></span>
                    <span class="hamburger-line transition duration-300 ease-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu"
                    class="hidden absolute py-5 bg-white 
                    shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full
                    lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/about"
                                class="text-base text-dark py-4
                                mx-8 flex group-hover:text-primary lg:mx-2 lg:text-sm {{ Request::is('about') ? 'text-primary' : '' }}">Tentang
                                Saya</a>
                        </li>
                        <li class="group">
                            <a href="/projects"
                                class="text-base text-dark py-4
                                mx-8 flex group-hover:text-primary lg:mx-2 lg:text-sm {{ Request::is('projects') ? 'text-primary' : '' }}">Portofolio</a>
                        </li>
                        <li class="group">
                            <a href="/blog"
                                class="text-base text-dark py-4
                                mx-8 flex group-hover:text-primary lg:mx-2 lg:text-sm {{ Request::is('blog') ? 'text-primary' : '' }}">Blogs</a>
                        </li>
                        <li class="group">
                            <a href="/contact"
                                class="text-base text-dark py-4
                                mx-8 flex group-hover:text-primary lg:mx-2 lg:text-sm {{ Request::is('contact') ? 'text-primary' : '' }}">Contact</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</header>
