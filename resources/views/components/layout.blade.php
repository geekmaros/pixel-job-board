<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Pixel Positions</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:400.500,600&display=swap"
            rel="stylesheet"
        />
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="bg-black text-white font-sans">
        <div class="px-10 relative">
            <nav
                class="flex justify-between items-center bg-black py-4 border-b border-white/10 sticky top-0"
            >
                <div>
                    <a href="/">
                        <img
                            src="{{ asset("images/logo.svg") }}"
                            alt="Pixel Positions"
                        />
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <a href="#">Jobs</a>
                    <a href="#">Careers</a>
                    <a href="#">Salaries</a>
                    <a href="#">Companies</a>
                </div>

                @auth
                    <div class="flex items-center space-x-5">
                        <a href="/jobs/create">Post a Job</a>

                        <form method="POST" action="/logout">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="flex items-center space-x-6">
                        <a href="/login">Log In</a>
                        <a href="/register">Register</a>
                    </div>
                @endguest
            </nav>

            <main class="mt-10 max-w-[968px] mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
