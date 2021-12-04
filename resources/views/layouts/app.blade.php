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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, distinctio in nisi aspernatur veniam vitae veritatis sapiente laborum beatae, architecto, assumenda esse vero consectetur quidem voluptatum. Ipsum distinctio magni nihil, explicabo minus minima expedita esse? Dolore eligendi dolores, ab tempora suscipit earum inventore? Rem incidunt fugit quia eaque iure debitis qui odit iusto, dolorem facere eius unde, atque error. Sit commodi libero nihil, earum eos iste consequatur corporis dolorem nesciunt qui recusandae enim eius mollitia deserunt molestias eum molestiae sapiente necessitatibus possimus laborum sint. Officiis quae impedit non? Provident voluptatum repellat, rerum magnam ipsam quasi illum reprehenderit odio amet tenetur?
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
