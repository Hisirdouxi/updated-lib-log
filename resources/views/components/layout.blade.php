<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20">
            <div class="space-x-6 font-bold">
                <a href="/">Home</a>
            </div>

            <div class="space-x-6 font-bold">
                <button>
                    <input type="text" placeholder="Search your books">
                </button>
            </div>
            <div>Login/Signup</div>
        </nav>
        <main class="mt-10 max-w-[990px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>