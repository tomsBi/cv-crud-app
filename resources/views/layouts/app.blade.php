<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <main class="min-h-screen bg-sky-100">
        <div class="flex items-center justify-center py-4">
            <div class="text-center">
                @if (session()->has('success'))
                    <div class="bg-green-500 text-white p-4 mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('danger'))
                    <div class="bg-red-500 text-white p-4 mb-4">
                        {{ session('danger') }}
                    </div>
                @endif
            </div>
        </div>
        @yield('content')
    </main>
</body>

</html>
