<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/css/app.css'])
</head>
<body class="text-sm antialiased">
<header class="bg-blue-500 h-12 flex items-center">
    <div class="w-full px-4 flex justify-between items-center">
        <div class="flex items-center text-white">
            <div id="menu-dialog"></div>
            <div class="text-lg">{{ config('app.name', 'Laravel') }}</div>
        </div>
    </div>
</header>
<main class="p-4">
    <table class="w-full">
        <thead>
        <tr>
            <th class="border border-gray-300 p-2">ID</th>
            <th class="border border-gray-300 p-2">Name</th>
            <th class="border border-gray-300 p-2">Description</th>
            <th class="border border-gray-300 p-2">Price</th>
            <th class="border border-gray-300 p-2">SoldOut</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td class="border border-gray-300 p-2">{{$item['id']}}</td>
                <td class="border border-gray-300 p-2">{{$item['name']}}</td>
                <td class="border border-gray-300 p-2">{{$item['description']}}</td>
                <td class="border border-gray-300 p-2">{{$item['price']}}</td>
                <td class="border border-gray-300 p-2">{{$item['sold_out'] ? '売切' : ''}}</td>
            </tr>
        @endforeach
    </table>
</main>
</body>
</html>
