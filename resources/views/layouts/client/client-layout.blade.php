<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/client/style.css')
</head>

<body>
    <div class="drawer">

        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            <header class="sticky top-0 lg:container lg:mx-auto border-b">
                <div class="w-full navbar bg-base-100">
                    <div class="flex-none lg:hidden">
                        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1 px-2 mx-2">
                        <x-application-logo class="block h-9 w-auto" />
                    </div>
                    <div class="flex-none px-2 mx-2 lg:hidden">
                        <x-theme />
                    </div>
                    <div class="flex-none hidden lg:block">
                        <ul class="menu menu-horizontal">
                            <x-client-navigation-menu />
                        </ul>
                    </div>
                </div>
            </header>
            <!-- Page content here -->
            <main class="container mx-auto p-5">
                @yield('content')
            </main>
            <footer class="px-10 py-4 border-t bg-base-100 text-base-content border-base-300">
                <div class="hidden lg:footer container mx-auto">
                    <aside class="gap-0">
                        <small class="block mb-0 font-medium">{{ config('app.name') }}</small>
                        <small>Copyright © {{ date('Y') }} - All right reserved</small>
                    </aside>
                    <nav class="md:place-self-center md:justify-self-end">
                        <div class="grid grid-flow-col gap-4">
                            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                    </path>
                                </svg></a>
                            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                    </path>
                                </svg></a>
                            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                    </path>
                                </svg></a>
                        </div>
                    </nav>
                </div>
                <div class="footer footer-center text-base-content gap-4 lg:hidden">
                    <nav>
                        <div class="grid grid-flow-col gap-4">
                            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                    </path>
                                </svg></a>
                            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                                    </path>
                                </svg></a>
                            <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    class="fill-current">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                    </path>
                                </svg></a>
                        </div>
                    </nav>
                    <aside class="gap-0">
                        <small class="block mb-0 font-medium">{{ config('app.name') }}</small>
                        <small>Copyright © {{ date('Y') }} - All right reserved</small>
                    </aside>
                </div>

            </footer>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-72 min-h-full bg-base-200">
                <!-- Sidebar content here -->
                <x-client-navigation-menu />
            </ul>
        </div>
    </div>
    @vite(['resources/js/app.js', 'resources/js/client/dropdown.js', 'resources/js/client/layouting.js'])
</body>

</html>
