<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{$headTitle}}</title>
</head>

<body class="bg-[#FFF7F1] font-serif">
    <div class="min-h-full">
        <x-navigation></x-navigation>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}} {{--$slot: views--}}
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>