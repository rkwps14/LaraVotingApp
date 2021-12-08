<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laracasts Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm" style="background-color: #f2f2f2">
    <header> 
        <div class="flex item-center justify-between px-8 py-4">
            <a href="#">Laracasts Logo</a>
            <div class="flex item-center">
            @if (Route::has('login'))
                <div class="px-6 py-4">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a-dropdown-link>
                        </form>
                        <a href="">
                            <img src="https://en.gravatar.com/avatar/000000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </div>
    </header>
    <main class="container mx-auto flex">
        <div style="max-width:280px; margin-right:20px">
            <div class="bg-white border-2 border-blue rounded-xl mt-16">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an idea</h3>
                    <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>
                </div>
                <form action="#" method="post" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text" class="text-sm  w-full bg-gray-100 rounded-xl px-4 py-2 border-none" placeholder = "Your Idea">
                    </div>
                    <div>
                        <select name="category_add" id="category_add" class="text-sm  w-full bg-gray-100 rounded-xl px-4 py-2 border-none">
                                <option value="Category One"> Category One</option>
                                <option value="Category One"> Category One</option>
                                <option value="Category One"> Category One</option>
                                <option value="Category One"> Category One</option>
                                <option value="Category One"> Category One</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 text-sm px-4 py-2 border-none" placeholder="Describe your idea"></textarea>
                    </div>
                    <div class="flex item-center justify-between space-x-3">
                        <button type="button" class="flex item-center justify-center w-1/2 h-11 text-us bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in">
                            <svg class="mt-3 text-gray-500 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>    
                            <span class="ml-1 mt-2">Attach</span>
                        </button>
                        <button type="submit" class="flex item-center justify-center w-1/2 h-11 text-us bg-blue font-semibold rounded-xl border border-blue hover:border-blue-400 transition duration-150 ease-in">
                            <span class="ml-1 mt-2">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div style="max-width:700px">
            <nav class="flex item-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="" class="border-b-3 pb-3" style="border-color:blue">All Ideas (87)</a></li>
                    <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-3 pb-3 hover:border-blue">Considering (6)</a></li>
                    <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-3 pb-3 hover:border-blue">In Progress (1)</a></li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10" style="margin-left:20">
                    <li><a href="" class="border-b-3 pb-3 text-gray-400 transiion duration-150 ease-in hover:border-blue" style="border-color:blue">Incomplete (87)</a></li>
                    <li><a href="" class="text-gray-400 transition duration-150 ease-in border-b-3 pb-3 hover:border-blue">Closed (55)</a></li>
                </ul>
            </nav>
            <div class="mt-10">
                {{ $slot }}
            </div>
        </div>
    </main>
    </body>
</html>
