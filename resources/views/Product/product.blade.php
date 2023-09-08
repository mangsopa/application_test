<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product List</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
</head>

<body class="antialiased">
    <div class="container mx-auto mt-10">
        <div class="relative overflow-x-auto">
            <h1 class="text-4xl font-semibold mb-10">Product List</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-blue-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stock
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Brand
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Rating
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Deskripsi
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products['products'] as $key)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                <img class="rounded-lg" src="{{ $key['thumbnail'] }}" alt="product image" />
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['title'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['price'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['stock'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['brand'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['category'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['rating'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $key['description'] }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap">

                                    {{-- Show --}}
                                    <a href="{{ route('show', $key['id']) }}"
                                        class="me-3 font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            id="eye" viewBox="0 0 48 48">
                                            <path fill="none" d="M0 0h48v48H0z"></path>
                                            <path
                                                d="M24 9C14 9 5.46 15.22 2 24c3.46 8.78 12 15 22 15 10.01 0 18.54-6.22 22-15-3.46-8.78-11.99-15-22-15zm0 25c-5.52 0-10-4.48-10-10s4.48-10 10-10 10 4.48 10 10-4.48 10-10 10zm0-16c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6z">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
